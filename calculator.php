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
<!--
author: Athar Naqvi
author URL: http://www.ajps.ltd
-->
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


<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script>
function Calculate()
{
    var text;
var bw = document.getElementById("bwpages").value;
  
var c = document.getElementById("cpages").value;
var q = document.getElementById("qtyprint").value;
  




var bwc = (bw * 0.05 + c * 0.40) * q ;
var bwcfixed =  bwc.toFixed(2);
document.getElementById("totalp").value = '£ ' + bwcfixed;





    
var tbw = document.getElementById("pages").value;
var tc = document.getElementById("pagesc").value;
var qt = document.getElementById("qtyt").value ;


var tbwc = (tbw * 0.05 + tc * 0.40) * qt;

var tbwcfixed = '£ ' + tbwc.toFixed(2)

document.getElementById("totalt").value  = tbwcfixed;


var tbwcfixed = tbwc.toFixed(2)

var Binding = document.getElementById("bcover").value; 

var qtybinding = document.getElementById("coverq").value;
var totalbinding = document.getElementById("totalb").value = '£ ' + Binding * qtybinding;

 if(document.getElementById("letters").checked) {
 var new_val =   Binding * qtybinding + 3* qtybinding;
    var totalbinding = document.getElementById("totalb").value ='£ ' + new_val;
    var totalbinding =  new_val;
  }else{
    var new_val = Binding * qtybinding;
   var totalbinding = document.getElementById("totalb").value = '£ ' + new_val ;
   var totalbinding =  new_val ;
  }


 
var cd = document.getElementById("cd").value;
var cdpoket = document.getElementById("cdpoket").value;
var tsleeve = document.getElementById("tsleeve").value;
var extras= (cd * 2) + (cdpoket * 0.2) + tsleeve * 0.2;
var extrasfixed = '£ ' + extras.toFixed(2);
document.getElementById("extras").value = extrasfixed;


var totalcost = bwc + tbwc + totalbinding + extras ;
var totalcostfixed = totalcost.toFixed(2);
document.getElementById("totalcost").value =  '£ ' + totalcostfixed;


// check the user input for text and negative numbers
 if (isNaN(bw)  ) {
 	var bw = document.getElementById("bwpages").value = 0;
        text = "This fields must contain only numbers";
        }
      else  if (bw < 0 ){
        	var bw = document.getElementById("bwpages").value = 0;
        
        text = "This fields must contain only positive numbers";
    } 
    
  else {
        text = "";

    } 
 document.getElementById("errorbw").innerHTML = text;



if (isNaN(c)  ) {
 	var c = document.getElementById("cpages").value = 0;
        text = "This fields must contain only numbers";
        }
      else  if (c < 0 ){
        	var c = document.getElementById("cpages").value = 0;
        
        text = "This fields must contain only positive numbers";
    } 
    
  else {
        text = "";

    } 
 document.getElementById("errorc").innerHTML = text;




if (isNaN(q)  ) {
 	var q = document.getElementById("qtyprint").value = 1;
        text = "This fields must contain only numbers";
        }
      else  if (q < 0 ){
        	var q = document.getElementById("qtyprint").value = 1;
        
        text = "This fields must contain only positive numbers";
    } 
    
  else {
        text = "";

    } 
 document.getElementById("errorq").innerHTML = text;






    var tbw = document.getElementById("pages").value;
        if (isNaN(tbw)  ) {
          var tbw = document.getElementById("pages").value = 0;
          text = "This fields must contain only numbers";
        document.getElementById("errortbw").innerHTML = text;
        }
        else if (tbw < 0 ){
          var tbw = document.getElementById("pages").value = 0;
          text = "This fields must contain only positive numbers";
        document.getElementById("errortbw").innerHTML = text;
        } 
        else {
          text = "";
        } 



 if (isNaN(tc)  ) {
 	var tc = document.getElementById("pagesc").value = 0;
        text = "This fields must contain only numbers";
 document.getElementById("errortc").innerHTML = text;
        }
      else  if (tc < 0 ){
        	var tc = document.getElementById("pagesc").value = 0;
        
        text = "This fields must contain only positive numbers";
 document.getElementById("errortc").innerHTML = text;
    } 
    
  else {
        text = " ";

    } 


 if (isNaN(qt)  ) {
 	var qt = document.getElementById("qtyt").value = 1;
        text = "This fields must contain only numbers";
 document.getElementById("errortq").innerHTML = text;
        }
      else  if (qt < 0 ){
        	var qt = document.getElementById("qtyt").value = 1;
        
        text = "This fields must contain only positive numbers";
 document.getElementById("errortq").innerHTML = text;
    } 
    
  else {
        text = "";

    } 


 if (isNaN(qtybinding)  ) {
 	var qtybinding = document.getElementById("coverq").value = 1;
        text = "This fields must contain only numbers";
        }
      else  if (qtybinding < 0 ){
        	var qtybinding = document.getElementById("coverq").value = 1;
        
        text = "This fields must contain only positive numbers";
    } 
    
  else {
        text = "";

    } 
 document.getElementById("errorb").innerHTML = text;


if (isNaN(cd)  ) {
 	var cd = document.getElementById("cd").value = 0;
        text = "This fields must contain only numbers";
        }
      else  if (cd < 0 ){
        	var cd = document.getElementById("cd").value = 0;
        
        text = "This fields must contain only positive numbers";
    } 
    
  else {
        text = "";

    } 
 document.getElementById("errorcd").innerHTML = text;


if (isNaN(cdpoket)  ) {
 	var cdpoket = document.getElementById("cdpoket").value = 0;
        text = "This fields must contain only numbers";
        }
      else  if (cdpoket < 0 ){
        	var cdpoket = document.getElementById("cdpoket").value = 0;
        
        text = "This fields must contain only positive numbers";
    } 
    
  else {
        text = "";

    } 
 document.getElementById("errorcdp").innerHTML = text;

 if (isNaN(tsleeve)  ) {
 	var tsleeve = document.getElementById("tsleeve").value = 0;
        text = "This fields must contain only numbers";
        }
      else  if (tsleeve < 0 ){
        	var tsleeve = document.getElementById("tsleeve").value = 0;
        
        text = "This fields must contain only positive numbers";
    } 
    
  else {
        text = "";

    } 
 document.getElementById("errorsleeve").innerHTML = text;

}




 
</script>

<!-- Help display paragraph -->
<script type="text/javascript">
  function helpPrint(){
   var x = document.getElementById('helpPrint');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
  }


  function helpTurnitin(){
    var x = document.getElementById('helpTurnitin');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
  }

  function helpBinding(){
    var x = document.getElementById('helpBinding');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
  }

   function helpExtras(){
    var x = document.getElementById('helpExtras');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
  }

   function helpTotal(){
    var x = document.getElementById('helpTotal');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
  }
</script>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
</head>
	
<body>
<!-- banner -->

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
<!-- //banner -->
<!-- banner -->
<!-- Tooltip -->
			<!--
				<div class="tooltip-content">

					<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Oil Industry</h4>
								</div>
								<div class="modal-body">
									<img src="images/g4.jpg" alt="">
									<h5>Curabitur quis egestas.</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius lectus vitae porttitor fringilla. Donec turpis orci, elementum a nunc quis, maximus varius ipsum. Sed bibendum ex in dignissim bibendum.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
				-->
				<!-- //Tooltip -->


<!-- banner-bottom -->



