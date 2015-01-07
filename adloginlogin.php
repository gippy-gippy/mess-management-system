<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 

        <link rel="stylesheet" type="text/css" href="masterstyle.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom2.css" />

        <link rel="stylesheet" href="css/box2.css">
        
        <style type="text/css">
		body{
			background: url(masterinfo.jpg) no-repeat  center fixed;
			background-position: fixed;
		}
                </style>

        <script type="text/javascript">
  var unae;
  var pass;
            function isnotempty()
            {
                var nae = document.getElementById('username').value;
                var nalt = document.getElementById('name');
                if (nae.length == 0)
                {
                    unae=0;
                    nalt.innerHTML = "<font color='red'>Please Enter Admin name</font>";
                    document.getElementById('name').focus();
                    return false;
                }
                else {
                    
                    unae = 1;
                    return true;
                }
            }

            function isnotfilled()
            {
                var nam = document.getElementById('password').value;
                var palt = document.getElementById('login_result');
                if (nam.length == 0)
                {
                    
                    pass=0;
                    palt.innerHTML = "<font color='red'>Enter your Password </font>";
                    document.getElementById('login_result').focus();
                    return false;
                }
                else {

                    pass = 1;
                    return true;
                }
            }
     
            

        </script>
    </head>

    <body>
        
        <div class="container" id="logincon">
            <div id="head1">
                <h1> <span><u>Admin Log In</u></span></h1>
            </div>
            <div id="warn2">
            <?php 
        if(isset($_COOKIE['new_register']) && $_COOKIE['new_register']== 1 ){
										echo "<p><h2>Welcome In</h2></p>";
									}
        
									elseif(isset($_COOKIE['incorrect_credential']) && $_COOKIE['incorrect_credential']== 1 ){
										echo "<p><h2>You have Entered wrong Credentials</h2></p>";
									}
                                                                
                                                                       
									
								?> 
            </div>
            <div id="wrap">              
                <form  action='postlogintem.php' method='POST' > 


                    <p> 
                        <h3><label for="username" class="uname" data-icon="u" >Admin name</label>
                        <input id="username" name="username" required="required" type="text" /><span id="name"></span></h3>
                    </p>
                    <p>
                        <h3><label for="password" class="youpasswd" data-icon="p">password</label>
                        <input id="password" name="password" required="required" type="password" /> <span id="login_result"></span></h3>
                    </p>
                    <p class="login button"> 
                        <input type="submit" value="Login" /> 
                    </p>

                    <p class="change_link">
                        <?php 
                         setcookie("fields_valid",1, time() + 3600); 
                         setcookie("already_exist",0, time() + 3600); 
                        ?>
                        <h3>Not a member yet ?
                        <a href="adlogin.php" class="to_register">Sign Up</a></h3>
                    </p>
                </form>	        
            </div>	
        </div>
    </body>
</html>