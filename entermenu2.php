<?php include 'em1.php'; ?>
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
 
  <p id="head">Enter for Tuesday</p>
</div>
</header>
</div>
 
<h1 class="break" onclick="toggle();">Breakfast:</h1>
<div class="brk" align="center" >
<p>option1</p>
<form action="entermenu3.php" method="post">
	<select name="tuebop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="tuebop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="tuebop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="tuebop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuebop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="togglelch();">Lunch:</h1>
<div class="lch" align="center">
<p>option1</p>
	<select name="tuelop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop1sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop1sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>	
<p>option2</p>
	<select name="tuelop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop2sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop2sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="tuelop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop3sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop3sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="tuelop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop4sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop4sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option5</p>
	<select name="tuelop5sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop5sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop5sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop5sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop5sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop5sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuelop5sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="togglesnk();">Snacks:</h1>
<div class="snk" align="center">
<p>option1</p>
	<select name="tuesop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuesop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="tuesop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuesop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="toggledin();">Dinner:</h1>
<div class="din" align="center">
<p>option1</p>
	<select name="tuedop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop1sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop1sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="tuedop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop2sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop2sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="tuedop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop3sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop3sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="tuedop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop4sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop4sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option5</p>
	<select name="tuedop5sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop5sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop5sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop5sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop5sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop5sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="tuedop5sl7">
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