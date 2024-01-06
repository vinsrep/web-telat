@extends('layouts.template')

@section('content')

<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg">
      <form action="{{route('rombel.store')}}" method="POST" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
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
        <p class="text-center text-lg font-medium">Data Rombel</p>

        <div>
            <div class="relative">
              <input
                type="text"
                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                placeholder="Masukkan Rombel"
                id="rombel"
                name="rombel"
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
