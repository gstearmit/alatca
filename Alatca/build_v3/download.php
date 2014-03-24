<?php
$check_post = isset($_POST['layout-v3']);
if ($check_post) {
	$content = $_POST['layout-v3'] ;
}else $content = '';

$local_file = dirname(__FILE__) . '\zip\index.html';
//return var_dump($local_file);

$content_file1 = "<html class=\"translated-ltr \">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<meta name=\"title\" content=\"applications magazine publishing \">
<meta name=\"description\" content=\"applications magazine publishing \">
<meta name=\"keywords\" content=\"applications magazine publishing \">
<title>applications magazine publishing </title>

<!-- Le styles -->
<link href=\"css/bootstrap-combined.min.css\" rel=\"stylesheet\">
<link href=\"css/layoutit.css\" rel=\"stylesheet\">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
		<script src=\"js/html5shiv.js\"></script>
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel=\"shortcut icon\" href=\"img/favicon.png\">
	
	<script type=\"text/javascript\" src=\"js/jquery-2.0.0.min.js\"></script>
	<!--[if lt IE 9]>
	<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
	<![endif]-->
	<script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>
	<script type=\"text/javascript\" src=\"js/jquery-ui.js\"></script>
	<script type=\"text/javascript\" src=\"js/jquery.ui.touch-punch.min.js\"></script>
<script type=\"text/javascript\" src=\"js/jquery.htmlClean.js\"></script>
<script type=\"text/javascript\" src=\"ckeditor/ckeditor.js\"></script><style>.cke{visibility:hidden;}</style>
<script type=\"text/javascript\" src=\"ckeditor/config.js\"></script>
<script type=\"text/javascript\" src=\"js/scripts.js\"></script>


<body>"
;


$content_file2 = "</body></html>";

$content_file = $content_file1.$content.$content_file2;

//return var_dump($content_file);

file_put_contents($local_file, utf8_encode($content_file));




?>