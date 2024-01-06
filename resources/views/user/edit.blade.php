@extends('layouts.template')

@section('content')

<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg">
      <form action="{{route('user.update', $users['id'])}}" method="POST" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
        @csrf
        @method('PATCH')
        @if ($errors->any())
           <ul class="alert alert-danger">
               @foreach ($errors->all() as $error)
                   <li> {{$error}} </li>
               @endforeach
           </ul>
        @endif
        <p class="text-center text-lg font-medium">Data Users</p>

        <div>
            <div class="relative">
              <input
                type="text"
                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                value="{{$users['name']}}"
                id="name"
                name="name"
              />
            </div>
          </div>
          <div>
            <div class="relative">
              <input
                type="email"
                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                value="{{$users['email']}}"
                id="email"
                name="email"
              />
            </div>
          </div>
          <div>
            <div class="relative">
              <select name="role" id="role" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm">
                    <option selected hidden disabled class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">{{$users['role']}}</option>
                    <option value="admin" class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">Administrator</option>
                    <option value="pembimbing" class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">Pembimbing Siswa</option>
              </select>
            </div>
          </div>
          <div>
            <div class="relative">
              <input
              type="password"
              class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
              placeholder="Password baru"
              id="password"
              name="password"
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
