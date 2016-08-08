<!DOCTYPE html>
<html>
<head>
<script src="jquery/jquery.js"></script>
<style type="text/css">

	body{
		background-color: grey;
	}
	li{
		overflow: hidden;
		position: absolute;
		margin-left: 20%;
		margin-top: 5%;
		list-style: none;


	}
	img{
		height: 400px;
		width: 700px;
	}
	#btn{
		margin-top: 440px;	
		margin-left: 40%;
			
	}
	button:hover{
		background-color: yellow;
	}

	h1{
		text-align: center;
		color: black;
	}
	a {
		float: right;
		margin-top: 15%;
		margin-right: 20%;
		text-decoration: none;
	}
	#left{
		float: left;
		margin-top: 15%;
		margin-left: 15%;
		text-decoration: none;
	}

</style>
<script>

jQuery(document).ready(function(){

	animate = function(){

		jQuery('.img4').fadeOut(4000,function(){
			jQuery('.img3').fadeOut(4000,function(){
				jQuery('.img2').fadeOut(4000,function(){
					jQuery('.img4').fadeIn(4000,function(){
						jQuery('.img3').fadeIn(4000,function(){
							jQuery('.img2').fadeIn(4000);
							animate();	
						})
					})
				});
			});

		});
		
			}

	animate();
});


jQuery(document).ready(function(){
	jQuery('#btn1').click(function(){
		jQuery('.img4').fadeIn(function(){
			animate();


		});
	});
});


jQuery(document).ready(function(){
	jQuery('#btn2').click(function(){
		jQuery('.img3').fadeIn(function(){
		animate();

		});
	});
});

jQuery(document).ready(function(){
	jQuery('#btn3').click(function(){
		jQuery('.img2').fadeIn(function(){
			animate();

		});
	});
});

jQuery(document).ready(function(){
	jQuery('#btn4').click(function(){
		jQuery('.img1').fadeIn(function(){
		animate();

		});
	});
});

jQuery(document).ready(function(){

	jQuery('img').mouseenter(function(){
		 jQuery("li").stop();
	});
	jQuery('img').mouseleave(2000,function(){
		animate();
	});
	

});


	jQuery(document).ready(function(){
		jQuery('#left').click(function(){
			jQuery('.img3').filter(function(){
				jQuery('.img4').fadeIn();
			});
		});
	});
		

		



</script> 
</head>
 
<body>
	<h1>My Own Image Slider</h1>

<div id="img">


	<li id="image" class="img1"><img src="images/1.jpg"></li>	
	<li id="image" class="img2"><img src="images/2.jpg"></li>
	<li id="image" class="img3"><img src="images/3.jpg"id="3"></li>
	<li id="image" class="img4"><img src="images/4.jpg" id="4"></li>
	<ul>
		<li id ="btn">	<BUTTON id="btn1">1</BUTTON>
						<BUTTON id="btn2">2</BUTTON>
						<BUTTON id="btn3">3</BUTTON>
						<BUTTON id="btn4">4</BUTTON>
		</li>	
	</ul>
	<ul>
	
		<a href="#" id="right">Next</a>
		
	</ul>
	
		<button id="left">Previous</button>
	
</div>




</body>

</html>
