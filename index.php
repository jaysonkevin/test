<!DOCTYPE html>
<html>
<head>

	<title>DropDown Menu</title>
<script src="jquery/jquery.js"></script>
	<style type="text/css">
	#nav{
		position: relative;
		float: center;
		width: auto;
		list-style: none;
	}
	#nav li{
		float: left;
		position: relative;
		margin-right: 5px;


	}
	ul{
		list-style: none;
		text-align: left;
	}
	#nav a{

		display: block;
		padding:10px;
		color: white;
		background:grey;
		text-decoration: none;

		}
		#nav a:hover{
			background: black;
		}

#nav .color{
	display: none;
}
#nav .value{
	display: none;
}
#nav .size{
	display: none;
}

#shirt:hover .size, #shirt:hover .color{
	display:block;

}

#nav .color:hover .value{
	display: block;
	position: absolute;
	margin-left: 14px;
	
}	
</style>



	
	
</head
<body>

<ul id="nav">
	<li id="shirt"><a href="#">Tshirt</a>
		<ul class="color">
			<li><a href="#">Color</a></li>
			<ul class="value">
				<li><a href="">Blue</a></li>
				<li><a href="">Red</a></li>
				<li><a href="">Black</a></li>

			</ul>
		</ul>
		<ul class="size">
			<li><a href="#">Size</a></li>
			
		</ul> 
	</li>
	<li id="short"><a href="#">Short</a></li>
	<li id="pants"><a href="#">Pants</a></li>
</ul>
</body>
</html>