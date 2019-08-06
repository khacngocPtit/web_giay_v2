@extends('master-layout')
@section('content')
    <main>
    	<div class="content">
	    	<div class="container">
	    		<div class="row">
		    		<div class="col-12 col-lg-5 zoom">
			    		<div class="exzoom" id="exzoom">
			    			<!-- Images -->
			    			<div class="exzoom_img_box">
			    				<ul class='exzoom_img_ul'>
			    					<li><img src="{{ asset('images/sp-1.jpg') }}"/></li>
			    					<li><img src="{{ asset('images/sp-2.jpeg') }}"/></li>
			    					<li><img src="http://dongtienpaper.com/userfiles/2018/12/thumb/giay-kqm-8806.jpg" alt=""></li>
			    					<li><img src="http://dongtienpaper.com/userfiles/2018/12/thumb/giay-medium-7112.jpg" alt=""></li>
			    					<li><img src="http://dongtienpaper.com/userfiles/2018/12/thumb/giay-bao-goi-6676.jpg" alt=""></li>
			    				</ul>
			    			</div>
			    			<div class="exzoom_nav"></div>
			    		</div>
		    		</div>
	    			<div class="col-12 col-lg-7 product">  			
	    				<h2 class="product__info-name wow bounceInUp">Giấy Kraft Sóng</h2>
	    				<h3 class="product__info-detail wow flipInX" data-wow-delay="0.5s">Chi tiết sản phẩm</h3>
	    				<p class=" wow flipInX" data-wow-delay="0.5s">Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống xeo tròn đã được đầu tư nâng cấp,chất lượng ổn định  </p>
	    				<p  class=" wow flipInX" data-wow-delay="0.5s"><strong>Độ ẩm (Moisture content)</strong>:  7-9%</p>
	    				<p  class=" wow flipInX" data-wow-delay="0.5s"><strong>Độ hút nước (Water absorption Cobb 60)</strong>: Tối đa 50 ± 5g/m2; Tối thiểu 60 ± 5g/m2</p>
	    				<p  class=" wow flipInX" data-wow-delay="0.5s"><strong>Đường kính cuộn (Diameter)</strong>: 115-125cm</p>
	    				<p  class=" wow flipInX" data-wow-delay="0.5s"><strong>Độ ẩm tương đối (Relative humidity)</strong>: 60 ± 5%</p>
						<h3 class="product__info-detail wow flipInX" data-wow-delay="0.5s">Thông số kỹ thuật</h3>
						<table cellpadding="4" class="mytable wow flipInX" data-wow-delay="0.5s" style="width: 100%;">
							<tbody>
								<tr>
									<th>
										Định lượng&nbsp;<br>
										Basic weight<br>
									(g/m2) ± 4%</th>
									<th>
										Độ bục<br>
										Bursting strength<br>
									(kgf/cm2)</th>
									<th>
										Độ nén vòng<br>
										Ring crush CD&nbsp;<br>
									(kgf/6 inch)</th>
								</tr>
								<tr>
									<td>
									125</td>
									<td>
									≥ 3.0</td>
									<td>
									≥ 13</td>
								</tr>
								<tr>
									<td>
									150</td>
									<td>
									≥ 3.5</td>
									<td>
									≥17</td>
								</tr>
								<tr>
									<td>
									175</td>
									<td>
									≥ 3.8</td>
									<td>
									≥ 19</td>
								</tr>
							</tbody>
						</table>
	    			</div>
	    		</div>
	    		<h3 class="product-relate wow bounceInUp">Các sản phẩm liên quan</h3>
	    		<div class="service__silder wow bounceInUp">
                    <a href=""><img src="http://dongtienpaper.com/userfiles/2018/12/thumb/tam-lop-sinh-thai-1379.jpg" alt="">
                    	<span>Giấy Kraft Sóng</span></a>
                    
                    <a href=""><img src="http://dongtienpaper.com/userfiles/2018/12/thumb/giay-kqm-8806.jpg" alt="">
                    <span>Giấy Kraft Sóng</span></a>
                    <a href=""><img src="http://dongtienpaper.com/userfiles/2018/12/thumb/giay-kt1-7413.jpg" alt="">
                    <span>Giấy Kraft Sóng</span></a>
                    <a href=""><img src="http://dongtienpaper.com/userfiles/2018/12/thumb/giay-medium-7112.jpg" alt="">
                    <span>Giấy Kraft Sóng</span></a>
                    <a href=""><img src="http://dongtienpaper.com/userfiles/2018/12/thumb/giay-bao-goi-6676.jpg" alt="">
                    <span>Giấy Kraft Sóng</span>g</a>
                    <a href=""><img src="http://dongtienpaper.com/userfiles/2018/12/thumb/giay-kt1-7413.jpg" alt="">
                    <span>Giấy Kraft Sóng</span></a>
                    <a href=""><img src="http://dongtienpaper.com/userfiles/2018/12/thumb/giay-bao-goi-6676.jpg" alt="">
                    <span>Giấy Kraft Sóng</span></a>
                    
                    <a href=""><img src="http://dongtienpaper.com/userfiles/2018/12/thumb/giay-kqm-8806.jpg" alt="">
                    <span>Giấy Kraft Sóng</span></a>
                </div>
	    	</div>
	    </div>
    </main>
	@endsection