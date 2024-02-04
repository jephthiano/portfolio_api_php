<?php
//SERVER AND PAGE FUNCTION STARTS
function server_error($type=404){
	//exit(http_response_code(500));
	//exit(header("HTTP/1.0 500 Internal Server Error"));
	//return die(http_response_code(404));
	return die("invalid request");
}
//server error ends

//url_data starts
function url_data($type='path',$url=''){
	if(empty($url)){$url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];}

	if($type === 'scheme'){
		$comp = PHP_URL_SCHEME;
	}elseif($type === 'host'){
		$comp = PHP_URL_HOST;
	}elseif($type === 'port'){
		$comp = PHP_URL_PORT;
	}elseif($type === 'user'){
		$comp = PHP_URL_USER;
	}elseif($type === 'pass'){
		$comp = PHP_URL_PASS;
	}elseif($type === 'path'){
		$comp = PHP_URL_PATH;
	}elseif($type === 'query'){
		$comp = PHP_URL_QUERY;
	}elseif($type === 'fragment'){
		$comp = PHP_URL_FRAGEMENT;
	}
	return parse_url($url,$comp);
}
//url_data starts
//SERVER AND PAGE FUNCTION ENDS
?>