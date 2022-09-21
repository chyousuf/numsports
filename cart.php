<?php

session_start();

//session_destroy();

//var_dump($_SESSION['servicearray']);

if (isset($_POST) && $_POST['submit']) {

	if (array_search($_POST['service_name'], array_column($_SESSION['service_array'], 'service_name')) !== false) {

		$_SESSION['servicearray'][] = $_POST;

	} else {

	}

}



if (isset($_GET['action']) && isset($_GET['ID'])) {

	$servicearray = $_SESSION["servicearray"];

	foreach ($servicearray as $key => $sarray) {

		//echo $key;

		if ($_GET['ID'] == $sarray['ID']) {

			unset($_SESSION["servicearray"][$key]);

		}

	}

}





?>

<!doctype html>

<!--[if IE 7 ]> <html lang="en" class="ie7"> <![endif]-->

<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9 ]> <html lang="en" class="ie9"> <![endif]-->

<!--[if (gt IE 9)|!(IE)]><!-->

<html lang="en">

<!--<![endif]-->



<head>

	<meta charset="windows-1252">



	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<meta name="description" content="Add a custom touch to your vehicle by having the brake caliper painting with Mum Sports in Fremont & San Francisco Bay Area. Schedule your appointment today by calling us at (510) 657-3224.">

	<meta name="author" content="">

	<meta name="facebook-domain-verification" content="2u8cugdgu4hs8rr5oj0v86bsbfzvzt" />

	<link rel="shortcut icon" href="images/fav1.png">

	<title>Brake Caliper Painting Fremont & San Francisco Bay Area CA áß¡¦Mum Sports</title>

	<!-- Bootstrap core CSS -->

	<link href="css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->

	<!--[if lt IE 9]>

      <script src="js/html5shiv.js"></script>

      <script src="js/respond.min.js"></script>

    <![endif]-->



	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Yellowtail%7COpen%20Sans%3A400%2C300%2C600%2C700%2C800" media="screen" />

	<!-- Custom styles for this template -->

	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

	<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" media="screen" />

	<link href="css/jquery.fancybox.css" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">

	<link href="css/mobile.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />

	<link href="css/animate.min.css" rel="stylesheet">

	<link href="css/ts.css" type="text/css" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>





	<!-- Twitter Feed Scripts 

     Uncomment to activate



<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>

<script type="text/javascript" src="js/twitter/twitter_feed.js"></script> -->

	<?php include('fb-pixel.php');   ?>



	<script src="//scripts.iconnode.com/89292.js"></script>

	<style type="">

		#cart-sec {

    margin-top: 0;

    padding-top: 170px;
    margin-bottom: 50px;

}

#cart-sec h2 {

    font-size: 44px;

    line-height: 27px;

    font-weight: 700;

    margin-top: 15px;

    color: #111111;
    margin-bottom: 45px;

}



#cart-sec .table>:not(caption)>*>* {

    padding: 1.65rem 1.5rem;

}

#cart-sec .table-dark{

  background-color: #111;

}

#cart-sec table{

	margin-bottom: 110px;

}
.w-100{
 width: 100%;
}
.col-sm-12.d-flex.d-lg-none.justify-content-center{

display: none;

}

#cart-sec table th{

	font-size: 20px;

	font-weight: 600;

	text-transform: uppercase;

	line-height: 40px;

	color:#fff;
	height: 73px;

}

#cart-sec table td{

 line-height: 39px;

}

.remove-btn {

  background-color: rgb(199, 8, 27);

  width: 119px;

  height: 40px;

  font-size: 16px;

  font-family: "Open Sans";

  color: rgb(255, 255, 255);

  font-weight: bold;

  

    text-decoration: none;

  text-align: center;

  display: block;

  margin: 0 auto;

}

.remove-btn:hover{

	color:#fff;

}

#cart-sec .border-light{

	border-color: rgb(193, 193, 193)!important;

}

.your-form{

	background-color: #111111;

	padding: 60px 90px;

}

.form-heading{

  color: #fff;

  border-bottom: solid 1px rgb(193, 193, 193);

}