<div class="container"><!-- InstanceBeginEditable name="EditRegion1" -->
  <h3 class="w3l_header two">COST ESTIMATION CALCULATOR</h3>
   <br>
   <p class="contactp">Using this calculator, have an accurate estimation of Binding, Printing and Extra(s) charges</p>
   <br>
   </div>
  
<div class="container text-center" >
<?php 



  if(isset($_POST['submit_f'])){


// echo '<br><pre>';
// print_r($_POST);
// echo '</pre><br><br>';



$fname = $_POST['fname'];
$email = $_POST['email'];
$p_BW = $_POST['p_BW'];
$p_clr = $_POST['p_clr'];
$p_pages = $_POST['p_pages'];
$p_copies = $_POST['p_copies'];
$p_total = $_POST['p_total'];
$t_BW = $_POST['t_BW'];
$t_clr = $_POST['t_clr'];
$t_copies = $_POST['t_copies'];
$t_pages = $_POST['t_pages'];
$t_total = $_POST['t_total'];
$b_bin = $_POST['b_bin'];
$b_copies = $_POST['b_copies'];
$b_true = $_POST['b_true'];
$b_total = $_POST['b_total'];
$e_cd = $_POST['e_cd'];
$e_cdp = $_POST['e_cdp'];
$e_tr = $_POST['e_tr'];
$e_total = $_POST['e_total'];
$grand_total = $_POST['grand_total'];
$file = $_POST['file'];
$file2 = $_POST['file2'];
$number = $_POST['number'];
$address = $_POST['address'];
$lname = $_POST['lname'];
$address2 = $_POST['address2'];
$postal_code = $_POST['postal_code'];
$notes = $_POST['notes'];
$inst = $_POST['inst'];

$tp_bm_1 = $_POST['tp_bm_1'];
$tp_bm_2 = $_POST['tp_bm_2'];
$tp_bm_3 = $_POST['tp_bm_3'];
$tp_bm_4 = $_POST['tp_bm_4'];
$tp_bm_5 = $_POST['tp_bm_5'];
$tp_bm_6 = $_POST['tp_bm_6'];
$foil_1 = $_POST['foil_1'];
$foil_2 = $_POST['foil_2'];
$foil_3 = $_POST['foil_3'];

$logo = $_POST['logo'];
$text_color = $_POST['text_color'];
$foil_spine = $_POST['foil_spine'];
$hotfoilcolour = $_POST['hotfoilcolour'];
$spine_up_down = $_POST['spine_up_down'];
$l_position = $_POST['l_position'];


$myImage = '';


if(isset($_FILES["myImage"]) && !empty($_FILES["myImage"]) && $_FILES["myImage"]['name'] !== ''){
	 $myImage = basename($_FILES["myImage"]["name"]);
  	 $target_file2 = 'uploads/' . basename($_FILES["myImage"]["name"]);
     $logo_name = $_FILES['myImage']['tmp_name'];
     $result2 = move_uploaded_file($logo_name,$target_file2);
}


$sql = "INSERT INTO ids_allz 
(name, lname, email, cell, address, address2, postal_code, inst, p_BW, p_pages, p_clr, p_copies, p_total, t_BW, t_clr, t_copies,  t_pages, t_total, b_bin, b_copies, b_true, b_total, e_cdp, e_cd, e_tr, e_total, grand_total, notes, file, file2, tp_bm_1, tp_bm_2, tp_bm_3, tp_bm_4, tp_bm_5, tp_bm_6, foil_1, foil_2, foil_3, myImage, logo, text_color, foil_spine, hotfoilcolour, spine_up_down, l_position)
VALUES (
'$fname', 
'$lname', 
'$email',
'$number',
'$address',
'$address2',
'$postal_code',
'$inst',
'$p_BW',
'$p_pages',
'$p_clr',
'$p_copies',
'$p_total',
'$t_BW',
'$t_clr',
'$t_copies',
'$t_pages',
'$t_total',
'$b_bin',
'$b_copies',
'$b_true',
'$b_total',
'$e_cdp',
'$e_cd',
'$e_tr',
'$e_total',
'$grand_total',
'$notes',
'$file',
'$file2',
'$tp_bm_1',
'$tp_bm_2',
'$tp_bm_3',
'$tp_bm_4',
'$tp_bm_5',
'$tp_bm_6',
'$foil_1',
'$foil_2',
'$foil_3',
'$myImage',
'$logo',
'$text_color',
'$foil_spine',
'$hotfoilcolour',
'$spine_up_down',
'$l_position')";



if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
?>
<h2>Dear <?= $fname; ?>  </h2>
<p>Click Pay here to complete the process</p>
<style>
  .pdf_form {
    display: none;
  }
</style>
<form action="https://secure.worldpay.com/wcc/purchase" method="POST">
  <input type="hidden" name="testMode" value="0">

  <input type="hidden" name="instId" value="1233012">

  <input type="hidden" name="cartId" value="<?= $last_id; ?>">

  <input type="hidden" name="amount" value="<?= str_replace("£ ","", $grand_total); ?>">

  <input type="hidden" name="currency" value="GBP">

  <a target="_blank" class="btn btn-primary btn-block" href="getpdf.php?pdf_email=<?= $email; ?>">Get Info</a><input type="submit" value=" Pay Here " class="btn btn-success btn-block">
</form>
<br><br>
<?php


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

  }

?>

</div>

