@extends('layouts.template')

@section('content')

<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg">
      <form action="{{route('late.update', $lates['id'])}}" method="POST" enctype="multipart/form-data" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
        @csrf
        @method('PATCH')
        @if ($errors->any())
           <ul class="alert alert-danger">
               @foreach ($errors->all() as $error)
                   <li> {{$error}} </li>
               @endforeach
           </ul>
        @endif
        <p class="text-center text-lg font-medium">Data Ketelatan</p>

        <div>
            <div class="relative">
                <select name="id" id="id" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm">
                    <option selected hidden disabled>Siswa</option>
                    @foreach ($students as $item)
                        <option class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div>
          <div class="relative">
            <input
              type="datetime-local"
              class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
              value="{{$lates['date_time_late']}}"
              id="date_time_late"
              name="date_time_late"
            />
          </div>
        </div>
        <div>
          <div class="relative">
            <input
              type="text"
              class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
              value="{{$lates['information']}}"
              id="information"
              name="information"
            />
          </div>
        </div>
        <div>
          <div class="relative">
              <label class="w-full rounded-lg p-4 pe-12 text-sm"
              for="bukti">Bukti: {{$lates['bukti']}}</label>
            <input
              type="file"
              class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
              id="bukti"
              name="bukti"
            />
          </div>
        </div>
        <button
          type="submit"
          class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
          Submit
        </button>
      </form>
    </div>
  </div>

@endsection
