<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Invoice</title>
        <style>
            body,
            table {
                font-size: 13px;
            }
            .container {
                width: 100%;
                padding-right: var(--bs-gutter-x, 0.75rem);
                padding-left: var(--bs-gutter-x, 0.75rem);
                margin-right: auto;
                margin-left: auto;
            }
            div[_h098asdh] {
                font-weight: bold;
                font-size: 15px;
                margin-bottom: 15px;
                padding: 5px;
                border-top: 1px dotted #454545;
                border-bottom: 1px dotted #454545;
                text-align: center;
            }
            div[_d9283dsc] {
                padding-bottom: 25px;
                border-bottom: 1px solid #ccc;
                margin-bottom: 15px;
            }
            table[_a584de] {
                width: 100%;
                text-align: center;
                border-collapse:collapse;
                caption-side:bottom;
            }
            table[_a584de] thead {
                font-weight: bold;
            }
            table[_a584de] td {
                padding: 3px;
                border: 1px solid #ccc;
            }
            table[_t92sadbc2] {
                width: 100%;
            }
            table[_t92sadbc2] td {
                padding: 2px;
            }
            .col-xs-1 {
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-xs-2 {
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-xs-3 {
                flex: 0 0 auto;
                width: 25%;
            }

            .col-xs-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-xs-5 {
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-xs-6 {
                flex: 0 0 auto;
                width: 50%;
            }

            .col-xs-7 {
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-xs-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-xs-9 {
                flex: 0 0 auto;
                width: 75%;
            }

            .col-xs-10 {
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-xs-11 {
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-xs-12 {
                flex: 0 0 auto;
                width: 100%;
            }
            .text-right {
                text-align: right;
            }
            .flex-container {
                display: flex;
                flex-wrap: nowrap;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <td>
                            <div class="row" style="text-align: center;">
                                <div class="col-xs-12" style="padding-top: 20px;">
                                    <strong style="font-size: 18px;">MitFrot Crockeries.</strong><br />
                                    <p style="margin-top: 0px;">Shapla Tower Mitfort Road</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div style="border-bottom: 2px double #454545; margin-top: 7px; margin-bottom: 7px;"></div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div id="invoiceContent">
                                        <div class="row">
                                            <div class="col-xs-12 text-center">
                                                <div _h098asdh>
                                                    Sales Invoice
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 50px;">
                                            <div class="flex-container">
                                                <div class="col-xs-7" style="float: left;">
                                                    <strong>Customer Id: </strong> <?php echo $sales->Customer_Code ?><br>
                                                    <strong>Customer Name: </strong> <?php echo $sales->Customer_Name ?> <br>
                                                    <strong>Customer Address: </strong> <?php echo $sales->Customer_Address ?><br>
                                                    <strong>Customer Mobile: </strong> <?php echo $sales->Customer_Mobile ?>
                                                </div>
                                                <div class="col-xs-5 text-right" style="float: right;">
                                                    <strong>Sales by: </strong> <?php echo $sales->AddBy ?><br>
                                                    <strong>Invoice No.:</strong> <?php echo $sales->SaleMaster_InvoiceNo ?> <br>
                                                    <strong>Sales Date: </strong> <?php echo $sales->SaleMaster_SaleDate. ' ' . $sales->AddTime?> <br>
                                                    <strong>Payment Type:</strong> <?php echo $sales->payment_type ?> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div _d9283dsc></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <table _a584de>
                                                    <thead>
                                                        <tr>
                                                            <td>Sl.</td>
                                                            <td>Description</td>
                                                            <td>Qnty</td>
                                                            <td>Unit Price</td>
                                                            <td>Total</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            foreach ($saleDetails as $key => $value) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $key + 1 ?></td>
                                                            <td style="width:55%; text-align:left;"><?php echo $value->details ?></td>
                                                            <td><?php echo $value->SaleDetails_TotalQuantity ?></td>
                                                            <td><?php echo $value->SaleDetails_Rate ?></td>
                                                            <td align="right"><?php echo $value->SaleDetails_TotalAmount ?></td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="flex-container">
                                                <div class="col-xs-6" style="float: left;">
                                                    <br>
                                                    <table class="pull-left">
                                                        <tr>
                                                            <td><strong>Previous Due:</strong></td>
                                                            
                                                            <td style="text-align:right"><?php echo $sales->SaleMaster_Previous_Due == null ? '0.00' : $sales->SaleMaster_Previous_Due ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Current Due:</strong></td>
                                                            
                                                            <td style="text-align:right"><?php echo $sales->SaleMaster_DueAmount == null ? '0.00' : $sales->SaleMaster_DueAmount ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="border-bottom: 1px solid #ccc;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Total Due:</strong></td>
                                                            
                                                            <td style="text-align:right"><?php echo number_format(($sales->SaleMaster_Previous_Due + $sales->SaleMaster_DueAmount), 2) ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-xs-6" style="float: right;">
                                                    <table _t92sadbc2>
                                                        <tr>
                                                            <td><strong>Sub Total:</strong></td>
                                                            <td style="text-align:right"><?php echo $sales->SaleMaster_SubTotalAmount ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>VAT:</strong></td>
                                                            <td style="text-align:right"><?php echo $sales->SaleMaster_TaxAmount ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Discount:</strong></td>
                                                            <td style="text-align:right"><?php echo $sales->SaleMaster_TotalDiscountAmount ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Transport Cost:</strong></td>
                                                            <td style="text-align:right"><?php echo $sales->SaleMaster_Freight ?></td>
                                                        </tr>
                                                        <tr><td colspan="2" style="border-bottom: 1px solid #ccc"></td></tr>
                                                        <tr>
                                                            <td><strong>Total:</strong></td>
                                                            <td style="text-align:right"><?php echo $sales->SaleMaster_TotalSaleAmount ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Paid:</strong></td>
                                                            <td style="text-align:right"><?php echo $sales->SaleMaster_PaidAmount ?></td>
                                                        </tr>
                                                        <tr><td colspan="2" style="border-bottom: 1px solid #ccc"></td></tr>
                                                        <tr>
                                                            <td><strong>Due:</strong></td>
                                                            <td style="text-align:right"><?php echo $sales->SaleMaster_DueAmount ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <strong>In Word: </strong> <?php echo $in_word ?> <br><br>
                                                <strong>Note: </strong>
                                                <p style="white-space: pre-line"><?php echo $sales->SaleMaster_Description ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>
                            <div style="width: 100%; height: 50px;">&nbsp;</div>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <div class="row" style="border-bottom: 1px solid #ccc; margin-bottom: 5px; padding-bottom: 25px;">
                <div class="flex-container">
                    <div class="col-xs-6" style="float: left;">
                        <span style="text-decoration: overline;">Received by</span><br />
                        <br />
                        ** THANK YOU FOR YOUR BUSINESS **
                    </div>
                    <div class="col-xs-6 text-right" style="float: right;">
                        <span style="text-decoration: overline;">Authorized by</span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
