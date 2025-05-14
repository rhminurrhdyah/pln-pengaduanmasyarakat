<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-gradient-to-b from-blue-50 to-white dark:from-gray-800 dark:to-gray-900 md:block flex-shrink-0 transition-all duration-300 ease-in-out">
  <div class="py-4 text-gray-600 dark:text-gray-300">
    <!-- Logo with animation -->
    <div class="flex items-center justify-center px-6 mb-8">
      <div class="flex items-center transform hover:scale-105 transition duration-300">
        <img src="<?php echo e(asset('assets/img/download.png')); ?>" alt="Logo PLN" class="h-10 w-auto" />
        <span class="ml-3 text-xl font-bold text-blue-600 dark:text-blue-400"></span>
      </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="px-4 space-y-1">
      <!-- Dashboard -->
      <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-600 dark:bg-gray-700 dark:text-blue-400' : 'hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-gray-700'); ?> group flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-all duration-200">
        <svg class="<?php echo e(request()->routeIs('dashboard') ? 'text-blue-600 dark:text-blue-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-blue-600'); ?> h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
        </svg>
        Dashboard
        <span class="<?php echo e(request()->routeIs('dashboard') ? 'bg-blue-600' : 'bg-transparent'); ?> absolute right-4 inline-flex items-center justify-center h-6 w-6 text-xs font-semibold text-white rounded-full transition-all duration-200">
          <span class="<?php echo e(request()->routeIs('dashboard') ? 'opacity-100' : 'opacity-0'); ?>">•</span>
        </span>
      </a>

      <!-- Pengaduan -->
      <a href="<?php echo e(route('pengaduans.index')); ?>" class="<?php echo e(request()->routeIs('pengaduans.index') ? 'bg-blue-100 text-blue-600 dark:bg-gray-700 dark:text-blue-400' : 'hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-gray-700'); ?> group flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-all duration-200">
        <svg class="<?php echo e(request()->routeIs('pengaduans.index') ? 'text-blue-600 dark:text-blue-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-blue-600'); ?> h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd" />
        </svg>
        Pengaduan
        <span class="<?php echo e(request()->routeIs('pengaduans.index') ? 'bg-blue-600' : 'bg-transparent'); ?> absolute right-4 inline-flex items-center justify-center h-6 w-6 text-xs font-semibold text-white rounded-full transition-all duration-200">
          <span class="<?php echo e(request()->routeIs('pengaduans.index') ? 'opacity-100' : 'opacity-0'); ?>">•</span>
        </span>
      </a>

      <!-- Masyarakat -->
      <a href="<?php echo e(url('admin/masyarakat')); ?>" class="<?php echo e(request()->is('admin/masyarakat') ? 'bg-blue-100 text-blue-600 dark:bg-gray-700 dark:text-blue-400' : 'hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-gray-700'); ?> group flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-all duration-200">
        <svg class="<?php echo e(request()->is('admin/masyarakat') ? 'text-blue-600 dark:text-blue-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-blue-600'); ?> h-5 w-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
          <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
        </svg>
        Masyarakat
        <span class="<?php echo e(request()->is('admin/masyarakat') ? 'bg-blue-600' : 'bg-transparent'); ?> absolute right-4 inline-flex items-center justify-center h-6 w-6 text-xs font-semibold text-white rounded-full transition-all duration-200">
          <span class="<?php echo e(request()->is('admin/masyarakat') ? 'opacity-100' : 'opacity-0'); ?>">•</span>
        </span>
      </a>

      <!-- Petugas (Admin only) -->
      <?php if(Auth::user()->roles == 'ADMIN'): ?>
      <a href="<?php echo e(route('petugas.index')); ?>" class="<?php echo e(request()->is('admin/petugas') ? 'bg-blue-100 text-blue-600 dark:bg-gray-700 dark:text-blue-400' : 'hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-gray-700'); ?> group flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-all duration-200">
        <svg class="<?php echo e(request()->is('admin/petugas') ? 'text-blue-600 dark:text-blue-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-blue-600'); ?> h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
          <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
        </svg>
        Petugas
        <span class="<?php echo e(request()->is('admin/petugas') ? 'bg-blue-600' : 'bg-transparent'); ?> absolute right-4 inline-flex items-center justify-center h-6 w-6 text-xs font-semibold text-white rounded-full transition-all duration-200">
          <span class="<?php echo e(request()->is('admin/petugas') ? 'opacity-100' : 'opacity-0'); ?>">•</span>
        </span>
      </a>
      <?php endif; ?>

      <!-- Laporan -->
      <a href="<?php echo e(url('admin/laporan')); ?>" class="<?php echo e(request()->is('admin/laporan') ? 'bg-blue-100 text-blue-600 dark:bg-gray-700 dark:text-blue-400' : 'hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-gray-700'); ?> group flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-all duration-200">
        <svg class="<?php echo e(request()->is('admin/laporan') ? 'text-blue-600 dark:text-blue-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-blue-600'); ?> h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd" />
        </svg>
        Laporan
        <span class="<?php echo e(request()->is('admin/laporan') ? 'bg-blue-600' : 'bg-transparent'); ?> absolute right-4 inline-flex items-center justify-center h-6 w-6 text-xs font-semibold text-white rounded-full transition-all duration-200">
          <span class="<?php echo e(request()->is('admin/laporan') ? 'opacity-100' : 'opacity-0'); ?>">•</span>
        </span>
      </a>
    </nav>
  </div>
