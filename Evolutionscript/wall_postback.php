<?php
$API_SECRET = '';   // Your API Secret here

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

        $db->query("UPDATE `members` SET money=money+'$amount' WHERE username  = '$username'");
        die("OK");
    } else {

        $update = $db->query("UPDATE `members` SET money=money-'$amount' WHERE username  = '$username'");
        die("OK");
    }
}

die("Invalid signature");
