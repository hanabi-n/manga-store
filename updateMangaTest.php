<?php if(!isset($_SESSION)) { 
	
	session_start(); 	
} 
?>


<?php
		
		if(!isset($_SESSION['userName'])){
			header("Location:index.php");
		}else{
			$uname = $_SESSION['userName']['firstname'];
			$email = $_SESSION['userName']['email'];
			$id    = $_SESSION['userName']['id'];
			$uid   = $_SESSION['userName']['role_id'];
		}    
		
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Test</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<!-- <link rel="stylesheet" type="text/css" href="manga.css"> -->
	<link rel="stylesheet" type="text/css" href="main.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/jquery.min.js"></script>

	<style>

		.editPage {
			margin-top: 160px;
		}
		.text.profile {

			width: 450px;
			height: 1180px;
			transform: translate(-8%, -8%);
			/* z-index: 2; */
		}

		.form-group {
			flex-flow: wrap;
			display: flex;
		}

		.form-control update_manga{
			margin: 0 auto;
			width: 350px;
		}
		
		.wrapper.fadeInDown{
			width: 900px;
		}

		.nav-tabs {
			padding: 20px 0;
		}


		.input_class{
			margin-left: 50px;
		}

		.dropdown-menu {
			width: 190px;
		}

		@media only screen and (max-device-width: 480px) {
            .form-group {
                margin-left: 25px;
            }

			.nav-tabs {
				margin-left: 0px;
			}
        }

	</style>

