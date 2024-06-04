<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <title>Link-Kerjaku | Home Pelamar</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <style>
       .dropdown-menu {
    position: absolute;
    top: 60px;
    right: 20px;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 230px;
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.dropdown-menu.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.dropdown-content {
    padding: 10px;
}

.dropdown-header {
    display: flex;
    align-items: center;
    padding: 10px;
    background-image: url('img/pelamar.jpg'); /* Path to your background image */
    background-size: cover;
    background-position: center;
    border-radius: 8px 8px 0 0; /* Optional: rounding top corners */
}

.dropdown-profile-img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-right: 10px;
}


.dropdown-item {
    display: flex;
    align-items: center;
    padding: 10px;
    cursor: pointer;
}

.dropdown-item:hover {
    background-color: #f0f0f0;
}

.dropdown-icon {
    margin-right: 10px;
    width: 16px;
    height: 16px;
}

.dropdown-divider {
    height: 1px;
    background-color: #ccc;
    margin: 5px 0;
}

.carousel {
      position: relative;
    }

    .carousel-item {
      scroll-snap-align: start;
      flex: none;
      width: 100%;
    }

    .card-slider {
      width: 80%;
      margin: 0 auto;
    }
    .slide {
      padding: 15px;
    }
    
 
    </style>

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="/">
        <img src="img/logo2.png" alt="Logo" style="height: 40px;">
    </a>         
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/HomePagePelamar" style="color: #000000;">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/lowongankerja" style="color: blue;">Lowongan Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/about2" style="color: #000000;">Tentang Kami</a>
                </li>
            </ul>

            <div class="d-flex align-items-center">
    <a href="/ProfillPelamar" class="btn-btn d-flex align-items-center justify-content-center" role="button" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 10px; margin-right: 10px;" title="Olivia Rhye">
        <img src="img/ProfilPelamar.jpg" alt="Profile Image" style="width: 45px; height: 45px; border-radius: 50%;">
    </a>
    <span style="margin-left: 10px;">Stevano Gian</span>
    <div id="dropdownIcon" class="arrow-icon" style="margin-left: 10px; width: 26px; height: 26px; border: 2px solid #FFC94A; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer;">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
            <path d="M6 9l6 6 6-6"></path>
        </svg>
    </div>
</div>

<div id="dropdownMenu" class="dropdown-menu">
    <div class="dropdown-content">
    <div class="dropdown-header" style="background-image: url('img/pelamar.jpg'); background-size: cover; background-position: center;">
    <img src="img/ProfilPelamar.jpg" alt="Profile Image" class="dropdown-profile-img">
    <span>stevanogian@gmail.com</span>
</div>

        <div class="dropdown-divider"></div>
        <div class="dropdown-item" onclick="window.location.href='/ProfillPelamar';">
    <img src="svg/edit.svg" alt="Edit Icon" class="dropdown-icon">
    Edit Profil
</div>

        <div class="dropdown-divider"></div>
        <div class="dropdown-item" onclick="window.location.href='/';">
    <img src="svg/logout.svg" alt="Logout Icon" class="dropdown-icon">
    Logout
</div>

    </div>
</div>
        </div>
    </div>
</nav>

<!-- Section Pertama -->
<section style="background-color: #FFFFFF; padding: 70px; display: flex; align-items: center; justify-content: center;">
<div style="display: flex; align-items: center; flex-direction: column; margin-top: 20px; margin-right: -10px; margin-left: 100px;">
    <div style="width: 85px; height: 84px; background-color: blue; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 10px;">1</div>
    <p style="margin-top: 0;">Deskripsi Diri</p>
</div>
    <div style="width: 10%; height: 2px; background-color: blue; margin-left: 35px; margin-right: 25px; margin-bottom: 25px;"></div>

    <div style="display: flex; align-items: center; flex-direction: column; margin-top: 20px; margin-left: 15px;">
    <div style="width: 85px; height: 84px; background-color: blue; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 10px;">2</div>
    <p style="margin-top: 0;">Lokasi</p>
</div>

    <div style="width: 10%; height: 2px; background-color: blue; margin-left: 35px; margin-right: 25px; margin-bottom: 25px;"></div>

    <div style="display: flex; align-items: center; flex-direction: column; margin-top: 20px;">
    <div style="width: 85px; height: 84px; background-color: blue; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 10px;">3</div>
    <p style="margin-top: 0;">Informasi Lainnya</p>
</div>

</section>


<!-- Section Akhir -->


