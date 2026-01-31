<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login Laundry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #6f9cff, #8fd3f4);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            border-radius: 18px;
            overflow: hidden;
        }

        .login-header {
            background: linear-gradient(135deg, #4f7cff, #6fc3ff);
            color: white;
            padding: 25px;
            text-align: center;
        }

        .login-header i {
            font-size: 40px;
        }

        .form-control {
            border-radius: 12px;
        }

        .btn-login {
            border-radius: 12px;
            padding: 10px;
            font-weight: 600;
        }

        .small-text {
            font-size: 13px;
            color: #6c757d;
        }
    </style>
</head>

<script>
    function togglePassword() {
        const password = document.getElementById("password");
        const icon = document.getElementById("eyeIcon");

        if (password.type === "password") {
            password.type = "text";
            icon.classList.remove("bi-eye");
            icon.classList.add("bi-eye-slash");
        } else {
            password.type = "password";
            icon.classList.remove("bi-eye-slash");
            icon.classList.add("bi-eye");
        }
    }
</script>


<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-10">

                <div class="card login-card shadow-lg">

                    <!-- HEADER -->
                    <div class="login-header">
                        <i class="bi bi-washing-machine"></i>
                        <h4 class="mt-2 mb-0">Laundry Asrama Mahasiswa</h4>
                        <p class="small-text text-white-50">Login Sebagai Karyawan</p>
                    </div>

                    <!-- BODY -->
                    <div class="card-body p-4">

                        <?php if ($this->session->flashdata('error')): ?>
                            <div class="alert alert-danger text-center">
                                <?= $this->session->flashdata('error'); ?>
                            </div>
                        <?php endif; ?>

                        <form action="<?= base_url('auth/cek_login') ?>" method="post">

                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" style="cursor: pointer;" onclick="togglePassword()">
                                        <i class="bi bi-eye" id="eyeIcon"></i>
                                    </span>

                                    <input type="password" name="password" id="password"
                                        class="form-control" placeholder="Masukkan password" required>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary w-100 btn-login">
                                <i class="bi bi-box-arrow-in-right"></i> Login
                            </button>
                        </form>

                    </div>

                </div>

                <p class="text-center mt-3 small-text">
                    © <?= date('Y') ?> Sistem Laundry Mahasiswa Nusanstara Tbk
                </p>

            </div>
        </div>
    </div>

</body>

</html>