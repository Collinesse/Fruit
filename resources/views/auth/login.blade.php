<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Supprimez la ligne suivante qui fait référence à l'image du logo -->
  <!-- <link href="img/logo/logo.png" rel="icon"> -->
  <title>RuangAdmin - Login</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                 
                      <x-auth-session-status class="mb-4" :status="session('status')" />

                      <form method="POST" action="{{ route('login') }}">
                          @csrf
                          <!-- Email Address -->
                          <div class="form-group">
                              <input type="email" class="form-control" name="email" id="exampleInputEmail" aria-describedby="emailHelp"
                                     placeholder="Enter Email Address">
                          </div>

                          <!-- Password -->
                          <div class="form-group">
                              <input id="password" type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                          </div>

                          <!-- Remember Me -->
                          <div class="form-group">
                              <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                                  <input id="remember_me" type="checkbox" class="custom-control-input" name="remember">
                                  <label class="custom-control-label" for="remember_me">Remember Me</label>
                              </div>
                          </div>

                          <div class="form-group">
                              @if (Route::has('password.request'))
                                  <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                      {{ __('Forgot your password?') }}
                                  </a>
                              @endif
                          </div>

                          <div class="form-group">
                              <button type="submit" style="background-color: blue;" class="btn btn-primary btn-block">Login</button>
                          </div>
                          <div class="text-center">
                    <a class="font-weight-bold small" href="register">Create an Account!</a>
                  </div>
                      </form>
                
                  <hr>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>
