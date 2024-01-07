<?php

namespace App\Exports;

use App\Models\Lates;
use App\Models\Students;
use App\Models\User;
use App\Models\Rayons;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class PSExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */


    public function collection()
    {
    $shit = User::where('id', '=', Auth::id())->get('name');
    $shit2 = str_replace(['[{"name":"','"}]'], '', $shit);
    $rayon = Rayons::where('user_id', '=', $shit2)->get('rayon');
    $rayon2 = str_replace(['[{"rayon":"','"}]'], '', $rayon);
        return Students::where('rayon_id','=',$rayon2)->get();
    }
    public function headings(): array
    {
        return [
            'NIS',
            'Nama',
            'Rayon',
            'Rombel',
            'Total Keterlambatan',
        ];
    }

    Public function map($item) : array
    {
        $jumlah = '';
        $id = Students::where('id', $item->id)->get()->toArray();
        foreach($id as $name){
            $jumlah = Lates::where('id', '=', $name)->count();
        }

        return [
            $item->nis,
            $item->name,
            $item->rayon_id,
            $item->rombel_id,
            $jumlah,
    ];
    }

}
