<?php
	echo '<div id="navbar">Messaggio</div><br>';
	switch ($_GET['msg']) {
		case 'filesize_too_big':
			echo 'L\'immagine supera i kb consentiti.';
		break;
		
		case 'image_size_too_big':
			echo 'Le dimensioni dell\'immagine sono troppo grandi.';
		break;
		
		case 'file_not_supported':
			echo 'Il tipo di file non è supportato.';
		break;
		case 'event_created':
			echo 'L\'evento è stato creato con successo.';
		break;
		case 'event_modified':
			echo 'L\'evento è stato modificato con successo.';
		break;
		case 'permission_denied':
			echo 'Non hai i permessi per accedere a questa pagina.';
		break;
		case 'not_found':
			echo 'Questo elemento non è più disponibile.';
		break;
		case 'error':
			echo 'Si è verificato un errore.';
		break;
	}
	echo '<br><br><a href="'.$_SERVER['HTTP_REFERER'].'">Torna indietro</a>';
?>