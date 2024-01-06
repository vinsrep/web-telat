<?php

namespace App\Http\Controllers;

use App\Models\Rombels;
use App\Models\Rayons;
use App\Models\Students;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // public function count(){
    //     $countsiswa = Students::count([
    //         'nis'
    //     ]);
    //     $countrombel = Rombels::count([
    //         'rombel'
    //     ]);
    //     $countrayon = Rayons::count([
    //         'rayon'
    //     ]);
    //     $countuser = User::count([
    //         'role'=>'pembimbing'
    //     ]);
    //     $countadmin = User::count([
    //         'role'=> 'admin'
    //     ]);

    //     return view('home.page', compact('countsiswa','countrombel','countrayon','countuser', 'countadmin'));
    // }

}
