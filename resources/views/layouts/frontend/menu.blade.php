		<div class="main_menu menu_fixed">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-default col-lg-12 col-md-12 col-sm-12 col-xs-12">
					   <!-- Brand and toggle get grouped for better mobile display -->
					   <div class="navbar-header">
					     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					       <span class="sr-only">Toggle navigation</span>
					       <span class="icon-bar"></span>
					       <span class="icon-bar"></span>
					       <span class="icon-bar"></span>
					     </button>
					   </div>
					   <!-- Collect the nav links and other content for toggling -->
					   <div class="collapse navbar-collapse" id="navbar-collapse-1">
					     <ul class="nav navbar-nav">
					       <li><a href="{{url('/', app()->getLocale())}}">@lang('home.home_menu')</a></li>
					       <li class="dropdown_menu"><a href="#">About Us <i class="fa fa-sort-desc"></i></a>
								<ul class="sub-menu">
									<li><a href="{{url('/about-us')}}">@lang('home.info_company')</a></li>
									<li><a href="{{url('/board-of-directors')}}">@lang('home.bod')</a></li>
									<li><a href="{{url('/team-member')}}">Team Members</a></li>
									<li><a href="{{url('/branch-list')}}">Branch List</a></li>
									<li><a href="{{url('/agents')}}">Agents</a></li>
									<li><a href="{{url('/surveyors')}}">Surveyors</a></li>
									<li><a href="{{url('/citizens-charter')}}">Citizen Charters</a></li>
									<li><a href="{{url('/faq')}}">FAQs</a></li>
								</ul>
					       </li>
					       <li class="dropdown_menu"><a href="#">Products <i class="fa fa-sort-desc"></i></a>
					       		<ul class="sub-menu">
									<li><a href="property-insurance.html">Property Insurance</a></li>
									<li><a href="motor-insurance.html">Motor Insurance</a></li>
									<li><a href="home-insurance.html">Home Insurance</a></li>
									<li><a href="micro-insurance.html">Micro Insurance</a></li>
									<li><a href="fire-insurance.html">Fire Insurance</a></li>
								</ul>
					       </li>
					       <li class="dropdown_menu"><a href="#">Financial Statements <i class="fa fa-sort-desc"></i></a>
					       		<ul class="sub-menu">
									<li><a href="{{url('/capital-structures')}}">Capital Structure</a></li>
									<li><a href="{{url('/premium-structure')}}">Premium Structure</a></li>
									<li><a href="{{url('/investment')}}">Investment</a></li>
									<li><a href="{{url('/reserves')}}">Reserve</a></li>
									<li><a href="quaterly-report.html">Quaterly Report</a></li>
									<li><a href="financial-report.html">Financial Report</a></li>
								</ul>
					       </li>
					       <li class="dropdown_menu"><a href="#">Info Center <i class="fa fa-sort-desc"></i></a>
					       		<ul class="sub-menu">
									<li><a href="training.html">Training, Seminar, Workshop</a></li>
									<li><a href="news.html">News</a></li>
									<li><a href="right-to-info.html">Right to Information</a></li>
								</ul>
					       </li>
					       <li><a href="{{url('/re-insurers')}}">Re-Insurers</a></li>
					       <li class="dropdown_menu"><a href="#">Downloads <i class="fa fa-sort-desc"></i></a>
					       		<ul class="sub-menu">
									<li><a href="{{url('/agm-minute')}}">AGM Minute</a></li>
									<li><a href="{{url('/kyc-form')}}">KYC Forms</a></li>
									<li><a href="{{url('/policy-proposal-form')}}">Policy Proposal Form</a></li>
									<li><a href="{{url('/right-share')}}">Right Share</a></li>
									<li><a href="{{url('/claim-form')}}">Claim Form</a></li>
									<li><a href="{{url('/surveyor-listing-application-form')}}">Surveyor Listing Application Form</a></li>
{{--									<li><a href="{{url('/agm-minute')}}">Branch Download</a></li>--}}
								</ul>
					       </li>
					       <li><a href="contact.html">Contact Us</a></li>
					     </ul>
					   </div><!-- /.navbar-collapse -->
					</nav> <!-- /nav -->
				</div>
			</div>
		</div>
