--TEST--
Regular Expression type: empty regex with no options
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('0A0000000B6100000000');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toJSON($bson)), "\n";

$json = '{"a" : {"$regex" : "", "$options" : ""}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toJSON(fromJSON($json))), "\n";

// extJSON to Canonical BSON
echo bin2hex(fromJSON($json)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
0a0000000b6100000000
{"a":{"$regex":"","$options":""}}
{"a":{"$regex":"","$options":""}}
0a0000000b6100000000
===DONE===