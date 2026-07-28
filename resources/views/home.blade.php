@extends('layouts.app')

@section('content')

<section class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-7">

                <h1 class="display-4 fw-bold">
                    Selamat Datang
                </h1>

                <p class="lead">
                    Website sederhana menggunakan Laravel 13.
                    Dibuat sebagai tugas membuat View Profile.
                </p>

                <a href="#" class="btn btn-warning btn-lg mt-3">
                    Pelajari Lebih Lanjut
                </a>

            </div>

            <div class="col-md-5 text-center">

                <img src="https://ui-avatars.com/api/?name=Yuni&size=300" alt="Profile">

            </div>

        </div>

    </div>

</section>

<div class="container my-5">

    <div class="text-center mb-5">

        <h2>Profil Mahasiswa</h2>

        <p class="text-muted">
            Informasi singkat mengenai pemilik website.
        </p>

    </div>

    <div class="row g-4">

        <div class="col-md-4">

            <div class="card card-profile h-100">

                <div class="card-body text-center">

                    <h4>👤 Nama</h4>

                    <p>Yuni</p>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card card-profile h-100">

                <div class="card-body text-center">

                    <h4>🎓 NIM</h4>

                    <p>232136</p>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card card-profile h-100">

                <div class="card-body text-center">

                    <h4>💻 Program Studi</h4>

                    <p>Teknik Informatika</p>

                </div>

            </div>

        </div>

    </div>

    <div class="card mt-5 shadow">

        <div class="card-body">

            <h3>Tentang Saya</h3>

            <p>
                Halo! Saya adalah mahasiswa Teknik Informatika yang sedang mempelajari
                framework Laravel. Website ini dibuat sebagai tugas praktikum untuk
                mempelajari pembuatan View, Route, dan Layout pada Laravel.
            </p>

        </div>

    </div>

</div>

@endsection