<footer class="footer primary-footer">
            <div class="container">
                <div class="row">
					<div class="col-md-12">
						 <div class="col-md-4 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Quick Link</h4>
                    		<ul>
                    			<li><a href="{{url('/')}}">Home</a></li>
                    			<li><a href="{{url('/about')}}">About</a></li>
                    			<li><a href="{{url('/blog')}}">News</a></li>
								<li><a href="{{url('/contact')}}">Contact</a></li>
								<li><a href="{{url('/donate')}}">Donate</a></li>
                    		</ul>
                    	</div><!-- end widget -->
                    </div><!-- end col -->

                    {{-- <div class="col-md-2 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Services</h4>
                    		<ul>
                    			<li><a href="#">Design & Dev</a></li>
                    			<li><a href="#">ASP.NET</a></li>
                    			<li><a href="#">PHP Development</a></li>
                    			<li><a href="#">Mobile App</a></li>
                    			<li><a href="#">Oracle</a></li>
                    		</ul>
                    	</div><!-- end widget -->
                    </div><!-- end col --> --}}

                    {{-- <div class="col-md-2 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Download</h4>
                    		<ul>
                    			<li><a href="#">MAC/OSX</a></li>
                    			<li><a href="#">Android</a></li>
                    			<li><a href="#">Windows</a></li>
                    			<li><a href="#">Google Play</a></li>
                    			<li><a href="#">Amazon</a></li>
                    		</ul>
                    	</div><!-- end widget -->
                    </div><!-- end col --> --}}

                    <div class="col-md-4 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Be Social</h4>
                    		<ul>
								{{-- <li><a href="https://www.facebook.com/wlkfoundation/">Facebook</a></li> --}}
								<li><a href="https://www.facebook.com/wlkfoundation/" target="_blank"><img src="{{asset('upload/facebook (1).png')}}" width="30px" height="30px" alt=""></a></li>
                    			<li><a href="https://twitter.com/" target="_blank"><img src="{{asset('upload/twitter.png')}}" width="30px" height="30px" alt=""></a></li>
                    			{{-- <li><a href="#"><img src="{{asset('upload/google-plus.png')}}" width="30px" height="30px" alt=""></a></li>								 --}}
                    			{{-- <li><a href="#">Linkedin</a></li> --}}
                    		</ul>
                    	</div><!-- end widget -->
					</div><!-- end col -->

					 <div class="col-md-4 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Contact</h4>
                    		<ul>
                    			<li><i class="fa fa-whatsapp" style="line-height: 20px;">&nbsp;&nbsp;{{$office->phone}}</i></li>
                    			<li><i class="fa fa-envelope" style="line-height: 20px;">&nbsp;&nbsp;{{$office->email}}</i></li>
                    			<li><i class="fa fa-fax" style="line-height: 20px;">&nbsp;&nbsp;{{$office->address}}</i></li>
                    		</ul>
                    	</div><!-- end widget -->
					</div><!-- end col -->
				</div>
					
                </div><!-- end row -->
           	</div><!-- end container -->
		</footer><!-- end primary-footer -->

		<footer class="footer secondary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>Copyright@ 2019 All rights reserved.Designed by <a href="https://greenhackersinstitute.com/" style="color:green" target="_blank">GREEN HACKERS</a>.</p>
                    </div>

                    {{-- <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="list-inline">
                            <li>Designed: <a href="https://html.design">HTML Design</a></li>
                        </ul>
                    </div><!-- end col --> --}}
                </div><!-- end row -->
            </div><!-- end container -->
		</footer><!-- end second footer -->