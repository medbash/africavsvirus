<?php
// class contact {
//     public function __construct()
//     {
//         require_once('config.php');
//         $this->post = $_POST;
//         $this->db = new mysqli(
// 			$config['host'],
//             $config['username'],
//             $config['password'],
//             $config['database']
// 		);
		
		
//         $this->response = 0;
//         return true;
//     }
//     public function save()	
//     {
// 		$this->firstname = $this->$_POST['firstname'];
// 		$this->lastname = $this->$_POST['lastname'];
// 		$this->date = $this->$_POST['date'];
//         $this->mobile = $this->$_POST['mobile']; 
//         $this->email = $this->$_POST['email']; 
//         $this->country = $this->$_POST['country']; 
//         $this->state = $this->$_POST['state'];
// 	    $this->address = $this->$_POST['address']; 
//         $this->organisation_name = $this->$_POST['organisation_name'];
//         $this->organisation_type = $this->$_POST['organisation_type'];
// 		$this->request = $this->$_POST['request'];
// 	    $sql = "INSERT INTO `identity`
//         (`firstname`,`lastname`,`date`,`mobile`, `email`,`country`,
// 		`state`,`address`, `organistion_name`,`organisation_type`,`request`)
//         values (
//         '$this->firstname',
//         '$this->lastname',
//         '$this->date',
//         '$this->mobile',
//         '$this->email',
//         '$this->country',
//         '$this->state',
//         '$this->address',
//         '$this->organisation_name',
//         '$this->organisation_type',
//         '$this->request'
// 		)
//         ";
//         return $this->response = $this->db->query($sql);
//     }
// }
// if($_POST)
// {
//     $handle= new contact();
// 	$handle->save();
// 	if(!$handle) {
// 		echo "Not yet registered.";
// 	}
// 	else {
// 		echo "Registered Successfully";
// 	}
// }

require_once('pdo.php');
if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['date'])
|| empty($_POST['mobile']) || empty($_POST['email']) || empty($_POST['country']) 
|| empty($_POST['state']) || empty($_POST['address']) || empty($_POST['organisation_name']) 
|| empty($_POST['organisation_type']) || empty($_POST['request']) ) {
             echo "All Informations must be provided.";
    }
//     session_start();
// 	if(isset($_POST['firstname'])
// 	 && isset($_POST['lastname'])
// 	  && isset($_POST['date'])
// && isset($_POST['mobile']) 
// && isset($_POST['email']) 
// && isset($_POST['country']) 
// && isset($_POST['state'])
//  && isset($_POST['address']) 
// && isset($_POST['organisation_name'])
// && isset($_POST['organisation_type'])
//  && isset($_POST['request'])) {
//     $sql2 = "SELECT name from signup where email = :email and email=:email";
//     $stmt2 = $pdo->prepare($sql2);
//     $stmt2->execute(array(
//         ':email'=> $_POST['email'],':mobile'=>$_POST['mobile']
// 	));
// }
    // else if($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
    //     $_SESSION['message'] = "<p1 style='color:red ;font-size:25px'>Email already in existence,try loggin in</p>";

    //     echo "<p1>Email is already in existence,try loggin in first.</p1>";
    // }   
 else {
        $sql = "INSERT INTO `identity` (firstname,lastname,email,mobile,date,country,state,
		address,organisation_name,organisation_type,request) values
        (:firstname,:lastname,:email,:mobile,:date,:country,:state,:address,:organisation_name,:organisation_type,:request)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
			':firstname' => $_POST['firstname'],':lastname' => $_POST['lastname'],
			':email' => $_POST['email'],':mobile' => $_POST['mobile'],':date' => $_POST['date'],
			':country' => $_POST['country'],':state' => $_POST['state'],
			':address' => $_POST['address'],
			':organisation_name' => $_POST['organisation_name'],
			':organisation_type' => $_POST['organisation_type'],':request' => $_POST['request']
        ));
        
        // header('location:signup.php');
    }
    
    if(!$stmt) {
        echo "You are not registered yet"; 
    }
    else {
        echo "You are successfully registered";
    }


 ?>
<!DOCTYPE HTML>
<html>
<head>
	<style type="text/css">
		.stepwizard-step p {
			margin-top: 10px;
		}
		.stepwizard-row {
			display: table-row;
		}
		.stepwizard {
			display: table;
			width: 50%;
			position: relative;
		}
		.stepwizard-step button[disabled] {
			opacity: 1 !important;
			filter: alpha(opacity=100) !important;
		}
		.stepwizard-row:before {
			top: 14px;
			bottom: 0;
			position: absolute;
			content: " ";
			width: 100%;
			height: 1px;
			background-color: #ccc;
			z-order: 0;
		}
		.stepwizard-step {
			display: table-cell;
			text-align: center;
			position: relative;
		}
		.btn-circle {
			width: 30px;
			height: 30px;
			text-align: center;
			padding: 6px 0;
			font-size: 12px;
			line-height: 1.428571429;
			border-radius: 15px;
		}
	</style>
	<title>Covid-19 Essential Providers CEP  | Home </title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	<!---End-smoth-scrolling---->
	<link href="css/component.css" rel="stylesheet" type="text/css"  />
	<script src="js/modernizr.custom.js"></script>
