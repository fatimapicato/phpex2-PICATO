<?php


include 'calculate.php';

if (isset($_POST['sideA']) . isset($_POST['sideB'])) {
    $tri = new calculate;
    $tri-> triangle ($_POST['sideA'], $_POST['sideB']) ;
    
} else if (isset($_POST['biNum'])) {
    $bcount = new calculate;
    $bcount->binarycount($_POST['biNum']) ;
 
} else if (isset($_POST['pthOne']) . isset($_POST['pthTwo'])) {
    $paths = new calculate;
    $paths->parts($_POST['pthOne'],$_POST['pthTwo']) ;

} else if (isset($_POST['sasNum'])) {
    $sastrynum = new calculate;
    $sastrynum->sastry($_POST['sasNum']) ;

}