<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login & Sign Up - Dengan Label</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #1e3c72, #2a5298);
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background: #fff;
      padding: 2rem;
      border-radius: 15px;
      width: 340px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    h2 {
      color: #1e3c72;
      text-align: center;
      margin-bottom: 1.5rem;
    }

    label {
      display: block;
      margin-top: 10px;
      margin-bottom: 5px;
      font-weight: bold;
      color: #333;
      font-size: 14px;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    button {
      width: 100%;
      padding: 10px;
      margin-top: 15px;
      border: none;
      border-radius: 8px;
      background-color: #1e90ff;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background-color: #105ec7;
    }

    .switch {
      margin-top: 1rem;
      text-align: center;
      font-size: 14px;
    }

    .switch a {
      color: #1e90ff;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2 id="form-title">Login</h2>
    <form id="auth-form">
      <div id="fullname-container"">
        <label for="fullname">Nama Lengkap</label>
        <input type="text" id="fullname" name="fullname" placeholder="Masukkan nama lengkap">
      </div>

      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Masukkan username" required>

      <div id="email-container">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email">
      </div>
      
      <label for="password">Kata Sandi</label>
      <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>


      <button type="submit" id="submit-button">Masuk</button>
    </form>

    <div class="switch">
      <span id="switch-text">Belum punya akun? <a href="/register">Daftar</a></span>
    </div>
  </div>

  
</body>
</html>
