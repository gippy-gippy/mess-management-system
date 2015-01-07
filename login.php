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
    <link rel="stylesheet" href="css/box.css">
<script type="text/javascript">

var pass_strength="";

function IsEnoughLength(str,length)
{
  if ((str == null) || isNaN(length))
    return false;
  else if (str.length < length)
    return false;
  return true;
  
}

function HasMixedCase(passwd)
{
  if(passwd.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))
    return true;
  else
    return false;
}

function HasNumeral(passwd)
{
  if(passwd.match(/[0-9]/))
    return true;
  else
    return false;
}

function HasSpecialChars(passwd)
{
  if(passwd.match(/.[!,@,#,$,%,^,&,*,?,_,~]/))
    return true;
  else
    return false;
}


function CheckPasswordStrength(pwd)
{
  if (IsEnoughLength(pwd,14) && HasMixedCase(pwd) && HasNumeral(pwd) && HasSpecialChars(pwd))
    pass_strength = "<b><font style='color:olive'>Very strong</font></b> <b><font style='color:orange'>Strength 100%</font></b>";
  else if (IsEnoughLength(pwd,8) && HasMixedCase(pwd) && (HasNumeral(pwd) || HasSpecialChars(pwd)))
    pass_strength = "<b><font style='color:Blue'>Strong</font></b> <b><font style='color:orange'>Strength 75%</font></b>";
  else if (IsEnoughLength(pwd,8) && HasNumeral(pwd))
    pass_strength = "<b><font style='color:Green'>Good</font></b> <b><font style='color:orange'>Strength 50%</font></b>";
  else
    pass_strength = "<b><font style='color:red'>Weak</font></b> <b><font style='color:orange'>Strength 25%</font></b>";

      
    //document.getElementById('pwd_con1').innerHTML = pass_strength;
}
function ctck()
{
     var sds = document.getElementById("dum");
     if(sds == null){
        alert("You are using a free package.\n You are not allowed to remove the tag.\n");
     }
     var sdss = document.getElementById("dumdiv");
     if(sdss == null){
         alert("You are using a free package.\n You are not allowed to remove the tag.\n");
     }
}
document.onload ="ctck()";

//timer code
function DisplayTime(){
if (!document.all && !document.getElementById)
return
timeElement=document.getElementById? document.getElementById("curTime"): document.all.tick2
var CurrentDate=new Date()
var hours=CurrentDate.getHours()
var minutes=CurrentDate.getMinutes()
var seconds=CurrentDate.getSeconds()
if (minutes<=9) minutes="0"+minutes;
if (seconds<=9) seconds="0"+seconds;
var currentTime=hours+":"+minutes+":"+seconds;
timeElement.innerHTML="<font style='font-size:12px;font-weight:bold;'>"+currentTime+"</b>"
setTimeout("DisplayTime()",1000)
}
window.onload=DisplayTime

var namee_val=0;
var pawd1_val=0;
var pawdcon2_val=0;
var elem_val=0;
var elem1_val=0;


function isAlphabet()
{
  var alphaExp = /^[A-Za-z ][A-Za-z ]*$/;
  var namee=document.getElementById('name').value;
  var nalt=document.getElementById('name1');
  if(namee!="")
   {
      if(!namee.match(alphaExp))
      {
        
        namee_val=0;
       nalt.innerHTML="<font color='red'> Invalid Characters </font>";
       document.field.name.focus();
       document.field.name.value="";
         return false;  
       }else{
        nalt.innerHTML="";
      namee_val=1;
        return true; 
        }
   }
  else  if(namee.length==0) {
   namee_val=0;
   nalt.innerHTML="<font color='red'> Invalid Name</font>";
    document.getElementById('name').focus();
   return false;
    }
  
}

function password()
{
   var pawd1=document.getElementById('passwordsignup').value;
   var palt=document.getElementById('pwd1');
 if(pawd1.length==0)
  {
  pawd1_val=0;
    palt.innerHTML="<font color='red'> Invalid PassWord</font>";
    document.getElementById('passwordsignup').focus();
   return false;
  }
 else
  {
    palt.innerHTML=pass_strength;
  pawd1_val=1;
    return true;
  }

}

function pass()
{
  var pawd1=document.getElementById('passwordsignup').value;
  var pawdcon2=document.getElementById('passwordsignup_confirm').value;
  var palt=document.getElementById('pwd1');
  var pcalt=document.getElementById('pwd_con1');
  
 if(pawdcon2.length==0){
 pawdcon2_val=0;
    pcalt.innerHTML="<font color='red'> Invalid Password Cofirm </font>";
    pawdcon2.focus();
   return false;
    }
   
 else if(pawd1!=pawdcon2)
  {
  pawdcon2_val=0;
    pcalt.innerHTML="";
    palt.innerHTML="<font color='red'> Password Mismatch</font>";
    return false;
  }else{
    palt.innerHTML="";
    pcalt.innerHTML="";
  pawd1_val=1;
     pawdcon2_val=1;
  return true;
  }
}

function isContactNumeric()
{
  var elem=document.getElementById('contact').value;
  var nalt=document.getElementById('contact1');
 if(elem!="")
 {
    var numericExpression = /^[0-9]+$/;
    if(elem.match(numericExpression))
    {
    if(elem.length==10){
      elem_val=2;
      nalt.innerHTML="";
    }
    else{
    elem_val=1;
    }
         return true;
       }
    
    else{
      elem_val=0;
      nalt.innerHTML="<font color='green'> Numeric Values Only</font>";
      document.getElementById('contact').focus();
      document.field.contact.focus();
      document.getElementById('contact').value="";
      document.field.contact.value="";
       return false;
    }
  }
  else if(elem.length==0)  {
  elem_val=0;
    nalt.innerHTML="<font color='orange'> Enter 10 digit Number</font>";
     document.field.contact.focus();
   return false;
    }
}

function isRoomNumeric()
{
  var elem1=document.getElementById('roomnumber').value;
  var nalt=document.getElementById('room1');
 if(elem1!="")
 {
    var numericExpression = /^[0-9]+$/;
    if(elem1.match(numericExpression))
    {
      elem1_val=1;
         nalt.innerHTML="";
         return true;
       }
    
    else{
      elem1_val=0;
      nalt.innerHTML="<font color='green'> Numeric Values Only or Not of 3 Digits</font>";
        document.getElementById('room1').focus();
      document.field.roomnumber.focus();
      document.getElementById('room1').value="";
      document.field.roomnumber.value="";
       return false;
    }
  }
  else if(elem1.length==0)  {
    elem1_val=0;
    nalt.innerHTML="<font color='orange'> Enter 3 digit Number</font>";
     document.field.roomnumber.focus();
   return false;
    } 
}


function Validate(){
if(namee_val==1 && pawd1_val==1 && pawdcon2_val==1 && elem_val==2 && elem1_val==1){
            document.form.submit();
            return true;
        }
        else{
      alert("The Fields are Invalid");
        return false;
      }
    }

function look(){
alert(namee_val);
alert(pawd1_val);
alert(pawdcon2_val);
alert(elem_val);
alert(elem1_val);
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


          <form action="ch_pass.php" method="POST">
                    <input id="gobutton" style="margin-left:1000px;" type="submit" value="Change Password!!" /> <!--the text in the quotes after value will appear on the button-->       
          </form>


          <div id="wrapper">
                        <div id="login" class="animate form">
            
                            <form  action='login2.php' method='POST' autocomplete="on"> 
                
                <?php 
                  if(isset($_COOKIE['Just_Entered_the_user']) && $_COOKIE['Just_Entered_the_user']==1){
                    echo "<p><h1>User Created Congratulations!! Log in</h1></p>";
                  }
                  elseif(isset($_COOKIE['login_entry']) && $_COOKIE['login_entry'] == 0){
                    echo "<p><h1>Incorrect Username or Password !!!!</h1></p>";
                  }
                  elseif(isset($_COOKIE['pass_ch_Success']) && $_COOKIE['pass_ch_Success'] == 1){
                    echo "<p><h1>Password Changed SuccesssFully !!!!</h1></p>";
                  }
                  elseif(isset($_COOKIE['pass_ch_Success']) && $_COOKIE['pass_ch_Success'] == 0){
                    echo "<p><h1>password Confirmation failed!!! or user does not Exist!!</h1></p>";
                  }
                  else{
                    echo "<p><h1>Log in</h1></p>";
                  }
                  //Deleting the coookie;
                  setcookie('pass_ch_Success',0,time()-3600);
                  setcookie("login_entry",0,time()-3600);
                  setcookie("Just_Entered_the_user",1,time()-3600);
                  setcookie("pass_ch_Success",0,time()-3600);

                ?> 
                <p> 
                                    <label for="username" class="uname" data-icon="u" >Your Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="eg. utkarsh.cs12"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. IITP" /> <span id="login_result"></span>
                                </p>
                                <p class="keeplogin"> 
                  <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                  <label for="loginkeeping">Keep me logged in</label>
                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
                </p>
                                
                <p class="change_link">
                  Not a member yet ?
                  <a href="#toregister" class="to_register">Sign Up</a>
                </p>
                            </form>
              
              
                        </div>
            


            <!--Here your signup data is send to mysuperscript.php-->
                        <div id="register" class="animate form" >
          <form   onsubmit="return Validate()"  action="signup.php"  method="POST" autocomplete="on"> 

              <?php

              if(isset($_COOKIE['user_already_exist']) && $_COOKIE['user_already_exist'] == 1){
                    echo "<h1>Username already exist!!</h1>";
                  }
              else{
                    echo "<h1> Sign Up </h1>" ;
              }
                  //Deleting the cookie;
                  setcookie('user_already_exist',0,time()-3600);
              ?>    
                <p>
                  <label for="name" data-icon="u">NAME:</label>
                  <input type="text" onKeyup="isAlphabet()"  name="name" id="name" placeholder="Utkarsh"/><span id="name1"></span>
                </p>
                
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup"  name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup"  onKeyup=" CheckPasswordStrength(this.value)" onKeyup='password()'  onKeyup='CheckPasswordStrength(this.value)' name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/><span id="pwd1"></span>
                                </p>
                
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm"  onKeyup='pass()' name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/><span id="pwd_con1"></span>
                                </p>
                
                <p>
                <label for="roomnumber">ROOM NUMBER:</label>
                <input type="text"  name="roomnumber" id="roomnumber"  onKeyup="isRoomNumeric()" maxlength=3/><span id="room1"></span>
                </p>
                
                <p>
                <label for="contact">CONTACT NUMBER:</label>
                <input type="text"  name="contact" id="contact"  onKeyup="isContactNumeric()"   maxlength=10/><span id="contact1"></span>
                </p>    
                
                <p class="signin button"> 
                  <input type="submit"  value="Sign up"/> 
                </p>
                                
                <p class="change_link">  
                  Already a member ?
                  <a href="#tologin" class="to_register"> Go and log in </a>
                </p>
                            </form>
                        </div>
            
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>