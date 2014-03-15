<?php session_start(); 

$password="*******";    
if (isset($_SESSION['login'])) {  
    if (isset($_POST['logout'])) { 
        unset($_SESSION['login']); 
        $messaggio = "Logout effettuato con successo! Arrivederci!"; 
    } else { 
        header("Location: --indirizzo della piattaforma---");  
    }  
} else { 
    if (isset($_POST['password'])) { 
        if ($_POST['password'] == $password) { 
		
							$year = time() + 31536000;	
		
							
							if($_POST['remember']) {
								setcookie('remember_me', $_POST['password'], $year);
							}

					elseif(!$_POST['remember']) {
						
					if(isset($_COOKIE['remember_me'])) {
					$past = time() - 100;
					setcookie(remember_me, gone, $past);
	}
}
				
					
				

			
			 
            $_SESSION['login'] = "verificata"; 
            header("--indirizzo della piattaforma---"); 
        } else { 
            $messaggio = "Errore: password non corretta!"; 
        } 
    }  
} 





?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width" />
<title>Index</title>
<link rel="stylesheet" href="css/index_style.css" type="text/css" />

<link rel="stylesheet" href="css/tablet_index_style.css" media="only screen and (min-width: 533px) and (max-width:768px)" type="text/css" /> 
<link rel="stylesheet" href="css/phone_index_style.css" media="only screen and (max-width:532px)" type="text/css" /> 
<link rel="shortcut icon" href="img/favicon.ico" />
<base target="_blank" />
<!--<style type="text/css">
@import url("http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800");


body {
	font-family: 'Dosis', sans-serif;
	
}

</style>-->

</head>
<body>






  <!-- <div class="intro" style=" display:block; margin-left:auto!important; margin-right:auto !important; " > 
  <img src="Area51_logo.png" style=" display:block; padding-left: 7%; margin-left:auto!important; margin-right:auto !important; " />
    <h1 style="font-weight:bold;" >ACCESSO ALLE PIATTAFORME</h1> 
    <h1>Meeting Room</h1> 
</div> 
    
<iframe  src="//www.youtube.com/embed/E4QUIa34_BA" frameborder="0" allowfullscreen></iframe>

<div class="contenuto_index">
<p style="font-size:20px;">Gentile lettore,
benvenuto. Da qui puoi accedere alla Meeting Room dell&rsquo;ebook <b>La Chiave Suprema Workbook</b> digitando nella casella sottostante il codice che trovi all&rsquo;interno dell&rsquo;ebook. Se non hai acquistato l&rsquo;ebook puoi farlo <a href="http://www.area51editore.com/negozio/aloha-tutto-dipende-da-te" target="_blank">qui.</a></p>

</div> -->

<form class="form-1" name="login" action="index.php" method="post">
    
    <p class="field">
    	<input type="password" name="password" 
        value="<?php echo $_COOKIE['remember_me']; ?>" placeholder="INSERISCI IL CODICE"/> 
        <br />
        <input type="checkbox" name="remember" <?php if(isset($_COOKIE['remember_me'])) {
		echo 'checked="checked"';
	}
	else {
		echo '';
	}
	?> >Ricorda la password
       
   </p>
    
    <p class="submit">
    	<button type="submit" name="submit" ><i class="icon-arrow-right icon-large"></i></button>
        <br />
        <br />
      
    </p>
    
     <?php  
	
	if(isset($messaggio)) { 
    echo $messaggio; 
    unset($messaggio); 
}   
?> 
<p>


<!--<input type="checkbox" name="ricorda">Ricorda la password</p>-->
</form>
    
   

    
 
</body>
</html>