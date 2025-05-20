<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sistema POS - Login</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Custom Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-card {
      background: #fff;
      border-radius: 1rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      padding: 2.5rem;
      max-width: 400px;
      width: 100%;
    }

    .login-logo img {
      width: 100px;
      margin-bottom: 1rem;
    }

    .form-control::placeholder {
      color: #aaa;
    }

    .input-group-text {
      background-color: #f0f0f0;
      border-right: 0;
    }

    .form-control {
      border-left: 0;
    }

    .btn-primary {
      border-radius: 2rem;
    }

    .login-title {
      font-weight: 600;
      margin-bottom: 1.5rem;
      color: #333;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <div class="text-center login-logo">
      <img src="../public/dist/assets/img/Logo.png" alt="Logo">
    </div>
    <h2 class="login-title">Iniciar Sesión</h2>
    <form action="categorias.php" method="post">
      <div class="mb-3 input-group">
        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
        <input type="email" class="form-control" placeholder="Correo electrónico" required />
      </div>
      <div class="mb-3 input-group">
        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
        <input type="password" class="form-control" placeholder="Contraseña" required />
      </div>
      <div class="d-grid mt-4">
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </div>
    </form>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
