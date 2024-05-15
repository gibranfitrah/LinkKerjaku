<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Link-Kerjaku | Lihat Perusaahan 2</title>

    <style>
.container {
    display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 5px;
        }

.btn-round {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #5A6881;
    color: #FFFFFF;
    font-size: 30px;
    text-decoration: none;
    margin-right: 20px;
    margin-top: 20px;
    z-index: 2;
}

.btn-round2 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #5A6881;
    color: #FFFFFF;
    font-size: 30px;
    text-decoration: none;
    margin-left: 20px;
    margin-top: 20px;
    z-index: 2;
}

.card-col {
    margin-bottom: 50px;
    margin-left: 50px;
    margin-right: 30px;
    transition: transform 0.5s ease-in-out;
    z-index: 1;
}

.next-next-container {
    display: flex;
    align-items: center;
}

.smooth-slide-next {
    transform: translateX(-100%);
}

.smooth-slide-prev {
    transform: translateX(0%);
}

.card-container {
    overflow: hidden;
    flex-grow: 1;
    transition: transform 0.5s ease-in-out;
}
</style>
  </head>
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
                    <a class="nav-link active ms-4" aria-current="page" href="/HomePagePelamar" style="color: #FFC94A;">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/lowongankerja" style="color: #FFC94A;">Lowongan Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/about" style="color: #FFC94A;">Tentang Kami</a>
                </li>
            </ul>
            <div class="d-flex">
            <a href="/loginperusahaan" class="btn btn-secondary me-2" style="background-color: #ffffff; color: #FFC94A; text-decoration: none; border: 2px solid #FFC94A;">Perusahaan</a>
    <a href="/ProfillPelamar" class="btn btn-secondary d-flex align-items-center justify-content-center" role="button" style="width: 40px; height: 40px; background-color: #6c757d; border-radius: 50%; text-decoration: none; margin-left: 10px;">
        <img src="img/user.png" alt="Profile Image" style="width: 30px; height: 30px; border-radius: 50%;">
    </a>
</div>

        </div>
    </div>
</nav>

<!-- Section Pertama -->
<section style="background-color: #146D9A; padding: 50px; display: flex; align-items: center; justify-content: center;">
<div style="margin-right: 10px;">
    <h3 style="color: white;">Temukan perusahaan yang tepat untuk Anda</h3>
    <p style="color: white;">Semua yang perlu Anda ketahui tentang perusahaan, semuanya di satu tempat</p>
    <div class="input-group mt-5">
        <input type="text" class="form-control" placeholder="Search by company name">
        <span class="input-group-text">
            <img src="svg/search.svg" alt="Search Icon" width="16" height="16">
        </span>
    </div>
</div>
<div style="margin-left: 60px;">
    <div class="card" style="width: 393px; height: 488px; border-radius: 20px; background-color: #8E98A8;">
    <img src="img/profill 4.jpg" class="card-img-top" alt="Card Image" style="border-radius: 20px 20px 0 0; height: 100%;">
        <div class="card-body">
        </div>
    </div>
</div>


</section>
<!-- Section Akhir -->

<!-- Section Kedua -->
<section style="background-color: #ffffff; padding: 100px;">
    <div style="margin-bottom: 50px;">
        <h3 style="text-align: left;">Find the right company for you</h3>
        <p style="text-align: left;">Everything you need to know about a company, all in one place</p>
    </div>
    <div class="container">
    <button class="btn-round">&#60;</button>
    <div class="card-container">
        <div class="row">
            <div class="col-md-3 card-col">
                <div class="card" style="border-radius: 16px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/KawanLama.png" alt="Gambar" style="width: 95%; margin-left: 25px;">
                            </div>
                            <div class="col-md-8" style="margin-left: 25px;">
                                <p style="margin-bottom: 0;">Kawan Lama</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; margin-top: 10px;">
                            <div>
                                <span style="color: gold; margin-left: 20px;">&#9733;</span>
                                <span style="margin-left: 20px;">4.2 - 178 Reviews</span>
                            </div>
                        </div>
                        <a href="/DetailPerusahaan" class="btn" style="background-color: #E3F2FB; color: #1D559D; margin-left: 20px; margin-top: 20px;">82 Jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 card-col">
                <div class="card" style="border-radius: 16px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/KawanLama.png" alt="Gambar" style="width: 95%; margin-left: 25px;">
                            </div>
                            <div class="col-md-8" style="margin-left: 25px;">
                                <p style="margin-bottom: 0;">Kawan Lama</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; margin-top: 10px;">
                            <div>
                                <span style="color: gold; margin-left: 20px;">&#9733;</span>
                                <span style="margin-left: 20px;">4.2 - 178 Reviews</span>
                            </div>
                        </div>
                        <a href="/DetailPerusahaan" class="btn" style="background-color: #E3F2FB; color: #1D559D; margin-left: 20px; margin-top: 20px;">82 Jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 card-col">
                <div class="card" style="border-radius: 16px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/KawanLama.png" alt="Gambar" style="width: 95%; margin-left: 25px;">
                            </div>
                            <div class="col-md-8" style="margin-left: 25px;">
                                <p style="margin-bottom: 0;">Kawan Lama</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; margin-top: 10px;">
                            <div>
                                <span style="color: gold; margin-left: 20px;">&#9733;</span>
                                <span style="margin-left: 20px;">4.2 - 178 Reviews</span>
                            </div>
                        </div>
                        <a href="/DetailPerusahaan" class="btn" style="background-color: #E3F2FB; color: #1D559D; margin-left: 20px; margin-top: 20px;">82 Jobs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="next-next-container">
        <button class="btn-round2">&#62;</button>
    </div>
