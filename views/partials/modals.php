 <!-- Update modal post -->
<div class="modal fade" id="updatePostModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                        <input type="text" id="name" name="title" class="form-control" value="">
                                        <label for="title" class="">Заголовок поста</label>
                                    </div>
                                </div>
                                <!--Grid column-->           
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input placeholder="Выбрать дату" type="text" name="date" id="date-picker-example" class="form-control datepicker">
                                        <label for="date-picker-example">Дата</label>
                                    </div>
                                </div>
                                <!--Grid column-->          
                            </div>
                            <!--Grid row-->
            
            
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" ></textarea>
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
                  <button type="submit" class="btn btn-success btn-sm">обновить</button>
                </div>
            </form>
            </div>   
          </div>
        </div>
</div>


<!-- Insert modal post -->
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
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input placeholder="Выбрать дату" type="text" name="date" id="date-picker-example" class="form-control datepicker">
                                        <label for="date-picker-example">Дата</label>
                                    </div>
                                </div>
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