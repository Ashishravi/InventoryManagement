<?php
// include configuration file
include 'config/core.php';
 
// include the head template
include_once "layout_head.php";?>

<form action="api/read_all_orders.php" id="new_order" method="post">
<input type="submit" value="submit">
</form>        

<script type="text/javascript" charset="utf-8">
</script>



<?php

// page footer
include_once "layout_foot.php";
?>