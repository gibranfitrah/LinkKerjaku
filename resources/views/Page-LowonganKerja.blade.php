<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Lowongan Kerja</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

::after,
::before {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

a {
    text-decoration: none;
}

li {
    list-style: none;
}

h1 {
    font-weight: 600;
    font-size: 1.5rem;
}

body {
    font-family: 'Poppins', sans-serif;
}

.wrapper {
    display: flex;
}

.main {
    min-height: 100vh;
    width: 100%;
    overflow: hidden;
    transition: all 0.35s ease-in-out;
    background-color: #fafbfe;
}

#sidebar {
    width: 70px;
    min-width: 70px;
    z-index: 1000;
    transition: all .25s ease-in-out;
    background-color: #0e2238;
    display: flex;
    flex-direction: column;
}

#sidebar.expand {
    width: 260px;
    min-width: 260px;
}

.toggle-btn {
    background-color: transparent;
    cursor: pointer;
    border: 0;
    padding: 1rem 1.5rem;
}

.toggle-btn i {
    font-size: 1.5rem;
    color: #FFF;
}

.sidebar-logo {
    margin: auto 0;
}

.sidebar-logo a {
    color: #FFF;
    font-size: 1.15rem;
    font-weight: 600;
}

#sidebar:not(.expand) .sidebar-logo,
#sidebar:not(.expand) a.sidebar-link span {
    display: none;
}

.sidebar-nav {
    padding: 2rem 0;
    flex: 1 1 auto;
}

a.sidebar-link {
    padding: .625rem 1.625rem;
    color: #FFF;
    display: block;
    font-size: 0.9rem;
    white-space: nowrap;
    border-left: 3px solid transparent;
}

.sidebar-link i {
    font-size: 1.1rem;
    margin-right: .75rem;
}

a.sidebar-link:hover {
    background-color: rgba(255, 255, 255, .075);
    border-left: 3px solid #3b7ddd;
}

.sidebar-item {
    position: relative;
}

#sidebar:not(.expand) .sidebar-item .sidebar-dropdown {
    position: absolute;
    top: 0;
    left: 70px;
    background-color: #0e2238;
    padding: 0;
    min-width: 15rem;
    display: none;
}

#sidebar:not(.expand) .sidebar-item:hover .has-dropdown+.sidebar-dropdown {
    display: block;
    max-height: 15em;
    width: 100%;
    opacity: 1;
}

#sidebar.expand .sidebar-link[data-bs-toggle="collapse"]::after {
    border: solid;
    border-width: 0 .075rem .075rem 0;
    content: "";
    display: inline-block;
    padding: 2px;
    position: absolute;
    right: 1.5rem;
    top: 1.4rem;
    transform: rotate(-135deg);
    transition: all .2s ease-out;
}

#sidebar.expand .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
    transform: rotate(45deg);
    transition: all .2s ease-out;
}

/* Circular */
* {
      padding: 0;
      margin: 0;
      font-family: 'Poppins', arial;
      box-sizing: border-box;
    }

    .card {
      box-shadow: 6px 6px 10px -1px rgba(0,0,0,0.15),
      -6px -6px 10px -1px rgba(255,255,255,0.7);
      width: 430px;
      padding: 45px 0;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      border-radius: 7px;
      background-color: #082A3C;
        color: #FFFFFF;
    }

    .circular-bar {
      width: 260px;
      height: 260px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 40px;
    }

    .circular-bar::before {
      content: "";
      position: absolute;
      width: 220px;
      height: 220px;
      border-radius: 50%;
      background-color: #082A3C;
    }

    .percent {
      z-index: 10;
      font-size: 30px;
    }

    label {
      font-size: 20px;
    }

/* CARD 2 */
.card.selesai {
  margin-left: 50px;
  margin-top: 55px;
}

.card.selesai .circular-bar {
  width: 260px;
  height: 260px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 40px;
}

.card.selesai .circular-bar::before {
  content: "";
  position: absolute;
  width: 220px;
  height: 220px;
  border-radius: 50%;
  background-color: #082A3C;

}

