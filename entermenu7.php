<?php include 'em6.php';?>
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
 
  <p id="head">Enter for Sunday</p>
</div>
</header>
</div>
 
<h1 class="break" onclick="toggle();">Breakfast:</h1>
<div class="brk" align="center">
<p>option1</p>
<form action="menuentered.php" method="post">
	<select name="sunbop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="sunbop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="sunbop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="sunbop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunbop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="togglelch();">Lunch:</h1>
<div class="lch" align="center">
<p>option1</p>
	<select name="sunlop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop1sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop1sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>	
<p>option2</p>
	<select name="sunlop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop2sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop2sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="sunlop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop3sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop3sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="sunlop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop4sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop4sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option5</p>
	<select name="sunlop5sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop5sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop5sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop5sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop5sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop5sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunlop5sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="togglesnk();">Snacks:</h1>
<div class="snk" align="center">
<p>option1</p>
	<select name="sunsop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunsop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="sunsop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sunsop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="toggledin();">Dinner:</h1>
<div class="din" align="center">
<p>option1</p>
	<select name="sundop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop1sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop1sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="sundop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop2sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop2sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="sundop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop3sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop3sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="sundop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop4sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop4sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option5</p>
	<select name="sundop5sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop5sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop5sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop5sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop5sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop5sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="sundop5sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<br /><br />
<div align="center">
<input type="submit" value="Finish" /></div>
</form>
</div>
</body>
</html>