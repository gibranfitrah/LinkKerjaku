<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perusahaan</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   
    
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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

        .container {
  text-align: center;
  margin-top: 25px;
}
.title {
  font-size: 24px;
  margin-bottom: 20px;
}
.progress-circle {
  position: relative;
  width: 200px;
  height: 200px;
  background: conic-gradient(#ffc300 0% 0%, #3a3a3a 0% 100%);
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: background 1s ease-out;
  margin-left: 100px;
}
.progress-circle::before {
  content: '';
  position: absolute;
  width: 140px;
  height: 140px;
  background: #000;
  border-radius: 50%;
}
.progress-circle span {
  position: absolute;
  font-size: 32px;
  color: #fff;
  z-index: 10;
}
.legend {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}
.legend div {
  display: flex;
  align-items: center;
  margin: 0 10px;
}
.legend div span {
  width: 16px;
  height: 16px;
  display: inline-block;
  margin-right: 8px;
  border-radius: 4px;
}
.legend .non-aktif span {
  background-color: #560bad;
}
.legend .aktif span {
  background-color: #ffc300;
}

.chart-heading {
  font-family: 'Rubik', sans-serif;
  color: #023047;
  text-transform: uppercase;
  font-size: 24px;
  text-align: center;
  margin-top: 25px;
}

.chart-container {
  width: 200px;
  margin-top: 25px;
}

.programming-stats {
  font-family: 'Rubik', sans-serif;
  display: flex;
  align-items: center;
  gap: 24px;
  margin: 0 auto;
  width: fit-content;
  box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.3);
  border-radius: 20px;
  padding: 8px 32px;
  color: #023047;
  transition: all 400ms ease;
  margin-top: 20px;
}

.programming-stats:hover {
  transform: scale(1.02);
  box-shadow: 0 4px 16px -7px rgba(0, 0, 0, 0.3);
}

.programming-stats .details ul {
  list-style: none;
  padding: 0;
}

.programming-stats .details ul li {
  font-size: 16px;
  margin: 12px 0;
  text-transform: uppercase;
}

.programming-stats .details .percentage {
  font-weight: 700;
  color: #e63946;
}

.container2 {
            margin-top: -1px;
        }
        .chart-container2 {
            position: relative;
            margin: auto;
            height: 80vh;
            width: 80vw;
        }

        .main-cards {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  gap: 20px;
  margin: 20px 0;
}

