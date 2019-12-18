<?php

$rssIT = file_get_contents("https://www.silicon.fr/feed");
$rssJUR = file_get_contents("https://www.lemondeinformatique.fr/flux-rss/thematique/juridique/rss.xml");

$feedIT = new SimpleXMLElement($rssIT);
$feedJUR = new SimpleXMLElement($rssJUR);

require_once ('src/view/veille.php');