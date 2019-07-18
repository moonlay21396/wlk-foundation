@extends('user.site_user.master_user')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@section('title')
   Home | WLK Foundation
@endsection
<style>
	.case-box:hover .magnifier {
    opacity: 0.8;
    filter: alpha(opacity=80);
    /* For IE8 and earlier */
    left: 0;
}
@media(max-width:991px){
    .media_query{
        margin-top:-100px!important;
    }
    .mt_50{
        margin-top: 20px!important;
    }
    .mb_100{
        margin-bottom: 10px!important;
    }
    .mt_300{
        margin-top: 100px!important;
        padding-bottom: -100px !important;
        margin-bottom: -10px !important;
    }
    .pb_100{
        padding-bottom: 50px!important;
    }
    .p_500{
        padding-bottom: 10px!important;
    }
}
@media(min-width: 991px){
    .mt_300{
        margin-top: 200px;
        margin-bottom: 100px;
    }
}
</style>
@section('content')
<section>
	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <!-- Indicators -->
		<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
		<div class="item active">
			<img src="upload/wlk9.jpg" alt="Los Angeles" style="width:100%;">
		</div>

		<div class="item">
			<img src="upload/wlk.jpg" alt="Chicago" style="width:100%;">
		</div>
		
		<div class="item">
			<img src="upload/wailukyaw.jpg" alt="New york" style="width:100%;">
		</div>
		</div>

    <!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
		</a>
  </div>