#cart-sec .form-heading h2{

  color: #fff;

}

#cart-sec .form {

	margin-top: 20px;

}

#cart-sec .form .form-control{

 width: 100%;

 padding: 22px 30px;

}

#cart-sec .form .form-select{

 padding: 10px 30px;

 background-position: right 1.75rem center;

}

#cart-sec .form input::-webkit-input-placeholder,#cart-sec .form textarea::-webkit-input-placeholder { /* Chrome/Opera/Safari */

  color: #000!important;

  font-weight: 600!important;;

  text-transform: uppercase;

}

#cart-sec .form input::-moz-placeholder, #cart-sec .form textarea::-moz-placeholder { /* Firefox 19+ */

  color: #000!important;

  font-weight: 600!important;

  text-transform: uppercase;
  opacity: 1;

}

#cart-sec .form input:-ms-input-placeholder,#cart-sec .form textarea::-ms-input-placeholder { /* IE 10+ */

  color: #000!important;

  font-weight: 600!important;
  text-transform: uppercase;

}

#cart-sec .form input:-moz-placeholder,#cart-sec .form textarea::-moz-placeholder { /* Firefox 18- */

  color: #000!important;

  font-weight: 600!important;

  text-transform: uppercase;

}



#cart-sec .form select{

	color: #000 !important;

  font-weight: 600;

  text-transform: uppercase;

}

#cart-sec .form textarea{

	height: 150px;

}

.submit-btn {

  background-color: rgb(199, 8, 27);;

  width: 100%;

  height: 61px;

    font-size: 18px;

  font-family: "Poppins";

  color: rgb(255, 255, 255);

  font-weight: 600;

  text-transform: uppercase;

  line-height:1;

}

.side-bar-header{

	font-size: 20px;

	font-weight: 600;

	text-transform: uppercase;

	line-height: 1;

	background-color: #111111;

	color: #fff;

	width: 100%;

	height: 73px;

	text-align: center;

	display: flex;

	justify-content: center;

	align-items: center;

	margin-top: 88px;

}

.service-img-box{

 position: relative;

}

.service-name{

  font-size: 16px;

  color: rgb(0, 0, 0);

  font-weight: 600;

  text-transform: uppercase;

  text-align: center;

  background-color: rgb(255, 255, 255);

  height: 50px;

   width: 242px;

   position: absolute;

   bottom: 10px;

   left: 0;

   right: 0;

   margin: 0 auto;

   display: flex;

    justify-content: center;

    align-items: center;

}

.service-name a{

	text-decoration: none;

	color: rgb(0, 0, 0);

}

.table{

	width: 100%;

}

.service-td{

  width: 30%;

}

.package-td{

width: 50%;

}

.update-td{

 width: 20%;

}
.remove-btn i{
  display: none;
}
.sidebar-service{
	width: 100%;
	height: auto;
	 transition: transform .2s;
}
.sidebar-service:hover,.sidebar-service:hover .service-name{
	 background-color: #B8091B;
    outline: 0;
    color: #fff;
    opacity: 0.9;
}
.justify-content-center{
 justify-content: center;
}
@media (max-width: 1199px)

{

	.your-form{

    padding: 60px;

	}
	.sidebar-service:hover,.sidebar-service:hover .service-name{
	 background-color: #B8091B;
    outline: 0;
    color: #fff;
}

}

@media (max-width: 991px){

	.col-sm-12.d-flex.d-lg-none.justify-content-center{

 display: flex;

 justify-content: center;

}

.col-sm-6.col-md-4.col-xl-3.d-none.d-lg-block{

 display: none;

}

	

#cart-sec table{

	margin-bottom: 50px;

}

.side-bar{

	margin-bottom: 30px;

}

.side-bar-header{

	margin-top: 0;

	

}
#cart-sec{
	padding-top: 150px;
}
.ipad-show {
    display: flex;
    flex-direction: row;
    /* justify-content: unset; */
}
.service-name{
 width: 204px;
}
.sidebar-service{
	padding: 0 10px;
}
}

