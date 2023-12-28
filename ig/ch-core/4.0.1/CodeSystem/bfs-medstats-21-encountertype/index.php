<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-core/4.0.1/CodeSystem-bfs-medstats-21-encountertype.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-core/4.0.1/CodeSystem-bfs-medstats-21-encountertype.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-core/4.0.1/CodeSystem-bfs-medstats-21-encountertype.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-core/4.0.1/CodeSystem-bfs-medstats-21-encountertype.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-core/4.0.1/CodeSystem-bfs-medstats-21-encountertype.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-core/4.0.1/CodeSystem-bfs-medstats-21-encountertype.html');
else 
  Redirect('http://fhir.ch/ig/ch-core/4.0.1/CodeSystem-bfs-medstats-21-encountertype.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
