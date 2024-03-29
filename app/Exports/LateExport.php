<?php

namespace App\Exports;

use App\Models\Lates;
use App\Models\Students;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class LateExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Students::all();

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
