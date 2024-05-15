<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Link-Kerjaku | Status Pelamar</title>
    
<style>
    .text-clickable {
    cursor: pointer;
}

.text-clickable:hover {
    color: #82C1F9;
}

</style>

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/HomePagePerusahaan">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" href="/StatusPelamar">Status Pelamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" href="/aboutperusahaan">Tentang Kami</a>
                </li>
            </ul>
            <div class="d-flex">
            <a href="/buatlowongan" class="btn btn-secondary me-2" style="background-color: #8DA4B8; color: #808080; text-decoration: none;">Buat Lowongan</a>
            <a href="#" class="btn btn-secondary d-flex align-items-center justify-content-center" role="button" style="width: 40px; height: 40px; background-color: #6c757d; border-radius: 50%; text-decoration: none; margin-left: 10px;">
        <img src="img/user.png" alt="Profile Image" style="width: 30px; height: 30px; border-radius: 50%;">
    </a>
</div>
        </div>
    </div>
</nav>


<!-- Section Pertama -->
<section style="background-color: #D9D9D9; padding: 50px;">
<div class="col" style="margin-left: 25px;">
<select class="select" aria-label="Default select example" style="width: 250px; height: 40px; margin-left: 50px; margin-top: 25px; background-color: transparent; border: none;">
  <option selected>Software Engineer</option>
  <option value="1">Backend</option>
  <option value="2">UI/UX</option>
  <option value="3">Digital Marketing</option>
</select>
</div>

<div style="display: flex; justify-content: space-between; margin-top: 45px; margin-left: 100px;">
    <span class="text-clickable" style="margin-left: 55px;">Semua Pelamar</span>
    <span style="margin-right: 45px;" class="text-clickable">Belum dibaca</span>
    <span style="margin-right: 75px;" class="text-clickable">Sudah dibaca</span>
    <span style="margin-right: 100px;" class="text-clickable">Ditolak</span>
    <span style="margin-left: 5px; margin-right: 220px;" class="text-clickable">Disimpan</span>
</div>
</section>
<!-- Section Akhir -->

<!-- Section Kedua -->
<section style="background-color: #FFFFFF; padding: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h6>Menampilkan 6 Pelamar</h6>
            </div>
            <div class="col-md-6" style="margin-top: -15px;">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Cari Pelamar" aria-label="Search" style="padding-right: 30px; background-image: url('svg/search.svg'); background-repeat: no-repeat; background-position: calc(100% - 10px) center;">
                </form>
            </div>
        </div>
    </div>


    <div class="card" id="jobCard" style="width: 1120px; height: 225px; background-color: #E9EBF8; margin-top: 45px; border-radius: 20px; margin-left: 145px;">
    <img src="img/blog1.jpg" class="card-img-top" alt="Card Image" style="width: 187px; height: 158px; background-color: #D9D9D9; margin-top: 35px; margin-left: 35px;">
    <div class="card-body">
        <h6 class="card-title" style="margin-left: 250px; margin-top: -120px;">Nama Pelamar, Pekerjaan yang Dilamar</h6>
        <div style="display: flex; align-items: center;">
            <img src="svg/location.svg" alt="Icon 1" style="width: 30px; height: 30px; margin-left: 250px; margin-top: 25px;">
            <p style="margin-left: 20px; margin-top: 35px;">Lokasi</p>
            <img src="svg/date.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
            <p style="margin-left: 20px; margin-top: 40px;">3 hari yang lalu</p>
            <img src="svg/bag.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
            <p style="margin-left: 20px; margin-top: 40px;">2 tahun</p>
        </div>
    </div>
</div>

<div class="card" id="jobCard2" style="width: 1120px; height: 225px; background-color: #E9EBF8; margin-top: 45px; border-radius: 20px; margin-left: 145px;">
    <img src="img/blog1.jpg" class="card-img-top" alt="Card Image" style="width: 187px; height: 158px; background-color: #D9D9D9; margin-top: 35px; margin-left: 35px;">
    <div class="card-body">
        <h6 class="card-title" style="margin-left: 250px; margin-top: -120px;">Nama Pelamar, Pekerjaan yang Dilamar</h6>
        <div style="display: flex; align-items: center;">
    <img src="svg/location.svg" alt="Icon 1" style="width: 30px; height: 30px; margin-left: 250px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 35px;">Lokasi</p>
    <img src="svg/date.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">3 hari yang lalu</p>
    <img src="svg/bag.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">2 tahun</p>
