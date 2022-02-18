<?php
require_once("../config.php");
$db = new mysqli("$DBHost", "$DBUser", "$DBPassword", "$DBDatabase");


$API_SECRET = '';   // Your offerwall Secret here

$transaction_id = $_REQUEST['transaction_id'];
$offer_id = $_REQUEST['offer_id'];
$type = $_REQUEST['type'];
$username = $_REQUEST['sub_id'];
$gross = $_REQUEST['gross'];
$amount = $_REQUEST['amount'];
$status = $_REQUEST['status'];
$click_ip = $_REQUEST['click_ip'];
$sig = $_REQUEST['sig'];

if ($sig === md5($transaction_id . $API_SECRET . $offer_id . $username)) {
    if ($status === 1) {

        $db->query("UPDATE user SET balance=balance+'$amount' WHERE username='$username'");

        die("OK");
    } else {

        $db->query("UPDATE user SET balance=balance-'$amount' WHERE username='$username'");
        die("OK");
    }
}

die("Invalid signature");
