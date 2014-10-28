<?php
// avviamo la sessione per continuare la precedente o crearne una nuova
session_start();

if ($_SESSION['login'] == null && $_SESSION['id'] == null) {
	
// controlli aprire o no il mini login nel menu laterale

if ( $_SERVER['PHP_SELF'] != "/AMM/login.php" ) {
	if ( $_GET['form'] == "open" ) {
		$form= "?form=close";
		} else {
			$form= "?form=open";
		}
	}
?>
	
<a href="<?=$form?>"><img src="files/img/ico_in.png" onMouseOver="this.src='files/img/ico_inh.png';" border="0" alt="Login" onMouseOut="this.src='files/img/ico_in.png';"/></a>
<a href="registrazione.php"><img src="files/img/ico_reg.png" onMouseOver="this.src='files/img/ico_regh.png';" border="0" alt="Registrati" onMouseOut="this.src='files/img/ico_reg.png';"/></a>

<?php
	
	if ( $_GET['form'] == "open" || ($_GET['login'] == "success" && $_SERVER['PHP_SELF'] != "/AMM/login.php") ) {
		include ('files/form_Log.php');
		}

} else { 
	
	echo "Ciao <b>";
	echo $_SESSION['username'];
	echo "</b>";

?>

<a href="?logout=success"><img src="files/img/ico_out.png" onMouseOver="this.src='files/img/ico_outh.png';" onMouseOut="this.src='files/img/ico_out.png';" alt="Logout" border='0'/></a>

<?php
	if ( $_GET['logout'] == "success" ) {
	session_start();//Distruggo la vecchia sessione
	session_unset();
	session_destroy();
	session_start();//Apro una nuova sessione
	header( "refresh:2;url={$_SERVER['PHP_SELF']}" ); 
}
}
?>

<hr />
<p>Cerca annunci</p>
		 	Categoria:
		 	<br />
            <form method="get" action="index.php" id="cerca">
		 	<select name="categoria" >
              <option value="Seleziona una categoria">Seleziona una categoria</option>
                    <option value="Auto">Auto</option>
                    <option value="Moto">Moto</option>
                    <option value="Case">Case</option>
                    <option value="Altro">Altro</option>
          </select>
            <br><br>
		  <label for="provincia">Provincia:
	      </label>
		  <br />
		  <select name="provincia" >
           	  <option value="Seleziona una provincia">Seleziona una provincia</option>
                <option value="Cagliari">Cagliari</option>
    			<option value="Gallura">Gallura</option>
   				<option value="Medio Campidano">Medio Campidano</option>
  				<option value="Nuoro">Nuoro</option>
  				<option value="Oristano">Oristano</option>
 				<option value="Ogliastra">Ogliastra</option>
   				<option value="Sassari">Sassari</option>
   				<option value="Sulcis">Sulcis</option>    
          </select>
			<br />
	  
		    <p>
	        <input type='image' src='files/img/button_cer.jpg' onMouseOver="this.src='files/img/button_cerh.jpg';" onMouseOut="this.src='files/img/button_cer.jpg';" border='0'/>
		  </p>
          </form>
		  <hr />
             <p>Descrizione del progetto:
  </p>
</p>
          <p>Questa applicazione permette l'inserimento e la risposta di annunci proprio come su subito.it i dati vengono inviati in un database su phpmyadmin e salvati dopo ogni modifica. </p>