<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Buang Lowongan</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            <a href="/Page-BuatLowongan" class="sidebar-link" style="color: #6FDCE3;">
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
            <div class="sidebar-footer">
                <a href="/" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">


        <section style="background-color: #FFFFFF; padding: 70px; display: flex; align-items: center; justify-content: center;">
<div style="display: flex; align-items: center; flex-direction: column; margin-top: 20px; margin-right: -10px; margin-left: 100px;">
    <div style="width: 85px; height: 84px; background-color: #1679AB; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 10px;">1</div>
    <p style="margin-top: 0;">Lowongan Baru</p>
</div>
    <div style="width: 10%; height: 2px; background-color: blue; margin-left: 35px; margin-right: 25px; margin-bottom: 25px;"></div>

    <div style="display: flex; align-items: center; flex-direction: column; margin-top: 20px; margin-left: 15px;">
    <div style="width: 85px; height: 84px; background-color: #1679AB; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 10px;">2</div>
    <p style="margin-top: 0;">Informasi Lainnya</p>
</div>

    <div style="width: 10%; height: 2px; background-color: blue; margin-left: 35px; margin-right: 25px; margin-bottom: 25px;"></div>

    <div style="display: flex; align-items: center; flex-direction: column; margin-top: 20px;">
    <div style="width: 85px; height: 84px; background-color: #1679AB; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 10px;">3</div>
    <p style="margin-top: 0;">Lokasi</p>
</div>
</section>

<section style="background-color: #E8F2F7; padding: 70px; display: flex; align-items: center; justify-content: center;">
    <div style="margin-left: 55px; margin-top: -35px;">
        <h5 style="text-align: left; margin-top: 15px;">Judul Pekerjaan*</h5>
        <form>
            <input type="text" style="width: 704px; height: 70px;  border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px; margin-top: 10px;" placeholder="Ketik Disini.....">
        </form>

        <h5 style="text-align: left; margin-top: 25px;">Detail Pekerjaan*</h5>
        <form>
            <textarea id="comment" name="comment" rows="4" cols="50" style="width: 704px; height: 200px; border-radius: 10px; margin-bottom: 10px; margin-top: 15px;" placeholder="ketik disini"></textarea><br>
            <span id="wordCount" style="margin-left: 555px;">0/1000 kata</span>
        </form>


        <h6 style="text-align: left;">Jenis Pekerjaan*</h6>
        <form>
    <select style="width: 704px; height: 70px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px; margin-top: 10px;">
        <option value="Full-time">Full-time</option>
        <option value="Part-time">Part-time</option>
        <option value="Kontrak">Kontrak</option>
        <option value="Freelance">Freelance</option>
        <option value="Magang">Magang</option>
    </select>
</form>

<h5 style="text-align: left; margin-top: 55px;">Keterampilan Yang Diperlukan*</h5>
    <form style="width: 725px; height: 70px; position: relative; margin-top: 20px;">
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

                <h5 style="text-align: left; margin-top: 55px;">Unggah Berkas(Opsional)</h5>
        <div style="width: 704px; height: 152px; background-color: #B7D5E5; border-radius: 10px; position: relative;">
        <h5 style="text-align: justify; position: absolute; top: 35px; left: 50%; transform: translateX(-50%); font-size: 18px; white-space: nowrap;">Seret file ke sini atau klik tombol di bawah ini</h5>
    
    <!-- File Upload -->
    <div style="position: absolute; top: 80px; left: 50%; transform: translateX(-50%);">
        <form style="margin-left: 5px;">
            <label for="file-upload" style="background-color: #FFFFFF; border: 1px solid #808080; border-radius: 8px; padding: 10px; width: 200px; height: 54px; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                <img src="svg/upload.svg" alt="Unggah Berkas" style="width: 20px; height: 20px; margin-right: 5px;">
                <span style="margin-left: 5px; white-space: nowrap; font-size: 15px;">Unggah Berkas</span>
                <input id="file-upload" type="file" style="display: none;">
            </label>
        </form>
    </div>

</div>

    </div>
</section>

<section style="background-color: #FFFFFF; padding: 5px; display: flex; align-items: center; justify-content: center;">
<a href="/Page-BuatLowongan2" style="text-decoration: none; margin-left: auto; margin-right: 335px; margin-top: -55px;">
    <button type="submit" style="background-color: #FFC94A; border: none; border-radius: 8px; color: #000000; padding: 10px;">
        Selanjutnya
    </button>
</a>
</section>

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

document.getElementById("comment").addEventListener("input", function() {
                var wordCount = this.value.trim().split(/\s+/).length;
                document.getElementById("wordCount").innerText = wordCount + "/1000 kata";
            });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>