<!DOCTYPE html>
<html lang="en">
@include('includes.landing.stylesheet')
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - SiTeguh</title>

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins|Raleway" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-100 via-blue-200 to-blue-300 min-h-screen flex items-center justify-center overflow-hidden">
  <x-guest-layout>
    <div class="w-full max-w-1xl bg-white p-14 rounded-3xl shadow-2xl">
      <!-- Logo -->
      <div class="flex justify-center mb-3">
        <a href="/">
          <img class="w-32" src="{{ asset('assets/img/Logo_PLN.png') }}" alt="Logo PLN">
        </a>
      </div>
      <h2 class="text-center text-2xl font-semibold text-gray-700 mb-3">Login</h2>

      <!-- Session Status -->
      <x-auth-session-status class="mb-4 text-green-600" :status="session('status')" />

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4 text-red-600" :errors="$errors" />

      <form method="POST" action="{{ route('login') }}" class="space-y-2">
        @csrf

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <x-input id="email" class="mt-1 w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <x-input id="password" class="mt-1 w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" type="password" name="password" required />
        </div>

        <!-- Remember & Forgot -->
        <div class="flex items-center justify-between">
          <label class="inline-flex items-center">
            <input type="checkbox" name="remember" class="rounded border-gray-300 text-blue-600">
            <span class="ml-2 text-sm text-gray-600">Ingat Saya</span>
          </label>

          @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">Lupa kata sandi?</a>
          @endif
        </div>

        <!-- Button Login -->
        <div>
          <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md font-semibold shadow hover:bg-blue-700 transition duration-300">
            Login
          </button>
        </div>

        <!-- Register Link -->
        <div class="text-center mt-4 text-sm text-gray-600">
          Belum punya akun? <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Daftar di sini</a>
        </div>
      </form>
    </div>
  </x-guest-layout>
</body>

</html>
