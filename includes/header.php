<!DOCTYPE html>
<html>
  <head>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="includes/css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="includes/css/economics.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="includes/css/font-awesome.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>UNISA - eLearning</title>
  </head>

  <body>
    <div class="navbar-fixed">
      <nav class="grey">
        <div class="nav-wrapper container subtopic">
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <a href="index.html"><i class="fa fa-home fa-lg"></i></a>
          <ul class="left hide-on-med-and-down">
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="fa fa-bars"></i></a></li>
          </ul>

				  <div class="google-search">
					<!-- STAGING SEARCH SUBTOPIC 2 -->
					<script>
					(function() {
					  var cx = '009550612968960547331:xnhytihkamc';
					  var gcse = document.createElement('script');
					  gcse.type = 'text/javascript';
					  gcse.async = true;
					  gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
						  '//cse.google.com/cse.js?cx=' + cx;
					  var s = document.getElementsByTagName('script')[0];
					  s.parentNode.insertBefore(gcse, s);
					})();
					</script>
					<gcse:search linkTarget="_parent" enableImageSearch="true"></gcse:search>
				  </div>

          <ul class="right hide-on-med-and-down">
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="fa fa-print"></i></a></li>
          </ul>
        </div>
      </nav>
    </div>

    <ul id="dropdown1" class="dropdown-content">
    	<?php
				error_reporting(-1);
				ini_set('display_errors', 'On');

				$HeaderSL=$Header_SL;
				$PageSL = $Page_SL;
				$Page = $Pg;

				Build_Storyline('assets/', $HeaderSL, false, true, 0);

				function Display_Storyline_Root_Start($n, $StoryLine, $current_level) {
					echo '<li><a class="waves-effect waves-light blue full-width" href="index.php?HeaderSL=' . $GLOBALS['HeaderSL'] . '&PageSL=' . $StoryLine . '&page=' . get_Attribute($n, 'link') . '" >' . get_Attribute($n, 'title') . '</a></li>';
				}

				function Display_Storyline_Root_End($n, $StoryLine, $current_level) {
					echo '';
				}

				function Display_Storyline_Branch_Start($n, $StoryLine, $current_level) {
					echo '<li class="parent"><a class="waves-effect waves-light full-width" href="index.php?HeaderSL=' . $GLOBALS['HeaderSL'] . '&PageSL=' . $StoryLine . '&page=' . get_Attribute($n, 'link') . '" >' . get_Attribute($n, 'title')  . '</a><ul>';
				}

				function Display_Storyline_Branch_End($n, $StoryLine, $current_level) {
					echo '</ul></li>';
				}

				function Display_Storyline_Branch($n, $StoryLine, $current_level) {
					echo '<li><a class="waves-effect waves-light full-width" href="index.php?HeaderSL=' . $GLOBALS['HeaderSL'] . '&PageSL=' . $StoryLine . '&page=' . get_Attribute($n, 'link') . '" >' . get_Attribute($n, 'title')  . '</a></li>';
				}

				function Display_Storyline_Leaf($n, $StoryLine, $current_level) {
					echo '<li><a class="waves-effect waves-light full-width" href="index.php?HeaderSL=' . $GLOBALS['HeaderSL'] . '&PageSL=' . $StoryLine . '&page=' . get_Attribute($n, 'link') . '" >' . get_Attribute($n, 'title')  . '</a></li>';
				}
			?>
    </ul>


		<ul id="dropdown2" class="dropdown-content">
     <li><a target="_blank" href="includes/print/print_single.php?HeaderSL=<?php echo $HeaderSL; ?>&PageSL=<?php echo $PageSL; ?><?php echo '&page='; ?><?php echo $Page; ?>" class="waves-effect waves-light btn grey darken-3 full-width">This Section</a></li>
     <li><a target="_blank" href="includes/print/print_storyline.php?&HeaderSL=<?php echo $HeaderSL; ?>&PageSL=<?php echo $PageSL; ?>" class="waves-effect waves-light btn grey darken-3 full-width">Topic</a></li>
   </ul>

    <div class="container subtopic">

      <div class="row">
        <div class="col s12 m12">
          <div class="row">
            <div class="col s12">
						<!--iframe goes here-->
						 </div>
          </div>
          <?php
						$XML_root = Open_File('assets/', $PageSL);
						$nextNode = getNextNode($Page, $XML_root); //return node
						$prevNode = getPrevNode($Page, $XML_root); //return node

						foreach ($prevNode as $prev) {

						   if (!$prev['config']==''){
								$PrevPageSL=$prev['config'];
						   }
						   else{
								$PrevPageSL=$PageSL;
						   };

							echo '<a href="index.php?HeaderSL=' . $GLOBALS['HeaderSL'] . '&PageSL=' . $PrevPageSL . '&page=' . $prev['link'] . '" class="subtopic-left subtopic-arrow">';
							echo '<i class="material-icons">keyboard_arrow_left</i>';
							echo '</a>';
						}
						foreach ($nextNode as $next) {

						   if (!$next['config']==''){
								$NextPageSL=$next['config'];
						   }
						   else{
								$NextPageSL=$PageSL;
						   };

						  echo '<a href="index.php?HeaderSL=' . $GLOBALS['HeaderSL'] . '&PageSL=' . $NextPageSL . '&page=' . $next['link'] . '" class="subtopic-right subtopic-arrow">';
						  echo '<i class="material-icons">keyboard_arrow_right</i>';
						  echo '</a>';
						}
          ?>
        </div>
    </div>