<?php
if(isset($_FILES) && !empty($_FILES)){



$target_file = 'uploads/' . basename($_FILES["filez"]["name"]);

if(isset($_FILES["filez2"]) && !empty($_FILES["filez2"]) && $_FILES["filez2"]['name'] !== ''){
  $target_file2 = 'uploads/' . basename($_FILES["filez2"]["name"]);
  if($_FILES['filez2']['type'] != "application/pdf"){
        echo "<br><div class='container'><p>Turintin File must be uploaded in PDF format.</p></div>";
  }else {
     $name2 = $_FILES['filez2']['tmp_name'];
     $result2 = move_uploaded_file($name2,$target_file2);
  }
}

  if (is_uploaded_file($_FILES['filez']['tmp_name'])) {
     if ($_FILES['filez']['type'] != "application/pdf" ) {
        echo "<br><div class='container'><p>Main File must be uploaded in PDF format.</p></div>";
     } 
     else 
     {
       $name3 = $_FILES['filez']['tmp_name'];
       $result = move_uploaded_file($name3,$target_file);
         if ($result == 1) 
         {

   ?>

<!-- Print -->
<div class="end_count">
<table>
  <tr>
    <th colspan="3">Printing  <i>for</i> <small> <?php echo $_FILES['filez']['name']; ?></small> 
<img src="images/info.jpg" alt="help"  onclick="helpPrint();">


    </th>
   
  </tr>

  <tr>
  <td colspan="3"> <p id="helpPrint"> Please ensure that you count the number of colour and black and white pages correctly. If there is a red full stop on a page, the whole page will be printed in colour and you will be charged for a colour page. Please also check any images/graphs as sometimes these may appear black but they are actually made up of 4 colours. Please ensure that these are set up as grayscale images. <br>
If you need more information about our printing services visit <a href="printingService.html">Printing Services</a> page.

</p>
</td>
 </tr>
  <tr>
   
    <td style="text-align: right;">Black and White Pages</td>
    <td>  <input  type="text" maxlength="5" id="bwpages" onblur ="Calculate()"  ></td>
    <td style="text-align: left;"> x 5p per page</td>
     
  </tr>
<tr>
</tr>
  <tr>
    <td style="text-align: right;">Colour Pages</td>
    <td> <input type="text" maxlength="5" id="cpages" onblur="Calculate()" value="<?php

function count_pages($pdfname) {
        $pdftext = file_get_contents($pdfname);
        $num = preg_match_all("/\/Page\W/", $pdftext, $dummy);
        return $num;
      }


echo count_pages('uploads/'.$_FILES["filez"]["name"]);

    ?>"  ></td>
    <td style="text-align: left;"> x 40p per page</td>
    
  </tr>

   <tr>
    <td style="text-align: right;">Number of Pages</td>
    <td> <input type="text" readonly="readonly" maxlength="4" id="qtyprint2" value ="<?php

echo count_pages('uploads/'.$_FILES["filez"]["name"]);

    ?>" onblur="Calculate()"  ></td>
    <td style="text-align: left;"> </td>
  </tr>

  <tr>
    <td style="text-align: right;">Number of Copies</td>
    <td> <input type="text" maxlength="4" id="qtyprint" value ="1" onblur="Calculate()"  ></td>
    <td style="text-align: left;"> </td>
  </tr>

  <tr>
   <td colspan="3" style="font-size: 20px" > Total Printing Cost </td>
  </tr>



  <tr>
  <td></td>
  <td > <input type="text"  id="totalp" readonly> </td>
  <td style="text-align: left;"> <!--<button onclick="Calculate();">Calculate</button> --></td>
</tr>
<tr>
   <td colspan="3" style="font-size: 20px ; color: red" id="errorbw"> </td>
  </tr>

<tr>
   <td colspan="3" style="font-size: 20px ; color: red" id="errorc"> </td>
  </tr>

  <tr>
   <td colspan="3" style="font-size: 20px ; color: red" id="errorq"> </td>
  </tr>

  
</table>

<?php 
if(isset($_FILES["filez2"]) && !empty($_FILES["filez2"]) && $_FILES["filez2"]['name'] !== ''){
?>

<table>
  <tr>
    <th colspan="3">Printing Turnitin Report <i>for</i> <small><?php echo $_FILES['filez2']['name']; ?></small>
  <img src="images/info.jpg" alt="help"  onclick="helpTurnitin();">
    </th>
 
  </tr>
  <tr>
  <td colspan="3"> 
    <p id="helpTurnitin"> You may be asked by your tutor(s) to print out the Turnitin Originality Report for your assignment. In this case download your originality report and we will print for you.<br>
    Please NOTE, our services include only the printing services not the originality check.<br>
    If you have more questions please send us a <a href="contact.html">message.</a>
    </p>
  </td>

  <tr>

    <td style="text-align: right;">Black and White Pages</td>
    <td><input type="text" maxlength="5" id="pages" value="<?= count_pages('uploads/'.$_FILES['filez2']['name']);?>" onblur="Calculate();"  > </td>
    <td style="text-align: left;"> x 5p per page</td>
     
  </tr>

  <td colspan="3">
    <p style="text-align: center"><a href="javascript:void(0)" class="colord">Need in Colour Pages too</a></p>
  </td>
  <tr  id="clr_pages" style="display: none;">
    <td style="text-align: right;">Colour Pages</td>
    <td> <input type="text" maxlength="5" id="pagesc" onblur="Calculate();" style="display: none;" ></td>
    <td style="text-align: left;"> x 40p per page</td>
    
  </tr>

   <tr>
    <td style="text-align: right;">Number of pages</td>
    <td> <input type="text" maxlength="4" readonly="readonly" id="qtyt2" value ="<?php
    echo count_pages('uploads/'.$_FILES['filez2']['name']);?>"> </td>
    <td style="text-align: left;"> </td>    
   </tr>

   <tr>
    <td style="text-align: right;">Number of copies</td>
    <td> <input type="text" maxlength="4" id="qtyt" value ="1" onblur="Calculate()"  > </td>
    <td style="text-align: left;"> </td>    
   </tr>

  <tr>
   <td colspan="3" style="font-size: 20px"> Turnitn Report Total Cost </td>
  </tr>

  <tr>
  <td></td>

  <td > <input type="text"  id="totalt" value="£ <?php

$foo = count_pages('uploads/'.$_FILES['filez2']['name']) * 0.05;
echo number_format((float)$foo, 2, '.', '');

  ;?>" readonly>  </td>
  <td style="text-align: left;"> <!--<button onclick="Calculate();">Calculate</button> --></td>
</tr>

<tr>
   <td colspan="3" style="font-size: 20px ; color: red" id="errortbw"> </td>
  </tr>

<tr>
   <td colspan="3" style="font-size: 20px ; color: red" id="errortc"> </td>
  </tr>

  <tr>
   <td colspan="3" style="font-size: 20px ; color: red" id="errortq"> </td>
  </tr>
</table>

<?php

}else{
 ?>
 <div class="hidden">
<input type="text" maxlength="5" id="pages" value="1" onblur="Calculate();"  > 
<input type="text" maxlength="5" id="pagesc" value="0" onblur="Calculate();" >
<input type="text" maxlength="4" id="qtyt2" value ="0"> 
<input type="text" maxlength="4" id="qtyt" value ="0" onblur="Calculate()"  > 
<input type="text"  id="totalt" value="0">
<div class="hidden">
  
<tr>
   <td colspan="3" style="font-size: 20px ; color: red" id="errortbw"> </td>
  </tr>

<tr>
   <td colspan="3" style="font-size: 20px ; color: red" id="errortc"> </td>
  </tr>

  <tr>
   <td colspan="3" style="font-size: 20px ; color: red" id="errortq"> </td>
  </tr>
</div></div>
 <?php
}
?>
<table>
 <tr>
    <th colspan="3">Binding
<img src="images/info.jpg" alt="help"  onclick="helpBinding();">
    </th>
   
  </tr>
<tr>
   <td colspan="3"> <p id="helpBinding"> We offer a variety of binding styles for theses including hard bindings and soft bindings. Your thesis document will be printed on high-definition digital printers using the finest quality 100gsm paper. Your binding will be securely bound as appropriate in our dedicated bindery, and the lettering stamped with specialist hot-foil blocking machines.<br>If you are not sure which type of cover to choose for your theses please discuss with your tutor(s). Each University and department has different rules. <br>
If you need more information about our Binding services visit <a href="gallery.html"> Binding Description</a> page.
</p>
</td>
</tr>
  <tr>
  <td colspan="3">  <select id ="bcover" onchange="Calculate();">
  <option value="0">Select Binding Cover</option>
  <option value="18" >Hard Bound Buckram Cover (£18)</option>
  <option value="15">Hard Bound Magesta Cover (£15)</option>
  <option value="10">Soft Bound Magesta Cover (£10) </option>
  <option value="7">Soft Bound Acetate Covers (£7) </option>
  <option value="5">Wiro Bound (£5) </option>
</select></td>
  </tr>

  <tr>
     <td style="text-align: right;">Number of copies</td>
    <td><input type="text" min="0" maxlength="4" id="coverq" value ="1" onblur="Calculate()"  >  </td>
   <td></td>
  </tr>

  <tr>
 
  <td colspan="3"> <input type="checkbox" id="letters" value="3" onclick="Calculate()" > Front and Spine Hotfoil Letters £3
<section id="colourhotfoil" style="display: none;">

<section class="cover" style="display: none;">

<p style="display: none;"> <img id="image" src="images/blackcover.png" alt="cover" style="display: none;"> </p>


<img id="liveLogo" name="liveLogo" src="" alt="">

<p class="writing frontwriting" style="display: none;"></p>
<p class="writing frontwriting2" style="display: none;"></p>
<p class="writing frontwriting3" style="display: none;"></p>
<div class="spine_div" style="display: none;">
<p class="writing frontwriting4" style="display: none;"></p>
<p class="writing frontwriting5" style="display: none;"></p>
<p class="writing frontwriting6" style="display: none;"></p>
</div>
<p class="writing frontwriting10" style="display: none;"></p>
<p class="writing frontwriting11" style="display: none;"></p>
<p class="writing frontwriting12" style="display: none;"></p>
</section>

<section class="txt_cl" style="display: none;">
<p style="display: none;">What colour foil would you like on your cover?</p>
<input type="radio" autocomplete="off" name="hotfoilcolour" id="Gold" value="Black" checked="" style="display: none;"> Black 
<input type="radio" autocomplete="off" name="hotfoilcolour" id="Silver" value="Blue" style="display: none;"> Blue
<input type="radio" autocomplete="off" name="hotfoilcolour" id="RoseGold" value="Green" style="display: none;"> Green
<input type="radio" autocomplete="off" name="hotfoilcolour" id="Red" value="Red" style="display: none;"> Red

</section>
<br style="display: none;">
<p style="display: none;">What colour would you like for your text?</p>
<input type="radio" autocomplete="off" name="foil" id="Silver_foil" value="Silver" checked="" style="display: none;"> Silver Foil 
<input type="radio" autocomplete="off" name="foil" id="Gold_foil" value="Gold" style="display: none;"> Gold Foil
<input type="radio" autocomplete="off" name="foil" id="Black_foil" value="Black" style="display: none;"> RoseGold Foil

<br style="display: none;">
<p style="display: none;">Foil text</p>
<input type="text" id="rt4" name="rt4" style="display: none;"><br style="display: none;">
<input type="text" id="rt5" name="rt5" style="display: none;"><br style="display: none;">
<input type="text" id="rt6" name="rt6" style="display: none;"><br style="display: none;">


<br style="display: none;">
<p style="display: none;">Foil Directions</p>
<input type="radio" id="rt8" name="spine_up_down" value="up" checked="" style="display: none;"> Up Spine
<input type="radio" id="rt7" name="spine_up_down" value="down" style="display: none;"> Down Spine


<br style="display: none;">
<p style="display: none;"> Please use the text field below to enter your text as you would like it to appear on the cover of your book.</p>

<label style="display: none;">Text on your cover from top to bottom</label><br style="display: none;">
<input type="text" id="rt1" name="rt1" style="display: none;"><br style="display: none;">
<input type="text" id="rt2" name="rt2" style="display: none;"><br style="display: none;">
<input type="text" id="rt3" name="rt3" style="display: none;"><br style="display: none;">
<input type="text" id="rt10" name="rt10" style="display: none;"><br style="display: none;">
<input type="text" id="rt11" name="rt11" style="display: none;"><br style="display: none;">
<input type="text" id="rt12" name="rt12" style="display: none;"><br style="display: none;">

<br style="display: none;">

<p style="display: none;"> Would you like a logo on your cover? </p>
<input type="radio" autocomplete="off" name="logo" id="logoyes" style="display: none;"> Yes
<input type="radio" autocomplete="off" name="logo" id="logono" checked="" style="display: none;"> No
<br style="display: none;">


	<section id="logoupload" style="display: block;">
<p style="display: block;"> If you would like to include a logo please upload here. Please ensure that the logo is a png with a transparent background.</p>
<div class="myImages" style="display: block;">
<a href="javascript:;" style="display: block;"><label for="myImage" style="display: block;">Upload Image</label></a>
<p>Position</p>

<input type="radio" name="l_position" id="l_position_1" value="1"  style="display: block;"> 1

<input type="radio" name="l_position" id="l_position_2" value="2"  style="display: block;"> 2

<input type="radio" name="l_position" id="l_position_3" value="3"  style="display: block;"> 3

<input type="radio" name="l_position" id="l_position_4" value="4"  style="display: block;"> 4

<input type="radio" name="l_position" id="l_position_5" value="5"  style="display: block;"> 5
</div>
</section>
</section>
  </td>

  </tr>
 <tr>
   <td colspan="3" style="font-size: 20px"> Total Binding Cost </td>
  </tr>

<tr>
  <td></td>
  <td > <input type="text"  id="totalb" readonly>  </td>
  <td style="text-align: left;"> <!--<button onclick="Calculate();">Calculate</button> --></td>
</tr>

<tr>
   <td colspan="3" style="font-size: 20px ; color: red" id="errorb"> </td>
  </tr>
<tr>
   <td colspan="3" > </td>
  </tr>
  <tr>
   <td colspan="3" > </td>
  </tr>


</table>

<table>
<tr>
    <th colspan="3">Extras
<img src="images/info.jpg" alt="help"  onclick="helpExtras();">
    </th>
   
  </tr>

<tr>

   <td colspan="3"> <p id="helpExtras"> We offer Extra product that you may need for your theses. These include CD with your work , CD Pokets and Turnitin Report Sleeve.<br>
If you need more information about our Extra(s) send us a  <a href="contact.html"> message</a> 
</p></td>
  </tr>

  <tr>

    <td style="text-align: right;">CD</td>
    <td><input type="text" maxlength="5" size="50" id="cd" onblur ="Calculate()" > </td>
    <td style="text-align: left;"> x £2.00 per item</td>
     
  </tr>

  <tr>
    <td style="text-align: right;">CD Poket</td>
    <td> <input type="text" maxlength="5" id="cdpoket" onblur="Calculate()"  ></td>
    <td style="text-align: left;"> x £0.20 per item</td>
    
  </tr>

   <tr>
    <td style="text-align: right;">Turnitin Report Sleeve</td>
    <td> <input type="text" maxlength="5" id="tsleeve" onblur="Calculate()"  > </td>
    <td style="text-align: left;"> x £0.20 per item </td>

    
  </tr>

  <tr>
   <td colspan="3" style="font-size: 20px"> Total Extra(s) Cost </td>
  </tr>

  <tr>
  <td></td>
  <td > <input type="text"  id="extras" readonly>  </td>
  <td style="text-align: left;"> <!--<button onclick="Calculate();">Calculate</button> --></td>
</tr>

<tr>
   <td colspan="3" style="font-size: 20px ; color: red" id="errorcd"> </td>
  </tr>

<tr>
   <td colspan="3" style="font-size: 20px ; color: red" id="errorcdp"> </td>
  </tr>

  <tr>
   <td colspan="3" style="font-size: 20px ; color: red" id="errorsleeve"> </td>
  </tr>

</table>



<table>
<tr>
    <th colspan="3"> <span style="color:red;font-weight:bold">Total Estimated Cost  </span>
<img src="images/info.jpg" alt="help"  onclick="helpTotal();">
    </th>
   
  </tr>

 <tr>
  <td colspan="3"> <p id="helpTotal"> This quote is for estimation purposes and is not a guarantee of cost for services. This estimation is based on current information you provide about the project requirements. Actual cost may change once project the ptoject is uploaded. On the Order Section you will be able to see the total cost for your project.<br>
If you need more information about our prices visit <a href="prices.html">Our Prices</a> page.

</p>
</td>
 </tr>

 

  <tr>
  <td></td>
  <td > 

<input type="text" id="totalcost" readonly></td>
  <td style="text-align: left;"> <button onclick="Calculate();">Calculate</button> </td>
</tr>


<tr>
   <td colspan="3" > </td>
  </tr>
  <tr>
   <td colspan="3" > </td>
  </tr>

  <tr>
   <td colspan="3" > </td>
  </tr>
</table>


</div>


<div class="form_to_put" style="display: none;">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
  <h1>Total Summary</h1>
    <div class="p_cost">
      <h4>Printing</h4>
      <h6>Black and White Pages <strong class="p_BW">0</strong> <i>x 5p per page</i></h6>
      <h6>Colour Pages <strong class="p_clr">0</strong> <i>x 40p per page</i></h6>
      <h6>Number of pages <strong class="p_sets">0</strong></h6>
      <h6>Number of copies <strong class="p_copies">0</strong></h6>
      <strong>Total Printing Cost = <span class="p_total">£0</span></strong>
    </div>
    <div class="t_cost">
      <h4>Printing Turnitin Report</h4>
      <h6>Black and White Pages <strong class="t_BW">0</strong> <i>x 5p per page</i></h6>
      <h6>Colour Pages <strong class="t_clr">0</strong> <i>x 40p per page</i></h6>
      <h6>Number of pages <strong class="t_pages">0</strong> <i></i></h6>
      <h6>Number of copies <strong class="t_copies">0</strong> <i></i></h6>
      <strong>Turnitn Report Total Cost = <span class="t_total">£0</span></strong>
    </div>
    <div class="b_cost">
      <h4>Binding</h4>
      <h6>Binding Cover Select <strong class="b_bin">Hard Bound Magesta Cover (£15)</strong></h6>
      <h6>Number of copies <strong class="b_copies">0</strong> </h6>
      <h6>Front and Spine Hotfoil Letters £3 <strong class="b_true">NO</strong></h6>
      <strong>Total Binding Cost = <span class="b_total">£0</span></strong>
    </div>
    <div class="e_cost">
      <h4>Extras</h4>
      <h6>CD <strong class="e_cd">0</strong>   x £2.00 per item</h6>
      <h6>CD Poket <strong class="e_cdp">0</strong> </h6>
      <h6>Turnitin Report Sleeve <strong class="e_tr">0</strong>  x £0.20 per item</h6>
      <strong>Total Extra(s) Cost = <span class="e_total">£0</span></strong>
    </div>
    <div class="total">
      <h3>Total Cost <strong class="grand_total">£0</strong></h3>
    </div>
</div>
      <div class="col-sm-6">
  
  <form action="" enctype="multipart/form-data"  method="POST">
<h1>Personal Info</h1>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-6">
          <label for="name">First Name </label>
          <input type="text" class="form-control" style="width: 100%;" id="name" required="required" name="fname" placeholder="First Name" >
        </div>
        <div class="col-sm-6">
          <label for="lname">Last Name </label>
          <input type="text" class="form-control" style="width: 100%;" id="lname" required="required" name="lname" placeholder="Last Name" >
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="name">Email</label>
      <input type="email" class="form-control" style="width: 100%;" id="email" required="required" name="email" placeholder="example@xyz.com">
    </div>
    <div class="form-group">
      <label for="number">Phone Number</label>
      <input type="text" class="form-control" style="width: 100%;" id="number" required="required" name="number">
    </div>
    <div class="form-group">
      <label for="inst">University or Insititution</label>
      <input type="text" class="form-control" style="width: 100%;" id="inst" required="required" name="inst">
    </div>
    <div class="form-group">
      <label for="addr">Address</label>
      <input name="address" id="addr" class="form-control" style="width: 100%;" id="addr" required="required">
    </div>
    <div class="form-group">
      <label for="addr1">Address 2</label>
      <input name="address2" id="addr" class="form-control" style="width: 100%;" id="addr1" required="required">
    </div>
      <div class="form-group">
          <label for="addr2">Postal Code</label>
          <input type="text" class="form-control" style="width: 100%;" id="addr2" required="required" name="postal_code">
      </div>
      <div class="form-group">
          <label for="Notes">Memo</label>
          <input type="text" class="form-control" style="width: 100%;" id="Notes" required="required" name="notes">
      </div>


    <input type="hidden" class="rt1" name="tp_bm_1" value="">
    <input type="hidden" class="rt2" name="tp_bm_2" value="">
    <input type="hidden" class="rt3" name="tp_bm_3" value="">
    <input type="hidden" class="rt10" name="tp_bm_4" value="">
    <input type="hidden" class="rt11" name="tp_bm_5" value="">
    <input type="hidden" class="rt12" name="tp_bm_6" value="">
    <input type="hidden" class="rt4" name="foil_1" value="">
    <input type="hidden" class="rt5" name="foil_2" value="">
    <input type="hidden" class="rt6" name="foil_3" value="">



    <input type="hidden" class="p_BW" name="p_BW" value="">
    <input type="hidden" class="p_sets" name="p_sets" value="">
    <input type="hidden" class="p_clr" name="p_clr" value="">
    <input type="hidden" class="p_pages" name="p_pages" value="">
    <input type="hidden" class="p_copies" name="p_copies" value="">
    <input type="hidden" class="p_total" name="p_total" value="">
    <input type="hidden" class="t_BW" name="t_BW" value="">
    <input type="hidden" class="t_clr" name="t_clr" value="">
    <input type="hidden" class="t_copies" name="t_copies" value="">
    <input type="hidden" class="t_pages" name="t_pages" value="">
    <input type="hidden" class="t_total" name="t_total" value="">
    <input type="hidden" class="b_bin2" name="b_bin" value="">
    <input type="hidden" class="b_copies" name="b_copies" value="">
    <input type="hidden" class="t_BW" name="t_BW" value="">
    <input type="hidden" class="b_true2" name="b_true" value="">
    <input type="hidden" class="b_total" name="b_total" value="">
    <input type="hidden" class="e_cd" name="e_cd" value="">
    <input type="hidden" class="e_cdp" name="e_cdp" value="">
    <input type="hidden" class="e_tr" name="e_tr" value="">

	<input type="file" name="myImage" id="myImage" class="myImage" accept=".png" style="opacity: 0; text-indent: -999999">
    <input type="hidden" class="logo" name="logo" value="false">
    <input type="hidden" class="text_color" name="text_color" value="">
    <input type="hidden" class="foil_spine" name="foil_spine" value="">
    <input type="hidden" class="hotfoilcolour" name="hotfoilcolour" value="images/rose_cover.png">
    <input type="hidden" class="spine_up_down" name="spine_up_down" value="down">
    <input type="hidden" class="l_position" name="l_position" value="1">

    <input type="hidden" class="e_total" name="e_total" value="">
    <input type="hidden" class="grand_total" name="grand_total" value="">
    <input type="hidden" class="" name="file" value="<?= $_FILES['filez']['name']; ?>">
    <input type="hidden" class="" name="file2" value="<?= $_FILES['filez2']['name']; ?>">
      <a href="calculator.php" class="btn btn-warning btn_reset">Restart Now</a>
      <button class="btn btn-primary btn_reset" type="reset">Reset Form</button>
    <button class="btn btn-success" name="submit_f">Submit Data</button>
  </form>
  
  </div></div>
</div>


</div>
<div  class="services">
  <a class="buttonprice" href="prices.html" >Our Prices</a>
    <a class="buttonorder" href="calculator.php">Restart now</a>
    <a class="buttonorder" href="javascript:void(0)">Order Now</a>
</div>
<br><br>
<?php
      }
    }
  }
}else{
  ?>
<div class="container pdf_form">
  <h2>Add PDF Files First</h2>
  <br>
<form action="" enctype="multipart/form-data" method="post">
<div class="form-group">
  <label for="Main">Main PDF</label>
<input type="file" class="form-control" required="required" name="filez" value="" /><br />
</div>
<div class="form-group">
<label for="Main">Turnitin PDF</label>
<input type="file" class="form-control" name="filez2" value="" /><br />
</div>
    <input type="reset" name="reset" class="btn btn-primary" value="Reset" />
  <input type="submit" name="submit" class="btn btn-primary" value="Submit PDF" />
</form>

<br>
<br>
</div>


  <?php
}
?>
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 agile_footer_grid">
				<h3>About Us</h3>
				<p>We came from education background such as researchers, trainers, IT gurus and bunch of entrepreneurs. We understand very well the need and demand of thesis (Dissertation) binding and other help students require. </p>
				
				<ul class="agileits_social_list">
					<li>Find us on the Facebook &nbsp;<a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<!--
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					-->
				</ul>
			</div>
			<div class="col-md-4 agile_footer_grid">
				<h3>Why iDissertation?</h3>
				<ul class="agileits_w3layouts_footer_grid_list">
          <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <a href="prices.html" >Fixed price for printing and binding</a>
          </li>
          <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <a href="delivery.html" >24h delivery or 2h pickup in London</a>
          </li>
          <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <a href="proofreading.html" >Proofreading and correction </a>
          </li>
          <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <a href="printingService.html" >Printing Services</a>
          </li>
          <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <a href="faq.html">FAQ and Help</a>
          </li>
        </ul>
			</div>
			<div class="col-md-4 agile_footer_grid">
				<h3>Contact Info</h3>
				<ul class="w3_address">
					<li>The Movements House, Unit 2, 1st Floor, Hetford Road Barking, London</li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="contact.html">contact@iDissertation.co.uk</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>020 8594 8950</li>
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="https://www.google.com/maps/place/iDissertation/@51.539586,0.0658403,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x27e2f858aa03325e!8m2!3d51.539586!4d0.068029">Find us on Google Map</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="w3_agileits_footer_grids">
				<div class="col-md-4 wthree_footer_grid_left">
				</div>
        <!--
				<div class="col-md-8 wthree_footer_grid_right">
					<h3>Sign up for our Newsletter</h3>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<input type="submit" value="Submit">
					</form>
				</div>
        -->
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo_copyright">
				<p>© 2017 AJ Printing Solutions. All rights reserved | Design by <a href="http://ajps.ltd">AJPS</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Bidning and Printing
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/printing.jpg" alt="Dissertation printing and Binding " class="img-responsive" />
						<p>We came from education background such as researchers, trainers, IT gurus and bunch of entrepreneurs. We understand very well the need and demand of thesis (Dissertation) binding and other help students require.</p>
					</div>
				</section>
			</div>
		</div>
	</div>
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Sign In</h3>	
																			<div class="login-form">
																				<form action="#" method="post">
																					<input type="text" name="email" placeholder="E-mail" required="">
																					<input type="password" name="password" placeholder="Password" required="">
																					<div class="tp">
																						<input type="submit" value="Sign In">
																					</div>
																				</form>
																			</div>
																			<div class="login-social-grids">
																				<ul>
																					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
																					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
																					<li><a href="#"><i class="fa fa-rss"></i></a></li>
																				</ul>
																			</div>
																			<p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal1 -->	
													<!-- Modal2 -->
													<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Sign Up</h3>	
																			<div class="login-form">
																				<form action="#" method="post">
																				   <input type="text" name="name" placeholder="Username" required="">
																					<input type="email" name="email" placeholder="Email" required="">
																					<input type="password" name="password" placeholder="Password" required="">
																					<input type="password" name="password" placeholder="Confirm Password" required="">
																					<input type="submit" value="Sign Up">
																				</form>
																			</div>
																			<p><a href="#"> By clicking register, I agree to your terms</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal2 -->	

