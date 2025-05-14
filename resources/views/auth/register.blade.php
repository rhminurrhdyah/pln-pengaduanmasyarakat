<!DOCTYPE html>
<html lang="en">
@include('includes.landing.stylesheet')

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SiTeguh</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins|Raleway" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-100 via-blue-200 to-blue-300 py-6 px-2 sm:px-4 lg:px-6 min-h-screen flex items-center justify-center">
  <x-guest-layout>
    <div class="w-full max-w-7xl bg-white rounded-3xl shadow-2xl p-8">
      <!-- Logo -->
      <div class="text-center mb-4">
        <a href="/">
          <img class="w-32 mx-auto" src="{{ asset('assets/img/Logo_PLN.png') }}" alt="Logo PLN">
        </a>
        <h2 class="text-2xl font-semibold text-gray-700 mt-3">Formulir Pendaftaran</h2>
      </div>

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4 text-red-600" :errors="$errors" />

      <!-- Form Start -->
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Grid 2 Kolom -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- NIK -->
          <div>
            <x-label for="nik" :value="__('NIK')" />
            <x-input id="nik" class="block mt-1 w-full rounded-lg border border-gray-300 shadow-sm p-2" type="text" name="nik" :value="old('nik')" required autofocus />
          </div>

          <!-- Nama -->
          <div>
            <x-label for="name" :value="__('Nama')" />
            <x-input id="name" class="block mt-1 w-full rounded-lg border border-gray-300 shadow-sm p-2" type="text" name="name" :value="old('name')" required />
          </div>

          <!-- Email -->
          <div>
            <x-label for="email" :value="__('Email')" />
            <x-input id="email" class="block mt-1 w-full rounded-lg border border-gray-300 shadow-sm p-2" type="email" name="email" :value="old('email')" required />
          </div>

          <!-- No. HP -->
          <div>
            <x-label for="phone" :value="__('No. HP')" />
            <x-input id="phone" class="block mt-1 w-full rounded-lg border border-gray-300 shadow-sm p-2" type="text" name="phone" :value="old('phone')" required />
          </div>

          <!-- Password -->
          <div>
            <x-label for="password" :value="__('Password')" />
            <x-input id="password" class="block mt-1 w-full rounded-lg border border-gray-300 shadow-sm p-2" type="password" name="password" required autocomplete="new-password" />
          </div>

          <!-- Konfirmasi Password -->
          <div>
            <x-label for="password_confirmation" :value="__('Konfirmasi Password')" />
            <x-input id="password_confirmation" class="block mt-1 w-full rounded-lg border border-gray-300 shadow-sm p-2" type="password" name="password_confirmation" required />
          </div>
        </div>

        <!-- Tombol -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mt-6 space-y-3 md:space-y-0">
          <a class="text-sm text-blue-600 hover:underline" href="{{ route('login') }}">
            {{ __('Sudah punya akun? Login') }}
          </a>

          <x-button class="bg-blue-600 text-white font-bold rounded-md py-2 px-4 shadow-lg hover:bg-blue-700 transition duration-300">
            {{ __('Register') }}
          </x-button>
        </div>
      </form>
    </div>
  </x-guest-layout>
</body>

</html>
