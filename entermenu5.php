<?php include 'em4.php'; ?>
<html>
<head>
	
	<title>Enter Menu</title>
	<link rel="stylesheet" type="text/css" href="css/entermenustyle.css" />
	 <script type="text/javascript">
function toggle()	{
	var el=document.getElementsByClassName("brk");
	if(el.length!=0)	{
		m=el[0];
		m.className="brk1";
	}else	{
		el=document.getElementsByClassName("brk1");
		m=el[0];
		m.className="brk";
	}
}
function togglelch()	{
	var el=document.getElementsByClassName("lch");
	if(el.length!=0)	{
		m=el[0];
		m.className="lch1";
	}else	{
		el=document.getElementsByClassName("lch1");
		m=el[0];
		m.className="lch";
	}
}
function togglesnk()	{
	var el=document.getElementsByClassName("snk");
	if(el.length!=0)	{
		m=el[0];
		m.className="snk1";
	}else	{
		el=document.getElementsByClassName("snk1");
		m=el[0];
		m.className="snk";
	}
}
function toggledin()	{
	var el=document.getElementsByClassName("din");
	if(el.length!=0)	{
		m=el[0];
		m.className="din1";
	}else	{
		el=document.getElementsByClassName("din1");
		m=el[0];
		m.className="din";
	}
}
           </script>
		   <style type="text/css">
			.brk	{
				display:none;
			}
			.lch	{
				display:none;
			}
			.snk	{
				display:none;
			}
			.din	{
				display:none;
			}
			.break{
				text-align: center;
				font-weight: bold;
				color:blue;
			}
						input[type="submit"] {
    font-size:28px;
	font-family:"Calibri";
    width: 150px; /* width of image */
    height: 40px; /* height of image */
    border-radius: 14px;
	background-color: #034af3;
}
input[type="submit"]:hover{ 
  color: #AEC4D9;
  text-decoration: underline;
}
			#head{
				font-size:50px;
				font-family:"Calibri";
				color:blue;
				text-align: center;
			}
			p{
				font-size:20px;
				color:blue;
			}
		   </style>
</head>
<body>
<div id="main">
<header>
<div  id="logo">
 
  <p id="head">Enter for Friday</p>
</div>
</header>
</div>
 
<h1 class="break" onclick="toggle();">Breakfast:</h1>
<div class="brk" align="center">
<p>option1</p>
<form action="entermenu6.php" method="post">
	<select name="fribop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="fribop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="fribop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="fribop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fribop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="togglelch();">Lunch:</h1>
<div class="lch" align="center">
<p>option1</p>
	<select name="frilop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop1sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop1sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>	
<p>option2</p>
	<select name="frilop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop2sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop2sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="frilop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop3sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop3sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="frilop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop4sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop4sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option5</p>
	<select name="frilop5sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop5sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop5sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop5sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop5sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop5sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frilop5sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="togglesnk();">Snacks:</h1>
<div class="snk" align="center">
<p>option1</p>
	<select name="frisop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frisop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="frisop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="frisop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="toggledin();">Dinner:</h1>
<div align="center" class="din">
<p>option1</p>
	<select name="fridop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop1sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop1sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="fridop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop2sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop2sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="fridop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop3sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop3sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="fridop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop4sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop4sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option5</p>
	<select name="fridop5sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop5sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop5sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop5sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop5sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop5sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="fridop5sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<br /><br />
<div align="center"><input type="submit" value="Next" /></div>
</form>
</div>
</body>
</html>