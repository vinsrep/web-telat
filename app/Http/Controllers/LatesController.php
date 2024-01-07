<?php

namespace App\Http\Controllers;

use App\Exports\LateExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Rayons;
use App\Models\Students;
use App\Models\Lates;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LatesController extends Controller
{

    public function pdf($id)
    {
        $rayons = Rayons::where('id', $id)->get();
        $students = Students::where('id', $id)->get();
        return view("late.pdf", compact("students","rayons"));
    }
    public function downloadPDF($id){
        $students = Students::where('id', $id)->get()->toArray();
        $rayons = Rayons::where('id', $id)->get();
        $lates = Lates::all();
        view()->share('$students', $students);
        $pdf = Pdf::loadView('late.download', $students);
        return view("late.pdf", compact("lates","students","rayons")).$pdf->download('surat.pdf');
    }
    public function index()
    {
        $students = Students::all();
        $lates = Lates::all();
        return view("late.index", compact("lates","students"));
    }


    public function rekap()
    {

        $students = Students::all();
        $lates = Lates::all();
        $rekap = $lates->unique("id");
        $rekap->values()->all();
        return view("late.rekap", compact("lates","students","rekap"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Students::all();
        return view("late.create", compact("students"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "id" => 'required',
            "date_time_late" => 'required',
            "information" => 'required',
            "bukti" => 'required',
        ]);
        $extension = $request->id.'.'.$request->bukti->extension();
        Lates::create([
            'id'=> $request->id,
            'date_time_late'=> date('y-m-d h:m:s', strtotime($request->date_time_late)),
            'information'=> $request->information,
            'bukti' => $request->file('bukti')->storeAs('public/buktis', $extension)
        ]);

        // if all data = late::create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambahkan ketelatan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(lates $lates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $lates = Lates::find($id);
        $students = Students::all();
        return view("late.edit", compact("lates","students"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lates $lates, $id)
        {
            $request->validate([
                "date_time_late" => 'required',
                "information" => 'required',
            ]);
            $extension = $request->id.'.'.$request->bukti->extension();

            if ($request->bukti == '') {
                Lates::where('id', $id)->update([
                    'date_time_late'=> date('d-m-y h:m:s', strtotime($request->date_time_late)),
                    'information'=> $request->information,
                ]);
             }

             else {
                Lates::where('id', $id)->update([
                    'date_time_late'=> date('d-m-y h:m:s', strtotime($request->date_time_late)),
                    'information'=> $request->information,
                    'bukti' => $request->file('bukti')->storeAs('public/buktis', $extension)
                ]);
             }

            return redirect()->route('late.home')->with('success', 'Berhasil mengubah ketelatan!');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Lates::where('id', $id)->delete();

        return redirect()->back()->with('deleted','Berhasil menghapus ketelatan!');

    }

    public function data($id)
    {
        $students = Students::where('id', $id)->get();
        $name = $students->unique("id");
        $name->values()->all();
        $lates = Lates::where('id', $id)->get();
        return view("late.data", compact("lates","students","name"));
    }
    public function exportExcel(){
        $file_name = 'data_telat' . '.xlsx';
        return Excel::download(new LateExport, $file_name);
    }
}
