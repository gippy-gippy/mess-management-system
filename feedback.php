<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href='feedback.css' rel='stylesheet' type='text/css'>
        <style type="text/css">
		body{
			font-family:"Calibri";
			background: url(feedbackground.jpg) repeat  center fixed;
			background-position: fixed;
		}
                </style>
        <script src="extra.js"></script>
        <script src="feedbacks.js"></script>
    </head>
    <body>
        <div align="left">
            <a id="back" href="studhome.php">Go back</a>
        </div>
        <div id='til'>
            <h1>Welcome to Student Feedback Section</h1>
            <p><u><h2>Yesterday's Feedback</h2></u></p>
             <?php
                if ((isset($_COOKIE['already_given']) && $_COOKIE['already_given'] == 1) || (isset($_COOKIE['feedback_button_checked']) && $_COOKIE['feedback_button_checked'] == 0) ) {
                   if(isset($_COOKIE['feedback_button_checked']) && $_COOKIE['feedback_button_checked'] == 0)
                   {echo "<h3>Feedback Submission Unsuccessful.All buttons are not checked</h3>";}
                    else {
                        echo "<h3>Feedback Submission Unsuccessful.Repeated Submission </h3>";
                    }    
                }
                ?>
        </div>
        
             <form action="feedbackverify.php" method="post">
                <div id="wrapper">
                <h2 class="accordion"><a href="#">Session</a></h2>
                <div class="accContainer">
                    <div class="block">
                        <input id="ses" name="ses" value="breakfast" type="radio"/> Breakfast</br>
                        <input id="ses" name="ses" value="lunch" type="radio"/> Lunch</br>
                        <input id="ses" name="ses" value="snacks" type="radio"/> Snacks</br>
                        <input id="ses" name="ses" value="dinner" type="radio"/> Dinner</br>
                    </div>
                </div>
                <h2 class="accordion"><a href="#">Quality And Hygiene</a></h2>
                <div class="accContainer">
                    <div class="block">
                        <input id="quality" name="quality" value="bad" type="radio"/> Bad</br>
                        <input id="quality" name="quality" value="below average" type="radio"/> Below Average</br>
                        <input id="quality" name="quality" value="average" type="radio"/> Average</br>
                        <input id="quality" name="quality" value="good" type="radio"/> Good</br>
                        <input id="quality" name="quality" value="very good" type="radio"/> Very Good</br>
                    </div>
                </div>
                <h2 class="accordion"><a href="#">Nutrition</a></h2>
                <div class="accContainer">
                    <div class="block">
                        <input id="nutrition" name="nutrition" value="bad" type="radio"/> Bad</br>
                        <input id="nutrition" name="nutrition" value="below average" type="radio"/> Below Average</br>
                        <input id="nutrition" name="nutrition" value="average" type="radio"/> Average</br>
                        <input id="nutrition" name="nutrition" value="good" type="radio"/> Good</br>
                        <input id="nutrition" name="nutrition" value="very good" type="radio"/> Very Good</br>
                    </div>
                </div>
                <h2 class="accordion"><a href="#">Taste</a></h2>
                <div class="accContainer">
                    <div class="block">
                        <input id="taste" name="taste" value="bad" type="radio"/> Bad</br>
                        <input id="taste" name="taste" value="below average" type="radio"/> Below Average</br>
                        <input id="taste" name="taste" value="average" type="radio"/> Average</br>
                        <input id="taste" name="taste" value="good" type="radio"/> Good</br>
                        <input id="taste" name="taste" value="very good" type="radio"/> Very Good</br>
                    </div>
                </div>
                </div>
                 <div id="feedbutton">
                <input type="submit" name="Submit" id="feed"value="Submit"/>
                </div>
            </form>
        
       
    </body>



</html>
