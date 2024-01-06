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
    // public function collection()
    // {
    //     return Order::with('user')->get();
    // }
    // // headings: nama-nama th dari file excel
    // public function headings(): array
    // {
    //     return [
    //         "Nama Pembeli", "Obat", "Total Bayar", "Kasir", "Tanggal"
    //     ];
    // }
    // // map data yg akan dimunculkan di excelnya (sama kaya foreach di blade)
    // public function map($item): array
    // {
    //     $dataObat = '';
    //     foreach ($item->medicines as $value) {
    //         // ubah object/array data dr column medicines nya menjadi string dengan hasil : Vitamin A (qty 2: Rp. 18.000),
    //         $format = $value["name_medicine"] . " (qty " . $value['qty'] . " : Rp." . number_format($value['sub_price']) . "),";
    //         $dataObat .= $format;
    //     }
    //     return [
    //         $item->name_customer,
    //         $dataObat,
    //         $item->total_price,
    //         $item->user->name,
    //         \Carbon\Carbon::parse($item->created_at)->isoFormat($item->created_at),
    //     ];
    // }

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
        // $students = Students::all();
        // $lates = Lates::all();
        // $rekap = $lates->unique("id");
        // $rekap->values()->all();
        // foreach ($rekap as $smth){
        //     foreach ($students->where('id', $smth['id']) as $name) {
        //     $jumlah = Lates::where('id', '=', $name['id'])->count();
        //     }
        // }
        return [
            $item->nis,
            $item->name,
            $item->rayon_id,
            $item->rombel_id,
            $jumlah,
    ];
    }

}
