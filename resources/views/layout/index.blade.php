<!DOCTYPE html>
<html lang="en">
<head>
	
	@include('includes.meta')
    
	<!-- Title -->
	<title>@yield('title') | Asta Pijar Kreasi Digital</title>
    
	<!-- Favicon icon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    @stack('pre-style')
	@include('includes.style')
    @stack('post-style')
	
</head>
<body id="bg" onload="zoom()">
<div id="loading-area" class="loading-03 text-primary"></div>
<div class="page-wraper">
	@include('includes.header')
	
	@yield('content')
		
	@include('includes.footer')
	
</div>
    @stack('pre-script')
	@include('includes.script')
    @stack('post-script')
</body>
</html>