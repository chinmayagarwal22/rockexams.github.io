﻿<!DOCTYPE html>
<html lang="en">
<head>
<title>Chem e Car | NITR Student Chapter </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
	<?php
	include ("header.php")
	?>

	<h1 style="text-align:center"> Chem e Car 2.0</h1>
	<br><br>

<div class="carousel slide" data-ride="carousel" data-interval="2000" id="aiche">
	<div class="carousel-inner">
		<div class="carousel-item active">    
			<center><img src="image_1.jpg" align="center" style="width:1000px; height: 250px;" alt="image_1.jpg"></center>
		</div>
	    <div class="carousel-item">
			<center><img src="image_2.jpg" style="width:1000px; height: 250px;" alt="image_2.jpg"></center><!-- second image in bootstrap -->
		</div>
		<div class="carousel-item">
			<center><img src="image_3.jpg" style="width:1000px; height: 250px" alt="image_2.jpg"></center><!-- third image in bootstrap -->
		</div>
	</div>
	
	<ol class="carousel-indicators">
		<li data-target="#aiche" data-slide-to="0" class="active"></li>
		<li data-target="#aiche" data-slide-to="1"></li>
		<li data-target="#aiche" data-slide-to="2"></li>
	</ol>
	<a href="#aiche" class="carousel-control-prev" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a href="#aiche" class="carousel-control-next" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
	
</div> <br><br><br>

	<style type="text/css">

		//styling heading 1
		  h1 {
		 	font-style: Gill Sans;
		 	
		 	font-color: brown;
		 }

		 body {
		 	margin-top: 20px;
		 	background-image: url('cover.jpg');
		 	background-position: fixed;
		 	background-repeat: no-repeat;
		 	background-size: cover;
		 	background-attachment: fixed;
		 }
            
         // styling the carousel 
		 .carousel-item  {
		 	display: block;
		 	margin: 0 auto;
		 }

		 .carousel-control-next-icon, .carousel-control-prev-icon {
		 	height: 40px;
		 	width: 40px;
		 }

		 //styling the images used in paragraph
		.a img {
			float: right;
			clear: both;
		}

		.b img {
			float: left;
			margin-left: 10px;
			width: 300px;
			height: 200px;
			position: absolute;
			display: inline;
		}

		.a {
			border: 1px solid;
			width: 1400px;
			height: 400px;
			margin-left: 35px;
		}

		.b {
			border: 1px solid;
			width: 1400px;
			height: 400px;
			margin-left: 20px;
		}

		.a p{
			float: left;
			margin-left: 15px;
			margin-right: 15px;
			text-align: justify;
			font-size: ;
			font-family: ;
		}

		.b p{
			float: right;
			margin-left: 350px;
			margin-right: 30px;
			text-align: justify;
			font-size: ;
			font-family: ;
		}

		.a h2 {
			margin-left: 15px;
			margin-top: 10px;
		}

		.b h2 {
			margin-left: 15px;
			margin-top: 10px;
		}

		@media all and (min-width:550px){
		body {
			margin-left: 15%;
			margin-right: 15%;
			padding: 2%;
		}

		img.l, img.r{
			width: 40%;
		}
	}

    </style>

<div class="a">
   <h2> Sub-Heading 1</h2><br><p><img src="103.jpg" hspace="24" align="right" style="width: 250px; height: 300px; float: right margin-right: 0px;" alt="image_102">
    The organizing committee sent a letter in September 1908 to 600 men in the chemical profession in the United States and Canada asking for their opinions about forming a chemical engineering society. Two hundred replies were received and 70-80% were favorable. Many of the others believed the existing societies (especially the American Chemical Society) were sufficient and they did not favor forming a new society.</p>
</div>
    <br><br>

<div class="b">
    <h2>Sub Heading 2</h2><br><img src="103.jpg" align="left" alt="image_103"><p>
    The organizing committee decided to hold a larger, open meeting at the Hotel Belmont in New York City at which those opposed to forming the new society could present their arguments and opinions. Accordingly, they invited fifty men prominent in the chemical profession (including men that opposed the forming of a new society) to meet on January 18, 1908. Twenty-one men attended the meeting and fourteen other expressed their views in letters. After much discussion, the meeting ended without reaching a definitive decision. However, it was agreed to have a mail vote (on whether or not to form a chemical engineering society) after a complete stenographic report of the meeting was printed and sent to the fifty men that had been invited to the meeting.</p>
</div>
    <br><br>

<div class="a">
    <h2>Sub Heading 3</h2><br><p><img src="104.jpg" hspace="24" align="right" alt="image_104">
    In 1905, The Chemical Engineer rounded out its first year of publication with an editorial by its founder and prominent engineer, Richard K. Meade, that propounded the question: "Why not the American Society of Chemical Engineers?" He went on to say: "The profession is now a recognized one and there are probably at least five hundred chemical engineers in this country".53-year-old Indian-origin IT professional has been arrested after he dramatically walked into a Northern California police station along with a dead body in his car and confessed to having killed three others at his apartment, over 350 kilometres away, according to US media reports</p>
</div>
    <br><br>

<div class="b">
    <h2>Sub Heading 4</h2><br><img src="105.jpg" hspace="24" align="left" alt="image_105"><p>
    The mechanical, civil, electrical, and mining engineers in the United States each had already established a national society, so Meade's editorial was quite pertinent. But it took time for the idea to take root and Meade kept promoting it for the next two years. Finally, in 1907, he issued a call for a preliminary meeting to be held in Atlantic City in June, 1907. Some early leaders of the profession, Charles F. McKenna, William H. Walker, William Miller Booth, Samuel P. Sadtler and Thorn Smith along with about a dozen others answered Meade's call and met in Atlantic City on June 21, 1907. The meeting concluded with the formation of an organizing committee of six members: Charles F. McKenna (chairman), Richard K. Meade, William M. Booth, J.C. Olsen, William H. Walker, and Arthur D. Little.</p>
</div>
    <br><br>

<div class="a">
    <h2>Sub Heading 5</h2><br><p><img class="r" hspace="24" src="106.jpg" align="right" alt="image_106">
    AIChE, American Institute of Chemical Engineers is the world’s leading organization for chemical engineering professionals, with nearly 55,000 members from more than 100 countries. AIChE has the breadth of resources and expertise you need whether you are in core process industries or emerging areas, such as nanobiotechnology.Members of AIChE enjoy access to these unique benefits: Access information and multimedia content regarding recognized and promising chemical engineering processes and methods</p>
</div>
    <br><br>
<?php
include("footer.php");
?>
</body>
</html>