</head>
<body class="cbp-spmenu-push trans-bg" >
	<!--header-banner-->
	<div class="header-banner">
		<!-- <div class="banner-grids">
			<div class="baneer-grid1">
			</div>
			<div class="baneer-grid2">
			</div>
			<div class="baneer-grid3">	
			</div>
			<div class="baneer-grid4">
			</div>
			<div class="baneer-grid5">
			</div>
			<div class="baneer-grid6">
			</div>
			<div class="clearfix"></div>
		</div> -->
		<div class="top-header">
			<div class="container">
				<div class="logo">
					<a href="index.html">CEP</a>
				</div>
				<div class="top-nav">
					<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
						<h3>Menu</h3>
						<a href="index.html" >home</a>
						<a href="about.html">about CEP</a>
						<a href="request-service.html" class="active">request essentials</a>
						<a href="gallery.html">gallery</a>
						<a href="typo.html">typo</a>
						<a href="contact.html">contact</a>
					</nav>
					<div class="main buttonset">	
						<!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
						<button id="showRightPush"><img src="images/icon.png" alt=""/></button>
						<!--<span class="menu"></span>-->
					</div>
					<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
					<script src="js/classie.js"></script>
					<script>
						var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
						showRightPush = document.getElementById( 'showRightPush' ),
						body = document.body;

						showRightPush.onclick = function() {
							classie.toggle( this, 'active' );
							classie.toggle( body, 'cbp-spmenu-push-toleft' );
							classie.toggle( menuRight, 'cbp-spmenu-open' );
							disableOther( 'showRightPush' );
						};

						function disableOther( button ) {
							if( button !== 'showRightPush' ) {
								classie.toggle( showRightPush, 'disabled' );
							}
						}
					</script>
					<!-- /script-for-menu -->
				</div>
				<div class="clearfix"> </div>

			</div>
		</div>

	</div><br><br>
	<!--end-header-->
	<div style="color: white;" class="content"><br><br><br>
		<div class="container">
			<div class="col-md-6" style="margin-left: 50px;">
				<center>
					<div class="well" style="background: rgb(121,9,9); background: rgb(68,10,10); background: linear-gradient(90deg, rgba(68,10,10,0.9290091036414566) 57%, rgba(0,0,0,0.43601190476190477) 100%); border: none;">
				<h3>
					<?php
					function unique_code($limit)
					{
						return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
					}
					echo "Your application is receieved. Your ID is: cep#01_", unique_code(3);
					?>

				</h3>
				<p style="float: left;">Click here to go back to homepage. </p><br>
			</div>
		</div>
				</center>
			</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="footer-section">
	<div class="container">
		<div class="footer-top">
			<p>Copyright &copy; 2015 <span>Solutem.</span> All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
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
				 <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
			</div>



			<script type="text/javascript">
				$(document).ready(function () {
					var navListItems = $('div.setup-panel div a'),
					allWells = $('.setup-content'),
					allNextBtn = $('.nextBtn'),
					allPrevBtn = $('.prevBtn');

					allWells.hide();

					navListItems.click(function (e) {
						e.preventDefault();
						var $target = $($(this).attr('href')),
						$item = $(this);

						if (!$item.hasClass('disabled')) {
							navListItems.removeClass('btn-primary').addClass('btn-default');
							$item.addClass('btn-primary');
							allWells.hide();
							$target.show();
							$target.find('input:eq(0)').focus();
						}
					});

					allPrevBtn.click(function(){
						var curStep = $(this).closest(".setup-content"),
						curStepBtn = curStep.attr("id"),
						prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

						prevStepWizard.removeAttr('disabled').trigger('click');
					});

					allNextBtn.click(function(){
						var curStep = $(this).closest(".setup-content"),
						curStepBtn = curStep.attr("id"),
						nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
						curInputs = curStep.find("input[type='text'],input[type='url']"),
						isValid = true;

						$(".form-group").removeClass("has-error");
						for(var i=0; i<curInputs.length; i++){
							if (!curInputs[i].validity.valid){
								isValid = false;
								$(curInputs[i]).closest(".form-group").addClass("has-error");
							}
						}

						if (isValid)
							nextStepWizard.removeAttr('disabled').trigger('click');
					});

					$('div.setup-panel div a.btn-primary').trigger('click');
				});
			</script>
		</body>
		</html> 