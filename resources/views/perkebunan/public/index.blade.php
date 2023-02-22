@extends('layouts.public.master')
@section('content')
    <main id="main">
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                <h2>Perusahaan Perkebunan Kelapa Sawit</h2>
                <p>Informasi Daftar Perusahaan Perkebunan Kelapa Sawit di Kabupaten Sanggau</p>
                </div>
                <div class="row">
                    <table id="tablePerkebunan" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>NAMA PERKEBUNAN</th>
                            <th>NPWP</th>
                            <th>POLA KEMITRAAN</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection