<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register Pelamar</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-group {
            margin-bottom: 1.5rem;
        }
        .input-group-text, .input-group-append button {
            display: flex;
            align-items: center;
            background-color: #FFFFFF;
        }
        .form-control {
            height: 45px;
            padding: 10px;
        }
        .btn-block {
            height: 45px;
        }
        .text-left {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="background-image: url('img/login.jpg'); background-size: cover; background-position: bottom;">
                    <div class="card-body text-center">
                        <img src="img/Logo.png" alt="Brand Logo" class="mb-4" style="width: 175px;">
                        <h2 class="mb-4" style="margin-top: -45px;">Daftar Sebagai Pelamar</h2>
                        <form action="#" method="post">
                            <div class="form-group">
                                <div class="input-group" style="border: 1px solid #146D9A;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><img src="svg/profile.svg" alt="Profile Icon" width="20"></span>
                                    </div>
                                    <input type="name" class="form-control" name="name" placeholder="Masukkan Nama Anda" style="border: none;">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group" style="border: 1px solid #146D9A;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><img src="svg/email.svg" alt="Email Icon" width="20"></span>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Masukkan Alamat Email Anda" style="border: none;">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group" style="border: 1px solid #146D9A;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><img src="svg/password.svg" alt="Password Icon" width="20"></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="Masukkan Kata Sandi Anda" style="border: none;">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary toggle-password" type="button">
                                            <img src="svg/eye.svg" alt="Toggle Password" width="20">
                                        </button>
                                    </div>
                                </div>
                                <p class="text-left">Kata sandi minimal terdiri dari 8 karakter</p>
                            </div>
                            <div class="form-group">
                                <div class="input-group" style="border: 1px solid #146D9A;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><img src="svg/password.svg" alt="Password Icon" width="20"></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="Konfirmasi kata sandi" style="border: none;">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary toggle-password" type="button">
                                            <img src="svg/eye.svg" alt="Toggle Password" width="20">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" onclick="showAlert()" class="btn btn-secondary btn-block" style="background-color: #146D9A;">Buat Akun</a>
                            <p class="mt-5">Sudah punya akun? <a href="/login" style="color: blue;">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var togglePasswordBtns = document.querySelectorAll('.toggle-password');
        
        togglePasswordBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var passwordInput = this.parentElement.previousElementSibling;
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    this.innerHTML = '<img src="svg/eye.svg" alt="Hide Password" width="20">';
                } else {
                    passwordInput.type = 'password';
                    this.innerHTML = '<img src="svg/eye.svg" alt="Show Password" width="20">';
                }
            });
        });
    });

    function showAlert() {
    Swal.fire({
        title: 'Selamat, akun Anda telah terdaftar!',
        text: 'Silahkan ke halaman login',
        icon: 'success',
        showCancelButton: true,
        confirmButtonText: 'Iya',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/login';
        }
    });
}
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