@media (max-width: 667px){

	/*#cart-sec .table>:not(caption)>*>*{

	padding: 10px;

}*/
.ipad-show {
    
    flex-direction: column;
    /* justify-content: unset; */
}
.service-name{
 width: 242px;
}
.sidebar-service{
	padding: unset;
}
.service-img-box {

  height: 70px;

  overflow: hidden;

}
.remove-btn span{
  display: none;
}
.remove-btn i{
  display: block;
}
.remove-btn {

  width: 22px;

  font-size: 19px;

	height: 22px;

	background-color: #fff;

	color: rgb(199, 8, 27);

}

#cart-sec table th{

	font-size: 14px;

	padding: 20px 30px;

	color:#FFF !important;

}

#cart-sec table td {

    line-height: 20px;

    font-size: 12px;

}

#cart-sec h2{

	font-size: 30px;
	margin-bottom: 25px;

}

.your-form{

	padding: 30px;

}




#cart-sec{
	padding-top: 120px;
}


}



</style>

</head>

<?php include('header.php');   ?>



<body>

	<section id="cart-sec" class="cart-page">

		<div class="container">



			<div class="row justify-content-center">

				<div class=" col-12 col-md-8 col-lg-9">

					<div class="cart-content">

						<h2 class="text-uppercase mb-5">Your Bag</h2>

						<table class="table table-bordered">

							<thead>

								<tr class="table-dark table-bordered border-light">

									<th class="service-td">Service</th>

									<th class="package-td">Package</th>

									<th class="update-td text-center">Update</th>

								</tr>

							</thead>

							<tbody>

								<?php

								if (isset($_SESSION["servicearray"])) {

									$servicearray = $_SESSION["servicearray"];

									foreach ($servicearray as $sarray) {



										if ($ids_values != $sarray['ID']) {

								?>

											<tr>

												<td><?php echo $sarray['service_page_name'];  ?></td>

												<td><?php echo $sarray['service_name'];  ?></td>

												<?php $remove_cart = 'https://www.mumsports.com/cart?action=remove&ID='

													. $sarray['ID'];    ?>

												<td><a href="<?php echo $remove_cart;  ?>" class="remove-btn"><span class=" ">Remove</span> <i class="fa fa-trash"></i></a></td>

											</tr>



								<?php }

										$ids_values = $sarray['ID'];

									}

								}

								?>



							</tbody>

						</table>

						<div class="col-sm-12 d-flex d-lg-none justify-content-center">

							<div class="side-bar">

								<div class="side-bar-header margin-bottom-25">

									<span>add more services</span>

								</div>

							<div class="ipad-show">
									<a href="ceramicpro-inner" class="sidebar-service">	<div class="service-img-box margin-bottom-25">

							<img src="/images/img-1.jpg" class="w-100">

							

								<div class="service-name">

									<span>ceramic pro</span>

								</div>

							

						</div></a>



						<a href="paint-protection-film" class="sidebar-service"><div class="service-img-box margin-bottom-25">

							<img src="/images/img-4.jpg" class="w-100">

							

								<div class="service-name">

									<span>Paint Protection Film</span>

								</div>

							

						</div></a>

					<a href="auto-detailing" class="sidebar-service">	<div class="service-img-box margin-bottom-25">

							<img src="/images/img-5.jpg" class="w-100">

							

								<div class="service-name">

									<span>Auto Detailing</span>

								</div>

							

						</div></a>
							</div>

							</div>

						</div>

						<div class="your-form" style="margin-bottom: 60px;">

							<div class="form-heading">

								<h2 class="text-center text-uppercase mb-5">YOUR INFO</h2>

							</div>

							<div class="form">

								<form id="cartForm" method="post">

									<div class="row">

										<div class="col-md-6">

											<input type="text" name="firstname" id="firstname" placeholder="FIRST NAME" class="form-control margin-bottom-25">

										</div>

										<div class="col-md-6">

											<input type="text" name="lastname" id="lastname" placeholder="LAST NAME" class="form-control margin-bottom-25">

										</div>

										<div class="col-md-6">

											<input type="text" name="phone" id="phone" placeholder="PHONE" class="form-control margin-bottom-25">

										</div>

										<div class="col-md-6">

											<input type="text" name="email" id="email" placeholder="EMAIL" class="form-control margin-bottom-25">

										</div>

									</div>

									<div class="row">

										<div class="col-md-4">

											<input type="text" name="year" id="year" placeholder="Year" class="form-control margin-bottom-25">

										</div>

										<div class="col-md-4">

											<input type="text" name="make" id="make" placeholder="Make" class="form-control margin-bottom-25">

										</div>

										<div class="col-md-4">

											<input type="text" name="model" id="model" placeholder="Model" class="form-control margin-bottom-25">

										</div>

									</div>

									<div class="row">

										<div class="col-md-12">

											<textarea name="msg" class="form-control margin-bottom-25" placeholder="Message" id="floatingTextarea"></textarea>

										</div>

									</div>

									<div style="clear:both; margin-bottom:15px;"></div>

									<div id="gCaptcha" style="margin-left: 16px;"></div>

									<div style="clear:both; margin-bottom:15px;"></div>

									<div class="row">

										<div class="col-md-12">

											<input id="submit_btn" type="submit" name="" class="submit-btn" value="Send Request">

										</div>

									</div>



									<br>

									<div class="form-response-output p-2"></div>

							</div>

							</form>

						</div>

					</div>

				</div>



				<div class="col-sm-6 col-md-4 col-lg-3 d-none d-lg-block">

					<div class="side-bar">

						<div class="side-bar-header margin-bottom-25">

							<span>add more services</span>

						</div>

					<a href="ceramicpro-inner" class="sidebar-service">	<div class="service-img-box margin-bottom-25">

							<img src="/images/img-1.jpg" class="w-100">

							

								<div class="service-name">

									<span>ceramic pro</span>

								</div>

							

						</div></a>



						<a href="paint-protection-film" class="sidebar-service"><div class="service-img-box margin-bottom-25">

							<img src="/images/img-4.jpg" class="w-100">

							

								<div class="service-name">

									<span>Paint Protection Film</span>

								</div>

							

						</div></a>

					<a href="auto-detailing" class="sidebar-service">	<div class="service-img-box margin-bottom-25">

							<img src="/images/img-5.jpg" class="w-100">

							

								<div class="service-name">

									<span>Auto Detailing</span>

								</div>

							

						</div></a>

					</div>

				</div>

			</div>

		</div>

	</section>



	<!--content ends-->

	<div class="clearfix"></div>



	<div class="dlab-newsletter footer-call-to-action wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeIn;">

		<div class="container equal-wraper">

			<form class="dzSubscribe" method="post">

				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-5">

						<div class="icon-bx-wraper equal-col p-t30 p-b20 left" style="height: 117px;">

							<div class="icon-lg text-white radius">

								<i class="fa fa-envelope"></i>

							</div>

							<div class="icon-content">

								<span class="text-uppercase">Email</span>

								<h4 class="dlab-tilte"><a href="mailto:info@mumsports.com">info@mumsports.com</a></h4>

							</div>

						</div>

					</div>

					<div class="col-lg-4 col-md-4 col-sm-5">

						<div class="icon-bx-wraper equal-col p-t30 p-b20 left" style="height: 117px;">

							<div class="icon-lg text-white radius">

								<i class="fa fa-phone"></i>

							</div>

							<div class="icon-content">

								<span class="text-uppercase">Phone</span>

								<h4 class="dlab-tilte"><a href="tel:5106573224">510-657-3224</a></h4>

							</div>

						</div>

					</div>

					<div class="col-lg-3 col-md-3 col-sm-2 offset-lg-1 offset-md-1">

						<div class="equal-col p-t40 p-b10 skew-subscribe" style="height: 117px;">

							<a name="submit" href="contact-us" class="site-button-secondry button-skew btn btn-default"> <span>Contact Now </span> <i class="fa fa-angle-right"></i> </a>

						</div>

					</div>

				</div>

			</form>

		</div>

	</div>



	<?php include('footer.php');   ?>