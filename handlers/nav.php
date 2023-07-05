<?php

$docid = preg_match ('|^/docs/(.+)$|', $_SERVER['REQUEST_URI'], $regs) ? $regs[1] : 'index';

$doc = new docs\Doc ($docid);
if ($doc->error) return;

$doc->strip_omit_from_search ();

echo $doc->nav ();

?>