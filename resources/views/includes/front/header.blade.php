
	<!-- Header start -->
	<div class="sub-header">
		<div class="container">
			<div class="sub-header-box">
				<ul>
					<li>
						<img src="{{frontassets()}}/images/contact.svg" alt="">
						<a href="tel:{{contact()}}">{{contact()}}</a>
					</li>
					<li>
						<img src="{{frontassets()}}/images/header-email.svg" alt="">
						<a href="mailto:{{email()}}">{{email()}}</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<header class="sticky-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="javascript:void(0)"><img src="{{logo()}}" alt=""></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				  <!-- <img class="navbar-toggler-icon" src="{{frontassets()}}/images/menu.png" alt=""> -->
				</button>
				<div class="collapse justify-content-center navbar-collapse" id="navbarNavDropdown">
				  <ul class="navbar-nav mt-4 mt-md-0">
					<li class="nav-item">
					  <a class="nav-link @yield('home')" href="{{route('home')}}">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link @yield('services') dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Services <img src="{{frontassets()}}/images/drop-arrow.svg" alt="">
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						  <a class="dropdown-item" href="{{route('services.detailedMEPdesign')}}">Detailed MEP Design</a>
						  <a class="dropdown-item" href="{{route('services.effectiveREVITmodelling')}}">Effective REVIT Modelling</a>
						  <a class="dropdown-item" href="{{route('services.onDemandMEPServices')}}">On Demand MEP Services</a>
						  <a class="dropdown-item" href="{{route('services.servicesElectrical')}}">Services Electrical</a>
						  <a class="dropdown-item" href="{{route('services.servicesMechanical')}}">Services Mechanical</a>
						  <a class="dropdown-item" href="{{route('services.servicesPlumbing')}}">Services Plumbing</a>
						</div>
					  </li>
					<li class="nav-item">
					  <a class="nav-link" href="javascript:void(0)">Projects</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="javascript:void(0)">Training</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Our Company <img src="{{frontassets()}}/images/drop-arrow.svg" alt="">
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						  <a class="dropdown-item" href="javascript:void(0)">Our Company 1</a>
						  <a class="dropdown-item" href="javascript:void(0)">Our Company 2</a>
						  <a class="dropdown-item" href="javascript:void(0)">Our Company 3</a>
						</div>
					  </li>
				  </ul>
				</div>
			  </nav>
		</div>
	</header>
	<!-- Header End -->