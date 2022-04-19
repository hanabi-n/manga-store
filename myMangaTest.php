<?php
session_start();

if (!isset($_SESSION['userName'])) {
    header("Location:index.php");
} else {
    $uname = $_SESSION['userName']['firstname'];
    $email = $_SESSION['userName']['email'];
    $id    = $_SESSION['userName']['id'];
    $uid   = $_SESSION['userName']['role_id'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="style.css">
     
    <title>My courses</title>

    <style>



    </style>
</head>
<body>

    <div class="container">
        <?php    


            require 'data/db.php';

            $db = new DBcourses(); 

            $manga_array = $db->query("SELECT manga_title from mymanga where user_id = '$id'");           

            var_dump($manga_array );
             
            foreach($manga_array as $key => $value){
                $arr[] = $manga_array[$key]['manga_title'];
                $mangas = implode(",", $arr);
            }


            $manga = getAllmanga();

            if(!empty($manga)){
                foreach($manga as $key => $value){

                        if(stristr($mangas, $manga[$key]["manga_title"])){
                
                      ?> 
                        <div class="text">
                            <span>Course ID:</span><h5 class="title_course"> <?php echo $manga[$key]['manga_title']; ?></h5>
                            <span>Course Name:</span><h5 class="title_course"><?php echo $manga[$key]['manga_title'];?> </h5> 
                            <span>Price:</span><h5 class="title_course">Price: <?php echo $manga[$key]['manga_author'];?></h5>
                                    
                            <a class="btn btn-fourth" href="deleteCourse.php?id=<?php echo $manga[$key]['manga_title']; ?>">DELETE</a>
                        </div>            
                      <?php  
                        
                    }
                }
            }
        ?>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>