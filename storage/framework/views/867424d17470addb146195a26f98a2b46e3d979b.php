

<?php $__env->startSection('title'); ?>
Data Pengaduan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main class="h-full pb-16 overflow-y-auto bg-blue-50">
  <div class="container px-6 mx-auto">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-2xl font-semibold text-blue-800">
        Daftar Pengaduan Masyarakat
      </h2>
      <div class="text-sm text-blue-600">
        Total Pengaduan: <span class="font-bold"><?php echo e(count($items)); ?></span>
      </div>
    </div>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-md">
      <div class="w-full overflow-x-auto">
        <?php if($errors->any()): ?>
        <div class="p-4 mb-4 text-red-700 bg-red-100 border-l-4 border-red-500 rounded">
          <div class="font-bold">Error!</div>
          <ul class="mt-2 ml-4 list-disc">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <?php endif; ?>
        
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-black uppercase bg-gradient-to-r from-blue-600 to-blue-400">
              <th class="px-6 py-4 rounded-tl-lg">Foto</th>
              <th class="px-6 py-4">Pelapor</th>
              <th class="px-6 py-4">Tanggal</th>
              <th class="px-6 py-4">Status</th>
              <th class="px-6 py-4 rounded-tr-lg">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-blue-100">
            <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr class="text-blue-900 hover:bg-blue-50 transition-colors duration-150">
              <td class="px-6 py-4">
                <div class="flex items-center">
                  <div class="relative">
                    <img class="w-20 h-20 object-cover rounded-lg shadow-sm border border-blue-100" src="<?php echo e(Storage::url($item->image)); ?>" alt="Bukti Pengaduan" loading="lazy" />
                    <div class="absolute inset-0 bg-blue-500 opacity-0 hover:opacity-20 rounded-lg transition-opacity duration-300"></div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="text-sm font-medium"><?php echo e($item->name); ?></div>
              </td>
              <td class="px-6 py-4 text-sm">
                <div class="font-medium"><?php echo e($item->created_at->format('d M Y')); ?></div>
                <div class="text-blue-500"><?php echo e($item->created_at->format('H:i')); ?></div>
              </td>
              <td class="px-6 py-4 text-sm">
                <?php if($item->status =='Belum di Proses'): ?>
                <span class="px-3 py-1 text-xs font-semibold text-black bg-red-500 rounded-full">
                  <?php echo e($item->status); ?>

                </span>
                <?php elseif($item->status =='Sedang di Proses'): ?>
                <span class="px-3 py-1 text-xs font-semibold text-black bg-yellow-500 rounded-full">
                  <?php echo e($item->status); ?>

                </span>
                <?php else: ?>
                <span class="px-3 py-1 text-xs font-semibold text-black bg-green-500 rounded-full">
                  <?php echo e($item->status); ?>

                </span>
                <?php endif; ?>
              </td>
              <td class="px-6 py-4">
                <div class="flex items-center space-x-3">
                  <a href="<?php echo e(route('pengaduans.show', $item->id)); ?>" 
                    class="p-2 text-blue-600 bg-blue-100 rounded-full hover:bg-blue-200 transition-colors duration-200"
                    title="Detail Pengaduan"
                    data-tooltip-target="tooltip-detail">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                  </a>
                  
                  <form action="<?php echo e(route('pengaduans.destroy', $item->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit"
                      class="p-2 text-red-600 bg-red-100 rounded-full hover:bg-red-200 transition-colors duration-200 confirm-delete"
                      title="Hapus Pengaduan"
                      data-tooltip-target="tooltip-delete">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
              <td colspan="5" class="px-6 py-4 text-center text-blue-600">
                <div class="flex flex-col items-center justify-center py-8">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>
                  <span class="mt-4 text-lg font-medium text-blue-500">Belum ada data pengaduan</span>
                </div>
              </td>
            </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
      
      <!-- Remove pagination check since we're not using paginated data -->
    </div>
  </div>
</main>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 z-50 items-center justify-center hidden bg-black bg-opacity-50 modal">
  <div class="p-6 bg-white rounded-lg shadow-xl">
    <h3 class="mb-4 text-lg font-medium text-blue-800">Konfirmasi Penghapusan</h3>
    <p class="mb-6 text-blue-600">Apakah Anda yakin ingin menghapus pengaduan ini? Data yang dihapus tidak dapat dikembalikan.</p>
    <div class="flex justify-end space-x-3">
      <button id="cancelDelete" class="px-4 py-2 text-blue-700 bg-blue-100 rounded hover:bg-blue-200">Batal</button>
      <button id="confirmDelete" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">Hapus</button>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
  // Delete confirmation
  document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.confirm-delete');
    const modal = document.getElementById('deleteModal');
    const cancelBtn = document.getElementById('cancelDelete');
    const confirmBtn = document.getElementById('confirmDelete');
    let formToSubmit;
    
    deleteButtons.forEach(button => {
      button.addEventListener('click', function(e) {
        e.preventDefault();
        formToSubmit = this.closest('form');
        modal.classList.remove('hidden');
      });
    });
    
    cancelBtn.addEventListener('click', function() {
      modal.classList.add('hidden');
    });
    
    confirmBtn.addEventListener('click', function() {
      formToSubmit.submit();
    });
    
    // Close modal when clicking outside
    window.addEventListener('click', function(e) {
      if (e.target === modal) {
        modal.classList.add('hidden');
      }
    });
  });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\62822\Documents\LARAFEL PROJEK\pengaduan-masyarakat\resources\views/pages/admin/pengaduan/index.blade.php ENDPATH**/ ?>