<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Link-Kerjaku | Lowongan Kerja Home</title>
    <style>
  .navbar {
            height: 80px; /* Ubah sesuai keinginan Anda */
        }
        .navbar-brand img {
            height: 150px; /* Ubah sesuai keinginan Anda */
        }
</style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/Logo.png" alt="Logo">
            </a>        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active ms-4" aria-current="page" href="/" style="color: #000000;">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-4" aria-current="page" href="/lowongankerja2" style="color: blue;">Lowongan Kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-4" aria-current="page" href="/about" style="color: #000000;">Tentang Kami</a>
                    </li>
                </ul>

                <div class="d-flex" style="margin-right: -25px; position: relative; display: flex; align-items: center;">
    <div style="margin-right: -10px; position: relative;">
    <a href="/Home-Perusahaan">
    <button id="companyButton" class="btn" role="button" style="border: 2px solid #FFC94A; margin-right: 25px; background-color: white; padding: 10px;">
        Perusahaan
    </button>
</a>

        <div id="dropdownMenuCompany" style="display: none; position: absolute; top: 100%; left: 0; background-color: white; border: 1px solid #ccc; z-index: 1000; margin-top: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: opacity 0.3s ease;">
            <a href="/companyProfile" class="dropdown-item" style="display: block; padding: 10px; text-decoration: none; color: black;">
                Profil Perusahaan
            </a>
            <a href="/companyJobs" class="dropdown-item" style="display: block; padding: 10px; text-decoration: none; color: black;">
                Lowongan Kerja
            </a>
        </div>
    </div>
    <div style="margin-right: -10px; position: relative;">
        <button id="loginButton" class="btn" role="button" style="border: 2px solid #FFC94A; margin-right: 25px; background-color: #FFC94A; border: none; padding: 10px;">
            Sign In / Sign Up
        </button>
        <div id="dropdownMenuLogin" style="display: none; position: absolute; top: 100%; left: 0; background-color: white; border: 1px solid #ccc; z-index: 1000; margin-top: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: opacity 0.3s ease;">
            <a href="/loginperusahaan" class="dropdown-item" style="display: block; padding: 10px; text-decoration: none; color: black;">
                Login Sebagai Perusahaan
            </a>
            <a href="/login" class="dropdown-item" style="display: block; padding: 10px; text-decoration: none; color: black;">
                Login Sebagai Pelamar
            </a>
        </div>
    </div>
</div>

    
            </div>
        </div>
    </nav>

<!-- Section Pertama -->
<section style="background-color: #146D9A; padding: 90px; text-align: left;">
<div>
    <h3 style="color: white;">
        Temukan <span style="color: #FFC94A;">Pekerjaan Impianmu</span> Disini!
    </h3>
</div>

</section>
<!-- Section Akhir -->

<!-- Section Kedua -->
<section style="background-color: #E8F2F7; padding: 60px; text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col">
                <form style="width: 250px; height: 58px; margin-bottom: 50px; margin-left: 30px;">
                    <input type="text" placeholder="Pencarian" style="border: none; width: 235px; height: 40px; margin-left: 15px; background-color: #FFFFFF; border-radius: 8px;">
                </form>
            </div>
            <div class="col">
    <form style="width: 250px; height: 58px; margin-bottom: 20px;">
        <select style="border: none; width: 235px; height: 40px; margin-left: 15px; background-color: #FFFFFF; border-radius: 8px;">
            <option value="lokasi">Lokasi</option>
            <option value="jakarta">Jakarta</option>
            <option value="bandung">Bandung</option>
            <option value="surabaya">Surabaya</option>
            <option value="yogyakarta">Yogyakarta</option>
            <!-- Tambahkan pilihan lokasi lainnya di sini -->
        </select>
    </form>
</div>

<div class="col">
    <form style="width: 250px; height: 58px; margin-bottom: 20px;">
        <select style="border: none; width: 235px; height: 40px; margin-left: 15px; background-color: #FFFFFF; border-radius: 8px;">
            <option value="tipe-pekerjaan">Tipe Pekerjaan</option>
            <option value="full-time">Full-time</option>
            <option value="part-time">Part-time</option>
            <option value="magang">Magang</option>
            <option value="kontrak">Kontrak</option>
            <!-- Tambahkan pilihan tipe pekerjaan lainnya di sini -->
        </select>
    </form>
