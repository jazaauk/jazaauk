<?php
//Start - so we can use session variables
ob_start();
session_start();
// Check if we have already created a authenticated session
if (isset($_SESSION["authenticatedUser"]))
{
  $_SESSION["message"] = "You are already logged in as ". $_SESSION['authenticatedUser'];
  {
  header("Location: user.php");
}
  
}
// No session established, no POST variables
 //Display the login page 
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GameOz</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="index.php">Home</a></li>
          <li class="active"><a href="products.php">Store</a></li>
          <li class="active"><a href="http://news.galotaibi.co.uk">News</a></li>
          <li class="active"><a href="login.php">Login</a></li>
        </ul>
        <h2 class="muted">GameOz</h2>
      </div>

      <hr>

      <div class="row">
        <div class="span6">
          <h4>&nbsp;</h4>
<?php  
  //Output the error message - should really put the styling in a stylesheet 
   if (isset($_SESSION['message'])) 
    echo "<h3><font color=red>".$_SESSION['message']."</font></h3>"; 
  ?>
        </p>
        <div align="center">
          <!-- Display the Table and the Form -->
          <table width="76%" border="0">
            <tr>
              <td height="77" valign="top"><form method="post" action="loginaction.php">
                <table width="628" height="75"  border="0" cellpadding="1" cellspacing="0">
                
                  <!--DWLayoutTable-->
                  <tr>
                    <td width="214">Email</td>
                    <td width="243"><input type="text" size=25 maxlength=25 name="username" /></td>
                    <td><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr>
                    <td>Password:</td>
                    <td><input type="password" size=25 maxlength=25 name="password" /></td>
                    <td width="165"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr>
                    <td ><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td><input name="submit" type="submit" value="Log in" /></td>
                  </tr>
                  <tr>
                    <td ><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td><p><a href="signup.php">Signup Now</a></p></td>
                  </tr>
<tr></tr>
                </table>
              </form></td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </div>
      </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; GameOz 2013</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
