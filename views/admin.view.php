<?php require('partials/head.php'); ?>

<body class="fixed-sn white-skin">

  <!-- Main Navigation -->
  <header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
      <!-- Navbar links -->
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Аккаунт</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Выйти</a>
          </div>
        </li>
      </ul>
      <!-- Navbar links -->
    </nav>
    <!-- Navbar -->
  </header>
  <!-- Main Navigation -->

  <!-- Main layout -->
  <main>
    <div class="container-fluid">
      <!-- Section: Customers -->
      <section class="section team-section">
        <!-- First row -->
        <div class="row">
          <!-- First column -->
          <div class="col-md-12">
            <div class="row mb-1">
              <div class="col-md-3">
                 <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSm">
                   Добавить Пост
                  </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-1">
                <!-- Tabs -->
                <div class="classic-tabs">
                  <!-- Nav tabs -->
                  <div class="tabs-wrapper">
                    <ul class="nav tabs-primary primary-color" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link waves-light active" data-toggle="tab" href="#panel83" role="tab">
                          Посты
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- Tab panels -->
                  <div class="tab-content card">
                    <!-- Panel 1 -->
                    <div class="tab-pane fade show active" id="panel83" role="tabpanel">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Пост ID</th>
                              <th>Заголовок поста</th>
                              <th>Описания поста</th>
                              <th>Дата добавления</th>
                              <th>Действия</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Тест</td>
                              <td>Тест</td>
                              <td>03.05.2020</td>
                              <td>
                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i
                                    class="far fa-eye"></i></a>
                                <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fas fa-times"></i></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">

        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title w-100" id="myModalLabel">Добавить пост</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/addpost" method="POST">
              <section class="mb-4">           
                <div class="row">       
                    <!--Grid column-->
                    <div class="col-md-12 mb-md-0 mb-5">
                        
                            <!--Grid row-->
                            <div class="row">      
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="title" class="form-control">
                                        <label for="title" class="">Заголовок поста</label>
                                    </div>
                                </div>
                                <!--Grid column-->           
                                <!--Grid column-->
                                <!-- <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input placeholder="Выбрать дату" type="text" name="date" id="date-picker-example" class="form-control datepicker">
                                        <label for="date-picker-example">Дата</label>
                                    </div>
                                </div> -->
                                <!--Grid column-->          
                            </div>
                            <!--Grid row-->
            
            
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                        <label for="message">Содержимое поста</label>
                                    </div>         
                                </div>
                            </div>
                            <!--Grid row-->
                            <!-- <div class="row">
                              <div class="col-md-12">
                                <div class="file-field">
                                  <div class="btn blue-gradient btn-sm float-left">
                                    <span><i class="fas fa-cloud-upload-alt mr-2" aria-hidden="true"></i>Выберите файл</span>
                                    <input type="file" name="image" multiple>
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Добавить">
                                  </div>
                                </div>
                              </div>
                            </div> -->
                       
                    </div>
                    <!--Grid column-->
                </div>
            
            </section>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Закрыть</button>
                  <button type="submit" class="btn btn-success btn-sm">Добавить</button>
                </div>
            </form>
            </div>   
          </div>
        </div>
        </div>

    </div>
  </main>
  <!-- Main layout -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="../js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>

  <!-- Custom scripts -->
  <script>

  $('.datepicker').pickadate();
   

  </script>

</body>

</html>
