<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-term/index.html/CodeSystem-2.16.756.5.30.1.127.3.4.json');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-epr-term/index.html/CodeSystem-2.16.756.5.30.1.127.3.4.html');
else 
  Redirect('http://fhir.ch/ig/ch-epr-term/index.html/CodeSystem-2.16.756.5.30.1.127.3.4.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
