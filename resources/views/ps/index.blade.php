@extends('layouts.template')

@section('content')


<div class="overflow-x-auto">
    <span class="mt-12 inline-flex -space-x-px overflow-hidden rounded-md border bg-white shadow-sm">
        <button
          class="inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative"
        >
          <a href="{{route('ps.home')}}">Keseluruhan Data</a>
        </button>

        <button
          class="inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative"
        >
          <a href="{{route('ps.rekap')}}">Rekapitulasi Data</a>
        </button>
        <button
        class="inline-block border-e px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative"
        title="View Orders"
        >
        <a href="{{route('ps.export-excel')}}">Export</a>
        </button>
        </span>
      </span>
    @if(Session::get('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::get('deleted'))
    <div class="alert alert-warning">{{Session::get('deleted')}}</div>
    @endif
    <table class="border border-gray-200 min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
        <thead>
            <tr>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">No</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Siswa</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Tanggal</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Keterangan</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
            </th>
            <div class="mx-auto pt-8 sm:px-6 lg:px-8">
            </div
            <th class="px-4 py-2"></th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            @php $no = 1; @endphp
            @foreach ($lates as $item)
            @foreach ($students->where('id', $item['id']) as $name)

            <tr>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$no++}}</td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$name['name']}}</td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$item['date_time_late']}}</td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$item['information']}}</td>
            </tr>
            @endforeach
                @endforeach
            </tbody>
        </table>
  </div>

@endsection
