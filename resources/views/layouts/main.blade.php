<!DOCTYPE html>
<html>
<head>
	<title>@yield('pagetitle')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="{{ asset('vendor/web/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('vendor/web/css/login_overlay.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('vendor/web/css/style6.css') }}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{{ asset('vendor/web/css/shop.css') }}" type="text/css" />
	<link href="{{ asset('vendor/web/css/contact.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('vendor/web/css/register.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('vendor/web/css/profile.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('vendor/web/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('vendor/web/css/checkout.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('vendor/web/css/single.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('vendor/web/css/style.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('vendor/web/css/fontawesome-all.css') }}" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">

</head>
<body>
	@yield('header')
	@yield('menubar')
	@yield('content')
	@yield('footer')
</body>

	<!--jQuery-->
	<script src="{{ asset('vendor/web/js/jquery-2.2.3.min.js') }}"></script>
	<!-- newsletter modal -->
	<!--search jQuery-->
	<script src="{{ asset('vendor/web/js/modernizr-2.6.2.min.js') }}"></script>
	<script src="{{ asset('vendor/web/js/classie-search.js') }}"></script>
	<script src="{{ asset('vendor/web/js/demo1-search.js') }}"></script>
	<!--//search jQuery-->
	
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<script src="{{ asset('vendor/web/js/move-top.js') }}"></script>
	<script src="{{ asset('vendor/web/js/easy-responsive-tabs.js') }}"></script>
	<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
    <script src="{{ asset('vendor/web/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


	<script src="{{ asset('vendor/web/js/bootstrap.js') }}"></script>
	<!-- js file -->


</html>