</section>

		{{-- <section class="section bt">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12">
						<div class="media-box" style="margin-top:-100px;">
							<img src="upload/wlkow.jpg" alt="" style="width:100%;" class="img-responsive">
						</div><!-- end media box -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div>
		</section> --}}

		<section class="section nopad section bt" style="margin-top:0px;">
			<div class="container-fluid">
				{{-- <div class="row text-center">
					<div class="col-md-12">
						<div class="media-box" style="margin-top:-100px;">
							<img src="upload/wlkow.jpg" alt="" style="width:100%;" class="img-responsive">
						</div><!-- end media box -->
					</div><!-- end col -->
				</div><!-- end row --> --}}

				<div class="row text-center">
					<div class="col-md-3 col-sm-6 nopad first">
						<div class="home-service c1">
							<i class="flaticon-competition"></i>
							<p>Owners: Promote your site on Google searches</p>
						</div><!-- end home-service -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6 nopad">
						<div class="home-service c2">
							<i class="flaticon-chat"></i>
							<p>Publishers: Make money with blog articles</p>
						</div><!-- end home-service -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6 nopad">
						<div class="home-service c3">
							<i class="flaticon-domain"></i>
							<p>Analyzers: Benefits from SEO analysis tools</p>
						</div><!-- end home-service -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6 nopad last">
						<div class="home-service c4">
							<i class="flaticon-medal"></i>
							<p>Beginners: Learn more about search engines</p>
						</div><!-- end home-service -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section overfree p_500">
			<div class="icon-center"><i class="fa fa-anchor" style="line-height:75px;"></i></div>
			<div class="container">
				{{-- <div class="section-title text-center">
					<small>Welcome to the best SEO service</small>
					<h3>Top Reasons to Choose Us</h3>
					<hr>
					<p class="lead"> Morbi quis porta dolor. Nullam feugiat sapien et libero elementum faucibus. Praesent sagittis venenatis ipsum, eget <br>tristique odio pharetra quis. Sed maximus a eros quis ornare.</p>
				</div><!-- end section-title --> --}}

				<div class="row service-list text-center">

					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="service-wrapper wow fadeIn">	
							<i class="fa fa-eye"></i>
							<div class="service-details">
								<h4><a href="service-02.html" title="">Our Vision</a></h4>
								<p>{{$office->vision}}</p>
								{{-- <a href="#" class="readmore">View Details</a> --}}
							</div>
						</div><!-- end service-wrapper -->
					</div><!-- end col -->

					<div class="col-md-6 col-sm-12 col-xs-12 last">
						<div class="service-wrapper wow fadeIn">	
							<i class="fa fa-bullseye"></i>
							<div class="service-details">
								<h4><a href="service-02.html" title="">Our Mission</a></h4>
								<p>{{$office->mission}}</p>
								{{-- <a href="#" class="readmore">View Details</a> --}}
							</div>
						</div><!-- end service-wrapper -->
					</div><!-- end col -->
				</div><!-- end row -->

				{{-- <hr class="invis2"> --}}

				{{-- <div class="row">
					<div class="col-md-4">
                        <div class="milestone-counter c1">
						<img src="{{url('images/icon_07.png')}}" alt="" class="alignleft">
                            <h3 class="stat-count">2901</h3>
                            <p>Happy Customers</p>
                        </div>
                    </div>

					<div class="col-md-4">
                        <div class="milestone-counter c2">
                            <img src="{{url('images/icon_08.png')}}" alt="" class="alignleft">
                            <h3 class="stat-count">304</h3>
                            <p>Online Strategy</p>
                        </div>
                    </div>

					<div class="col-md-4">
                        <div class="milestone-counter c3">
                            <img src="{{url('images/icon_09.png')}}" alt="" class="alignleft">
                            <h3 class="stat-count">890</h3>
                            <p>Great Results</p>
                        </div>
                    </div>
                </div> --}}
			</div><!-- end container -->
		</section><!-- end section -->
		
		@foreach($blogs_one as $blogOne)
		<div class="col-md-12 hidden-lg hidden-md">
	        <img src="{{asset('upload/blog/'.$blogOne->photo)}}" alt="" class="img-responsive">
		</div>
		<section class="section lb nopad spotlight style1" style="margin-top:-60px;">
		    
		    <div class="image col-md-4 hidden-sm hidden-xs">
		        <img src="{{asset('upload/blog/'.$blogOne->photo)}}" alt="" />
			</div>
			
		    <div class="content col-sm-12 media_query">
		        <h3 style="line-height:23px;" class="myanmar">{{$blogOne['title']}}</h3>
				<div class="myanmar">{{str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",strip_tags($blogOne['detail'])),200)}}</div>
				<a href="{{url('/blogsingle/'.$blogOne->id)}}" class="btn btn-transparent">Read More</a>				
		    </div>
		</section>
		@endforeach

		<section class="section bt pb_100">
			<div class="container">
				<div class="section-title text-center" style="margin-top:-60px!important;">
				<h1>Latest Blog</h1>
				</div><!-- end section-title -->

				<div class="row">
					<div class="content col-md-12">
						{{-- <h1>Blogs</h1> --}}
						@foreach($blogs_three as $blog_datas)
						<div class="col-md-4" style="margin-bottom: 30px;">
							<div class="text-center img-thumbnail">
								<a href="{{url('/blogsingle/'.$blog_datas->id)}}" title=""><img src="{{asset('/upload/blog/'.$blog_datas->photo)}}" alt="" style="width:330px;height:200px;" class="img-responsive img-thumbnail mb_100"></a>
								<span class="label label-success" > {{$blog_datas['created_at']->format('M d-Y')}}</span>
							    <div class="row">
									<div class="col-md-12">
										<div style="height:150px;">
											<h3>
												<div class="myanmar">
													<a href="{{url('/blogsingle/'.$blogOne->id)}}">{{str_limit($blog_datas['title'],30)}}</a>
												</div>
											</h3>
											<div class="myanmar">
												{{str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",strip_tags($blog_datas['detail'])),150)}}
											</div>
										</div>
									</div>
								</div>
								
								<div class="row mt_50">
									<div class="col-md-12">
									<a href="{{url('/blogsingle/'.$blog_datas->id)}}" class="pb-2 btn btn-primary">Read More</a>
									</div>
								</div>
								<br>
							</div>
						</div>
						@endforeach
					
					</div><!-- end content -->
					{{-- <div align="center"> --}}
						<div class="container">
							<div class="row">
								<div class="col-md-12 text-center">
									<a href="{{url('/blog')}}"><button class="btn btn-primary btn-lg">See More</button></a>
								</div>
							</div>
						</div>
					{{-- </div> --}}
					
				</div>
				
		    </div>
		</section>

		{{-- <section class="section lb nopad spotlight style1">
		    <div class="content">
		        <h2>Protect place with detailed analysis</h2>
		        <p>Donec congue odio in mi finibus dignissim. Etiam faucibus pharetra euismod. Pellentesque malesuada et ligula et scelerisque. Pellentesque aliquet magna ut dolor consequat, luctus tincidunt metus consequat. Nam eu mattis ante, nec facilisis purus. Praesent ac venenatis erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tincidunt finibus.</p>
		         <a href="#" class="btn btn-transparent">Read More</a>
		    </div>
		    <div class="image col-md-4 hidden-sm hidden-xs">
		        <img src="upload/blog_alt_01.jpg" alt="" />
		    </div>
		</section> --}}

		<section class="mt_300">
			{{-- <div class="icon-center"><i class="fa fa-bar-chart"></i></div> --}}
	        <div class="container" style="margin-top:-10%;">
				<div class="section-title text-center">
					{{-- <small>Please select your correct price in below</small> --}}
					<h3>Donation List</h3>
				</div><!-- end section-title -->
				<div class="center-pricing">
				  	{{-- <ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Montlhy</a></li>
					    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Yearly</a></li>
				  	</ul> --}}
			  		<div class="tab-content" style="margin-bottom:-20%;">
			    		<div role="tabpanel" class="tab-pane active" id="home">
							<div class="table-responsive">
                                <table class="table table-hover" id="datatable" style="">
                                    <thead class="bg-primary text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                       Country
                                    </th>
                                    <th>Amount</th>
									</thead>
									
                                    <tbody>
									@foreach($donates as $index=>$donate_data)
									<tr>
										<td style="height:50px;">{{$index+1}}</td>
										<td style="height:50px;">{{$donate_data->name}}</td>
										<td style="height:50px;">{{$donate_data->country}}</td>
										<td style="height:50px;">${{$donate_data->amount}}</td>
									</tr>
									@endforeach
									</tbody>
									
								</table>
                            </div>
														
							{{-- <div class="row big-pricing">
					
								<div class="col-md-2 col-sm-6 col-xs-12 colon1 colon4 nopad text-center">
									<div class="pricing-header firstch c4">
										<h4>Amount</h4>
									</div><!-- end pricing-header -->
									<ul>
										<li></li>
									</ul>									
								</div><!-- end col -->
							</div><!-- end big-pricing -->  --}}					
						</div><!-- end tab-pane -->
				  	</div><!-- end tab-content -->
				</div><!-- end center-pricing -->
                <hr class="invis">
			</div>
		</section>

		{{-- <section class="section ldp">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->
					<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_02.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->
					<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_03.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->	
					<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_04.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->
					<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_05.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->
					<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_06.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->	
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section --> --}}
@endsection
@section('js')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
        $('document').ready(function(){
            var t = $('#datatable').DataTable({
                "ordering": false,
                //"paging": false,
                "bInfo" : false,
                "bLengthChange": false
            });
		});
</script>
@endsection