</div>

<div class="col">
    <form style="width: 250px; height: 58px; margin-bottom: 20px;">
        <select style="border: none; width: 235px; height: 40px; margin-left: 15px; background-color: #FFFFFF; border-radius: 8px;">
            <option value="pengalaman">Pengalaman</option>
            <option value="baru-graduan">Baru Graduan</option>
            <option value="1-2-tahun">1-2 Tahun</option>
            <option value="3-5-tahun">3-5 Tahun</option>
            <option value="lebih-dari-5-tahun">Lebih dari 5 Tahun</option>
            <!-- Tambahkan pilihan pengalaman lainnya di sini -->
        </select>
    </form>
</div>
            <div class="col">
                <button type="button" class="btn" style="background-color: #FFC94A; color: black; width: 100px; height: 40px;">Cari</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h5 style="text-align: left; margin-left: 315px;">Pekerjaan</h5>
            </div>
        </div>

        <div class="card" style="width: 467px; height: 250px; background-color: #FFFFFF; border-radius: 8px; margin-top: 55px; margin-left: 135px; box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);">
    <div style="display: flex; align-items: center; margin-top: 20px;" >
    <div style="width: 83px; height: 83px; background-color: #808080; border-radius: 50%; margin-left: 25px; overflow: hidden;">
    <img src="img/google.jpg" alt="Card Image" style="width: 100%; height: 100%; object-fit: cover;">
</div>
        <div style="margin-left: 15px; margin-top: 20px;">
            <h5 style="margin-bottom: 2px;">Digital Marketing</h5>
            <p style="margin-right: 105px;">Google</p>
        </div>
    </div>
    <p style="margin-right: 45px; margin-top: 15px; text-align: justify; margin-left: 35px; font-size: 14px;">Pemasaran digital menggunakan strategi dan teknik pemasaran online untuk mempromosikan produk, layanan, atau merek.</p>
    <div style="display: flex; margin-left: 15px;">
        <div style="width: 80px; height: 30px; background-color: #B2C4D4; margin-right: 10px;">Full Time</div>
        <div style="width: 80px; height: 30px; background-color: #B2C4D4;">Internship</div>
    </div>
</div>

<div class="card" style="width: 467px; height: 250px; background-color: #FFFFFF; border-radius: 8px; margin-top: 55px; margin-left: 135px; box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);">
    <div style="display: flex; align-items: center; margin-top: 20px;">
    <div style="width: 83px; height: 83px; background-color: #808080; border-radius: 50%; margin-left: 25px; overflow: hidden;">
    <img src="img/Tokopedia.jpg" alt="Card Image" style="width: 100%; height: 100%; object-fit: cover;">
</div>
        <div style="margin-left: 15px; margin-top: 20px;">
            <h5 style="margin-bottom: 2px; margin-right: 74px;">Analis Data</h5>
            <p style="margin-right: 105px;">Tokopedia</p>
        </div>
    </div>
    <p style="margin-top: 15px; text-align: justify; margin-left: 35px; font-size: 14px; margin-right: 25px;">Analis data bertanggung jawab untuk mengumpulkan, membersihkan, dan menganalisis data untuk membantu bisnis membuat keputusan yang baik.</p>
    <div style="display: flex; margin-left: 15px;">
        <div style="width: 80px; height: 30px; background-color: #B2C4D4; margin-right: 10px;">Full Time</div>
        <div style="width: 80px; height: 30px; background-color: #B2C4D4;">Internship</div>
    </div>
</div>

<div class="card" style="width: 467px; height: 250px; background-color: #FFFFFF; border-radius: 8px; margin-top: 55px; margin-left: 135px; box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);">
    <div style="display: flex; align-items: center; margin-top: 20px;">
    <div style="width: 83px; height: 83px; background-color: #808080; border-radius: 50%; margin-left: 25px; overflow: hidden;">
    <img src="img/Gojek.jpg" alt="Card Image" style="width: 100%; height: 100%; object-fit: cover;">
