<main id="main">
		<div class="container">

			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
					data-dots="false">
					<div class="item-slide">
						<img src="{{asset('assets/images/3.jpg')}}" alt="" class="img-slide">
						<div class="slide-info slide-1">
							<span style="color:rgb(0, 0, 19); font-size: 40px; text-align:center;"  class="subtitle"><b>Welcome to Our Bakery where every cake is an experience, and every cake is an extravaganza! Come see what people have been raving about, and try one for yourself. Every occasion deserves a cake.</b></span>
							<a href="/shop" class="btn-link">Shop Now</a>
						</div>
					</div>
					<div class="item-slide">
						<img src="{{asset('assets/images/2.jpg')}}" alt="" class="img-slide">
						<div class="slide-info slide-2">
							<h2 class="f-title"></h2>
							<span style="color:rgb(0, 0, 19); font-size: 40px;" class="f-subtitle">On Subscription</span>
							<p class="discount-code">Use Code: #FA6868</p>
							{{-- <h4 class="s-title">Get Free</h4>
							<p class="s-subtitle">TRansparent Bra Straps</p> --}}
						</div>
					</div>
					<div class="item-slide">
						<img src="{{asset('assets/images/1.jpg')}}" alt="" class="img-slide">
						<div class="slide-info slide-3">
							<h2 class="f-title">Great Range of <b>Exclusive Subscription Packages</b></h2>
							<span class="f-subtitle">Exclusive Subscription Packages to Suit every need.</span>
							<p class="sale-info">Stating at: <b class="price">NPR 225.00</b></p>
							<a href="#" class="btn-link">Shop Now</a>
						</div>
					</div>
				</div>
			</div>

			<!--BANNER-->
			<div class="wrap-banner style-twin-default">
				<div class="banner-item">
					<a href="/customorder" class="link-banner banner-effect-1">
						<figure><img src="{{asset('assets/images/customorder.png')}}" alt="" width="580" height="190"></figure>
					</a>
				</div>
				<div class="banner-item">
					<a href="/customorder" class="link-banner banner-effect-1">
						<figure><img src="{{asset('assets/images/customorder.png')}}" alt="" width="580" height="190"></figure>
					</a>
				</div>
			</div>


			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 style=text-align:center; class="title-box">Latest Product</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="{{asset('assets/images/cakegallery.jpg')}}" width="1170" height="240" alt="">
						</figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
									data-items="5" data-loop="false" data-nav="true" data-dots="false"
									data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									@foreach ($lproducts as $lproduct)
										<div class="product product-style-2 equal-elem ">
											<div class="product-thumnail">
												<a href="{{route('product.details',['slug'=>$lproduct->slug])}}" title="{{ $lproduct->name }}">
													<figure><img style="height:200px; width:300px;" src="{{asset('assets/images/products')}}/{{$lproduct->image}}"  alt="{{ $lproduct->name }}">
													</figure>
												</a>
											</div> 
											<div class="product-info">
												<a href="{{route('product.details',['slug'=>$lproduct->slug])}}" class="product-name"><span>{{ $lproduct->name }}</span></a>
												<div class="wrap-price"><span class="product-price">NPR {{ $lproduct->regular_price }}</span></div>
											</div>
										</div>		
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Product Categories-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 style=text-align:center; class="title-box">Bakery Items</h3>
				<div class="wrap-top-banner">
					<a href="/subscribe" class="link-banner banner-effect-2">
						<figure><img src="{{asset('assets/images/sub.png')}}" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">
							@foreach ($categories as $key=>$category)
								<a href="#category_{{ $category->id }}" class="tab-control-item {{$key==0 ? 'active':''}}">{{ $category->name }}</a>				
							@endforeach
						</div>
						<div class="tab-contents">
							@foreach ($categories as $key=>$category)
								<div class="tab-content-item {{$key==0 ? 'active':''}}" id="category_{{ $category->id }}">
									<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>										
										@php
											$c_products = DB::table('products')->where('category_id',$category->id)->get()->take($no_of_products);
										@endphp
											@foreach ($c_products as $c_product)									
												<div class="product product-style-2 equal-elem ">
													<div class="product-thumnail">
														<a href="{{ route('product.details',['slug'=>$c_product->slug]) }}" title="{{$c_product->name}}">
															<figure><img src="{{asset('assets/images/products')}}/ {{$c_product->image}}" width="800" height="800" alt="{{$c_product->name}}">
															</figure>
														</a>
													</div>
													<div class="product-info">
														<a href="{{ route('product.details',['slug'=>$c_product->slug]) }}"  class="product-name"><span>{{$c_product->name}}</span></a>
														<div class="wrap-price"><span class="product-price">NPR {{$c_product->regular_price}}</span></div>
													</div>
												</div>
											@endforeach
								</div>
							</div>
						@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
