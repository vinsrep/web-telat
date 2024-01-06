@extends('layouts.template')

@section('content')

<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg">
      <form action="{{route('student.store')}}" method="POST" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
        @csrf
        @if (Session::get('success'))
           <div class="alert alert-success"> {{Session::get('success') }} </div>
        @endif
        @if ($errors->any())
           <ul class="alert alert-danger">
               @foreach ($errors->all() as $error)
                   <li> {{$error}} </li>
               @endforeach
           </ul>
        @endif
        <p class="text-center text-lg font-medium">Data Peserta Didik</p>

        <div>
          <div class="relative">
            <input
              type="text"
              class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
              placeholder="Masukkan NIS"
              id="nis"
              name="nis"
            />
          </div>
        </div>
        <div>
          <div class="relative">
            <input
              type="text"
              class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
              placeholder="Masukkan Nama"
              id="name"
              name="name"
            />
          </div>
        </div>
        <div>
            <div class="relative">
                <select name="rombel_id" id="rombel_id" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm">
                    <option selected hidden disabled>Rombel</option>
                    @foreach ($rombels as $item)
                        <option class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" value="{{ $item['rombel'] }}">{{ $item['rombel'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div>
          <div class="relative">
            <select name="rayon_id" id="rayon_id" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm">
                <option selected hidden disabled>Rayon</option>
                @foreach ($rayons as $item)
                    <option class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" value="{{ $item['rayon'] }}">{{ $item['rayon'] }}</option>
                @endforeach
            </select>
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