</div>
        <div style="margin-left: 15px; margin-top: 20px;">
            <h5 style="margin-bottom: 2px; margin-right: 74px;">Spesialis AI</h5>
            <p style="margin-right: 135px; margin-top: 5px;">Gojek</p>
        </div>
    </div>
    <p style="margin-right: 55px; margin-top: 15px; text-align: justify; margin-left: 35px; font-size: 14px;">Spesialis AI merancang, mengembangkan, dan mengimplementasikan sistem kecerdasan buatan.</p>
    <div style="display: flex; margin-left: 15px; margin-top: 10px;">
        <div style="width: 80px; height: 30px; background-color: #B2C4D4; margin-right: 10px;">Full Time</div>
        <div style="width: 80px; height: 30px; background-color: #B2C4D4;">Internship</div>
    </div>
</div>

<div class="card" style="width: 467px; height: 250px; background-color: #FFFFFF; border-radius: 8px; margin-top: 55px; margin-left: 135px; box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);">
    <div style="display: flex; align-items: center; margin-top: 20px;">
    <div style="width: 83px; height: 83px; background-color: #808080; border-radius: 50%; margin-left: 25px; overflow: hidden;">
    <img src="img/Traveloka.jpg" alt="Card Image" style="width: 100%; height: 100%; object-fit: cover;">
</div>
        <div style="margin-left: 15px; margin-top: 20px;">
            <h5 style="margin-bottom: 2px; margin-left: 5px;">Ahli Keamanan Siber</h5>
            <p style="margin-right: 115px;">Traveloka</p>
        </div>
    </div>
    <p style="margin-right: 55px; margin-top: 15px; text-align: justify; margin-left: 45px; font-size: 14px;">Ahli keamanan siber melindungi sistem komputer dan jaringan dari peretas dan penjahat cyber lainnya.</p>
    <div style="display: flex; margin-left: 15px; margin-top: 10px;">
        <div style="width: 80px; height: 30px; background-color: #B2C4D4; margin-right: 10px;">Full Time</div>
        <div style="width: 80px; height: 30px; background-color: #B2C4D4;">Internship</div>
    </div>
</div>

<div class="card" style="width: 467px; height: 250px; background-color: #FFFFFF; border-radius: 8px; margin-top: 55px; margin-left: 135px; box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);">
    <div style="display: flex; align-items: center; margin-top: 20px;">
    <div style="width: 83px; height: 83px; background-color: #808080; border-radius: 50%; margin-left: 25px; overflow: hidden;">
    <img src="img/Shope.jpg" alt="Card Image" style="width: 100%; height: 100%; object-fit: cover;">
</div>
<div style="margin-left: 15px; margin-top: 20px;">
            <h5 style="margin-bottom: 2px; margin-left: 5px;">UI/UX Designer</h5>
            <p style="margin-right: 80px;">Shopee</p>
        </div>
    </div>
    <p style="margin-right: 55px; margin-top: 15px; text-align: justify; margin-left: 45px; font-size: 14px;">Pertanggung jawab untuk merancang antarmuka pengguna (UI) dan pengalaman pengguna (UX) pada produk digital, seperti situs web, aplikasi mobile dll.</p>
    <div style="display: flex; margin-left: 15px;">
        <div style="width: 80px; height: 30px; background-color: #B2C4D4; margin-right: 10px;">Full Time</div>
        <div style="width: 80px; height: 30px; background-color: #B2C4D4;">Internship</div>
    </div>
</div>

<div class="col" style="margin-left: 655px; margin-top: -1495px;">
<div class="card" style="width: 723px; height: 1481px; background-color: #FFFFFF; border-radius: 8px; margin-top: 20px;">
<div style="width: 83px; height: 83px; background-color: #808080; border-radius: 50%; margin-left: 35px; margin-top: 55px; overflow: hidden; box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);">
    <img src="img/google.jpg" alt="Card Image" style="width: 100%; height: 100%; object-fit: cover;">
