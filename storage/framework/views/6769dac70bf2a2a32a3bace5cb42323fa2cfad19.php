
<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('includes.landing.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data Pengaduan - SiTeguh</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Poppins:500,600|Raleway:400,500" rel="stylesheet">

  <style>
    body {
      background-color: #f5f7fa;
      font-family: 'Poppins', sans-serif;
    }

    .card-hover {
      transition: all 0.3s ease;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
      border-left: 5px solid #3da9fc;
    }
    .status-badge {
      transition: all 0.3s ease;
    }
    .btn-detail {
      transition: all 0.3s ease;
      background: linear-gradient(135deg, #3da9fc 0%, #2d7cc4 100%);
      border-radius: 6px;
      padding: 8px 16px;
    }
    .btn-detail:hover {
      background: linear-gradient(135deg, #2d7cc4 0%, #1a5a8f 100%);
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(61, 169, 252, 0.3);
    }
    .btn-delete:hover {
      transform: scale(1.1);
      color: #e40000;
    }
    .empty-state {
      background-color: #f0f4f8;
      border: 1px dashed #dbeafe;
      padding: 32px;
      border-radius: 10px;
    }
    .empty-state h3 {
      font-size: 1.25rem;
      color: #4a4a4a;
    }
    .empty-state p {
      color: #777;
      font-size: 1rem;
    }
    .status-badge {
      padding: 6px 12px;
      border-radius: 8px;
      font-size: 0.875rem;
      font-weight: 500;
    }
    .bg-red-100 {
      background-color: #fef2f2;
    }
    .bg-orange-100 {
      background-color: #fff7ed;
    }
    .bg-green-100 {
      background-color: #e6f9e6;
    }
  </style>
</head>

<?php $__env->startSection('content'); ?>
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <div class="flex items-center justify-between my-6">
      <h2 class="text-2xl font-semibold text-gray-700">Data Pengaduan</h2>
      <a href="<?php echo e(route('pengaduan.create')); ?>" class="flex items-center px-6 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-all duration-150">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
        Buat Pengaduan Baru
      </a>
    </div>

    <!-- Notification Messages -->
    <?php if($errors->any()): ?>
      <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
        <span class="font-medium">Perhatian!</span>
        <ul class="mt-1 ml-4 list-disc">
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    <?php endif; ?>

    <?php if(session('success')): ?>
      <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
        <span class="font-medium">Sukses!</span> <?php echo e(session('success')); ?>

      </div>
    <?php endif; ?>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <?php if(count($items) > 0): ?>
          <div class="grid gap-6 mb-8 md:grid-cols-2 lg:grid-cols-3">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs card-hover">
                <div class="flex items-center mb-4">
                  <div class="relative mr-3 rounded-lg overflow-hidden" style="width: 120px; height: 90px;">
                    <img class="object-cover w-full h-full" src="<?php echo e(Storage::url($item->image)); ?>" alt="Bukti Pengaduan" loading="lazy" />
                  </div>
                  <div class="flex-1">
                    <h4 class="mb-1 font-semibold text-gray-600">Pengaduan #<?php echo e($loop->iteration); ?></h4>
                    <p class="text-xs text-gray-500"><?php echo e($item->created_at->format('d M Y, H:i')); ?></p>

                    <span class="status-badge inline-flex items-center mt-1 text-xs font-medium text-black rounded-full <?php echo e($item->status == 'Belum di Proses' ? 'bg-red-100' : ($item->status == 'Sedang di Proses' ? 'bg-orange-100' : 'bg-green-100')); ?>">
                      <?php echo e($item->status); ?>

                    </span>
                  </div>
                </div>

                <div class="flex justify-between mt-4">
                  <a href="<?php echo e(route('pengaduan.show', $item->id)); ?>" class="btn-detail flex items-center text-white rounded-md">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                    Detail
                  </a>

                  <form action="<?php echo e(route('pengaduan.destroy', $item->id)); ?>" method="POST" class="inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn-delete flex items-center text-red-600 rounded-md hover:text-red-800 focus:outline-none" onclick="return confirm('Apakah Anda yakin ingin menghapus pengaduan ini?')">
                      <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                      </svg>
                      Hapus
                    </button>
                  </form>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php else: ?>
          <div class="empty-state text-center">
            <svg class="w-16 h-16 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h3 class="mt-4 text-lg font-medium text-gray-600">Belum ada data pengaduan</h3>
            <p class="mt-1 text-gray-500">Anda belum membuat pengaduan apapun. Klik tombol di atas untuk membuat pengaduan baru.</p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>
<?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\62822\Documents\LARAFEL PROJEK\pengaduan-masyarakat\resources\views/pages/masyarakat/detail.blade.php ENDPATH**/ ?>