<!-- //bootstrap-pop-up -->
<!-- js -->
<!-- carousal -->
	<script src="js/slick.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {
		  $(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 2,
			slidesToScroll: 2,
			responsive: [
				{
				  breakpoint:800,
				  settings: {
					arrows: true,
					centerMode: false,
					slidesToShow: 1
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					arrows: true,
					centerMode: false,
					centerPadding: '40px',
					slidesToShow: 1
				  }
				}
			 ]
		  });
		});
	</script>
<!-- //carousal -->
<!-- //js -->
<script>
        $(function(){ 

  // parameters
  // image height
  var images_height = '650px';
  // array of images
  var images_url = [
      'images/banner1.jpg',
      'images/banner2.jpg',
      'images/banner3.jpg'
  ];
  var images_count = images_url.length;

  // create nodes
  for(var j=0;j<images_count+1;j++){
      $('.banner ul').append('<li></li>')
  }

  // pagination
  for(var j=0;j<images_count;j++){
      if(j==0){
          $('.banner ol').append('<li class="current"></li>')
      }else{
          $('.banner ol').append('<li></li>')
      }
  }

  // convert images into backgrounds
  $('.banner ul li').css('background-image','url('+images_url[0]+')');
  
  $.each(images_url,function(key,value){
      $('.banner ul li').eq(key).css('background-image','url('+value+')');
  });

  $('.banner').css('height',images_height);

  $('.banner ul').css('width',(images_count+1)*100+'%');

  $('.banner ol').css('width',images_count*20+'px');
  $('.banner ol').css('margin-left',-images_count*20*0.5-10+'px');

  var num = 0;

  var window_width = $(window).width();

  $(window).resize(function(){
      window_width = $(window).width();
      $('.banner ul li').css({width:window_width});
      clearInterval(timer);
      nextPlay();
      timer = setInterval(nextPlay,2000);
  });

  $('.banner ul li').width(window_width);

  // pagination dots
  $('.banner ol li').mouseover(function(){
      $(this).addClass('current').siblings().removeClass('current');
      var i = $(this).index();
      //console.log(i);
      $('.banner ul').stop().animate({left:-i*window_width},500);
      num = i;
  });

  // autoplay
  var timer = null;

  function prevPlay(){
      num--;
      if(num<0){
          $('.banner ul').css({left:-window_width*images_count}).stop().animate({left:-window_width*(images_count-1)},500);
          num=images_count-1;
      }else{
          $('.banner ul').stop().animate({left:-num*window_width},500);
      }
      if(num==images_count-1){
          $('.banner ol li').eq(images_count-1).addClass('current').siblings().removeClass('current');
      }else{
          $('.banner ol li').eq(num).addClass('current').siblings().removeClass('current');

      }
  }

  function nextPlay(){
      num++;
      if(num>images_count){
          $('.banner ul').css({left:0}).stop().animate({left:-window_width},500);
          num=1;
      }else{
          $('.banner ul').stop().animate({left:-num*window_width},500);
      }
      if(num==images_count){
          $('.banner ol li').eq(0).addClass('current').siblings().removeClass('current');
      }else{
          $('.banner ol li').eq(num).addClass('current').siblings().removeClass('current');

      }
  }

  timer = setInterval(nextPlay,2000);

  // auto pause on mouse enter
  $('.banner').mouseenter(function(){
      clearInterval(timer);
      $('.banner i').fadeIn();
  }).mouseleave(function(){
      timer = setInterval(nextPlay,2000);
      $('.banner i').fadeOut();
  });

  // goto next
  $('.banner .right').click(function(){
      nextPlay();
  });

  // back to previous
  $('.banner .left').click(function(){
      prevPlay();
  });

});
    </script>


