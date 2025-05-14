@extends('layouts.admin')

@section('title')
Data Petugas
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <div class="flex items-center justify-between">
      <h2 class="my-6 text-2xl font-semibold text-blue-800">
        <i class="fas fa-users mr-2"></i>Data Petugas
      </h2>
      <div class="my-4 mb-6">
        <a href="{{ route('petugas.create')}}" 
          class="flex items-center px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 shadow-md hover:shadow-lg">
          <i class="fas fa-plus-circle mr-2"></i>Tambah Petugas
        </a>
      </div>
    </div>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-md">
      <div class="w-full overflow-x-auto">
        @if ($errors->any())
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">
          <div class="font-medium">Oops! Terjadi kesalahan:</div>
          <ul class="mt-1 ml-4 list-disc list-inside">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-black uppercase bg-gradient-to-r from-blue-500 to-blue-600">
              <th class="px-6 py-4">Nama</th>
              <th class="px-6 py-4">NIK</th>
              <th class="px-6 py-4">No. Hp</th>
              <th class="px-6 py-4">Email</th>
              <th class="px-6 py-4">Role</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y">
            @forelse ($data as $petugas)
            <tr class="text-gray-700 hover:bg-blue-50 transition-colors duration-150">
              <td class="px-6 py-4">
                <div class="flex items-center">
                  <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                    <i class="fas fa-user text-blue-600"></i>
                  </div>
                  <div>
                    <p class="font-medium text-blue-800">{{ $petugas->name }}</p>
                    <p class="text-xs text-blue-500">ID: {{ $petugas->id }}</p>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 text-sm">
                {{ $petugas->nik }}
              </td>
              <td class="px-6 py-4 text-sm">
                {{ $petugas->phone }}
              </td>
              <td class="px-6 py-4 text-sm">
                {{ $petugas->email }}
              </td>
              <td class="px-6 py-4">
                <span class="px-2 py-1 text-xs font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full">
                  {{ $petugas->roles }}
                </span>
              </td>
              <td class="px-6 py-4 text-sm">
                <div class="flex space-x-2">
                  <a href="#" class="text-blue-500 hover:text-blue-700 transition-colors">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="text-yellow-500 hover:text-yellow-700 transition-colors">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="text-red-500 hover:text-red-700 transition-colors">
                    <i class="fas fa-trash"></i>
                  </a>
                </div>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                <div class="flex flex-col items-center justify-center py-8">
                  <i class="fas fa-user-slash text-4xl text-blue-300 mb-2"></i>
                  <p class="text-blue-500">Data Petugas Kosong</p>
                </div>
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      
      <!-- Pagination would go here -->
      <div class="px-6 py-3 bg-white border-t border-gray-200">
        <div class="flex items-center justify-between">
          <div class="text-sm text-gray-500">
            Menampilkan <span class="font-medium">1</span> sampai <span class="font-medium">10</span> dari <span class="font-medium">100</span> entri
          </div>
          <div class="flex space-x-1">
            <button class="px-3 py-1 rounded-md bg-blue-50 text-blue-600 hover:bg-blue-100">
              <i class="fas fa-chevron-left"></i>
            </button>
            <button class="px-3 py-1 rounded-md bg-blue-600 text-white hover:bg-blue-700">
              1
            </button>
            <button class="px-3 py-1 rounded-md bg-blue-50 text-blue-600 hover:bg-blue-100">
              2
            </button>
            <button class="px-3 py-1 rounded-md bg-blue-50 text-blue-600 hover:bg-blue-100">
              3
            </button>
            <button class="px-3 py-1 rounded-md bg-blue-50 text-blue-600 hover:bg-blue-100">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

@section('styles')
<style>
  /* Custom scrollbar */
  ::-webkit-scrollbar {
    width: 8px;
    height: 8px;
  }
  ::-webkit-scrollbar-track {
    background: #f1f1f1;
  }
  ::-webkit-scrollbar-thumb {
    background: #3b82f6;
    border-radius: 10px;
  }
  ::-webkit-scrollbar-thumb:hover {
    background: #2563eb;
  }
  
  /* Smooth transitions */
  .transition-colors {
    transition-property: background-color, border-color, color, fill, stroke;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 150ms;
  }
  
  /* Table row hover effect */
  tbody tr {
    transition: all 0.2s ease;
  }
  
  tbody tr:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.1), 0 2px 4px -1px rgba(59, 130, 246, 0.06);
  }
</style>
@endsection