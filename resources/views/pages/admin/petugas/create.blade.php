@extends('layouts.admin')

@section('title')
Tambah Petugas Baru
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <div class="flex items-center justify-between my-6">
      <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">
        Tambah Petugas Baru
      </h2>
      <div class="flex items-center space-x-2">
        <a href="{{ route('petugas.index') }}" class="flex items-center text-sm text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
          </svg>
          Kembali ke Daftar
        </a>
      </div>
    </div>

    <div class="mb-6 p-4 bg-gradient-to-r from-blue-50 to-blue-100 dark:from-blue-900 dark:to-blue-800 rounded-xl shadow-sm border border-blue-200 dark:border-blue-700">
      <div class="flex items-start">
        <div class="flex-shrink-0 pt-0.5">
          <svg class="w-6 h-6 text-blue-600 dark:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <div class="ml-3">
          <h3 class="text-sm font-medium text-blue-800 dark:text-blue-100">Informasi Penting</h3>
          <div class="mt-1 text-sm text-blue-700 dark:text-blue-300">
            <p>Harap lengkapi semua data petugas dengan benar. Pastikan NIK dan email belum terdaftar sebelumnya.</p>
          </div>
        </div>
      </div>
    </div>
    <form action="{{ route('petugas.store')}} " method="POST" enctype="multipart/form-data">
      @csrf
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">NIK</span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
            type="text" placeholder="NIK" value="{{ old('nik')}}" name="nik"></input>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Name</span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
            type="text" placeholder="John Doe" value="{{ old('name')}}" name="name"></input>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Email</span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
            type="email" placeholder="email@email.com" value="{{ old('email')}}" name="email"></input>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">No. Hp</span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
            type="text" placeholder="0123456789" value="{{ old('phone')}}" name="phone"></input>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Role</span>
          <select
            class="block w-full text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
            name="roles">
            <option value="ADMIN">Admin</option>
            <option value="PETUGAS">Petugas</option>
          </select>
        </label>
        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Password</span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
            type="password" placeholder="password" value="{{ old('password')}}" name="password"></input>
        </label>
        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Konfirmasi Password</span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
            type="password" placeholder="password" value="{{ old('password')}}" name="password_confirmation"></input>
        </label>


        <button type="submit"
          class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
          Tambah Petugas
        </button>
      </div>
    </form>
  </div>
</main>
@endsection