@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="pb-3 me-0">Data Diri</h3>
            </div>
            <div class="col-auto">
                <h3>About me</h3>
            </div>
        </div>
        <div class="home container-xxl">
            <div class="row py-5 align-items-center justify-content-center">
                <div class="col-4 text-center">
                    <img src="{{ Vite::asset('resources/images/DSC00288-15.jpg') }}" alt="">
                </div>
                <div class="col-8 align-items-center px-4 py-4 pb-0 rounded-4">
                    <div class="mb-4">
                        <label class="pb-1">Nama Lengkap</label>
                        <h5>Adhe Ryan Fahrizal</h5>
                    </div>
                    <div class="mb-4">
                        <label class="pb-1">NIM</label>
                        <h5>1204220034</h5>
                    </div>
                    <div class="mb-4">
                        <label class="pb-1">Tanggal lahir</label>
                        <h5>29 Februari 2004</h5>
                    </div>
                    <div class="mb-4">
                        <label class="pb-1">Hobi</label>
                        <h5>Mendengar musik</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="deskripsi rounded-4">
            <h5 class="px-4 pt-4">Biodata Saya</h5>
            <p class="px-4 pb-4">Saya adalah seorang individu yang penuh semangat dalam menjelajahi dunia pengetahuan dan teknologi. Dengan latar belakang dalam sistem informasi, saya memiliki minat yang kuat dalam bidang IT Management. Tujuan saya adalah terus belajar dan berkembang, serta berkontribusi positif bagi masyarakat melalui keterampilan dan pengetahuan yang saya miliki.</p>
        </div>
    </div>
@endsection