</aside>

<!-- Mobile sidebar backdrop -->
<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-200"
  x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in-out duration-200" x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
  class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>

<!-- Mobile sidebar -->
<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
  x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-200"
  x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in-out duration-200" x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
  @keydown.escape="closeSideMenu">
  <div class="py-4 text-gray-500 dark:text-gray-400">
    <!-- Mobile Logo -->
    <div class="flex items-center justify-center px-6 mb-8">
      <div class="flex items-center">
        <img src="<?php echo e(asset('assets/img/download.png')); ?>" alt="Logo PLN" class="h-10 w-auto" />
        <span class="ml-3 text-xl font-bold text-blue-600 dark:text-blue-400">SI TEGUH</span>
      </div>
    </div>

    <!-- Mobile Navigation -->
    <nav class="px-4 space-y-1">
      <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-600 dark:bg-gray-700 dark:text-blue-400' : 'hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-gray-700'); ?> group flex items-center px-4 py-3 text-sm font-medium rounded-lg">
        <svg class="<?php echo e(request()->routeIs('dashboard') ? 'text-blue-600 dark:text-blue-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-blue-600'); ?> h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
        </svg>
        Dashboard
      </a>

      <a href="<?php echo e(route('pengaduans.index')); ?>" class="<?php echo e(request()->routeIs('pengaduans.index') ? 'bg-blue-100 text-blue-600 dark:bg-gray-700 dark:text-blue-400' : 'hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-gray-700'); ?> group flex items-center px-4 py-3 text-sm font-medium rounded-lg">
        <svg class="<?php echo e(request()->routeIs('pengaduans.index') ? 'text-blue-600 dark:text-blue-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-blue-600'); ?> h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd" />
        </svg>
        Pengaduan
      </a>

      <a href="<?php echo e(url('admin/masyarakat')); ?>" class="<?php echo e(request()->is('admin/masyarakat') ? 'bg-blue-100 text-blue-600 dark:bg-gray-700 dark:text-blue-400' : 'hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-gray-700'); ?> group flex items-center px-4 py-3 text-sm font-medium rounded-lg">
        <svg class="<?php echo e(request()->is('admin/masyarakat') ? 'text-blue-600 dark:text-blue-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-blue-600'); ?> h-5 w-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
          <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
        </svg>
        Masyarakat
      </a>

      <?php if(Auth::user()->roles == 'ADMIN'): ?>
      <a href="<?php echo e(route('petugas.index')); ?>" class="<?php echo e(request()->is('admin/petugas') ? 'bg-blue-100 text-blue-600 dark:bg-gray-700 dark:text-blue-400' : 'hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-gray-700'); ?> group flex items-center px-4 py-3 text-sm font-medium rounded-lg">
        <svg class="<?php echo e(request()->is('admin/petugas') ? 'text-blue-600 dark:text-blue-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-blue-600'); ?> h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
          <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
        </svg>
        Petugas
      </a>
      <?php endif; ?>

      <a href="<?php echo e(url('admin/laporan')); ?>" class="<?php echo e(request()->is('admin/laporan') ? 'bg-blue-100 text-blue-600 dark:bg-gray-700 dark:text-blue-400' : 'hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-gray-700'); ?> group flex items-center px-4 py-3 text-sm font-medium rounded-lg">
        <svg class="<?php echo e(request()->is('admin/laporan') ? 'text-blue-600 dark:text-blue-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-blue-600'); ?> h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd" />
        </svg>
        Laporan
      </a>
    </nav>
  </div>
</aside><?php /**PATH C:\Users\62822\Documents\LARAFEL PROJEK\pengaduan-masyarakat\resources\views/includes/admin/sidebar.blade.php ENDPATH**/ ?>