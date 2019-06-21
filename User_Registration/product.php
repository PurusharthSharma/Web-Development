<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>

<div class="row">

	<div class="column left">
		<img class="img_p" src="pro_img.jpg">

		<center>
			<div class="pro_sa">
				

				<img class="pro_s_i" src="pro_img.jpg">
				<img class="pro_s_i" src="pro_img.jpg">
				<img class="pro_s_i" src="pro_img.jpg">
			</div>
		</center>
			
	</div>

		<div class="column right">

			<div class="div_wl">
				<img class="img_wl" src="ico_wl.png"> <a href="https://purusharthsharma.github.io/" style="font-size:20px;">Wishlist</a>				
			</div>

			<div class=" colr">
				<p style="font-size:20px;">Color <div class="column cl_1"></div>
				<div class="column cl_2"></div>
				<div class="column cl_3"></div></p>
				
			</div>

					<div class="bt">				

					<button class="button">Add to Cart</button>

					<br>

					<button class="button">Buy Now</button>

					

			</div>

			<br><br>
			<p><b>Description : </b> Here comes the Description of the product<br><br>
                <b>Address : </b> Here comes the Address of the our website</p>

			



			
				
			

			
		</div>

	</div>

	<h1> Discover More Products</h1>

	<div class="row">

		<center>

	

		<div class="column2 m1">

			<img class="more_pi" src="more_p1.jpg">

			<p class="p_d">Hello Everyone,these are some new products which we are providing at very good price.Hello Everyone,these are some new products which we are providing at very good price. </p>

		</div>

		<div class="column2 m2">
			
			<img class="more_pi" src="more_p2.jpg">

			<p class="p_d">Hello Everyone,these are some new products which we are providing at very good price.Hello Everyone,these are some new products which we are providing at very good price. </p>

		</div>

		<div class="column2 m3">
			
			<img class="more_pi" src="more_p3.jpg">

			<p class="p_d">Hello Everyone,these are some new products which we are providing at very good price.Hello Everyone,these are some new products which we are providing at very good price. </p>

		</div>

		

		<div class="column2 m4">
			
			<img class="more_pi" src="more_p4.jpg">

			<p class="p_d">Hello Everyone,these are some new products which we are providing at very good price.Hello Everyone,these are some new products which we are providing at very good price. </p>

		

		</div>

</center>

</div>

<center>
<div class="q_div">
	
	<h3 style="padding-top: 5%;"> Customer Questions and Answer</h3>
	<p style="padding-top: 3%;"> For more info call <em style="color:crimson">9690548452</p>

		<button class="button">Add a Question</button>


</div></center>



<?php include 'inc/footer.php'; ?>



<style>
	
	

	* {
		  box-sizing: border-box;
		}

	.column{
		float:left;
		width:50%;
		height:600px;
		padding:10px;
	}
	.column_c{
		float:left;
		width:50%;
	}
	.left{
		width:65%;
	}
	.pro_sa{
		margin-top:7%;
		width:80%;
	}
	.pro_s_i{
		width:170px;
		height:80px;
		margin-left:2%;
	}
	.right{
		width:35%;
	}
	.row:after{
		content:"";
		display: table;
		clear: both;
	}
	.img_p{
	   width: 600px;
    height: 300px;
    margin-left: 20%;
    margin-top: 8%;
	}
	.div_wl{
		margin-top:10%;
	}
	.img_wl{
		width:20px;
		height:20px;
	}
	.colr{
		margin-top: 5%;
	}
	.cl_1{
		background-color: yellow;
		width:20px;
		height:20px;
		margin-top:3%;
		float:left;
		margin-left: 30%;
		margin-top:-5%;
	}
	.cl_2{
		background-color: red;
		width:20px;
		height:20px;
		margin-left: 45%;
		margin-top: -5%;
		float:left;
	}
	.cl_3{
		background-color: black;
		width:20px;
		height:20px;
		margin-left: 60%;
		margin-top: -5%;
		float:left;
	}

	.bt{
		margin-top:4%;
	}

	.button {
	  position: relative;
	  background-color:   #ffa62d ;
	  border: none;
	  font-size:18px;
	  color: black;
	  margin-top:4%;
	  padding:2px;
	  width: 350px;
	  text-align: center;
	  -webkit-transition-duration: 0.4s; /* Safari */
	  transition-duration: 0.4s;
	  text-decoration: none;
	  overflow: hidden;
	  cursor: pointer;
	  border-radius: 5px;
	  border:solid 0.5px;
	 
	}

	.button:after {
	  content: "";
	  background:  #ffa62d ;
	  display: block;
	  position: absolute;
	  padding-top: 300%;
	  padding-left: 350%;
	  transition: all 0.8s
	}

	.button:active:after {
	  padding: 0;
	  margin: 0;
	  opacity: 1;
	  transition: 0s
	}


	.more{
		background-color: red;
		height:600px;
	}

	.column2{
		float:left;
		width:25%;
		height:500px;
		
	}

	.more_pi{
		width:300px;
		height:200px;		
		margin-top: 18%;		
	}

	.m1{
		background-color: ;
	}
	.m2{
		background-color: ;
	}
	.m3{
		background-color: ;
	}
	.m4{
		background-color: ;
	}

	.p_d{
		margin:8%;
	}

	.q_div{
		background-color:  #efe9e8 ;
		width:80%;
		height:300px;
		margin-bottom: 120px;
	}

	.q_div_c{
		margin-top: 5%;
		background-color: red;
	}

	
	

</style>


<html>
	
	<body>



	</body>

</html>