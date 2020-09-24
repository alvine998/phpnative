<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    <title>Halaman Login</title>

    <link href="bootstrap/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="bootstrap/bootstrap-4.0.0/dist/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  </head>
  <body class="is-preload">
  <div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			    <div id="main">
                    <header id="header">
                    

                    <div class="col-md-4 col-md-offset-4 form-login" >
                    <img src="/pemira/img/pemilu.png" width="150px" height="150px" style="margin-bottom: 0%;"/>
                    <p>PEMIRA 2020</p>
                    <!-- cek pesan notifikasi -->
                    <?php 
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan'] == "gagal"){
                            echo "Login gagal! username dan password salah!";
                        }else if($_GET['pesan'] == "logout"){
                            echo "Anda telah berhasil logout";
                        }else if($_GET['pesan'] == "belum_login"){
                            echo "Anda harus login untuk mengakses halaman admin";
                        }
                    }
                    ?>

                        <div class="outter-form-login" >
                        

                            <form action="/pemira/verif.php" class="inner-login" method="post" onSubmit="return validasi()">
                            <h3 class="text-center title-login">Login Mahasiswa</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                
                                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
                                <input type="submit" class="btn btn-block btn-custom-green-a" value="BACK" href="/" />
                                
                                <div class="text-center forget">
                                    <a href="#">Forgot Password?</a>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    </header>
                </div>
    </div>
    <script type="text/javascript">
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
            window.onorientationchange = function() { document.body.scrollTop = 0; }
            
            //Validasi Login
            function validasi(){
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;
                if(username != "" && password != ""){
                    return true;
                }else{
                    alert('username dan password harus di isi !');
                    return false;
                }
            }
            
		</script>

    <script src="bootstrap/bootstrap-4.0.0/dist/js/jquery.min.js"></script>
    <script src="bootstrap/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>