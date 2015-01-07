<html>
<head>
	<title>Issue Notice</title>
	<link href="site.css" rel="stylesheet">
	<style type="text/css">
    body{
		
			background: url(notice.jpg) no-repeat  center fixed;
			background-position: fixed;
	}
	.notice{
      font-family: "Calibri";
      font-size: 18px;
      color: #234567; 
    }
	textarea{
		font-size:18px;
		font-family:"Calibri";
		resize:none;
		border-radius:10px 10px 10px 10px;
		border-color:#000000;
	}
	input[type="submit"] {
    font-size:28px;
	font-family:"Calibri";
    width: 150px; /* width of image */
    height: 40px; /* height of image */
    border-radius: 14px;
	background-color: #993333;
}
input[type="submit"]:hover{ 
  color: #AEC4D9;
  text-decoration: underline;
}
#back{
			text-decoration: none;
			font-size:25px;
			background-color: #FFFF99;
			zoom: 1;
			filter: alpha(opacity=50);
			opacity: 0.4;
			padding:5px 5px 5px 5px;
		}
		#back:hover{
			opacity: 1.0;
		}
  </style>
	
</head>
<body>
	<ul class="notice">
		<div align="right">
			<a id="back" href="adminhome1.php">Go back</a>
		</div>
	<h1>Issue Notice</h1>
		<div align="right">
		<form action="issue.php" method="post">
			<textarea name="notice" cols="70" rows="10"></textarea>
			<br />
			<input id="button" class="transparent" type="submit" value="Issue">
		</form>
		</ul>
	</div>
</body>
</html>