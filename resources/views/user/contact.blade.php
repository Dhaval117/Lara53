@extends('layouts.master')

@section('title')
Contact Us
@endsection

@section('content')
<div class="contact">
		<div class="container">
			<div class="col-md-5 contact-left">
				<h3>Address</h3>
				<p>est eligendi optio cumque nihil impedit quo minus id quod maxime
					<span>26 56D Rescue,US</span></p>
				<ul>
					<li>Free Phone :+1 078 4589 2456</li>
					<li>Telephone :+1 078 4589 2456</li>
					<li>Fax :+1 078 4589 2456</li>
					<li><a href="mailto:info@example.com">info@example.com</a></li>
				</ul>
			</div>
			<div class="col-md-7 contact-left">
				<h3>Contact Form</h3>
				<form>
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
					<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Submit" >
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="contact-bottom">
		<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d45208.65286612783!2d1.2133568000000001!3d44.91233665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scakes+shop+in+Sarlat-la-Can%C3%A9da%2C+France!5e0!3m2!1sen!2sin!4v1441434100434" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
@endsection