<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('About')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
   <div class="container py-4 py-xl-5">
        <div class="row mb-4 mb-lg-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 style="color: rgb(78,115,223);">Kelompok 8</h2>
                <p>With Spark, campus parking management becomes more efficient and effective. The system offers better administration to optimize parking resources and improve overall parking experience.</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-2 row-cols-md-4">
            <div class="col">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center d-flex flex-column align-items-center pt-4">
                        <img class="rounded mb-3 fit-cover" width="130" height="130" src="<?php echo e(asset('img/gilang.jpg')); ?>">
                        <h5 class="fw-bold text-primary card-title mb-0">Gilang Alfarizi</h5>
                        <p class="text-muted card-text mb-2">Backend</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center d-flex flex-column align-items-center pt-4">
                        <img class="rounded mb-3 fit-cover" width="130" height="130" src="<?php echo e(asset('img/muchtar.jpg')); ?>">
                        <h5 class="fw-bold text-primary card-title mb-0">Muhammad Muchtar</h5>
                        <p class="text-muted card-text mb-2">Frontend</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center d-flex flex-column align-items-center pt-4">
                        <img class="rounded mb-3 fit-cover" width="130" height="130" src="<?php echo e(asset('img/nadya.jpg')); ?>">
                        <h5 class="fw-bold text-primary card-title mb-0">Nadya Qolbin</h5>
                        <p class="text-muted card-text mb-2">Database</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center d-flex flex-column align-items-center pt-4">
                        <img class="rounded mb-3 fit-cover" width="130" height="130" src="<?php echo e(asset('img/stefan.jpg')); ?>">
                        <h5 class="fw-bold text-primary card-title mb-0">Stefan Enrico</h5>
                        <p class="text-muted card-text mb-2">Backend</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-spark\resources\views/about.blade.php ENDPATH**/ ?>