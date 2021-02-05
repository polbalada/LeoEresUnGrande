<?php


$elementToRemove = 'message';
$xmlFileToLoad = 'cdcatalog.xml';
$xmlFileToSave =  'cdcatalogbook-modified.xml';

$dom = new DOMDocument();
$dom->load($xmlFileToLoad);

$matchingElements = $dom->getElementsByTagName($elementToRemove);
$totalMatches = $matchingElements->length;

$elementsToDelete = array();
for ($i = 0; $i < $totalMatches; $i++) {
    $elementsToDelete[] = $matchingElements->item($i);
}

foreach ($elementsToDelete as $elementToDelete) {
    $elementToDelete->parentNode->removeChild($elementToDelete);
}

$dom->save($xmlFileToSave);

