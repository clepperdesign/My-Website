<head>
    <link rel="stylesheet" type="text/css" href="main.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/css/uikit.min.css" />
    
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit-icons.min.js"></script>
    <title>Clepper Design - Contact</title>
    </head>
    <body>
    <div class = 'uk-flex uk-flex-center margin' > <!--Header-->
        <div class='header-left uk-width-1-3'>
            <img src ='C logo.png' class='logo' alt='Clepper Design Logo'>
        </div>
        <div class='header-right uk-width-2-3'>
            <h1><span class='header-text'>Clepper Design Services</span> </h1>
        </div>
    </div>
    <!--End Header-->
    <!--Nav Bar-->
    <div class='nav margin'>
            <ul class='nav-ul'>
                <li class='nav-li'><a href="homepage.html">Home</a></li>
                    <li class='nav-li'><a href="about.html">About</a></li>
                    <li class='nav-li selected'><a href="contact.html"><span class='sel-text'><b>Contact</b></span></a></li> 
                  </ul> 
    </div>
    <!-- End Nav-->
    <div class = 'body margin'>
    <h2 class>
        Interested? Fill out the form below, describing your project needs in detail.
<!-- Begin PHP Form -->
<!-- Code borrowed from W3 Schools website; will update with own code soon -->
<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email =  $comment = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and whitespace allowed"; 
    }
  } 
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  } 
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!--Begin Contact Form -->
<h2>Contact:</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Describe your project: <br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Contact" class='submit-button'>  
</form>

</div>
</body>