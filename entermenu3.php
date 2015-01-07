<?php include 'em2.php'; ?>
<html>
<<head>
	
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
 
  <p id="head">Enter for Wednesday</p>
</div>
</header>
</div>
 
<h1 class="break" onclick="toggle();">Breakfast:</h1>
<div class="brk" align="center">
<p>option1</p>
<form action="entermenu4.php" method="post">
	<select name="wedbop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="wedbop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="wedbop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="wedbop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedbop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="togglelch();">Lunch:</h1>
<div class="lch" align="center">
<p>option1</p>
	<select name="wedlop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop1sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop1sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>	
<p>option2</p>
	<select name="wedlop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop2sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop2sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="wedlop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop3sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop3sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="wedlop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop4sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop4sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option5</p>
	<select name="wedlop5sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop5sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop5sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop5sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop5sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop5sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedlop5sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="togglesnk();">Snacks:</h1>
<div class="snk" align="center">
<p>option1</p>
	<select name="wedsop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedsop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="wedsop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="wedsop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="toggledin();">Dinner:</h1>
<div class="din" align="center">
<p>option1</p>
	<select name="weddop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop1sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop1sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="weddop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop2sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop2sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="weddop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop3sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop3sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="weddop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop4sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop4sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option5</p>
	<select name="weddop5sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop5sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop5sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop5sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop5sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop5sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="weddop5sl7">
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