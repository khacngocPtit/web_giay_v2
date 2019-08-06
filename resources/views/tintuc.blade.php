@extends('master-layout')
@section('content')
    
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 content-news">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tin nội bộ</li>
                      </ol>
                    </nav> <!-- hết nav-b -->
                    
                    <div class="row">
                        <div class="col-sm-4">
                         <div class="card">
                             <a href="" title=""><img class="card-img-top" src="{{ asset('image/tintuc1.jpg') }}" alt="Card image cap"></a> 
                              <div class="card-body">
                                <h5 class="card-title"><a href="" title="">Card title</a></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary view-details">Xem chi tiết</a>
                              </div>
                          </div>
                        </div>
                         <div class="col-sm-4">
                            <div class="card">
                               <a href="" title="">    <img class="card-img-top" src="{{ asset('image/tintuc1.jpg') }}" alt="Card image cap"></a> 
                              <div class="card-body">
                                <h5 class="card-title"><a href="" title="">Card title</a></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary view-details">Xem chi tiết</a>
                              </div>
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <div class="card">
                              <a href="" title="">    <img class="card-img-top" src="{{ asset('image/tintuc1.jpg') }}" alt="Card image cap"></a> 
                              <div class="card-body">
                               <h5 class="card-title"><a href="" title="">Card title</a></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary view-details">Xem chi tiết</a>
                              </div>
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <div class="card">
                             <a href="" title="">    <img class="card-img-top" src="{{ asset('image/tintuc1.jpg') }}" alt="Card image cap"></a> 
                              <div class="card-body">
                                <h5 class="card-title"><a href="" title="">Card title</a></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary view-details">Xem chi tiết</a>
                              </div>
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <div class="card">
                             <a href="" title="">    <img class="card-img-top" src="{{ asset('image/tintuc1.jpg') }}" alt="Card image cap"></a> 
                              <div class="card-body">
                                <h5 class="card-title"><a href="" title="">Card title</a></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary view-details">Xem chi tiết</a>
                              </div>
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <div class="card">
                              <a href="" title="">    <img class="card-img-top" src="{{ asset('image/tintuc1.jpg') }}" alt="Card image cap"></a> 
                              <div class="card-body">
                                 <h5 class="card-title"><a href="" title="">Card title</a></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary view-details">Xem chi tiết</a>
                              </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pagi-page">
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>                       
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>    <!-- hết pagi-page -->
                </div>
                <div class="col-md-3 slidebar-col">
                    <div class="vid-hl">
                        <h3 class="title-vd">VIDEO NỔI BẬT</h3>
                         <div class="sb-line"></div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5cR1zlg9h3w" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="box-tuyendung">  
                        <h3 class="title-vd">TIN TUYỂN DỤNG</h3>
                         <div class="sb-line"></div>                              
                         <div class="card">
                             <a href="" title=""> <img class="card-img-top" src="image/tin-tuyen-dung.jpg" alt="Card image cap"></a> 
                              <div class="card-body">
                                <h5 class="card-title"><a href="" title="">Card title</a></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary view-details">Xem chi tiết</a>
                              </div>
                        </div>
                    </div>

                     <div class="box-baochi">  
                        <h3 class="title-vd">BÁO CHÍ NÓI VỀ CHÚNG TÔI</h3>
                         <div class="sb-line"></div>                              
                         <div class="card">
                             <a href="" title=""> <img class="card-img-top" src="image/baochi.jpg" alt="Card image cap"></a> 
                              <div class="card-body">
                                <h5 class="card-title"><a href="" title="">Card title</a></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary view-details">Xem chi tiết</a>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- hết content -->
@endsection