@extends('master-layout')
@section('content')
<div class="container mt-3" style="text-align: center;">
  <h2 class="section-title" >DANH SÁCH SẢN PHẨM CỦA CHÚNG TÔI</h2>
  <span class="divider"></span>
  <br>
  <!-- Nav tabs -->
  <ul class=" portfolio-filter nav nav-tabs" style="margin-left: 400px; border-bottom: none; ;">
    <li class="nav-item" >
      <a class="nav-link active" data-toggle="tab" href="#home" >Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">Menu 3</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
    <div class="container"> 
   <div class="row">
   
                      <div class="col-lg-4 js-sort-item">
                        <div class="latest-posts-wrapper">
                        <div class="product-item ">
                            <div class="thumnail">
                                <a href="#"><img src="{{ asset('image/giay-bao-goi-6676.jpg') }}" alt="product image" class="img-fluid"></a>
                            </div>
                            <h3 class="product-title"><a href="#">SẢN PHẨM</a></h3>
                            <div class="latest-posts-summary">
                              <p> Đồng Tiến là công ty duy nhất tại Việt Nam thực hiện sản xuất và ...</p>
                            </div>
                        </div>
                    </div>
                    </div>
                        <div class="col-lg-4 js-sort-item">
                        <div class="latest-posts-wrapper">
                        <div class="product-item ">
                            <div class="thumnail">
                                <a href="#"><img src="{{ asset('image/giay-bao-goi-6676.jpg') }}" alt="product image" class="img-fluid"></a>
                            </div>
                            <h3 class="product-title"><a href="#">SẢN PHẨM</a></h3>
                            <div class="latest-posts-summary">
                              <p> Đồng Tiến là công ty duy nhất tại Việt Nam thực hiện sản xuất và ...</p>
                            </div>
                        </div>
                    </div>
                    </div>
                   <div class="col-lg-4 js-sort-item">
                        <div class="latest-posts-wrapper">
                        <div class="product-item ">
                            <div class="thumnail">
                                <a href="#"><img src="{{ asset('image/giay-bao-goi-6676.jpg') }}" alt="product image" class="img-fluid"></a>
                            </div>
                            <h3 class="product-title"><a href="#">SẢN PHẨM</a></h3>
                            <div class="latest-posts-summary">
                              <p> Đồng Tiến là công ty duy nhất tại Việt Nam thực hiện sản xuất và ...</p>
                            </div>
                        </div>
                    </div>
                    </div>
                   <div class="col-lg-4 js-sort-item">
                        <div class="latest-posts-wrapper">
                        <div class="product-item ">
                            <div class="thumnail">
                                <a href="#"><img src="{{ asset('image/giay-bao-goi-6676.jpg') }}" alt="product image" class="img-fluid"></a>
                            </div>
                            <h3 class="product-title"><a href="#">SẢN PHẨM</a></h3>
                           <div class="latest-posts-summary">
                              <p> Đồng Tiến là công ty duy nhất tại Việt Nam thực hiện sản xuất và ...</p>
                            </div>
                        </div>
                    </div>
                    </div>

   </div> 
    </div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
     <div class="container"> 
   <div class="row">
   
                      <div class="col-lg-4 js-sort-item">
                        <div class="latest-posts-wrapper">
                        <div class="product-item ">
                            <div class="thumnail">
                                <a href="#"><img src="{{ asset('image/giay-bao-goi-6676.jpg') }}" alt="product image" class="img-fluid"></a>
                            </div>
                            <h3 class="product-title"><a href="#">SẢN PHẨM</a></h3>
                            <div class="latest-posts-summary">
                              <p> Đồng Tiến là công ty duy nhất tại Việt Nam thực hiện sản xuất và ...</p>
                            </div>
                        </div>
                    </div>
                    </div>
                        <div class="col-lg-4 js-sort-item">
                        <div class="latest-posts-wrapper">
                        <div class="product-item ">
                            <div class="thumnail">
                                <a href="#"><img src="{{ asset('image/giay-bao-goi-6676.jpg') }}" alt="product image" class="img-fluid"></a>
                            </div>
                            <h3 class="product-title"><a href="#">SẢN PHẨM</a></h3>
                            <div class="latest-posts-summary">
                              <p> Đồng Tiến là công ty duy nhất tại Việt Nam thực hiện sản xuất và ...</p>
                            </div>
                        </div>
                    </div>
                    </div>
                   <div class="col-lg-4 js-sort-item">
                        <div class="latest-posts-wrapper">
                        <div class="product-item ">
                            <div class="thumnail">
                                <a href="#"><img src="{{ asset('image/giay-bao-goi-6676.jpg') }}" alt="product image" class="img-fluid"></a>
                            </div>
                            <h3 class="product-title"><a href="#">SẢN PHẨM</a></h3>
                            <div class="latest-posts-summary">
                              <p> Đồng Tiến là công ty duy nhất tại Việt Nam thực hiện sản xuất và ...</p>
                            </div>
                        </div>
                    </div>
                    </div>
                <!--    <div class="col-lg-4 js-sort-item">
                        <div class="latest-posts-wrapper">
                        <div class="product-item ">
                            <div class="thumnail">
                                <a href="#"><img src="{{ asset('image/giay-bao-goi-6676.jpg') }}" alt="product image" class="img-fluid"></a>
                            </div>
                            <h3 class="product-title"><a href="#">SẢN PHẨM</a></h3>
                           <div class="latest-posts-summary">
                              <p> Đồng Tiến là công ty duy nhất tại Việt Nam thực hiện sản xuất và ...</p>
                            </div>
                        </div>
                    </div>
                    </div> -->

   </div> 
    </div>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
     <div class="container"> 
   <div class="row">
   
                      <div class="col-lg-4 js-sort-item">
                        <div class="latest-posts-wrapper">
                        <div class="product-item ">
                            <div class="thumnail">
                                <a href="#"><img src="{{ asset('image/giay-bao-goi-6676.jpg') }}" alt="product image" class="img-fluid"></a>
                            </div>
                            <h3 class="product-title"><a href="#">SẢN PHẨM</a></h3>
                            <div class="latest-posts-summary">
                              <p> Đồng Tiến là công ty duy nhất tại Việt Nam thực hiện sản xuất và ...</p>
                            </div>
                        </div>
                    </div>
                    </div>
                        <div class="col-lg-4 js-sort-item">
                        <div class="latest-posts-wrapper">
                        <div class="product-item ">
                            <div class="thumnail">
                                <a href="#"><img src="{{ asset('image/giay-bao-goi-6676.jpg') }}" alt="product image" class="img-fluid"></a>
                            </div>
                            <h3 class="product-title"><a href="#">SẢN PHẨM</a></h3>
                            <div class="latest-posts-summary">
                              <p> Đồng Tiến là công ty duy nhất tại Việt Nam thực hiện sản xuất và ...</p>
                            </div>
                        </div>
                    </div>
                    </div>
        
      

   </div> 
    </div>
    </div>
        <div id="menu3" class="container tab-pane fade"><br>
     <div class="container"> 
   <div class="row">
   
                      <div class="col-lg-4 js-sort-item">
                        <div class="latest-posts-wrapper">
                        <div class="product-item ">
                            <div class="thumnail">
                                <a href="#"><img src="{{ asset('image/giay-bao-goi-6676.jpg') }}" alt="product image" class="img-fluid"></a>
                            </div>
                            <h3 class="product-title"><a href="#">SẢN PHẨM</a></h3>
                            <div class="latest-posts-summary">
                              <p> Đồng Tiến là công ty duy nhất tại Việt Nam thực hiện sản xuất và ...</p>
                            </div>
                        </div>
                    </div>
                    </div>
        
           
        

   </div> 
    </div>
    </div>
  </div>
</div>

      @endsection