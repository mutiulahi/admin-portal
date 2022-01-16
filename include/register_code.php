<?php
session_start();
include '../database.php'; 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['register'])) {
    
    $Register_user = $dbconnect->prepare("INSERT INTO user (first_name, last_name, email, assign_id) VALUES(?,?,?,?)");
    $Register_user->bind_param("ssss", $first_name, $last_name, $email, $assign_id);

    $first_name = mysqli_real_escape_string($dbconnect, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($dbconnect, $_POST['last_name']);
    $email = mysqli_real_escape_string($dbconnect, $_POST['email']);

    $current_year = date('Y');
    $assign_id = $first_name[0].$last_name[0].'/'.$current_year.'/'.rand (99999999,11111111); 

    if ($Register_user->execute()) {

                
        //Load Composer's autoloader
        require '../vendor/autoload.php';
        // require '../vendor/autoload.php'
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'tesleemolamilekan902@gmail.com';                     //SMTP username
            $mail->Password   = 'xzusxwknyprvvjjf';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('auas@gmail.com', 'AUAS');
            $mail->addAddress($email, 'AUAS');     //Add a recipient
            // $mail->addAddress('ellen@gmail.com');               //Name is optional
            // $mail->addReplyTo('info@gmail.com', 'Information');
            // $mail->addCC('cc@gmail.com');
            // $mail->addBCC('bcc@gmail.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Adeleke University Admission Number Generation';
            $mail->Body =  '<div class="row">
															<div class="col-12">
																<table class="body-wrap" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: transparent; margin: 0;">
																	<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
																		<td style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
																		<td class="container" width="600" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;"
																			valign="top">
																			<div class="content" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
																				<table class="main" width="100%" cellpadding="0" cellspacing="0" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 7px; background-color: #fff; color: #495057; margin: 0; box-shadow: 0 0.75rem 1.5rem rgba(18,38,63,.03);"
																					bgcolor="#fff">
																					<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
																						<td class="alert alert-success" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 16px; vertical-align: top; color: #fff; font-weight: 500; text-align: center; border-radius: 7px 7px 0 0; background-color: #556ee6; margin: 0; padding: 20px;"
																							align="center" bgcolor="#71b6G10" valign="top">
																							<b>Application Number Generation</b>
																						</td>
																					</tr><br>
																					<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
																						<td class="content-wrap" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
																							<table width="100%" cellpadding="0" cellspacing="0" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
																								
																								<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
																												<td class="content-block" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
																												Hi ' . $firstname . ', <br><br>
																												Your account has been successfully created. Please login into your portal for the status of your application. 
																												</td>
																											</tr><br>
																								<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
																												<td class="content-block" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
																												Application Number: <b>' . $assign_id . '<br>Thank you for your interest in studying at Adeleke University Ede.
																												</td>
																											</tr><br>
																								 
																								
																								<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
																									<td class="content-block" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
																										Thanks for choosing <b>Adeleke University</b>.
																									</td>
																								</tr><br>
																								<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
																									<td class="content-block" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
																										<b>Adeleke University</b>
																										<p>Management.</p>
																									</td>
																								</tr>
													
																								<tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
																									<td class="content-block" style="text-align: center;font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0;" valign="top">
																										© 2021 Adeleke University
																									</td>
																								</tr>
																							</table>
																						</td>
																					</tr>
																				</table>
																			</div>
																		</td>
																	</tr>
																</table>
																<!-- end table -->
															</div>
            											</div>';

            $mail->send();
            header('location:../register.php?msg=Registration successful Application Number has been sent your mail it will be requied to access your portal! &type=success');

        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    } 

}

if (isset($_POST['application'])) {

    $app_id = $_SESSION['id'];

    $score = mysqli_real_escape_string($dbconnect, $_POST['score']);
    $jamb_reg_num = mysqli_real_escape_string($dbconnect, $_POST['jamb_reg_num']);
    $jamb_type = mysqli_real_escape_string($dbconnect, $_POST['jamb_type']);
    $FirstChoiceCourse = mysqli_real_escape_string($dbconnect, $_POST['FirstChoiceCourse']);
    $SecondChoiceCourse = mysqli_real_escape_string($dbconnect, $_POST['SecondChoiceCourse']);
    $sitting = mysqli_real_escape_string($dbconnect, $_POST['sitting']);
    $exam_type = mysqli_real_escape_string($dbconnect, $_POST['exam_type']);


    $next_kin_name = mysqli_real_escape_string($dbconnect, $_POST['next_kin_name']);
    $next_kin_email = mysqli_real_escape_string($dbconnect, $_POST['next_kin_email']);
    $next_kin_phone = mysqli_real_escape_string($dbconnect, $_POST['next_kin_phone']);
    $next_kin_address = mysqli_real_escape_string($dbconnect, $_POST['next_kin_address']);
    $parent_name = mysqli_real_escape_string($dbconnect, $_POST['parent_name']);
    $parent_email = mysqli_real_escape_string($dbconnect, $_POST['parent_email']);
    $parent_phone = mysqli_real_escape_string($dbconnect, $_POST['parent_phone']);
    $parent_address = mysqli_real_escape_string($dbconnect, $_POST['parent_address']); 


    $firstSubject = mysqli_real_escape_string($dbconnect, $_POST['firstSubject']);
    $firstGrade = mysqli_real_escape_string($dbconnect, $_POST['firstGrade']);
    $secondSubject = mysqli_real_escape_string($dbconnect, $_POST['secondSubject']);
    $secondGrade = mysqli_real_escape_string($dbconnect, $_POST['secondGrade']);
    $thirdSubject  = mysqli_real_escape_string($dbconnect, $_POST['thirdSubject']);
    $thirdGrade = mysqli_real_escape_string($dbconnect, $_POST['thirdGrade']);
    $fourthSubject = mysqli_real_escape_string($dbconnect, $_POST['fourthSubject']);
    $fourthGrade = mysqli_real_escape_string($dbconnect, $_POST['fourthGrade']);
    $fifthSubject = mysqli_real_escape_string($dbconnect, $_POST['fifthSubject']);
    $fifthGrade = mysqli_real_escape_string($dbconnect, $_POST['fifthGrade']);
    $sixthSubject = mysqli_real_escape_string($dbconnect, $_POST['sixthSubject']);
    $sixthGrade = mysqli_real_escape_string($dbconnect, $_POST['sixthGrade']);
    $seventhSubject  = mysqli_real_escape_string($dbconnect, $_POST['seventhSubject']);
    $seventhGrade = mysqli_real_escape_string($dbconnect, $_POST['seventhGrade']);
    $eightSubject = mysqli_real_escape_string($dbconnect, $_POST['eightSubject']);
    $eightGrade = mysqli_real_escape_string($dbconnect, $_POST['eightGrade']);
    $ninethSubject = mysqli_real_escape_string($dbconnect, $_POST['ninethSubject']);
    $ninethGrade = mysqli_real_escape_string($dbconnect, $_POST['ninethGrade']);

 

     $profile_pic =  $app_id . '_PROFILE_' . $_FILES['profile_pic']['name'];
     $olevel_result =  $app_id . '_OLEVEL_' . $_FILES['olevel_result']['name'];
     $jamb_result =  $app_id . '_JAMB_' . $_FILES['jamb_result']['name'];

    $profilePicDestination = 'document/' . $profile_pic;
    $OlevelDestination = 'document/' . $olevel_result;
    $JambDestination = 'document/' . $jamb_result;

    // include "../";
    $store_adm_detail = "INSERT INTO admission_details (app_id, score, jamb_reg_num, jamb_type, firstchoicecourse, secondchoicecourse, sitting, exam_type, profile_pic) VALUES 
    ('$app_id', '$score', '$jamb_reg_num', '$jamb_type', '$FirstChoiceCourse', '$SecondChoiceCourse', '$sitting', '$exam_type', '$profile_pic')";
    if (mysqli_query($dbconnect, $store_adm_detail)) {

        $store_family_detail = "INSERT INTO family_details (app_id, next_kin_name, next_kin_email, next_kin_phone, next_kin_address, parent_name, parent_email, parent_phone, parent_address)VALUES
        ('$app_id', '$next_kin_name', '$next_kin_email', '$next_kin_phone', '$next_kin_address', '$parent_name', '$parent_email', '$parent_phone', '$parent_address')";
         if (mysqli_query($dbconnect, $store_family_detail)) {

            $store_olevel = "INSERT INTO olevel (app_id, firstSubject, firstGrade, secondSubject, secondGrade, thirdSubject, thirdGrade, fourthSubject, fourthGrade, fifthSubject, fifthGrade, sixthSubject, sixthGrade, seventhSubject, seventhGrade, eightSubject, eightGrade, ninethSubject, ninethGrade, olevel_result, jamb_result)VALUES
            ('$app_id','$firstSubject','$firstGrade','$secondSubject','$secondGrade','$thirdSubject','$thirdGrade','$fourthSubject','$fourthGrade' ,'$fifthSubject', '$fifthGrade','$sixthSubject','$sixthGrade','$seventhSubject','$seventhGrade' ,'$eightSubject','$eightGrade','$ninethSubject','$ninethGrade', '$olevel_result', '$jamb_result')";
            if (mysqli_query($dbconnect, $store_olevel)) {
                
                move_uploaded_file($_FILES['profile_pic']['tmp_name'], $profilePicDestination);
                move_uploaded_file($_FILES['olevel_result']['tmp_name'], $OlevelDestination);
                move_uploaded_file($_FILES['jamb_result']['tmp_name'], $JambDestination);

                // $Update_user = "UPDATE ";
                $Update_register_status = "UPDATE  user  SET is_register  = '1'  WHERE assign_id ='$app_id'";
                $Update_register_status_result = mysqli_query($dbconnect, $Update_register_status);
                if ($Update_register_status_result) {
                    header('location:../dashboard.php?msg=Application successful recieved and in process... &type=success'); 
                }
            }
            else {
                echo 'ERROR'.mysqli_error($dbconnect) ;
            }
        }
        else {
            echo mysqli_error($dbconnect) ;
        }
    }
    else {
        echo mysqli_error($dbconnect) ;
    }
}
  




