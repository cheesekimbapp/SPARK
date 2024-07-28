<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>
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
                        <img class="rounded mb-3 fit-cover" width="130" height="130" src="{{asset('img/gilang.jpg')}}">
                        <h5 class="fw-bold text-primary card-title mb-0">Gilang Alfarizi</h5>
                        <p class="text-muted card-text mb-2">Backend</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center d-flex flex-column align-items-center pt-4">
                        <img class="rounded mb-3 fit-cover" width="130" height="130" src="{{asset('img/muchtar.jpg')}}">
                        <h5 class="fw-bold text-primary card-title mb-0">Muhammad Muchtar</h5>
                        <p class="text-muted card-text mb-2">Frontend</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center d-flex flex-column align-items-center pt-4">
                        <img class="rounded mb-3 fit-cover" width="130" height="130" src="{{asset('img/nadya.jpg')}}">
                        <h5 class="fw-bold text-primary card-title mb-0">Nadya Qolbin</h5>
                        <p class="text-muted card-text mb-2">Database</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center d-flex flex-column align-items-center pt-4">
                        <img class="rounded mb-3 fit-cover" width="130" height="130" src="{{asset('img/stefan.jpg')}}">
                        <h5 class="fw-bold text-primary card-title mb-0">Stefan Enrico</h5>
                        <p class="text-muted card-text mb-2">Backend</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@include('layouts.master')