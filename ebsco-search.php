<?php
$proxy = "http://search.covenantseminary.edu:2048/login?qurl=";
if ($_REQUEST['set'] == "ebooks") {
	$dblist = array("nlebk","nlabk");
} else {
	$dblist = array("aph","rfh","buh","eft","eric","flh","fgh","hlh","rvh","oah","vah");
}
$ebscourl = "http://search.ebscohost.com/login.aspx?direct=true&site=ehost-live&scope=site&type=1&mode=bool&lang=en&authtype=ip";
foreach($dblist as $db) {
	$ebscourl = $ebscourl . "&db=" . $db;
}
$ebscourl = $ebscourl . "&bquery=" . urlencode($_REQUEST['search']);
$ebscourl = $proxy . urlencode($ebscourl);
header( 'Location: ' . $ebscourl );
?>
