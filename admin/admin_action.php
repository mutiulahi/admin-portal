<?php
include '../database.php';
if (isset($_POST['admit'])) {
    echo $updateID  = $_POST['id'];
    echo $approve_course = $_POST['approve_course'];
    $UPDADEADMITED = "UPDATE user SET add_status = '1', approved_course = '$approve_course' WHERE assign_id = '$updateID'";
    $updateResult = mysqli_query($dbconnect, $UPDADEADMITED);
    if ($updateResult) {
        echo "<script type=\"text/javascript\">
                alert(\"Successfully Admitted\");
                    window.location = \"student.php\"
            </script>";
    }
}
if (isset($_POST['NOTapprove'])) {
    $updateID  = $_POST['id'];
    $UPDADEADMITED = "UPDATE user SET add_status = '0', approved_course = 'not admit' WHERE assign_id = '$updateID'";
    $updateResult = mysqli_query($dbconnect, $UPDADEADMITED);
    if ($updateResult) {
        echo "<script type=\"text/javascript\">
                alert(\"Admittion successfully terminated\");
                    window.location = \"student.php\"
            </script>";
    }
}
?>