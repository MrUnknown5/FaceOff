<?php
session_start();
include("uploads.php");
include("db-config.php");
include("votenow.php");
if (!isset($_SESSION["email"])) {
    header("location: login.php");
}
if(isset($_POST['allsubmit'])){
$likableval = $_POST['likablerange'];
$influentialval  = $_POST['influentialrange'];
$competentval = $_POST['competentrange'];


$table='globalimages';

$run = "UPDATE $table SET vote_1_competent=vote_1_competent+'$competentval',vote_2_likable=vote_2_likable+'$likableval',vote_3_influential=vote_3_influential+'$influentialval', votecount=votecount+1 WHERE imagename='$trial'";

if(mysqli_query($mysqli, $run)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
}
                                    
                                    
                                    
?>
