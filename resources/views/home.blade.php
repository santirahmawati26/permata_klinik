@extends('layouts.app')

@section('content')
{{-- <div class="header-custom text-center mb-5 bg-success text-white py-9">
    <h2 class="display-6">Permata Klinik</h2>
</div> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <img src="{{ url('image/klinik.png') }}" class="img-fluid custom-img mb-2 rounded shadow" alt="klinik">
    </div>
    <div class="row justify-content-cecanter">
        <div class="col-md-12"></div>
            <div class="card card-custom mt-4 shadow">
                <div class="card-body card-body-costum">
                <center>
                    <h3 class="text-success">SELAMAT DATANG DI PERMATA KLINIK</h3>
                    <hr class="my-4">
                </center>
                    <ul class="text-dark">
                        <p>Klinik Permata berkomitmen untuk memberikan pelayanan kesehatan, pengobatan, dan pencegahan penyakit dengan integritas tinggi. Klinik ini didirikan atas dasar kepedulian terhadap kesehatan dan kesejahteraan karyawan perusahaan serta keluarga mereka, dengan tujuan membangun perusahaan yang kuat, mendukung masyarakat sekitar, dan berkontribusi positif terhadap negara.</p>
                        <p>Untuk mewujudkan kepedulian tersebut serta mengembangkan layanan yang ada, Klinik Permata terus berupaya meningkatkan kualitas pelayanan kesehatan yang prima. Klinik ini juga bertransformasi mengikuti perkembangan teknologi kesehatan dan selalu menjunjung tinggi etika bisnis yang baik.</p>
                        <p>Ke depannya, Klinik Permata diharapkan mendapatkan dukungan dari semua pihak yang terkait, serta terus memberikan pelayanan kesehatan yang komprehensif sesuai dengan visi, misi, dan nilai-nilai yang telah ditetapkan.</p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-custom mt-4 shadow">
                <div class="card-body card-body-custom ">
                    <center>
                        <h3 class="text-success" >PERMATA KLINIK SIAP MELAYANI ANDA, DENGAN LAYANAN UNGGULAN</h3>
                        <hr class="my-4">
                    </center>
                    <center>
                    <div class="row justify-content-center">
                        <div class="col-md-2">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{ asset('image/image-obat.jpeg') }}" alt="obat">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Keunggulan Klinik dalam Setiap Dosis Obat.</b></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{ asset('image/image-dokter.jpg') }}" alt="dokter">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Dokter Kami, Harapan Kesehatan Anda.</b></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{ asset('image/image-konsultasi.png') }}" alt="konsultasi">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Di Klinik kami: Konsultasi Mudah, Perawatan Cepat </b></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{ asset('image/image-layanan.jpg') }}" alt="layanan">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Terbaik untuk Kesehatan dan Kepuasan Anda.</b></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{ asset('image/image-pasien.jpeg') }}" alt="pasien">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Pasien Kami, Prioritas Utama di Setiap Langkah</b></h5>
                                </div>
                            </div>
                        
                    </center>    
                </div>
            </div>
        </div>
    </div>

    
<div class="row mt-5">
    <div class="col-md-12">
        <h1>HUBUNGI KAMI</h1>
        <hr class="my-4">
    </div>
    <div class="col-md-4">
        <h5>ALAMAT KAMI</h5>
        <p>
            "Jl. Raya Soreang N0.31"
            <br>
            Kabupaten Bandung
            <br>
            Jawa Barat
        </p>
    </div>
    <div class="col-md-4">
        <h5>JAM OPERASIONAL</h5>
        <p>24 JAM</p>
    </div>
    <div class="col-md-4">
        <h5>HUBUNGI KAMI</h5>
        <p>Telp : 022 - 55666316 / 08119066652</p>
        <p>Email : cs@permataklinik.com</p>
    </div>
</div>
                    
<footer class="mt-5 bg-light p-3 text-center">
    <p>&copy; 2024 Klinik Permata. Semua hak dilindungi.</p>
</footer>
@endsection