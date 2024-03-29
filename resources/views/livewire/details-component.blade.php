	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>detail</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">
							  <ul class="slides">

							    <li data-thumb="{{asset('assets/images/products')}}/{{ $product->image }}">
							    	<img src="{{asset('assets/images/products')}}/{{ $product->image }}" alt="/{{ $product->names }}" />
							    </li>

							  </ul>
							</div>
						</div>
						<div class="detail-info">
							<div class="product-rating">
								<style>
									.color-grey{
										color: #e6e6e6 !important;
									}
								</style>

								@php
									$avgrating = 0;
								@endphp
								@foreach ($product->orderItems->where('rstatus',1) as $orderItem)
									@php
										$avgrating = $avgrating + $orderItem->review->rating;
									@endphp
								@endforeach
								@for ($i=1;$i<=5;$i++)
									@if ($i<=$avgrating)
										<i class="fa fa-star" aria-hidden="true"></i>
									@else
										<i class="fa fa-star color-grey" aria-hidden="true"></i>
									@endif
								@endfor
                                <a href="#" class="count-review">({{ $product->orderItems->where('rstatus',1)->count() }} review)</a>
                            </div>
                            <h2 class="product-name">{{ $product->name }}</h2>
                            <div class="short-desc">
									{{ $product->short_description }}
                            </div>
                            <div class="wrap-social">
                            	<a class="link-socail" href="#"><img src="{{asset('assets/images/social-list.png')}}" alt=""></a>
                            </div>
                            <div class="wrap-price"><span class="product-price">NPR {{ $product->regular_price }}</span></div>
                            <div class="stock-info in-stock">
                                <p class="availability">Availability: <b>{{ $product->stock_status }}</b></p>
                            </div>
                            <div class="quantity">
                            	<span>Quantity:</span>
								<div class="quantity-input">									
									<a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity"></a>
									<input type="text" name="product-quatity" value="1" data-max="05" pattern="[0-9]*" wire:model="qty">
									<a class="btn btn-increase" href="#"  wire:click.prevent="increaseQuantity"></a>
								</div>
							</div>
							<div class="wrap-butons">
								<a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Add to Cart</a>
							</div>
						</div>
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">Recipe</a>
								{{-- <a href="#add_infomation" class="tab-control-item">Addtional Infomation</a> --}}
								<a href="#review" class="tab-control-item">Reviews</a>
							</div>
							<div class="tab-contents">
								<div class="tab-content-item active" id="description">
									{{ $product->description }}
								</div>
	
								<div class="tab-content-item " id="review">
									
									<div class="wrap-review-form">
										<style>
												.width-0-percent{
												width: 0%;
											}
												.width-20-percent{
												width: 20%;
											}
												.width-40-percent{
												width: 40%;
											}
												.width-60-percent{
												width: 60%;
											}
												.width-80-percent{
												width: 80%;
											}
												.width-100-percent{
												width: 100%;
											}
										</style>
										<div id="comments">
											{{-- {{ $product->orderItems->where('rstatus',1) }}  --}}
											<h2 class="woocommerce-Reviews-title">review for <span>{{ $product->name }}</span></h2>
											<ol class="commentlist">
												@foreach ($product->orderItems->where('rstatus',1) as $orderItem)
												<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
													<div id="comment-20" class="comment_container"> 
														<img alt="" src="{{asset('assets/images/author-avata.jpg')}}" height="80" width="80">
														<div class="comment-text">
															<div class="star-rating">
																<span class="width-{{ $orderItem->review->rating * 20 }}-percent">Rated <strong class="rating">{{ $orderItem->review->rating }}</strong> out of 5</span>
															</div>
															<p class="meta"> 
																<strong class="woocommerce-review__author">{{ $orderItem->order->user->name }}</strong> 
																<span class="woocommerce-review__dash">–</span>
																<time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >{{ Carbon\Carbon::parse($orderItem->review->created_at)->format('d F Y g:i A') }}</time>
															</p>
															<div class="description">
																<p>{{ $orderItem->review->comment }}</p>
															</div>
														</div>
													</div>
												</li>														
												@endforeach
											</ol>
										</div><!-- #comments -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget widget-our-services ">
						<div class="widget-content">
							<ul class="our-services">

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-heart" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Free Shipping</b>
											<span class="subtitle">On Order</span>
											<p class="desc"></p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-gift" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Fresh Bakery Items</b>
											<span class="subtitle">Get a gift!</span>
											<p class="desc"></p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-reply" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">100% Natural Ingredients</b>
											<span class="subtitle">Natural</span>
											<p class="desc"></p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>
