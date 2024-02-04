<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/addons/function.inc.php'); // all functions
require_once(file_location('inc_path','cor_security.inc.php')); // cor security
require_once(file_location('inc_path','authentication.inc.php')); // authentication

$path = url_data(); //page path

//ACTION
//download cv
if($path === '/dcv/'){
    require_once(file_location('inc_path','controller/act/download_cv.rqt.php'));
}

//send message
if($path === '/sm/'){
    require_once(file_location('inc_path','controller/act/send_message.rqt.php'));
}



//GET
//get image
if($path === '/gim/'){
    require_once(file_location('inc_path','controller/get/get_image.rqt.php'));
}

//get social handle
if($path === '/gsh/'){
    require_once(file_location('inc_path','controller/get/get_social_handle.rqt.php'));
}

//get skills
if($path === '/gsk/'){
    require_once(file_location('inc_path','controller/get/get_skill.rqt.php'));
}

//get project
if($path === '/gp/'){
    require_once(file_location('inc_path','controller/get/get_project.rqt.php'));
}
?>