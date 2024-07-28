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
                                <th>License Plate</th>
                                <th>Vehicle Type</th>
                                <th>Date</th>
                                <th>Entry</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                            <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($vehicle->plat); ?></td>
                                    <td><?php echo e($vehicle->jenis_kendaraan); ?></td>
                                    <td><?php echo e($vehicle->tanggal); ?></td>
                                    <td><?php echo e($vehicle->jam_masuk); ?></td>
                                    <td class="d-flex justify-content-center">
                                        <form action="<?php echo e(route('edit', $vehicle)); ?>" method="get">
                                            <?php echo csrf_field(); ?>
                                            <button class="btn btn-success mr-2">Edit</button>
                                        </form>
                                        <form action="<?php echo e(route('destroy', $vehicle)); ?>" method="post">
                                            <?php echo method_field('delete'); ?> <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                        <form action="<?php echo e(route('print', $vehicle)); ?>" method="get">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-secondary ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                                                </svg>                                                  
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <div>
                    <div class="d-flex justify-content-end">
                        <?php echo e($vehicles->links('pagination::bootstrap-4')); ?>

                    </div>
                    <div class="d-flex justify-content-end">
                        <p>Data per page: <?php echo e($vehicles->perPage()); ?></p>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\spark\project-spark - Copy\resources\views/vehicles.blade.php ENDPATH**/ ?>