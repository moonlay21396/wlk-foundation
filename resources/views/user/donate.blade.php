@extends('user.site_user.master_user')
@section('title')
  	Donate | WLK Foundation
@endsection
<style>
	.owl-prev *,
        .owl-next *{
            margin-top: 7px;
        }
        .form-control{
            border:1px solid #777!important;
            box-shadow: 0px 0px 5px #000!important;
        }
        i.fa-circle-plus{
            color:#0b8e04;
        }
</style>
@section('content')
			<section class="section transheader parallax" data-stellar-background-ratio="0.5" style="background-image:url('upload/wlk50.jpg'); background-size:cover">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						{{-- <h2>Blog & News</h2>
						<p class="lead">We publish latest Google news, SEO tips and tricks for our dear customers.</p> --}}
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->


   		<section class="section bt">
			<div class="container">
				{{-- <div class="row text-center">
					<div class="col-md-12">
						<div class="media-box" style="margin-top:-100px;">
							<img src="upload/wlkow.jpg" alt="" style="width:100%;" class="img-responsive">
						</div><!-- end media box -->
					</div><!-- end col -->
				</div><!-- end row --> --}}

				<hr class="invis2">

				<div class="row" style="margin-top:-120px;">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="text-box-2">
							<h3>Donation Form</h3>
                <form action="{{url('/insert_donate')}}" role="form" class="contactform" method="post">
                            {{csrf_field()}}
						    <div class="form-group">
						        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
						    </div>
						    {{-- <div class="form-group">
						        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                            </div> --}}
                <div class="form-group">
									<select name="country" class="form-control" title="Country">
											<option>Country List</option>
											<option value="Afghanistan"> Afghanistan </option>
											<option value="Albania"> Albania </option>
											<option value="Algeria"> Algeria </option>
											<option value="American Samoa"> American Samoa </option>
											<option value="Andorra"> Andorra </option>
											<option value="Angola"> Angola </option>
											<option value="Anguilla"> Anguilla </option>
											<option value="Antigua and Barbuda"> Antigua and Barbuda </option>
											<option value="Argentina"> Argentina </option>
											<option value="Armenia"> Armenia </option>
											<option value="Aruba"> Aruba </option>
											<option value="Australia"> Australia </option>
											<option value="Austria"> Austria </option>
											<option value="Azerbaijan"> Azerbaijan </option>
											<option value="The Bahamas"> The Bahamas </option>
											<option value="Bahrain"> Bahrain </option>
											<option value="Bangladesh"> Bangladesh </option>
											<option value="Barbados"> Barbados </option>
											<option value="Belarus"> Belarus </option>
											<option value="Belgium"> Belgium </option>
											<option value="Belize"> Belize </option>
											<option value="Benin"> Benin </option>
											<option value="Bermuda"> Bermuda </option>
											<option value="Bhutan"> Bhutan </option>
											<option value="Bolivia"> Bolivia </option>
											<option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
											<option value="Botswana"> Botswana </option>
											<option value="Brazil"> Brazil </option>
											<option value="Brunei"> Brunei </option>
											<option value="Bulgaria"> Bulgaria </option>
											<option value="Burkina Faso"> Burkina Faso </option>
											<option value="Burundi"> Burundi </option>
											<option value="Cambodia"> Cambodia </option>
											<option value="Cameroon"> Cameroon </option>
											<option value="Canada"> Canada </option>
											<option value="Cape Verde"> Cape Verde </option>
											<option value="Cayman Islands"> Cayman Islands </option>
											<option value="Central African Republic"> Central African Republic </option>
											<option value="Chad"> Chad </option>
											<option value="Chile"> Chile </option>
											<option value="People &#x27;s Republic of China"> People &#x27;s Republic of China </option>
											<option value="Republic of China"> Republic of China </option>
											<option value="Christmas Island"> Christmas Island </option>
											<option value="Cocos(Keeling) Islands"> Cocos(Keeling) Islands </option>
											<option value="Colombia"> Colombia </option>
											<option value="Comoros"> Comoros </option>
											<option value="Congo"> Congo </option>
											<option value="Cook Islands"> Cook Islands </option>
											<option value="Costa Rica"> Costa Rica </option>
											<option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
											<option value="Croatia"> Croatia </option>
											<option value="Cuba"> Cuba </option>
											<option value="Cyprus"> Cyprus </option>
											<option value="Czech Republic"> Czech Republic </option>
											<option value="Denmark"> Denmark </option>
											<option value="Djibouti"> Djibouti </option>
											<option value="Dominica"> Dominica </option>
											<option value="Dominican Republic"> Dominican Republic </option>
											<option value="Ecuador"> Ecuador </option>
											<option value="Egypt"> Egypt </option>
											<option value="El Salvador"> El Salvador </option>
											<option value="Equatorial Guinea"> Equatorial Guinea </option>
											<option value="Eritrea"> Eritrea </option>
											<option value="Estonia"> Estonia </option>
											<option value="Ethiopia"> Ethiopia </option>
											<option value="Falkland Islands"> Falkland Islands </option>
											<option value="Faroe Islands"> Faroe Islands </option>
											<option value="Fiji"> Fiji </option>
											<option value="Finland"> Finland </option>
											<option value="France"> France </option>
											<option value="French Polynesia"> French Polynesia </option>
											<option value="Gabon"> Gabon </option>
											<option value="The Gambia"> The Gambia </option>
											<option value="Georgia"> Georgia </option>
											<option value="Germany"> Germany </option>
											<option value="Ghana"> Ghana </option>
											<option value="Gibraltar"> Gibraltar </option>
											<option value="Greece"> Greece </option>
											<option value="Greenland"> Greenland </option>
											<option value="Grenada"> Grenada </option>
											<option value="Guadeloupe"> Guadeloupe </option>
											<option value="Guam"> Guam </option>
											<option value="Guatemala"> Guatemala </option>
											<option value="Guernsey"> Guernsey </option>
											<option value="Guinea"> Guinea </option>
											<option value="Guinea - Bissau"> Guinea - Bissau </option>
											<option value="Guyana"> Guyana </option>
											<option value="Haiti"> Haiti </option>
											<option value="Honduras"> Honduras </option>
											<option value="Hong Kong"> Hong Kong </option>
											<option value="Hungary"> Hungary </option>
											<option value="Iceland"> Iceland </option>
											<option value="India"> India </option>
											<option value="Indonesia"> Indonesia </option>
											<option value="Iran"> Iran </option>
											<option value="Iraq"> Iraq </option>
											<option value="Ireland"> Ireland </option>
											<option value="Israel"> Israel </option>
											<option value="Italy"> Italy </option>
											<option value="Jamaica"> Jamaica </option>
											<option value="Japan"> Japan </option>
											<option value="Jersey"> Jersey </option>
											<option value="Jordan"> Jordan </option>
											<option value="Kazakhstan"> Kazakhstan </option>
											<option value="Kenya"> Kenya </option>
											<option value="Kiribati"> Kiribati </option>
											<option value="North Korea"> North Korea </option>
											<option value="South Korea"> South Korea </option>
											<option value="Kosovo"> Kosovo </option>
											<option value="Kuwait"> Kuwait </option>
											<option value="Kyrgyzstan"> Kyrgyzstan </option>
											<option value="Laos"> Laos </option>
											<option value="Latvia"> Latvia </option>
											<option value="Lebanon"> Lebanon </option>
											<option value="Lesotho"> Lesotho </option>
											<option value="Liberia"> Liberia </option>
											<option value="Libya"> Libya </option>
											<option value="Liechtenstein"> Liechtenstein </option>
											<option value="Lithuania"> Lithuania </option>
											<option value="Luxembourg"> Luxembourg </option>
											<option value="Macau"> Macau </option>
											<option value="Macedonia"> Macedonia </option>
											<option value="Madagascar"> Madagascar </option>
											<option value="Malawi"> Malawi </option>
											<option value="Malaysia"> Malaysia </option>
											<option value="Maldives"> Maldives </option>
											<option value="Mali"> Mali </option>
											<option value="Malta"> Malta </option>
											<option value="Marshall Islands"> Marshall Islands </option>
											<option value="Martinique"> Martinique </option>
											<option value="Mauritania"> Mauritania </option>
											<option value="Mauritius"> Mauritius </option>
											<option value="Mayotte"> Mayotte </option>
											<option value="Mexico"> Mexico </option>
											<option value="Micronesia"> Micronesia </option>
											<option value="Moldova"> Moldova </option>
											<option value="Monaco"> Monaco </option>
											<option value="Mongolia"> Mongolia </option>
											<option value="Montenegro"> Montenegro </option>
											<option value="Montserrat"> Montserrat </option>
											<option value="Morocco"> Morocco </option>
											<option value="Mozambique"> Mozambique </option>
											<option value="Myanmar"> Myanmar </option>
											<option value="Nagorno - Karabakh"> Nagorno - Karabakh </option>
											<option value="Namibia"> Namibia </option>
											<option value="Nauru"> Nauru </option>
											<option value="Nepal"> Nepal </option>
											<option value="Netherlands"> Netherlands </option>
											<option value="Netherlands Antilles"> Netherlands Antilles </option>
											<option value="New Caledonia"> New Caledonia </option>
											<option value="New Zealand"> New Zealand </option>
											<option value="Nicaragua"> Nicaragua </option>
											<option value="Niger"> Niger </option>
											<option value="Nigeria"> Nigeria </option>
											<option value="Niue"> Niue </option>
											<option value="Norfolk Island"> Norfolk Island </option>
											<option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
											<option value="Northern Mariana"> Northern Mariana </option>
											<option value="Norway"> Norway </option>
											<option value="Oman"> Oman </option>
											<option value="Pakistan"> Pakistan </option>
											<option value="Palau"> Palau </option>
											<option value="Palestine"> Palestine </option>
											<option value="Panama"> Panama </option>
											<option value="Papua New Guinea"> Papua New Guinea </option>
											<option value="Paraguay"> Paraguay </option>
											<option value="Peru"> Peru </option>
											<option value="Philippines"> Philippines </option>
											<option value="Pitcairn Islands"> Pitcairn Islands </option>
											<option value="Poland"> Poland </option>
											<option value="Portugal"> Portugal </option>
											<option value="Puerto Rico"> Puerto Rico </option>
											<option value="Qatar"> Qatar </option>
											<option value="Romania"> Romania </option>
											<option value="Russia"> Russia </option>
											<option value="Rwanda"> Rwanda </option>
											<option value="Saint Barthelemy"> Saint Barthelemy </option>
											<option value="Saint Helena"> Saint Helena </option>
											<option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
											<option value="Saint Lucia"> Saint Lucia </option>
											<option value="Saint Martin"> Saint Martin </option>
											<option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
											<option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
											<option value="Samoa"> Samoa </option>
											<option value="San Marino"> San Marino </option>
											<option value="Sao Tome and Principe"> Sao Tome and Principe </option>
											<option value="Saudi Arabia"> Saudi Arabia </option>
											<option value="Senegal"> Senegal </option>
											<option value="Serbia"> Serbia </option>
											<option value="Seychelles"> Seychelles </option>
											<option value="Sierra Leone"> Sierra Leone </option>
											<option value="Singapore"> Singapore </option>
											<option value="Slovakia"> Slovakia </option>
											<option value="Slovenia"> Slovenia </option>
											<option value="Solomon Islands"> Solomon Islands </option>
											<option value="Somalia"> Somalia </option>
											<option value="Somaliland"> Somaliland </option>
											<option value="South Africa"> South Africa </option>
											<option value="South Ossetia"> South Ossetia </option>
											<option value="Spain"> Spain </option>
											<option value="Sri Lanka"> Sri Lanka </option>
											<option value="Sudan"> Sudan </option>
											<option value="Suriname"> Suriname </option>
											<option value="Svalbard"> Svalbard </option>
											<option value="Swaziland"> Swaziland </option>
											<option value="Sweden"> Sweden </option>
											<option value="Switzerland"> Switzerland </option>
											<option value="Syria"> Syria </option>
											<option value="Taiwan"> Taiwan </option>
											<option value="Tajikistan"> Tajikistan </option>
											<option value="Tanzania"> Tanzania </option>
											<option value="Thailand"> Thailand </option>
											<option value="Timor - Leste"> Timor - Leste </option>
											<option value="Togo"> Togo </option>
											<option value="Tokelau"> Tokelau </option>
											<option value="Tonga"> Tonga </option>
											<option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
											<option value="Trinidad and Tobago"> Trinidad and Tobago </option>
											<option value="Tristan da Cunha"> Tristan da Cunha </option>
											<option value="Tunisia"> Tunisia </option>
											<option value="Turkey"> Turkey </option>
											<option value="Turkmenistan"> Turkmenistan </option>
											<option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
											<option value="Tuvalu"> Tuvalu </option>
											<option value="Uganda"> Uganda </option>
											<option value="Ukraine"> Ukraine </option>
											<option value="United Arab Emirates"> United Arab Emirates </option>
											<option value="United Kingdom"> United Kingdom </option>
											<option value="United States"> United States </option>
											<option value="Uruguay"> Uruguay </option>
											<option value="Uzbekistan"> Uzbekistan </option>
											<option value="Vanuatu"> Vanuatu </option>
											<option value="Vatican City"> Vatican City </option>
											<option value="Venezuela"> Venezuela </option>
											<option value="Vietnam"> Vietnam </option>
											<option value="British Virgin Islands"> British Virgin Islands </option>
											<option value="Isle of Man"> Isle of Man </option>
											<option value="US Virgin Islands"> US Virgin Islands </option>
											<option value="Wallis and Futuna"> Wallis and Futuna </option>
											<option value="Western Sahara"> Western Sahara </option>
											<option value="Yemen"> Yemen </option>
											<option value="Zambia"> Zambia </option>
											<option value="Zimbabwe"> Zimbabwe </option>
									</select>
						    </div>
						    <div class="form-group">
										<input type="number" class="form-control" id="Amount" name="amount" placeholder="Amount" >
										<div class="row">
											<div class="col-md-12">
													<button type="button" value="10.00" class="btn add" >$10.00</button>
													<button type="button" value="20.00" class="btn add" >$20.00</button>
													<button type="button" value="50.00" class="btn add" >$50.00</button>
													<button type="button" class="btn" id="custom_donate">Give Custom Amount</button>
											</div>
										</div>
							</div>
						    <div class="form-group">
						        <textarea name="comment" id="comment" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
						    </div>
						    {{-- <div class="form-group">
						        <textarea class="form-control" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
						    </div> --}}
						    <button type="submit" id="submit" name="submit" class="btn btn-primary btn-block">Donate Now</button>
						</form>
						</div>
					</div><!-- end col -->

					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="text-box-2">
							<h3>FAQ</h3>
							<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class="fa fa-plus-circle"></i> Question 1</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><i class="fa fa-plus-circle"></i> Question 2</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><i class="fa fa-plus-circle"></i> Question 3</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><i class="fa fa-plus-circle"></i> Question 4</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><i class="fa fa-plus-circle"></i> Question 5</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div><div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><i class="fa fa-plus-circle"></i> Question 6</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
  </div> 
