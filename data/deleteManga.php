<?php
	require 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Manga Admin</title>
	<link rel="stylesheet" type="text/css" href="delete.css">
 
</head>
<body>
	

	<div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="nav nav-tabs" id="myTab" role="tablist">
				  
				<?php

					if($_GET["id"]) { 
							$deleted = deleteMangaAdmin($_GET['id']);

							if($deleted){
							?>
								<h2>
								<?php 
										if (isset($_COOKIE['lang_manga'])) {
											if($_COOKIE['lang_manga']=='ru'){
												echo "Манга успешно удалена!";
											}elseif($_COOKIE['lang_manga']=='en'){
												echo "Manga successfully deleted!";
											}
										}else{echo "Manga successfully deleted!";}
									?> 
								</h2>
							 
							</div>
							
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
										<div class="fadeIn first">
											
										</div>
										
										<div id="formFooter">
											<a class="underlineHover" href="adminPageManga.php">
												<?php 
													if (isset($_COOKIE['lang_manga'])) {
														if($_COOKIE['lang_manga']=='ru'){
															echo "Назад";
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
						
						// case "id":
						// 	$buyCourse_3 = buyCourse($uname, $course_3['name']);
						// break;
							
					}else{
						?>
							<h2>Error!</h2>
						<?php
					}	
				
			?>

            

        </div>
    </div>
</body>
</html>