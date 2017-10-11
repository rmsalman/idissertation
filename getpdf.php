<?php 

$servername = "localhost";
$username = "syedathar_idis";
$password = "syedathar_idis";
$db = "syedathar_idis";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="Title" -->
<title>iDissertation |</title>
<!-- InstanceEndEditable --><!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dissertation Binding, Book Binding, Thesis Binding, Research" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/style3.css" /><!--Banner Text-->
<link rel="stylesheet" type="text/css" href="css/team.css" /><!--Banner Text-->
<link rel="stylesheet" type="text/css" href="css/styleandreea.css" /> 
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
  <style>
  	.table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 4px!important;
    overflow: hidden;
}
  </style>
</head>
<body>
	<div class="header">
		<div class="w3layouts_header_left">
			<ul>
					<li><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user" aria-hidden="true"></i> Log in</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign up</a></li>
		  </ul>

		</div>
		<div class="w3layouts_header_right">
			<ul>
				<li><i class="fa fa-phone" aria-hidden="true"></i>(+44) 020 8594 8950</li>
				<li><em class="fa fa-envelope" aria-hidden="true"></em><a href="contact.html">&nbsp; Contact@iDissertation.co.uk</a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
</div>

	<div class="top_heder_agile_info">
		<div class="w3ls_agile_header_inner">	
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a href="index.html"><img src="images/iDissertation-Logo.png" alt="logo"> iDissertation <span> Copy Shop</span></a></h1>
				</div>

			  <!-- Collect the nav links, forms, and other content for toggling -->

								<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <nav class="menu menu--juliet">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thesis Binding <b class="caret"></b></a>
                <ul class="dropdown-menu agile_short_dropdown">
                  <li><a href="BindingOptions.html">Binding Options</a></li>
                 
                  <li><a href="pdfhelp.html">Create PDF</a></li>    
                  <li class="active"><a href="calculator.html">Price Calculator</a></li>   
                  <li><a href="#">Order NOW</a></li>  

                </ul>
              </li>
              <li><a href="proofreading.html">Proofreading</a></li>
              <li><a href="prices.html" >Our Prices</a></li>
              <li><a href="contact.html">Contact us</a></li>

              
            </ul>
						
						<div class="agileinfo_social_icons">
							<ul class="agileits_social_list">
								<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<!--
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								-->
							</ul>
						</div>
						
					</nav>
				</div>
			</nav>
		</div>
	</div>

<div class="container">


<?php 

// if (!extension_loaded('imagick')){
//     echo 'imagick not installed';
// }

// phpinfo();
?>

<div class="table-responsive">
	<table class="table table-bordered table-hover table-condensed  data-table ">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
				<th>inst.</th>
				<th>Black and White Pages</th>
				<th>Colour Pages</th>
				<th>Number of copies</th>
				<th>Number of pages</th>
				<th>Total Printing Cost</th>

				<th>Black and White Pages</th>
				<th>Colour Pages</th>
				<th>Number of copies</th>
				<th>Turnitn Report Total Cost</th>

				<th>Binding Cover</th>
				<th>Number of copies</th>
				<th>Number of pages</th>
				<th>Front and Spine Hotfoil Letters £3</th>
				<th>Total Binding Cost</th>

				<th>CD</th>
				<th>CD Poket</th>
				<th>Turnitin Report Sleeve</th>
				<th>Total Extra(s) Cost</th>
				<th>Total Cost</th>
				<th>file</th>
				<th>t_file</th>
				<th>created</th>
				<th>Pay</th>
			</tr>
		</thead>
		<tbody>
			<?php 



if(isset($_GET['pdf_id'])){
	$id = $_GET['pdf_id'];
	$sql = "SELECT * FROM ids_allz where id = '$id'";
}elseif (isset($_GET['pdf_email'])) {
	$email = $_GET['pdf_email'];
	$sql = "SELECT * FROM ids_allz where email = '$email'";
}elseif (isset($_GET['pdf_all'])) {
	$sql = "SELECT * FROM ids_allz";
}else {
	$sql = "SELECT * FROM ids_allz where email= " . '123456qwertyasdfg';
}

// echo $sql;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	?>

    	<tr>
				<td><?= $row['id'] ?></td>
				<td><?= $row['name']; ?></td>
				<td><?= $row['email']; ?></td>
				<td><?= $row['cell']; ?></td>
				<td><?= $row['address']; ?></td>
				<td><?= $row['inst']; ?></td>
				<td><?= $row['p_BW']; ?></td>
				<td><?= $row['p_clr']; ?></td>
				<td><?= $row['p_copies']; ?></td>

				<td><?= $row['p_pages']; ?></td>
				<td><?= $row['p_total']; ?></td>

				<td><?= $row['t_BW']; ?></td>
				<td><?= $row['t_clr']; ?></td>
				<td><?= $row['t_copies']; ?></td>

				<td><?= $row['t_pages']; ?></td>
				<td><?= $row['t_total']; ?></td>

				<td><?= $row['b_bin']; ?></td>
				<td><?= $row['b_copies']; ?></td>
				<td><?= $row['b_true']; ?></td>
				<td><?= $row['b_total']; ?></td>

				<td><?= $row['e_cd']; ?></td>
				<td><?= $row['e_cdp']; ?></td>
				<td><?= $row['e_tr']; ?></td>
				<td><?= $row['e_total']; ?></td>
				<td><?= $row['grand_total']; ?></td>
				<td><?= $row['file']; ?></td>
				<td><?= $row['file2']; ?></td>
				<td><?= $row['created']; ?></td>
				<td><form action="https://secure-test.worldpay.com/wcc/purchase" method="POST">
  <input type="hidden" name="testMode" value="100">
  <input type="hidden" name="instId" value="1233012">
  <input type="hidden" name="cartId" value="<?= $row['id']; ?>">
  <input type="hidden" name="amount" value="<?= str_replace("£ ","", $row['grand_total']); ?>">
  <input type="hidden" name="currency" value="GBP">
<input type="submit" value=" Pay Here " class="btn btn-success btn-block">
</form></td>
			</tr>
			<?php
    }
} else {
    echo "<td colspan=23><center>No Results Found</center></td>";
}
?>
			
		</tbody>
	</table>
</div>
</div>
<script>
	$(document).ready(function() {
    	$('.data-table').DataTable();
	} );
</script>
</body>
</html>