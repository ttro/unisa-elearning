<?php
error_reporting(-1);
ini_set('display_errors', 'On');

include 'includes/storyline_util.php';
$HeaderSL = $_GET['HeaderSL']; //example PPC
$PageSL = $_GET['PageSL']; //example PPC

$root = Open_File('assets/' , $PageSL);
$landing_page = get_Attribute($root, 'link');

if(isset($_GET['page'])) {
	$page = $_GET['page']; 
} else {
	$page = $landing_page;
}

		loadHeader($HeaderSL, $PageSL, $page);
		$iframe = '<iframe src="assets/' . $page . '.html?HeaderSL=' . $HeaderSL  . '&PageSL=' . $PageSL . '" class="composite-embed" id="idIframe" onload="iframeLoaded()" frameBorder="0"></iframe>';
		echo $iframe;
		include 'includes/footer.php';
				
function loadHeader($Header_SL, $Page_SL,$Pg) {
   include 'includes/header.php';
}