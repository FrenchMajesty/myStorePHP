<html>
<head>
	<meta charset="UTF-8">
	<title>{@sitename} - {@pageName}</title>
	<link rel="stylesheet" href="{@sitelink}/source/css/style.css" type="text/css">
	<link rel="stylesheet" href="{@sitelink}/source/css/font.awesome.min.css" type="text/css">
	<link rel="stylesheet" href="{@sitelink}/source/css/image-slider.css" type="text/css">

</head>

<body>
<div id="header" class="container">
	<div class="row">
		<div class="links">
			<ul>
				<li><a href="{@sitelink}/account">My Account</a></li>
				<li><a href="{@sitelink}/register">Sign Up</a></li>
			</ul>
		</div>

		<div class="logo">[THE LOGO HERE]</div>

		<div class="cart">
			<div class="total_products">
				<a href="{@sitelink}/cart"><i class="fa fa-shopping-cart"></i> Cart Empty</a>
			</div>
		</div>
	</div>

	<div class="row" style="text-align: center">
			<ul id="navbar">
				<li class="bar"><a href="{@sitelink}/" class="big">Home</a></li>
				<li class="bar"><a href="{@sitelink}/category/men/" class="big">Men</a></li>
				<li class="bar"><a href="{@sitelink}/category/women/" class="big">Women</a></li>
				<li class="bar"><a href="{@sitelink}/contact" class="big">Contact Us</a></li>
			</ul>
	</div>
</div>


{@pageContent}


<div id="footer">
	<div class="container">
		<div class="row">

			<div class="col-33">
				<div class="contact-info">
				<h4>Contacts</h4>
				<p><i class="fa fa-map-marker"></i> 1306 Raider Drive,Euless TX 76040 United States</p>
				<p><i class="fa fa-mobile"></i> +1(682)-256-4413 // +1(817)-378-7348</p>
				<p><i class="fa fa-envelope-o"></i> verdi.kap@gmail.com</p>
				</div>
			</div>

			<div class="col-33">
				<div class="custom">
					<p class="logoimg"> [LOGO GOES HERE]</p>
					<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
				</div>
			</div>

			<div class="col-33">
				<div class="contact-info">
					<h4>Operating Hours</h4>
					<p>Monday through Friday : 8:00am - 10:00pm </p>
					<p>Saturday: 9:00am - 9:00pm</p>
					<p>Sunday: 1:00pm - 10:00pm</p>
				</div>
			</div>

		</div>
	</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{@sitelink}/source/js/script.js"></script>
<script src="{@sitelink}/source/js/image-slider.js"></script>
<script>
    // Highlight page in navbar
    $(function() {
         $("li.bar a").each((i, link) => {
             if(link.innerHTML.search(/^{@pageName}/i) != -1) link.classList.add('active')
         })
      })
</script>
</body>
</html>
