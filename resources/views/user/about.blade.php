@extends('layouts.master')

@section('title')
About Us
@endsection

@section('content')
<div class="about">
		<div class="container">
			<div class="about-grids">
				<div class="col-md-4 about-grid">
					<h3>At vero eos et accusamus et odio reprehenderit</h3>
					<img src="images/7.jpg" alt=" " class="img-responsive" />
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna
						aliqua.</p>
				</div>
				<div class="col-md-4 about-grid">
					<h3>Neque porro quisquam est, qui dolorem ipsum</h3>
					<img src="images/8.jpg" alt=" " class="img-responsive" />
						<p class="commodo">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna
						aliqua.</p>
				</div>
				<div class="col-md-4 about-grid">
					<h3>Excepteur sint occaecat cupidatat non proident</h3>
					<img src="images/9.jpg" alt=" " class="img-responsive" />
						<p class="sint">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna
						aliqua.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- why-choose -->
	<div class="why-choose">
		<div class="container">
			<h3>Excepteur sint occaecat</h3>
			<div class="why-choose-grids">
				<div class="col-md-6 why-choose-grid">
					<div class="why-choose-grid-hover">
						<p>dolore eu fugiat pariatur</p>
					</div>
					<div class="why-choose-grds">
						<div class="col-xs-5 why-choose-grd">
							<img src="images/10.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-xs-7 why-choose-grd-right">
							<h4>aliquip ex ea commodo occaecat proident</h4>
							<p>Excepteur sint occaecat 
								cupidatat non proident.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 why-choose-grid">
					<div class="why-choose-grid-hover">
						<p>dolore eu fugiat pariatur</p>
					</div>
					<div class="why-choose-grds">
						<div class="col-xs-5 why-choose-grd">
							<img src="images/11.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-xs-7 why-choose-grd-right">
							<h4>aliquip ex ea commodo occaecat proident</h4>
							<p>Excepteur sint occaecat 
								cupidatat non proident.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="why-choose-grids">
				<div class="col-md-6 why-choose-grid">
					<div class="why-choose-grid-hover">
						<p>dolore eu fugiat pariatur</p>
					</div>
					<div class="why-choose-grds">
						<div class="col-xs-5 why-choose-grd">
							<img src="images/12.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-xs-7 why-choose-grd-right">
							<h4>aliquip ex ea commodo occaecat proident</h4>
							<p>Excepteur sint occaecat 
								cupidatat non proident.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 why-choose-grid">
					<div class="why-choose-grid-hover">
						<p>dolore eu fugiat pariatur</p>
					</div>
					<div class="why-choose-grds">
						<div class="col-xs-5 why-choose-grd">
							<img src="images/13.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-xs-7 why-choose-grd-right">
							<h4>aliquip ex ea commodo occaecat proident</h4>
							<p>Excepteur sint occaecat 
								cupidatat non proident.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //why-choose -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3>Testimonials</h3>
			<p class="aut">Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
				accusantium doloremque laudantium. repudiandae sint et molestiae non recusandae.
				Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
				voluptatibus maiores alias</p>
	<!-- Slider-starts-Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: true,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
				<ul class="rslides" id="slider3">
					<li>
						<div class="testimonials-grids">
							<div class="testimonials-grid-left">
								<img src="images/4.png" alt=" " />
							</div>
							<div class="testimonials-grid-right">
								<p>Micheal James<span> Chef</span></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<div class="testimonials-grids">
							<div class="testimonials-grid-left">
								<img src="images/5.png" alt=" " />
							</div>
							<div class="testimonials-grid-right">
								<p>Laura williums<span> Chef</span></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<div class="testimonials-grids">
							<div class="testimonials-grid-left">
								<img src="images/5.png" alt=" " />
							</div>
							<div class="testimonials-grid-right">
								<p>Fred Brown<span> Chef</span></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
@endsection

