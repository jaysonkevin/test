<!DOCTYPE html>
<html>
<head>
 <script src="jquery/jquery-3.1.0.min.js">



</script>
<style type="text/css">

	#slider{
		width:720px;
		height:400px;
		overflow:hidden;
		margin-left:230px;
		margin-top:120px;
		

	}
	#slider .slides{
		display:block;
		width:6000px;
		height:400px;
		margin:0;
		padding:0;

	}
	#slider .slide{
		float:left;
		list-style:none;
		width:720px;
		height:400px;
	  
		
	}
	img{
		width:720px;
		height:400px;
	}
	#next{
		float:right;

		
	}
	#prev{
		float:left;
	
		
	}
	.button{
		margin-left:510px;
		list-style:none;
		
	}
	#button1{
		background-color: blue;
	}
</style>
</head>

<body>
<div id="slider">

<ul class="slides">

<li class="slide"><img src="images/1.jpg"></li>
<li class="slide"><img src="images/2.jpg"></li>
<li class="slide"><img src="images/3.jpg"></li>
<li class="slide"><img src="images/4.jpg"></li>
	
</ul>



</div>
<div class="button">
<li>
<button id="button1"></button>
<button id="button2"></button>
<button id="button3"></button>
<button id="button4"></button>
</li>

</div>
<div class="button">

</div>
<a href="#" id="next" >Next</a>
<a href="#" id="prev" >Prev</a>

<script>


$(function() {

    var currentSlide = 1;
	 

    var $slider = $('#slider');
    var $slideContainer = $('.slides', $slider);
    var $slides = $('.slide', $slider);

    var interval;
			
    function startSlider() {
		        interval = setInterval(function() {
			
						/*if(currentSlide ==1){
								$('#button1').css({"background-color":"blue"});
								$('#button2').css({"background-color":"white"});
								$('#button3').css({"background-color":"white"});
								$('#button4').css({"background-color":"white"});
							}
						if(currentSlide ==1){
								$('#button2').css({"background-color":"blue"});
								$('#button1').css({"background-color":"white"});
								$('#button3').css({"background-color":"white"});
								$('#button4').css({"background-color":"white"});
							}
							
						if(currentSlide ==2){
								$('#button3').css({"background-color":"blue"});
								$('#button1').css({"background-color":"white"});
								$('#button2').css({"background-color":"white"});
								$('#button4').css({"background-color":"white"});
							}
						if(currentSlide ==3){
								$('#button4').css({"background-color":"blue"});
								$('#button1').css({"background-color":"white"});
								$('#button2').css({"background-color":"white"});
								$('#button3').css({"background-color":"white"});
							}*/

            $slideContainer.animate({'margin-left': '-=720'}, 2000, function() {

				
				if(++currentSlide == $slides.length){
					currentSlide=1;
					  $slideContainer.css('margin-left', 0);
				}

			
                
				
            });
        }, 3000);
		 
		
    }
		


    function pauseSlider() {
        clearInterval(interval);
    }

    $slideContainer
        .on('mouseenter', pauseSlider)
        .on('mouseleave', startSlider);

    startSlider();

	$('#next').click(function(){
		 
            $slideContainer.animate({'margin-left': '-=720'}, "fast", function() {
			
                if (++currentSlide === $slides.length) {
					
                    currentSlide = 1;
                    $slideContainer.css('margin-left', 0);
                }
            });
        

	


	});

	$('#prev').click(function(){
		 
         
            $slideContainer.animate({'margin-left': '+=720'}, "fast");

			if(currentSlide == 1){
				 $slideContainer.animate({'margin-left':'-2160'},"fast");
				 
			}

		
	});

	
});



</script>
</body>

</html>