<!-- flexisel -->
		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 2
					}
				}
			});
			
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- //flexisel -->
<!-- odometer-script -->
			<script src="js/odometer.js"></script>
			<script>
				window.odometerOptions = {
				  format: '(,ddd).dd'
				};
				setTimeout(function(){
					jQuery('#w3l_stats1').html(25);
				}, 1000);
			</script>
			<script>
				window.odometerOptions = {
				  format: '(,ddd).dd'
				};
				setTimeout(function(){
					jQuery('#w3l_stats2').html(330);
				}, 1000);
			</script>
			<script>
				window.odometerOptions = {
				  format: '(,ddd).dd'
				};
				setTimeout(function(){
					jQuery('#w3l_stats3').html(22496);
				}, 1000);
			</script>
			<script>
				window.odometerOptions = {
				  format: '(,ddd).dd'
				};
				setTimeout(function(){
					jQuery('#w3l_stats4').html(620);
				}, 1000);
			</script>
		<!-- //odometer-script -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	

<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

<script>
  $('a.colord').click(function(){

if($(this).text() == 'need in Colour too') {

$(this).text('need in Black and White only');
  

}else if($(this).text() == 'need in Black and White only') {
$(this).text('need in Colour too');
}else {
$(this).text('need in Black and White only');

}

$('#clr_pages').toggle();
$('#clr_pages input').toggle();
});



