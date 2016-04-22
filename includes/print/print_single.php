<!DOCTYPE html>
<html>
<head>
<style>
	html, body {
	height: 100%;
	margin: 0;         /* Reset default margin on the body element */
}
iframe{
 width:100%;
 frameborder:no;
}
</style>
	<script>
	function ready_to_print() {

	var scroll = document.getElementsByName('print_h');
	var i;
  for (i = 0; i < scroll.length; i++) {
		scroll[i].style.height = scroll[i].contentWindow.document.body.scrollHeight + 'px';
	}
	window.print();
}
	</script>
	<title>UNISA - eLearning</title>
</head>

<body onload="ready_to_print()">
<div style="width:100%;">
<?php
	error_reporting(-1);
	ini_set('display_errors', 'On');
	$HeaderSL=$_GET['HeaderSL'];
	$PageSL = $_GET['PageSL'];;

	echo '<iframe frameborder="0" name="print_h" src="../../assets/' . $_GET['page'] . '.html?HeaderSL=' . $HeaderSL . '&PageSL=' . $PageSL . '"></iframe><div style="page-break-after: always;"></div>';
?>
</div>