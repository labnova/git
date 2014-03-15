<?php

session_start();

if(!isset($_SESSION['login'])) {
	header("Location:index.php");
	
}








function download($path) {
	
	
	
	
	




		
header ("Cache-Control: public");
header("Content-type: application/x-file-to-save"); 
header ( "Content-Disposition: attachment; filename=" .basename($path) );
header ("Content-Transfer-Encoding: binary");
header ( "Content-Description: Download file" );
header('Pragma: no-cache');
header('Expires: 0');
header ( "Content-Length: " . filesize ($path) );

readfile ($path);

	
	
}

if(isset($_GET['download'])) {
	
	if(!empty($_GET['download'])) {
		$file=$_GET['download'];
		
		
		$path= $file;
		download($path);
		
	}
	
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Define Charset -->
	<meta charset="utf-8"/>

	<!-- Page Title -->
	<title>La Chiave Suprema Workbook Meeting Room</title>

	<!-- Responsive Metatag -->    
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	


	<!-- ************************** Stylesheet ****************************** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="shortcut icon" href="img/favicon.ico" />
	
	<!-- Font icons -->
	<link rel="stylesheet" href="font/fontello.css" />
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic' rel='stylesheet' type='text/css'>
	<!--[if IE 7]>
    <link href="font/fontello-ie7.css" rel="stylesheet" ><![endif]-->
	<!-- Slider Revolution -->
	<link rel="stylesheet" href="plugins/revolution/css/settings.css" />

	<!-- Style -->
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/color/blue.css" />
    <link rel="stylesheet" href="css/stile_menu.css" />

	<!-- Media-Queties -->
	<link rel="stylesheet" href="css/media-queries.css" />

	<!-- Custom -->
	<!--[if IE 8]>
	<link rel="stylesheet" href="css/style-ie8.css">
	<![endif]-->
    	

</head>


<body>

<!-- begin Header -->

<header class="navbar navbar-fixed-top animated fadeInDown delay2">
<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-menu"></span>
		</button>
        <div class="container">

</div> 

		<h2 class="logo animated fadeInLeft delay3">
				<a class="navbar-brand" href="#"><img src="img/logo3.png" style="margin-top:-35px !important; " alt="Logo"  /></a>
		</h2> 
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav navbar-right">
			<li class="animated fadeInRight delay4"><a href="#menu-jumbotron">Home</a></li>
			<li class="animated fadeInRight delay5"><a href="#menu-about">Presentazione</a></li>
            <li class="animated fadeInRight delay6"><a href="#menu-domanda">Domanda</a></li>
			<li class="animated fadeInRight delay7"><a href="#menu-ministries">FAQ</a></li>
			<li class="animated fadeInRight delay8"><a href="#menu-gallery">Multimedia</a></li>
            <li class="animated fadeInRight delay9"><a href="#menu-sermons">Audio</a></li>
			<li class="animated fadeInRight delay10"> <a href="#menu-contact">Prenotazione</a></li>
            <li class="animated fadeInRight delay11"><a href="#menu-events">Meeting</a></li>
            <li class="animated fadeInRight delay12"> <a href="#menu-offerte">Promozioni</a></li>
            <li class="animated fadeInRight delay13"> <a href="#menu-esci">Esci</a></li>
           
         </ul>
	</div><!--/.nav-collapse -->
</div>
</header>
<!-- end Header -->


	
<!-- begin Revolution Slider -->
<div class="fullwidthbanner-container animated fadeInUp delay6" id="menu-jumbotron" >
<div class="fullwidthbanner">
	<ul>
	<!-- begin Slide 1 -->
<li data-transition="boxslide"  data-slotamount="10" data-masterspeed="500" data-slideindex="back" class="slide1">
		<img src="img/slider/immagine1.png"  alt="background" />
		
	
      <div class="caption sft text a" style="color:black !important; text-align:center !important;"  data-x="center" data-y="30"  data-speed="1200" data-start="2700" data-easing="easeOutExpo">
			Benvenuto nella Meeting Room dell&rsquo;ebook  <br>
	
			La Chiave Suprema Workbook
		</div>

		
		
		
	</li> 
	<!-- end Slide 1 -->

	<!-- begin Slide 2 -->
	<li data-transition="boxslide" data-slotamount="10" data-masterspeed="500" data-slideindex="back" class="slide2">
			<img src="img/slider/immagine4.png"  alt="background" />
            
           



<div class="caption sft text b" style="color:black !important; text-align:center !important;" data-x="center" data-y="0"  data-speed="1200" data-start="2700" data-easing="easeOutExpo">
			 a cura di Paul L. Green <br>
			
           La Chiave Suprema	
		
        	di Charles Haanel <br>
		
        	Workbook
		</div>

		
		
	</li>
	<!-- end Slide 2 -->
    
    <!-- begin Slide 3 -->
	<li data-transition="boxslide" data-slotamount="10" data-masterspeed="500" data-slideindex="back" class="slide2">
			<img src="img/slider/immagine5.png"  alt="background" />
		
    <div class="caption sft text b" style="" data-x="center" data-y="0"  data-speed="1200" data-start="2700" data-easing="easeOutExpo">    
        Il libro degli esercizi del metodo supremo<br>
		per ottenere ci&ograve; che vuoi dalla vita
        
    </div>
		
	</li>
	<!-- end Slide 3 -->
    
    <!-- begin Slide 4 -->
	<li data-transition="boxslide" data-slotamount="10" data-masterspeed="500" data-slideindex="back" class="slide2">
			<img src="img/slider/immagine8.png"  alt="background" />
		
    <div class="caption sft text b" style="" data-x="center" data-y="0"  data-speed="1200" data-start="2700" data-easing="easeOutExpo">    
       &ldquo;L&rsquo;ottimismo si ottiene con l&rsquo;armonia interiore&rdquo;<br>
        <i style="font-style:italic !important; font-size: 20px !important;">Charles Haanel</i>
    </div>
		
	</li>
	<!-- end Slide 4 -->
    
    <!-- begin Slide 5 -->
	<li data-transition="boxslide" data-slotamount="10" data-masterspeed="500" data-slideindex="back" class="slide2">
			<img src="img/slider/immagine7.png"  alt="background" />
		
      <div class="caption sft text b" style="" data-x="center" data-y="0"  data-speed="1200" data-start="2700" data-easing="easeOutExpo">    
     &ldquo;L&rsquo;abbondanza interiore produce ricchezza esteriore&rdquo;<br>
     <i style="font-style:italic !important; font-size: 20px !important;">Charles Haanel</i> 
    </div>
		
	</li>
	<!-- end Slide 5 -->
    
    <!-- begin Slide 6 -->
	<li data-transition="boxslide" data-slotamount="10" data-masterspeed="500" data-slideindex="back" class="slide2">
			<img src="img/slider/immagine6.png"  alt="background" />
		
      <div class="caption sft text b"  data-x="center" data-y="0"  data-speed="1200" data-start="2700" data-easing="easeOutExpo">    
      <!-- inserire scritte -->
        
    </div>
		
	</li>
	<!-- end Slide 6 -->
    
  
    
	</ul>
</div>
</div>
<!-- end Revolution Slider -->


<!-- begin Service & Study -->
<section id="menu-about" class="generic service animated fadeInUp delay6">
<div class="container">

	 <!-- title -->
	 <div class="row text-center title">
		<div class="col-sm-12">
			<h2>Presentazione</h2>
			<span class="dotts"> . . . . . . </span>            
		</div>          
	 </div>
	 <!-- end title -->

	<!-- begin Carousel -->
	<div class="row">
	<div id="carousel-service" class="carousel slide"> 
		<!-- <div class="carousel-inner"> -->
			
			<!-- begin Item 1 -->
			<div class="item active">
            
            
			<!--	<div class="col-sm-4 animated fadeInLeft delay2" style="font-size:5zpx !important; text-align:justify !important; text-justify:distribute !important; "> -->
            
            <div class="col-sm-4 animated fadeInLeft delay2">
					<h2>BENVENUTO!</h2>
					 <p >
<p>In questo ambiente hai a disposizione diversi strumenti utili alla lettura dell&rsquo;ebook e alla messa in pratica degli esercizi. Puoi decidere di utilizzarli tutti in libert&agrave;.</p>
<p>Puoi scaricare audio e video di supporto agli esercizi dell&rsquo;ebook.</p>
<p>Puoi fare domande sull&rsquo;ebook alle quali risponderemo direttamente alla tua mail.</p>
<p>Tutte le domande pi&ugrave; frequenti fatte dai lettori sono raccolte nello spazio FAQ. Ti invitiamo a consultarle: sono uno strumento prezioso e potresti accorgerti che c&rsquo;&egrave; gi&agrave; la risposta alla tua domanda.</p>
<p>Puoi prenotarti ai meeting con altri lettori e la redazione di <strong><b>Area51 Publishing</b></strong> per confrontarti sull&rsquo;ebook.</p>
<p>Puoi accedere alle promozioni pensate per te, su altri titoli simili in ebook e audiolibro.</p>
				</div>
				<div class="col-sm-7 col-md-offset-1 animated fadeInRight delay1">
	<!-- <iframe style=" margin-top: 76px !important; width: 100% !important; height: 350px !important;"  
    src="http://www.youtube.com/watch?v=Nl76MqVIkjg#t=2" frameborder="0" allowfullscreen></iframe> -->
    <iframe width="560" height="315" src="//www.youtube.com/embed/Nl76MqVIkjg" style=" margin-top: 76px !important;" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
            
            
				
			</div>
			<!-- end Item 1 -->

			

		</div>
	 			
		<!-- begin Controls -->
	<!--	<div class="row cu-controls">
			<div class="col-sm-12">
				<a href="#carousel-service" data-slide="prev" class="sercacontrol"><i class="icon-left-open-big"></i></a>
				<a href="#carousel-service" data-slide="next" class="sercacontrol next"><i class="icon-right-open-big"></i></a>
				<ol class="carousel-indicators">
					<li data-target="#carousel-service" class="middle" data-slide-to="0">Welcome to Vineyard</li>
					<li data-target="#carousel-service" class="middle" data-slide-to="1">Service &amp; Study</li>
					<li data-target="#carousel-service" class="middle" data-slide-to="2">Our Beliefs</li>
				</ol>
			</div>
		</div> -->
		<!-- end Controls -->

	</div>
	</div>
	<!-- end Carousel -->
</div>     
</section>
<!-- end Service & Study -->

<!-- begin Contact -->
<section id="menu-domanda" class="generic contact" >
<!--<div id="map"></div> -->
<div id="contact_bg">
	<div class="container">
		 
		 <div class="row text-center title">
         <br><br><br><br>
			<div class="col-sm-12">
				<h2>La tua domanda</h2>
				 <p>Se hai un dubbio sul testo, se un esercizio ti risulta difficoltoso puoi inserire qui la tua domanda seguita dalla tua mail.<br />
        Risponderemo direttamente alla tua mail.</p>

			</div>
		</div>

		<div class="row">
			
            <div class="col-sm-6" >
				<form class="form-inline" role="form" action="" method="post" >
					
                    
                    
					<textarea  id="richiesta" name="richiesta" class="form-control pull-left" rows="8" placeholder="Inserisci la tua domanda"></textarea> 
                  
                  <div class="form-group pull-right" style="">
						<label class="sr-only"  for="mail">Mail</label>
						<input type="email"  class="form-control"  name="mail" id="mail" placeholder="Inserisci il tuo indirizzo mail">
                        </div>
					
                    </div>

					<button type="submit" name="submit" value="invia" class="btn pull-right">Invia</button>
                    
                    <?php
				
					 
		
		$destinatario='info@studioarea51.com';
		
		$oggetto='DOMANDA DALLA PIATTAFORMA MASTER KEY';
		
		
		if (isset($_POST['submit'])) {
			
		$mail= $_POST['mail'];
		
		if(trim($_POST['richiesta'])=='') { echo 'Devi scrivere la tua richiesta!'; }
		
		else { $richiesta= strip_tags(trim(stripslashes($_POST['richiesta'] )));
		$corpo="ti è appena arrivata una nuova domanda dalla piattaforma 'La Chiave Suprema': 
		\" " .$richiesta. " \" 
		l'indirizzo mail da cui è stata mandata è "
		 .$mail;
		
		
		if(!@mail($destinatario, $oggetto,  $corpo)) {
			echo 'problemi durante invio richiesta.'; }
		else {
			echo 'richiesta inviata.'; }
		}
		
		}
		
		
	
	
	
	
	
	
					?>
                
                    
				</form>
                
                 
                
                
			</div>   
		 </div>

	 </div>
</div>
</section>
<!-- end domanda -->




<!-- Our Ministries -->
<section id="menu-ministries" class="generic ministries animated fadeInUp delay6" style="height: 2000px !important;">
<div class="container">
	
	<!-- begin title -->
	<div class="row text-center title">
		<div class="col-sm-12">
			<h2>Frequently Asked Questions</h2>
			<span class="dotts"> . . . . . . </span>            
		</div>          
	</div>
	<!-- end title -->

	<!-- begin Carousel -->
	<div class="row">
	<div id="carousel-ministries" class="carousel slide">

	

			<!-- begin Item 2 -->
			<div class="item">
				<div class="groups">
					
					<p class="title" style="font-size:21px !important;">1. Non riesco a visualizzare, cosa devo fare?</p>
                     
       		<p style="font-size:14px;">Durante il corso esercizi specifici contribuiscono a migliorare le tue capacit&agrave; 
			di visualizzazione. &Egrave; importante per&ograve; che ti renda conto di una cosa: non 
			c&rsquo;&egrave; un modo perfetto per visualizzare.</p>
					<a class="more" target="_blank" href="http://www.area51editore.com/MeetingRoom/La_Chiave_Suprema/faq.php">Scopri di pi&ugrave;</a>
					
				</div>
				<div class="groups">
					
					<p class="title" style="font-size:21px !important;">2. Come posso essere sicuro che le affermazioni positive si sono effettivamente 
				impresse nel subconscio?</p>
					<p style="font-size:14px;">Questo tipo di esercizio al 99% funziona con un&rsquo;unica esecuzione. Per avere la 
			certezza (ricorda che il dubbio &egrave; sempre conscio), soprattutto nella fase iniziale 
			del percorso...</p>
					<a class="more" target="_blank" href="http://www.area51editore.com/MeetingRoom/La_Chiave_Suprema/faq.php">Scopri di pi&ugrave;</a>
				</div>
				<div class="groups" id="faq3">
					
					<p class="title" style="font-size:21px !important;">3. Cosa significa lanciare una forte intenzione? Come devo fare?</p>
					<p style="font-size:14px;">
                    &Egrave; molto semplice: significa che consciamente stai attivando il processo di integrazione conscio-superconscio-subconscio. Proseguendo nella pratica ti renderai conto che ti baster&agrave; &rsquo;puntare&rsquo; la mente...</p>
					<a class="more" target="_blank" href="http://www.area51editore.com/MeetingRoom/La_Chiave_Suprema/faq.php">Scopri di pi&ugrave;</a>
				</div>

			
			</div>
			<!-- end Item 2 -->

			
		</div>

		<!-- begin Controls -->
	<!--	<div class="row cu-controls">
			<div class="col-sm-12">
				<a href="#carousel-ministries" data-slide="prev" class="sercacontrol"><i class="icon-left-open-big"></i></a>
				<a href="#carousel-ministries" data-slide="next" class="sercacontrol next"><i class="icon-right-open-big"></i></a>
				<span class="pull-left"></span>
				<span class="pull-right"></span>
				<ol class="carousel-indicators">
					<li data-target="#carousel-ministries" class="middle" data-slide-to="0"></li>
					<li data-target="#carousel-ministries" class="middle" data-slide-to="1"></li>
					<li data-target="#carousel-ministries" class="middle" data-slide-to="2"></li>
				</ol>
			</div>
		</div> -->
		<!-- end Controls -->

	</div>
	</div>
	<!-- end Carousel -->

</div>
</section>
<!-- end Our Ministries -->






<!-- Photo Albums -->
<section id="menu-gallery" class="generic gallery" style="height: 1500px !important; background:#fff;">

 <!-- begin title -->
 
	 <div class="row text-center title">
		<div class="col-sm-12">
			<h2>Multimedia</h2>
			<span class="dotts"> . . . . . . </span>            
		</div>          
	 </div>
	 <!-- end title -->
    
    	<div class="menu_contenuti" style="">
				
					<div id="dl-menu" class="dl-menuwrapper" style="left: 150px;" >
						<button class="dl-trigger" >Video</button> 
						<ul class="dl-menu dl-menuopen" >
							<li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Video/Video1_1.zip">Settimana 1</a>
							<!--	<ul class="dl-submenu">
									
					<li><a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Video/Video1_1.zip">esercizi prima parte</a></li>
					
											
								</ul> -->
                                
							</li>
							<li>
								<a href="#">Settimana 2</a>
								<ul class="dl-submenu">
		<li><a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Video/Video2_1.zip">esercizi prima parte</a></li>
		<li><a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Video/Video2_2.zip">esercizi seconda parte</a></li>
								</ul>
							</li>
							<li>
					<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Video/Video3_1.zip">Settimana 3</a>
								<!-- <ul class="dl-submenu">
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
						<!--	<li>
								<a href="#">Settimana 4</a>
								<ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li> -->
                            <li>
				<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Video/Video5_1.zip">Settimana 5</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                        <!--    <li>
								<a href="#">Settimana 6</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li>
                            <li>
								<a href="#">Settimana 7</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li> -->
                            <li>
					<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Video/Video8_1.zip">Settimana 8</a>
							<!--	<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Video/Video9_2.zip">Settimana 9</a>
							<!--	<ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                          <!--  <li>
								<a href="#">Settimana 10</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li>
                            <li>
								<a href="#">Settimana 11</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li>
                            <li>
								<a href="#">Settimana 12</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li>
                            <li>
								<a href="#">Settimana 13</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li>
                            <li>
								<a href="#">Settimana 14</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li> -->
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Video/Video15_1.zip">Settimana 15</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                         <!--   <li>
								<a href="#">Settimana 16</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li>
                            <li>
								<a href="#">Settimana 17</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li>
                            <li>
								<a href="#">Settimana 18</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li>
                            <li>
								<a href="#">Settimana 19</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li>
                            <li>
								<a href="#">Settimana 20</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li>
                            <li>
								<a href="#">Settimana 21</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li>
                            <li>
								<a href="#">Settimana 22</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li>
                            <li>
								<a href="#">Settimana 23</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li>
                            <li>
								<a href="#">Settimana 24</a>
								<ul class="dl-submenu">
									
											<li><a href="http://cdn.area51editore.com/Demo/RisparmioEcologicoDEMO.epub">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul>
							</li> -->
						</ul> 
                       
					
        
       
</div><!-- /dl-menuwrapper -->

<div id="dl-menu-1" class="dl-menuwrapper" >
						<button class="dl-trigger" style="left:150px !important; 
	position:relative !important;" >Audio</button> 
						<ul class="dl-menu dl-menuopen" style="left:150px !important; 
	position:relative !important;">
							<li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana1.zip">Settimana 1</a>
								<!-- <ul class="dl-submenu">
									
							<li><a id="mp3" href="">audio 1</a></li>
							<li><a href="">audio 2</a></li>
											<li><a href="">audio 3</a></li>
											<li><a href="">audio 4</a></li>
											<li><a href="#">audio 5</a></li>
											<li><a href="">audio 6</a></li>
								</ul> -->
							</li>
							<li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana2.zip">Settimana 2</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
							<li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana3.zip">Settimana 3</a>
								<!-- <ul class="dl-submenu">
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
							<li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana4.zip">Settimana 4</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana5.zip">Settimana 5</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana6.zip">Settimana 6</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana7.zip">Settimana 7</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana8.zip">Settimana 8</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana9.zip">Settimana 9</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana10.zip">Settimana 10</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana11.zip">Settimana 11</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana12.zip">Settimana 12</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana13.zip">Settimana 13</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana14.zip">Settimana 14</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana15.zip">Settimana 15</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana16.zip">Settimana 16</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana17.zip">Settimana 17</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana18.zip">Settimana 18</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana19.zip">Settimana 19</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana20.zip">Settimana 20</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana21.zip">Settimana 21</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana22.zip">Settimana 22</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana23.zip">Settimana 23</a>
								<!-- <ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
                            <li>
								<a href="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Audio/Settimana24.zip">Settimana 24</a>
								<!--<ul class="dl-submenu">
									
											<li><a href="#">video 1</a></li>
											<li><a href="#">video 2</a></li>
											<li><a href="#">video 3</a></li>
											<li><a href="#">video 4</a></li>
											<li><a href="#">video 5</a></li>
											<li><a href="#">video 6</a></li>
								</ul> -->
							</li>
						</ul>
					
        
        
</div><!-- /dl-menuwrapper -->
  
</div>      
       
	
</section>
<!-- end Photo Albums -->

<!-- Latest Sermons -->
<section id="menu-sermons" class="generic sermons" style="height: 1000px !important;">
<div class="container">

	<!-- begin title -->
	<div class="row text-center title">
		<div class="col-sm-12">
			<h2>Audio</h2>
			<span class="dotts"> . . . . . . </span>            
		</div>          
	</div>
	<!-- end title -->       

	<div class="row">
	<div class="col-md-8">
		<div id="jp_container_1" class="jp-video jp-video-360p">
			<div class="jp-type-single">

				<div class="player-container">
					<div id="jquery_jplayer_1" class="jp-jplayer">
                   
                    </div>
				</div>

				<div class="jp-gui">
					<a href="javascript:;" class="jp-btn jp-play" tabindex="1"><i class="icon-play"></i></a>
					<a href="javascript:;" class="jp-btn jp-pause" tabindex="1"><i class="icon-pause"></i></a>
					<div class="jp-title"><strong>LA CHIAVE SUPREMA WORKBOOK</strong></div>
					<div class="jp-progress">
						<div class="jp-current-time"></div>
						<div class="jp-duration"></div>
						<div class="jp-seek-bar"><div class="jp-play-bar"></div></div>
					</div>
				</div>

				<div class="jp-no-solution">
					<span>richiesto aggiornamento</span>
					per consentire una migliore fruizione della piattaforma, ti richiediamo gentilmente di scaricare l'ultima versione del<a href="http://get.adobe.com/flashplayer/" target="_blank">plugin Flash </a>.
				</div>

			</div>
		</div>
	</div>
	
	<div class="col-md-4 col-lg-3 col-lg-offset-1 playlist">
		<!-- <h3 style="font-size:22px !important;">Audio disponibile online</h3> -->
		<ul>
			<li><a href="#"
				data-title="1. The Great King in the Sky" 
				data-by=" La Chiave Suprema" 
				data-url="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Musiche/1. The Great King in the Sky.mp3" 
				data-poster="http://area51editore.com/MeetingRoom/La_Chiave_Suprema/player/immagine5.png"
			><i class="icon-play"></i>1. The Great King in the Sky</a></li>
			<li><a href="#"
				data-title="2. A Permanently Lapse of Ego" 
				data-by="La Chiave Suprema" 
				data-url="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Musiche/2. A Permanently Lapse of Ego.mp3" 
				data-poster="http://area51editore.com/MeetingRoom/La_Chiave_Suprema/player/immagine5.png" 
			><i class="icon-play"></i>2. A Permanently Lapse of Ego</a></li>
			<li><a href="#"
				data-title="3. Wish You Were Everywhere" 
				data-by="La Chiave Suprema" 
				data-url="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Musiche/3. Wish You Were Everywhere.mp3" 
				data-poster="player/immagine5.png" 
			><i class="icon-play"></i>3. Wish You Were Everywhere</a></li>
			<li><a href="#"
				data-title="4. Set the Controls for the Mind of the Heart" 
				data-by="La Chiave Suprema" 
				data-url="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Musiche/4. Set the Controls for the Mind of the Heart.mp3" 
				data-poster="http://area51editore.com/MeetingRoom/La_Chiave_Suprema/player/immagine5.png" 
			><i class="icon-play"></i>4. Set the Controls for the Mind of the Heart</a></li>
            <li><a href="#"
				data-title="5. Let There Be More Inner Light" 
				data-by="La Chiave Suprema" 
				data-url="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Musiche/5. Let There Be More Inner Light.mp3" 
				data-poster="http://area51editore.com/MeetingRoom/La_Chiave_Suprema/player/immagine5.png" 
			><i class="icon-play"></i>5. Let There Be More Inner Light</a></li>
            <li><a href="#"
				data-title="6. Thinks on the Wing" 
				data-by="La Chiave Suprema" 
				data-url="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Musiche/6. Thinks on the Wing.mp3" 
				data-poster="http://area51editore.com/MeetingRoom/La_Chiave_Suprema/player/immagine5.png" 
			><i class="icon-play"></i>6. Thinks on the Wing</a></li>
            <li><a href="#"
				data-title="7. Astronomy Divine" 
				data-by="La Chiave Suprema" 
				data-url="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Musiche/7. Astronomy Divine.mp3" 
				data-poster="http://area51editore.com/MeetingRoom/La_Chiave_Suprema/player/immagine5.png" 
			><i class="icon-play"></i>7. Astronomy Divine</a></li>
            <li><a href="#"
				data-title="8. Quantum Heart Father" 
				data-by="La Chiave Suprema" 
				data-url="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Musiche/8. Quantum Heart Father.mp3" 
				data-poster="http://area51editore.com/MeetingRoom/La_Chiave_Suprema/player/immagine5.png" 
			><i class="icon-play"></i>8. Quantum Heart Father</a></li>
            <li><a href="#"
				data-title="9. Goodbye Dark Sky" 
				data-by="La Chiave Suprema" 
				data-url="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Musiche/9. Goodbye Dark Sky.mp3" 
				data-poster="http://area51editore.com/MeetingRoom/La_Chiave_Suprema/player/immagine5.png" 
			><i class="icon-play"></i>9. Goodbye Dark Sky</a></li>
            <li><a href="#"
				data-title="10. Us are Them" 
				data-by="La Chiave Suprema" 
				data-url="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Musiche/10. Us are Them.mp3" 
				data-poster="http://area51editore.com/MeetingRoom/La_Chiave_Suprema/player/immagine5.png" 
			><i class="icon-play"></i>10. Us are Them</a></li>
            <li><a href="#"
				data-title="11. Another Brick in the Well" 
				data-by="La Chiave Suprema" 
				data-url="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Musiche/11. Another Brick in the Well.mp3" 
				data-poster="http://area51editore.com/MeetingRoom/La_Chiave_Suprema/player/immagine5.png" 
			><i class="icon-play"></i>11. Another Brick in the Well</a></li>
            <li><a href="#"
				data-title="12. Shine on You Creative Diamond" 
				data-by="La Chiave Suprema" 
				data-url="http://cdn.area51editore.com/MATERIALI/MeetingRoom/Musiche/12. Shine on You Creative Diamond.mp3" 
				data-poster="http://area51editore.com/MeetingRoom/La_Chiave_Suprema/player/immagine5.png" 
			><i class="icon-play"></i>12. Shine on You Creative Diamond</a></li>
            
			
		</ul>
	<!--	<a href="#" class="loadmore">Carica altri?</a> -->
	</div>
	</div>

</div>
</section>
<!-- end Latest Sermons -->
		
<!-- begin Contact -->
<section id="menu-contact" class="generic contact">
<!--<div id="map"></div> -->
<div id="contact_bg">
	<div class="container">
		 <br><br><br><br>
		 <div class="row text-center title">
			<div class="col-sm-12">
				<h2 style="line-height:2 !important;">Prenotati per il meeting</h2>
				<h2>
					Compilando tutti i campi sottostanti puoi iscriverti al prossimo meeting<br>
                    Il primo meeting &egrave; il 20 Febbraio alle 21.00
				</h2>
			</div>
		</div>

		<div class="row">
			
           
           

			<div class="col-sm-6" style="margin-left:25%;  display:block !important; position:relative !important;">
				<form class="form-inline" role="form" action="" method="post">
					<div class="form-group pull-left">
						<label class="sr-only" for="nome">Nome</label>
						<input type="text" class="form-control" name="nome" id="nome" placeholder="Inserisci il tuo nome">
					</div>
                    
                    <div class="form-group pull-right">
						<label class="sr-only" for="cognome">Cognome</label>
						<input type="text" class="form-control" name="cognome" id="cognome" placeholder="Inserisci il tuo cognome">
					</div>
                    
                    <div class="form-inline" role="form">
						<label class="sr-only" for="mail">Mail</label>
						<input type="email" style=" left: 0 !important; width:100% !important;" class="form-control" name="mail" id="mail" placeholder="Inserisci il tuo indirizzo mail">
					</div>

					

					<!-- <textarea class="form-control pull-left" rows="8"></textarea> -->

					<button type="submit" name="invia" value="invia" class="btn pull-right">Invia Prenotazione</button>
                    
                    <?php
			
			 
	
	if(isset($_POST['invia'])) {
		
		$nome= $_POST['nome'];
		$cognome=$_POST['cognome'];
		$mail=$_POST['mail'];
		
		
		 function controlla($email)
{
	// elimino spazi, "a capo" e altro alle estremità della stringa
	$email = trim($email);

	

	// controllo che ci sia una sola @ nella stringa
	$num_at = count(explode( '@', $email )) - 1;
	if($num_at != 1) {
		return false;
	}

	// controllo la presenza di ulteriori caratteri "pericolosi":
	if(strpos($email,';') || strpos($email,',') || strpos($email,' ')) {
		return false;
	}

	// la stringa rispetta il formato classico di una mail?
	if(!preg_match( '/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $email)) {
		return false;
	}

	return true;
}

if(!controlla($mail)) { echo "hai inserito una mail non valida. Riprova"; }

else {


	
	/*if(!isset($_POST['nome'])) { echo "devi inserire il nome!"; } else { $nome= $_POST['nome']; }
	if(!isset($_POST['cognome'])) { echo "devi inserire il cognome!"; } else { $cognome= $_POST['cognome']; }
	if(!isset($_POST['email'])) { echo "devi inserire la tua mail!"; } else { $mail= $_POST['email']; } */
	
if(isset($nome) && isset($cognome)) {
		
		
		
		$destinatario="XXXXXXX";
		$oggetto="richiesta prenotazione per il meeting";
		
		$corpo= "è arrivata una nuova richiesta per il meeting. 
		
		nome: ".$nome."
		cognome: ".$cognome."
		mail: ".$mail."
		
		 vorrebbe partecipare al meeting.";
		 
		
		 
		strip_tags(trim(stripslashes($corpo)));
		
		
		 
		 
		
		if(!@mail($destinatario, $oggetto,  $corpo)) {
			echo 'problemi durante invio richiesta.'; }
		else {
			echo "
				<p>Prenotazione inviata. Grazie per la tua partecipazione!</p>
				";
				
			
			 }
			
			
} else { echo "non puoi spedire la richiesta, perchè devi prima compilare tutti i campi."; }
			
			
			
		}
		
		
	}
	
	
			
			?>
                
                    
				</form>
                
                 
                
                
			</div>   
		 </div>

	 </div>
</div>
</section>
<!-- end Contact -->

<!-- Upcoming Events -->
<section id="menu-events" class="generic events">
<div class="container">

	 <!-- begin title -->
	 <div class="row text-center title">
		<div class="col-sm-12">
			<h2>Meeting</h2>
			<span class="dotts"> . . . . . . </span>            
		</div>          
	 </div>
	 <!-- end title -->

	<!-- begin Carousel -->
	<div id="carousel-events" class="row carousel slide">
	<div class="carousel-inner">
	 	<!-- begin Item 1 -->
	 	<div class="item active">
        
        <!--events column-->
			<div class="col-sm-5 eventlist">
				<h3>Programma Meeting</h3>
				<ul>
					<!--<li>
						<div class="event-date">
							<div class="number">10</div> 
							<div class="month">Gennaio</div>
						</div>
						<div class="event-info">Meeting 1</div>
					</li> -->
					<li>
						<div class="event-date">
							<div class="number">20</div> 
							<div class="month">Febbraio</div>
						</div>
						<div class="event-info">ORE 21:00</div>
					</li>
                    <br>
                    <br>
                    <br>
					<li>
						<div class="event-date">
							<div class="number">28</div> 
							<div class="month">Marzo</div>
						</div>
						<div class="event-info">ORE 21:00</div>
					</li>
				</ul>
			</div>
			<!--end events column-->
			

			<!--date circle-->
			 <div class="col-sm-2 text-center" >
				<div class="infobox light" >
						
				</div>
				 <div class="infobox dark" >
						
				</div>
				<!-- <a href="#" class="more">Vedi tutti</a> -->
			</div> 
			<!--end date circle-->
            
            <!--events column-->
			<div class="col-sm-5 eventlist">
				<h3>Prossimo meeting</h3>
               <p> Se ti sei prenotato al meeting e hai ricevuto la mail di conferma il giorno e l&rsquo;ora del meeting in programma clicca qui sotto</p>
				<ul>
               
					<!-- <li style="color: white !important;">
						<div class="event-date" style="color: white !important;">
							<div class="number" style="color: white !important;">28</div> 
							<div class="month" style="color: white !important;">Gennaio</div>
						</div>
						<div class="event-info" style="color: white !important;"> Primo Meeting </div>
					</li> -->
					
				
					<li>
						<div class="event-date" style="margin-bottom: 30px !important;">
							<div class="number">20</div> 
							<div class="month">Febbraio</div>
						</div>
						<div class="event-info">ORE 21:00</div>
                        <br>
                        <button type="submit" name="invia" value="invia" class="btn pull-right" style=" clear:both; float:left !important; color:#5ea3ff !important; margin-bottom: 90px !important;  border-top: 1px solid #5ea3ff; border-bottom: 1px solid #5ea3ff;"><a  href="https://www.anymeeting.com/850-455-109" target="_blank">Vai al Meeting</a></button>	
					</li>
                   
                    
				<!--	<li style="color: white !important;">
						<div class="event-date" style="color: white !important;">
							<div class="number" style="color: white !important;">30</div> 
							<div class="month" style="color: white !important;">Gennaio</div>
						</div>
						<div class="event-info" style="color: white !important;">Meeting 3</div>
					</li> -->
				
			</div>
			<!--end events column-->
            
			
			
		</div>
		<!-- end Item 1 -->

		
	</div>

	<!-- begin Controls 
	<div class="row control-arrow">
		<div class="col-sm-12">
			<div class="pull-left">
			<a href="#carousel-events" data-slide="prev"><i class="icon-left-open-big"></i> Luglio / Agosto</a>
			</div>
			<div class="pull-right">
			<a href="#carousel-events" data-slide="next"> Novembre / Dicembre <i class="icon-right-open-big"></i></a>
			</div>
		</div>
	</div>
	<!-- end Controls -->

	</div>
	<!-- begin Carousel -->
</div>     
</section>
<!-- end Upcoming Events -->




<section id="menu-offerte" class="generic ministries animated fadeInUp delay6" style="height:2000px !important;">
<div class="container">
	
	<!-- begin title -->
	<div class="row text-center title">
		<div class="col-sm-12">
			<h2>Promozioni esclusive per i lettori della Chiave Suprema Workbook</h2>
			<span class="dotts"> . . . . . . </span>            
		</div>          
	</div>
	<!-- end title -->

	<!-- begin Carousel -->
	<div class="row">
	<div id="carousel-offerte" class="carousel slide">

		<div class="carousel-inner">
			<!-- begin Item 1 -->
			<div class="item active">
				<div class="groups">
					<img src="img/OffertaChiaveSuprema.jpg" alt="prima offerta" style="height:200px !important;">
					<p class="title" style="text-align:center;">Promozione<br> Chiave Suprema</p>
                    <br>
                    <br>
                    
					<p class="studies" style="text-align:center;"><span>Chiave Suprema</span><br> (3 audiolibri + 3 ebook)<br>
                     8,99  &euro; (50%) <br>+<br>ebook<br><strong> &quot;365 giorni con la Legge dell&rsquo;Attrazione&quot;<br> gratuito</strong></p>
					
					<a class="more" target="_blank" href="http://www.area51editore.com/negozio/promozione-chiave-suprema">SCOPRI DI PIU'</a>
				</div>
				<div class="groups">
					<img src="img/OffertaChimicaMentale.jpg" alt="seconda offerta" style="height:200px !important;">
               		<p class="title" style="text-align:center;">Promozione <br>Charles Haanel</p>
                    <br>
                    <br>
                    
					<p class="studies" style="text-align:center;"><span>Chimica Mentale<br> +<br> I segreti dello Yoga </span><br>(2 audiolibri + 2 ebook)<br> 9,49 &euro; (50%) <br>+<br>ebook<br><strong> &quot;365 giorni con la Legge dell&rsquo;Attrazione&quot;<br> gratuito</strong></p>
                    
					
					<a class="more" target="_blank" href="http://www.area51editore.com/negozio/promozione-charles-haanel">SCOPRI DI PIU'</a>
				</div>
				<div class="groups">
					<img src="img/OffertaLeggeAttrazione.jpg" alt="terza offerta" style="height:200px !important;">
					<p class="title" style="text-align:center;">Promozione<br> Legge dell&rsquo;Attrazione</p>
                    <br>
                    <br>
                    
					<p class="studies" style="text-align:center;"><span>La Legge di Attrazione del pensiero<br> +<br> Come attrarre il successo<br> +<br> Il tuo potere interiore</span><br> (3 audiolibri + 3 ebook)<br> 10,99 &euro; (50%)<br>+<br>ebook<br><strong> &quot;365 giorni con la Legge dell&rsquo;Attrazione&quot;<br> gratuito</strong></p>
                    
					
					<a class="more" target="_blank" href="http://www.area51editore.com/negozio/promozione-legge-dellattrazione">SCOPRI DI PIU'</a>
				</div>

				<!-- <span class="pagination">1 to 3 of 9</span> -->
			</div>
			<!-- end Item 1 -->

			
		</div>

		<!-- begin Controls -->
	<!--	<div class="row cu-controls">
			<div class="col-sm-12">
				<a href="#carousel-ministries" data-slide="prev" class="sercacontrol"><i class="icon-left-open-big"></i></a>
				<a href="#carousel-ministries" data-slide="next" class="sercacontrol next"><i class="icon-right-open-big"></i></a>
				<span class="pull-left"></span>
				<span class="pull-right"></span>
				<ol class="carousel-indicators">
					<li data-target="#carousel-ministries" class="middle" data-slide-to="0"></li>
					<li data-target="#carousel-ministries" class="middle" data-slide-to="1"></li>
					<li data-target="#carousel-ministries" class="middle" data-slide-to="2"></li>
				</ol>
			</div>
		</div> -->
		<!-- end Controls -->

	</div>
	</div>
	<!-- end Carousel -->

</div>
</section>
<!-- end Our Ministries -->
<section id="menu-esci">
 <div style="text-align:center; font-size:30px !important; margin-top:20px !important;">
  <form name="logout" action="index.php" method="post"> 
			<input type="hidden" name="logout" value="esci"/>
            <input  type="submit" value="ESCI DALLA MEETING ROOM" /> 
</form> 
</div>
</section>
	
		
<!-- Footer -->
<!-- <footer>
	<div class="container">
		<div class="row copy">
			<div class="col-lg-12">
				
			<!--	<h6>basato sul tema dei mustachethemes.</h6>
			</div>
		</div>
	</div>
</footer>   -->
<!-- end Footer --> 
		
<a href="#" class="scrollup"><i class="icon-up-open"></i></a>      

		
<!-- ******************************************************************** -->
<!-- ************************** JQuery libs ***************************** -->
    
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write("<script src=\"js/jquery-1.9.1.min.js\"")</script> 
  <script>
			$(function() {
				$( '#dl-menu' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
				});
			});
			
			$(function() {
				$( '#dl-menu-1' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
				});
			});
			
			
			
			
		</script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.dlmenu.js"></script>
		
    
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script> 
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
    <script src="js/respond.min.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    
    <!-- Scroll To-->         
   <<script src="js/jquery.scrollTo.js"></script> 
    <script src="js/jquery.nav.js"></script> 
    
    <!-- Retina Support-->
    <script src="js/retina.js" ></script> 
    
  
    
    <!-- Slider Revolution -->
    <script src="plugins/revolution/js/jquery.themepunch.plugins.min.js"></script>
    <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script> 
    
    <!-- prettyPhoto -->
    <script src="plugins/prettyphoto/js/jquery.prettyPhoto.js"></script> 
    
    <!-- jPlayer -->
     <script src="plugins/jplayer/jquery.jplayer.js" ></script> 
    
    <!-- Custom -->
   <script src="js/script.js"></script>

<!-- ******************************************************************** -->

</body>
</html>