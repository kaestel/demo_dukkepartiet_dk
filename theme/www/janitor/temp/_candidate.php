<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");

// include the output class for output method support
include_once("class/system/output.class.php");

$action = $page->actions();

$IC = new Items();
$itemtype = "candidate";

$model = $IC->typeObject($itemtype);
$output = new Output();


$page->bodyClass($itemtype);
$page->pageTitle("Candidates");


if(is_array($action) && count($action)) {

	if(preg_match("/[a-zA-Z]+/", $action[0])) {

		// check if custom function exists on User class
		if($model && method_exists($model, $action[0])) {

			$output->screen($model->$action[0]($action));
			exit();
		}
	}

	// LIST ITEM
	// Requires exactly two parameters /enable/#item_id#
	if(count($action) == 1 && $action[0] == "list") {

		$page->header(array("type" => "janitor"));
		$page->template("janitor/".$itemtype."/list.php");
		$page->footer(array("type" => "janitor"));
		exit();

	}
	// NEW ITEM
	else if(count($action) == 1 && $action[0] == "new") {

		$page->header(array("type" => "janitor"));
		$page->template("janitor/".$itemtype."/new.php");
		$page->footer(array("type" => "janitor"));
		exit();

	}
	// NEW ITEM
	else if(count($action) == 2 && $action[0] == "edit") {
	
		$page->header(array("type" => "janitor"));
		$page->template("janitor/".$itemtype."/edit.php");
		$page->footer(array("type" => "janitor"));
		exit();
	
	}


}

$page->header();
$page->template("404.php");
$page->footer();

?>
