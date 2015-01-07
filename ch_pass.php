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
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		
		<script type="text/javascript">

		<!--Here we score the password-->
		
function scorePassword(pass) {
    var score = 0;
    if (!pass)
        return score;

    // award every unique letter until 5 repetitions
    var letters = new Object();
    for (var i=0; i<pass.length; i++) {
        letters[pass[i]] = (letters[pass[i]] || 0) + 1;
        score += 5.0 / letters[pass[i]];
    }

    // bonus points for mixing it up
    var variations = {
        digits: /\d/.test(pass),
        lower: /[a-z]/.test(pass),
        upper: /[A-Z]/.test(pass),
        nonWords: /\W/.test(pass),
    }

    variationCount = 0;
    for (var check in variations) {
        variationCount += (variations[check] == true) ? 1 : 0;
    }
    score += (variationCount - 1) * 10;

    return parseInt(score);
}

<!--Passing the password from the first filed-->

function password()
{
   var pawd1=document.getElementById('new_password1').value;
   var palt=document.getElementById('pwd1');
 if(pawd1.length==0)
  {
    palt.innerHTML="<font color='red'> Invalid PassWord</font>";
    document.getElementById('new_password1').focus();
   return false;
  }
 else
  {
    palt.innerHTML="";
    return true;
  }

}


<!--Its the second Field-->
function pass()
{
  var pawd1=document.getElementById('new_password1').value;
  var pawdcon2=document.getElementById('new_password2').value;
  var palt=document.getElementById('pwd1');
  var pcalt=document.getElementById('pwd_con1');
  
 if(pawdcon2.length==0)  {
    pcalt.innerHTML="<font color='red'> Invalid Password Cofirm </font>";
    pawdcon2.focus();
   return false;
    }
   
 else if(pawd1!=pawdcon2)
  {
    pcalt.innerHTML="";
    palt.innerHTML="<font color='red'> Password Mismatch</font>";
    return false;
  }else{
    palt.innerHTML="";
    pcalt.innerHTML="<font color='green'>Password Confirmed!!</font>";
    return true;
  }
}

		</script>
		
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Login and Registration Form <span>IITP Mess Website</span></h1>
            </header>
			
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
					
                    <div id="wrapper">
                        <div id="login" class="animate form">
						
                            <form  action="login3.php" method='POST' autocomplete="on"> 
								
								<p><h1>Log in</h1></p> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" >Your Username </label>
                                    <input id="username" name="username"  required="required" type="text" placeholder="eg. utkarsh.cs12"/><span id="name1"></span>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. IITP" /> 
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p"> New Password</label>
                                    <input id="new_password1" name="new_password1" onKeyup="password()" required="required" type="password" placeholder="eg. IITPatna" /> <span id="pwd1"></span>
                                </p>
								<p>
                                    <label for="password" class="youpasswd" data-icon="p"> Retype password </label>
                                    <input id="new_password2" name="new_password2" onKeyup="pass()" required="required" type="password" placeholder="eg. IITPatna" /> <span id="pwd_con1"></span>
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Go!!!" />
								</p>
                                
								<p class="change_link">
									Not a member yet ?
									<a href="login.php#toregister" class="to_register">Sign Up</a>
								</p>
                            </form>
							
							
                        </div>
						
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>