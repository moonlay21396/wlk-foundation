@extends('user.site_user.master_user')
@section('title')
   Blog | WLK Foundation
@endsection
@section('css')
    <style>
        h1,h2,h3,h4,h5,h6,p{
            font-family:Pyidaungsu,Zawgyi-One;
        }
    </style>
@endsection
@section('content')
    {{-- <section class="section normalhead lb">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>Blog & News</h2>
						<p class="lead">WordPress » How to Make Professional SEO Links</p>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
        </section><!-- end section --> --}}
        
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
                    {{-- <div class="sidebar col-md-4 col-sm-4">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Subscribe</h4>
                    		<div class="newsletter-widget">
                    			<p>You can opt out of our newsletters at any time. See our privacy policy.</p>
		                        <form class="form-inline" role="search">
		                            <div class="form-1">
		                              	<input type="text" class="form-control" placeholder="Enter email here..">
										<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i></button>
		                            </div>
								</form>
                    		</div><!-- end newsletter -->
                    	</div><!-- end widget -->

                    	<div class="widget clearfix">
                    		<h4 class="widget-title">ADVERTISING</h4>
                    		<div class="category-widget">
                    			<img src="images/banner.gif" alt="" class="img-responsive img-thumbnail">
                    		</div><!-- end category -->
                    	</div><!-- end widget -->

                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Blog Categories</h4>
                    		<div class="category-widget">
                    			<ul>
                    				<li><a href="#">SEO Tips and Tricks</a></li>
                    				<li><a href="#">e-Commerce SEO</a></li>
                    				<li><a href="#">SEO Tools and Modules</a></li>
                    				<li><a href="#">Google Updates for Algoritms</a></li>
                    				<li><a href="#">SEO for CMS Systems</a></li>
                    			</ul>
                    		</div><!-- end category -->
                    	</div><!-- end widget -->
                    </div><!-- end col --> --}}
                    
					<div class="content col-md-12 blog-alt">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="blog-box clearfix">
                                    <div class="media-box">
                                        <img src="{{$blog_obj['photo']}}" alt="" class="img-responsive img-thumbnail" style="width:150%;height:30%;">
                                    </div><!-- end media-box -->
                                    
                                </div><!-- end blogbox -->
                            </div>
                            <div class="col-md-11 col-md-offset-1">
                                <div class="blog-single">
                                        <div class="blog-meta">
                                            <ul class="list-inline">
                                                <li><a href="#"><i class="fa fa-calendar-o"></i>{{$blog_obj['created_at']->format('M d-Y')}}</a></li>
                                            </ul>
                                        </div><!-- end meta -->
                                        <h3 class="post-title"><div class="myanmar">{{$blog_obj['title']}}</div></h3>
                                        <div class="myanmar">{!!$blog_obj['detail']!!}
                                        </div>
                                </div><!-- end blog-desc -->
                            </div>
                        </div>
						

                        {{-- <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <div class="blog-box clearfix">
                            <div class="custom-title">
                                <h4>5 Comments</h4>
                                <hr>
                            </div><!-- end -->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-info">
                                        <div class="panel-body comments">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <div class="comment">
                                                        <a href="#" class="pull-left">
                                                            <img src="upload/team_01.jpeg" alt="" class="img-circle">
                                                        </a>
                                                        <div class="media-body">
                                                            <strong class="text-success">Jane Doe</strong>
                                                            <span class="text-muted">
															<small class="text-muted">6 days ago</small></span>
                                                            <p>Sed condimentum, lectus id mollis porttitor, est justo ornare libero, a pretium sem lorem quis ante. Aliquam eros metus, tincidunt eget hendrerit quis, faucibus vitae magna. Sed gravida aliquam lobortis. Nulla facilisi. Quisque at ante a enim bibendum placerat. Maecenas ante mauris, ultrices ac enim nec, auctor sagittis arcu. <a href="#">#some link </a>.
                                                            </p>
                                                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <ul class="media-list">
                                                        <li class="media">
                                                            <div class="comment">
                                                                <a href="#" class="pull-left">
                                                                    <img src="upload/team_02.jpeg" alt="" class="img-circle">
                                                                </a>
                                                                <div class="media-body">
                                                                    <strong class="text-success">MrAwesome</strong>
                                                                    <span class="text-muted">
																	<small class="text-muted">2 days ago</small></span>
                                                                    <p>Nunc aliquam dui dignissim magna finibus cursus. Donec eget hendrerit odio. Nam dapibus mauris massa, et feugiat arcu sagittis sed. Donec condimentum massa a justo vestibulum posuere. Praesent id lorem ut lectus placerat porta lobortis a dolor. In sed hendrerit dolor, quis congue erat. </p>
                                                                    <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                        <li class="media">
                                                            <div class="comment">
                                                                <a href="#" class="pull-left">
                                                                    <img src="upload/team_02.jpeg" alt="" class="img-circle">
                                                                </a>
                                                                <div class="media-body">
                                                                    <strong class="text-success">Miss Lucia</strong>
                                                                    <span class="text-muted">
																	<small class="text-muted">15 minutes ago</small></span>
                                                                    <p>Morbi vitae porta tortor. Integer varius molestie turpis, eget pellentesque odio pretium eget. Sed facilisis quam purus, vitae facilisis lectus sollicitudin in. Donec a elit ut velit aliquet varius. Curabitur in pulvinar ligula. Sed urna purus, iaculis sed justo vitae, facilisis faucibus massa.</p>
                                                                    <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="media">
                                                    <div class="comment">
                                                        <a href="#" class="pull-left">
                                                            <img src="upload/team_03.jpeg" alt="" class="img-circle">
                                                        </a>
                                                        <div class="media-body">
                                                            <strong class="text-success">Jana Cova</strong>
                                                            <span class="text-muted">
															<small class="text-muted">12 days ago</small></span>
                                                            <p> Nulla facilisi. Quisque at ante a enim bibendum placerat. Maecenas ante mauris, ultrices ac enim nec, auctor sagittis arcu. Vestibulum congue blandit ex, eget suscipit risus gravida non. Proin bibendum convallis felis, a pulvinar massa rutrum et. Morbi vel feugiat sem.</p>
                                                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="comment">
                                                        <a href="#" class="pull-left">
                                                            <img src="upload/team_02.jpeg" alt="" class="img-circle">
                                                        </a>
                                                        <div class="media-body">
                                                            <strong class="text-success">Johnatan Smarty</strong>
                                                            <span class="text-muted">
															<small class="text-muted">1 month ago</small></span>
                                                            <p> Aliquam et congue mi. Donec odio nibh, eleifend a molestie rutrum, mattis et leo. Aliquam malesuada dictum libero et tristique. Duis tincidunt maximus massa in luctus. </p>
                                                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end postpager -->

                        
                        
                            </div>
                        </div>
                        <div class="blog-box clearfix">
                            <div class="custom-title">
                                <h4>Leave a Comment</h4>
                            </div><!-- end about -->

                            <div class="contact_form comment-form">
                                <form class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <label>Name <span class="required">*</span></label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label>Website</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <label>Comment <span class="required">*</span></label>
                                        <textarea class="form-control" placeholder=""></textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <input type="submit" value="Send Comment" class="btn btn-primary" />
                                    </div>
                                </form>
                            </div><!-- end commentform -->
                        </div><!-- end postpager --> --}}
					</div><!-- end content -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

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