</div>
    <div style="margin-right: 315px; margin-top: -65px;">
        <h5 style="margin-bottom: 2px; margin-left: 20px;">Digital Marketing</h5>
        <p style="margin-right: 50px; margin-left: 50px;">Perusahaan Google</p>
        <div style="margin-right: -655px; margin-top: -70px;">
            <button type="button" class="btn" style="width: 169px; height: 58px; background-color: #FFC94A; margin-right: 10px;">Lamar Sekarang</button>
            <button type="button" class="btn" style="width: 100px; height: 58px; background-color: #FFC94A;">Simpan</button>
        </div>
    </div>
    <h5 style="margin-right: 155px; margin-top: 50px; text-align: justify; margin-left: 15px;">Deskripsi Pekerjaan</h5>
    <p style="margin-right: 155px; margin-top: 1px; text-align: justify; margin-left: 15px;">Menganalisis data dan metrik pemasaran digital untuk mengukur efektivitas campaign dan memberikan rekomendasi untuk optimasi.
Spesialis SEO: Membantu bisnis meningkatkan peringkat website mereka di hasil pencarian Google melalui strategi SEO (Search Engine Optimization). Berlokasi di Jakarta.</p>

    <h5 style="margin-right: 155px; margin-top: 50px; text-align: left; margin-left: 35px;">Informasi Pekerjaan</h5>

    <div class="row justify-content-center" style="margin-top: 15px; margin-left: 15px;">

    <div style="display: flex; align-items: center; margin-bottom: 10px;">
    <img src="svg/plus.svg" alt="Icon" style="width: 24px; height: 24px; margin-right: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
    <span style="font-size: 20px;">Minimal S1</span>
</div>

    <div style="display: flex; align-items: center; margin-bottom: 10px;">
        <img src="svg/plus.svg" alt="Icon" style="width: 24px; height: 24px; margin-right: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
        <span style="font-size: 20px;">Minimal 2 tahun pengalaman</span>
    </div>

    <div style="display: flex; align-items: center; margin-bottom: 10px;">
        <img src="svg/plus.svg" alt="Icon" style="width: 24px; height: 24px; margin-right: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
        <span style="font-size: 20px;">Hard Skill : SEO, SEM, Social Media Marketing, Aalisis Data</span>
    </div>

    <div style="display: flex; align-items: center; margin-bottom: 10px;">
        <img src="svg/plus.svg" alt="Icon" style="width: 24px; height: 24px; margin-right: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
        <span style="font-size: 20px;">Soft Skill : Problem Solving, Komunikasi, Team Work</span>
    </div>

</div>

<h5 style="margin-right: 155px; margin-top: 50px; text-align: left; margin-left: 35px;">Gaji dan Benefit Yang Ditawarkan</h5>

<div style="margin-left: 25px; margin-top: 10px;">

<div style="display: flex; align-items: center; margin-bottom: 10px;">
    <img src="svg/plus.svg" alt="Icon" style="width: 24px; height: 24px; margin-right: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
    <span style="font-size: 20px;">Gaji Rp5.000.000-7.000.000 per bulan</span>
</div>

    <div style="display: flex; align-items: center; margin-bottom: 10px;">
        <img src="svg/plus.svg" alt="Icon" style="width: 24px; height: 24px; margin-right: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
        <span style="font-size: 20px;">Asuransi kesehatan dan jiwa</span>
    </div>

    <div style="display: flex; align-items: center; margin-bottom: 10px;">
        <img src="svg/plus.svg" alt="Icon" style="width: 24px; height: 24px; margin-right: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
        <span style="font-size: 20px;">Tunjangan makan</span>
    </div>

    <div style="display: flex; align-items: center; margin-bottom: 10px;">
        <img src="svg/plus.svg" alt="Icon" style="width: 24px; height: 24px; margin-right: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
        <span style="font-size: 20px;">Cuti tahunan 15 hari</span>
    </div>

    <div style="display: flex; align-items: center; margin-bottom: 10px;">
        <img src="svg/plus.svg" alt="Icon" style="width: 24px; height: 24px; margin-right: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
        <span style="font-size: 20px;">Bonus kinerja tahunan</span>
    </div>

    <div style="display: flex; align-items: center; margin-bottom: 10px;">
        <img src="svg/plus.svg" alt="Icon" style="width: 24px; height: 24px; margin-right: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
        <span style="font-size: 20px;">Peluang pengembangan karir melalui pelatihan dan workshop</span>
    </div>

    <div style="display: flex; align-items: center; margin-bottom: 10px;">
        <img src="svg/plus.svg" alt="Icon" style="width: 24px; height: 24px; margin-right: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
        <span style="font-size: 20px;">Fasilitas kantor yang nyaman (ruang gym, ruang istirahat)</span>
    </div>

