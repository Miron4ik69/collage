<?php require('partials/head.php') ?>

<body class="university-lp">
<style>
    html,
    body,
    header,
    .jarallax {
      height: 100%;
    }

    @media (min-width: 560px) and (max-width: 740px) {

      html,
      body,
      header,
      .jarallax {
        height: 500px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .jarallax {
        height: 500px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2A48 !important;
      }

      .navbar {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12) !important;
      }
    }

  </style>

  <!--Navigation & Intro-->
  <header>

    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
          <strong>LOGO</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
           aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!--Links-->
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a class="nav-link" href="/">Головна
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/news ">Новости</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faculties">Абітурієнту</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#courses" >Публічна інформація</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#events">Рада директорів</a>
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
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Navbar-->

    <!-- Intro Section -->
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}'
      style="background-image: url('../public/img/universe.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-black-strong">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row smooth-scroll">
            <div class="col-md-12 white-text text-center">
              <div class="wow fadeInDown" data-wow-delay="0.2s">
                <h2 class="display-3 font-weight-bold mb-2">ЗКР НУ"ЗП"</h2>
                <hr class="hr-light">
                <h3 class="subtext-header mt-4 mb-5"></h3>
              </div>
              <!-- <a href="#events" data-offset="100" class="btn btn-info wow fadeInLeft" data-wow-delay="0.2s">Events</a>
              <a href="#courses" data-offset="100" class="btn btn-warning wow fadeInRight"
                data-wow-delay="0.2s">Courses</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>


  </header>
  <!--Navigation & Intro-->

  <!--Main content-->
  <main>

    <div class="container-fluid">

      <section id="testimonials" class="mb-5">

        <!--Section heading-->
        <h2 class="text-center mb-5 my-5 pt-5 pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Акутальные нововсти</h2>

        <div class="row">

          <!--Carousel Wrapper-->
          <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item wow fadeIn"
            data-ride="carousel">

           
            

            <!--Slides-->
            <div class="carousel-inner text-center" role="listbox">

              <!--First slide-->
              <div class="carousel-item active">
                <!--Grid column-->
                <?php foreach($results as $result): ?>
                <div class="col-md-4">
                
                  <div class="card card-cascade wider">

                      <!-- Card image -->
                      <div class="view view-cascade gradient-card-header peach-gradient">
                    
                        <!-- Title -->
                        <h2 class="card-header-title mb-3"><?= $result->title; ?></h2>
                        <!-- Text -->
                        <p class="mb-0"><i class="fas fa-calendar mr-2"></i><?= $result->date; ?></p>

                      </div>

                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">

                        <!-- Text -->
                        <p class="card-text"><?= $result->description; ?></p>
                        <!-- Link -->
                        <a href="#!" class="orange-text d-flex flex-row-reverse p-2">
                          <h5 class="waves-effect waves-light">Просмотреть<i class="fas fa-angle-double-right ml-2"></i></h5>
                        </a>

                      </div>
                      <!-- Card content -->

                    </div>
                    
                </div>
                <?php endforeach; ?>
                <!--Grid column-->

                
                <!--Grid column-->

                <!--Grid column-->
               
                <!--Grid column-->

              </div>
              <!--First slide-->

              <!--Second slide-->
             
              <!--Second slide-->

              <!--Third slide-->
             
              <!--Third slide-->

            </div>
            <!--Slides-->

          </div>
          <!--Carousel Wrapper-->

        </div>

      </section>

      <!--Section: About-->
      <section id="about" class="mt-4 mb-2">

        <!--Secion heading-->
        <h2 class="text-center my-5 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Про Колледж</h2>

        <!--First row-->
        <div class="row">

          <!--First column-->
          <div class="col-lg-5 col-md-12 mb-5 pb-4 wow fadeIn" data-wow-delay="0.4s">

            <!--Image-->
            <img src="../public/img/about-collage.jpeg"
                 class="img-fluid z-depth-1 rounded" 
                 alt="My photo">

          </div>
          <!--First column-->

          <!--Second column-->
          <div class="col-lg-6 dark-grey-text ml-lg-auto col-md-12 wow fadeIn" data-wow-delay="0.4s">

            <!--Description-->
            <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione
              quisquam, dicta
              ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque animi maxime.
            </p>

            <p align="justify">Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus
              voluptatum, magni
              impedit eaque delectus, beatae maxime temporibus maiores quibusdam quasi rem magnam ad perferendis
              iusto.</p>

            <ul>
              <li>Nemo animi soluta ratione</li>
              <li>Beatae maxime temporibus</li>
              <li>Consectetur adipisicing elit</li>
              <li>Repellendus voluptatum, impedit</li>
            </ul>

          </div>
          <!--Second column-->

        </div>
        <!--First row-->

      </section>
      <!--Section: About-->

      <hr>

      <!--Projects section v.3-->
      <section id="info" class="mt-4 mb-5 pb-4">

        <!--Section heading-->
        <h2 class="text-center mb-5 font-weight-bold pt-5 pb-4 my-5 wow fadeIn" data-wow-delay="0.2s">
        Организационные вопросы
        </h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto my-5 grey-text wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, molestiae possimus repudiandae maiores! Ad eaque perferendis et numquam explicabo asperiores, adipisci, suscipit mollitia inventore, dolore accusantium fugit perspiciatis, molestias doloribus.</p>

        <!--First row-->
        <div class="row wow fadeIn" data-wow-delay="0.4s">

          <!--First column-->
          <div class="col-md-12">

            <div class="mb-2">

              <!--Nav tabs-->
              <ul class="nav md-pills pills-primary d-flex justify-content-center" role="tablist">

                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#panel31" role="tab">
                    <i class="fas fa-graduation-cap fa-2x"></i>
                    <br>Студенты</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel32" role="tab">
                    <i class="fas fa-users fa-2x"></i>
                    <br>Абитуриенты</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel33" role="tab">
                    <i class="fas fa-university fa-2x"></i>
                    <br>Стипендия</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel34" role="tab">
                    <i class="fas fa-home fa-2x"></i>
                    <br>Общежитие</a>
                </li>
              </ul>

            </div>

            <!--Tab panels-->
            <div class="tab-content">

              <!--Panel 1-->
              <div class="tab-pane fade in show active" id="panel31" role="tabpanel">
                <br>

                <!--First row-->
                <div class="row">

                  <!--First column-->
                  <div class="col-lg-5 col-md-12">

                    <!--Featured image-->
                    <div class="view overlay z-depth-1 mb-2">
                      <img src="https://mdbootstrap.com/img/Photos/Others/images/54.jpg" class="rounded img-fluid"
                        alt="sample image">
                    </div>
                  </div>
                  <!--First column-->

                  <!--Second column-->
                  <div class="col-lg-6 ml-lg-auto col-md-12 text-center text-md-left">

                   

                    <!--Description-->
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                      ratione
                      quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                      eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                      perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                      possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                  </div>
                  <!--Second column-->
                </div>
                <!--First row-->

              </div>
              <!--Panel 1-->

              <!--Panel 2-->
              <div class="tab-pane fade" id="panel32" role="tabpanel">
                <br>

                <!--First row-->
                <div class="row">

                  <!--First column-->
                  <div class="col-lg-5 col-md-12">

                    <!--Featured image-->
                    <div class="view overlay z-depth-1 mb-2">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2840%29.jpg"
                        class="rounded img-fluid" alt="sample image">
                    </div>
                  </div>
                  <!--First column-->

                  <!--Second column-->
                  <div class="col-lg-6 ml-lg-auto col-md-12 text-center text-md-left">

                  
                    <!--Description-->
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                      ratione
                      quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                      eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                      perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                      possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                  </div>
                  <!--Second column-->
                </div>
                <!--First row-->

              </div>
              <!--Panel 2-->

              <!--Panel 3-->
              <div class="tab-pane fade" id="panel33" role="tabpanel">
                <br>

                <!--First row-->
                <div class="row">

                  <!--First column-->
                  <div class="col-lg-5 col-md-12">

                    <!--Featured image-->
                    <div class="view overlay z-depth-1 mb-2">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2841%29.jpg"
                        class="rounded img-fluid" alt="sample image">
                    </div>
                  </div>
                  <!--First column-->

                  <!--Second column-->
                  <div class="col-lg-6 ml-lg-auto col-md-12 text-center text-md-left">

                  

                    <!--Description-->
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                      ratione
                      quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                      eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                      perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                      possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                  </div>
                  <!--Second column-->
                </div>
                <!--First row-->

              </div>
              <!--Panel 3-->

              <!--Panel 4-->
              <div class="tab-pane fade" id="panel34" role="tabpanel">
                <br>

                <!--First row-->
                <div class="row">

                  <!--First column-->
                  <div class="col-lg-5 col-md-12">

                    <!--Featured image-->
                    <div class="view overlay z-depth-1 mb-2">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2842%29.jpg"
                        class="rounded img-fluid" alt="sample image">
                    </div>
                  </div>
                  <!--First column-->

                  <!--Second column-->
                  <div class="col-lg-6 ml-lg-auto col-md-12 text-center text-md-left">

                  

                    <!--Description-->
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                      ratione
                      quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                      eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                      perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                      possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                  </div>
                  <!--Second column-->
                </div>
                <!--First row-->

              </div>
              <!--Panel 4-->

            </div>
            <!--Tab panels-->

          </div>
          <!--First column-->

        </div>
        <!--First row-->

      </section>
      <!--Projects section v.3-->

    </div>

    <!--Streak-->
    <div class="streak streak-photo streak-md"
      style="background-image: url(../public/img/streak-bg.jpeg);">
      <div class="flex-center mask rgba-indigo-strong">
        <div class="text-center white-text">
          <h2 class="h2-responsive mb-5">
            <i class="fas fa-quote-left" aria-hidden="true"></i> 
              Программиста руки кормят… и кофе.
            <i class="fas fa-quote-right" aria-hidden="true"></i>
          </h2>
          <h5 class="text-center font-italic " data-wow-delay="0.2s">~ Программисты</h5>
        </div>
      </div>
    </div>
    <!--Streak-->


    <div class="container-fluid background-r">
      <div class="container py-3">

        <!--Section Faculties -->
        <section id="faculties" class="extra-margins text-center">

          <h2 class="text-center mb-5 my-5 pt-4 pb-4 font-weight-bold">Факультеты</h2>

          <!--Grid row-->
          <div class="row mb-5 pb-3">

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

              <!--Card Light-->
              <div class="card">
                <!--Card image-->
                <div class="view overlay">
                  <img src="../public/img/pm-bg.jpeg" class="card-img-top" alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title darkgrey-text">
                    <strong>ПМ</strong>
                  </h4>
                  <hr>
                  <!--Text-->
                  <p class="font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, nobis quasi quae, omnis enim itaque maiores ullam consequatur porro! Perspiciatis, similique inventore esse. Commodi, recusandae perferendis aliquid voluptatibus sunt quam?
                  </p>
                  <a href="#" class="black-text d-flex flex-row-reverse">
                    <p class="waves-effect p-2 font-small blue-text mb-0">Читать дальше
                      <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
                    </p>
                  </a>
                </div>
                <!--/.Card content-->
              </div>
              <!--/.Card Light-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

              <!--Card Light-->
              <div class="card">
                <!--Card image-->
                <div class="view overlay">
                  <img src="../public/img/ot-tk-bg.jpg" class="card-img-top" alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title darkgrey-text">
                    <strong>ОТ/ТК</strong>
                  </h4>
                  <hr>
                  <!--Text-->
                  <p class="font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, nobis quasi quae, omnis enim itaque maiores ullam consequatur porro! Perspiciatis, similique inventore esse. Commodi, recusandae perferendis aliquid voluptatibus sunt quam?
                  </p>
                  <a href="#" class="black-text d-flex flex-row-reverse">
                    <p class="waves-effect p-2 font-small blue-text mb-0">Читать дальше
                      <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
                    </p>
                  </a>
                </div>
                <!--/.Card content-->
              </div>
              <!--/.Card Light-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

              <!--Card Light-->
              <div class="card">
                <!--Card image-->
                <div class="view overlay">
                  <img src="../public/img/ks-ksm-bg.jpeg" class="card-img-top" alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title darkgrey-text">
                    <strong>КС/КСМ</strong>
                  </h4>
                  <hr>
                  <!--Text-->
                  <p class="font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, nobis quasi quae, omnis enim itaque maiores ullam consequatur porro! Perspiciatis, similique inventore esse. Commodi, recusandae perferendis aliquid voluptatibus sunt quam?
                  </p>
                  <a href="#" class="black-text d-flex flex-row-reverse">
                    <p class="waves-effect p-2 font-small blue-text mb-0">Читать дальше
                      <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
                    </p>
                  </a>
                </div>
                <!--/.Card content-->
              </div>
              <!--/.Card Light-->

            </div>
            <!--Grid column-->
            <!--Grid column-->
            

          </div>
          <!--First row-->

        </section>
        <!--Section: Blog v.2-->

      </div>
    </div>

  </main>
  <!--Main content-->

<?php require("partials/footer.php") ?>

