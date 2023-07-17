
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
    <div class="register-box">
      <img src="img/AW.png" class="avatar" alt="Avatar Image">
      <br><h1>Registrarse</h1>
      <form method="POST" action="{{ route('register') }}">
                        @csrf

        <!-- USERNAME INPUT -->
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <!-- email -->
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electronico') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <!-- PASSWORD INPUT -->
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                           
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

<!-- confirmas pasword -->
<label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar la contraseña') }}</label>
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

<input type="submit" ></input>                   

      </form>
    </div>
  </body>
</html>
          

 
                 
                        