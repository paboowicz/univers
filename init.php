<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    function showSlides($pos){
	
	
	
				    $files = scandir('images/topslider');
				    unset($files[0]); unset($files[1]);
				    
				    $i = 1;
				    
				    foreach($files as $item){
				
					if($i == $pos){
					    echo '<li><img src="images/topslider/'.$item.'" /></li>';
					    $pos += 3;
					}
					
					$i++;
				    				    
				    } 
	
	
    }


?>
