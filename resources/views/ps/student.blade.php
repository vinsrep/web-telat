@extends('layouts.template')

@section('content')



<div class="overflow-x-auto">

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
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">NIS</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nama</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Rombel</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Rayons</th>
        </thead>

        <tbody class="divide-y divide-gray-200">
            @php $no = 1; @endphp
            @foreach ($students as $item)
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$no++}}</td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$item['nis']}}</td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$item['name']}}</td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$item['rombel_id']}}</td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$item['rayon_id']}}</td>

                </td>
            </tr>
            @endforeach
    </tbody>
    </table>
  </div>

@endsection