</head>
<body>

	<div class="container_nav">
        <nav class=" navbar-expand-lg navbar navbar-light">
                <div class="container">
                <a class="navbar-brand" href="#">M<span>L</span></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item">
                                <!-- <a class="nav-link" href="manga.php">Manga Shop</a> -->
                            </li>

                        </ul>
                        

                        <ul class="navbar-nav mr-left">
                            <div class="dropdown">

                                <button class="btn btn-secondary" style="background: #fff;" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bars"></i>
                                </button>
                                    
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
									<button class="dropdown-item first" type="button"> 
										<a class="user_name" ><?php echo $uname; ?></a>
										
										<br>
													
											<a class="dropdown_first_profile" href="addManga.php">        
													
												<?php 
													if (isset($_COOKIE['lang_manga'])) {
														if($_COOKIE['lang_manga']=='ru'){
															echo "Добавить мангу";
														}elseif($_COOKIE['lang_manga']=='en'){
															echo "Add manga";
														}
													}else{echo "Add manga";}
												?>
													
											</a>   
											<div class="dropdown-divider"></div>
											<a class="dropdown_first_profile" href="#">        
													
												<?php 
													if (isset($_COOKIE['lang_manga'])) {
														if($_COOKIE['lang_manga']=='ru'){
															echo "Изменить мангу";
														}elseif($_COOKIE['lang_manga']=='en'){
															echo "Change manga";
														}
													}else{echo "Change manga";}
												?>   
											</a>  
										

									</button>

									<div class="dropdown-divider"></div>
									
									<a class="dropdown-item" type="button" href="data/logout.php">
										<?php 
											if (isset($_COOKIE['lang_manga'])) {
												if($_COOKIE['lang_manga']=='ru'){
													echo "Выйти";
												}elseif($_COOKIE['lang_manga']=='en'){
													echo "Logout";
												}
											}else{echo "Logout";}
										?>
									</a>
								
								</div>
								

								
                            </div>
							
							<div class="dropdown-second" aria-labelledby="dropdownMenu2">
								<button class="dropdown-item first" type="button"> 
									<a class="user_name" ><?php echo $uname; ?></a>
									
									<br>

										<?php
											if($uid == '1'){
										
										?>
											<a class="dropdown_first_profile" href="data/adminPageUsers.php">                                           
													<?php 
														if (isset($_COOKIE['lang_manga'])) {
															if($_COOKIE['lang_manga']=='ru'){
																echo "Удалить пользователей";
															}elseif($_COOKIE['lang_manga']=='en'){
																echo "Delete users";
															}
														}else{echo "Delete users";}
													?>   
												<i class="fas fa-chevron-right"></i>
											</a>
											<br>
											<a class="dropdown_first_profile" href="data/adminPageManga.php">                                           
													<?php 
														if (isset($_COOKIE['lang_manga'])) {
															if($_COOKIE['lang_manga']=='ru'){
																echo "Удалить мангу";
															}elseif($_COOKIE['lang_manga']=='en'){
																echo "Delete manga";
															}
														}else{echo "Delete manga";}
													?>   
												<i class="fas fa-chevron-right"></i>
											</a>
										<?php
											}elseif($uid == '2'){
											
										?> 
												
										<a class="dropdown_first_profile" href="addManga.php">        
												
												<?php 
														if (isset($_COOKIE['lang_manga'])) {
															if($_COOKIE['lang_manga']=='ru'){
																echo "Добавить мангу";
															}elseif($_COOKIE['lang_manga']=='en'){
																echo "Add manga ";
															}
														}else{echo "Add manga";}
												?>               
										</a>   
										<div class="dropdown-divider"></div>
										<a class="dropdown_first_profile" href="data/moderatorPage.php">        
												
												<?php 
														if (isset($_COOKIE['lang_manga'])) {
															if($_COOKIE['lang_manga']=='ru'){
																echo "Редактировать мангу";
															}elseif($_COOKIE['lang_manga']=='en'){
																echo "Edit manga ";
															}
														}else{echo "Edit manga";}
												?>  
										</a>  
										
										<?php
											}else{
										?>
										
										<a class="dropdown_first_profile" href="myProfile.php">
																				
												<?php 
														if (isset($_COOKIE['lang_manga'])) {
															if($_COOKIE['lang_manga']=='ru'){
																echo "Мой профиль";
															}elseif($_COOKIE['lang_manga']=='en'){
																echo "My Profile";
															}
														}else{echo "My Profile";}
												?>  
											<i class="fas fa-chevron-right"></i>
										</a>

										<button class="dropdown-item" type="button"> <a href="myManga2.php">
												<?php 
														if (isset($_COOKIE['lang_manga'])) {
															if($_COOKIE['lang_manga']=='ru'){
																echo "Моя Библиотека";
															}elseif($_COOKIE['lang_manga']=='en'){
																echo "My Library";
															}
														}else{echo "My Library";}
												?> 
										</a></button>

										<?php
											}
										
										?>
								</button>
								<!-- roles -->

								<div class="dropdown-divider"></div>
								
								<a class="dropdown-item" type="button" href="data/logout.php">
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Выйти";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Logout";
										}
									}else{echo "Logout";}
								?>  
								</a>
                        
                    		</div>

                        </ul>   
                    </div>
                </div>
        </nav> 
    </div>

<?php include('data/functionManga.php'); ?>

<?php
	if(isset($_POST["manga_update"])){
		$cn=makeconnection();

		$target_dir = "Frame 4/banners/";/////CHANGE ITTTTT

		//manga_image
		$target_file = $target_dir.basename($_FILES["manga_image"]["name"]);
		$uploadok = 1;
		$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
		
		if(move_uploaded_file($_FILES["manga_image"]["tmp_name"], $target_file)){
				
		}else{			 
				if (isset($_COOKIE['lang_manga'])) {
					if($_COOKIE['lang_manga']=='ru'){
						echo "Извините, мы не можем обновить ваш файл";
					}elseif($_COOKIE['lang_manga']=='en'){
						echo "Sorry there was an error uploading your file.";
					}
				}else{echo "Sorry there was an error uploading your file.";};
		}
	}
	 
?>

