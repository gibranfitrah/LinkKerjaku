<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Overlay Status Pelamaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    .button-container {
        justify-content: space-between;
        margin: 20px;
        margin-left: 500px;
    }
    .button {
        background-color: #808080;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
    }
    .button2 {
        background-color: #808080;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        margin-left: 55px;
        cursor: pointer;
        text-decoration: none;
    }
  </style>
</head>
<body>

<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div style="width: 1200px; height: 900px; background-color: #FFFFFF; border-radius: 12px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; box-sizing: border-box;">
            <div style="display: flex; align-items: center; margin-left: 75px; margin-top: 100px;">
                <img src="img/PopUp.jpg" alt="Profile Picture" style="width: 100px; height: 100px; border-radius: 50%;">
                <div style="margin-left: 25px;">
                    <h2 style="margin: 0;">Olivia Rhye</h2>
                    <div style="display: flex; align-items: center; margin-top: 20px;">
                        <img src="svg/instagram.svg" alt="Icon 1" style="width: 24px; height: 24px; margin-right: 10px;">
                        <img src="svg/link.svg" alt="Icon 2" style="width: 24px; height: 24px; margin-right: 10px;">
                        <img src="svg/facebook.svg" alt="Icon 3" style="width: 24px; height: 24px;">
                    </div>
                </div>

                <div class="box" style="border: 2px solid #146D9A; display: inline-block; padding: 10px; margin-left: 600px; margin-top: -1px; text-align: center;">
    <img src="svg/share.svg" alt="share" class="icon" style="display: block; margin: 0 auto;">
</div>


<div class="box" style="border: 2px solid #FFC94A; display: inline-block; padding: 10px; margin-left: 20px;">
    <img src="svg/save.svg" alt="save" class="icon" style="display: block; margin: 0 auto;">
</div>
            </div>

            <h6 class="mt-5" style="margin-left: 100px; color: #146D9A;">Tentang Saya</h6>
      <p class="paragraf5" style="margin-bottom: 10px; margin-left: 100px; margin-right: 60px;">
        Saya Olivia Rhye adalah seorang profesional yang ahli dalam Special Design UI/UX, Marketing Research, dan Digital Marketing. Dengan keahlian saya dalam desain yang menarik dan penelitian pasar yang teliti, serta kemampuan saya dalam strategi pemasaran digital, saya menghadirkan solusi-solusi yang efisien dan memikat.
        <span class="read-more">Saya juga memiliki pengalaman yang luas dalam proyek-proyek besar dan kecil, dan selalu siap untuk tantangan baru. Saya berkomitmen untuk memberikan hasil yang terbaik bagi setiap klien dan memastikan kepuasan mereka.</span>
        <a href="#" class="read-more-link" style="margin-left: 5px; color: #000000;">Read more</a>
    </p>

    <div style="display: flex; flex-direction: row; margin-top: -5px;">
            <div style="margin-left: -55px;">
                <h6 class="mt-5" style="margin-left: 155px;">Pengalaman</h6>
                <p class="paragraph paragraf5" style="margin-bottom: 10px; margin-left: 155px; margin-right: 60px;">
                2021-2022: Merancang, mengembangkan, dan menguji aplikasi
                </p>
                <p class="paragraph paragraf5" style="margin-bottom: 10px; margin-left: 155px; margin-right: 60px;">
                web dan seluler menggunakan bahasa pemrograman Python, 
                </p>
                <p class="paragraph paragraf5" style="margin-bottom: 10px; margin-left: 155px; margin-right: 60px;">
                JavaScript, dan React Native 
                </p>
            </div>
            <div style="margin-left: -55px;">
                <h6 class="mt-5" style="margin-left: 155px;">Keahlian</h6>
                <p class="paragraph paragraf5" style="margin-bottom: 10px; margin-left: 155px; margin-right: 60px;">
                Soft : Komunikasi, Kerja Tim, Manajemen Waktu,
                </p>
                <p class="paragraph paragraf5" style="margin-bottom: 10px; margin-left: 155px; margin-right: 60px;">
                Hard : DevOps, Cloud Computing, Keamanan Siber 
                </p>
            </div>
        </div>

        <div style="display: flex; flex-direction: row; margin-top: -5px;">
            <div style="margin-left: -55px;">
                <h6 class="mt-5" style="margin-left: 155px;">Gaji yang diharapkan</h6>
                <p class="paragraph paragraf5" style="margin-bottom: 10px; margin-left: 155px; margin-right: 60px;">
                Rp 4.000.000 - Rp 6.000.000 per bulan
                </p>
            </div>
            <div>
                <h6 class="mt-5" style="margin-left: 325px;">Alamat Lengkap</h6>
                <p class="paragraph paragraf5" style="margin-bottom: 10px; margin-left: 325px; margin-right: 55px;">
                Jalan Sudirman No. 12, RT 002/RW 005, Menteng, Jakarta Pusat, 10310
                </p>
            </div>
        </div>

        <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
        <div style="width: 313px; height: 58px; background-color: #FEB941; border-radius: 12px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); display: flex; align-items: center; justify-content: center; margin-right: 20px;">
            <img src="svg/document.svg" alt="Icon" style="width: 24px; height: 24px;">
            <h6 style="margin-left: 15px; margin-top: 7px;">Sertifikat</h6>
        </div>
        <div style="width: 313px; height: 58px; background-color: #FEB941; border-radius: 12px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); display: flex; align-items: center; justify-content: center; margin-right: 20px;">
            <img src="svg/document.svg" alt="Icon" style="width: 24px; height: 24px;">
            <h6 style="margin-left: 15px; margin-top: 7px;">CV</h6>

        </div>
        <div style="width: 313px; height: 58px; background-color: #FEB941; border-radius: 12px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); display: flex; align-items: center; justify-content: center;">
            <img src="svg/document.svg" alt="Icon" style="width: 24px; height: 24px;">
            <h6 style="margin-left: 15px; margin-top: 7px;">Surat Lamaran</h6>

        </div>
    </div>
    
    <div class="button-container" style="margin-top: 35px;">
    <button id="acceptButton" class="button" style="background-color: #FFC94A;">Terima</button>
    <button id="rejectButton" class="button2" style="background-color: transparent; border: 2px solid #F55151; color: #F55151;">Tolak</button>
</div>

        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const readMoreLink = document.querySelector('.read-more-link');
      const readMoreText = document.querySelector('.read-more');

      readMoreLink.addEventListener('click', function(event) {
        event.preventDefault();
        if (readMoreText.style.display === 'none' || readMoreText.style.display === '') {
          readMoreText.style.display = 'inline';
          readMoreLink.textContent = 'Read less';
        } else {
          readMoreText.style.display = 'none';
          readMoreLink.textContent = 'Read more';
        }
      });

      const acceptButton = document.getElementById('acceptButton');
      const rejectButton = document.getElementById('rejectButton');

      acceptButton.addEventListener('click', function() {
        Swal.fire({
          icon: 'success',
          title: 'Berhasil Menerima Pelamar',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = '/Page-StatusPelamar';
          }
        });
      });

      rejectButton.addEventListener('click', function() {
        Swal.fire({
          icon: 'error',
          title: 'Tidak menerima pelamar ini',
          text: '😢'
        });
      });
    });
  </script>
</body>
</html>
