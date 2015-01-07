<?php include 'em3.php';?>
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
 
  <p id="head">Enter for Thursday</p>
</div>
</header>
</div>
 
<h1 class="break" onclick="toggle();">Breakfast:</h1>
<div class="brk" align="center">
<p>option1</p>
<form action="entermenu5.php" method="post">
	<select name="thubop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="thubop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="thubop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="thubop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thubop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="togglelch();">Lunch:</h1>
<div class="lch" align="center">
<p>option1</p>
	<select name="thulop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop1sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop1sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>	
<p>option2</p>
	<select name="thulop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop2sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop2sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="thulop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop3sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop3sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="thulop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop4sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop4sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option5</p>
	<select name="thulop5sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop5sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop5sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop5sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop5sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop5sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thulop5sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="togglesnk();">Snacks:</h1>
<div class="snk" align="center">
<p>option1</p>
	<select name="thusop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thusop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="thusop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thusop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
</div>
<h1 class="break" onclick="toggledin();">Dinner:</h1>
<div class="din" align="center">
<p>option1</p>
	<select name="thudop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop1sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop1sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option2</p>
	<select name="thudop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop2sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop2sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option3</p>
	<select name="thudop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop3sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop3sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option4</p>
	<select name="thudop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop4sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop4sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
<p>option5</p>
	<select name="thudop5sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop5sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop5sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop5sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop5sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop5sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>
	</select>
	<select name="thudop5sl7">
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