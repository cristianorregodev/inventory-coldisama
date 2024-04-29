@extends('tablar::page')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
                <!-- Page title actions -->

            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="card">
                    <div class="row col p-4">
                        <div class="col-md-4">
                            <a href="{{ route('products.index') }}" class="card p-3 mb-2 bg-red rounded-4">
                                <div class="d-flex justify-content-between align-center">
                                    <div>
                                        <span class="btn btn-outline-ligth btn-sm rounded-4 px-2">Articulos</span>
                                        <div class="mt-5">
                                            <h3 class="heading text-white">Articulos de<br>inventario</h3>
                                        </div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160"
                                        viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('loans.index') }}" class="card p-3 mb-2 bg-azure rounded-4">
                                <div class="d-flex justify-content-between align-center">
                                    <div>
                                        <span class="btn btn-outline-ligth btn-sm rounded-4 px-2">Prestamos</span>
                                        <div class="mt-5">
                                            <h3 class="heading text-white">Listado de<br>prestamos</h3>
                                        </div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160"
                                        viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M16 4h4v4" />
                                        <path d="M15 9l5 -5" />
                                        <path d="M4 20l5 -5" />
                                        <path d="M16 20h4v-4" />
                                        <path d="M4 4l16 16" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('clients.index') }}" class="card p-3 mb-2 bg-bitbucket rounded-4">
                                <div class="d-flex justify-content-between align-center">
                                    <div>
                                        <span class="btn btn-outline-ligth btn-sm rounded-4 px-2">Usuarios</span>
                                        <div class="mt-5">
                                            <h3 class="heading text-white">Listado de<br>usuarios</h3>
                                        </div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160"
                                        viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    </svg>
                                </div>
                            </a>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
