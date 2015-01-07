
<!-- Script by hscripts.com -->

<script type="text/javascript">

var pass_strength;

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
		pass_strength = "<b><font style='color:olive'>Very strong</font></b>";
	else if (IsEnoughLength(pwd,8) && HasMixedCase(pwd) && (HasNumeral(pwd) || HasSpecialChars(pwd)))
		pass_strength = "<b><font style='color:Blue'>Strong</font></b>";
	else if (IsEnoughLength(pwd,8) && HasNumeral(pwd))
		pass_strength = "<b><font style='color:Green'>Good</font></b>";
	else
		pass_strength = "<b><font style='color:red'>Weak</font></b>";

	document.getElementById('pwd_strength').innerHTML = pass_strength;
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
</script>
<!-- Script by hscripts.com -->




<!-- Script by hscripts.com -->
<form name=df style='margin:0px;'>
<input type=password length=20 name='pwd' onkeyup='CheckPasswordStrength(this.value);'>
<div id='pwd_strength'></div>
</form>
<!-- Script by hscripts.com -->