</div>
						</div><!-- end text-box -->
					</div><!-- end col -->
			</div><!-- end container -->
</section><!-- end section -->

		<section class="section lb">
			<div class="container" style="margin-top:-30px;">
				<div class="section-title text-center">
					<h3>Our Activities</h3>
					<hr>
					<p class="lead">Our search engine optimization works and happy customers in the past.</p>
				</div><!-- end section-title -->

				{{-- <div class="row lightcasestudies">
					<div class="col-md-4">
						<div class="case-box">
							<img src="upload/case_04.jpg" alt="" class="img-responsive">
							<div class="case-info clearfix">
								<div class="pull-left">
									<h4>Carbon Beauty</h4>
									<small>Backlink Service</small> 
								</div>
								<span class="case-link pull-right"><a href="case-studies-single.html"><i class="fa fa-link"></i></a></span>
							</div><!-- end case-info -->
						</div><!-- end case-box -->
					</div><!-- end col -->

					<div class="col-md-4">
						<div class="case-box">
							<img src="upload/case_05.jpg" alt="" class="img-responsive">
							<div class="case-info clearfix">
								<div class="pull-left">
									<h4>Denicler</h4>
									<small>1nd Place Success</small>
								</div>
								<span class="case-link pull-right"><a href="case-studies-single.html"><i class="fa fa-link"></i></a></span>
							</div><!-- end case-info -->
						</div><!-- end case-box -->
					</div><!-- end col -->

					<div class="col-md-4">
						<div class="case-box">
							<img src="upload/case_06.jpg" alt="" class="img-responsive">
							<div class="case-info clearfix">
								<div class="pull-left">
									<h4>KendPark</h4>
									<small>SEO / SEM</small>
								</div>
								<span class="case-link pull-right"><a href="case-studies-single.html"><i class="fa fa-link"></i></a></span>
							</div><!-- end case-info -->
						</div><!-- end case-box -->
					</div><!-- end col -->
				</div><!-- end row --> --}}
				<div class="owl-carousel owl-theme lightcasestudies withhover">
					@foreach($blogs as $blog_data)
					<div class="item-carousel">
						<div class="case-box">
							<img src="{{asset('/upload/blog/'.$blog_data->photo)}}" style="width:352px;height:250px;" alt="" class="img-responsive">
							<div class="magnifier">
								<a href="case-studies-single.html"><i class="fa fa-link"></i></a> 
							</div>
						</div><!-- end case-box -->
					</div><!-- end col -->
					@endforeach

				</div>
			</div><!-- end container -->
		</section><!-- end section -->

@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
  @if(Session::has('success'))
    <script type="text/javascript">
    toastr.success("{{Session('success')}}");</script>
  @endif
  
  <script>
		$(function(){
			$(document).on('click','.add',function() {
				var amount=$(this).val();
				$('#Amount').val(amount);
			});

				$("#custom_donate").on('click',function() {
				$("#Amount").val("");
				$('#Amount').focus();
			});
		
		});
	</script>
@endsection