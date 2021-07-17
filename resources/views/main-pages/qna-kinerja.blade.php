@extends('layouts.main-layout')

@section('title', 'QnA Kinerja')

@section('content')
    <div class="content-header">
        <div class="container rounded bg-white mt-4 shadow-sm">
            <div class="row">
                <div class="col-12 text-center my-auto py-3">
                    <h3 class="fw-bold">Selamat Pagi. Silahkan Bertanya Mengenai e-Kinerja</h3>
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
                                            <a href="{{ route('QnA Kinerja Result') }}" class="btn btn-block btn-primary"><i class="fas fa-paper-plane mr-2"></i> Kirim</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <span class="text-muted">Anda belum mengajukan pertanyaan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection