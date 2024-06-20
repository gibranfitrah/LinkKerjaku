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
    
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            margin-top: 15px;
            margin-left: 55px;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {background-color: #f1f1f1;}
        .show {display: block;}

        .dropdown-content span {
            margin-left: 8px;
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
    <a href="/PageDashboard">
    <span style="color: #FFDB00;">Link</span>
    <span style="color: #3572EF;">Kerjaku</span>
</a>
    </div>
</div>
<hr size="5" width="100%" color="#FFFFFF">

<ul class="sidebar-nav">

<li class="sidebar-item" style="margin-top: -20px;">
        <a href="/PageDashboard" class="sidebar-link">
        <i class="lni lni-protection"></i>
        <span>Dashboard</span>
        </a>
    </li>

<li class="sidebar-item" style="margin-top: 20px;">
<a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
data-bs-target="#auth" aria-expanded="false" aria-controls="auth" id="dashboard-link">
<i class="lni lni-apartment"></i>
    <span >Lowongan</span>
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
<a href="/Page-LowonganKerja" class="sidebar-link" style="color: #FCDC94;">
    <img src="img/StatusPelamar.png" alt="Logo" width="25px" style="margin-top: 10px;"> Lowongan Kerja
</a>
</li>
</ul>
</li>


</ul>
        </aside>
        <div class="main p-3">

        <div class="text-left" style="margin-top: 15px;">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb" style="margin-left: 55px;">
  <li class="breadcrumb-item">
                <img src="img/Lowongankerja.png" alt="Home" width="26" height="26">
            </li>
                <li class="breadcrumb-item active" style="margin-left: 5px;" aria-current="page"><a href="/Page-LowonganKerja">Lowongan Kerja</a></li>
  </ol>
</nav>
    </div>

    <div class="d-flex align-items-center" style="position: relative; margin-left: 1065px; margin-top: -45px;">
    <a href="#" class="btn-btn d-flex align-items-center justify-content-center" role="button" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 10px; margin-right: 10px;" title="Olivia Rhye">
        <img src="img/Google.jpg" alt="Profile Image" style="width: 45px; height: 45px; border-radius: 50%;">
    </a>
    <span style="margin-left: 10px;">Google</span>
    <div id="dropdownIcon" class="arrow-icon" style="margin-left: 12px; width: 26px; height: 26px; border: 2px solid #FFC94A; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer;">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
            <path d="M6 9l6 6 6-6"></path>
        </svg>
    </div>
    <div id="myDropdown" class="dropdown-content" style="top: 100%; left: -30px;">
    <a href="/Page-Profill">
            <img src="img/editing.png" alt="Profile Icon" width="16" height="16">
            <span>Profile</span>
        </a>
        <a href="/">
            <img src="img/logout.png" alt="Profile Icon" width="16" height="16">
            <span>Logout</span>
        </a>    </div>
</div>

        <section style="background-color: #146D9A; padding: 50px; border-radius: 12px;  margin-top: 85px;">
<div class="col" style="margin-left: 25px;">
<h3 style="margin-left: 25px; color: #FFFFFF;">Lowongan Pekerjaan</h3>
</div>
</section>

<div class="col-md-6" style="margin-top: 15px;">
    <form class="d-flex" style="width: 1255px; height: 50px;">
        <input class="form-control me-2" type="search" placeholder="Cari lowongan pekerjaan yang dibuat" aria-label="Search" style="padding-right: 30px; background-image: url('svg/search.svg'); background-repeat: no-repeat; background-position: calc(100% - 10px) center; background-color: #E8F2F7;">
    </form>
</div>


<section style="background-color: #FFFFFF; padding: 20px; display: flex; flex-direction: column; justify-content: center; align-items: center;">

    <!-- Bagian Atas -->
    <div style="display: flex; justify-content: space-around; width: 100%;">
        <div style="width: 324px; height: 340px; background-color: #E2DFD0; display: flex; justify-content: center; align-items: center; border-radius: 16px;">
            <div style="width: 289px; height: 198px; background-color: #FFFFFF; margin-top: -45px; border-radius: 16px;">
                <img src="img/google1.png" alt="Gambar" style="width: 50px; height: 50px; margin-left: 16px; margin-top: 25px;">
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-size: 16px; color: #000; margin-left: 85px; margin-top: -30px;">Google</h1>
                    <span style="font-size: 12px; color: #666; margin-left: 210px; margin-top: -25px;">2 Minggu</span>
                </div>
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-size: 16px; color: #000; margin-left: 25px; margin-top: 30px;">UI/UX Designer</h1>
                </div>
                <div style="display: flex; margin-top: 15px; margin-left: 25px;">
                    <div style="width: 80px; height: 30px; border: 1px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                        Full Time
                    </div>
                    <div style="width: 80px; height: 30px; border: 1px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                        Part Time
                    </div>
                </div>

                <div style="display: flex; margin-top: 55px; margin-left: -5px;">
    <div style="position: relative;">
        <div id="toggleButton1" style="position: absolute; left: 0; width: 80px; height: 30px; border-radius: 30px; display: flex; align-items: center; justify-content: flex-start; cursor: pointer; padding: 2px; background-color: #CCCCCC;" onclick="toggleSwitch(1)">
            <div id="toggleHandle1" style="position: absolute; left: 2px; width: 26px; height: 26px; border-radius: 50%; background-color: #FFFFFF; transition: margin 0.3s;"></div>
            <div id="toggleTextOn1" style="position: absolute; left: 5px; display: none;">ON</div>
            <div id="toggleTextOff1" style="position: absolute; right: 5px;">OFF</div>
        </div>
    </div>
</div>

<div style="position: relative; display: inline-block; margin-left: 225px;">
    <img src="img/list.png" alt="Gambar" style="width: 50px; height: 50px; filter: brightness(0); margin-top: -10px;" onclick="toggleDropdown(1)">
    <div id="dropdownContent1" style="display: none; position: absolute; background-color: #f9f9f9; min-width: 120px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1; padding: 8px; border-radius: 5px;">
        <a href="/Page-DetailLowongan" onclick="detail(1)" style="display: block; text-align: left;">Detail</a>
        <br> <!-- Spasi -->
        <a href="#" onclick="edit(1)" style="display: block; text-align: left;">Edit</a>
        <br> <!-- Spasi -->
        <a href="#" onclick="hapus(1)" style="display: block; text-align: left; color: red;">Hapus</a>
    </div>
</div>

            </div>
        </div>

        <!-- Kartu Kedua -->
        <div style="width: 324px; height: 340px; background-color: #E2DFD0; display: flex; justify-content: center; align-items: center; border-radius: 16px;">
            <div style="width: 289px; height: 198px; background-color: #FFFFFF; margin-top: -45px; border-radius: 16px;">
                <img src="img/google1.png" alt="Gambar" style="width: 50px; height: 50px; margin-left: 16px; margin-top: 25px;">
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-size: 16px; color: #000; margin-left: 85px; margin-top: -30px;">Google</h1>
                    <span style="font-size: 12px; color: #666; margin-left: 210px;; margin-top: -25px;">1 Bulan</span>
                </div>
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-size: 16px; color: #000; margin-left: 25px; margin-top: 30px;">Digital Marketing</h1>
                </div>
                <div style="display: flex; margin-top: 15px; margin-left: 25px;">
                    <div style="width: 80px; height: 30px; border: 1px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                        Full Time
                    </div>
                    <div style="width: 80px; height: 30px; border: 1px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                        Part Time
                    </div>
                </div>

                <div style="display: flex; margin-top: 55px; margin-left: -5px;">
    <div style="position: relative;">
        <div id="toggleButton2" style="position: absolute; left: 0; width: 80px; height: 30px; border-radius: 30px; display: flex; align-items: center; justify-content: flex-start; cursor: pointer; padding: 2px; background-color: #CCCCCC;" onclick="toggleSwitch(2)">
            <div id="toggleHandle2" style="position: absolute; left: 2px; width: 26px; height: 26px; border-radius: 50%; background-color: #FFFFFF; transition: margin 0.3s;"></div>
            <div id="toggleTextOn2" style="position: absolute; left: 5px; display: none;">ON</div>
            <div id="toggleTextOff2" style="position: absolute; right: 5px;">OFF</div>
        </div>
    </div>
</div>

<div style="position: relative; display: inline-block; margin-left: 225px;">
    <img src="img/list.png" alt="Gambar" style="width: 50px; height: 50px; filter: brightness(0); margin-top: -10px;" onclick="toggleDropdown(2)">
    <div id="dropdownContent2" style="display: none; position: absolute; background-color: #f9f9f9; min-width: 120px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1; padding: 8px; border-radius: 5px;">
        <a href="/Page-DetailLowongan" onclick="detail(2)" style="display: block; text-align: left;">Detail</a>
        <br> <!-- Spasi -->
        <a href="#" onclick="edit(2)" style="display: block; text-align: left;">Edit</a>
        <br> <!-- Spasi -->
        <a href="#" onclick="hapus(2)" style="display: block; text-align: left; color: red;">Hapus</a>
    </div>
</div>

            </div>
        </div>

        <!-- Kartu Ketiga -->
        <div style="width: 324px; height: 340px; background-color: #E2DFD0; display: flex; justify-content: center; align-items: center; border-radius: 16px;">
            <div style="width: 289px; height: 198px; background-color: #FFFFFF; margin-top: -45px; border-radius: 16px;">
                <img src="img/google1.png" alt="Gambar" style="width: 50px; height: 50px; margin-left: 16px; margin-top: 25px;">
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-size: 16px; color: #000; margin-left: 85px; margin-top: -30px;">Google</h1>
                    <span style="font-size: 12px; color: #666; margin-left: 210px; margin-top: -25px;">5 Hari</span>
                </div>
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-size: 16px; color: #000; margin-left: 25px; margin-top: 30px;">Back-end</h1>
                </div>
                <div style="display: flex; margin-top: 15px; margin-left: 25px;">
                    <div style="width: 80px; height: 30px; border: 1px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                        Full Time
                    </div>
                    <div style="width: 80px; height: 30px; border: 1px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                        Part Time
                    </div>
                </div>

                <div style="display: flex; margin-top: 55px; margin-left: -5px;">
    <div style="position: relative;">
        <div id="toggleButton3" style="position: absolute; left: 0; width: 80px; height: 30px; border-radius: 30px; display: flex; align-items: center; justify-content: flex-start; cursor: pointer; padding: 2px; background-color: #CCCCCC;" onclick="toggleSwitch(3)">
            <div id="toggleHandle3" style="position: absolute; left: 2px; width: 26px; height: 26px; border-radius: 50%; background-color: #FFFFFF; transition: margin 0.3s;"></div>
            <div id="toggleTextOn3" style="position: absolute; left: 5px; display: none;">ON</div>
            <div id="toggleTextOff3" style="position: absolute; right: 5px;">OFF</div>
        </div>
    </div>
</div>

<div style="position: relative; display: inline-block; margin-left: 225px;">
    <img src="img/list.png" alt="Gambar" style="width: 50px; height: 50px; filter: brightness(0); margin-top: -10px;" onclick="toggleDropdown(3)">
    <div id="dropdownContent3" style="display: none; position: absolute; background-color: #f9f9f9; min-width: 120px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1; padding: 8px; border-radius: 5px;">
        <a href="/Page-DetailLowongan" onclick="detail(3)" style="display: block; text-align: left;">Detail</a>
        <br> <!-- Spasi -->
        <a href="#" onclick="edit(3)" style="display: block; text-align: left;">Edit</a>
        <br> <!-- Spasi -->
        <a href="#" onclick="hapus(3)" style="display: block; text-align: left; color: red;">Hapus</a>
    </div>
</div>


            </div>
        </div>
    </div>

    <!-- Bagian Bawah -->
    <div style="display: flex; justify-content: space-around; width: 100%; margin-top: 55px;">
        <div style="width: 324px; height: 340px; background-color: #E2DFD0; display: flex; justify-content: center; align-items: center; border-radius: 16px;">
            <div style="width: 289px; height: 198px; background-color: #FFFFFF; margin-top: -45px; border-radius: 16px;">
                <img src="img/google1.png" alt="Gambar" style="width: 50px; height: 50px; margin-left: 16px; margin-top: 25px;">
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-size: 16px; color: #000; margin-left: 85px; margin-top: -30px;">Google</h1>
                    <span style="font-size: 12px; color: #666; margin-left: 210px; margin-top: -25px;">3 Bulan</span>
                </div>
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-size: 16px; color: #000; margin-left: 25px; margin-top: 30px;">Front-end</h1>
                </div>
                <div style="display: flex; margin-top: 15px; margin-left: 25px;">
                    <div style="width: 80px; height: 30px; border: 1px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                        Full Time
                    </div>
                    <div style="width: 80px; height: 30px; border: 1px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                        Part Time
                    </div>
                </div>

                <div style="display: flex; margin-top: 55px; margin-left: -5px;">
    <div style="position: relative;">
        <div id="toggleButton4" style="position: absolute; left: 0; width: 80px; height: 30px; border-radius: 30px; display: flex; align-items: center; justify-content: flex-start; cursor: pointer; padding: 2px; background-color: #CCCCCC;" onclick="toggleSwitch(4)">
            <div id="toggleHandle4" style="position: absolute; left: 2px; width: 26px; height: 26px; border-radius: 50%; background-color: #FFFFFF; transition: margin 0.3s;"></div>
            <div id="toggleTextOn4" style="position: absolute; left: 5px; display: none;">ON</div>
            <div id="toggleTextOff4" style="position: absolute; right: 5px;">OFF</div>
        </div>
    </div>
</div>

<div style="position: relative; display: inline-block; margin-left: 225px;">
    <img src="img/list.png" alt="Gambar" style="width: 50px; height: 50px; filter: brightness(0); margin-top: -10px;" onclick="toggleDropdown(4)">
    <div id="dropdownContent4" style="display: none; position: absolute; background-color: #f9f9f9; min-width: 120px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1; padding: 8px; border-radius: 5px; margin-left: 60px; margin-top: -85px;">
        <a href="/Page-DetailLowongan" onclick="detail(4)" style="display: block; text-align: left;">Detail</a>
        <br> <!-- Spasi -->
        <a href="#" onclick="edit(4)" style="display: block; text-align: left;">Edit</a>
        <br> <!-- Spasi -->
        <a href="#" onclick="hapus(4)" style="display: block; text-align: left; color: red;">Hapus</a>
    </div>
</div>


            </div>
        </div>

        <!-- Kartu Kelima -->
        <div style="width: 324px; height: 340px; background-color: #E2DFD0; display: flex; justify-content: center; align-items: center; border-radius: 16px;">
            <div style="width: 289px; height: 198px; background-color: #FFFFFF; margin-top: -45px; border-radius: 16px;">
                <img src="img/google1.png" alt="Gambar" style="width: 50px; height: 50px; margin-left: 16px; margin-top: 25px;">
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-size: 16px; color: #000; margin-left: 85px; margin-top: -30px;">Google</h1>
                    <span style="font-size: 12px; color: #666; margin-left: 210px; margin-top: -25px;">6 Bulan</span>
                </div>
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-size: 16px; color: #000; margin-left: 25px; margin-top: 30px;">Quality Assurance</h1>
                </div>
                <div style="display: flex; margin-top: 15px; margin-left: 25px;">
                    <div style="width: 80px; height: 30px; border: 1px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                        Full Time
                    </div>
                    <div style="width: 80px; height: 30px; border: 1px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                        Full Time
                    </div>
                </div>

                <div style="display: flex; margin-top: 55px; margin-left: -5px;">
    <div style="position: relative;">
        <div id="toggleButton5" style="position: absolute; left: 0; width: 80px; height: 30px; border-radius: 30px; display: flex; align-items: center; justify-content: flex-start; cursor: pointer; padding: 2px; background-color: #CCCCCC;" onclick="toggleSwitch(5)">
            <div id="toggleHandle5" style="position: absolute; left: 2px; width: 26px; height: 26px; border-radius: 50%; background-color: #FFFFFF; transition: margin 0.3s;"></div>
            <div id="toggleTextOn5" style="position: absolute; left: 5px; display: none;">ON</div>
            <div id="toggleTextOff5" style="position: absolute; right: 5px;">OFF</div>
        </div>
    </div>
</div>

<div style="position: relative; display: inline-block; margin-left: 225px;">
    <img src="img/list.png" alt="Gambar" style="width: 50px; height: 50px; filter: brightness(0); margin-top: -10px;" onclick="toggleDropdown(5)">
    <div id="dropdownContent5" style="display: none; position: absolute; background-color: #f9f9f9; min-width: 120px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1; padding: 8px; border-radius: 5px; margin-left: 60px; margin-top: -85px;">
        <a href="/Page-DetailLowongan" onclick="detail(5)" style="display: block; text-align: left;">Detail</a>
        <br> <!-- Spasi -->
        <a href="#" onclick="edit(5)" style="display: block; text-align: left;">Edit</a>
        <br> <!-- Spasi -->
        <a href="#" onclick="hapus(5)" style="display: block; text-align: left; color: red;">Hapus</a>
    </div>
</div>                
            </div>
        </div>

        <!-- Kartu Keenam -->
        <div style="width: 324px; height: 340px; background-color: #E2DFD0; display: flex; justify-content: center; align-items: center; border-radius: 16px;">
            <div style="width: 289px; height: 198px; background-color: #FFFFFF; margin-top: -45px; border-radius: 16px;">
                <img src="img/google1.png" alt="Gambar" style="width: 50px; height: 50px; margin-left: 16px; margin-top: 25px;">
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-size: 16px; color: #000; margin-left: 85px; margin-top: -30px;">Google</h1>
                    <span style="font-size: 12px; color: #666; margin-left: 210px; margin-top: -25px;">5 Bulan</span>
                </div>
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-size: 16px; color: #000; margin-left: 25px; margin-top: 30px;">IT Consultant</h1>
                </div>
                <div style="display: flex; margin-top: 15px; margin-left: 25px;">
                    <div style="width: 80px; height: 30px; border: 1px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                        Full Time
                    </div>
                    <div style="width: 80px; height: 30px; border: 1px solid #000000; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                        Full Time
                    </div>
                </div>

                <div style="display: flex; margin-top: 55px; margin-left: -5px;">
    <div style="position: relative;">
        <div id="toggleButton6" style="position: absolute; left: 0; width: 80px; height: 30px; border-radius: 30px; display: flex; align-items: center; justify-content: flex-start; cursor: pointer; padding: 2px; background-color: #CCCCCC;" onclick="toggleSwitch(6)">
            <div id="toggleHandle6" style="position: absolute; left: 2px; width: 26px; height: 26px; border-radius: 50%; background-color: #FFFFFF; transition: margin 0.3s;"></div>
            <div id="toggleTextOn6" style="position: absolute; left: 5px; display: none;">ON</div>
            <div id="toggleTextOff6" style="position: absolute; right: 5px;">OFF</div>
        </div>
    </div>
</div>

<div style="position: relative; display: inline-block; margin-left: 225px;">
    <img src="img/list.png" alt="Gambar" style="width: 50px; height: 50px; filter: brightness(0); margin-top: -10px;" onclick="toggleDropdown(6)">
    <div id="dropdownContent6" style="display: none; position: absolute; background-color: #f9f9f9; min-width: 120px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1; padding: 8px; border-radius: 5px; margin-left: 60px; margin-top: -85px;">
        <a href="/Page-DetailLowongan" onclick="detail(6)" style="display: block; text-align: left;">Detail</a>
        <br> <!-- Spasi -->
        <a href="#" onclick="edit(6)" style="display: block; text-align: left;">Edit</a>
        <br> <!-- Spasi -->
        <a href="#" onclick="hapus(6)" style="display: block; text-align: left; color: red;">Hapus</a>
    </div>
</div>

            </div>
        </div>
    </div>
</section>
    </div>

</div>

    <script>

function toggleDropdown(cardNumber) {
        var dropdownContent = document.getElementById('dropdownContent' + cardNumber);
        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
        } else {
            dropdownContent.style.display = 'block';
        }
    }

    function detail(cardNumber) {
        // Fungsi detail untuk kartu ke cardNumber
    }

    function edit(cardNumber) {
        // Fungsi edit untuk kartu ke cardNumber
    }

    function hapus(cardNumber) {
        // Fungsi hapus untuk kartu ke cardNumber
    }

    function toggleSwitch(cardNumber) {
        var button = document.getElementById('toggleButton' + cardNumber);
        var handle = document.getElementById('toggleHandle' + cardNumber);
        var textOn = document.getElementById('toggleTextOn' + cardNumber);
        var textOff = document.getElementById('toggleTextOff' + cardNumber);

        if (button.classList.contains('active')) {
            button.classList.remove('active');
            handle.style.marginLeft = '2px';
            textOn.style.display = 'none';
            textOff.style.display = 'block';
            button.style.backgroundColor = '#CCCCCC'; // Mengembalikan warna latar belakang tombol saat dalam posisi OFF
        } else {
            button.classList.add('active');
            handle.style.marginLeft = 'calc(100% - 28px)';
            textOn.style.display = 'block';
            textOff.style.display = 'none';
            button.style.backgroundColor = '#17DB94'; // Mengubah warna latar belakang tombol menjadi hijau saat dalam posisi ON
        }
    }

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

    document.getElementById("dropdownIcon").addEventListener("click", function() {
        document.getElementById("myDropdown").classList.toggle("show");
    });

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.arrow-icon') && !event.target.matches('.arrow-icon *')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>