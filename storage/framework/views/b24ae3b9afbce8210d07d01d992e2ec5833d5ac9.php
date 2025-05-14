<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('includes.landing.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
  <?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="w-full max-w-1xl bg-white p-14 rounded-3xl shadow-2xl">
      <!-- Logo -->
      <div class="flex justify-center mb-3">
        <a href="/">
          <img class="w-32" src="<?php echo e(asset('assets/img/Logo_PLN.png')); ?>" alt="Logo PLN">
        </a>
      </div>
      <h2 class="text-center text-2xl font-semibold text-gray-700 mb-3">Login</h2>

      <!-- Session Status -->
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-session-status','data' => ['class' => 'mb-4 text-green-600','status' => session('status')]]); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4 text-green-600','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

      <!-- Validation Errors -->
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4 text-red-600','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4 text-red-600','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

      <form method="POST" action="<?php echo e(route('login')); ?>" class="space-y-2">
        <?php echo csrf_field(); ?>

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'email','class' => 'mt-1 w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400','type' => 'email','name' => 'email','value' => old('email'),'required' => true,'autofocus' => true]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'email','class' => 'mt-1 w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400','type' => 'email','name' => 'email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('email')),'required' => true,'autofocus' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'password','class' => 'mt-1 w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400','type' => 'password','name' => 'password','required' => true]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'password','class' => 'mt-1 w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400','type' => 'password','name' => 'password','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>

        <!-- Remember & Forgot -->
        <div class="flex items-center justify-between">
          <label class="inline-flex items-center">
            <input type="checkbox" name="remember" class="rounded border-gray-300 text-blue-600">
            <span class="ml-2 text-sm text-gray-600">Ingat Saya</span>
          </label>

          <?php if(Route::has('password.request')): ?>
          <a href="<?php echo e(route('password.request')); ?>" class="text-sm text-blue-600 hover:underline">Lupa kata sandi?</a>
          <?php endif; ?>
        </div>

        <!-- Button Login -->
        <div>
          <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md font-semibold shadow hover:bg-blue-700 transition duration-300">
            Login
          </button>
        </div>

        <!-- Register Link -->
        <div class="text-center mt-4 text-sm text-gray-600">
          Belum punya akun? <a href="<?php echo e(route('register')); ?>" class="text-blue-600 hover:underline">Daftar di sini</a>
        </div>
      </form>
    </div>
   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
</body>

</html>
<?php /**PATH C:\Users\62822\Documents\LARAFEL PROJEK\pengaduan-masyarakat\resources\views/auth/login.blade.php ENDPATH**/ ?>