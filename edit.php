<?php

$xml = simplexml_load_file('edit.xml');

print_r("<pre>");
print_r($xml);
print_r("</pre>");

if ($xml->xpath('//appSettings/add[@key="Id"]')[0]) {

    $xml->xpath('//appSettings/add[@key="Id"]')[0]->attributes()['value'] = 5;
}

if ($xml->xpath('//appSettings/add[@key="Name"]')[0]) {

    $xml->xpath('//appSettings/add[@key="Name"]')[0]->attributes()['value'] = 'test';
}

$xml->asXML('edit.xml');
?>