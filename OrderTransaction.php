<?php

class OrderTransaction {

    public function getRecordQuery($tran_id)
    {
        $sql = "select * from orders WHERE transaction_id='" . $tran_id . "'";
        return $sql;
    }

    public function saveTransactionQuery($post_data)
    {
        $name = $post_data['cus_name'];
        $email = $post_data['cus_email'];
        $phone = $post_data['cus_phone'];
        $transaction_amount = $post_data['total_amount'];
       // $address = $post_data['cus_add'];
        $transaction_id = $post_data['tran_id'];
        $currency = $post_data['currency'];
        $emi_selected_inst = $post_data['emi_selected_inst'];

        $sql = "INSERT INTO orders (name, email, phone, amount, status, transaction_id,currency,emi_selected_inst)
                                    VALUES ('$name', '$email', '$phone','$transaction_amount','Pending', '$transaction_id','$currency','$emi_selected_inst')";

        return $sql;
    }

    public function updateTransactionQuery($tran_id, $type = 'Success')
    {
        $sql = "UPDATE orders SET status='$type' WHERE transaction_id='$tran_id'";

        return $sql;
    }
}

