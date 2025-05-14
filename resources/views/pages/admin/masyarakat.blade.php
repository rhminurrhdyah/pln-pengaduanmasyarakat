@extends('layouts.admin')

@section('title')
Data Masyarakat
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-blue-800">
      Data Masyarakat
    </h2>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        @if ($errors->any())
        <div class="p-3 mb-4 bg-red-100 text-red-700 rounded-lg">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
          </ul>
        </div>
        @endif
        
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-blue-900 uppercase border-b border-blue-100 bg-blue-50">
              <th class="px-6 py-4">Nama</th>
              <th class="px-6 py-4">NIK</th>
              <th class="px-6 py-4">No. Hp</th>
              <th class="px-6 py-4">Email</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-blue-100">
            @forelse ($data as $masyarakat)
            <tr class="text-gray-700 hover:bg-blue-50 transition-colors duration-150">
              <td class="px-6 py-4 text-sm font-medium text-blue-800">
                {{ $masyarakat->name }}
              </td>
              <td class="px-6 py-4 text-sm text-blue-700">
                {{ $masyarakat->nik }}
              </td>
              <td class="px-6 py-4 text-sm text-blue-700">
                {{ $masyarakat->phone }}
              </td>
              <td class="px-6 py-4 text-sm text-blue-700">
                {{ $masyarakat->email }}
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="4" class="px-6 py-4 text-center text-blue-500">
                Data Kosong
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
@endsection