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
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Jumlah Keterlambatan</th>
            <div class="mx-auto pt-8 sm:px-6 lg:px-8">
            </div
            <th class="px-4 py-2"></th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            @php $no = 1; @endphp
            @foreach ($rekap as $item)
            @foreach ($students->where('id', $item['id']) as $name)
            <tr>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$no++}}</td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$name['nis']}}</td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$name['name']}}</td>
                {{-- jumlah ketelatan --}}
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{App\Models\Lates::where('id', '=', $name['id'])->count()}}</td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                    <span class="inline-flex -space-x-px overflow-hidden rounded-md border bg-white shadow-sm">
                        <button type="button"
                        class="inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative">
                        <a href="{{route('ps.data', $item['id'])}}">Lihat</a>
                        </button>

                        {{-- <div class="modal fade" id="warning{{ $item['id'] }}" tabindex="-1" role="dialog"
                            aria-labelledby="warning" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Keterlambatan ke-{{$no++}}</h5>
                                        <button type="button" class="close font-xl btn-close float-end bg-red-500 text-white" data-dismiss="modal" aria-label="Close">*</button>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="img max-w-sm">
                                            <img class="h-max w-max" src="{{ asset('storage/buktis/'. $item['id'].'.jpg') }}" alt="">
                                        </div>
                                        {{$item['information']}} <br>
                                        {{$item['date_time_late']}}
                                    </div>
                                </div>
                            </div>
                        </div> --}}



                        <button
                              class="inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative">
                              <a
                              href="{{route('ps.pdf', $item['id'])}}"
                              >Cetak
                            </a>
                        </button>
                      </span>
                    </td>

            </tr>
            @endforeach
            @endforeach
            </tbody>
        </table>
  </div>

@endsection
