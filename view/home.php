<?php
if ($_SESSION['leveluser']=="user"){
	
	include "home_user.php";
	
}else{
	

?>



<!-- Content Header (Page header) -->
	<div class="hero">
    <picture>
        
        <img src="img/baner_bumil.jpg" class="hero-img" alt="" aria-hidden="true">
    </picture>
    <!-- UI asks Hide Content? True value should hide content. -->
            <div class="hero-inner">
            <div class="hero-inner-body">
                                    <h1 class="hero-inner-body-hdg">Ibu Hamil Siaga Tanda Bahaya Kehamilan </h1>
                
                                    <p class="hero-inner-body-text u-vr4x"></p>
                
					<div class="col-md-5">
                    <a class="btn btn-block main-button" href="daftar" style="">Daftar</a>                
					</div>
            </div>
        </div>
    </div>
   <br>
  <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s" data-scroll-reveal-id="4" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                    <img src="assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Apa itu Tanda Bahaya Kehamilan ?</h2>
                    </div>
                    <div class="left-text">
                        <p>Selama masa kehamilan, Bunda mungkin mengalami berbagai perubahan pada tubuh. Namun, apakah Bunda tahu bahwa ada tanda yang menunjukkan bahaya pada kehamilan?
							Lalu apa saja tanda bahaya pada kehamilan yang perlu diwaspadai itu? Mari kita bahas yuk bun.</p>
					<a href="daftar" class="main-button">Baca Selanjutnya</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
  <!-- /.content-wrapper -->
  
  <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Perawatan Sehari-hari Ibu Hamil</h2>
                    </div>
                    <div class="left-text">
                        <p>Perawatan ibu hamil dan hal apa saja yang harus dihindari ibu hamil Ayo kita Bahas bersama.</p>
						<a href="daftar" class="main-button">Baca Selanjutnya</a>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s" data-scroll-reveal-id="5" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                    <img src="img/task.png" class="rounded img-fluid d-block mx-auto" alt="App" width="150px">
                </div>
            </div>
        </div>
    </section>
	
 <!-- /.content-wrapper -->	
	<section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s" data-scroll-reveal-id="4" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                   <img src="assets/images/right-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Aktivitas fisik dan Latihan Fisik Ibu Hamil</h2>
                    </div>
                    <div class="left-text">
                        <p>Aktivitas fisik dan latihan fisik ibu hamil yanda dapat dan tidak dapat dilakukan.</p>
						<a href="daftar" class="main-button">Baca Selanjutnya</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
  <!-- /.content-wrapper -->

      <br> 
        
  <?php
}
  ?>