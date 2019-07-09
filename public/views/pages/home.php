<?php ob_start(); ?>

<h1><center>UTC_VALERE Concessionnaire</center></h1><br><br>



<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>