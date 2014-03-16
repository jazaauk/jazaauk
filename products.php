<?
	include("includes/db.php");
	include("includes/functions.php");
	
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
		$pid=$_REQUEST['productid'];
		addtocart($pid,1);
		header("location:shoppingcart.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GameOz</title>
    <script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
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
          <form name="form1">
            <input type="hidden" name="productid" />
            <input type="hidden" name="command" />
          </form>
          <div align="center">
            <h1 align="center">PC games</h1>
            <p align="center">
              <script type="text/javascript" src="http://100widgets.com/js_data.php?id=73"></script>
            </p>
            <table border="0" cellpadding="2px" width="600px">
              <?
			$result=mysql_query("select * from products");
			while($row=mysql_fetch_array($result)){
		?>
              <tr>
                <td><img src="<?=$row['picture']?>" /></td>
                <td><b>
                  <?=$row['name']?>
                  </b><br />
                  <?=$row['description']?>
                  <br />
                  Price:<big style="color:green"> £
                    <?=$row['price']?>
                    </big><br />
                  <br />
                  <input type="button" value="Buy" onClick="addtocart(<?=$row['serial']?>)" /></td>
              </tr>
              <tr>
                <td colspan="2"><hr size="1" /></td>
                <? } ?>
            </table>
          </div>
          <p>&nbsp;</p>

          
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