var qtyprint = $('#qtyprint');
 var coverq = $('#coverq');
  coverq.val(qtyprint.val());
  coverq.attr('max',qtyprint.val());
  coverq.attr('type','number');

  $('#coverq').on('keyup', function(){
var qtyprint = $('#qtyprint');

  if($(this).val() > qtyprint.val()){
    $(this).val(qtyprint.val())
  } 
})

  $('#qtyprint').on('keyup', function(){

  var coverq = $('#coverq');
  coverq.val($(this).val());
  coverq.attr('max',$(this).val());
  coverq.attr('type','number');
  
$('#coverq').on('keyup', function(){
var qtyprint = $('#qtyprint');

  if($(this).val() > qtyprint.val()){
    $(this).val(qtyprint.val())
} 
})
})
</script>

<script>
$('.buttonorder').on('click', function(){
$(this).parent().hide()
if($('#bwpages').val() == ''){
  $('.p_BW').text('0');
  $('input.p_BW').val('0');
}else {
  $('.p_BW').text($('#bwpages').val());
  $('input.p_BW').val($('#bwpages').val());
}



if($('#qtyprint2').val() == ''){
  $('.p_pages').text('0');
  $('input.p_pages').val('0');
}else {
  $('.p_sets').text($('#qtyprint2').val());
  $('input.p_sets').val($('#qtyprint2').val());
}



if($('#cpages').val() == ''){
  $('.p_clr').text('0');
  $('input.p_clr').val('0');
}else {
  $('.p_clr').text($('#cpages').val());
  $('input.p_clr').val($('#cpages').val());
}

if($('#qtyprint').val() == ''){
  $('.p_copies').text('0');
  $('input.p_copies').val('0');
}else {
  $('.p_copies').text($('#qtyprint').val());
  $('input.p_copies').val($('#qtyprint').val());
}

if($('#totalp').val() == ''){
  $('.p_total').text('0');
  $('input.p_total').val('0');
}else {
  $('.p_total').text($('#totalp').val());
  $('input.p_total').val($('#totalp').val());
}

if($('#pages').val() == ''){
  $('.t_BW').text('0');
  $('input.t_BW').val('0');
}else {
  $('.t_BW').text($('#pages').val());
  $('input.t_BW').val($('#pages').val());
}

if($('#pagesc').val() == ''){
  $('.t_clr').text('0');
  $('input.t_clr').val('0');
}else {
  $('.t_clr').text($('#pagesc').val());
  $('input.t_clr').val($('#pagesc').val());
}

if($('#qtyt').val() == ''){
  $('.t_copies').text('0');
  $('input.t_copies').val('0');
}else {
  $('.t_copies').text($('#qtyt').val());
  $('input.t_copies').val($('#qtyt').val());
}


if($('#qtyt2').val() == ''){
  $('.t_pages').text('0');
  $('input.t_pages').val('0');
}else {
  $('.t_pages').text($('#qtyt2').val());
  $('input.t_pages').val($('#qtyt2').val());
}


if($('#totalt').val() == ''){
  $('.t_total').text('0');
  $('input.t_total').val('0');
}else {
  $('.t_total').text($('#totalt').val());
  $('input.t_total').val($('#totalt').val());
}

if($('#totalb').val() == ''){
  $('.b_total').text('0');
  $('input.b_total').val('0');
}else {
  $('.b_total').text($('#totalb').val());
  $('input.b_total').val($('#totalb').val());
}

if($('#extras').val() == ''){
  $('.e_total').text('0');
  $('input.e_total').val('0');
}else {
  $('.e_total').text($('#extras').val());
  $('input.e_total').val($('#extras').val());
}

if($('#coverq').val() == ''){
  $('.b_copies').text('0');
  $('input.b_copies').val('0');
}else {
  $('.b_copies').text($('#coverq').val());
  $('input.b_copies').val($('#coverq').val());
}

if($('#cd').val() == ''){
  $('.e_cd').text('0');
  $('input.e_cd').val('0');
}else {
  $('.e_cd').text($('#cd').val());
  $('input.e_cd').val($('#cd').val());
}

if($('#cdpoket').val() == ''){
  $('.e_cdp').text('0');
  $('input.e_cdp').val('0');
}else {
  $('.e_cdp').text($('#cdpoket').val());
  $('input.e_cdp').val($('#cdpoket').val());
}

if($('#tsleeve').val() == ''){
  $('.e_tr').text('0');
  $('input.e_tr').val('0');
}else {
  $('.e_tr').text($('#tsleeve').val());
  $('input.e_tr').val($('#tsleeve').val());
}

if($('#totalcost').val() == ''){
  $('.grand_total').text('0');
  $('input.grand_total').val('0');
}else {
  $('.grand_total').text($('#totalcost').val());
  $('input.grand_total').val($('#totalcost').val());
}


  if($('#letters').is(":checked")){
    $('.b_true2').val('1');
    $('.b_true').text('Yes');
  }else {
    $('.b_true').text('No');
    $('.b_true2').val('0');
  }

  var bcover = $('#bcover').val();
$('.b_bin2').val(bcover);

  if(bcover == '0'){
    $('.b_bin').text('Not Selected');
  }else if(bcover == '18'){
    $('.b_bin').text('Hard Bound Buckram Cover (£18)');
  }else if(bcover == '15'){
    $('.b_bin').text('Hard Bound Magesta Cover (£15)');
  }else if(bcover == '10'){
    $('.b_bin').text('Soft Bound Magesta Cover (£10)');
  }else if(bcover == '7'){
    $('.b_bin').text('Soft Bound Acetate Covers (£7)');
  }else if(bcover == '5'){
    $('.b_bin').text('Wiro Bound (£5)');
  }



$('.end_count').toggle();
$('.form_to_put').toggle();

});