.card {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  padding: 25px;
  background-color: #ffffff;
  box-sizing: border-box;
  border: 1px solid #d2d2d3;
  border-radius: 5px;
  box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.card:first-child {
  border-left: 7px solid #246dec;
}

.card:nth-child(2) {
  border-left: 7px solid #f5b74f;
}

.card:nth-child(3) {
  border-left: 7px solid #367952;
}

.card:nth-child(4) {
  border-left: 7px solid #cc3c43;
}

.card > span {
  font-size: 20px;
  font-weight: 600;
}

.card-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.card-inner > p {
  font-size: 18px;
}

.card-inner > span {
  font-size: 35px;
}

.main-title {
  display: flex;
  justify-content: space-between;
}

.main-title > p {
  font-size: 20px;
  margin-top: 115px;
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
                    <span style="color: #FCDC94;">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item" style="margin-top: 20px;">
        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
            data-bs-target="#auth2" aria-expanded="false" aria-controls="auth2" id="dashboard-link">
            <i class="lni lni-apartment"></i>
            <span>Lowongan</span>
        </a>
        <ul id="auth2" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="margin-top: 10px;">
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
                <a href="/Page-LowonganKerja" class="sidebar-link">
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
                <img src="img/dashboard.png" alt="Home" width="26" height="26">
            </li>
                <li class="breadcrumb-item active" style="margin-left: 5px;" aria-current="page"><a href="/PageDashboard">Dashboard</a></li>
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

<div class="main-title">
          <p class="font-weight-bold">OVERVIEW</p>
        </div>
<div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Total Pelamar</p>
             <img src="data:image/png;base64,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">
              </div>
            <span class="text-primary font-weight-bold">200%</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Sedang diproses</p>
              <img src="data:image/png;base64,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">
            </div>
            <span class="text-primary font-weight-bold">50%</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Diterima</p>
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC+0lEQVR4nO1ZTW/TQBC1gHLgyMeJwr8Alf/QQouEQPBDQPyA8iFugFpU+gHHIkigLRcOkThk36QWEom5wYHEu62g5ZxwWTROU4ni1Lv2xg5SRhopkWPve5PZmbdjzxvZyEaW2Vb16lEK6RIk7kLitZD0BYp+CYnf7HufA74W/WYbE1rrI17RVgtr56BwH4pCKNI2LhS1oHAPLYznDvyj+nQGip4JhY4t8H+JoCMk5nzpn84FPEm6CUW7WYHHENkRobgxMOC+9segsOAaOA4SkTTPa7kFL/0TkHg/aPDouaQNXtNd5PMEr3qOD0EQHM9MII+0Qd90wlwm8FVJt4oCjx6JsHY9FXgK6ZRQ+Fk0ASjaTVViuc7nCXTt23r/6xJP7cC3MO6iSZn6UuOFvly+qmfxID6NFDq+9M9bRD+SB7mAXw664CdL05H3I8Gywwg8i6yuTskBfGPlL/Ds/P3d19h0Clk0JhKIVGUBkZ8sTeup8ox+Xl/qe091a/Nicvqw3B1C8OjKjDuJBITCmyLAL9QXE+8Vkl4lE+CDxxCCB7ukenIKWUjlPpvNeMNOlWf0YmPZ+BncWE1SyKj+P9x8ZBy9zJFXPUfbCQEGbwqEwV956wI8mRFISiFOG9NU6HXYLGkD6xQy2MQmKbESvHQYeTLfxKZl9LDUGAh4ZVhGbRpZv8oS26QahzcpmBG4nUxgGxM2D437J1xHHnteU7ULhmIOTZsHx6WMa/BC4bvxNC+amFkucJCES/DoTvJmjcBnOdD0SLgGD4V2tVk969kYTwTSLMZ7IklVpoj+Y8/Wqs3qyWE41AuFndRzU55VFk2AtuhaKvD7JCTNFxZ9SU+8rMbnUKGoVAD49YquHPPcDXdpIz/wWHM23N0nof2xtJXJNm0qriIfZzyrHEh1kviRecPazE153McNJjt4tLnOc9n28jbujiw7bLVTlCoKTZYH1h12EMYii4dOPLdhzc4HDz7ZRS/wupKET3mf+RpLYlaVQ/GadWQj8/5/+wO4yRM6vdI5mQAAAABJRU5ErkJggg==">              </div>
            <span class="text-primary font-weight-bold">20%</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Ditolak</p>
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFS0lEQVR4nO2b22/bVBzH88A7CARvCAmJv4N/BHideKBdnLbrkqIkdpsLYmxUQm0f0KQVbUwgDShiEt3G2rF1a8LWNs2ludvxkvSSxnGdSzfQQeesadLcfNzaPm6zI30fE/++H//O73fOsW0yvR69B7Db32DNzLmkhbkVNzP+nYvuayWbZ+Y0SLB6vSWr+7PSqOsdk9IR/WLi3aSZng8OOP4LDNhBXYLNA0o276mSYPXul6yeyaL98ltY5lmK+Tw06Pi32ThUcNBB3MzJQHgiwqj7w57mExZ6MjDgOGK8rojZSdyEGhC6ZkJyiDnXzTxUgqKJG1AJwpU283GL/b3goL0t7ZuVsjBnBIB3v60wJs30fC/zUOzQ2QBwoE+PtLrWat9J3NA46aDVk9XrblR9M5z7vc1DZYYnyAeukgSb5/vG/Kccv+EA4EfOFICrjdZH0T4cAM87ARifBHs/zoHy3UdA+vupLoLXgteE11YFQMzsjCrOAOZbIC34QFXcB9XySzISayiGEn3lZACilDOmpAaIX0+DCrdFzniLKpktFJP2AIbG0Z03kvlmCEoy4VgA2KFxIC36iJvtJun+srYAUiNuNO9IG+0qsYZdGI8FIOH6jrxJGe3dmNMQwNWfiBuUnQZ3HmoHIDl3l7hBOZUfrWiYAbcXgLQlYAdTSedQny7/9QRUwilQlTB+J70ElVAK/QYW3Eo6rwzA0qq2AAqRtHwgQrXjXBSnZ0E1X+z+u3wRiFPXjv5uzItWffA/DQEg/zR0okKEFlHZQnu2ZAs9FzMIghEA8L6ATNrnZS/eCkHOfD0TKuwmeQDc2kbPANDaHCOAOgQs8weSHvjJA8iwOSAVy90DuPcYK4A6BCVreFgYiQPgM3mwHUl1nwLhFLYhpapEWGMA4H1rPduYODWrunlx5gesNqoLAG4t0jsQ2M4Ubk/lpkrP9ql7BnA5IMoEVMntqgJB/GoKVJ63t02yADJ5kFuRyQIVICg1rysAzr+OFdBxIRzHvK4AMmwWiLli/wLgM3mQ/SfYv1OAh9MgGANV6UV/FkH+QDuhVB+2wUxTFrRujtBCqGVLqwYEuJU2ykKIbxLcG5T47Ubqh7RcCqeNB4CHEJqyoC82Q3yr2Cwo8Vv9sR3mOwGAWbC81jgQGcMzr/hAhNs0MAA2C3bTWRQEenKLaR4Xwt5NoxyJZToDQB2hfl4ID0UhhLEOW1q5Q9Hp2fZD0ZsGOhTlewBAhyXBROOusptAWvSjZ3Y4hxn1NgqrPToWf+DHSnv9APxxXxYAXB1Ku5KioE/Ng5H4z7dlAaB68GSVGABpXsNHYxsz17EAwAOTHZwHKKft4ej6BTfq+TgQuHAClAs6T4VSDb3AoRmAAKwDv87jZQGE8FjfqQALJ475EwFYH3YBdjWCDSH3LKyLedgtRK1fkQkcKPjlJXwIbBYUYpz25vV4SSrQkgmJX/7EqglcNA1K2caOUTWJNZT2Su68agACTYURdgfYIhO/3+uq5I05IC4sq/Oy5J2Hr6o9ZsHTFEBAgWIUbZhPblrfFN3QAwBaTFGMISAceVk6YaGX9AIAlbQYAoLrEEDKwszoCaD++Y1AEsBF9yeHADIDYx+t6wzg1XSgQZFAJgg2T02wX3rb1DzilHNFbwBQ0fM02LXqC0Gwer4xtY6khfkgPOjcJwEhdN4JtkfdOt19b3j3gudNU6fBDU98TArC+oAD5EZcmpuX/XAyRjHvx8z0MxI1ASqtQYeAn8kJNu/lrne+04CFMWWhp+OUcylOOUN6Km1hFlX5gNrqdcNq31bwXg/T4fgfmfYTci8JPQAAAAAASUVORK5CYII=">
            </div>
            <span class="text-primary font-weight-bold">10%</span>
          </div>

        </div>




<section style="width: 1165px; height: 460px; background-color: #EBEDF0; margin-top: 55px; margin-left: 100px; display: flex; justify-content: space-between; padding: 0 20px; border-radius: 10px;">


<canvas id="myAreaChart" width="275" height="200"></canvas>


  <div style="width: 20px;"></div> <!-- Spasi antara card -->

  
  
  <div style="width: 465px; height: 400px; background-color: #FFFFFF; border-radius: 10px; margin-top: 25px;">

  

  <h2 class="chart-heading">Status Lowongan</h2>
  <select style="width: 147px; height: 40px; border: 1px solid #000; border-radius: 4px; margin-top: 25px; margin-left: 25px;">
  <option value="uiux_designer">UI/UX Designer</option>
  <option value="frontend">Frontend</option>
  <option value="backend">Backend</option>
  <option value="digital_marketing">Digital Marketing</option>
</select>
  <div class="programming-stats">
    <div class="chart-container">
      <canvas class="my-chart"></canvas>
    </div>

    <div class="details">
      <ul></ul>
    </div>
  </div>

 



</div>
</section>


  

    <section style="margin-top: 55px; background-color: #E8F2F7; width: 1145px; height: 585px; margin-left: 115px; border-radius: 10px;">
  <span style="float: left; margin-left: 55px; margin-top: 55px; font-size: 25px;">Aktivitas</span>
  <select style="float: right; margin-top: 55px; margin-right: 55px; border-radius: 4px; width: 117px; height: 40px;">
    <option value="pilihan1">Minggu Ini</option>
    <option value="pilihan2">Pilihan 2</option>
    <option value="pilihan3">Pilihan 3</option>
    <option value="pilihan4">Pilihan 4</option>
  </select>

  <div style="clear:both;"></div>
  
  <table class="table" style="width: 1087px; height: 434px; background-color: #FFFFFF; margin: 20px auto; border-radius: 5px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);">
  <thead>
    <tr>
      <th scope="col" style="text-align: center;  padding-top: 25px;">Lowongan</th>
      <th scope="col" style="text-align: center;  padding-top: 25px;">Tanggal Diposting</th>
      <th scope="col" style="text-align: center;  padding-top: 25px;">Tanggal Kadaluarsa</th>
      <th scope="col" style="text-align: center;  padding-top: 25px;">Jumlah Pelamar</th>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;" class="fw-bold">UI/UX Designer</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">12/12/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">30/12/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">10 Pelamar</td>
</tr>

<tr>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;" class="fw-bold">Back-end</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">01/10/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">30/10/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">20 Pelamar</td>
</tr>
<tr>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;" class="fw-bold">Front-end</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">25/12/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">30/12/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">30 Pelamar</td>
</tr>
<tr>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;" class="fw-bold">Software Engineer</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">06/12/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">30/12/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">40 Pelamar</td>
</tr>
  </tbody>
</table>


</section>



        
    </div>

</div>

    </div>

    <script>
     const ctx = document.getElementById('myAreaChart').getContext('2d');
    const myAreaChart = new Chart(ctx, {
      type: 'line', // Area chart can be created using 'line' type with fill
      data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli'],
        datasets: [{
          label: 'Tren Perkembangan Jumlah Lowongan Pekerjaan',
          data: [-800, -400, 0, 400, -500, 0, 500, 1000],
          borderColor: 'rgba(75, 192, 192, 1)',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          fill: true,
          tension: 0.4 // smooth curves
        }
      ]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
            title: {
              display: true,
              text: 'Points'
            }
          }
        },
        plugins: {
          tooltip: {
            mode: 'index',
            intersect: false
          }
        },
        interaction: {
          mode: 'nearest',
          axis: 'x',
          intersect: false
        }
      }
    });
    </script>


    <script>
      const chartData = {
        labels: ['Wawancara', 'Penilaian', 'Ditolak', 'Diterima'],
        data: [39, 38, 10, 27, 22],
      };

      const myChart = document.querySelector('.my-chart');
      const ul = document.querySelector('.programming-stats .details ul');

      new Chart(myChart, {
        type: 'doughnut',
        data: {
          labels: chartData.labels,
          datasets: [
            {
              label: 'Language Popularity',
              data: chartData.data,
            },
          ],
        },
        options: {
          borderWidth: 10,
          borderRadius: 2,
          hoverBorderWidth: 0,
          plugins: {
            legend: {
              display: false,
            },
          },
        },
      });

      const populateUl = () => {
        chartData.labels.forEach((l, i) => {
          let li = document.createElement('li');
          li.innerHTML = `${l}: <span class='percentage'>${chartData.data[i]}%</span>`;
          ul.appendChild(li);
        });
      };

      populateUl();
    </script>

    

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


