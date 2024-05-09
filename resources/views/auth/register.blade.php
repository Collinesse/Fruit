<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Register</title>
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/ruang-admin.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div class="form-group">
            <label> Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputFirstName" placeholder="Enter First Name" required>
        </div>

        <div >
                    
        <div class="form-group">
                      <label>prenom</label>
                      <input type="text" name="prenom" class="form-control" id="exampleInputLastName" placeholder="Enter Last Name" required>
                    </div>           
                    </div>
        <!-- Email Address -->

        <div class="form-group">
                      <label>adresse</label>
                      <input type="text"name="adresse" class="form-control" id="exampleInputLastName" placeholder="Enter Last Name" required>
                    </div>

        <div class="form-group">
             <label>Email</label>
             <input type="email" name="email" type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Email Address" required>
        </div>

                      
        <!-- Password -->
        <div class="form-group">
            <label>Password</label>
            <input type="password" type="password"  name="password" class="form-control" id="exampleInputPassword" placeholder="Password" required>
        </div>
       
                      
        <!-- Confirm Password -->
        <div class="form-group">
            <label>Confirm Password</label>
                      <input type="password"  type="password" name="password_confirmation" required autocomplete="new-password" class="form-control" id="exampleInputPasswordRepeat"
                        placeholder="Repeat Password" required>
        </div>

        <div class="form-group">
    <button type="submit" style="background-color: blue" class="btn btn-primary btn-block">Register</button>
    <div class="text-center">
                    <a class="font-weight-bold small" href="login">Already have an account?</a>
                  </div>
</div>

                    <hr>
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
  <!-- Register Content -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/ruang-admin.min.js') }}"></script>
</body>

</html>