.card.selesai .percent {
  z-index: 10;
  font-size: 30px;
}

.card.selesai label {
  font-size: 20px;
}

/* CARD 3 */
.card.tiga {
  margin-left: 50px;
  margin-top: 55px;
}

.card.tiga .circular-bar {
  width: 260px;
  height: 260px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 40px;
}

.card.tiga .circular-bar::before {
  content: "";
  position: absolute;
  width: 220px;
  height: 220px;
  border-radius: 50%;
  background-color: #082A3C;
}

.card.tiga .percent {
  z-index: 10;
  font-size: 30px;
}

.card.tiga label {
  font-size: 20px;
}

/* BARU */
.funnel-chart {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 20px;
    }
    .funnel-stage {
      flex: 1;
      text-align: center;
      padding: 20px;
      color: white;
    }
    .funnel-stage:nth-child(1) { background-color: #00a2e8; }
    .funnel-stage:nth-child(2) { background-color: #0073e6; }
    .funnel-stage:nth-child(3) { background-color: #000080; }
    .funnel-value {
      font-size: 2em;
      font-weight: bold;
    }

    .text-clickable {
    cursor: pointer;
}

.text-clickable:hover {
    color: #FFC94A;
}

.card {
            cursor: pointer;
        }
    
    </style>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
        <div class="d-flex">
    <button class="toggle-btn" type="button">
        <i class="lni lni-grid-alt"></i>
    </button>
    <div class="sidebar-logo">
    <a href="/PageDashboard">Link Kerjaku</a>
    </div>
</div>
<hr size="5" width="100%" color="#FFFFFF">
<a href="/profill">
    <img src="img/google.png" alt="Logo" width="31.94px" height="33px" style="display: inline-block; margin-left: 20px;">
</a>
<span style="vertical-align: middle; color: #FFFFFF; margin-left: 75px; margin-top: -30px;">Google</span>
<hr size="5" width="100%" color="#FFFFFF" style="margin-top: 25px;">

            <ul class="sidebar-nav">

            <li class="sidebar-item">
                    <a href="/Page-Profill" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>

                <li class="sidebar-item" style="margin-top: 20px;">
    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
        data-bs-target="#auth" aria-expanded="false" aria-controls="auth" id="dashboard-link">
        <i class="lni lni-protection"></i>
        <span style="color: blue;">Dashboard</span>
    </a>
    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="margin-top: 10px;">
        <li class="sidebar-item">
            <a href="/Page-StatusPelamar" class="sidebar-link">
                <img src="img/resume.png" alt="Logo" width="25px" height=""> Status Pelamar
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/Page-BuatLowongan" class="sidebar-link">
                <img src="img/vacancy.png" alt="Logo" width="25px" style="margin-top: 10px;"> Buat Lowongan
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link" style="color: #6FDCE3;">
                <img src="img/StatusPelamar.png" alt="Logo" width="25px" style="margin-top: 10px;"> Lowongan Kerja
            </a>
        </li>
    </ul>
</li>

            </ul>
            <div class="sidebar-footer">
                <a href="/" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">

        <section style="background-color: #146D9A; padding: 50px;">
<div class="col" style="margin-left: 25px;">
<h3 style="margin-left: 25px; color: #FFFFFF;">Lowongan Pekerjaan</h3>
</div>
</section>

<div class="col-md-6" style="margin-top: 15px;">
    <form class="d-flex" style="width: 1255px; height: 50px;">
        <input class="form-control me-2" type="search" placeholder="Cari lowongan pekerjaan yang dibuat" aria-label="Search" style="padding-right: 30px; background-image: url('svg/search.svg'); background-repeat: no-repeat; background-position: calc(100% - 10px) center; background-color: #E8F2F7;">
    </form>
</div>


<div class="row justify-content-center" style="margin-top: 35px;">
    <div class="col-md-4 mb-4" style="margin-right: 120px;">
        <div class="card" style="width: 467px; height: 255px; border-radius: 20px; background-color: #B7D5E5; position: relative; box-shadow: 10px 10px 15px rgba(255, 0, 0, 0.5);">
            <div style="width: 83px; height: 83px; background-color: #808080; border-radius: 50%; position: absolute; left: 40px; top: 5px; margin-top: 30px; margin-left: -15px; overflow: hidden;">
                <img src="img/ProfilPerusahaan.jpg" alt="Circular Image" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <h5 class="card-title" style="color: #000000; margin-top: 25px; margin-left: -45px; margin-bottom: 10px;">Digital Marketing</h5>
            <p style="color: #000000; margin-bottom: 10px; margin-left: -115px;">Perusahaan</p>
            <p style="color: #000000; margin-left: 25px; margin-top: 10px; margin-right: 65px;">Digital marketing adalah kegiatan pemasaran produk atau jasa...</p>
            <div style="display: flex; justify-content: space-between; margin-left: -175px; margin-right: 55px; margin-top: 3px;">
                <div style="width: 80px; height: 30px; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center;">Full Time</div>
                <div style="width: 80px; height: 30px; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-left: 25px;">Full Time</div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4" style="margin-left: 10px;">
        <div class="card" style="width: 467px; height: 255px; border-radius: 20px; background-color: #B7D5E5; position: relative; box-shadow: 10px 10px 15px rgba(255, 0, 0, 0.5);">
            <div style="width: 83px; height: 83px; background-color: #808080; border-radius: 50%; position: absolute; left: 40px; top: 5px; margin-top: 30px; margin-left: -15px; overflow: hidden;">
                <img src="img/ProfilPerusahaan.jpg" alt="Circular Image" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <h5 class="card-title" style="color: #000000; margin-top: 25px; margin-left: -95px; margin-bottom: 10px;">Analis Data</h5>
            <p style="color: #000000; margin-bottom: 10px; margin-left: -115px;">Perusahaan</p>
            <p style="color: #000000; margin-left: 20px; margin-top: 10px;">Digital marketing adalah kegiatan pemasaran produk atau jasa.....</p>
            <div style="display: flex; justify-content: space-between; margin-left: -175px; margin-right: 55px; margin-top: 3px;">
                <div style="width: 80px; height: 30px; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center;">Full Time</div>
                <div style="width: 80px; height: 30px; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-left: 25px;">Full Time</div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center" style="margin-top: 35px;">
    <div class="col-md-4 mb-4" style="margin-right: 120px;">
        <div class="card" style="width: 467px; height: 255px; border-radius: 20px; background-color: #B7D5E5; position: relative; box-shadow: 10px 10px 15px rgba(255, 0, 0, 0.5);">
            <div style="width: 83px; height: 83px; background-color: #808080; border-radius: 50%; position: absolute; left: 40px; top: 5px; margin-top: 30px; margin-left: -15px; overflow: hidden;">
                <img src="img/ProfilPerusahaan.jpg" alt="Circular Image" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <h5 class="card-title" style="color: #000000; margin-top: 25px; margin-left: -45px; margin-bottom: 10px;">Digital Marketing</h5>
            <p style="color: #000000; margin-bottom: 10px; margin-left: -115px;">Perusahaan</p>
            <p style="color: #000000; margin-left: 25px; margin-top: 10px; margin-right: 65px;">Digital marketing adalah kegiatan pemasaran produk atau jasa.....</p>
            <div style="display: flex; justify-content: space-between; margin-left: -175px; margin-right: 55px; margin-top: 3px;">
                <div style="width: 80px; height: 30px; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center;">Full Time</div>
                <div style="width: 80px; height: 30px; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-left: 25px;">Full Time</div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4" style="margin-left: 10px;">
        <div class="card" style="width: 467px; height: 255px; border-radius: 20px; background-color: #B7D5E5; position: relative; box-shadow: 10px 10px 15px rgba(255, 0, 0, 0.5);">
            <div style="width: 83px; height: 83px; background-color: #808080; border-radius: 50%; position: absolute; left: 40px; top: 5px; margin-top: 30px; margin-left: -15px; overflow: hidden;">
                <img src="img/ProfilPerusahaan.jpg" alt="Circular Image" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <h5 class="card-title" style="color: #000000; margin-top: 25px; margin-left: -95px; margin-bottom: 10px;">Analis Data</h5>
            <p style="color: #000000; margin-bottom: 10px; margin-left: -115px;">Perusahaan</p>
            <p style="color: #000000; margin-left: 20px; margin-top: 10px;">Digital marketing adalah kegiatan pemasaran produk atau jasa.....</p>
            <div style="display: flex; justify-content: space-between; margin-left: -175px; margin-right: 55px; margin-top: 3px;">
                <div style="width: 80px; height: 30px; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center;">Full Time</div>
                <div style="width: 80px; height: 30px; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-left: 25px;">Full Time</div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center" style="margin-top: 35px;">
    <div class="col-md-4 mb-4" style="margin-right: 120px;">
        <div class="card" style="width: 467px; height: 255px; border-radius: 20px; background-color: #B7D5E5; position: relative; box-shadow: 10px 10px 15px rgba(255, 0, 0, 0.5);">
            <div style="width: 83px; height: 83px; background-color: #808080; border-radius: 50%; position: absolute; left: 40px; top: 5px; margin-top: 30px; margin-left: -15px; overflow: hidden;">
                <img src="img/ProfilPerusahaan.jpg" alt="Circular Image" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <h5 class="card-title" style="color: #000000; margin-top: 25px; margin-left: -45px; margin-bottom: 10px;">Digital Marketing</h5>
            <p style="color: #000000; margin-bottom: 10px; margin-left: -115px;">Perusahaan</p>
            <p style="color: #000000; margin-left: 25px; margin-top: 10px; margin-right: 65px;">Digital marketing adalah kegiatan pemasaran produk atau jasa.....</p>
            <div style="display: flex; justify-content: space-between; margin-left: -175px; margin-right: 55px; margin-top: 3px;">
                <div style="width: 80px; height: 30px; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center;">Full Time</div>
                <div style="width: 80px; height: 30px; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-left: 25px;">Full Time</div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4" style="margin-left: 10px;">
        <div class="card" style="width: 467px; height: 255px; border-radius: 20px; background-color: #B7D5E5; position: relative; box-shadow: 10px 10px 15px rgba(255, 0, 0, 0.5);">
            <div style="width: 83px; height: 83px; background-color: #808080; border-radius: 50%; position: absolute; left: 40px; top: 5px; margin-top: 30px; margin-left: -15px; overflow: hidden;">
                <img src="img/ProfilPerusahaan.jpg" alt="Circular Image" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <h5 class="card-title" style="color: #000000; margin-top: 25px; margin-left: -95px; margin-bottom: 10px;">Analis Data</h5>
            <p style="color: #000000; margin-bottom: 10px; margin-left: -115px;">Perusahaan</p>
            <p style="color: #000000; margin-left: 20px; margin-top: 10px;">Digital marketing adalah kegiatan pemasaran produk atau jasa.....</p>
            <div style="display: flex; justify-content: space-between; margin-left: -175px; margin-right: 55px; margin-top: 3px;">
                <div style="width: 80px; height: 30px; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center;">Full Time</div>
                <div style="width: 80px; height: 30px; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-left: 25px;">Full Time</div>
            </div>
        </div>
    </div>
</div>



    </div>

</div>

    <script>
        const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

let CircularBar = document.querySelector(".circular-bar");
let PercentValue = document.querySelector(".percent");

let InitialValue = 0;
let finaleValue = 50;
let speed = 10;

let timer = setInterval(() => {
  InitialValue += 1;

  CircularBar.style.background = `conic-gradient(#4285f4 ${InitialValue/100 * 360}deg, #e8f0f7 0deg)`;
  PercentValue.innerHTML = InitialValue+"%";

  if(InitialValue >= finaleValue){
    clearInterval(timer);
  }
}, speed)

document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('click', () => {
            Swal.fire({
                title: 'Ingin Melihat Lebih Lanjut',
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/Page-LihatLowongan';
                }
            });
        });
    });
    </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>