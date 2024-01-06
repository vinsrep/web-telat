<?php

namespace App\Http\Controllers;

use App\Models\Rombels;
use App\Models\Rayons;
use App\Models\Students;
use App\Models\User;
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
        $students = Students::all();
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
        $students = Students::all();
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
        $students = Students::all();
        $rombels = Rombels::all();
        return view("ps.student", compact("students","rombels"));
    }

}
