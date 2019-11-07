<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Charts</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        <?php
		include('nav.php');
		?>
		</header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
<?php include('nav.php'); ?>            
			</div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card m-b-30">
								<?php
								require('functions/functions.php');
								error_reporting(0);
								if(isset($_REQUEST['insert_pro']) && $_REQUEST['insert_pro']=='')
								{
									$product_title = $_POST['product_title'];
									$product_cat= $_POST['product_cat'];
									$product_brand = $_POST['product_brand'];
									$product_price = $_POST['product_price'];
									$product_desc = $_POST['product_desc'];
									$product_keywords = $_POST['product_keywords'];
								
									//getting the image from the field
									$product_image = $_FILES['product_image']['name'];
									$product_image_tmp = $_FILES['product_image']['tmp_name'];
									
									move_uploaded_file($product_image_tmp,"product_images/$product_image");
								
									 $insert_product = "insert into products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
									 
									 $insert_pro = mysqli_query($con, $insert_product);
									 
									 if($insert_pro){
									 
									 echo "<script>alert('Product Has been inserted!')</script>";
									 header("Location: chart.php");
									 
									 }
								}
								if(isset($_REQUEST['insert_pro']) && $_REQUEST['insert_pro']!=''){
									$edit_id=$_REQUEST['insert_pro'];
									$product_title = $_POST['product_title'];
									$product_cat= $_POST['product_cat'];
									$product_brand = $_POST['product_brand'];
									$product_price = $_POST['product_price'];
									$product_desc = $_POST['product_desc'];
									$product_keywords = $_POST['product_keywords'];
									if($_FILES['product_image']['name']!='')
									{
										$product_image = $_FILES['product_image']['name'];
										$product_image_tmp = $_FILES['product_image']['tmp_name'];
										move_uploaded_file($product_image_tmp,"product_images/$product_image");
										$insert_product = "update products set product_cat='$product_cat',product_brand='$product_brand',product_title='$product_title',product_price='$product_price',product_desc='$product_desc',product_image='$product_image',product_keywords='$product_keywords' where product_id='$edit_id';";
										$insert_pro = mysqli_query($con, $insert_product);
									}
									else
									{
										$insert_product = "update products set product_cat='$product_cat',product_brand='$product_brand',product_title='$product_title',product_price='$product_price',product_desc='$product_desc',product_keywords='$product_keywords' where product_id='$edit_id';";
										$insert_pro = mysqli_query($con, $insert_product);
									}
								}
								?>
								<?php
								if($_GET['edit_code']!=''){
								$edit_code=$_GET['edit_code'];
								$get_edit_details=mysqli_query($con,"select * from products where product_id='$edit_code';");
								$edit_code_p=mysqli_fetch_assoc($get_edit_details);
								$prod_code=$edit_code_p['product_id'];
								$prod_title=$edit_code_p['product_title'];
								$prod_cat=$edit_code_p['product_cat'];
								$prod_brand=$edit_code_p['product_brand'];
								$prod_image=$edit_code_p['product_image'];
								$prod_price=$edit_code_p['product_price'];
								$prod_desc=$edit_code_p['product_desc'];
								$prod_keyword=$edit_code_p['product_keywords'];
								}
								?>
								<p style="text-align: center;">Insert New Post Here</p>
                                   <fieldset>
								   <form method="post" enctype="multipart/form-data">
								   <legend style="font-size: 13px;">Product Title</legend>
								   <input type="text" value="<?php echo $prod_title; ?>" name="product_title" style="background-color: #f1f1f1; font-family: arial; padding: 3px;"></input>
								   </fieldset>
								   <br>
								    <fieldset>
								   <legend style="font-size: 13px;">Product Category</legend>
								   <select type="text" value="<?php echo $prod_cat; ?>" name="product_cat" style="background-color: #f1f1f1; width: 200px; padding: 3px; font-family: arial; padding: 3px;">
								   <?php
								   $get_details=mysqli_query($con,"select * from categories;");
								   while($get_details_1=mysqli_fetch_array($get_details))
								   {
									   echo '<option value='.$get_details_1[0].'>'.$get_details_1[1].'</option>';
								   }
								   ?>
								   </select>
								   </fieldset>
								   <br>
								    <fieldset>
								   <legend style="font-size: 13px;">Product Brand</legend>
								   <select type="text" value="<?php echo $prod_brand; ?>" name="product_brand" style="background-color: #f1f1f1; width: 200px; padding: 3px; font-family: arial; padding: 3px;">
								     <?php
								   $get_details=mysqli_query($con,"select * from brands;");
								   while($get_details_1=mysqli_fetch_array($get_details))
								   {
									   echo '<option value='.$get_details_1[0].'>'.$get_details_1[1].'</option>';
								   }
								   ?></select>
								   </fieldset>
								   <br>
								    <fieldset>
								   <legend style="font-size: 13px;">Product Image</legend>
								   <input type="file" name="product_image" style="background-color: #f1f1f1; font-family: arial; padding: 3px;"></input>
								   </fieldset>
								   <br>
								    <fieldset>
								   <legend style="font-size: 13px;">Product Price</legend>
								   <input type="text" value="<?php echo $prod_price; ?>" name="product_price" style="background-color: #f1f1f1; font-family: arial; padding: 3px;"></input>
								   </fieldset>
								     <br>
								    <fieldset>
								   <legend style="font-size: 13px;">Product Description</legend>
								   <textarea type="text" value="<?php echo $prod_desc; ?>" name="product_desc" style="background-color: #f1f1f1; width: 100%; font-family: arial; padding: 3px;"></textarea>
								   </fieldset>
								     <br>
								    <fieldset>
								   <legend style="font-size: 13px;">Product Keywords</legend>
								   <input type="text" value="<?php echo $prod_keyword; ?>" name="product_keywords" placeholder="keyword1,keyword2" style="background-color: #f1f1f1; font-family: arial; padding: 3px;"></input>
								   </fieldset>
								<div style="width: 100%; text-align: right; height: auto;">
								<button name="insert_pro" value="<?php echo $prod_code; ?>" style="background-color: #ffde59; padding:2px 5px 2px 5px;">Submit</button>
								</form>
								</div>
                                </div>
                            </div>
                       </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
