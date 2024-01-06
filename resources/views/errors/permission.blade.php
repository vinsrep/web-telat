<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>404</title>
</head>
<body>
    <div class="grid h-screen place-content-center bg-white px-4">
        <div class="text-center">
          <h1 class="text-9xl font-black text-gray-200">404</h1>

          <p class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">Uh-oh!</p>

          <p class="mt-4 text-gray-500">Anda tidak diizinkan mengakses halaman ini.</p>
             @if (Auth::user()->role == 'admin')
                <a
                    href="{{route('home.page')}}"
                    class="mt-6 inline-block rounded bg-indigo-600 px-5 py-3 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring"
                >
                Kembali
            @else
                <a
                {{-- pemb.home, lanjutin dari sini! kemaren: jam stgah 3 tidur --}}
                    href="{{route('home.page')}}"
                    class="mt-6 inline-block rounded bg-indigo-600 px-5 py-3 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring"
                >
                Kembali
            @endif

          </a>
        </div>
      </div>
</body>
</html>


