<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/bjqs.css" />
        <script type="text/javascript" src="js/jquery-1.7.1.min.js" ></script>
	
	<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	
	
	<script type="text/javascript" src="js/init.js" ></script>
	<script type="text/javascript" src="js/bjqs-1.3.min.js" ></script>
	<script type="text/javascript" src="js/slider.js" ></script>
	
	<title>Univers</title>
    </head>
    <body>
	<div id="topStripe"></div>
	<div class="whiteStripe"></div>
	<div class="centerContainer" style="position: relative;">
	    <div id="carouselTop">
		<? include 'init.php'; ?>
		<ul>
		   
		    <li>
			<div id="frame_1" class="topFrame">
			    <ul class="bjqs">
				
				<? showSlides(1); ?>
				
			    </ul>
			    
			    
			</div>
		    </li>
		    <li>
			<div id="frame_2" class="topFrame">
			    <ul class="bjqs">
				
				<? showSlides(2); ?>
				
			    </ul>
			</div>
		    </li>
		    <li>
			<div id="frame_3" class="topFrame">
			    <ul class="bjqs">
				
				<? showSlides(3); ?>
				
			    </ul>
			</div>
		    </li>
		    
		</ul>
		
	    </div>
	    <div id="topBuses"></div>
	    
	    <div id="contactStripe">
		<img src="images/phone.png" />
	    </div>
	    <div class="clear"></div>
	    
	    <div class="leftBox leftCorners" style="width: 1100px;">
		<div class="menuContainer">
		    <nav id="menu">
			<ul>
			    <li><span class="pin"></span><a href="index.php">Strona Główna</a></li>
			    <li><span class="pin"></span><a href="tabor.php">Tabor</a></li>
			    <li><span class="pin"></span><a href="rezerwacja.php">Rezerwacja</a></li>
			    <li><span class="pin"></span><a href="kontakt.php">Kontakt</a></li>
			</ul>
		    </nav>
		    <div class="clear"></div>
		    <div class="adressBox">
			<img src="images/mailbox.png" style="float: right;" />
			<strong>Beata Mazepa</strong><br />
			Dąbków 49<br />
			37 - 600 Lubaczów<br />
			<br />
			tel./fax (0-16) 632 14 44<br />
			tel.0 509 95 57 00<br />
			e-mail: univers@univers.net.pl<br />
		    </div>
		    
		</div>
		
		<div class="contentBox" style="width:880px;">
		    <? include 'loadgallery.php'; ?>
		    <ul id="busGallery">
			
			<li>
			    <img src="images/busesgallery/1.png" class="busImage" style="height: 126px;" />
			    <div>
				<p class="busTitle">MERCEDES TRAVEGO</p>
				<p class="busDesc">
				    - Liczba miejsc 49+ 1+1<br />
				    - Klimatyzacja<br />
				    - WC<br />
				    - DVD<br />
				    - Lodówka<br />
				    - Mikrofon<br />
				    - CaffeeBar
    
				</p>
				<p>
				    <? load_gallery('1');  ?>
				</p>				
			    </div>
			</li>
			<li>
			    <img src="images/busesgallery/2.png" class="busImage" style="height: 126px;" />
			    <div>
				<p class="busTitle">BOVA 12370 Futura</p>
				<p class="busDesc">
				    - Liczba miejsc 49+ 1+1<br />
				    - Klimatyzacja<br />
				    - WC<br />
				    - DVD<br />
				    - Lodówka<br />
				    - Mikrofon<br />
				    - CaffeeBar
    
				</p>
				
				<p>
				    <? load_gallery('2');  ?>
				</p>
			    </div>
			</li>
			
			<li>
			    <img src="images/busesgallery/4.png" class="busImage" style="height: 126px;" />
			    <div>
				<p class="busTitle">MERCEDES SPRINTER 416</p>
				<p class="busDesc">
				    - Liczba miejsc 20+1<br />
				    - Klimatyzacja<br />
				    
				    - DVD<br />
				    
				    - Mikrofon
				    
    
				</p>
				<p>
				    <? load_gallery('4');  ?>
				</p>
				
			    </div>
			</li>
			<li>
			    <img src="images/busesgallery/5.png" class="busImage" style="height: 126px;" />
			    <div>
				<p class="busTitle">SETRA 411 HD</p>
				<p class="busDesc">
				    - Liczba miejsc 39+ 1+1<br />
				    - Klimatyzacja<br />
				    - WC<br />
				    - DVD<br />
				    - Lodówka<br />
				    - Mikrofon<br />
				    - CaffeeBar
    
				</p>
				
				<p>
				    <? load_gallery('5');  ?>
				</p>
				
			    </div>
			</li>
			<li>
			    <img src="images/busesgallery/6.png" class="busImage" style="height: 126px;" />
			    <div>
				<p class="busTitle">SETRA 415 GTHD</p>
				<p class="busDesc">
				    - Liczba miejsc 49+ 2+1<br />
				    - Klimatyzacja<br />
				    - WC<br />
				    - DVD<br />
				    - Lodówka<br />
				    - Mikrofon<br />
				    - CaffeeBar<br />
				    - euro 5
    
				</p>
				
				<p>
				    <? load_gallery('6');  ?>
				</p>
				
			    </div>
			</li>
			<li>
			    <img src="images/busesgallery/7.png" class="busImage" style="height: 126px;" />
			    <div>
				<p class="busTitle">MERCEDES SPRINTER 519</p>
				<p class="busDesc">
				    - Liczba miejsc 20+1<br />
				    - Klimatyzacja<br />
				    - DVD<br />
				    - Mikrofon<br />
				    - euro 5
				</p>
				
				<p>
				    <? load_gallery('7');  ?>
				</p>
				
			    </div>
	    </div>
			</li>
			
		    </ul>   
		    
		    <div class="clear" style="height: 20px;"></div>
		    
		</div>
		
		
		
	    </div>
	    
	    
	    
	    <div class="clear"></div>
	    
	    <div class="bottomstripe">		
		<p><img src="images/icon.png" />design by LECH-KOM</p>
		<div style="height: 100%; width: 100px; position:absolute; right: 0px; background: #ffffff;"></div>
	    </div>
	    
	</div>
	
	<script type="text/javascript">
			    $(".fancy").fancybox();
			</script>
	
    </body>
</html>
