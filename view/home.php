<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel Quickly Test</title>
        <link rel="stylesheet" href="view/css/bootstrap.min.css">
        <link rel="stylesheet" href="view/css/bootstrap-theme.min.css">
        <style type="text/css">            

            @media screen and (max-width: 400px) {
                #order_block{
                    position: static;
                    width: auto;
                }


                #testing_block{
                    position: static;
                    width: auto;
                }

            }
        </style>
    </head>
    <body>
        <br>
        <!--  Order Block Start -->
        <div class="col-sm-1"></div>			
        <div class="panel panel-default col-xs-5" id="order_block">
            <div class="row">
                <div class="col-md-12">
                    <h2>Create Order</h2>
                </div>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" name = "frm" method = "post" action ="controller/controller.php" >
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Order Section</strong>  
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="inputcustomer_name" class="col-sm-3 control-label">Customer name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Customer Full Name" name="customer_name" id="customer_name" value = "Customer Name" data-validation="custom" data-validation-regexp="^([a-zA-Z\s]+)$" data-validation-error-msg="Contain only charachers and space!">
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="inputcustomer_name" class="col-sm-3 control-label">Price:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Product Price" name="item_price" id="item_price" value = "80.25" data-validation="number" data-validation-allowing="float" data-validation-error-msg="Please provide the correct product price!"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputcustomer_name" class="col-sm-3 control-label">Currency:</label>
                        <div class="col-sm-8">
                            <select class="form-control" name = "currency">						
                                <option value = "USD" Selected>USD</option>
                                <option value = "EUR" >EUR</option>
                                <option value = "THB" >THB</option>
                                <option value = "HKD" >HKD</option>
                                <option value = "SGD" >SGD</option>
                                <option value = "AUD" >AUD</option>								
                            </select>
                        </div>
                    </div><br>


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Payment Section</strong>  
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="inputcustomer_name" class="col-sm-3 control-label">Card Holder:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Credit Card Holder Name" name="cc_name" id="cc_name" value = "Test Uer" data-validation="custom" data-validation-regexp="^([a-zA-Z\s]+)$" data-validation-error-msg="Contain only charachers and space!"/>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="inputcustomer_name" class="col-sm-3 control-label">Card Type:</label>
                        <div class="col-sm-8">
                            <select name = "cc_type" class="form-control">                           
                                <option value = "visa">VISA</option>
                                <option value = "mastercard">MASTERCARD</option>
                                <option value = "amex">AMEX</option>
                                <option value = "discover">DISCOVER</option>                 
                            </select>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="inputcustomer_name" class="col-sm-3 control-label">Card Number:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Credit Card Number" name="cc_number" id="cc_number" value = "4005519200000004" data-validation="number" data-validation-length="12-19" data-validation-error-msg="Contain only numbers!"/>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="inputcustomer_name" class="col-sm-3 control-label">Card Expiry:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Credit Card Expiry (MM/YYYY)" name="cc_expiry" id="cc_expiry" value = "11/2019" data-validation="custom" data-validation-regexp="^(0[1-9]|1[0-2])/[0-9]{4}$" data-validation-error-msg="Please provide expiry in MM/YYYY format!"//>                           

                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="inputcustomer_name" class="col-sm-3 control-label">Card CVV:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Credit Card CCV" name="cc_ccv" id="cc_ccv" value = "456" data-validation="number" data-validation-error-msg="Contain only numbers!"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-4 col-xs-10">
                            <button type="submit" class="btn btn-primary btn-lg btn-success">Place Order</button>
                        </div>

                    </div>

                </form>

            </div>
        </div>
        <!--  Order Block End -->

        <!--  Testing Block Start -->
        <div class="col-sm-1"></div>			
        <div class="panel panel-default col-xs-4" id="testing_block">
            <div class="row">
                <div class="col-md-12">
                    <h2>Testing</h2>
                </div>
            </div>
            <div class="panel-body">
                <div class="panel-body">
                    <div>The <b>BrainTree</b> sandbox environment only accepts <a href = "https://www.braintreepayments.com/docs/php/reference/sandbox">test credit card numbers.</a></div>

                    <div class = "boot_underline"><br><b>Visa</b> </div>
                    <div class = "boot_normal_font">4111111111111111</div>
                    <div class = "boot_normal_font">4005519200000004</div>
                    <div class = "boot_normal_font">4009348888881881</div>
                    <div class = "boot_normal_font">4012000033330026</div> 

                    <div class = "boot_underline"><b>MasterCard</b></div>
                    <div class = "boot_normal_font">5555555555554444</div>
                    <div class = "boot_normal_font">American Express</div>
                    <div class = "boot_normal_font">378282246310005</div>
                    <div class = "boot_normal_font">371449635398431</div>

                    <div class = "boot_underline"><b>American Express</b></div>
                    <div class = "boot_normal_font">378282246310005</div>
                    <div class = "boot_normal_font">371449635398431</div>


                    <div class = "boot_underline"><b>Discover</b></div>
                    <div class = "boot_normal_font">6011111111111117</div>

                    <div class = "boot_underline"><br><br><b>Conditional Testing</b> </div>
                    <div class = "boot_normal_font">1) Card Type = AMEX/ EUR, THB, HKD, SGD, AUD ==> Error</div>
                    <div class = "boot_normal_font">2) Card Type = AMEX/USD ==>   paypal </div>
                    <div class = "boot_normal_font">3) Card Type = !AMEX/EUR, or AUD ==>   paypal </div> 
                    <div class = "boot_normal_font">4) Card Type = !AMEX / THB, HKD, SGD ==>   Braintree</div>


                </div>
            </div>
        </div>
        <!--  Testing Block End -->


        <script src="view/js/jquery.min.js"></script>
        <script src="view/js/bootstrap.min.js"></script> 
        <script src="view/js/jquery.form-validator.min.js"></script>
        <script> $.validate();</script>
    </body>
</html>                                		
