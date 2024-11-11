
<!--footer-->
<section class="agile-footer">
	<footer>&copy; 2018 ingenious responsive template.All Rights Reserved.Designed by <a href="" target="blank">Manu</a></footer>
</section>
<!--/footer-->
<div id="small-dialog1" class="mfp-hide">
<div class="header-form1">
<img src="images/blog1.jpg" alt="blog">
<h4>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</h4>
</div>	
<div class="clear"></div>
</div>
<div id="small-dialog2" class="mfp-hide">
<div class="header-form1">
<img src="images/blog2.jpg" alt="blog">
<h4>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</h4>
</div>	
<div class="clear"></div>
</div>
<script src="js/lightbox-plus-jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-2.1.4.min.js"></script>
<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	


<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
<!-- js for smooth scrollings -->
	<script src="js/SmoothScroll.min.js"></script>
<!-- js for smooth scrollings -->
<!-- //smooth-scrolling-of-move-up -->
<script src="js/jquery.magnific-popup.js"></script>
<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			easing: 'ease-in-out', 
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
</script>

</body>
</html>