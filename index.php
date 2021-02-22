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
			Dąbków 49<br />
			37 - 600 Lubaczów<br />
			<br />
			tel./fax (0-16) 632 14 44<br />
			tel.0 509 95 57 00<br />
			e-mail: univers@univers.net.pl<br />
		    </div>
		    
		</div>
		
		<div class="contentBox">
		    
		    <h1>Witamy!</h1>
		    
		    <p>
			Firma Handlowo Usługowa Univers, której siedziba znajduję się w Lubaczowie woj. podkarpackie, specjalizuje się w krajowym i międzynarodowym transporcie osób.
			Realizujemy każdy rodzaj transportu autokarowego: wynajem autokarów, wynajem minibusów, wyjazdy firmowe, spotkania biznesowe, wycieczki szkolne, wycieczki objazdowe, wyjazdy narciarskie, obsługę konferencji i imprez sportowych, przejazdy wahadłowe.
		    </p>
		    <p>
			
			Do współpracy zapraszamy biura podroży, jednostki samorządu terytorialnego, instytucje oświatowe i kulturalne, ośrodki sportowe oraz klientów indywidualnych.
			Mamy wieloletnie doświadczenie, oferujemy rzetelna pomoc i dokładna kalkulacje każdego wyjazdu, doradzimy, która drogę wybrać i jak uniknąć niepotrzebnych opłat.
		    </p>
		    <p>
			Zapewniamy przewoź osób w bardzo dobrych warunkach, za niewygórowana cenę.
			W naszej ofercie znajdziecie Państwo usługi przewozowe na terenie kraju i całej Europy.

		    </p>
		    
		    
		    
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
	    <div class="">		
			<p><img src="images/banner-pfr.png" /></p>
			
		</div>
	    </div>
	</div>
	
    </body>
</html>
