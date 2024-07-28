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
            <?php echo e(__('Daftar Kendaraan')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="container text-center">
        <form action="<?php echo e(route('update', $vehicle)); ?>" method="post">
            <?php echo method_field('patch'); ?>
            <?php echo csrf_field(); ?>
            <div class="row mt-4">
                <div class="col card shadow border-start-warning">
                    <div class="card-body">
                        <h6 class="text-primary fw-bold ">PLAT</h6>
                        <input type="text" name="plat" value="<?php echo e($vehicle->plat); ?>">
                    </div>
                </div>
                <div class="col card shadow border-start-warning ml-4">
                    <div class="card-body">
                        <h6 class="text-primary fw-bold ">TANGGAL</h6>
                        <input type="date" name="tanggal" value="<?php echo e($vehicle->tanggal); ?>">
                    </div>
                </div>
                <div class="col card shadow border-start-warning ml-4">
                    <div class="card-body">
                        <h6 class="text-primary fw-bold ">JAM MASUK</h6>
                        <input type="time" name="jam_masuk" value="<?php echo e($vehicle->jam_masuk); ?>">
                    </div>
                </div>
                <div class="col card shadow border-start-warning ml-4">
                    <div class="card-body">
                        <h6 class="text-primary fw-bold ">JENIS KENDARAAN</h6>
                        <select name="jenis_kendaraan" value="<?php echo e($vehicle->jenis_kendaraan); ?>">
                            <option value="<?php echo e($vehicle->jenis_kendaraan); ?>"><?php echo e($vehicle->jenis_kendaraan); ?></option>
                            <option value="Car">Car</option>
                            <option value="Motorcycle">Motorcycle</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="row mt-4 p-2 px-4 mr-3 btn btn-primary">EDIT</button>
        </form>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-spark\resources\views/edit.blade.php ENDPATH**/ ?>