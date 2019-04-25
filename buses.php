<?php

    $files = scandir('images/buses');
    unset($files[0]);
    unset($files[1]);
    foreach($files as $_file){
	echo '<li><img src="images/buses/'.$_file.'" /></li>';
    }


?>
