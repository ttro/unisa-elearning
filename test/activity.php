<?php
/**
 * test with $_REQUEST['endpoint'] = http://pr.localdomain/ltiDeliveryProvider/DeliveryTool/launch/eyJkZWxpdmVyeSI6Imh0dHA6XC9cL3Rhby5sb2NhbFwvbXl0YW8ucmRmI2kxNDY1OTE3MTc5NTI4Mjg5In0=
 * Example: http://unisa-elearning.localdomain/test/activity.php?endpoint=http://pr.localdomain/ltiDeliveryProvider/DeliveryTool/launch/eyJkZWxpdmVyeSI6Imh0dHA6XC9cL3Rhby5sb2NhbFwvbXl0YW8ucmRmI2kxNDY1OTE3MTc5NTI4Mjg5In0=
 */
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div id="container">
            <div id="main">
                <div id="side_nav">
                    <div id="side_nav_top">
                    </div>
                    <div id="side_nav_middle">
                    </div>
                    <a href="#">
                        <div id="side_nav_bottom">
                            <p style="back">Back to home</p>
                        </div>
                    </a>
                </div>
                <div id="activity_content">
                    <?php require dirname(__FILE__).'/../components/lti/lms.php';?>
                </div>
            </div>
        </div>
    </body>
</html>