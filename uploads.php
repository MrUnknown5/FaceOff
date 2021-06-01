<?php 

    // Database connection
    include("db-config.php");
    
    if(isset($_POST["submit"])) {
        // Set image placement folder
        $target_dir = "global_images/";
        $useremail= $_SESSION["email"];
        $userTitle=$_POST["userTitle"];

        /* create new unique name file */
        $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
        $extension  = strtolower(pathinfo( $_FILES["fileUpload"]["name"], PATHINFO_EXTENSION )); // jpg
        $basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg

        $source       = $_FILES["fileUpload"]["tmp_name"];
        $destination  = "global_images/{$basename}";


    
        // Allowed file types
        $allowd_file_ext = array("jpg", "jpeg", "png");
        

        if (!file_exists($_FILES["fileUpload"]["tmp_name"])) {
           $resMessage = array(
               "status" => "alert-danger",
               "message" => "Select image to upload."
           );
        } else if (!in_array($extension, $allowd_file_ext)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "Allowed file formats .jpg, .jpeg and .png."
            );            
        } else if ($_FILES["fileUpload"]["size"] > 5242880) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "File is too large. File size should be less than 5 megabytes."
            );
        } else if (file_exists($basename)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "File already exists."
            );
        } else {
            if (move_uploaded_file($source,$destination)) {
                $result   = mysqli_query($mysqli, "INSERT INTO globalimages(imagename,useremail,usertitle) VALUES('$basename','$useremail','$userTitle')");
                

                // check if user data inserted successfully.
                if ($result) {
                    $resMessage = array(
                        "status" => "alert-success",
                        "message" => "Image uploaded successfully."
                    ); 
                } else {
                   $resMessage = array(
                    "status" => "alert-danger",
                    "message" => "Image coudn't be uploaded."
                );
                }
                
            
                
            }
        }

    }

?>