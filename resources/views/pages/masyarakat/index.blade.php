@extends('layouts.masyarakat')

<!DOCTYPE html>
<html lang="en">
@include('includes.landing.stylesheet')
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Buat Laporan - SiTeguh</title>


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <style>
    .gradient-bg {
      background: linear-gradient(135deg, #e6f2ff 0%, #cce6ff 100%);
    }
    .form-container {
      box-shadow: 0 10px 25px -5px rgba(66, 153, 225, 0.2);
      border-radius: 12px;
      transition: all 0.3s ease;
    }
    .form-container:hover {
      box-shadow: 0 15px 30px -5px rgba(66, 153, 225, 0.3);
    }
    .btn-submit {
      background: linear-gradient(135deg, #4299e1 0%, #3182ce 100%);
      transition: all 0.3s ease;
    }
    .btn-submit:hover {
      transform: translateY(-2px);
      box-shadow: 0 7px 14px rgba(66, 153, 225, 0.4);
    }
    .file-upload {
      border: 2px dashed #90cdf4;
      transition: all 0.3s ease;
    }
    .file-upload:hover {
      border-color: #4299e1;
      background-color: rgba(66, 153, 225, 0.05);
    }
    .textarea-focus:focus {
      border-color: #4299e1;
      box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.2);
    }

    /* Reduced width and compact styling */
    .form-container {
      width: 100%;
      max-width: 480px;
      margin: 0 auto;
    }

    .text-center h1 {
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    .text-center p {
      font-size: 1rem;
      max-width: 350px;
      margin: 0 auto;
    }

    .form-container input, .form-container textarea, .form-container button {
      font-size: 0.875rem;
    }

    .file-upload p {
      font-size: 0.875rem;
    }

    .btn-submit {
      width: 100%;
      padding: 0.75rem;
    }

    .file-upload {
      margin-bottom: 1.5rem;
    }

    .textarea-focus {
      padding: 1rem;
      font-size: 1rem;
    }
  </style>
</head>
@section('content')

<main class="min-h-screen gradient-bg pb-16 pt-10 px-4">
  <div class="container mx-auto">
    <div class="text-center mb-10">
      <h1 class="text-2xl font-bold text-blue-600 mb-6"></h1>
    </div>

    @if ($errors->any())
    <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-lg">
      <div class="flex">
        <div class="flex-shrink-0">
          <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
          </svg>
        </div>
        <div class="ml-3">
          <h3 class="text-sm font-medium text-red-800">Terdapat kesalahan dalam pengisian form</h3>
          <div class="mt-2 text-sm text-red-700">
            <ul class="list-disc pl-5 space-y-1">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
    @endif

    <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="bg-white form-container p-6">
        <div class="mb-6">
          <label class="block text-lg font-semibold text-blue-800 mb-3" for="description">
            <span class="flex items-center">
              <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
              </svg>
              Deskripsi Laporan
            </span>
          </label>
          <textarea
            id="description"
            name="description"
            rows="6"
            placeholder="Tuliskan laporan Anda secara detail, termasuk lokasi, waktu kejadian, dan pihak-pihak yang terlibat..."
            class="w-full p-4 text-base border-2 border-blue-100 rounded-lg shadow-sm textarea-focus focus:outline-none focus:ring-1 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 dark:placeholder-gray-400">{{ old('description') }}</textarea>
          <p class="mt-2 text-sm text-blue-600">Pastikan laporan Anda jelas dan dapat diverifikasi</p>
        </div>

        <div class="mb-6">
          <label class="block text-lg font-semibold text-blue-800 mb-3" for="image">
            <span class="flex items-center">
              <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
              Bukti Pendukung
            </span>
          </label>
          <div class="file-upload relative rounded-lg p-6 text-center">
            <input
              id="image"
              name="image"
              type="file"
              class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
            />
            <div class="flex flex-col items-center justify-center space-y-2">
              <svg class="w-12 h-12 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
              </svg>
              <p class="text-blue-700 font-medium">Klik untuk mengunggah foto</p>
              <p class="text-sm text-blue-500">Format: JPG, PNG (Maks. 5MB)</p>
            </div>
          </div>
          <div id="file-name" class="mt-2 text-sm text-blue-600 hidden"></div>
        </div>

        <div class="flex justify-center mt-6">
          <button
            type="submit"
            class="btn-submit px-8 py-3 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition duration-150">
            <span class="flex items-center">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
              </svg>
              Kirim Laporan
            </span>
          </button>
        </div>
      </div>
    </form>
  </div>
</main>

<script>
  // Show selected file name
  document.getElementById('image').addEventListener('change', function(e) {
    const fileName = e.target.files[0]?.name || 'Belum ada file dipilih';
    const fileDisplay = document.getElementById('file-name');
    fileDisplay.textContent = `File terpilih: ${fileName}`;
    fileDisplay.classList.remove('hidden');
  });
</script>

@endsection
</html>