</div>


<h5 style="margin-right: 155px; margin-top: 35px; text-align: left; margin-left: 35px;">Cara Melamar</h5>
<div style="display: flex; align-items: justify; margin-top: 25px; margin-left: 20px;">
    <img src="svg/pin.svg" alt="Icon" style="width: 30px; height: 30px; margin-left: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
    <h6 style="margin-left: 10px; margin-top: 3px;">Buat CV dan surat lamaran yang menarik.</h6>
</div>
<div style="display: flex; align-items: justify; margin-top: 25px; margin-left: 20px;">
    <img src="svg/pin.svg" alt="Icon" style="width: 30px; height: 30px; margin-left: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
    <h6 style="margin-left: 10px; margin-top: 3px;">Klik "Lamar Sekarang" dan ikuti instruksi.</h6>
</div>
<div style="display: flex; align-items: justify; margin-top: 25px; margin-left: 20px;">
    <img src="svg/pin.svg" alt="Icon" style="width: 30px; height: 30px; margin-left: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
    <h6 style="margin-left: 10px; margin-top: 3px;">Lamar sebelum batas waktu berakhir.</h6>
</div>


<hr style="border: none; border-top: 2px solid #000000; margin-right: 25px; margin-left: 15px; margin-top: 15px;">

<h5 style="margin-right: 155px; margin-top: 100px; text-align: center; margin-left: 165px;">Informasi Lebih Lanjut</h5>
<div class="row justify-content-center" style="margin-top: 15px;">
<div class="col-md-5" style="margin-bottom: 20px;">
<div class="card" style="width: 290px; height: 60px; background-color: #FFC94A; border-radius: 8px; display: flex; align-items: center; margin-bottom: -10px;">
    <button style="margin-top: 15px; color: #FFFFFF; background-color: transparent; border: none; cursor: pointer;">Hubungi Kami Sekarang</button>
</div>
    </div>

    <div class="col-md-5" style="margin-bottom: 20px;">
    <div class="card" style="width: 290px; height: 60px; border-radius: 8px; display: flex; align-items: center; margin-bottom: -10px; border: 2px solid #FFC94A;">
        <a href="#" style="margin-top: 15px; color: #000000; background-color: transparent; border: none; cursor: pointer; text-decoration: none; width: 100%; text-align: center;">Detail Perusahaan</a>
    </div>
</div>

</div>



</div>

    </div>
</section>
<!-- Section Akhir -->

<!-- Footer -->
<footer style="background-color: #FFC94A; padding: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <!-- Logo -->
                <img src="img/logo2.png" alt="Logo" style="max-width: 100px;">
                                <!-- Lorem10 -->
                                <h6 style="margin-top: 55px;">Link Kerjaku</h6>
                                <h6 style="margin-top: 10px;">(Portal Lowongan Kerja)</h6>
            </div>
            <div class="col-md-3 mb-4">
                <!-- Kategori -->
                <h5>Kategori</h5>
                <h5 style="margin-top: 70px;">Tentang Link Kerjaku</h5>
                <h5 style="margin-top: 25px;">Hubungi Kami</h5>
                <h5 style="margin-top: 25px;">Syarat dan Ketentuan</h5>
                <h5 style="margin-top: 25px;">Kebijakan Privasi</h5>
            </div>
            <div class="col-md-3 mb-4">
                <!-- Tentang -->
                <h5>Tentang</h5>
                <h5 style="margin-top: 70px;">Bantuan</h5>
                <h5 style="margin-top: 25px;">Blog</h5>
                <h5 style="margin-top: 25px;">Cari Lowongan Kerja</h5>
                <h5 style="margin-top: 25px;">Pasang Lowongan</h5>
            </div>
            <div class="col-md-3 mb-4">
                <!-- Dukungan -->
                <h5>Opsional</h5>
                <h5 style="margin-top: 70px;">Penghargaan</h5>
                <h5 style="margin-top: 25px;">Logo Partner</h5>
                <h5 style="margin-top: 25px;">Bahasa</h5>
                <h5 style="margin-top: 25px;">
    <a href="/Kontak" style="text-decoration: none; color: inherit;">Kontak</a>
