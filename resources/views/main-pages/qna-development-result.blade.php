@extends('layouts.main-layout')

@section('title', 'QnA Development')

@section('content')
    <div class="content-header">
        <div class="container rounded bg-white mt-4 shadow-sm">
            <div class="row">
                <div class="col-12 text-center my-auto py-3">
                    <h3 class="fw-bold">Selamat Pagi. Silahkan Bertanya Mengenai e-Development</h3>
                    <span>Silahkan bertanya dengan mengetikan pertanyaan di kolom pertanyaan di bawah dan tunggu balasan dari kami secepatanya</span>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-11">
                                            <input type="email" class="form-control" id="exampleInputEmail1" autofocus placeholder="Masukan pertanyaan anda" autocomplete="off">
                                        </div>
                                        <div class="col-1 px-0">
                                            <button class="btn btn-block btn-primary"><i class="fas fa-paper-plane mr-2"></i> Kirim</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Permisi, apa itu e-development?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    e-Kinerja adalah aplikasi berbasis web yang digunakan untuk melakukan monitoring dan evaluasi terhadap pembelajaran yang dilakukan oleh para pegawai.
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
        </div>
    </div>
@endsection