<?php
	if(isset($_POST["manga_update"]))
	{ 
		$cn=makeconnection();
		
		if (empty($_FILES['manga_title']['name'])) {
		
			$s="UPDATE manga set manga_title='" . $_POST["manga_title"] . "',manga_author='" 
			. $_POST["manga_author"] . "', manga_image='" . $_POST["manga_image_old"] 
			. "',manga_descr='" . $_POST["manga_descr"] ."', old_price='" 
			. $_POST["old_price"] ."', promotion='" . $_POST["promotion"] ."', genre='" . $_POST["genre"] 
			."' where publisherid='" . $_POST["publisherid"] . "'";
		
	}
	else
	{
		$filename= basename($_Files["manga_image"]["name"]);
		// basename($_FILES["manga_image"]["name"])
		
		$s="update manga set manga_title='" . $_POST["manga_title"] . "',manga_author='" 
		. $_POST["manga_author"] . "',manga_image=' $filename 
		',manga_descr='" . $_POST["manga_descr"] . "', old_price='" . $_POST["old_price"] 
		. "', promotion='" . $_POST["promotion"] ."' where publisherid='" . $_POST["publisherid"] . "'";}

		mysqli_query($cn,$s);
		mysqli_close($cn);
		

		if (isset($_COOKIE['lang_manga'])) {
			if($_COOKIE['lang_manga']=='ru'){
				echo "<script>alert('Запись обновлена');</script>";
			}elseif($_COOKIE['lang_manga']=='en'){
				echo "<script>alert('Record Update');</script>";
			}
		}else{echo "<script>alert('Record Update');</script>";}
		}

?>


