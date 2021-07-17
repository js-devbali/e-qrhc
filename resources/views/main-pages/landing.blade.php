@extends('layouts.main-layout')

@section('title', 'e-HQRC | Selamat Datang')

@push('css')
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
@endpush

@section('content')
    <div class="content-header">
        <div class="container rounded bg-white mt-4 shadow-sm">
            <div class="row">
                <div class="col-12 text-center my-auto py-3">
                    <h3 class="fw-bold">Selamat Datang</h3>
                    <span>Cari Tahu yang Ingin Anda Ketahui. Kami Siap Menjawab Pertanyaan Anda</span>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <p class="my-auto fs-5 fw-autos">Apa yang Ingin Anda Ketahui?</p>
                                </div>
                                <div class="card-body">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Contoh Pertanyaan 1
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Jawaban pertanyaan Pertama
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                              Contoh Pertanyaan 2
                                            </button>
                                          </h2>
                                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                              Jawaban pertanyaan kedua
                                            </div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                              Contoh Pertanyaan 3
                                            </button>
                                          </h2>
                                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                              Jawaban pertanyaan ketiga
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card">
                                <a href="{{ route('QnA Kinerja') }}" class="callout callout-info text-decoration-none link-dark my-auto">
                                    <p class="my-auto"><i class="fas fa-external-link-alt mr-2"></i>Tanya Langsung Seputar e-Kinerja</p>
                                </a>
                            </div>
                            <div class="card">
                                <a href="{{ route('QnA Development') }}" class="callout callout-info text-decoration-none link-dark my-auto">
                                    <p class="my-auto"><i class="fas fa-external-link-alt mr-2"></i>Tanya Langsung Seputar e-Development</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection