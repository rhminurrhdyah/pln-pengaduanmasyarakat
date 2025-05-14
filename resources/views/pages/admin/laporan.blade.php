@extends('layouts.admin')

@section('title')
Laporan
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto">
    <div class="flex items-center justify-between my-6">
      <h2 class="text-2xl font-semibold text-blue-800">Daftar Laporan Pengaduan</h2>
      <a href="{{ url('admin/laporan/cetak')}}" 
         class="flex items-center px-5 py-3 font-medium text-white transition-colors duration-150 bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
        </svg>
        Export PDF
      </a>
    </div>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        @if ($errors->any())
        <div class="p-4 mb-4 text-red-800 bg-red-100 rounded-lg">
          <ul class="list-disc list-inside">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <table class="w-full whitespace-nowrap">
          <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-blue-900 uppercase border-b border-blue-100 bg-blue-50">
              <th class="px-6 py-4">No</th>
              <th class="px-6 py-4">NIK</th>
              <th class="px-6 py-4">Nama</th>
              <th class="px-6 py-4">Pengaduan</th>
              <th class="px-6 py-4">Tanggal</th>
              <th class="px-6 py-4">Status</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-blue-100">
            @forelse ($pengaduan as $item)
            <tr class="text-gray-700 hover:bg-blue-50 transition-colors duration-150">
              <td class="px-6 py-4 text-sm font-medium text-blue-800">
                {{ $item->id }}
              </td>
              <td class="px-6 py-4 text-sm text-blue-700">
                {{ $item->user_nik }}
              </td>
              <td class="px-6 py-4 text-sm text-blue-700">
                {{ $item->name }}
              </td>
              <td class="px-6 py-4 text-sm text-blue-700 max-w-xs">
                <div class="truncate" style="max-width: 300px;" title="{{ $item->description }}">
                  {{ $item->description }}
                </div>
              </td>
              <td class="px-6 py-4 text-sm text-blue-700">
                {{ $item->created_at->format('d M Y') }}
              </td>
              <td class="px-6 py-4 text-sm">
                @if($item->status == 'Belum di Proses')
                <span class="px-3 py-1 text-sm font-semibold text-red-800 bg-red-100 rounded-full">
                  {{ $item->status }}
                </span>
                @elseif ($item->status == 'Sedang di Proses')
                <span class="px-3 py-1 text-sm font-semibold text-orange-800 bg-orange-100 rounded-full">
                  {{ $item->status }}
                </span>
                @else
                <span class="px-3 py-1 text-sm font-semibold text-green-800 bg-green-100 rounded-full">
                  {{ $item->status }}
                </span>
                @endif
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="6" class="px-6 py-4 text-center text-blue-500">
                Tidak ada data laporan
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