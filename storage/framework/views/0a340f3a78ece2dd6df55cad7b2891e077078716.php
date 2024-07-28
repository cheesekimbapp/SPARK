

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Dashboard</h3>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-warning py-2" style="margin-left: -3px;padding-right: 0px;margin-right: -136px;">
                <div class="card-body" style="padding-right: 0px;margin-right: -3px;">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">PLAT NOMOR</span></div>
                            <div class="text-dark fw-bold h5 mb-0"></div>
                        </div>
                    </div><input type="text" style="margin-right: 83px;margin-left: -8px;border-style: initial;border-radius: 7px;background: rgb(245,238,238);height: 48px;width: 325.6px;" placeholder="Masukan Plat Nomor Kendaraan">
                </div>
            </div>
            <div class="card shadow border-start-warning py-2" style="margin-top: 18px;padding-left: 0px;padding-right: 0px;margin-right: -135px;">
                <div class="card-body" style="margin-right: -4px;">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">Waktu</span></div>
                            <div class="text-dark fw-bold h5 mb-0"></div>
                        </div>
                    </div><input type="datetime-local" style="border-radius: 7px;width: 238.4px;height: 52px;background: rgb(245,238,238);border-style: initial;">
                </div>
            </div>
            <div class="card shadow border-start-warning py-2" style="margin-top: 18px;padding-left: 0px;padding-right: 0px;margin-right: -135px;">
                <div class="card-body" style="margin-right: -4px;">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="background: #ffffff;color: var(--bs-blue);">jenis kendaraan</span></div>
                            <div class="text-dark fw-bold h5 mb-0"></div>
                        </div>
                    </div><select style="width: 144.8px;height: 43.2px;background: rgb(245,238,238);border-style: initial;border-radius: 7px;">
                        <option value="">Pilih</option>
                        <option value="12">Mobil</option>
                        <option value="13">Motor</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-xl-4">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center" style="background: rgb(255,201,65);margin-right: -404px;">
                    <h6 class="text-primary fw-bold m-0" style="text-align: center;">Properties</h6>
                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="background: #ffc941;padding-right: 0px;margin-right: -405px;">
                    <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;pie&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Mobil&quot;,&quot;Tersedia&quot;,&quot;Motor&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;,&quot;15&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}}}"></canvas></div>
                    <div class="text-center small mt-4"><span class="me-2"><i class="fas fa-circle text-primary"></i>&nbsp;Mobil</span><span class="me-2"><i class="fas fa-circle text-success"></i>&nbsp;Tersedia</span><span class="me-2"><i class="fas fa-circle text-info"></i>&nbsp;Motor</span></div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow border-start-primary py-2" style="background: #ffc941;margin-left: 431px;">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Terisi</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>30</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow border-start-info py-2" style="background: rgb(255,201,65);margin-top: 15px;margin-left: 432px;">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>KAPASITAS tersedia</span></div>
                            <div class="row g-0 align-items-center">
                                <div class="col-auto">
                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>50%</span></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-spark-2\resources\views/dashboard.blade.php ENDPATH**/ ?>