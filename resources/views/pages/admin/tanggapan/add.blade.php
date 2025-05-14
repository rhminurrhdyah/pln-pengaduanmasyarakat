@extends('layouts.admin')

@section('title')
Tanggapan
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <div class="max-w-2xl mx-auto w-full">
      <!-- Header Section -->
      <div class="text-center mb-3">
        <h2 class="text-3xl font-semibold text-blue-800 mb-6"></h2>
      </div>

      <!-- Form Section -->
      <form action="{{ route('tanggapan.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-xl shadow-lg overflow-hidden">
        @csrf
        <input type="hidden" name="pengaduan_id" value="{{ $item->id }}">

        <div class="p-6 space-y-6">
          <!-- Response Field -->
          <div class="space-y-2">
            <label class="block text-sm font-medium text-blue-700">Tanggapan Anda</label>
            <div class="mt-1 relative rounded-md shadow-sm">
              <textarea 
                name="tanggapan"
                rows="6"
                class="block w-full px-4 py-3 text-sm border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                placeholder="Tulis tanggapan Anda disini..."
                value="{{ old('description') }}"></textarea>
              <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                </svg>
              </div>
            </div>
          </div>

          <!-- Status Field -->
          <div class="space-y-2">
            <label class="block text-sm font-medium text-blue-700">Status</label>
            <div class="relative">
              <select 
                name="status"
                class="appearance-none block w-full px-4 py-3 text-sm border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 bg-white pr-10">
                <option value="Belum di Proses">Belum di Proses</option>
                <option value="Sedang di Proses">Sedang di Proses</option>
                <option value="Selesai">Selesai</option>
              </select>
              <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path>
                </svg>
              </div>
            </div>
          </div>
        </div>

        <!-- Form Footer -->
        <div class="px-6 py-4 bg-blue-50 border-t border-blue-100 flex justify-end">
          <button 
            type="submit"
            class="inline-flex items-center px-6 py-3 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200">
            <svg class="-ml-1 mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
            </svg>
            Kirim Tanggapan
          </button>
        </div>
      </form>
    </div>
  </div>
</main>
@endsection