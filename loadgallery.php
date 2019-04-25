<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    function load_gallery($id){
	
	$files = scandir('images/busesgallery/gallery/'.$id);
	unset($files[0]);
	unset($files[1]);
	
	$afterFirst = false;
	
	foreach($files as $file){
	    
	  if($afterFirst)  echo '<a href="images/busesgallery/gallery/'.$id.'/'.$file.'" rel="fancybox_'.$id.'" class="fancy"></a>';
	  else{
	      echo '<a href="images/busesgallery/gallery/'.$id.'/'.$file.'" rel="fancybox_'.$id.'" class="fancy">zobacz galerie</a>';  
	      $afterFirst = true;
	      
	  }
	  
				    
	  
	}
	
    }




?>
