<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<style>
body,html
{
	width: 100%;
	height: 100%;
	padding: 0;
	margin: 0;
	outline: 0;
}

body
{
	font-family: "open sans", calibry, "Sans Serif";
	font-weight: 300;


}

#sol{
	width: 50%;
	height: 100%;
	float: left;
	background-color: rgb(30,30,30);
	color: rgb(240,240,240);

}
#sol h1{
	margin-top: 1em;
	width: 100%;
	height: 1.5em;
	font-size: 1.5em;
	text-align: center;

}



	.resimdiv{
		position: relative;
		width: 10em;
		height: 10em;
		border-radius: 10em;	
		overflow: hidden;
		margin-top: 5em;
		margin-left: calc(50% - 5em);
	
	}

.resimdiv img
{
	width: auto;
	height: 100%;

}

.resimdiv + .resimdiv img {
  box-shadow: 0 0 1px 0 white;
}

#sol #personal
{
	width: 100%;
	height: auto;
	text-align: center;
	margin-top: 2em;
		

}



#sag
{
	width: 50%;
	height: 100%;
	float: right;
	background-color: rgb(240,240,240);
	color: rgb(30,30,30);
}

.baslik
{
	display: inline-block;	
	width: auto;
	height: 1em;
	margin-top: 2.5em;
	margin-left: 10%;
	font-size: 1em;
	padding: 0.8em 1em 0.8em 1em;
	font-weight: 400;
	background-color: rgb(40,40,40);
	border-radius: 0.2em;
	color: rgb(240,240,240);


}

#sag .altbaslik
{
	width: 75%;
	height: 1em;
	font-size: 1em;
	margin-top: 1em;
	margin-left: 15%;

}

#sag .ayrinti
{
	width: 70%;
	height: 0.9em;
	font-size: 0.9em;
	margin-bottom: 0.8em;
	margin-top: 0.8em;
	margin-left: 20%;

}
</style>


</head>
<body>
<div id="sol">
	<div class="resimdiv">
		<img src="cvresim.jpg" alt="">
	</div>
	<h1>STUART M. PRESTON</h1>
	<div id="personal"> Kingston - South London</div>
	<div id="personal"> (073xx)xxxxxx</div>
	<div id="personal"> s*****@gmail.com</div>
	<div id="personal"> http://s*********.com</div>
		


</div>

<div id="sag">
	<div class="baslik">JOBS	</div>
		<div class="altbaslik"> 2012-2017 - Magic Creative Agency - Designer</div>
			<div class="ayrinti"> Designing digital portfolios</div>
			<div class="ayrinti"> Creating UI templates for internet magazines </div>		
		<div class="altbaslik"> 2005-2012 - R&C Software Company - UI Designer</div>
			<div class="ayrinti"> Designing UI for web projects </div>
	<div class="baslik">SKILLS</div>
		<div class="altbaslik">Adobe Photoshop, Illustrator, Indesign, Corel Draw</div>
		<div class="altbaslik"> Vanilla javacsript, Jquery(advanced)</div>
		<div class="altbaslik"> Spoken German(b2) & Russian(a2)</div>
	<div class="baslik"> EDUCATION</div>
		<div class="altbaslik"> 2011 - South Essex Un. - Graphic Design </div>
		<div class="altbaslik"> 2011-2013 - Several private lessons on graphic softwares </div> 
</div>

</body>
</html>