<!-- Section Kedua -->
<section style="background-color: #FFFFFF; padding: 25px; margin-top: 50px; display: flex; align-items: center; justify-content: center;">
    <div style="margin-left: 55px; margin-top: -75px;">
        <h5 style="text-align: left; margin-top: 25px;">Deskripsi Diri*</h5>
        <form>
            <textarea id="comment" name="comment" rows="4" cols="50" style="width: 704px; height: 200px; border-radius: 10px; margin-bottom: 10px; margin-top: 15px;" placeholder="ketik disini"></textarea><br>
            <span id="wordCount" style="margin-left: 555px;">0/300 kata</span>
        </form>

        <h5 style="text-align: left; margin-top: 45px;">Pengalaman*</h5>
        <form style="margin-top: 10px;">
            <!-- Text Input -->
            <input type="text" id="experience" name="experience" placeholder="Masukkan pengalaman Anda" style="width: 100%; margin-bottom: 10px; padding: 8px;">

            <!-- File Input with Icon -->
            <div style="position: relative; margin-top: -33px;">
                <input type="file" id="fileInput" name="fileInput" style="display: none;">
                <label for="fileInput" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                <i style="font-size:24px" class="fa">&#xf067;</i>
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="16"></line>
                        <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>
                </label>
            </div>
        </form>
        <p style="text-align: left; margin-top: 35px;">Contoh :</p>
        <p style="text-align: justify; margin-top: 10px;">2019-2021: Asisten pemasaran di perusahaan C, membantu dengan tugas-tugas dasar seperti </p>
        <p>penelitian dan pembuatan konten.</p>

        <div style="width: 704px; margin-top: 20px;">
        <!-- Deskripsi Card -->
        <div style="width: 704px; height: 75px; background-color: #DCEBF2; border-radius: 12px; position: relative;">
            <p style="text-align: justify; margin-left: 20px; margin-top: 25px;">2021-2023: Spesialis pemasaran di perusahaan C, bertanggung jawab untuk</p>
            <p style="margin-left: 20px;">mengembangkan dan menjalankan kampanye pemasaran email.
                <i style="font-size:24px; position: absolute; top: 50%; right: 20px; transform: translateY(-50%);" class="fa">&#xf00d;</i>
            </p>
        </div>
    </div>

    <h5 style="text-align: left; margin-top: 55px;">Soft Skill(Minimal 5)*</h5>
    <form style="width: 704px; height: 70px; position: relative; margin-top: 20px;">
        <input type="text" placeholder="Cari Disini....." style="width: calc(100% - 40px); height: 100%; padding: 8px; border-radius: 8px; border: 1px solid #ccc; font-family: 'Arial', sans-serif; font-size: 16px; padding-left: 30px;">
        <i style="position: absolute; top: 50%; left: 625px; transform: translateY(-50%); font-size: 24px;" class="fa">&#xf002;</i>
    </form>
    <h6 style="text-align: left; margin-top: 15px;">Keterampilan yang dipilih:</h6>
    <div style="display: flex; margin-top: 15px;">
                    <div style="width: 157px; height: 36px; background-color: #B7D5E5; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                        Komunikasi
                    </div>
                    <div style="width: 157px; height: 36px; background-color: #B7D5E5; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-left: 10px;">
                       Kerja Tim
                    </div>
                    <div style="width: 157px; height: 36px; background-color: #B7D5E5; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                        Komputer
                    </div>
                </div>

                <h5 style="text-align: left; margin-top: 55px;">Hard Skill(Minimal 5)*</h5>
    <form style="width: 704px; height: 70px; position: relative; margin-top: 20px;">
        <input type="text" placeholder="Cari Disini....." style="width: calc(100% - 40px); height: 100%; padding: 8px; border-radius: 8px; border: 1px solid #ccc; font-family: 'Arial', sans-serif; font-size: 16px; padding-left: 30px;">
        <i style="position: absolute; top: 50%; left: 625px; transform: translateY(-50%); font-size: 24px;" class="fa">&#xf002;</i>
    </form>
    <h6 style="text-align: left; margin-top: 15px;">Keterampilan yang dipilih:</h6>
    <div style="display: flex; margin-top: 15px;">
                    <div style="width: 157px; height: 36px; background-color: #B7D5E5; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                        Komunikasi
                    </div>
                    <div style="width: 157px; height: 36px; background-color: #B7D5E5; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-left: 10px;">
                       Kerja Tim
                    </div>
                    <div style="width: 157px; height: 36px; background-color: #B7D5E5; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                        Komputer
                    </div>
                </div>

    
    </div>
</section>
<!-- Section Akhir -->

<!-- Tambahan Section -->
<section style="background-color: #FFFFFF; padding: 5px; display: flex; align-items: center; justify-content: center;">
<a href="/LamarPekerjaan2" style="text-decoration: none; margin-left: auto; margin-right: 100px; margin-top: -55px;">
    <button type="submit" style="background-color: #FFC94A; border: none; border-radius: 8px; color: #000000; padding: 10px;">
        Selanjutnya
    </button>
</a>
</section>

<!-- Tambahan Section -->

<!-- Footer -->
<footer style="background-color: #FFC94A; padding: 55px; margin-top: 25px;">
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
document.getElementById('dropdownIcon').addEventListener('click', function() {
    var dropdownMenu = document.getElementById('dropdownMenu');
    if (dropdownMenu.classList.contains('show')) {
        dropdownMenu.classList.remove('show');
    } else {
        dropdownMenu.classList.add('show');
    }
});

// Close the dropdown menu if clicked outside
window.onclick = function(event) {
    if (!event.target.matches('#dropdownIcon') && !event.target.closest('.arrow-icon')) {
        var dropdownMenu = document.getElementById('dropdownMenu');
        if (dropdownMenu.classList.contains('show')) {
            dropdownMenu.classList.remove('show');
        }
    }
}

    // Ambil semua card
    const cards = document.querySelectorAll('.card');

    // Iterasi semua card
    cards.forEach(card => {
        // Tambahkan event listener untuk setiap card
        card.addEventListener('click', function() {
            // Toggle class 'show-details' pada card yang diklik
            this.classList.toggle('show-details');
        });
    });

    document.getElementById("comment").addEventListener("input", function() {
                var wordCount = this.value.trim().split(/\s+/).length;
                document.getElementById("wordCount").innerText = wordCount + "/300 kata";
            });

</script>

    <script src="owl.carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>