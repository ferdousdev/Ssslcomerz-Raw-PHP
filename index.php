<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="SSLCommerz">
    <title>Fair Electronics Limited Post Payment | SSLCommerz</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <style type="text/css">
    .form-list-fr{
        display: block;
        margin: 0 auto;
    }
    .fields-fr{
        display: block;
        width: 100%;
        padding: 10px 0;
        margin: 0 auto;
    }
    .field-fr label {
    font-weight: 600;
    font-size: 16px;
}
    .field-fr{
        display: inline-block;
        width: 33%;

    }
    .input-box input {
    width: 90%;
    display: block;
    padding: 10px;
    border-radius: 5px;
}
.input-box select {
    width: 90%;
    display: block;
    padding: 10px;
    border-radius: 5px;
}
.btn-spacefr{
    margin-top: 20px;
}
.btn-customfr {
    padding: 15px 50px 10px;
    font-weight: 700;
    font-size: 22px;
    text-transform: uppercase;
    vertical-align: middle;
    background-color: #000;
    color: #fff;
    border-radius: 40px;
}
.btn-customfr:hover{
    color: #fff;
}
form.needs-validation {
    width: 100%;
    display: block;
    margin: 0 auto;
}
label.required:after, span.required:after {
    content: ' *';
    color: #EE001C;
    font-weight: normal;
    font-family: "SamsungOne", Poppins, georgia, serif;
    font-size: 12px;
}
label.required em, span.required em {
    display: none;
}
@media only screen and (max-width: 639px){
    .field-fr{
        width: 100%;
        display: block;
    }
}
</style>
</head>
<body class="bg-light">
<div class="container">
    <div class="py-5 text-center">
        <h2>Fair Electronics Limited Post Payment</h2>
        <p class="lead">Please input the payment information and amount carefully. if the payment amount found difference with the actual order amount then the order will be hold.</p>
    </div>

    <div class="row">
      
        
            <form action="checkout_hosted.php" method="POST" class="needs-validation">
                <div class="form-list-fr">
    <div class="fields-fr">
        <div class="field-fr">
            <label for="orderId" class="required"><em>*</em>Order ID:</label>
            <div class="input-box">
                <input type="text" id="tran_id" name="tran_id" value="" required="">
                <input name="emi_option" id="emi_option"  type="hidden"  value="1" /> 
                <input name="emi_max_inst_option" id="emi_max_inst_option"  type="hidden"  value="12" /> 
            </div>
        </div>
        <div class="field-fr">
            <label for="totalAmount" class="required"><em>*</em>Total Amount:</label>
            <div class="input-box">
                <input type="text" id="total_amount" name="total_amount" value="" required="">
            </div
>        </div>

        <div class="field-fr">
            <label for="chooseEMI" class="required"><em>*</em>Choose EMI:</label>
            <div class="input-box">
                <select id="emi" name="emi_selected_inst">
                  <option value="">No EMI</option>
                  <option value="3">3 Months EMI</option>
                  <option value="6">6 Months EMI</option>
                  <option value="12">12 Months EMI</option>
                </select>
            </div>
        </div>

    </div>

    <div class="fields-fr">
        <div class="field-fr">
            <label for="customerName" class="required"><em>*</em>Customer Name:</label>
            <div class="input-box">
                <input type="text" id="cus_name" name="cus_name" value="" required="">
            </div>
        </div>
        <div class="field-fr">
            <label for="customerEmail" class="required"><em>*</em>Customer Email:</label>
            <div class="input-box">
                <input type="text" id="cus_email" name="cus_email" value="" required="">
            </div>
        </div>

        <div class="field-fr">
            <label for="customerPhone" class="required"><em>*</em>Customer Phone:</label>
            <div class="input-box">
                 <input type="text" id="cus_phone" name="cus_phone" value="" required="">
            </div>
        </div>

    </div>

<input name="store_id" type="hidden" value="fairelectronicscombdlive" /> 
<input name="success_url" type="hidden" value="/success-payment" /> 
<input name="fail_url" type="hidden" value="/fail-payment" />
 <input name="cancel_url" type="hidden" value="/cancel-payment" />
  <input name="version" type="hidden" value="2.00" />
</div>
                <hr class="mb-4">
                <button class="btn btn-customfr" type="submit">Pay Now</button>
            </form>
        </div>
   

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021 Fair Electronics Limited</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</html>
