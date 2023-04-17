<?php
 $db = mysqli_connect('sql104.epizy.com', 'epiz_33834484', 'SZ1i9OztOR','epiz_33834484_dbact2') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'epiz_33834484_dbact2' ) or die(mysqli_error($db));
?>