<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Link-Kerjaku | Unggah Lowongan</title>
  </head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#">
        <img src="img/logo2.png" alt="Logo" style="height: 40px;">
    </a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/HomePagePerusahaan" style="color: #146D9A;">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/StatusPelamar" style="color: #082A3C;">Status Pelamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/aboutperusahaan" style="color: #082A3C;">Tentang Kami</a>
                </li>
            </ul>
            <div class="d-flex">
            <a href="/BuatLowongan" class="btn btn-secondary" role="button" style="background-color: #FFC94A; border: none; margin-right: 15px;">Buat Lowongan</a>
            <a href="/ProfillPerusahaan" class="btn-btn d-flex align-items-center justify-content-center" role="button" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 10px;">
        <img src="img/ProfilPerusahaan.jpg" alt="Profile Image" style="width: 45px; height: 45px; border-radius: 50%;">
    </a>
</div>
        </div>
    </div>
</nav>

<!-- Section Pertama -->
<section style="background-color: #E8F2F7; padding: 70px; display: flex; flex-direction: column; align-items: flex-start;">
    <h2 style="text-align: left;">Deskripsi Lowongan</h2>
    <p>Silahkan edit berkas atau langsung menyimpan</p>
</section>
<!-- Section Akhir -->


<!-- Section Kedua -->
<section style="background-color: #E8F2F7; padding: 70px; display: flex; align-items: center; justify-content: center;">
    <div style="margin-left: 55px;">
        <h2 style="text-align: center;">Mengedit Postingan Baru</h2>
        <hr style="border: 1px solid black; margin-bottom: 20px;">
        <h6 style="text-align: left;">Judul Pekerjaan*</h6>
        <form>
            <input type="text" placeholder="Judul Pekerjaan" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Detail Pekerjaan*</h6>
        <form>
            <input type="text" placeholder="Detail Pekerjaan" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Alamat Email*</h6>
        <form>
            <input type="text" placeholder="Alamat Email" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Nama Perusahaan*</h6>
        <form>
            <input type="text" placeholder="Nama Perusahaan" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Jenis Pekerjaan*</h6>
        <form>
            <input type="text" placeholder="Jenis Pekerjaan" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Keterampilan yang diperlukan*</h6>
        <form>
            <input type="text" placeholder="Keterampilan yang diperlukan" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>

        <div style="margin-top: 75px;">
        <h2 style="text-align: center;">Lihat Berkas</h2>
        <hr style="border: 1px solid black; margin-bottom: 20px;">
        <form style="margin-left: 100px;">
    <label for="file-upload" style="background-color: #FFFFFF; border: 1px solid #808080; border-radius: 8px; padding: 10px; width: 185px; height: 60px; display: flex; align-items: center; justify-content: center; cursor: pointer;">
        <img src="svg/upload.svg" alt="Unggah Berkas" style="width: 20px; height: 20px; margin-right: 5px;">
        <span style="margin-left: 5px;">Download</span>
        <input id="file-upload" type="file" style="display: none;">
    </label>
</form>
    </div>
    </div>
</section>
<!-- Section Akhir -->

<!-- Tambahan Section -->
<section style="background-color: #E8F2F7; padding: 70px; display: flex; align-items: center; justify-content: center;">
    <div style="margin-left: 55px;">
        <h2 style="text-align: center;">Informasi Lainnya</h2>
        <hr style="border: 1px solid black; margin-bottom: 20px;">
        <h6 style="text-align: left;">Jenis Kelamin*</h6>
        <form>
            <input type="text" placeholder="Jenis Kelamin" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Pengalaman*</h6>
        <form>
            <input type="text" placeholder="Pengalaman" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Posisi*</h6>
        <form>
            <input type="text" placeholder="Posisi" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Jenjang Pendidikan*</h6>
        <form>
            <input type="text" placeholder="Jenjang Pendidikan" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
    </div>
</section>
<!-- Tambahan Section -->

<!-- Tambahan Section -->
<section style="background-color: #E8F2F7; padding: 70px; display: flex; align-items: center; justify-content: center;">
    <div style="margin-left: 55px;">
        <h2 style="text-align: center;">Lokasi</h2>
        <hr style="border: 1px solid black; margin-bottom: 20px;">
        <h6 style="text-align: left;">Negara*</h6>
        <form>
            <input type="text" placeholder="Negara" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Alamat Lengkap*</h6>
        <form>
            <input type="text" placeholder="Alamat Lengkap" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Kode Pos*</h6>
        <form>
            <input type="text" placeholder="Kode Pos" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
    </div>
</section>
<!-- Tambahan Section -->

<!-- Tambahan Section -->
<section style="background-color: #E8F2F7; padding: 25px; display: flex; align-items: center; justify-content: center;">
<a href="/BuatLowongan3" style="text-decoration: none; margin-left: auto; margin-right: 855px; margin-top: 55px;">
    <button type="submit" style="background-color: #FFC94A; border: none; border-radius: 8px; color: #FFFFFF; padding: 10px;">
    <img src="svg/left.svg"style="width: 20px; height: 20px; margin-right: 5px;">
        Kembali
    </button>
</a>
<a href="#" style="text-decoration: none; margin-left: auto; margin-right: 100px; margin-top: 55px;">
    <button type="button" id="simpanBtn" style="background-color: #FFC94A; border: none; border-radius: 8px; color: #FFFFFF; padding: 10px;">
        Simpan
    </button>
</a>
</section>
<!-- Tambahan Section -->


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
            <li class="list-inline-item" style="margin-right: 10px;"><a href="#"><img src="svg/link.svg" width="30" alt="LinkedIn Icon"></a></li>
            <li class="list-inline-item"><a href="#"><img src="svg/twitter.svg" width="30" alt="Twitter Icon"></a></li>
        </ul>
    </div>
</div>
    </div>
</footer>
<!-- Akhir Footer -->

<script>
    document.getElementById('simpanBtn').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah default action dari button

        Swal.fire({
            title: 'Simpan lowongan?',
            showCancelButton: true,
            confirmButtonText: 'Iya',
            cancelButtonText: 'Tidak',
            icon: 'question'
        }).then((result) => {
            if (result.isConfirmed) {
                // Arahkan ke halaman HomePagePerusahaan jika menekan "Iya"
                window.location.href = '/LowonganDisimpan'; // Ganti '/HomePagePerusahaan' dengan URL yang sesuai
            }
            // Tidak melakukan apa-apa jika menekan "Tidak"
        });
    });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>