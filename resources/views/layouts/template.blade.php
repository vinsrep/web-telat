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





    <div class="float-left flex w-80 h-screen flex-col justify-between border-e bg-white">
        <div class="px-4 py-6">
          <span class="grid h-10 w-68 place-content-center rounded-lg bg-gray-100 text-xs text-gray-600">
            <h3 class="mb-1 text-lg font-medium sm:text-xl">
                <p> Rekam Keterlambatan </p>
            </h3>
          </span>

          <ul class="mt-6 space-y-1">
            <li>
              <a href="{{route('home.page')}}" class="block rounded-lg px-4 py-2 text-sm font-medium hover:bg-gray-100 hover:text-gray-700 text-gray-500">
                Dashboard
              </a>
            </li>
            @if (Auth::check())
            @if (Auth::user()->role == "admin")

            <li>
              <details class="group [&_summary::-webkit-details-marker]:hidden">
                <summary
                  class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2  hover:bg-gray-100 hover:text-gray-700"
                >
                  <span class="text-sm font-medium"> Data Master </span>

                  <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </span>
                </summary>

                <ul class="mt-2 space-y-1 px-4">
                  <li>
                    <a
                      href="{{ route('rombel.home') }}"
                      class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                    >
                      Data Rombel
                    </a>
                  </li>

                  <li>
                    <a
                      href="{{ route('rayon.home') }}"
                      class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                    >
                      Data Rayon
                    </a>
                  </li>
                  <li>
                    <a
                    {{-- route('student.create') --}}
                      href="{{ route('student.home') }}"
                      class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                    >
                      Data Siswa
                    </a>
                  </li>
                  <li>
                    <a
                      href="{{route ('user.home')}}"
                      class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                    >
                      Data User
                    </a>
                  </li>
                </ul>
              </details>
            </li>

            <li>
              <a
                href="{{route('late.home')}}"
                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
              >
                Data Keterlambatan
              </a>
            </li>
            @endif
            @if (Auth::user()->role == "pembimbing")
            <li>
                <a
                {{-- route('student.create') --}}
                  href="{{ route('ps.student.index') }}"
                  class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                >
                  Data Siswa
                </a>
              </li>
            <li>
                <a
                href="{{route('ps.home')}}"
                  class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                >
                  Data Keterlambatan
                </a>
              </li>
            @endif
            @endif
            <li>
              <details class="group [&_summary::-webkit-details-marker]:hidden">
                <summary
                  class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                >
                  <span class="text-sm font-medium"> Account </span>

                  <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </span>
                </summary>

                <ul class="mt-2 space-y-1 px-4">

                  <li>
                    @if (Auth::check())
                    <form action="/logout">
                      <button
                        type="submit"
                        class="bg-red-400 text-white w-full rounded-lg px-4 py-2 text-sm font-medium [text-align:_inherit] hover:bg-gray-100 hover:text-gray-700"
                      >
                        <a href="{{route('logout')}}">Logout</a>
                      </button>
                    </form>
                    @endif
                  </li>
                </ul>
              </details>
            </li>
          </ul>
        </div>

        <div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
          <a href="#" class="flex items-center gap-2 bg-white p-4 hover:bg-gray-50">
            <img
              alt="Man"
              src="https://smkwikrama.sch.id/assets2/wikrama-logo.png"
              class="h-10 w-10 rounded-full object-cover"
            />

            <div>
              <p class="text-xs">
                <strong class="block font-medium">SMK Wikrama Bogor</strong>

                <span> Vocational High School </span>
              </p>
            </div>
          </a>
        </div>
      </div>

      <header class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl py-8 sm:px-6 lg:px-8">
          <div class="flex items-center justify-end gap-4">
            <div class="flex items-center">
              <div class="relative">
                <h3 class="mb-1 text-lg font-medium sm:text-xl">
                    <p> {{ Auth::user()->name }} </p>
                </h3>
                </div>
            </div>

            <span aria-hidden="true" class="block h-6 w-px rounded-full bg-gray-200"></span>

            <a href="#" class="block shrink-0">
              <span class="sr-only">Profile</span>
              <img
                alt="Man"
                src="https://th.bing.com/th/id/R.aee6adef085a77dfa4708f3fd4a1ffb5?rik=nj%2buNqgLIJU0JQ&pid=ImgRaw&r=0"
                class="h-10 w-10 rounded-full object-cover"
              />
            </a>
          </div>
      </header>
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@stack('script')
</body>
</html>
