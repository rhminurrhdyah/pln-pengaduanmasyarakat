@extends('layouts.admin')

@section('title')
  Detail Pengaduan
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto bg-blue-50 dark:bg-gray-900">
  <div class="container px-6 mx-auto">
    <div class="max-w-4xl mx-auto my-8">
      <!-- Header Card -->
      <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-xl shadow-lg overflow-hidden mb-8">
        <div class="px-8 py-6 text-black">
          <h2 class="text-3xl font-bold text-center">
            <i class="fas fa-file-alt mr-2"></i> Detail Pengaduan
          </h2>
        </div>
      </div>

      <!-- Main Content Card -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden dark:bg-gray-800">
        <div class="p-8 space-y-6">
          <!-- Complaint Information Section -->
          <div class="bg-blue-50 rounded-lg p-6 dark:bg-gray-700">
            <h3 class="text-xl font-semibold text-blue-800 mb-4 border-b border-blue-200 pb-2 dark:text-blue-300 dark:border-blue-600">
              <i class="fas fa-info-circle mr-2"></i>Informasi Pengaduan
            </h3>
            
            @foreach($item->details as $ite)
            <div class="grid md:grid-cols-2 gap-4 text-gray-700 dark:text-gray-300">
              <div>
                <p class="mb-3"><span class="font-medium text-blue-700 dark:text-blue-300"><i class="fas fa-user mr-2"></i>Nama:</span> {{ $ite->name }}</p>
                <p class="mb-3"><span class="font-medium text-blue-700 dark:text-blue-300"><i class="fas fa-id-card mr-2"></i>NIK:</span> {{ $ite->user_nik }}</p>
              </div>
              <div>
                <p class="mb-3"><span class="font-medium text-blue-700 dark:text-blue-300"><i class="fas fa-phone mr-2"></i>No Telepon:</span> {{ $item->user->phone }}</p>
                <p class="mb-3"><span class="font-medium text-blue-700 dark:text-blue-300"><i class="fas fa-calendar-alt mr-2"></i>Tanggal:</span> {{ $ite->created_at->format('l, d F Y - H:i:s') }}</p>
              </div>
            </div>
            
            <div class="mt-4">
              <p class="inline-flex items-center">
                <span class="font-medium text-blue-700 dark:text-blue-300 mr-2"><i class="fas fa-tag mr-2"></i>Status:</span>
                @if($item->status =='Belum di Proses')
                  <span class="px-3 py-1 text-sm font-semibold rounded-full bg-red-100 text-red-800 dark:bg-red-700 dark:text-red-100">
                    <i class="fas fa-clock mr-1"></i>{{ $item->status }}
                  </span>
                @elseif ($item->status =='Sedang di Proses')
                  <span class="px-3 py-1 text-sm font-semibold rounded-full bg-orange-100 text-orange-800 dark:bg-orange-600 dark:text-white">
                    <i class="fas fa-spinner mr-1"></i>{{ $item->status }}
                  </span>
                @else
                  <span class="px-3 py-1 text-sm font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-700 dark:text-green-100">
                    <i class="fas fa-check-circle mr-1"></i>{{ $item->status }}
                  </span>
                @endif
              </p>
            </div>
            @endforeach
          </div>

          <!-- Evidence and Description Section -->
          <div class="grid md:grid-cols-2 gap-8 mt-6">
            <div class="bg-blue-50 rounded-lg p-6 dark:bg-gray-700">
              <h3 class="text-xl font-semibold text-blue-800 mb-4 border-b border-blue-200 pb-2 dark:text-blue-300 dark:border-blue-600">
                <i class="fas fa-camera mr-2"></i>Bukti Foto
              </h3>
              <div class="flex justify-center">
                <img class="max-h-64 w-auto rounded-lg shadow-md border-4 border-white dark:border-gray-600" src="{{ Storage::url($item->image) }}" alt="Foto Bukti" loading="lazy" />
              </div>
            </div>
            
            <div class="bg-blue-50 rounded-lg p-6 dark:bg-gray-700">
              <h3 class="text-xl font-semibold text-blue-800 mb-4 border-b border-blue-200 pb-2 dark:text-blue-300 dark:border-blue-600">
                <i class="fas fa-align-left mr-2"></i>Keterangan
              </h3>
              <div class="prose max-w-none text-gray-700 dark:text-gray-300">
                <p class="text-justify">
                  {{ $item->description }}
                </p>
              </div>
            </div>
          </div>

          <!-- Response Section -->
          <div class="bg-blue-50 rounded-lg p-6 mt-6 dark:bg-gray-700">
            <h3 class="text-xl font-semibold text-blue-800 mb-4 border-b border-blue-200 pb-2 dark:text-blue-300 dark:border-blue-600">
              <i class="fas fa-comment-dots mr-2"></i>Tanggapan Petugas
            </h3>
            <div class="bg-white rounded-lg p-4 shadow-inner dark:bg-gray-600">
              @if (empty($tangap->tanggapan))
                <p class="text-gray-500 italic dark:text-gray-400">
                  <i class="fas fa-info-circle mr-2"></i>Belum ada tanggapan
                </p>
              @else
                <p class="text-gray-700 dark:text-gray-300">
                  <i class="fas fa-quote-left text-blue-400 mr-2"></i>
                  {{ $tangap->tanggapan }}
                  <i class="fas fa-quote-right text-blue-400 ml-2"></i>
                </p>
              @endif
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="flex flex-row justify-center space-x-4 mt-8">
            <a href="{{ url('admin/pengaduan/cetak', $item->id)}}" 
              class="inline-block px-6 py-3 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition duration-150">
              <i class="fas fa-file-pdf mr-2"></i> Export ke PDF
            </a>
            <a href="{{ route('tanggapan.show', $item->id)}}" 
              class="inline-block px-6 py-3 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition duration-150">
              <i class="fas fa-comment-medical mr-2"></i> Berikan Tanggapan
            </a>
          </div>


        </div>
      </div>
    </div>
  </div>
</main>
@endsection