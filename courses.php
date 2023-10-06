<?php
session_start();
// require 'connectDB.php';
$usuario=$_SESSION['usuario'];
if(!isset($usuario)){
header("Location: login.html");
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="icon" type="image/vnd.icon" href="assets/images/favicon.ico">
    <title>Cursos / Tutorías UPC-SA</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="./Educal – Online Learning and Education HTML5 Template_files/preloader.css">
    <link rel="stylesheet" href="./Educal – Online Learning and Education HTML5 Template_files/bootstrap.min.css">
    <link rel="stylesheet" href="./Educal – Online Learning and Education HTML5 Template_files/meanmenu.css">
    <link rel="stylesheet" href="./Educal – Online Learning and Education HTML5 Template_files/animate.min.css">
    <link rel="stylesheet" href="./Educal – Online Learning and Education HTML5 Template_files/owl.carousel.min.css">
    <link rel="stylesheet" href="./Educal – Online Learning and Education HTML5 Template_files/swiper-bundle.css">
    <link rel="stylesheet" href="./Educal – Online Learning and Education HTML5 Template_files/backToTop.css">
    <link rel="stylesheet" href="./Educal – Online Learning and Education HTML5 Template_files/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./Educal – Online Learning and Education HTML5 Template_files/elegantFont.css">
    <link rel="stylesheet" href="./Educal – Online Learning and Education HTML5 Template_files/default.css">
    <link rel="stylesheet" href="./Educal – Online Learning and Education HTML5 Template_files/style.css">

 
  </head>

<body>

    <!-- pre loader area start -->
    <div id="loading" style="display: none;">
        <div id="loading-center">
           <div id="loading-center-absolute">
              <div class="loading-content">
                 <img class="loading-logo-text" src="" alt="">
                 <div class="loading-stroke">
                    <img class="loading-logo-icon" src="" alt="">
                 </div>
              </div>
           </div>
        </div>  
     </div>
     <!-- pre loader area end -->

     <!-- back to top start -->
     <!-- <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
           <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 203.54;"></path>
        </svg>
     </div> -->
     <!-- back to top end -->

     <!-- header area start -->
     <header class="main-header clearfix" role="header">
    
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        
        <div class="logo">
          <a href="courses.html"><img src="assets/images/logo-universidad-popular-del-cesar.png " width="20%"  alt="Logo" style="color: black;"></a>
        </div>
        
        <nav id="menu" class="main-nav" role="navigation">
        <div class="bienvenido">
         <?php
         $usuarioMayus = strtoupper($usuario);
         echo "<h3>BIENVENIDO USUARIO $usuarioMayus </h3>";  
        ?> 
        </div>

          <ul class="main-menu">
            <li><a href="courses.html">Cursos</a></li>
            <li><a href="cerrar_sesion.php">Cerrar sesion</a></li>
            <!-- <li><a href="#section4">Programa</a> -->
            <!-- <li><a href="#section6">Contacto</a></li> -->
          </ul>
        </nav>
      </header>
     <!-- header area end -->

     <main>

        <!-- page title area start -->
        <!-- <section class="section main-banner" id="top" data-section="section1">
            <video autoplay muted loop id="bg-video">
                <source src="assets/images/course-video.mp4" type="video/mp4" />
            </video>
      
            <div class="video-overlay header-text">
                <div class="caption">
                  <div class="slogan">
                    <img src="assets/images/logo_upc_Mesa-de-trabajo-1.png" width="70%" alt="">
                  </div>
                    <h2>Tutorías UPC-SA</h2>
                </div>
            </div>
        </section> -->
        <!-- page title area end -->

        <!-- course area start -->
        <section class="course__area pt-120 pb-120" style="background-color: rgb(60, 155, 97, 0.9);">
           <div class="container">
              <div class="row">
                 <div class="col-xxl-12">
                    <div class="course__tab-conent">
                       <div class="tab-content" id="courseTabContent">
                          <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                             <div class="row">
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="course__thumb w-img p-relative fix">
                                         <a href="ing_sist.html">
                                            <img src="./Educal – Online Learning and Education HTML5 Template_files/course-1.jpg" alt="">
                                         </a>
                                         <div class="course__tag">
                                            <a href="ing_sist.html">4to Semestre</a>
                                         </div>
                                      </div>
                                      <div class="course__content">
                                         <div class="course__meta d-flex align-items-center justify-content-between">
                                         </div>
                                         <h3 class="course__title">
                                             <a href="ing_sist.html">
                                                Cálculo III
                                             </a>
                                          </h3>
                                         <div class="course__teacher d-flex align-items-center">
                                            <div class="course__teacher-thumb mr-15">
                                               <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-1.jpg" alt="">
                                            </div>
                                            <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Danny Rios</a></h6>
                                         </div>
                                      </div>
                                      <div class="course__more d-flex justify-content-between align-items-center">
                                         <div class="course__btn">
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="course__thumb w-img p-relative fix">
                                         <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">
                                            <img src="./Educal – Online Learning and Education HTML5 Template_files/course-2.jpg" alt="">
                                         </a>
                                         <div class="course__tag">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html#" class="sky-blue">Mechanical</a>
                                         </div>
                                      </div>
                                      <div class="course__content">
                                         <div class="course__meta d-flex align-items-center justify-content-between">
                                            <div class="course__lesson">
                                               <span><i class="far fa-book-alt"></i>72 Lesson</span>
                                            </div>
                                            <div class="course__rating">
                                               <span><i class="icon_star"></i>4.5 (44)</span>
                                            </div>
                                         </div>
                                         <h3 class="course__title"><a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">Fundamentals of music theory Learn new</a></h3>
                                         <div class="course__teacher d-flex align-items-center">
                                            <div class="course__teacher-thumb mr-15">
                                               <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-2.jpg" alt="">
                                            </div>
                                            <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Barry Tone</a></h6>
                                         </div>
                                      </div>
                                      <div class="course__more d-flex justify-content-between align-items-center">
                                         <div class="course__status d-flex align-items-center">
                                            <span class="sky-blue">$32.00</span>
                                            <span class="old-price">$68.00</span>
                                         </div>
                                         <div class="course__btn">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html" class="link-btn">
                                               Know Details
                                               <i class="far fa-arrow-right"></i>
                                               <i class="far fa-arrow-right"></i>
                                            </a>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="course__thumb w-img p-relative fix">
                                         <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">
                                            <img src="./Educal – Online Learning and Education HTML5 Template_files/course-7.jpg" alt="">
                                         </a>
                                         <div class="course__tag">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html#" class="blue-2">Development</a>
                                         </div>
                                      </div>
                                      <div class="course__content">
                                         <div class="course__meta d-flex align-items-center justify-content-between">
                                            <div class="course__lesson">
                                               <span><i class="far fa-book-alt"></i>43 Lesson</span>
                                            </div>
                                            <div class="course__rating">
                                               <span><i class="icon_star"></i>4.4 (40)</span>
                                            </div>
                                         </div>
                                         <h3 class="course__title"><a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">Bases Matemáticas dios Álgebra Ecuacion</a></h3>
                                         <div class="course__teacher d-flex align-items-center">
                                            <div class="course__teacher-thumb mr-15">
                                               <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-7.jpg" alt="">
                                            </div>
                                            <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Samuel Serif</a></h6>
                                         </div>
                                      </div>
                                      <div class="course__more d-flex justify-content-between align-items-center">
                                         <div class="course__status d-flex align-items-center">
                                            <span class="blue-2">$46.00</span>
                                            <span class="old-price">$68.00</span>
                                         </div>
                                         <div class="course__btn">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html" class="link-btn">
                                               Know Details
                                               <i class="far fa-arrow-right"></i>
                                               <i class="far fa-arrow-right"></i>
                                            </a>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="course__thumb w-img p-relative fix">
                                         <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">
                                            <img src="./Educal – Online Learning and Education HTML5 Template_files/course-3.jpg" alt="">
                                         </a>
                                         <div class="course__tag">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html#" class="green">Development</a>
                                         </div>
                                      </div>
                                      <div class="course__content">
                                         <div class="course__meta d-flex align-items-center justify-content-between">
                                            <div class="course__lesson">
                                               <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                            </div>
                                            <div class="course__rating">
                                               <span><i class="icon_star"></i>3.5 (55)</span>
                                            </div>
                                         </div>
                                         <h3 class="course__title"><a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">Strategy law and organization Foundation</a></h3>
                                         <div class="course__teacher d-flex align-items-center">
                                            <div class="course__teacher-thumb mr-15">
                                               <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-3.jpg" alt="">
                                            </div>
                                            <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Elon Gated</a></h6>
                                         </div>
                                      </div>
                                      <div class="course__more d-flex justify-content-between align-items-center">
                                         <div class="course__status d-flex align-items-center">
                                            <span class="green">$46.00</span>
                                            <span class="old-price">$68.00</span>
                                         </div>
                                         <div class="course__btn">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html" class="link-btn">
                                               Know Details
                                               <i class="far fa-arrow-right"></i>
                                               <i class="far fa-arrow-right"></i>
                                            </a>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="course__thumb w-img p-relative fix">
                                         <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">
                                            <img src="./Educal – Online Learning and Education HTML5 Template_files/course-4.jpg" alt="">
                                         </a>
                                         <div class="course__tag">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html#" class="blue">Marketing</a>
                                         </div>
                                      </div>
                                      <div class="course__content">
                                         <div class="course__meta d-flex align-items-center justify-content-between">
                                            <div class="course__lesson">
                                               <span><i class="far fa-book-alt"></i>22 Lesson</span>
                                            </div>
                                            <div class="course__rating">
                                               <span><i class="icon_star"></i>4.5 (42)</span>
                                            </div>
                                         </div>
                                         <h3 class="course__title"><a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">The business Intelligence analyst Course 2022</a></h3>
                                         <div class="course__teacher d-flex align-items-center">
                                            <div class="course__teacher-thumb mr-15">
                                               <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-4.jpg" alt="">
                                            </div>
                                            <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Eleanor Fant</a></h6>
                                         </div>
                                      </div>
                                      <div class="course__more d-flex justify-content-between align-items-center">
                                         <div class="course__status d-flex align-items-center">
                                            <span class="blue">$62.00</span>
                                            <span class="old-price">$97.00</span>
                                         </div>
                                         <div class="course__btn">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html" class="link-btn">
                                               Know Details
                                               <i class="far fa-arrow-right"></i>
                                               <i class="far fa-arrow-right"></i>
                                            </a>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="course__thumb w-img p-relative fix">
                                         <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">
                                            <img src="./Educal – Online Learning and Education HTML5 Template_files/course-8.jpg" alt="">
                                         </a>
                                         <div class="course__tag">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html#" class="yellow">Marketing</a>
                                         </div>
                                      </div>
                                      <div class="course__content">
                                         <div class="course__meta d-flex align-items-center justify-content-between">
                                            <div class="course__lesson">
                                               <span><i class="far fa-book-alt"></i>22 Lesson</span>
                                            </div>
                                            <div class="course__rating">
                                               <span><i class="icon_star"></i>4.5 (42)</span>
                                            </div>
                                         </div>
                                         <h3 class="course__title"><a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">The business Intelligence analyst Course 2022</a></h3>
                                         <div class="course__teacher d-flex align-items-center">
                                            <div class="course__teacher-thumb mr-15">
                                               <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-8.jpg" alt="">
                                            </div>
                                            <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Brian Cumin</a></h6>
                                         </div>
                                      </div>
                                      <div class="course__more d-flex justify-content-between align-items-center">
                                         <div class="course__status d-flex align-items-center">
                                            <span class="yellow">$62.00</span>
                                            <span class="old-price">$97.00</span>
                                         </div>
                                         <div class="course__btn">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html" class="link-btn">
                                               Know Details
                                               <i class="far fa-arrow-right"></i>
                                               <i class="far fa-arrow-right"></i>
                                            </a>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="course__thumb w-img p-relative fix">
                                         <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">
                                            <img src="./Educal – Online Learning and Education HTML5 Template_files/course-5.jpg" alt="">
                                         </a>
                                         <div class="course__tag">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html#" class="orange">Audio &amp; Music</a>
                                         </div>
                                      </div>
                                      <div class="course__content">
                                         <div class="course__meta d-flex align-items-center justify-content-between">
                                            <div class="course__lesson">
                                               <span><i class="far fa-book-alt"></i>18 Lesson</span>
                                            </div>
                                            <div class="course__rating">
                                               <span><i class="icon_star"></i>4.5 (37)</span>
                                            </div>
                                         </div>
                                         <h3 class="course__title"><a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">Build your media and Public presence</a></h3>
                                         <div class="course__teacher d-flex align-items-center">
                                            <div class="course__teacher-thumb mr-15">
                                               <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-5.jpg" alt="">
                                            </div>
                                            <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Pelican Steve</a></h6>
                                         </div>
                                      </div>
                                      <div class="course__more d-flex justify-content-between align-items-center">
                                         <div class="course__status d-flex align-items-center">
                                            <span class="orange">$62.00</span>
                                            <span class="old-price">$97.00</span>
                                         </div>
                                         <div class="course__btn">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html" class="link-btn">
                                               Know Details
                                               <i class="far fa-arrow-right"></i>
                                               <i class="far fa-arrow-right"></i>
                                            </a>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="course__thumb w-img p-relative fix">
                                         <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">
                                            <img src="./Educal – Online Learning and Education HTML5 Template_files/course-6.jpg" alt="">
                                         </a>
                                         <div class="course__tag">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html#" class="pink">UX Design</a>
                                         </div>
                                      </div>
                                      <div class="course__content">
                                         <div class="course__meta d-flex align-items-center justify-content-between">
                                            <div class="course__lesson">
                                               <span><i class="far fa-book-alt"></i>13 Lesson</span>
                                            </div>
                                            <div class="course__rating">
                                               <span><i class="icon_star"></i>4.5 (72)</span>
                                            </div>
                                         </div>
                                         <h3 class="course__title"><a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">Creative writing through Storytelling</a></h3>
                                         <div class="course__teacher d-flex align-items-center">
                                            <div class="course__teacher-thumb mr-15">
                                               <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-6.jpg" alt="">
                                            </div>
                                            <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Shahnewaz Sakil</a></h6>
                                         </div>
                                      </div>
                                      <div class="course__more d-flex justify-content-between align-items-center">
                                         <div class="course__status d-flex align-items-center">
                                            <span class="pink">$46.00</span>
                                            <span class="old-price">$72.00</span>
                                         </div>
                                         <div class="course__btn">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html" class="link-btn">
                                               Know Details
                                               <i class="far fa-arrow-right"></i>
                                               <i class="far fa-arrow-right"></i>
                                            </a>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="course__thumb w-img p-relative fix">
                                         <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">
                                            <img src="./Educal – Online Learning and Education HTML5 Template_files/course-9.jpg" alt="">
                                         </a>
                                         <div class="course__tag">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html#" class="blue-2">UX Design</a>
                                         </div>
                                      </div>
                                      <div class="course__content">
                                         <div class="course__meta d-flex align-items-center justify-content-between">
                                            <div class="course__lesson">
                                               <span><i class="far fa-book-alt"></i>25 Lesson</span>
                                            </div>
                                            <div class="course__rating">
                                               <span><i class="icon_star"></i>4.5 (35)</span>
                                            </div>
                                         </div>
                                         <h3 class="course__title"><a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">Creative writing through Storytelling</a></h3>
                                         <div class="course__teacher d-flex align-items-center">
                                            <div class="course__teacher-thumb mr-15">
                                               <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-9.jpg" alt="">
                                            </div>
                                            <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Hilary Ouse</a></h6>
                                         </div>
                                      </div>
                                      <div class="course__more d-flex justify-content-between align-items-center">
                                         <div class="course__status d-flex align-items-center">
                                            <span class="blue-2">$46.00</span>
                                            <span class="old-price">$72.00</span>
                                         </div>
                                         <div class="course__btn">
                                            <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html" class="link-btn">
                                               Know Details
                                               <i class="far fa-arrow-right"></i>
                                               <i class="far fa-arrow-right"></i>
                                            </a>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                             <div class="row">
                                <div class="col-xxl-12">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="row gx-0">
                                         <div class="col-xxl-4 col-xl-4 col-lg-4">
                                            <div class="course__thumb course__thumb-list w-img p-relative fix">
                                               <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">
                                                  <img src="./Educal – Online Learning and Education HTML5 Template_files/course-1(1).jpg" alt="">
                                               </a>
                                               <div class="course__tag">
                                                  <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html#">Art &amp; Design</a>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-xxl-8 col-xl-8 col-lg-8">
                                            <div class="course__right">
                                               <div class="course__content course__content-3">
                                                  <div class="course__meta d-flex align-items-center">
                                                     <div class="course__lesson mr-20">
                                                        <span><i class="far fa-book-alt"></i>43 Lesson</span>
                                                     </div>
                                                     <div class="course__rating">
                                                        <span><i class="icon_star"></i>4.5 (44)</span>
                                                     </div>
                                                  </div>
                                                  <h3 class="course__title course__title-3">
                                                     <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">Become a product Manager learn the skills &amp; job.</a>
                                                  </h3>
                                                  <div class="course__summary">
                                                     <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                  </div>
                                                  <div class="course__teacher d-flex align-items-center">
                                                     <div class="course__teacher-thumb mr-15">
                                                        <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-1.jpg" alt="">
                                                     </div>
                                                     <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Jim Séchen</a></h6>
                                                  </div>
                                               </div>
                                               <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                  <div class="course__status">
                                                     <span>Free</span>
                                                  </div>
                                                  <div class="course__btn">
                                                     <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html" class="link-btn">
                                                        Know Details
                                                        <i class="far fa-arrow-right"></i>
                                                        <i class="far fa-arrow-right"></i>
                                                     </a>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>                                                           
                                <div class="col-xxl-12">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="row gx-0">
                                         <div class="col-xxl-4 col-xl-4 col-lg-4">
                                            <div class="course__thumb course__thumb-list w-img p-relative fix">
                                               <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">
                                                  <img src="./Educal – Online Learning and Education HTML5 Template_files/course-2(1).jpg" alt="">
                                               </a>
                                               <div class="course__tag">
                                                  <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html#" class="sky-blue">Art &amp; Design</a>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-xxl-8 col-xl-8 col-lg-8">
                                            <div class="course__right">
                                               <div class="course__content course__content-3">
                                                  <div class="course__meta d-flex align-items-center">
                                                     <div class="course__lesson mr-20">
                                                        <span><i class="far fa-book-alt"></i>72 Lesson</span>
                                                     </div>
                                                     <div class="course__rating">
                                                        <span><i class="icon_star"></i>4.5 (44)</span>
                                                     </div>
                                                  </div>
                                                  <h3 class="course__title course__title-3">
                                                     <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">Fundamentals of music theory Learn new.</a>
                                                  </h3>
                                                  <div class="course__summary">
                                                     <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                  </div>
                                                  <div class="course__teacher d-flex align-items-center">
                                                     <div class="course__teacher-thumb mr-15">
                                                        <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-2.jpg" alt="">
                                                     </div>
                                                     <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Barry Tone</a></h6>
                                                  </div>
                                               </div>
                                               <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                  <div class="course__status d-flex align-items-center">
                                                     <span class="sky-blue">$32.00</span>
                                                     <span class="old-price">$68.00</span>
                                                  </div>
                                                  <div class="course__btn">
                                                     <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html" class="link-btn">
                                                        Know Details
                                                        <i class="far fa-arrow-right"></i>
                                                        <i class="far fa-arrow-right"></i>
                                                     </a>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>                                                           
                                <div class="col-xxl-12">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="row gx-0">
                                         <div class="col-xxl-4 col-xl-4 col-lg-4">
                                            <div class="course__thumb course__thumb-list w-img p-relative fix">
                                               <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">
                                                  <img src="./Educal – Online Learning and Education HTML5 Template_files/course-3(1).jpg" alt="">
                                               </a>
                                               <div class="course__tag">
                                                  <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html#" class="blue-2">Art &amp; Design</a>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-xxl-8 col-xl-8 col-lg-8">
                                            <div class="course__right">
                                               <div class="course__content course__content-3">
                                                  <div class="course__meta d-flex align-items-center">
                                                     <div class="course__lesson mr-20">
                                                        <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                                     </div>
                                                     <div class="course__rating">
                                                        <span><i class="icon_star"></i>3.5 (32)</span>
                                                     </div>
                                                  </div>
                                                  <h3 class="course__title course__title-3">
                                                     <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">Strategy law and organization Foundation</a>
                                                  </h3>
                                                  <div class="course__summary">
                                                     <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                  </div>
                                                  <div class="course__teacher d-flex align-items-center">
                                                     <div class="course__teacher-thumb mr-15">
                                                        <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-3.jpg" alt="">
                                                     </div>
                                                     <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Elon Gated</a></h6>
                                                  </div>
                                               </div>
                                               <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                  <div class="course__status d-flex align-items-center">
                                                     <span class="blue-2">$46.00</span>
                                                     <span class="old-price">$68.00</span>
                                                  </div>
                                                  <div class="course__btn">
                                                     <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html" class="link-btn">
                                                        Know Details
                                                        <i class="far fa-arrow-right"></i>
                                                        <i class="far fa-arrow-right"></i>
                                                     </a>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>                                                           
                                <div class="col-xxl-12">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="row gx-0">
                                         <div class="col-xxl-4 col-xl-4 col-lg-4">
                                            <div class="course__thumb course__thumb-list w-img p-relative fix">
                                               <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">
                                                  <img src="./Educal – Online Learning and Education HTML5 Template_files/course-4(1).jpg" alt="">
                                               </a>
                                               <div class="course__tag">
                                                  <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html#" class="green">Art &amp; Design</a>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-xxl-8 col-xl-8 col-lg-8">
                                            <div class="course__right">
                                               <div class="course__content course__content-3">
                                                  <div class="course__meta d-flex align-items-center">
                                                     <div class="course__lesson mr-20">
                                                        <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                                     </div>
                                                     <div class="course__rating">
                                                        <span><i class="icon_star"></i>3.5 (32)</span>
                                                     </div>
                                                  </div>
                                                  <h3 class="course__title course__title-3">
                                                     <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">The business Intelligence analyst Course 2022</a>
                                                  </h3>
                                                  <div class="course__summary">
                                                     <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                  </div>
                                                  <div class="course__teacher d-flex align-items-center">
                                                     <div class="course__teacher-thumb mr-15">
                                                        <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-4.jpg" alt="">
                                                     </div>
                                                     <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Eleanor Fant</a></h6>
                                                  </div>
                                               </div>
                                               <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                  <div class="course__status d-flex align-items-center">
                                                     <span class="green">$46.00</span>
                                                     <span class="old-price">$68.00</span>
                                                  </div>
                                                  <div class="course__btn">
                                                     <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html" class="link-btn">
                                                        Know Details
                                                        <i class="far fa-arrow-right"></i>
                                                        <i class="far fa-arrow-right"></i>
                                                     </a>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>                                                           
                                <div class="col-xxl-12">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="row gx-0">
                                         <div class="col-xxl-4 col-xl-4 col-lg-4">
                                            <div class="course__thumb course__thumb-list w-img p-relative fix">
                                               <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">
                                                  <img src="./Educal – Online Learning and Education HTML5 Template_files/course-5(1).jpg" alt="">
                                               </a>
                                               <div class="course__tag">
                                                  <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html#" class="blue">Art &amp; Design</a>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-xxl-8 col-xl-8 col-lg-8">
                                            <div class="course__right">
                                               <div class="course__content course__content-3">
                                                  <div class="course__meta d-flex align-items-center">
                                                     <div class="course__lesson mr-20">
                                                        <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                                     </div>
                                                     <div class="course__rating">
                                                        <span><i class="icon_star"></i>3.5 (32)</span>
                                                     </div>
                                                  </div>
                                                  <h3 class="course__title course__title-3">
                                                     <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">Build your media and Public presence</a>
                                                  </h3>
                                                  <div class="course__summary">
                                                     <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                  </div>
                                                  <div class="course__teacher d-flex align-items-center">
                                                     <div class="course__teacher-thumb mr-15">
                                                        <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-5.jpg" alt="">
                                                     </div>
                                                     <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Pelican Steve</a></h6>
                                                  </div>
                                               </div>
                                               <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                  <div class="course__status d-flex align-items-center">
                                                     <span class="blue">$62.00</span>
                                                     <span class="old-price">$97.00</span>
                                                  </div>
                                                  <div class="course__btn">
                                                     <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html" class="link-btn">
                                                        Know Details
                                                        <i class="far fa-arrow-right"></i>
                                                        <i class="far fa-arrow-right"></i>
                                                     </a>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>                                                           
                                <div class="col-xxl-12">
                                   <div class="course__item white-bg mb-30 fix">
                                      <div class="row gx-0">
                                         <div class="col-xxl-4 col-xl-4 col-lg-4">
                                            <div class="course__thumb course__thumb-list w-img p-relative fix">
                                               <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">
                                                  <img src="./Educal – Online Learning and Education HTML5 Template_files/course-6(1).jpg" alt="">
                                               </a>
                                               <div class="course__tag">
                                                  <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html#" class="yellow">Art &amp; Design</a>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-xxl-8 col-xl-8 col-lg-8">
                                            <div class="course__right">
                                               <div class="course__content course__content-3">
                                                  <div class="course__meta d-flex align-items-center">
                                                     <div class="course__lesson mr-20">
                                                        <span><i class="far fa-book-alt"></i>33 Lesson</span>
                                                     </div>
                                                     <div class="course__rating">
                                                        <span><i class="icon_star"></i>3.5 (72)</span>
                                                     </div>
                                                  </div>
                                                  <h3 class="course__title course__title-3">
                                                     <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html">Creative writing through Storytelling</a>
                                                  </h3>
                                                  <div class="course__summary">
                                                     <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                  </div>
                                                  <div class="course__teacher d-flex align-items-center">
                                                     <div class="course__teacher-thumb mr-15">
                                                        <img src="./Educal – Online Learning and Education HTML5 Template_files/teacher-6.jpg" alt="">
                                                     </div>
                                                     <h6><a href="https://weblearnbd.net/tphtml/educal/educal/instructor-details.html">Elon Gated</a></h6>
                                                  </div>
                                               </div>
                                               <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                  <div class="course__status d-flex align-items-center">
                                                     <span class="yellow">$62.00</span>
                                                     <span class="old-price">$97.00</span>
                                                  </div>
                                                  <div class="course__btn">
                                                     <a href="https://weblearnbd.net/tphtml/educal/educal/course-details.html" class="link-btn">
                                                        Know Details
                                                        <i class="far fa-arrow-right"></i>
                                                        <i class="far fa-arrow-right"></i>
                                                     </a>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>                                                           
                             </div>
                          </div>
                        </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-xxl-12">
                    <div class="basic-pagination wow fadeInUp mt-30" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                       <ul class="d-flex align-items-center"> 
                          <li class="prev">
                             <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html" class="link-btn link-prev">
                                Prev
                                <i class="arrow_left"></i>
                                <i class="arrow_left"></i>
                             </a>
                          </li>
                          <li>
                             <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html">
                                <span>1</span>
                             </a>
                          </li>
                          <li class="active">
                             <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html">
                                <span>2</span>
                             </a>
                          </li>
                          <li>
                             <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html">
                                <span>3</span>
                             </a>
                          </li>
                          <li class="next">
                             <a href="https://weblearnbd.net/tphtml/educal/educal/course-grid.html" class="link-btn">
                                Next
                                <i class="arrow_right"></i>
                                <i class="arrow_right"></i>
                             </a>
                          </li>
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <!-- course area end -->

<!-- footer area start  -->
<footer style="background-color: rgb(6, 67, 10);">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <p><i class="fa fa-copyright"></i> Copyright 2023 by Universidad Popular del Cesar
         | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">lAURA SANJUAN; CAMILO ARANGO</a></p>
     </div>
   </div>
 </div>
</footer>
<!-- footer area end  -->
</main>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>