<!DOCTYPE HTML>
<html>

<head>
  <title>Studhome_page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/styleforstud.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <style type="text/css">
    .notice{
      font-family: "Calibri";
      font-size: 18px;
      color: #234567; 
    }
  </style>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <!-- class="logo_colour", allows you to change the colour of the text -->
        <h1><a href="adminhome1.php">IITP <span class="logo_colour">mess adminpage</span></a></h1>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li><a href="adminhome1.php">Home</a></li>
          <li><a href="entermenu1.php">Enter Menu</a></li>
          <li><a href="controlvoting.php">Control Voting</a></li>
          <li><a href="finalizemenu.php">Finalize Menu</a></li>
          
          <li><a href="ITEMS.php">Edit Items</a></li>
		   <li><a href="index.html">Logout</a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <script type="text/javascript">
//store the quotations in arrays
quotes = [];
authors = [];
quotes[0] = "I have a new philosophy. I'm only going to dread one day at a time.";
authors[0] = "Charles Schulz";
quotes[1] = "Reality is the leading cause of stress for those in touch with it.";
authors[1] = "Jack Wagner";
quotes[2] = "Few things are harder to put up with than the annoyance of a good example.";
authors[2] = "Mark Twain";
quotes[3] = "The pure and simple truth is rarely pure and never simple.";
authors[3] = "Oscar Wilde";
quotes[4] = "There's no business like show business, but there are several businesses like accounting.";
authors[4] = "David Letterman";
quotes[5] = "Man invented language to satisfy his deep need to complain.";
authors[5] = "Lily Tomlin";

//calculate a random index
index = Math.floor(Math.random() * quotes.length);
</script>
<h1><script>document.write("<DL>\n");</script></h1>
<h1 id="quote"><script>document.write("<DT>" + "\"" + quotes[index] + "\"\n");</script></h1>
<h1 id="author"><script>document.write("<DD>" + "-- " + authors[index] + "\n");</script></h1>
<h1><script>document.write("</DL>\n");</script></h1>
</div>
      </div>
      <div id="content">
        <ul class="slideshow">
          <li class="show"><img width="900" height="350" src="images/1.jpg" alt="image one" /></li>
          <li><img width="800" height="350" src="images/2.jpg" alt="image two" /></li>
          <li><img width="706" height="316" src="images/3.jpg" alt="image three" /></li>
          <li><img width="706" height="316" src="images/4.jpg" alt="image four" /></li>
          <li><img width="706" height="316" src="images/5.jpg" alt="image five" /></li>
        </ul>
        <div id="content_item">
          <h1>Notice</h1>
          <?php
      $con = mysqli_connect('localhost','root','','mess');

      if(!$con)
      {
        echo "Failed to connect: ".mysqli_connect_error();
      }
    
      $result = mysqli_query($con,"SELECT * FROM ashokanotice ORDER BY id DESC LIMIT 5");
    ?>
    <ul class="notice">
    <?php 
      while($row = mysqli_fetch_array($result)){
        $notice = $row['notice'];
    ?>
    <ul><?php echo $notice; ?></ul>   
    <?php 
      } 
      mysqli_close($con); 
    ?>
    </ul>
        </div>
      </div>
    </div>
  
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
