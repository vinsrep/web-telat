@extends('layouts.template')

@section('content')

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



<div class="grid grid-cols-1 gap-2 lg:grid-cols-3 lg:gap-8">
    <article class="ml-10 mt-12 w-80 rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8">
        <div class="flex items-start sm:gap-8">
            <div
            class=" hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500"
            aria-hidden="true"
            >
            <div class="flex items-center gap-1">
                <svg
                    class="h-6 w-6"
                    fill="#6366F1"
                >
                    <path
                    fill-rule="evenodd"
                    d="M22.68 7.205h-3.776a.263.263 0 0 1-.223-.403l1.666-2.664a.897.897 0 0 0-.76-1.372H4.092c-.54 0-1.04.29-1.31.758C2.09 4.734.758 7.054.23 7.974a1.688 1.688 0 0 0-.223.839L0 15.77a1.499 1.499 0 0 0 1.499 1.5h4.78a.082.082 0 0 1 .067.127l-1.648 2.43a.9.9 0 0 0 .745 1.406h14.542a2.07 2.07 0 0 0 1.81-1.068c.465-.842 1.201-2.008 1.656-2.831.36-.653.549-1.387.549-2.133V8.526c0-.73-.591-1.32-1.32-1.32zm-18.65-1.9a1.43 1.43 0 0 1 1.43-1.43h13.278a.339.339 0 0 1 .284.525l-1.744 2.67a.299.299 0 0 1-.25.135H9.363c-.514 0-.993.26-1.274.69-.833 1.278-2.342 3.882-2.347 3.923h-.187a1.456 1.456 0 0 1-1.526-1.455V5.306zM2.255 16.35a.521.521 0 0 1-.41-.843l1.606-2.055a1.664 1.664 0 0 1 1.308-.64l14.028-.049a.321.321 0 0 1 .275.49l-1.233 2.015c-.194.316-.538.51-.91.51H7.854a1 1 0 0 0-.905.572H2.256zm19.934 1.113c-.366.635-.975 1.532-1.33 2.15-.25.433-.71.7-1.21.7H6.075a.27.27 0 0 1-.221-.425l1.968-2.793a.936.936 0 0 1 .765-.396h13.16a.51.51 0 0 1 .442.764zm.795-2.451a.766.766 0 0 1-.766.765h-2.631a.49.49 0 0 1-.416-.75l1.086-1.746a.968.968 0 0 0-.822-1.48H7.782a.389.389 0 0 1-.329-.597c.43-.675.936-1.767 1.371-2.452a1.346 1.346 0 0 1 1.136-.624h12.274a.75.75 0 0 1 .75.75v6.134z"                        clip-rule="evenodd"
                    />
                </svg>
            </div>
            </div>

            <div>
            <strong
                class="rounded border border-indigo-500 bg-indigo-500 px-3 py-1.5 text-[10px] font-medium text-white"
            >
                Peserta Didik
            </strong>

            <h3 class="mt-4 text-lg font-medium sm:text-xl">
                <a href="" class="hover:underline"> {{App\Models\Students::count()}} </a>
            </h3>
            </div>
        </div>
        </article>
    <article class="ml-10 mt-12 w-80 rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8">
        <div class="flex items-start sm:gap-8">
            <div
            class=" hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500"
            aria-hidden="true"
            >
            <div class="flex items-center gap-1">
                <svg
                    class="h-6 w-6"
                    fill="#6366F1"
                >
                    <path
                    fill-rule="evenodd"
                    d="M5.463 3.476C6.69 5.225 7.497 7.399 7.68 9.798a12.9 12.9 0 0 1-.672 5.254 4.29 4.29 0 0 1 2.969-1.523c.05-.004.099-.006.148-.008.08-.491.47-3.45-.977-6.68-1.068-2.386-3-3.16-3.685-3.365Zm1.777.037s2.406 1.066 3.326 5.547c.607 2.955.049 4.836-.402 5.773a7.347 7.347 0 0 1 4.506-1.994c.86-.065 1.695.02 2.482.233-.1-.741-.593-3.414-2.732-5.92-3.263-3.823-7.18-3.64-7.18-3.64Zm14.817 9.701-17.92 3.049a2.284 2.284 0 0 1 1.535 2.254 2.31 2.31 0 0 1-.106.61c.055-.027 2.689-1.275 6.342-2.034 3.238-.673 5.723-.36 6.285-.273a6.46 6.46 0 0 1 3.864-3.606zm-6.213 4.078c-2.318 0-4.641.495-6.614 1.166-2.868.976-2.951 1.348-5.55 1.043C1.844 19.286 0 18.386 0 18.386s2.406 1.97 4.914 2.127c1.986.125 3.505-.822 5.315-1.414 2.661-.871 4.511-.97 6.253-.975C19.361 18.116 24 19.353 24 19.353s-2.11-1.044-5.033-1.72a13.885 13.885 0 0 0-3.123-.34Z"                    />
                </svg>
            </div>
            </div>

            <div>
            <strong
                class="rounded border border-indigo-500 bg-indigo-500 px-3 py-1.5 text-[10px] font-medium text-white"
            >
                Administrator
            </strong>

            <h3 class="mt-4 text-lg font-medium sm:text-xl">
                <a href="" class="hover:underline"> {{App\Models\User::where('role', '=', 'admin')->count()}} </a>
            </h3>
            </div>
        </div>
        </article>
    <article class="ml-10 mt-12 w-80 rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8">
        <div class="flex items-start sm:gap-8">
            <div
            class=" hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500"
            aria-hidden="true"
            >
            <div class="flex items-center gap-1">
                <svg
                    class="h-6 w-6"
                    fill="#6366F1"
                >
                    <path
                    fill-rule="evenodd"
                    d="M18.7538 10.5176c0 .6251-2.2379 1.1483-5.2381 1.2812l.0028.0007c-.0848.0064-.5233.0325-1.5012.0325-.7778 0-1.33-.0233-1.5237-.0325-3.0059-.1322-5.2495-.6555-5.2495-1.2819s2.2436-1.149 5.2495-1.2834v2.0442c.1965.0142.7594.0474 1.5372.0474.9334 0 1.4008-.0389 1.4849-.0466V9.2356c2.9994.1337 5.2381.657 5.2381 1.282zm5.19.5466L12.1248 22.389a.1803.1803 0 0 1-.2496 0L.0562 11.0635a.1781.1781 0 0 1-.0382-.2079l4.3762-9.1921a.1767.1767 0 0 1 .1626-.1026h14.8878a.1768.1768 0 0 1 .1612.1032l4.3762 9.1922a.1782.1782 0 0 1-.0382.2079zm-4.478-.4038c0-.8068-2.5515-1.4799-5.9473-1.6369V7.195h4.186V4.4055H6.3076V7.195h4.1852v1.8286c-3.4018.1562-5.9601.83-5.9601 1.6376 0 .8075 2.5583 1.4806 5.9601 1.6376v5.8618h3.025v-5.8639c3.394-.1563 5.948-.8295 5.948-1.6363z"/>

                </svg>
            </div>
            </div>

            <div>
            <strong
                class="rounded border border-indigo-500 bg-indigo-500 px-3 py-1.5 text-[10px] font-medium text-white"
            >
                Pembimbing Siswa
            </strong>

            <h3 class="mt-4 text-lg font-medium sm:text-xl">
                <a href="" class="hover:underline"> {{App\Models\User::where('role', '=', 'pembimbing')->count()}} </a>
            </h3>
            </div>
        </div>
        </article>
    <article class="ml-10 mt-12 w-80 rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8">
        <div class="flex items-start sm:gap-8">
            <div
            class=" hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500"
            aria-hidden="true"
            >
            <div class="flex items-center gap-1">
                <svg
                    class="h-6 w-6"
                    fill="#6366F1"
                >
                    <path
                    fill-rule="evenodd"
                    d="M.3013 17.6146c-.1299-.3387-.5228-1.5119-.1337-2.4314l9.8273 5.6738a.329.329 0 0 0 .3299 0L24 12.9616v2.3542l-13.8401 7.9906-9.8586-5.6918zM.1911 8.9628c-.2882.8769.0149 2.0581.1236 2.4261l9.8452 5.6841L24 9.0823V6.7275L10.3248 14.623a.329.329 0 0 1-.3299 0L.1911 8.9628zm13.1698-1.9361c-.1819.1113-.4394.0015-.4852-.2064l-.2805-1.1336-2.1254-.1752a.33.33 0 0 1-.1378-.6145l5.5782-3.2207-1.7021-.9826L.6979 8.4935l9.462 5.463 13.5104-7.8004-4.401-2.5407-5.9084 3.4113zm-.1821-1.7286.2321.938 5.1984-3.0014-2.0395-1.1775-4.994 2.8834 1.3099.108a.3302.3302 0 0 1 .2931.2495zM24 9.845l-13.6752 7.8954a.329.329 0 0 1-.3299 0L.1678 12.0667c-.3891.919.003 2.0914.1332 2.4311l9.8589 5.692L24 12.1993V9.845z"/>                </svg>
            </div>
            </div>

            <div>
            <strong
                class="rounded border border-indigo-500 bg-indigo-500 px-3 py-1.5 text-[10px] font-medium text-white"
            >
                Rombel
            </strong>

            <h3 class="mt-4 text-lg font-medium sm:text-xl">
                <a href="" class="hover:underline"> {{App\Models\Rombels::count()}} </a>
            </h3>
            </div>
        </div>
        </article>
    <article class="ml-10 mt-12 w-80 rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8">
        <div class="flex items-start sm:gap-8">
            <div
            class=" hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500"
            aria-hidden="true"
            >
            <div class="flex items-center gap-1">
                <svg
                    class="h-6 w-6"
                    fill="#6366F1"
                >
                    <path
                    fill-rule="evenodd"
                    d="M.3013 17.6146c-.1299-.3387-.5228-1.5119-.1337-2.4314l9.8273 5.6738a.329.329 0 0 0 .3299 0L24 12.9616v2.3542l-13.8401 7.9906-9.8586-5.6918zM.1911 8.9628c-.2882.8769.0149 2.0581.1236 2.4261l9.8452 5.6841L24 9.0823V6.7275L10.3248 14.623a.329.329 0 0 1-.3299 0L.1911 8.9628zm13.1698-1.9361c-.1819.1113-.4394.0015-.4852-.2064l-.2805-1.1336-2.1254-.1752a.33.33 0 0 1-.1378-.6145l5.5782-3.2207-1.7021-.9826L.6979 8.4935l9.462 5.463 13.5104-7.8004-4.401-2.5407-5.9084 3.4113zm-.1821-1.7286.2321.938 5.1984-3.0014-2.0395-1.1775-4.994 2.8834 1.3099.108a.3302.3302 0 0 1 .2931.2495zM24 9.845l-13.6752 7.8954a.329.329 0 0 1-.3299 0L.1678 12.0667c-.3891.919.003 2.0914.1332 2.4311l9.8589 5.692L24 12.1993V9.845z"                    />
                </svg>
            </div>
            </div>

            <div>
            <strong
                class="rounded border border-indigo-500 bg-indigo-500 px-3 py-1.5 text-[10px] font-medium text-white"
            >
                Rayon
            </strong>

            <h3 class="mt-4 text-lg font-medium sm:text-xl">
                <a href="" class="hover:underline"> {{App\Models\Rayons::count()}} </a>
            </h3>
            </div>
        </div>
        </article>
</div>


@endsection
