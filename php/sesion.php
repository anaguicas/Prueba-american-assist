<?php
function ValidarSesion(){
	session_start();
	$sessionvar = $this->GetLoginSessionVar();
	if(empty($_SESSION[$sessionvar])){
		return false;
	}

	return true;
}
?>