<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Login</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body, html {
      height: 100%;
      background: #f8f9fa;
    }
    .login-container {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .login-form {
      width: 100%;
      max-width: 400px;
      padding: 30px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .login-form h3 {
      margin-bottom: 30px;
      text-align: center;
      font-weight: 600;
      color: #343a40;
    }
  </style>
</head>
<body>
  <div class="login-container">

<form class="login-form" action="{{ route('login') }}" method="POST">
  @csrf
  <input type="hidden" name="is_admin_login" value="1">
  <h3>Admin Panel</h3>
  
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input
      type="email"
      class="form-control"
      id="email"
      name="email"
      placeholder="admin@example.com"
      required
    />
    @error('email')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input
      type="password"
      class="form-control"
      id="password"
      name="password"
      placeholder="Enter your password"
      required
    />
    @error('password')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="rememberMe" name="remember" />
    <label class="form-check-label" for="rememberMe">Remember me</label>
  </div>
  
  <button type="submit" class="btn btn-dark w-100">Login</button>
</form>

  </div>

  <!-- Bootstrap JS Bundle CDN (Popper + Bootstrap JS) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
