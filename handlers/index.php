<?php

// redirect /docs to /docs/LATEST_VERSION
if ($_SERVER['REQUEST_URI'] === '/docs') {
	$this->redirect ('/docs/' . Appconf::docs ('Docs', 'default_version'));
}

// show version index
if (preg_match ('|^/docs/([0-9]+\.[0-9]+)$|', $_SERVER['REQUEST_URI'], $regs)) {
	$doc = new docs\Doc ($regs[1]);
	if ($doc->error) {
		return $doc->handle_error ($this, $regs[1]);
	}
} else {
	$docid = join ('/', $this->params);
	$doc = new docs\Doc ($docid);
	if ($doc->error) {
		return $doc->handle_error ($this, $docid);
	}
}

$doc->strip_omit_from_search ();

$page->id = 'docs';
$page->title = $doc->title ();
$page->layout = Appconf::docs ('Docs', 'layout');
$page->add_style ('/apps/docs/css/style.css');
$page->add_script ('/js/jquery.cookie.js');
$page->add_script ('/apps/docs/js/targets.js');

URLify::$remove_list = array ();

$version = $doc->version ();
$versions = $doc->versions ();
$is_most_recent = docs\Doc::is_most_recent_version ($version, $versions);
$most_recent_version = docs\Doc::most_recent_version ($versions);
$most_recent_link = docs\Doc::most_recent_link ($doc->id, $most_recent_version);

echo $tpl->render ('docs/page', array (
	'link' => $doc->link (),
	'parent_links' => $doc->parent_links (),
	'targets' => $doc->targets (),
	'version' => $version,
	'versions' => $versions,
	'is_most_recent' => $is_most_recent, 
	'most_recent_version' => $most_recent_version,
	'most_recent_link' => $most_recent_link,
	'title' => $page->title,
	'body' => $doc->render (),
	'doc' => $doc,
	'cookie_prefix' => Appconf::docs ('Docs', 'cookie_prefix')
));

?>