</div>
    </div>
</div>

<div class="card" id="jobCard3" style="width: 1120px; height: 225px; background-color: #E9EBF8; margin-top: 45px; border-radius: 20px; margin-left: 145px;">
    <img src="img/blog1.jpg" class="card-img-top" alt="Card Image" style="width: 187px; height: 158px; background-color: #D9D9D9; margin-top: 35px; margin-left: 35px;">
    <div class="card-body">
        <h6 class="card-title" style="margin-left: 250px; margin-top: -120px;">Nama Pelamar, Pekerjaan yang Dilamar</h6>
        <div style="display: flex; align-items: center;">
    <img src="svg/location.svg" alt="Icon 1" style="width: 30px; height: 30px; margin-left: 250px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 35px;">Lokasi</p>
    <img src="svg/date.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">3 hari yang lalu</p>
    <img src="svg/bag.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">2 tahun</p>
</div>
    </div>
</div>

<div class="card" id="jobCard4" style="width: 1120px; height: 225px; background-color: #E9EBF8; margin-top: 45px; border-radius: 20px; margin-left: 145px;">
    <img src="img/blog1.jpg" class="card-img-top" alt="Card Image" style="width: 187px; height: 158px; background-color: #D9D9D9; margin-top: 35px; margin-left: 35px;">
    <div class="card-body">
        <h6 class="card-title" style="margin-left: 250px; margin-top: -120px;">Nama Pelamar, Pekerjaan yang Dilamar</h6>
        <div style="display: flex; align-items: center;">
    <img src="svg/location.svg" alt="Icon 1" style="width: 30px; height: 30px; margin-left: 250px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 35px;">Lokasi</p>
    <img src="svg/date.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">3 hari yang lalu</p>
    <img src="svg/bag.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">2 tahun</p>
</div>
    </div>
</div>

<div class="card" id="jobCard5" style="width: 1120px; height: 225px; background-color: #E9EBF8; margin-top: 45px; border-radius: 20px; margin-left: 145px;">
    <img src="img/blog1.jpg" class="card-img-top" alt="Card Image" style="width: 187px; height: 158px; background-color: #D9D9D9; margin-top: 35px; margin-left: 35px;">
    <div class="card-body">
        <h6 class="card-title" style="margin-left: 250px; margin-top: -120px;">Nama Pelamar, Pekerjaan yang Dilamar</h6>
        <div style="display: flex; align-items: center;">
    <img src="svg/location.svg" alt="Icon 1" style="width: 30px; height: 30px; margin-left: 250px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 35px;">Lokasi</p>
    <img src="svg/date.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">3 hari yang lalu</p>
    <img src="svg/bag.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">2 tahun</p>
</div>
    </div>
</div>

<div class="card" id="jobCard6" style="width: 1120px; height: 225px; background-color: #E9EBF8; margin-top: 45px; border-radius: 20px; margin-left: 145px;">
    <img src="img/blog1.jpg" class="card-img-top" alt="Card Image" style="width: 187px; height: 158px; background-color: #D9D9D9; margin-top: 35px; margin-left: 35px;">
    <div class="card-body">
        <h6 class="card-title" style="margin-left: 250px; margin-top: -120px;">Nama Pelamar, Pekerjaan yang Dilamar</h6>
        <div style="display: flex; align-items: center;">
    <img src="svg/location.svg" alt="Icon 1" style="width: 30px; height: 30px; margin-left: 250px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 35px;">Lokasi</p>
    <img src="svg/date.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">3 hari yang lalu</p>
    <img src="svg/bag.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">2 tahun</p>
</div>
    </div>
</div>



</section>
<!-- Section Akhir -->