$('#cpages').on('keyup', function(){
  var qty = $('#qtyprint2').val();
  var val = parseInt($(this).val());
  if(val > qty){
    $(this).val(qty);
  $('#bwpages').val(0);
  }else {
    var total = qty - val;
    $('#bwpages').val(total);
  }
});

$('#bwpages').on('keyup', function(){
  var qty = $('#qtyprint2').val();
  var val = parseInt($(this).val());
  if(val > qty){
    $(this).val(qty);
    $('#cpages').val(0);
  }else {
    var total = qty - val;
    $('#cpages').val(total);
  }
});









$('#pages').on('keyup', function(){
  $('#clr_pages').show();
  $('#pagesc').show();
  $('.colord').text('need in Black and White only')
  var qty = $('#qtyt2').val();
  var val = parseInt($(this).val());
  if(val > qty){
    $(this).val(qty);
  $('#pagesc').val(0);
  }else {
    var total = qty - val;
    $('#pagesc').val(total);
  }
});

$('#pagesc').on('keyup', function(){
  var qty = $('#qtyt2').val();
  var val = parseInt($(this).val());
  if(val > qty){
    $(this).val(qty);
    $('#pages').val(0);
  }else {
    var total = qty - val;
    $('#pages').val(total);
  }
});



$('.btn_reset').click(function (){
$('.end_count').toggle();
$('.form_to_put').toggle();
$('.services').toggle();
});

