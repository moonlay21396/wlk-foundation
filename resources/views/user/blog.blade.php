@extends('user.site_user.master_user')
@section('css')
    <style>
        h1,h2,h3,h4,h5,h6,p{
            font-family:Pyidaungsu,Zawgyi-One;
        }
    </style>
@endsection
@section('title')
   Blog | WLK Foundation
@endsection
@section('content')

		<section class="section normalhead lb" style="background: linear-gradient(45deg, #3ac5c8 1%, #0b509e 100%);">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>Blog & News</h2>
						<!-- <p class="lead">We publish latest news, activities about foundation for our client.</p> -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section">
			<div class="container">
				<div class="row">
						@foreach($blog as $blog_datas)
						<div class="col-md-4" style="margin-bottom: 30px;">
							<div class="text-center img-thumbnail">
								<a href="{{url('/blogsingle/'.$blog_datas->id)}}" title=""><img src="{{asset('/upload/blog/'.$blog_datas->photo)}}" alt="" style="width:330px;height:200px;" class="img-responsive img-thumbnail"></a>
								<span class="label label-success"> {{$blog_datas['created_at']->format('M d-Y')}}</span>
							    <div class="row">
									<div class="col-md-12">
										<div style="height:150px;">
											<h3>
												<div class="myanmar">
													<a href="{{url('/blogsingle/'.$blog_datas->id)}}">{{str_limit($blog_datas['title'],30)}}</a>
												</div>
											</h3>
											<div class="myanmar">
												{{str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",strip_tags($blog_datas['detail'])),150)}}
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
									<a href="{{url('/blogsingle/'.$blog_datas->id)}}" class="pb-2 btn btn-primary">Read More</a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
				</div>
				<div class="row">
					<div class="col-md-12" style="margin-bottom:-10%;">
						<div style="text-align:center">
							{{$blog->render()}}
						</div>
					</div>
				</div>
			</div>
		</section><!-- end section -->
@endsection
