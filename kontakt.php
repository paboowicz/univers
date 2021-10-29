<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/bjqs.css" />
        <script type="text/javascript" src="js/jquery-1.7.1.min.js" ></script>
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
	    
	    <div class="leftBox leftCorners">
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
			ul. gen. Stanisława Dąbka 65 <br />
			37 - 600 Dąbków<br />
			<br />
			tel./fax (0-16) 632 14 44<br />
			tel.0 509 95 57 00<br />
			e-mail: univers@univers.net.pl<br />
		    </div>
		    
		</div>
		
		<div class="contentBox">
		    
		    <h1>Kontakt</h1>
		    
		    <p><strong style="font-size: 18px;">Beata Mazepa</strong></p>
		    <p>Dąbków 49 <br />
		    37 - 600 Lubaczów</p>
		    
		    <p>tel./fax (0-16) 632 14 44<br />
			tel.0 509 95 57 00<br />
			<span class="blue">e-mail: univers@univers.net.pl</span></p>
		    
		    
		</div>
		
		
		
	    </div>
	    
	    <div class="rightBox rightCorners">
		
	    </div>
	    
	    <div class="clear"></div>
	    
	    <div class="bottomstripe">		
		<p><img src="images/icon.png" />design by LECH-KOM</p>
		<div class="busBox" onclick="window.location.href = 'tabor.php'">
		    <div class="sliderContainer">
			<ul class="bjqs">
			    <? include './buses.php'; ?>
			</ul>
	 	    </div>	
		</div>
	    </div>
	    
	</div>
	
    </body>
</html>
