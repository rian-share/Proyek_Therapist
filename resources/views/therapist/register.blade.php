<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        :root {
            --primary-color: #1aceea;
            --primary-hover: #15b8d3;
        }

        .form-label {
            font-family: "Comic Relief", system-ui;
            font-weight: 400;
            font-style: normal;
        }

        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px;
        }

        .login-container {
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
        }

        .login-card {
            border: none;
            border-radius: 50px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.7);
            overflow: hidden;
        }

        .login-header {
            background-color: var(--primary-color);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .login-body {
            padding: 30px;
            background-color: white;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(26, 206, 234, 0.25);

        }

        .forgot-password {
            color: var(--primary-color);
            text-decoration: none;
        }

        .forgot-password:hover {
            color: var(--primary-hover);
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <div class="login-card">
                <div class="login-header">
                    <h2>Registrasi</h2>
                </div>
                <div class="login-body">
                    <form action="{{ route('registrasi') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <i class='bx bxs-user'></i>
                            <label for="email" class="form-label">User Name</label>
                            <input type="text" class="form-control @error('nama_pengguna') is-invalid @enderror"
                                id="email" placeholder="Masukkan Nama Anda" autofocus name="nama_pengguna"
                                value="{{ old('nama_pengguna') }}">
                            @error('nama_pengguna')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <i class='bx bxs-lock'></i>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('kata_sandi') is-invalid @enderror"
                                id="password" placeholder="Masukkan Sandi Anda" name="kata_sandi"
                                value="{{ old('kata_sandi') }}">

                            @error('kata_sandi')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <i class='bx bxs-lock-alt'></i>
                            <label for="password" class="form-label">Confirmasi Password</label>
                            <input type="password"
                                class="form-control @error('kata_sandi_confirmation') is-invalid @enderror"
                                id="password" placeholder="Konfirmasi Sandi" name="kata_sandi_confirmation"
                                value="{{ old('kata_sandi_confirmation') }}">

                            @error('kata_sandi_confirmation')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <i class='bx bxs-envelope'></i>
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="Masukkan Email Anda" name="email"
                                value="{{ old('email') }}">
                            @error('email')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">Registrasi</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>Don't have an account? <a href="/" style="color: var(--primary-color);">Sign in</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- sweet alert --}}
  

</body>

</html>