let CircularBarSelesai = document.querySelector(".card.selesai .circular-bar");
let PercentValueSelesai = document.querySelector(".card.selesai .percent");

let initialValueSelesai = 0;
let finaleValueSelesai = 10;
let speedSelesai = 10;

let timerSelesai = setInterval(() => {
  initialValueSelesai += 1;

  CircularBarSelesai.style.background = `conic-gradient(#4285f4 ${initialValueSelesai / 100 * 360}deg, #e8f0f7 0deg)`;
  PercentValueSelesai.innerHTML = initialValueSelesai + "%";

  if (initialValueSelesai >= finaleValueSelesai) {
    clearInterval(timerSelesai);
  }
}, speedSelesai);

let CircularBarTiga = document.querySelector(".card.tiga .circular-bar");
let PercentValueTiga = document.querySelector(".card.tiga .percent");

let initialValueTiga = 0;
let finaleValueTiga = 5;
let speedTiga = 10;

let timerTiga = setInterval(() => {
  initialValueTiga += 1;

  CircularBarTiga.style.background = `conic-gradient(#4285f4 ${initialValueTiga / 100 * 360}deg, #e8f0f7 0deg)`;
  PercentValueTiga.innerHTML = initialValueTiga + "%";

  if (initialValueTiga >= finaleValueTiga) {
    clearInterval(timerTiga);
  }
}, speedTiga);

document.addEventListener("DOMContentLoaded", function () {
  const data = {
    totalPelamar: 200,
    sedangDiproses: 80,
    diterima: 20
  };

  function smoothIncrement(elementId, endValue, duration) {
    let startValue = 0;
    const increment = endValue / (duration / 10);
    
    function updateValue() {
      startValue += increment;
      if (startValue >= endValue) {
        startValue = endValue;
      } else {
        setTimeout(updateValue, 10);
      }
      document.getElementById(elementId).textContent = Math.floor(startValue);
    }
    
    updateValue();
  }

  smoothIncrement("totalPelamar", data.totalPelamar, 2000);
  smoothIncrement("sedangDiproses", data.sedangDiproses, 2000);
  smoothIncrement("diterima", data.diterima, 2000);
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
        <!-- ApexCharts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>    
        <script src="script.js"></script>
</body>

</html>