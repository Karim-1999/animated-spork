<?php
function secure()
{
if (!isset($_SESSION['id'])) {
set_message("Please login first to view this page.");
header('Location: /login');
die();
}
}
/* 
Questa funzione controlla se l'utente è autenticato (tramite una sessione ID).
Se non lo è, reindirizza l'utente alla pagina di login e termina il processo. 
Serve per proteggere le pagine riservate agli utenti autenticati.
 */
function set_message($message)
{ {
$_SESSION['message'] = $message;
}
}
/* 
Questa funzione imposta un messaggio in una sessione. Prende il messaggio da mostrare
 come parametro e lo salva nella sessione per accedere successivamente.
 */
function get_message()
{
if (isset($_SESSION['message'])) {
echo "<script type='text/javascript'> showToast('" . $_SESSION['message'] . "','top right' , 'success') </script>";
unset($_SESSION['message']);
}
}
/* 
Questa funzione recupera un eventuale messaggio impostato in precedenza nella sessione.
Se c'è, lo stampa come una toast notification 
e poi svuota la sessione per non mostrare nuovamente il messaggio. Serve per visualizzare
 eventuali notifiche o messaggi salvati nella sessione. */