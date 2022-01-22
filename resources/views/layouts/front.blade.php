<!DOCTYPE html>
<html>
	<!-- Head section -->
	 @include('includes.front.head')
	<body>
		<!-- Headre section -->
		 @include('includes.front.header')

		<!-- Sidebar section -->
		@include('includes.front.sidebar')

		<!-- Content section -->
			@yield('content')

		<!-- Footer section -->
		@include('includes.front.footer')

		<!-- Script section -->
		@include('includes.front.script')

	</body>
</html>
