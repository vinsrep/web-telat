<?php

namespace App\Http\Controllers;

use App\Exports\LateExport;
use App\Exports\PSExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Rombels;
use App\Models\Rayons;
use App\Models\Students;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Lates;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends BaseController
{
    public function index()
    {
        $shit = User::where('id', '=', Auth::id())->get('name');
        $shit2 = str_replace(['[{"name":"','"}]'], '', $shit);
        $rayon = Rayons::where('user_id', '=', $shit2)->get('rayon');
        $rayon2 = str_replace(['[{"rayon":"','"}]'], '', $rayon);
        $students = Students::where('rayon_id','=',$rayon2)->get();
        $lates = Lates::all();
        return view("ps.index", compact("lates","students"));
    }
    public function pdf($id)
    {
        $rayons = Rayons::where('id', $id)->get();
        $students = Students::where('id', $id)->get();
        $lates = Lates::all();
        return view("ps.pdf", compact("lates","students","rayons"));
    }
    public function rekap()
    {
        $shit = User::where('id', '=', Auth::id())->get('name');
        $shit2 = str_replace(['[{"name":"','"}]'], '', $shit);
        $rayon = Rayons::where('user_id', '=', $shit2)->get('rayon');
        $rayon2 = str_replace(['[{"rayon":"','"}]'], '', $rayon);
        $students = Students::where('rayon_id','=',$rayon2)->get();
        $lates = Lates::all();
        $rekap = $lates->unique("id");
        $rekap->values()->all();
        return view("ps.rekap", compact("lates","students","rekap"));
    }
    public function downloadPDF($id){
        $students = Students::where('id', $id)->get()->toArray();
        view()->share('$students', $students);
        $pdf = Pdf::loadView('late.download', $students);
        return $pdf->download('surat.pdf');
    }
    public function students()
    {
        $shit = User::where('id', '=', Auth::id())->get('name');
        $shit2 = str_replace(['[{"name":"','"}]'], '', $shit);
        $rayon = Rayons::where('user_id', '=', $shit2)->get('rayon');
        $rayon2 = str_replace(['[{"rayon":"','"}]'], '', $rayon);
        $students = Students::where('rayon_id','=',$rayon2)->get();
        return view("ps.student", compact("students"));
    }
    public function data($id)
    {
        $students = Students::where('id', $id)->get();
        $name = $students->unique("id");
        $name->values()->all();
        $lates = Lates::where('id', $id)->get();
        return view("ps.data", compact("lates","students","name"));
    }
    public function exportExcel(){
        $file_name = 'data_telat' . '.xlsx';
        return Excel::download(new PSExport, $file_name);
    }
}
