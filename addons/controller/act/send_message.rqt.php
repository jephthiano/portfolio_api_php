<?php
if(isset($_POST["nm"]) && isset($_POST["em"]) && isset($_POST["sb"]) && isset($_POST["ms"])){
	$error = []; $data = [];
	
	// validating and sanitizing name
	$nam = $_POST['nm'];
	if(empty($nam)){$error['nme'] = "* Name cannot be empty";}else{$name = test_input($nam);}
	
	// validating and sanitizing email
	$emai = $_POST['em'];
	if(empty($emai)){$error['eme'] = "* Email cannot be empty";}elseif(!regex('email',$emai)){$error['eme'] = "* Invalid email";}else{$email = test_input($emai);}
	
	// validating and sanitizing subject
	$sub = $_POST['sb'];
	if(empty($sub)){$error['sbe'] = "* Subject cannot be empty";}else{$subject = test_input($sub);}
	
	// validating and sanitizing message
	$mess = $_POST['ms'];
	if(empty($mess)){$error['mse'] = "* Message cannot be empty";}else{$user_message = test_input($mess);}
	
	
	if(empty($error) and empty($missing)){
		// $message = new message('admin');
		// $message->name = $name;
		// $message->email = $email;
		// $message->subject = $subject;
		// $message->message = $user_message;
		// $insert = $message->insert_message();
		// if($insert === 'success'){
		// 	$data["status"] = 'success';$data["message"] = "<span class='j-text-color9'><b>Thanks!!!</b></span><br>Message successfully sent";
		// }elseif($insert === 'fail'){
		// 	$data["status"] = 'fail';$data["message"] = "<span class='j-text-color8'><b>Sorry!!!</b></span><br>Error occur while sending message, try again later";
		// }
		
		//SEND MAIL
		$mail = new mail();
		$mail->p_receiver = 'jephthahooh@gmail.com';
		$mail->p_subject = $subject;
		$mail->p_message = $user_message;
		$mail->p_header = implode("\r\n",[
					"From:".$name." <".$email.">",
					"MIME-Version: 1.0",
					"Content-Type: text/html; charset=UTF-8"
					]);
		$mailsent = $mail->send_mail();
		if($mailsent){
			$data["status"] = 'success';$data["message"] = "<span class='j-text-color9'>Thanks!!!</span><br>Message successfully sent";
		}else{
			$data["status"] = 'fail';$data["message"] = "<span class='j-text-color8'>Sorry!!!</span><br>Error occur while sending message, try again later";
		}
	}else{
		$data["status"] = 'error';$data["errors"] = $error;
	}
	echo json_encode($data);
}else{
	server_error(404);
}//end of if isset
?>