$('#letters').click(function(){
$('#colourhotfoil').toggle();
$('#colourhotfoil *').toggle();


  var val= $('#bcover').val();
  if(val == '7' || val == '5'){
    $('.txt_cl').hide();
    $('#image').attr('src','images/trans_cover.png');
  }else {
    $('.txt_cl').show();
    $('#image').attr('src','images/blackcover.png');
  }
  
});

$('#RoseGold').click(function(){
  $('.hotfoilcolour').val('images/green_cover.png');
  $('#image').attr('src', 'images/green_cover.png');
});
$('#Silver').click(function(){
	$('.hotfoilcolour').val('images/silver_cover.png');
	$('#image').attr('src', 'images/silver_cover.png');
});
$('#Gold').click(function(){
  $('.hotfoilcolour').val('images/blackcover.png');
  $('#image').attr('src', 'images/blackcover.png');
});

$('#Red').click(function(){
  $('.hotfoilcolour').val('images/Red_cover.png');
  $('#image').attr('src', 'images/Red_cover.png');
});
$('#logono').click(function(){
	$('#logoupload').hide();
	$('#logoupload *').hide();
	$('.logo').val('false');
});
$('#logoyes').click(function(){
	$('#logoupload').show();
	$('#logoupload *').show();
	$('.logo').val('true');
});

$('#rt1').on('keyup', function(){
var txt = $(this).val();
$('.frontwriting').text(txt);
$('.rt1').val(txt);

});
$('#rt2').on('keyup', function(){
var txt = $(this).val();
$('.frontwriting2').text(txt);
$('.rt2').val(txt);
});
$('#rt3').on('keyup', function(){
	var txt = $(this).val();
	$('.frontwriting3').text(txt);
	$('.rt3').val(txt);
});

$('#rt10').on('keyup', function(){
	var txt = $(this).val();
	$('.frontwriting10').text(txt);
	$('.rt10').val(txt);
});

$('#rt11').on('keyup', function(){
  var txt = $(this).val();
  $('.frontwriting11').text(txt);
  $('.rt11').val(txt);
});
$('#rt12').on('keyup', function(){
  var txt = $(this).val();
  $('.frontwriting12').text(txt);
  $('.rt12').val(txt);
});
$('#rt4').on('keyup', function(){
var txt = $(this).val();
$('.frontwriting4').text(txt);
$('.rt4').val(txt);
});
$('#rt5').on('keyup', function(){
var txt = $(this).val();
$('.frontwriting5').text(txt);
$('.rt5').val(txt);
});
$('#rt6').on('keyup', function(){
var txt = $(this).val();
$('.frontwriting6').text(txt);
$('.rt6').val(txt);
});

function readURL(input) {

    if (input.files && input.files[0]) {


        var fileName = $('#myImage').val();
        var idxDot = fileName.lastIndexOf(".") + 1;
        var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
        if (extFile=="png"){

	        var reader = new FileReader();

	        reader.onload = function (e) {
	            $('#liveLogo').show();
	            $('.frontwriting').hide();
	            $('#liveLogo').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);

    	}
        else{
            alert("Only png files are allowed!");
			$('#myImage').val('');
			$('.writing').show();
			$('#liveLogo').attr('src','').hide();
        }
    }
}

$('#myImage').change(function(){
    readURL(this);
});

$('#Silver_foil').click(function(){

$('.cover').removeClass('rose');
$('.cover').removeClass('gold');
$('.cover').css('color','silver').addClass('silver');
$('.text_color').val('silver');
});

$('#Gold_foil').click(function(){
$('.cover').removeClass('rose');
$('.cover').removeClass('silver');
$('.cover').css('color','gold').addClass('gold');
$('.text_color').val('gold');
});

$('#Black_foil').click(function(){
$('.cover').removeClass('silver');
$('.cover').removeClass('gold');
$('.cover').css('color','').addClass('rose');
$('.text_color').val('rose');
});


$('#rt7').click(function(){

$('.cover').addClass('spine');

});

$('#rt8').click(function(){

$('.cover').removeClass('spine');

});


$('#l_position_1').click(function(){
	if($('#myImage').val()){
		$('#liveLogo').attr('class','');
		$('.writing').show();
		$('.frontwriting').hide();
		$('#liveLogo').addClass('pos1');
	}else{
		alert('Pick the logo first!');
	}
});

$('#l_position_2').click(function(){
	if($('#myImage').val()){
		$('.writing').show();
		$('.frontwriting2').hide();
		$('#liveLogo').attr('class','');
		$('#liveLogo').addClass('pos2');
	}else{
		alert('Pick the logo first!');
	}
});
$('#l_position_3').click(function(){
	if($('#myImage').val()){
		$('.writing').show();
		$('.frontwriting3').hide();
		$('#liveLogo').attr('class','');
		$('#liveLogo').addClass('pos3');
	}else{
		alert('Pick the logo first!');
	}
});
$('#l_position_4').click(function(){
	if($('#myImage').val()){
		$('.writing').show();
		$('.frontwriting10').hide();
		$('#liveLogo').attr('class','');
		$('#liveLogo').addClass('pos4');
	}else{
		alert('Pick the logo first!');
	}
});
$('#l_position_5').click(function(){
	if($('#myImage').val()){
		$('.writing').show();
		$('.frontwriting11').hide();
		$('#liveLogo').attr('class','');
		$('#liveLogo').addClass('pos5');
	}else{
		alert('Pick the logo first!');
	}
});
$('#logono').click(function(){
$('#liveLogo').hide();
$('.writing').show()
});
$('[name="spine_up_down"]').on('change', function(){
$('.spine_up_down').val($(this).val());
});
$('[name="l_position"]').on('change', function(){
$('.l_position').val($(this).val());
});

$('#bcover').on('change', function(){

  var val= $(this).val();
  if(val == '7' || val == '5'){
    $('.txt_cl').hide();
    $('#image').attr('src','images/trans_cover.png');
  }else {
    $('.txt_cl').show();
    $('#image').attr('src','images/blackcover.png');
  }
});



$('#bwpages').on('keydown, keyup', function(e){
var num = $(this).val().match(/^\d+$/);
    if (num === null) {
        // If we have no match, value will be empty.
        $(this).val("");
    }
});


$('#cpages').on('keydown, keyup', function(e){
var num = $(this).val().match(/^\d+$/);
    if (num === null) {
        // If we have no match, value will be empty.
        $(this).val("");
    }
});


Calculate();

</script>
</body>
<!-- InstanceEnd --></html>