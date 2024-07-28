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
            <?php echo e(__('Dashboard')); ?>, Welcome <?php echo e(Auth::user()->name); ?>!
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="container-fluid">
        <div class="row mt-4 d-flex">
            <div class="col-md-6 col-xl-3 mb-4">
                <form action="" method="POST" >
                    <?php echo csrf_field(); ?>
                    <div class="card shadow border-start-warning" style="padding-left: 0px;padding-right: 0px;margin-right: -135px;">
                        <div class="card-body" style="margin-right: -4px;">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">LICENSE PLATE</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"></div>
                                </div>
                            </div><input type="text" name="plat" style="border-style: initial;border-radius: 7px;background: rgb(245,238,238);height: 48px;width: 325.6px;" placeholder="Enter the vehicle license plate">
                        </div>
                    </div>
                    <div class="card shadow border-start-warning mt-2" style="padding-left: 0px;padding-right: 0px;margin-right: -135px;">
                        <div class="card-body" style="margin-right: -4px;">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">DATE</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"></div>
                                </div>
                            </div><input type="date" name="tanggal" style="border-radius: 7px;width: 238.4px;height: 52px;background: rgb(245,238,238);border-style: initial;">
                        </div>
                    </div>
                    <div class="card shadow border-start-warning mt-2" style="spadding-left: 0px;padding-right: 0px;margin-right: -135px;">
                        <div class="card-body" style="margin-right: -4px;">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">ENTRY</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"></div>
                                </div>
                            </div><input type="time" name="jam_masuk" style="border-radius: 7px;width: 238.4px;height: 52px;background: rgb(245,238,238);border-style: initial;">
                        </div>
                    </div>
                    <div class="card shadow border-start-warning mt-2" style="padding-left: 0px;padding-right: 0px;margin-right: -135px;">
                        <div class="card-body" style="margin-right: -4px;">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">VEHICLE TYPE</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"></div>
                                    <select name="jenis_kendaraan" style="width: 144.8px;height: 43.2px;background: rgb(245,238,238);border-style: initial;border-radius: 7px;">
                                        <option value="">Select</option>
                                        <option value="Mobil">Car</option>
                                        <option value="Motor">Motorcycle</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="mt-2 px-4 mr-3 btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col">
                <div class="card shadow border-start-primary py-2 bg-warning" style="margin-left: 431px;">
                    <div class="card-body">
                        <h6 class="card-title text-primary fw-bold">TOTAL VEHICLE</h6>
                        <p class="card-text text-black fw-bold fs-4"><?php echo e($totalVehicles); ?></p>
                    </div>
                    
                </div>
                <div class="card shadow border-start-info py-2 bg-warning" style="margin-top: 15px;margin-left: 432px;">
                    <div class="card-body">
                        <h6 class="card-title text-primary fw-bold">INSTRUCTION:</h6>
                        <ul id="instruction" class="list-group list-group-flush">
                            <li class="list-group-item bg-warning">1. Enter the details of the vehicle entering the parking lot.</li>
                            <li class="list-group-item bg-warning">2. Click submit.</li>
                            <li class="list-group-item bg-warning">3. Go to Vehicles to edit, delete, and print the parking receipt.</li>
                        </ul>
                        <style>#instruction {font-size: 10pt}</style>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\project-spark\resources\views/dashboard.blade.php ENDPATH**/ ?>