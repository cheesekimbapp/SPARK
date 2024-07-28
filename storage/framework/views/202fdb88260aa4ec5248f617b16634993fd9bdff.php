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

    <div class="container-fluid">
        <div id="wrapper">
            <div class="card shadow card-body mt-4">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table text-center" border="1px">
                        <thead>
                            <tr>
                                <th>Plat Kendaraan</th>
                                <th>Jenis Kendaraan</th>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                            </tr>
                        </thead>
                            
                            <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($vehicle->plat); ?></td>
                                    <td><?php echo e($vehicle->jenis_kendaraan); ?></td>
                                    <td><?php echo e($vehicle->tanggal); ?></td>
                                    <td><?php echo e($vehicle->jam_masuk); ?></td>
                                    <td>
                                        <button class="btn btn-success">Edit</button>
                                        <form action="<?php echo e(route('delete', $vehicle)); ?>" method="post">
                                            <?php echo method_field('delete'); ?> <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tfoot>
                                <tr>
                                    <th>Plat Kendaraan</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>Tanggal</th>
                                    <th>Jam Masuk</th>
                                </tr>
                            </tfoot>
                    </table>
                    
                    
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-spark\resources\views//vehicles.blade.php ENDPATH**/ ?>