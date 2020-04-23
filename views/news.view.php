<?php require('partials/head.php'); ?>

<body class="university-lp">

  <!--Navigation & Intro-->
  <header>

    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
          <strong>LOGO</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!--Links-->
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a class="nav-link" href="#home">Головна
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about" data-offset="100">Коледж</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faculties" data-offset="100">Абітурієнту</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#courses" data-offset="100">Публічна інформація</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#events" data-offset="100">Рада директорів</a>
            </li>
          </ul>

          <!--Social Icons-->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--Navigation & Intro-->

  <!--Main content-->
    <main style="padding-top: 50px;">
        <div class="container mt-5">
            <section class="dark-grey-text">
              <h2 class="text-center font-weight-bold mb-4 pb-2">Все новости</h2>
                 <div class="row align-items-center">
                    <div class="col-lg-5 col-xl-4">
                        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" alt="Sample image">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-7 col-xl-8">

           
            <h4 class="font-weight-bold mb-3"><strong>Title</strong></h4>
           
            <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
                quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
                et aut officiis cum soluta nobis est eligendi placeat facere aut rerum.</p>
           
            <p> 19/05/2020</p>
           
            <a class="btn btn-primary btn-md mx-0 btn-rounded">Просмотреть</a>

            </div>
          

        </div>
        

        <hr class="my-5">

        </section>



        </div>
    </main>
  <!--Main content-->

 <?php require('partials/footer.php'); ?>