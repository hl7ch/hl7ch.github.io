<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.5.0/Bundle-2Doc-ChlamydiaTrachomatis-Vct.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.5.0/Bundle-2Doc-ChlamydiaTrachomatis-Vct.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.5.0/Bundle-2Doc-ChlamydiaTrachomatis-Vct.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.5.0/Bundle-2Doc-ChlamydiaTrachomatis-Vct.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.5.0/Bundle-2Doc-ChlamydiaTrachomatis-Vct.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.ch/ig/ch-elm/1.5.0/Bundle-2Doc-ChlamydiaTrachomatis-Vct.html');
else 
  Redirect('http://fhir.ch/ig/ch-elm/1.5.0/Bundle-2Doc-ChlamydiaTrachomatis-Vct.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
