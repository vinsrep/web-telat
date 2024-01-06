@extends('layouts.template')

@section('content')
@php $no = 1; @endphp
<div class="overflow-hidden">
    <div class="grid grid-cols-1 gap-0 lg:grid-cols-3 lg:gap-2">
        @foreach($lates as $item)
        <div class="mt-10 ml-10 block rounded-lg">
            <div class="mt-2 w-80 h-80 rounded-md bg-gray-100 text-gray-600">
                <dl>
                    <div class="mt-10 ml-5 pt-4">
                        <dd class="font-medium">Keterlambatan ke-{{$no++}}</dd>
                    </div>
                </dl>

                <div class="mt-3 ml-5 flex items-center gap-8 text-xs">
                    <div class="mb-4 sm:mt-0">
                        <p class="text-gray-500">{{$item['date_time_late']}}</p>

                        <p class="font-medium">{{$item['information']}}</p>
                    </div>
                </div>
                <img
                alt="Home"
                src="{{ asset('storage/buktis/'. $item['id'].'.jpg') }}"
                lass="h-56 w-full object-cover rounded-b-md"
                />
            </div>
        </div>
        @endforeach
      </div>
</div>
@endsection
