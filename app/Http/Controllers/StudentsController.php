<?php

namespace App\Http\Controllers;

use App\Models\Rombels;
use App\Models\Rayons;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = Students::all();

        $search = $request->input('search');
        if($search){
            $students = Students::where("name","LIKE","%".$search."%")->orderBy('name','ASC')->simplePaginate(5);
        } else {
            $students = Students::orderBy('name','ASC')->simplePaginate(5);
        }

        return view("student.index", compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rombels = Rombels::all();
        $rayons = Rayons::all();
        return view("student.create", compact("rombels","rayons"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis'=>'required',
            'name'=>'required',
            'rombel_id'=>'required',
            'rayon_id'=>'required',
        ]);

        Students::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'rombel_id' => $request->rombel_id,
            'rayon_id' => $request->rayon_id,
        ]);

        // if all data = student::create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambahkan data siswa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $students = Students::find($id);
        $rombels = Rombels::all();
        $rayons = Rayons::all();
        return view("student.edit", compact("students","rombels","rayons"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Students $students, $id)
        {
            $request->validate([
                'nis'=>'required',
                'name'=>'required',
                'rombel_id'=>'required',
                'rayon_id'=>'required',
            ]);

            Students::where('id', $id)->update([
                'nis' => $request->nis,
                'name' => $request->name,
                'rombel_id' => $request->rombel_id,
                'rayon_id' => $request->rayon_id,
            ]);

            return redirect()->route('student.home')->with('success', 'Berhasil mengubah data siswa!');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Students::where('id', $id)->delete();

        return redirect()->back()->with('deleted','Berhasil menghapus data');

    }
}
