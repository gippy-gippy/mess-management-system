<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->

<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Login PHP</title>
        <link rel="stylesheet" href="masterstyle.css" />
        <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
        <style type="text/css">
		body{
			background: url(masterinfo.jpg) no-repeat  center fixed;
			background-position: fixed;
		}
                </style>
        <script type="text/javascript" src="jquery-1.7.min.js"></script>
        <script>
            function isnotempty()
            {
                var pass = document.getElementById('master').value;
                var nalt = document.getElementById('mpwd1');
                if (pass = "")
                {   <?php echo 'baby';
                 ?>
                    alert('hi')
                    nalt.innerHTML = "<font color='red'>Left master Password Field empty</font>";
                    document.getElementById('master').focus();
                    return false;
                }
                else {
                    return true;
                }
            }

            $(document).ready(function() {
                $("#login").click(function() {

                    var action = $("#lg-form").attr('action');
                    var form_data = {
                        username: $("#username").val(),
                        password: $("#password").val(),
                        is_ajax: 1
                    };

                    $.ajax({
                        type: "POST",
                        url: action,
                        data: form_data,
                        success: function(response)
                        {
                            if (response == "success")
                                $("#lg-form").slideUp('slow', function() {
                                    $("#message").html('<p class="success">You have logged in successfully!</p><p>Redirecting....</p>');
                                });
                            else
                                $("#message").html('<p class="error">ERROR: Invalid username and/or password.</p>');
                        }
                    });
                    return false;
                });
            });

            function allselected()
            {
                if (document.getElementById('aryabhatta').checked) {
                    //aryabhatta radio button is checked
                  
                } else if (document.getElementById('gautam').checked) {
                    //Female radio button is checked
                }
                else
                {
                    alert("You have left the radio button unchecked");
                }

            }

        </script>
    </head>
    <body>
        <div id="warn0">
        <?php 
									if(isset($_COOKIE['incorrect_master']) && $_COOKIE['incorrect_master']==0){
										echo "<p><h2>Incorrect master password</h2></p>";
									}
									
									
								?> 
            </div>
        <div class="lg-container">
            <h1>Admin login And Sign Up</h1>
            <form onsubmit="allselected()" action="verify.php" id="lg-form" name="lg-form" method="POST" autocomplete="on">
                
                <div>
                    <p> 
                        <label for="master" class="youpasswd" data-icon="p">Enter Master password here:</label>
                        <input id="master"  name="master" onKeyup='isnotempty()'  required="required" type="password" placeholder='Master password here'/><span id="mpwd1"></span>
                    </p>
                </div>
                <div>				
                    <input id="gobutton" type="submit" value="Submit Master password" />
                </div>
 
            </form>
            <div id="message"></div>
        </div>
    </body>
</html>






