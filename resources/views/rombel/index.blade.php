@extends('layouts.template')

@section('content')


<div class="overflow-x-auto">
    @if(Session::get('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::get('deleted'))
        <div class="alert alert-warning">{{Session::get('deleted')}}</div>
    @endif
    <span class="my-12 inline-flex -space-x-px overflow-hidden rounded-md border bg-white shadow-sm">
        <button
            class="inline-block border-e px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative"
        >
            <a href="{{route('rombel.create')}}">Tambah</a>
        </button>
      </span>
    <table class="border border-gray-200 min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
        <thead>
            <tr>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">No</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Rombel</th>
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
