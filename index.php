<html lang="en">
	<head>
		<meta name="author" content="Jacob Yates" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, user-scalable=no" />
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
	</head>
	<body>
		<div class="main">
			<div class="header">
				<div class="container">
					<nav class="navbar" role="navigation">
						<div class="navbar-header">
							<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
								<span class="sr-only">Toggle Navigation</span>
							</button>
							<a href="#" class="navbar-brand scroll-top">Logo</a>
						</div>
						
						<div id="main-nav" class="collapse navbar-collapse"	>
							<ul class="nav navbar-nav">
								<li><a href="#" class="scroll-link" data-id="about">About</a></li>
								<li><a href="#" class="scroll-link" data-id="resume">Resume</a></li>
								<li><a href="#" class="scroll-link" data-id="projects">Projects</a></li>
								<li><a href="#" class="scroll-link" data-id="contact">Contact</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			
			<section>
			<div id="about" class="page-section">
				<div class="container">
					<div class="page-header">
						<h1>Jacob Yates <small>Web Developer</small></h1>
					</div>
					<p class="caption">Avid gamer, reader, writer, and developer.</p>
				</div>
			</div>
			</section>
			
			<section>
			<div id="resume" class="page-section">
				<div class="container">
					<div class="page-header">
						<h1>Resume</h1>
					</div>
					<p class="caption"><img src="images/resumepic.jpg" class="img-responsive center-block"></img></p>
				</div>
			</div>
			</section>
			
			<section>
			<div id="projects" class="page-section">
				<div class="container">
					<div class="page-header">
						<h1>Projects</h1>
					</div>
					<p class="caption">This Website!</p>
				</div>
			</div>
			</section>
			
			<section>
			<div id="contact" class="page-section">
				<div class="container">
					<div class="page-header">
						<h1>Contact Me</h1>
					</div>
					<p class="caption">
						Email: <a href="mailto:animaniac_fin@hotmail.com">animaniac_fin@hotmail.com</a>
						
					</p>
				</div>
			</div>
			</section>
			
			<div class="footer">
				<div class="container">
					<p class="copyright">© Jacob Yates</p>
				</div>
			</div>
		</div>
		
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			// navigation click actions	
			$('.scroll-link').on('click', function(event){
				event.preventDefault();
				var sectionID = $(this).attr("data-id");
				scrollToID('#' + sectionID, 750);
			});
			// scroll to top action
			$('.scroll-top').on('click', function(event) {
				event.preventDefault();
				$('html, body').animate({scrollTop:0}, 'slow'); 		
			});
			// mobile nav toggle
			$('#nav-toggle').on('click', function (event) {
				event.preventDefault();
				$('#main-nav').toggleClass("open");
			});
		});
		// scroll function
		function scrollToID(id, speed){
			var offSet = 50;
			var targetOffset = $(id).offset().top - offSet;
			var mainNav = $('#main-nav');
			$('html,body').animate({scrollTop:targetOffset}, speed);
			if (mainNav.hasClass("open")) {
				mainNav.css("height", "1px").removeClass("in").addClass("collapse");
				mainNav.removeClass("open");
			}
		}
		if (typeof console === "undefined") {
			console = {
				log: function() { }
			};
		}
		
		</script>
	</body>
	
</html>

