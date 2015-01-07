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

            var pass_strength = "";

            function IsEnoughLength(str, length)
            {
                if ((str == null) || isNaN(length))
                    return false;
                else if (str.length < length)
                    return false;
                return true;

            }

            function HasMixedCase(passwd)
            {
                if (passwd.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))
                    return true;
                else
                    return false;
            }

            function HasNumeral(passwd)
            {
                if (passwd.match(/[0-9]/))
                    return true;
                else
                    return false;
            }

            function HasSpecialChars(passwd)
            {
                if (passwd.match(/.[!,@,#,$,%,^,&,*,?,_,~]/))
                    return true;
                else
                    return false;
            }


            function CheckPasswordStrength(pwd)
            {
                if (IsEnoughLength(pwd, 14) && HasMixedCase(pwd) && HasNumeral(pwd) && HasSpecialChars(pwd))
                    pass_strength = "<b><font style='color:olive'>Very strong</font></b>";
                else if (IsEnoughLength(pwd, 8) && HasMixedCase(pwd) && (HasNumeral(pwd) || HasSpecialChars(pwd)))
                    pass_strength = "<b><font style='color:Blue'>Strong</font></b>";
                else if (IsEnoughLength(pwd, 8) && HasNumeral(pwd))
                    pass_strength = "<b><font style='color:Green'>Good</font></b>";
                else
                    pass_strength = "<b><font style='color:red'>Weak</font></b>";


                document.getElementById('pwd1').innerHTML = pass_strength;
            }

            var namee_val;
            var namee_val2;

            var pawd1_val;
            var pawdcon2_val;
            var elem_val;
            var elem1_val;


            function isAlphabet()
            {
                var alphaExp = /^[A-Za-z ][A-Za-z ]*$/;
                var namee = document.getElementById('name').value;
                var nalt = document.getElementById('name1');
                if (namee != "")
                {
                    if (!namee.match(alphaExp))
                    {
                        namee_val = 0;
                        nalt.innerHTML = "<font color='red'> Invalid Characters </font>";
                        document.field.name.focus();
                        document.field.name.value = "";
                        return false;
                    } else {
                        namee_val = 1;
                        nalt.innerHTML = "";
                        return true;
                    }
                }
                else if (namee.length == 0) {
                    namee_val = 0;
                    nalt.innerHTML = "<font color='red'> Invalid Name</font>";
                    document.getElementById('name').focus();
                    return false;
                }
            }

            function password()
            {
                var pawd1 = document.getElementById('passwordsignup').value;
                var palt = document.getElementById('pwd1');
                if (pawd1.length == 0)
                {
                    pawd1_val = 0;
                    palt.innerHTML = "<font color='red'> Invalid PassWord</font>";
                    document.getElementById('passwordsignup').focus();
                    return false;
                }
                else
                {
                    pawd1_val = 1;
                    palt.innerHTML = pass_strength;
                    return true;
                }

            }

            function isnotfilled()
            {
                var nam = document.getElementById('usernamesignup').value;
                var nalt = document.getElementById('name2');
                if (nam.length == 0)
                {
                    namee_val2 = 0;
                    nalt.innerHTML = "<font color='red'>Enter Your Admin Name </font>";
                    document.getElementById('usernamesignup').focus();
                    return false;
                }
                else {

                    namee_val2 = 1;
                    return true;
                }
            }


            function pass()
            {
                var pawd1 = document.getElementById('passwordsignup').value;
                var pawdcon2 = document.getElementById('passwordsignup_confirm').value;
                var palt = document.getElementById('pwd1');
                var pcalt = document.getElementById('pwd_con1');

                if (pawdcon2.length == 0) {
                    pawdcon2_val =
                            pcalt.innerHTML = "<font color='red'> Invalid Password Cofirm </font>";
                    pawdcon.focus();
                    return false;
                }

                else if (pawd1 != pawdcon2)
                {
                    pawdcon2_val = 0;
                    pcalt.innerHTML = "";
                    palt.innerHTML = "<font color='red'> Password Mismatch</font>";
                    return false;
                } else {
                    pawdcon2_val = 1;
                    palt.innerHTML = "";
                    pcalt.innerHTML = "";
                    return true;
                }
            }

            

            
            


        </script>
    </head>

    <body>

        <div class="container">
            <div id="head">
                <h1> <span><u>Admin Sign Up</u></span></h1>
            </div>
            <div id="warn1">
                <?php
                if ((isset($_COOKIE['already_exist']) && $_COOKIE['already_exist'] == 1) || (isset($_COOKIE['fields_valid']) && $_COOKIE['fields_valid'] == 0) ) {
                   if(isset($_COOKIE['fields_valid']) && $_COOKIE['fields_valid'] == 0)
                   {echo "<p><h2>Registration Unsuccessful.Invalid fields </h2></p>";}
                    else {
                        echo "<p><h2>Registration Unsuccessful.Entered Admin name Already exists </h2></p>";
                    }
                   
                }
                
                ?>	
            </div>

            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->

            <div id="wrapper">

                <!--Here your signup data is send to signup.php-->

                <form action="adsignup.php" method="POST" > 

                    <h1> Become A Member Of Our Admin Panel </h1> 
                    <p>
                        <label for="name" data-icon="u">Name:</label>
                        <input type="text" onKeydown="isAlphabet()"  name="name" id="name" required="required" placeholder="om"/><span id="name1"></span>
                    </p>
                    <p> 
                        <label for="usernamesignup" class="uname" data-icon="u">Admin Name</label>
                        <input id="usernamesignup"  onKeyup='isnotfilled()'name="usernamesignup" required="required" type="text" placeholder="omi@cool" /><span id="name2"></span>
                    </p>
                    <p> 
                        <label for="passwordsignup" class="youpasswd" data-icon="p">Account password </label>
                        <input id="passwordsignup"  onKeyup='password()'  onKeydown='CheckPasswordStrength(this.value)' name="passwordsignup" required="required" type="password" placeholder="eg.!90EO"/><span id="pwd1"></span>
                    </p>

                    <p> 
                        <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                        <input id="passwordsignup_confirm"  onKeyup='pass()' name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/><span id="pwd_con1"></span>
                    </p>
                    		

                    <p class="signin"> 
                        <input type="submit"   value="Ready To Become Admin"/> 
                    </p>

                    <p class="change_link">  
                        Already Registered ?
                        <a href="adloginlogin.php" class="to_register"> Go and log in </a>
                    </p>
                    <?php
                    setcookie("incorrect_credential", 0, time() + 3600);
                    ?>
                </form>
            </div> 
        </div>
    </body>
</html>