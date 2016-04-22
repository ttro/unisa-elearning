<?php
include '../storyline_util.php';
?>
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
 frameborder:0;
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
	<title>UNISA - eLearning | Department of Economics</title>
</head>

<body onload="ready_to_print()">
<div style="width:100%;">
	<?php
		error_reporting(-1);
		ini_set('display_errors', 'On');

		$HeaderSL = $_GET['HeaderSL'];
		$PageSL = $_GET['PageSL'];
		
		Build_Storyline('../../assets/', $HeaderSL, false, true, 0);

		function Display_Storyline_Root_Start($n, $StoryLine, $current_level) {
			echo '<iframe frameborder="0" name="print_h" src="print_toc_template.html?HeaderSL=' . $GLOBALS['HeaderSL'] . '&PageSL=' . $StoryLine . '"></iframe><div style="page-break-after: always;"></div>';
		}

		function Display_Storyline_Root_End($n, $StoryLine, $current_level) {
			echo '';
		}

		function Display_Storyline_Branch_Start($n, $StoryLine, $current_level) {
					echo '<iframe frameborder="0" name="print_h" src="print_toc_template.html?HeaderSL=' . $GLOBALS['HeaderSL'] . '&PageSL=' . $StoryLine . '"></iframe><div style="page-break-after: always;"></div>';
		}

		function Display_Storyline_Branch_End($n, $StoryLine, $current_level) {
			echo '<div style="page-break-after: always;"></div>';
		}

		function Display_Storyline_Branch($n, $StoryLine, $current_level) {
				echo '<iframe frameborder="0" name="print_h" src="print_toc_template.html?HeaderSL=' . $GLOBALS['HeaderSL'] . '&PageSL=' . $StoryLine . '"></iframe><div style="page-break-after: always;"></div>';
		}

	function Display_Storyline_Leaf($n, $StoryLine, $current_level) {
			echo '<iframe frameborder="0" name="print_h" src="../../assets/' . get_Attribute($n, 'link') . '.html"></iframe><div style="page-break-after: always;"></div>';
		}
?>
</div>
