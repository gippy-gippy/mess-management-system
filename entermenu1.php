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
 
  <p id="head">Enter for Monday</p>
</div>
</header>
</div>
 
<h1 class="break" onclick="toggle();">Breakfast:</h1>
<div class="brk"  align="center">

<p>Option1</p>															<!-- option1 of monday breakfast-->
<form action="entermenu2.php" method="post">
	<select name="monbop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop1sl5">
		<option value="none">-Select Item-</option>					
		<?php include 'itemheader1.php'; ?>		
	</select>

<p>Option2</p>															<!-- option2 of monday breakfast-->
	<select name="monbop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
<p>Option3</p>
	<select name="monbop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
<p>Option4</p>
	<select name="monbop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monbop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
</div>
<h1 class="break" onclick="togglelch();">Lunch:</h1>
<div class="lch" align="center">
<p>Option1</p>																		<!-- option1 of monday lunch-->
	<select name="monlop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop1sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop1sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>	
<p>Option2</p>
	<select name="monlop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop2sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop2sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
<p>Option3</p>																		<!-- option3 of monday lunch-->
	<select name="monlop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop3sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop3sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
<p>Option4</p>
	<select name="monlop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop4sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop4sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
<p>Option5</p>
	<select name="monlop5sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop5sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop5sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop5sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop5sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop5sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monlop5sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
</div>
<h1 class="break" onclick="togglesnk();">Snacks:</h1>
<div class="snk" align="center">
<p>Option1</p>
	<select name="monsop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monsop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
<p>Option2</p>
	<select name="monsop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="monsop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
</div>
<h1 class="break" onclick="toggledin();">Dinner:</h1>
<div class="din" align="center">													<!-- options of monday dinner-->
<p>Option1</p>
	<select name="mondop1sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop1sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop1sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop1sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop1sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop1sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop1sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
<p>Option2</p>
	<select name="mondop2sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop2sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop2sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop2sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop2sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop2sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop2sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
<p>Option3</p>
	<select name="mondop3sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop3sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop3sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop3sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop3sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop3sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop3sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
<p>Option4</p>
	<select name="mondop4sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop4sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop4sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop4sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop4sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop4sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop4sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
<p>Option5</p>
	<select name="mondop5sl1">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop5sl2">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop5sl3">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop5sl4">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop5sl5">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop5sl6">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
	<select name="mondop5sl7">
		<option value="none">-Select Item-</option>
		<?php include 'itemheader1.php'; ?>		
	</select>
</div>
<br /><br />

<div align="center"><input type="submit" value="Next" align="center"/></div>
</form>
</div>
</body>
</html>