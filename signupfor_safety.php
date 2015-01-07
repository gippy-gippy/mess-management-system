<html>
<body>

<?php 


function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

include("connection.php");
	
	
$username = test_input($_POST["usernamesignup"]);

$query = mysqli_query($con,"SELECT username FROM signupinfo WHERE username='$username' ");

  if (mysqli_num_rows($query) != 0)#more than 1 user;
  {
		header('Location: login.php#toregister');
		exit;
  }


$nameErr = $usernameErr = $contactErr =$messErr = $roomnumberErr = "";
$name = $username = $roomnumber = $contact = $password1=$mess="";
$n=$u=$p=$r=$c=$m=false;
	
	 if (empty($_POST["name"]))
    {$nameErr = "Name is required";}
  else
    {
      $name = test_input($_POST["name"]);
	  #Checking Validity of the code
      if (!preg_match("/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$/",$name))
      {
      $nameErr = "Only letters are allowed";      
      }
	  else {
      $n=true;    
      }
    }
	

  if (empty($_POST["usernamesignup"]))
    {$nameErr = "UserName is required";}
  else
    {
      $username = test_input($_POST["usernamesignup"]);
	  #Checking Validity of the code
      if (!preg_match("/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$/",$name))
      {
      $nameErr = "Invalid Username";      
      }
	  else {
      $u=true;    
      }
    }
    
	if($_POST["passwordsignup"]==$_POST["passwordsignup_confirm"] ){
	$p=true;
	$password1=$_POST["passwordsignup"];
	echo "Password is ".$password1;
	}
	else{
	header('Location: login.php#toregister');
		exit;
	}
	
	
	
	
  if (empty($_POST["roomnumber"]))
    {
      $roomnumberErr = "roomnumber is required";  
    }
  else
    {
      $roomnumber = test_input($_POST["roomnumber"]);
      if (!preg_match("/^[0-9]+$/",$roomnumber))
      {
      $roomnumberErr = "Only numbers are allowed";
      }
      else
      {
          $r=true;
      }
      
    }


  if (empty($_POST["contact"]))
    {$contactErr = "contact number is reqiured";}
  else
    {
      $contact= test_input($_POST["contact"]);
      if (!preg_match("/^[0-9]+$/",$contact))
      {
      $contactErr = "Only numbers are allowed";
      }
      else
      {
          $c=true;
      }
    }

  if (empty($_POST["mess"]))
    {$messErr = "mess name is required";}
  else
    {
      $mess = test_input($_POST["mess"]);
      if (!preg_match("/^[a-zA-Z]+$/",$mess))
      {
      $messErr = "mess name is not selected";
      }
      else
      {
          $m=true;
      }
    }


echo "n==".$n."m==".$m."c==".$c."u==".$u."p==".$p."r==".$r ;


if($n==1 && $u==1 && $p==1 && $c==1 && $m==1 && $r==1)
{
    echo "Coonecting to Database";
$con = mysqli_connect("localhost", "root", "", "getresponse");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }    
mysqli_query($con,"INSERT INTO `getresponse`.`signupinfo` (`id`, `votebld`, `commentbld`, `name`, `username`, `roomno`, `mess`, `contact`, `passwd`) VALUES (NULL, '0', '0', '$name', '$username', '$roomnumber', '$mess', '$contact', '$password1')");
}
 else {
        echo $nameErr; 
        echo $messErr;
}

include("close.php");
header("Location:login.php#tologin");
?>


</body>
</html>