<!-- Footer -->
<footer style="background-color: #E9EBF8; padding: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <!-- Logo -->
                <img src="path/to/logo.svg" alt="Logo" style="max-width: 100px;">
            </div>
            <div class="col-md-3 mb-4">
                <!-- Kategori -->
                <h5>Kategori</h5>
                <ul>
                    <li>Kategori 1</li>
                    <li>Kategori 2</li>
                    <li>Kategori 3</li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <!-- Tentang -->
                <h5>Tentang</h5>
                <ul>
                    <li>Tentang Kami</li>
                    <li>Tim Kami</li>
                    <li>Karir</li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <!-- Dukungan -->
                <h5>Dukungan</h5>
                <ul>
                    <li>Bantuan</li>
                    <li>FAQ</li>
                    <li>Hubungi Kami</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Lorem10 -->
                <p>Lorem ipsum</p>
                <!-- Icon email, telefon, lokasi -->
                <div>
                <span><img src="svg/email.svg" width="25" alt="Email Icon"> Lorem ipsum</span>
                </div>
                <div>
                <span><img src="svg/telephone.svg" width="25" alt="Phone Icon"> Lorem ipsum</span>
                </div>
                <div>
                <span><img src="svg/location.svg" width="25" alt="Location Icon"> Lorem ipsum</span>
                </div>
            </div>
        </div>
        <hr style="margin-top: 20px;">
        <div class="row">
    <div class="col-md-6">
        <!-- Credit -->
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, iusto.</p>
    </div>
    <div class="col-md-6">
        <!-- Ikuti Kami -->
        <ul class="list-inline text-right" style="margin: 0; padding: 0; list-style: none;">
            <li class="list-inline-item" style="margin-right: 10px;"><a href="#"><img src="svg/facebook.svg" width="30" alt="Facebook Icon"></a></li>
            <li class="list-inline-item" style="margin-right: 10px;"><a href="#"><img src="svg/instagram.svg" width="30" alt="Instagram Icon"></a></li>
            <li class="list-inline-item" style="margin-right: 10px;"><a href="#"><img src="svg/link.svg" width="30" alt="LinkedIn Icon"></a></li>
            <li class="list-inline-item"><a href="#"><img src="svg/twitter.svg" width="30" alt="Twitter Icon"></a></li>
        </ul>
    </div>
</div>
    </div>
</footer>
<!-- Akhir Footer -->

<script>
document.getElementById('jobCard').addEventListener('click', function() {
    Swal.fire({
        title: 'Apakah Anda ingin melihat Profil Pelamar ini?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/PopUpStatus';
        } else {
            Swal.fire('Baiklah', '', 'info');
        }
    });
});

document.getElementById('jobCard2').addEventListener('click', function() {
    Swal.fire({
        title: 'Apakah Anda ingin melihat Profil Pelamar ini?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/PopUpStatus';
        } else {
            Swal.fire('Baiklah', '', 'info');
        }
    });
});

document.getElementById('jobCard3').addEventListener('click', function() {
    Swal.fire({
        title: 'Apakah Anda ingin melihat Profil Pelamar ini?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/PopUpStatus';
        } else {
            Swal.fire('Baiklah', '', 'info');
        }
    });
});

document.getElementById('jobCard4').addEventListener('click', function() {
    Swal.fire({
        title: 'Apakah Anda ingin melihat Profil Pelamar ini?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/PopUpStatus';
        } else {
            Swal.fire('Baiklah', '', 'info');
        }
    });
});

document.getElementById('jobCard5').addEventListener('click', function() {
    Swal.fire({
        title: 'Apakah Anda ingin melihat Profil Pelamar ini?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/PopUpStatus';
        } else {
            Swal.fire('Baiklah', '', 'info');
        }
    });
});

document.getElementById('jobCard6').addEventListener('click', function() {
    Swal.fire({
        title: 'Apakah Anda ingin melihat Profil Pelamar ini?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/PopUpStatus';
        } else {
            Swal.fire('Baiklah', '', 'info');
        }
    });
});

</script>

@include('sweetalert::alert')

<!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>