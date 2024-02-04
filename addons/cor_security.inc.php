<?php
/* Handle CORS */

// Specify domains from which requests are allowed
//header('Access-Control-Allow-Origin: http://localhost:3000');
header('Access-Control-Allow-Origin: *');

//header('Access-Control-Allow-Origin: http://jephthiano.vercel.app');

// Specify which request methods are allowed
header('Access-Control-Allow-Methods: GET, POST');

//specify if credentials are allow
header('Access-Control-Allow-Credentials: true');

// Additional headers which may be sent along with the CORS request
header('Access-Control-Allow-Headers: X-Requested-With, Authorization, Content-Type, x-xsrf-token, x_csrftoken, Cache-Control');

// Set the age to 1 day to improve speed/caching.
//header('Access-Control-Max-Age: 86400');

// Exit early so the page isn't fully loaded for options requests
// if (strtolower($_SERVER['REQUEST_METHOD']) == 'options') {
//     server_error(404);
// }