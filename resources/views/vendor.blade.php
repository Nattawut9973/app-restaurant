@extends('layouts.app')
@section('contents')
<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>{{ $keyword }}</h2>
					<p>Your search result datails.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<div class="blog-text">
							<h3><a href="#">Nearby place list title.</a></h3>
							<p>nearby place details</p>
							<ul class="stuff">

								<li><a href="#">See More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<div class="blog-text">
							<h3><a href="#">Nearby place list title.</a></h3>
							<p>nearby place details</p>
							<ul class="stuff">
								<li><a href="#">See More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<div class="blog-text">

							<h3><a href="#">Nearby place list title.</a></h3>
							<p>nearby place details</p>
							<ul class="stuff">
								<li><a href="#">See More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
