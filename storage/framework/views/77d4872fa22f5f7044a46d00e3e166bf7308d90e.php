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
            <?php
                // $vehicles = App\Models\Vehicle::all();
            ?>
            <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($vehicle->plat); ?></td>
                    <td><?php echo e($vehicle->jenis_kendaraan); ?></td>
                    <td><?php echo e($vehicle->tanggal); ?></td>
                    <td><?php echo e($vehicle->jam_masuk); ?></td>
                    <td class="d-flex justify-content-center">
                        <button class="btn btn-success mr-2">Edit</button>
                        <form action="<?php echo e(route('destroy', $vehicle)); ?>" method="post">
                            <?php echo method_field('delete'); ?> <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                        <button class="btn btn-secondary ml-2">
                            <img src="<?php echo e(asset('img/print.png')); ?>" width="20" alt="print">
                        </button>
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
</div><?php /**PATH C:\xampp\htdocs\project-spark\resources\views/vehicles-index.blade.php ENDPATH**/ ?>