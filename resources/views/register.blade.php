<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">

    <script>
        // window.onload= function(){
        //     var formDOM  = document.getElementById("form");
        //     var emailDOM = document.getElementById("inputEmail");
        //     var passDOM  = document.getElementById("inputPassword");
        //     var repassDOM= document.getElementById("retypePassword");
        //     var buttonDOM= document.getElementById("submit");
            
        //     formDOM.addEventListener('submit',function(event){
        //         event.preventDefault();
        //         var email = emailDOM.value;
        //         var password = passDOM.value;
        //         var repass = repassDOM.value;
        //         if(email == "" || password == "" || repass == ""){
        //             alert("Data Harus Di Isi Semua");
        //             return;
        //         }
        //         if(password != repass){
        //             alert("Password tidak sama");
        //             return;
        //         }
        //     });
        // };
    </script>
  </head>

  <body class="text-center">

    <form class="form-signin" id="form" action="/register" method="post">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Register Page</h1>
      <label for="inputNama" class="sr-only">Nama</label>
      <input type="text" id="inputNama" class="form-control" placeholder="Nama" name="name" required  autofocus>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required >
      <label for="retypePassword" class="sr-only">Retype-Password</label>
      <input type="password" id="retypePassword" class="form-control" placeholder="Retype-Password" name="retypePassword" required >
      {{ csrf_field()}} <!-- Auth Security -->
      <button class="btn btn-lg btn-primary btn-block" type="submit" id="btn-sbmt">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
