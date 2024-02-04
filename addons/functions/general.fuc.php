<?php
//GENERAL FUNCTIONS STARTS
//classes auto load starts
spl_autoload_register(function ($className){
 $className = str_replace('..','',$className); //to removes .. so as to ensure that it is not used by attacker to get to above folder
 require_once(file_location('inc_path','classes/'.$className.'.cla.php'));
});
//classes auto load ends

//close connection function starts
function closeconnect($connectionType='',$connectionVar=''){
	if(@$connectionType === "db"){
		return @$connectionVar = null;
	}elseif(@$connectionType === "stmt"){
		return @$connectionVar = null;
	}elseif(@$connectionType === "curl"){
		return curl_close(@$connectionVar);
	}
}
//close connection function ends

//page not available starts
function page_not_available($type="full"){
	?>
	<br>
	<center>
   <div class=""style="font-family: Roboto,sans-serif;width: 100%;"">
        <p class="j-text-color1">
            Sorry, the page you are looking for is not available, page may have been deleted, link may have been broken or you may not have access to the content<br><br>
            <a href="<?php if(strstr($_SERVER['SERVER_NAME'],'admin.')){echo file_location('admin_url','');}elseif(strstr($_SERVER['SERVER_NAME'],'seller.')){echo file_location('seller_url','');}else{echo file_location('home_url','');}?>"class="j-btn j-bolder j-color1 j-text-color4 j-round-large">
            Back to home
            </a>
        </p>
    </div>
	</center>
	<?php
 require_once(file_location('inc_path','js.inc.php')); //js
}
//page not available ends

// trigger error starts
function trigger_error_manual($error=404){http_response_code($error);require_once(file_location('home_path','error/index.php'));die();}
// trigger error starts

//redirection starts
function redirection($type){
 if($type === 'reload'){?><center><div class='j-text-color1 j-xlarge'style='margin-top: 50px;'>Error loading page<br><a href='' class='j-color1 j-round-xlarge j-large j-text-color4 j-btn'>Reload</a></div></center><?php
 }elseif($type === 'redirect'){header("location:".file_location('home_url',''));}
}
//redirection ends

// regex starts
function regex($type,$data){
 if($type === 'email'){
  $reg = "/^[\w.-]*@[\w.-]+\.[A-Za-z]{2,6}$/";
 }elseif($type === 'word_comma'){ //for languages and co
  $reg = "/^[\w]*\,?\ ?[\w]*\,?\ ?[\w]*\,?\ ?[\w]*\,?\ ?$/";
 }elseif($type === 'word_space'){
  $reg = "/^[a-zA-Z ]*$/";
 }elseif($type === 'word_number_nospace'){
  $reg = "/^[a-zA-Z0-9]*$/";
 }elseif($type === 'phonenumber'){
  $reg = "/^\+?[\d]{11,17}$/";
 }elseif($type === 'skill'){ // for word . ' - @ 
  $reg = "/^[\w .'-@]+$/";
 }elseif($type === 'sql_date'){
  $reg = "/^[\d]{4}-[\d]{2}-[\d]{2} [\d]{2}:[\d]{2}:[\d]{2}$/";
 }elseif($type === 'account_number'){
  $reg = "/^[\d]{10}$/";
 }else{
  return false;
 }
 return preg_match($reg,$data);
}
// regex ends
//GENERAL FUNCTIONS ENDS
?>