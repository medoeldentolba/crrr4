<!DOCTYPE html>
<?php


if(isset($_POST["signin"])){
    
    $password=$_POST["password"];
$email=$_POST["email"];


 require 'connect.php';
 
 //where conition and condition
$select="select * from users where  email='$email' ";
$query=  mysqli_query($con, $select);


//$x=mail($to, $subject, $message);
 if(mysqli_num_rows($query)>0){   
    
    $row=  mysqli_fetch_array($query);
     
   if($row["password"]==$password) {
echo '<script>alert("Welcome Student !");window.location.assign("web/web.html");</script>';
  
   } 
   else{
 echo '<script>alert("الباسورد خطا يرجي كتابه الباسورد بشكل صحيح !");</script>';

   }
    
 }
 else{
     
         echo '<script>alert("هذا الايميل ليس له حساب ؟");window.location.assign("signup.php");</script>';

     
     
 }
    
    
    
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>تسجيل دخول وحش الكيمياء</title>
       
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
<!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
    </head>
    <body>
          <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="work.html">
                <i class='bx bx-buildings bx-sm text-dark'></i>
                <span class="text-dark h4">Doctor</span> <span class="text-primary h4">Mostafa Sayed</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="about.html">المعلم</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="work.html">الصفحه الرئيسيه</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="work.html">المساعده</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class="nav-link" href="profile.html"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                    <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a>
                    <a class="nav-link" href="signin.php"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

       <form action="<?php  echo $_SERVER["PHP_SELF"]; ?>" method="post" >
        
                <tr >

                
                    </td>
                        
                </tr>
               
            
            
             <tr>
                
                        <h1></h1>
                        <h1></h1>
                        <h1></h1>
                    <td></td>
                    <td><input class="form-control form-control-lg light-300" id="floatingname" placeholder="Gmail" type="email" name="email" required></td>
                </tr>
                <h1></h1>
             <tr>
                    <td > </td>
                    <td><input class="form-control form-control-lg light-300" id="floatingname" placeholder="Passowrd" type="password" name="password" required></td>
                </tr>
            
            
             
              
             <tr>
                    <td class="w-100 bg-primary py-3 colspan="2" align="center">
                        <h1></h1>
                        <input class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300" type="submit" name="signin" value="تسجيل دخول">
                        <input class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300" type="reset">
                        <h1></h1>
                        <h1></h1>
                        <h1></h1>
                        <h1></h1>
                        <h1>   </h1>
                        <h1></h1>
                        <h1></h1>
                        <h1></h1>
                        
                    </td>
                    
                        
                </tr>
            
            </table>
        </form>
        
        
    <!-- Start Footer -->
    <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.html">
                        <i class='bx bx-buildings bx-sm text-light'></i>
                        <span class="text-light h5">Doctor</span> <span class="text-light h5 semi-bold-600">Mostafa Sayed</span>
                    </a>
                 
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="http://facebook.com/">
                                <i class='bx bxl-facebook-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.linkedin.com/">
                                <i class='bx bxl-linkedin-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                                <i class='bx bxl-whatsapp-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.flickr.com/">
                                <i class='bx bxl-flickr-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.medium.com/">
                                <i class='bx bxl-medium-square bx-md' ></i>
                            </a>
                        </li>
                    </ul>
                </div>

                            </div>

            </div>
        </div>

        <div class="w-100 bg-primary py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                           @ كل الحقوق محفوظه مع الدكتور مصفطي السيد 2022
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            تم تصميم<a rel="sponsored" class="text-decoration-none text-light" href="#" target="_blank"><strong>@ ابــــونـــــور</strong></a>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>

    </footer>
    
    <!-- End Footer -->
            <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Lightbox -->
    <script src="assets/js/fslightbox.js"></script>
    <script>
        fsLightboxInstances['gallery'].props.loadOnlyCurrentSource = true;
    </script>
    <!-- Load jQuery require for isotope -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>

    </body>
</html>
