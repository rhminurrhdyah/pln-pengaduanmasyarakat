

<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('includes.landing.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Detail Pengaduan - SiTeguh</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600|Open+Sans:400,600|Raleway:500,600" rel="stylesheet">

  <style>
    body {
      background-color: #f8fafc;
      font-family: 'Poppins', sans-serif;
    }
    .detail-card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      border-left: 4px solid transparent;
    }
    .detail-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 24px rgba(0, 0, 0, 0.1);
      border-left: 4px solid #3da9fc;
    }
    .status-badge {
      padding: 6px 12px;
      border-radius: 8px;
      font-weight: 500;
      font-size: 0.85rem;
    }
    .status-pending {
      background-color: #fff3e0;
      color: #e65100;
    }
    .status-processing {
      background-color: #e3f2fd;
      color: #1565c0;
    }
    .status-completed {
      background-color: #e8f5e9;
      color: #2e7d32;
    }
    .btn-primary {
      background: linear-gradient(135deg, #3da9fc 0%, #2d7cc4 100%);
      color: white;
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      background: linear-gradient(135deg, #2d7cc4 0%, #1a5a8f 100%);
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(61, 169, 252, 0.3);
    }
    .text-muted {
      color: #64748b;
    }
    .section-title {
      position: relative;
      padding-bottom: 8px;
      color: #1e293b;
    }
    .section-title:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 3px;
      background: #3da9fc;
      border-radius: 3px;
    }
    .file-upload {
      position: relative;
      overflow: hidden;
      display: inline-block;
    }
    .file-upload-input {
      position: absolute;
      left: 0;
      top: 0;
      opacity: 0;
      width: 100%;
      height: 100%;
      cursor: pointer;
    }
    .preview-image {
      max-height: 200px;
      object-fit: contain;
      border: 1px dashed #cbd5e1;
      border-radius: 8px;
      padding: 8px;
      background: #f8fafc;
    }
    .response-card {
      background: #f0f9ff;
      border-left: 4px solid #3da9fc;
    }
    .empty-response {
      background: #f8fafc;
      border: 1px dashed #cbd5e1;
    }
  </style>
</head>

<?php $__env->startSection('content'); ?>
<main class="h-full pb-16 overflow-y-auto">
  <div class="container max-w-4xl px-6 mx-auto py-8">
    <h2 class="mb-8 text-3xl font-semibold text-center text-gray-800">
      Detail Pengaduan
    </h2>

    <!-- Pengaduan Information Card -->
    <div class="detail-card p-6 mb-8">
      <?php $__currentLoopData = $item->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
          <h3 class="text-lg font-medium text-gray-700 mb-2">Informasi Pengadu</h3>
          <div class="space-y-3">
            <p><span class="font-medium">Nama:</span> <?php echo e($ite->name); ?></p>
            <p><span class="font-medium">No Telepon:</span> <?php echo e($item->user->phone); ?></p>
            <p><span class="font-medium">Tanggal:</span> <?php echo e($ite->created_at->format('l, d F Y - H:i:s')); ?></p>
            <p class="flex items-center">
              <span class="font-medium mr-2">Status:</span>
              <?php if($item->status =='Belum di Proses'): ?>
              <span class="status-badge status-pending">
                <?php echo e($item->status); ?>

              </span>
              <?php elseif($item->status =='Sedang di Proses'): ?>
              <span class="status-badge status-processing">
                <?php echo e($item->status); ?>

              </span>
              <?php else: ?>
              <span class="status-badge status-completed">
                <?php echo e($item->status); ?>

              </span>
              <?php endif; ?>
            </p>
          </div>
        </div>

        <div class="flex flex-col items-center">
          <h3 class="section-title text-lg font-medium mb-4">Foto Bukti</h3>
          <img class="preview-image w-full max-w-xs" src="<?php echo e(Storage::url($item->image)); ?>" alt="Bukti Pengaduan" loading="lazy" />
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <!-- Description Section -->
      <div class="mt-6">
        <h3 class="section-title text-lg font-medium text-center mb-4">Keterangan</h3>
        <div class="bg-gray-50 p-4 rounded-lg">
          <p class="text-gray-700">
            <?php echo e($item->description); ?>

          </p>
        </div>

        <!-- Edit Form (only visible to owner) -->
        <?php if($item->user_id == auth()->user()->id): ?>
        <form action="<?php echo e(route('pengaduan.update', $item->id)); ?>" method="POST" enctype="multipart/form-data" class="mt-6">
          <?php echo csrf_field(); ?>
          <?php echo method_field('PUT'); ?>

          <h4 class="text-md font-medium text-gray-700 mb-3">Edit Pengaduan</h4>
          
          <div class="mb-4">
            <label class="block text-gray-700 mb-2">Keterangan</label>
            <textarea name="description" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" rows="4" placeholder="Edit Keterangan"><?php echo e($item->description); ?></textarea>
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 mb-2">Ubah Foto (opsional)</label>
            <div class="file-upload btn-primary rounded-lg py-2 px-4 text-center cursor-pointer inline-block">
              <span>Pilih File</span>
              <input type="file" name="image" class="file-upload-input">
            </div>
            <p class="text-sm text-muted mt-1">Format: JPG, PNG (Maks. 2MB)</p>
          </div>

          <button type="submit" class="btn-primary rounded-lg py-2 px-6 font-medium">
            Update Pengaduan
          </button>
        </form>
        <?php endif; ?>
      </div>
    </div>

    <!-- Tanggapan Section -->
    <div class="detail-card p-6 mb-8">
      <h3 class="section-title text-lg font-medium text-center mb-4">Tanggapan</h3>
      
      <?php if(empty($tangap->tanggapan)): ?>
      <div class="empty-response p-6 text-center rounded-lg">
        <svg class="w-12 h-12 mx-auto text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
        </svg>
        <p class="text-gray-500">Belum ada tanggapan dari petugas</p>
      </div>
      <?php else: ?>
      <div class="response-card p-5 rounded-lg">
        <div class="flex items-start">
          <div class="flex-shrink-0 bg-blue-100 p-2 rounded-full">
            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
          </div>
          <div class="ml-4">
            <p class="text-gray-700"><?php echo e($tangap->tanggapan); ?></p>
            <p class="text-sm text-muted mt-2">Ditanggapi pada: <?php echo e($tangap->created_at->format('d M Y H:i')); ?></p>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>

    <!-- Back Button -->
    <div class="text-center mt-8">
      <a href="<?php echo e(url()->previous()); ?>" class="inline-flex items-center btn-primary rounded-lg py-2 px-6 font-medium">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Kembali
      </a>
    </div>
  </div>
</main>

<script>
  // Preview image when file is selected
  document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.querySelector('input[name="image"]');
    if (fileInput) {
      fileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(event) {
            const preview = document.querySelector('.preview-image');
            if (preview) {
              preview.src = event.target.result;
            }
          }
          reader.readAsDataURL(file);
        }
      });
    }
  });
</script>
<?php $__env->stopSection(); ?>
</html>
<?php echo $__env->make('layouts.masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\62822\Documents\LARAFEL PROJEK\pengaduan-masyarakat\resources\views/pages/masyarakat/show.blade.php ENDPATH**/ ?>