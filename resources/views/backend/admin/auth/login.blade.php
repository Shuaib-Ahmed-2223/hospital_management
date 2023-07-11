<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel='stylesheet' href="{{ asset('backend/admin/css/admin-login.css') }}"/>
</head>
<body>
<div class="login-page">
  <div class="form">
    <h2>Log in</h2>
  @if (session()->has('error'))
  <p style="color: black">{{ session()->get('error') }}</p>
  @endif
    <form action="{{ url('/admin/login/form') }}" method='POST' class="login-form">
    @csrf  
    <input type="text" name='email' placeholder="email"/>
      <input type="password" name='password' placeholder="password"/>
      <button type='submit'>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>