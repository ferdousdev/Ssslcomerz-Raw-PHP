<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

# This is a sample page to understand how to connect payment gateway

require_once(__DIR__ . "/lib/SslCommerzNotification.php");

include("db_connection.php");
include("OrderTransaction.php");

use SslCommerz\SslCommerzNotification;

# Organize the submitted/inputted data
$post_data = array();

$post_data['total_amount'] = isset($_POST['total_amount'])?$_POST['total_amount'] : "";
$post_data['currency'] = "BDT";
$post_data['tran_id'] = isset($_POST['tran_id'])?$_POST['tran_id'] : "";

# CUSTOMER INFORMATION
$post_data['cus_name'] = isset($_POST['cus_name']) ? $_POST['cus_name'] : "";
$post_data['cus_email'] = isset($_POST['cus_email']) ? $_POST['cus_email'] : "";
// $post_data['cus_add1'] = "Dhaka";
// $post_data['cus_add2'] = "Dhaka";
// $post_data['cus_city'] = "Dhaka";
// $post_data['cus_state'] = "Dhaka";
// $post_data['cus_postcode'] = "1000";
// $post_data['cus_country'] = "Bangladesh";
$post_data['cus_phone'] = isset($_POST['cus_phone']) ? $_POST['cus_phone'] : "" ;
//$post_data['cus_fax'] = "01711111111";

# SHIPMENT INFORMATION
// $post_data['ship_name'] = "Store Test";
// $post_data['ship_add1'] = "Dhaka";
// $post_data['ship_add2'] = "Dhaka";
// $post_data['ship_city'] = "Dhaka";
// $post_data['ship_state'] = "Dhaka";
// $post_data['ship_postcode'] = "1000";
// $post_data['ship_phone'] = "";
// $post_data['ship_country'] = "Bangladesh";

# OPTIONAL PARAMETERS
// $post_data['value_a'] = "Regent Air";
// $post_data['value_b'] = "ref002";
// $post_data['value_c'] = "ref003";
// $post_data['value_d'] = "ref004";

# MANAGED TRANS
//$post_data['multi_card_name'] = "brac_visa,dbbl_visa,city_visa,ebl_visa,brac_master,dbbl_master,city_master,ebl_master,city_amex,qcash,dbbl_nexus,bankasia,abbank,ibbl,mtbl,city";
//$post_data['allowed_bin'] = "371598,371599,376947,376948,376949";
//$post_data['multi_card_name'] = "bankasia,mtbl,city";


# CART PARAMETERS
// $post_data['cart'] = json_encode(array(
//     array("sku" => "REF0001", "product" => "DHK TO BRS AC A1", "quantity" => "1", "amount" => "200.00"),
//     array("sku" => "REF0002", "product" => "DHK TO BRS AC A2", "quantity" => "1", "amount" => "200.00"),
//     array("sku" => "REF0003", "product" => "DHK TO BRS AC A3", "quantity" => "1", "amount" => "200.00"),
//     array("sku" => "REF0004", "product" => "DHK TO BRS AC A4", "quantity" => "2", "amount" => "200.00")
// ));

$post_data['emi_option'] = isset($_POST['emi_option']) ? $_POST['emi_option']: " ";
$post_data['emi_max_inst_option'] = isset($_POST['emi_max_inst_option']) ? $_POST['emi_max_inst_option'] : " " ;
$post_data['emi_selected_inst'] = isset($_POST['emi_selected_inst']) ? $_POST['emi_selected_inst'] : " ";
$post_data['emi_allow_only'] = 1;
//var_dump($post_data['emi_allow_only']);

//$post_data['product_amount'] = "0";
//$post_data['discount_amount'] = "5";
/*
$post_data['product_amount'] = "100";
$post_data['vat'] = "5";
$post_data['discount_amount'] = "5";
$post_data['convenience_fee'] = "3";
*/
//$post_data['discount_amount'] = "5";

//$post_data['multi_card_name'] = "brac_visa,brac_master";
//$post_data['allowed_bin'] = "408860,458763,489035,432147,432145,548895,545610,545538,432149,484096,484097,464573,539932,436475";

# RECURRING DATA
$schedule = array(
    "refer" => "5B90BA91AA3F2", # Subscriber id which generated in Merchant Admin panel
    "acct_no" => "01730671731",
    "type" => "daily", # Recurring Schedule - monthly,weekly,daily
    //"dayofmonth"  =>  "24",   # 1st day of every month
    //"month"       =>  "8",    # 1st day of January for Yearly Recurring
    //"week"    =>  "sat",  # In case, weekly recurring

);




# SPECIAL PARAM
$post_data['tokenize_id'] = "1";

# 1 : Physical Goods
# 2 : Non-Physical Goods Vertical(software)
# 3 : Airline Vertical Profile
# 4 : Travel Vertical Profile
# 5 : Telecom Vertical Profile

// $post_data["product_profile"] = "general";
// $post_data["product_profile_id"] = "5";

// $post_data["topup_number"] = "01711111111"; # topUpNumber

# First, save the input data into local database table `orders`
$query = new OrderTransaction();
$sql = $query->saveTransactionQuery($post_data);

if ($conn_integration->query($sql) === TRUE) {

    # Call the Payment Gateway Library
    $sslcomz = new SslCommerzNotification();
    $sslcomz->makePayment($post_data, 'hosted');
} else {
    echo "Error: " . $sql . "<br>" . $conn_integration->error;
}

