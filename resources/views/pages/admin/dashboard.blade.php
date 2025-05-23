@extends('layouts.admin')

@section('title')
Dashboard
@endsection

@section('content')
<main class="h-full overflow-y-auto bg-blue-50">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-3xl font-bold text-blue-800">
      Dashboard Overview
    </h2>

    <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
      <!-- Card -->
      <div class="flex items-center p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out">
        <div class="p-4 mr-4 bg-blue-100 rounded-xl">
          <svg class="w-8 h-8 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
              clip-rule="evenodd" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-semibold text-blue-600">
            Total Reports
          </p>
          <p class="text-2xl font-bold text-blue-800">
            {{ $pengaduan }}
          </p>
        </div>
      </div>
      
      <!-- Card -->
      <div class="flex items-center p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out">
        <div class="p-4 mr-4 bg-orange-100 rounded-xl">
          <svg class="w-8 h-8 text-orange-600" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
              clip-rule="evenodd" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-semibold text-orange-600">
            Pending
          </p>
          <p class="text-2xl font-bold text-blue-800">
            {{ $pending }}
          </p>
        </div>
      </div>

      <!-- Card -->
      <div class="flex items-center p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out">
        <div class="p-4 mr-4 bg-purple-100 rounded-xl">
          <svg class="w-8 h-8 text-purple-600" viewBox="0 0 20 20" fill="currentColor">
            <path
              d="M8 5a1 1 0 100 2h5.586l-1.293 1.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L13.586 5H8zM12 15a1 1 0 100-2H6.414l1.293-1.293a1 1 0 10-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L6.414 15H12z" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-semibold text-purple-600">
            In Progress
          </p>
          <p class="text-2xl font-bold text-blue-800">
            {{ $process }}
          </p>
        </div>
      </div>

      <!-- Card -->
      <div class="flex items-center p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out">
        <div class="p-4 mr-4 bg-green-100 rounded-xl">
          <svg class="w-8 h-8 text-green-600" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
              clip-rule="evenodd" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-semibold text-green-600">
            Completed
          </p>
          <p class="text-2xl font-bold text-blue-800">
            {{ $success }}
          </p>
        </div>
      </div>
    </div>

    @if( Auth::user()->roles == 'ADMIN')
    <h3 class="my-6 text-2xl font-bold text-blue-800">
      User Management
    </h3>
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
      <!-- Card -->
      <div class="flex items-center p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out">
        <div class="p-4 mr-4 bg-sky-100 rounded-xl">
          <svg class="w-8 h-8 text-sky-600" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
            </path>
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-semibold text-sky-600">
            Total Users
          </p>
          <p class="text-2xl font-bold text-blue-800">
            {{ $user }}
          </p>
        </div>
      </div>

      <!-- Card -->
      <div class="flex items-center p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out">
        <div class="p-4 mr-4 bg-indigo-100 rounded-xl">
          <svg class="w-8 h-8 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
            <path
              d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-semibold text-indigo-600">
            Officers
          </p>
          <p class="text-2xl font-bold text-blue-800">
            {{ $petugas }}
          </p>
        </div>
      </div>

      <!-- Card -->
      <div class="flex items-center p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out">
        <div class="p-4 mr-4 bg-blue-100 rounded-xl">
          <svg class="w-8 h-8 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-semibold text-blue-600">
            Admins
          </p>
          <p class="text-2xl font-bold text-blue-800">
            {{ $admin }}
          </p>
        </div>
      </div>

      <!-- Card -->
      <div class="flex items-center p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out">
        <div class="p-4 mr-4 bg-teal-100 rounded-xl">
          <svg class="w-8 h-8 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
              clip-rule="evenodd"></path>
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-semibold text-teal-600">
            Responses
          </p>
          <p class="text-2xl font-bold text-blue-800">
            {{ $tanggapan }}
          </p>
        </div>
      </div>
    </div>
    @endif
  </div>
</main>
@endsection