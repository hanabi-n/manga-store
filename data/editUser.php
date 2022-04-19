<!DOCTYPE html>
<html>
<head>
	<title>Edit Users</title>
    
	<link rel="stylesheet" type="text/css" href="delete.css">

	<style>
		.col-sm-5{
			width: 150px;
			height: 100px;
			background-color: #AF10D1;
			color: #fff;
			text-align: center;
			border-radius: 10px;
			padding: 20px;
		}

	</style>
	</head>
<body>

<div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="nav nav-tabs" id="myTab" role="tablist">
		
					<?php

						if(isset($_POST['id'])){
							require 'db.php';

							$updated = updateStudent($_POST['id'], $_POST['firstname'], $_POST['lastname'], $_POST['password']);
							if($updated){
 
								?>
									<h2>
									<?php 
                                        if (isset($_COOKIE['lang_manga'])) {
                                            if($_COOKIE['lang_manga']=='ru'){
                                                echo "Обновлено";
                                            }elseif($_COOKIE['lang_manga']=='en'){
                            	                echo "Updated";
                                            }
                                        }else{echo "Updated";}
                                    ?>
									
									</h2>

									<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
										<div class="fadeIn first">
											
										</div>
										
										<div id="formFooter">
											<a class="underlineHover" href="../myProfile.php">
											<?php 
												if (isset($_COOKIE['lang_manga'])) {
													if($_COOKIE['lang_manga']=='ru'){
														echo "Вернуться назад";
													}elseif($_COOKIE['lang_manga']=='en'){
														echo "Go back";
													}
												}else{echo "Go back";}
											?>
											</a>
										</div>
									</div>
								</div>
								
								<?php 
							}
						}

					?>
			</div>
	</div>
</div>

</body>
</html>