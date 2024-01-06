@extends('layouts.template')

@section('content')


<div class="overflow-x-auto">
    @if(Session::get('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::get('deleted'))
        <div class="alert alert-warning">{{Session::get('deleted')}}</div>
    @endif

    <table class="mt-12 border border-gray-200 min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
        <thead>
            <tr>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">No</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Rombel</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                <span class="inline-flex overflow-hidden rounded-md border bg-white shadow-sm">
                    <button
                      class="inline-block border-e px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative"
                    >
                      <a href="{{route('rombel.create')}}">Create</a>
                    </button>

                    <button
                      class="inline-block px-4 py-2 text-gray-700 hover:bg-gray-50 focus:relative"
                      title="View Orders"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"
                        />
                      </svg>
                    </button>
                  </span>
            </th>
            <th class="px-4 py-2"></th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            @php $no = 1; @endphp
            @foreach ($rombels as $item)

            <tr>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$no++}}</td>
                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$item['rombel']}}</td>
                <td class="whitespace-nowrap px-4 py-2">
                    <span class="inline-flex -space-x-px overflow-hidden rounded-md border bg-white shadow-sm">
                        <button
                          class="inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative">
                            <a
                                href="{{route('late.edit', $item['id'])}}">
                                Edit
                            </a>
                        </button>

                        <form action="{{ route('late.delete', $item['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                              type="submit"
                              class="inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative">
                              Delete
                            </button>
                        </form>
                      </span>
                </td>
            </tr>
            @endforeach
    </tbody>
    </table>
  </div>

@endsection
