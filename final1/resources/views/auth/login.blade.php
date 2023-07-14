<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
  <div class="background">
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
</div>
    <div class="login-box">
      <img src="img/AW.png" class="avatar" alt="Avatar Image">
      <br><h1>Iniciar sesión</h1>
      <form method="POST" action="{{ route('login') }}">
      @csrf
        <!-- USERNAME INPUT -->
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Usuario (email)') }}</label>
        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <!-- PASSWORD INPUT -->
        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror         
        <input type="submit" class="">   
      </form>
    </div>
  </body>
</html>