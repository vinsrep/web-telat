<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <title>Data Siswa</title>
    </head>
<body>

<div class="relative block overflow-hidden p-4 sm:p-6 lg:p-8">
      <main
        class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
      >
        <div class="max-w-xl lg:max-w-3xl">
          <a class="block text-blue-600" href="/">
            <span class="sr-only">Login</span>
            <img class="w-20 h-20 justify-start" src="https://smkwikrama.sch.id/assets2/wikrama-logo.png" alt="Wikrama">
          </a>

          <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
            Rekaman Keterlambatan dan Data Siswa
          </h1>

          <p class="mt-4 leading-relaxed text-gray-500">
            Manajemen data siswa dan keterlambatan.
            Diperuntukan untuk Pembimbing Siswa dan Administrator.
          </p>

          <form action="{{ route('login.auth') }}" method="POST" class="mt-8  grid grid-cols-6 gap-6">
            @csrf
            @if (Session::get('failed'))
                <div class="alert alert-danger w-max">{{Session::get('failed')}}</div>
            @endif
            @if (Session::get('logout'))
                <div class="alert alert-primary w-max">{{Session::get('logout')}}</div>
            @endif
            @if (Session::get('canAccess'))
                <div class="alert alert-danger w-max">{{ Session::get('canAccess') }}</div>
            @endif

            <div class="col-span-6">
              <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>

              <input
                type="email"
                id="email"
                name="email"
                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
              />
              @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-span-6 sm:col-span-3">
              <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>

              <input
                type="password"
                id="password"
                name="password"
                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
              />
              @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
              <button type="submit"
                class="inline-block shrink-0 rounded-md border border-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500" style="background-color: #1F3984"
              >
                Login
              </button>
            </div>
          </form>
        </div>
      </main>
</div>