</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Icon email, telefon, lokasi -->
                <div>
                <span><img src="svg/email.svg" width="25" alt="Email Icon"> Email Link Kerjaku</span>
                </div>
                <div style="margin-top: 15px;">
                <span><img src="svg/telephone.svg" width="25" alt="Phone Icon"> (+62) 0000000000</span>
                </div>
                <div style="margin-top: 15px;">
                <span><img src="svg/location.svg" width="25" alt="Location Icon"> Lokasi Lengkap</span>
                </div>
            </div>
        </div>
        <hr style="margin-top: 20px;">
        <div class="row">
    <div class="col-md-6">
        <!-- Credit -->
        <h6>Ikuti Kami di Media Sosial</h6>
    </div>
    <div class="col-md-6">
        <!-- Ikuti Kami -->
        <ul class="list-inline text-right" style="margin: 0; padding: 0; list-style: none; margin-left: 455px;">
            <li class="list-inline-item" style="margin-right: 10px;"><a href="#"><img src="svg/facebook.svg" width="30" alt="Facebook Icon"></a></li>
            <li class="list-inline-item" style="margin-right: 10px;"><a href="#"><img src="svg/instagram.svg" width="30" alt="Instagram Icon"></a></li>
            <li class="list-inline-item" style="margin-right: 10px; margin-left: 5px;"><a href="#"><img src="img/link.png" width="30" alt="LinkedIn Icon"></a></li>
            <li class="list-inline-item"><a href="https://www.tiktok.com/@linkkerjaku"><img src="img/tiktok.png" width="30" alt="Tiktok Icon"></a></li>
        </ul>
    </div>
</div>
    </div>
</footer>
<!-- Akhir Footer -->

<script>
    document.getElementById('loginButton').addEventListener('click', function(event) {
            event.stopPropagation();
            var dropdownMenuLogin = document.getElementById('dropdownMenuLogin');
            if (dropdownMenuLogin.style.display === 'none' || dropdownMenuLogin.style.display === '') {
                dropdownMenuLogin.style.display = 'block';
            } else {
                dropdownMenuLogin.style.display = 'none';
            }
            document.getElementById('dropdownMenuSignUp').style.display = 'none';
        });

        document.getElementById('signUpButton').addEventListener('click', function(event) {
            event.stopPropagation();
            var dropdownMenuSignUp = document.getElementById('dropdownMenuSignUp');
            if (dropdownMenuSignUp.style.display === 'none' || dropdownMenuSignUp.style.display === '') {
                dropdownMenuSignUp.style.display = 'block';
            } else {
                dropdownMenuSignUp.style.display = 'none';
            }
            document.getElementById('dropdownMenuLogin').style.display = 'none';
        });

        // Close the dropdowns if the user clicks outside of them
        window.addEventListener('click', function(event) {
            var dropdownMenuLogin = document.getElementById('dropdownMenuLogin');
            var dropdownMenuSignUp = document.getElementById('dropdownMenuSignUp');
            if (dropdownMenuLogin.style.display === 'block' && !event.target.matches('#loginButton')) {
                dropdownMenuLogin.style.display = 'none';
            }
            if (dropdownMenuSignUp.style.display === 'block' && !event.target.matches('#signUpButton')) {
                dropdownMenuSignUp.style.display = 'none';
            }
        });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>