<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Portfolio | @yield('title')</title>
</head>
<body>
    @include('frontend.layouts.pairls.style')
    	<!-- ***** Magic Cursor Area Start ***** -->
	<div id="magic-cursor">
		<div id="cursor"></div>
	</div>
 

    	<!--====== Scroll To Top Area Start ======-->
			<div class="scroll-to-top">
				<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
					<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
				</svg>
			</div>
			<!--====== Scroll To Top Area End ======-->

            @include('frontend.layouts.header')

            @yield('content')

            @include('frontend.layouts.footer')

            @include('frontend.layouts.pairls.script')
</body>
</html>