<!--/sticky-->
<div class="container second update">
    <div class="wrapper fadeInDown">
		<div class="editPage" id="formContent">
        	<div class="text profile update_manga">
				<form method="post" enctype="multipart/form-data">

						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<div class="form-group manga_update">
								<label class="update_manga_label" ><b>
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Выбрать Мангу";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Select Manga";
										}
									}else{echo "Select Manga";}
								?> 
								</b> </label>
								<select class="form-control update_manga" name="publisherid" required/><option value="">
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Выбрать";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Select";
										}
									}else{echo "Select";}
								?> 
								</option>
							
									<?php
										$cn=makeconnection();
										$s="select * from manga";
										$result=mysqli_query($cn,$s);
										$r=mysqli_num_rows($result);
										//echo $r;

										while($data=mysqli_fetch_array($result))
										{
											if(isset($_POST["show"])&& $data[7]==$_POST["publisherid"])
											{
												echo"<option value=$data[7] selected>$data[1]</option>";
											}
											else
											{
												echo "<option value=$data[7]>$data[1]</option>";
											}

										}
										mysqli_close($cn);



									?>
								</select>
							</div>
							<!-- select manga  -->

							<div class="form-group manga_update">
								<button class="btn btn-third update_manga" type="submit" 
								value="
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Показать";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Show";
										}
									}else{echo "Show";}
								?> 
								" name="show" formnovalidate>
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "ПОКАЗАТЬ";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "SHOW";
										}
									}else{echo "SHOW";}
								?> 
								</button>
								<?php
									if(isset($_POST["show"]))
									{
									$cn=makeconnection();

									$s="select * from manga where publisherid='" .$_POST["publisherid"] ."'";

									// var_dump($s);

									$result=mysqli_query($cn,$s);
									$r=mysqli_num_rows($result);
									//echo $r;

									$data=mysqli_fetch_array($result);

									$manga_title=$data[1];
									$manga_author=$data[2];
									$manga_image=$data[3];
									$manga_descr=$data[4];
									$old_price=$data[5];
									$promotion=$data[6];
									$publisherid=$data[7];
									$genre=$data[8];
									// $Pic2=$data[6];
									// $Pic3=$data[7];


									mysqli_close($cn);

									}

								?>
							</div>
							<!-- кнопка show  -->

							<div class="form-group manga_update">
								<label class="update_manga_label"><b>
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Название Манги";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Manga Title";
										}
									}else{echo "Manga Title";}
								?> 
								</b></label>
								<input class="form-control update_manga" type="text"  value="<?php if(isset($_POST["show"])){ echo $manga_title ;} ?> " name="manga_title" required pattern="[a-zA-z _]{1,50}" 
								title="
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Пожалуйста Введите Только Символы для Названия Манги";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Please Enter Only Characters for Manga Title";
										}
									}else{echo "Please Enter Only Characters for Manga Title";}
								?> 
								"></input>
							</div>
							<!-- manga title  -->

							<div class="form-group manga_update">
								<label class="update_manga_label"><b>
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Автор Манги";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Manga Author";
										}
									}else{echo "Manga Author";}
								?> 
								</b></label>
								<input class="form-control update_manga" type="text"  value="<?php if(isset($_POST["show"])){ echo $manga_author ;} ?> " name="manga_author" required pattern="[a-zA-z _]{1,50}" 
								title="
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Пожалуйста Введите Только Символы для Названия Манги";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Please Enter Only Characters for Manga Title";
										}
									}else{echo "Please Enter Only Characters for Manga Title";}
								?>"
								></input>
							</div>
							<!-- manga author  -->
							
							<div class="form-group manga_update">
								<label class="update_manga_label"><b>
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Жанр Манги";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Manga Genre";
										}
									}else{echo "Manga Genre";}
								?> 
								</b></label>
								<input class="form-control update_manga" type="text"  value="<?php if(isset($_POST["show"])){ echo $genre ;} ?> " name="genre" required pattern="[a-zA-z _]{1,50}" 
								title="
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Пожалуйста Введите Только Символы для Жанра Манги";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Please Enter Only Characters for Manga Genre";
										}
									}else{echo "Please Enter Only Characters for Manga Genre";}
								?>"
								></input>
							</div>
							<!-- manga genre  -->

							
							<div class="form-group manga_update">
								<label class="update_manga_label" style="margin-right: 60px;"><b>
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Старая Картина";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Old Image";
										}
									}else{echo "Old Image";}
								?> 
								</b></label>
								<br>
								<img class="image_old" src="Frame 4/banners/<?php echo @$manga_image; ?>" width="150px" height="200px" />
								<input class="form-control update_manga"  type="hidden" name="manga_image_old" value="<?php if(isset($_POST["show"])) {echo $manga_image;} ?>" />
							</div>
							<!-- old image  -->

							<div class="form-group manga_update">
								<label class="update_manga_label"><b>
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Загрузить картину манги";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Upload manga image";
										}
									}else{echo "Upload manga image";}
								?>
								</b></label>
								<input class="form-control update_manga" type="file" name="manga_image"/>
							</div>
							<!-- upload  -->

							<div class="form-group manga_update">
								<label class="update_manga_label"><b>
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Описание";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Description";
										}
									}else{echo "Description";}
								?>
								</b></label>
								<textarea class="form-control update_manga" name="manga_descr" cols="40" rows="5" /><?php if(isset($_POST["show"])){ echo $manga_descr ;} ?></textarea>
							</div>
							<!-- description  -->


							<div class="form-group manga_update">
								<label class="update_manga_label"><b>
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Цена Манги";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Manga Price";
										}
									}else{echo "Manga Price";}
								?>
								</b></label>
								<input class="form-control update_manga" type="text" name="old_price" value="<?php if(isset($_POST["show"])){ echo $old_price ;} ?> " />

							</div>
							<!-- manga price  -->

							<div class="form-group manga_update">
								<label class="update_manga_label"><b>
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "Скидка";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Promotion";
										}
									}else{echo "Promotion";}
								?>
								</b></label>
								<input class="form-control update_manga" type="text" name="promotion" value="<?php if(isset($_POST["show"])){ echo $promotion ;} ?> " />
							</div>
							<!-- promotion -->

						</ul>

							<div class="formFooter">
								<button class="btn btn-third" type="submit" value="Update" name="manga_update">
									<?php 
										if (isset($_COOKIE['lang_manga'])) {
											if($_COOKIE['lang_manga']=='ru'){
												echo "ОБНОВИТЬ";
											}elseif($_COOKIE['lang_manga']=='en'){
												echo "UPDATE";
											}
										}else{echo "UPDATE";}
									?>
								</button>
							</div>
							<!-- update button  -->

				</form>
			</div>
		</div>
	</div>
</div>
	
		
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>


