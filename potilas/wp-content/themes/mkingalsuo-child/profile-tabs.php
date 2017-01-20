<?php
$tab = $_GET['t'];

$t1 = "";
$t2 = "";
$t3 = "";
$t4 = "";

if($tab == 1) {
	$t1 = 'class="active"';
} elseif($tab == 2) {
	$t2 = 'class="active"';
} elseif($tab == 3) {
	$t3 = 'class="active"';
} elseif($tab == 4) {
	$t4 = 'class="active"';
} else {
	$t1 = 'class="active"';
}

?>

<ul class="nav nav-tabs">
	  <li role="presentation" <?php echo $t1; ?> ><a href="?t=1">Henkilötiedot</a></li>
	  <li role="presentation" <?php echo $t2; ?> ><a href="?t=2">Tab 1</a></li>
	  <li role="presentation" <?php echo $t3; ?> ><a href="?t=3">Teeth</a></li>
	  <li role="presentation" <?php echo $t4; ?> ><a href="?t=4">Notes</a></li>
</ul><br/>