</div>
</section>
<!-- Akhir Section Kedua -->

<!-- Section Ketiga -->
<section style="background-color: #ffffff; padding: 1px;">
    <div style="margin-bottom: 65px;">
        <h3 style="text-align: center;">Get the Full picture before you apply</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3" style="margin-right: 100px;">
            <img src="img/gambar1.jpg" alt="Gambar 1" style="width: 70%; display: block; margin: 0 auto;">
            <h5 style="text-align: center; margin-top: 5px;">Culture And Values</h5>
            <p style="text-align: center;">Find out about the company culture</p>
        </div>
        <div class="col-md-3" style="margin-right: 100px;">
            <img src="img/gambar2.jpg" alt="Gambar 2" style="width: 70%; display: block; margin: 0 auto;">
            <h5 style="text-align: center; margin-top: 5px;">Culture And Values</h5>
            <p style="text-align: center;">Find out about the company culture</p>
        </div>
        <div class="col-md-3" style="margin-right: 100px;">
            <img src="img/gambar3.jpg" alt="Gambar 3" style="width: 70%; display: block; margin: 0 auto;">
            <h5 style="text-align: center; margin-top: 5px;">Culture And Values</h5>
            <p style="text-align: center;">Find out about the company culture</p>
        </div>
    </div>
</section>
<!-- Akhir Section Ketiga -->

<!-- Footer -->
<footer style="background-color: #FFC94A; padding: 30px;">
    <div class="container3">
        <div class="row">
            <div class="col-md-3 mb-4">
                <!-- Logo -->
                <img src="path/to/logo.svg" alt="Logo" style="max-width: 100px;">
                 <!-- Lorem10 -->
                 <p style="margin-top: 55px;">Link Kerjaku
            (Portal Lowongan Kerja)</p>
            </div>
            <div class="col-md-3 mb-4">
                <!-- Kategori -->
                <h5>Kategori</h5>
                <ul style="margin-top: 55px;">
                    <li>Kategori 1</li>
                    <li>Kategori 2</li>
                    <li>Kategori 3</li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <!-- Tentang -->
                <h5>Tentang</h5>
                <ul style="margin-top: 55px;">
                    <li>Tentang Kami</li>
                    <li>Tim Kami</li>
                    <li>Karir</li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <!-- Dukungan -->
                <h5>Dukungan</h5>
                <ul style="margin-top: 55px;">
                    <li>Bantuan</li>
                    <li>FAQ</li>
                    <li>Hubungi Kami</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Icon email, telefon, lokasi -->
                <div>
                <span><img src="svg/email.svg" width="25" alt="Email Icon"> Email</span>
                </div>
                <div>
                <span><img src="svg/telephone.svg" width="25" alt="Phone Icon"> Telephone</span>
                </div>
                <div>
                <span><img src="svg/location.svg" width="25" alt="Location Icon"> Lokasi</span>
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
<!-- Footer -->

<script>
document.addEventListener("DOMContentLoaded", function() {
    const btnNext = document.querySelector(".btn-round2");
    const btnPrev = document.querySelector(".btn-round");
    const cardContainer = document.querySelector(".card-container");
    const cards = document.querySelectorAll(".card-col");

    btnNext.addEventListener("click", function() {
        cardContainer.classList.remove("smooth-slide-prev");
        cardContainer.classList.add("smooth-slide-next");
        cards.forEach(card => card.style.pointerEvents = "none");
        setTimeout(() => {
            cards.forEach(card => card.style.pointerEvents = "auto");
        }, 500);
    });

    btnPrev.addEventListener("click", function() {
        cardContainer.classList.remove("smooth-slide-next");
        cardContainer.classList.add("smooth-slide-prev");
        cards.forEach(card => card.style.pointerEvents = "none");
        setTimeout(() => {
            cards.forEach(card => card.style.pointerEvents = "auto");
        }, 500);
    });
});
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>