
<!DOCTYPE html>
<html>
<head>
  <title>CTL INVOICE</title>
    <link rel="icon" href="http://cyberdynetechnologyltd.com/sms_accounting/images/logo/Fevicon.png" type="image/x-icon" />
      <link href="<?php echo base_url();?>assets/dashboard/css/bootstrap.min.css" rel="stylesheet">
   <link href="<?php echo base_url();?>assets/dashboard/css/report.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dashboard/css/report1.css" rel="stylesheet">

    <style type="text/css" media="print">
        @page {
            size: auto;   /* auto is the initial value */
            margin: 15mm 5mm 5mm 10mm;   /* this affects the margin in the printer settings */
        }
    </style></head>
<body id="print-container-body">

  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
             <div class="" style="">
                            <div style="width:10%;">
                    <img style="height: 80px; margin: 5px 0 0 5px;" src="<?php echo base_url("images/logo-large.png"); ?>">
                </div>
                <div class="company-head" style="text-align: center; min-height: 82px;">                
                    <p><h2>Cyberdyne Technology Ltd
</h2></p>
                    <p>Address: House # 1/B, Road # NS-1 (Main Road)</p>
                    <p>Block-A, Banasree, Dhaka-1219</p>
                    <p>+88028399701-702</p>
                    <p>info.armagroup@gmail.com</p>
                    <p>http://armagroup.com.bd</p>
                    <p>Print date: <?php echo date("d/m/Y"); ?></p>                
                </div>
                        <div class="ibox-title" style="height:25px;">
                  <h6 style="font-size: 13px; margin-top: 0px;">INVOICE</h6>
                </div>
            <div class="ibox-content">

                        <table class="table table-striped table-hover dataTables-example topics" style="margin-bottom: 5px;">
                <tbody class="top-header">
                <?php foreach ($reportdata as $key => $info) { ?>
                    <tr>
                        <td colspan="4" style="border-top: none;">INVOICE DATE: <?php echo $info->St_invoice_date; ?>
                      </td>
                        <td colspan="4" style="text-align:right; border-top: none;">INVOICE NUMBER: <?php echo $info->St_Invoice_number; ?></td>
                    </tr>

             <!--        <tr >
                      <?php foreach ($reportdata as $key => $info1) {
                        if($info1->AccountNumber != "") {
                     ?>
                        <td colspan="4" style="border-top: none;">BANK ACCOUNT: <?php echo $info1->AccountNumber; ?></td>
                      <?php break;}} ?>
                      <td colspan="4" style="text-align:right; border-top: none;">VOUCHER TYPE: BANK_PAYMENT</td>
                    </tr> -->

                    <tr>
                        <td colspan="8" style="border-top: none;">STUDENT NAME: <?php echo $info->Std_Name; ?></td>
                    </tr>

                    <tr>
                        <td colspan="8" style="border-top: none;">INFORMATION: <?php echo $info->Class_Name; ?>-(<?php echo $info->Section_Name; ?>)Roll:<?php echo $info->Std_roll; ?></td>
                    </tr>

                    <?php break;} ?>
                </tbody>
            </table>

 

            <table id="tblExport" class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 5px;">
                <thead class="theight">
                    <tr>
                        <th style="width: 5%; text-align: center;">SL#</th>
                        <!-- <th style="width: 10%; text-align: center;">DATE</th> -->
                        <th style="width: 20%; text-align: center;">TERM</th>
                        <!-- <th style="width: 20%; text-align: center;">DECRIPTION</th> -->
                        <th style="width: 15%; text-align: center;">CHARGES</th>
                        <th style="width: 20%; text-align: center;">PAYMENTS</th>
                        <th style="width: 10%; text-align: center;">TOTAL AMOUNT</th>
                        
                    </tr>
                </thead>


                     <tbody class="theight">
                <?php if($reportdata > 0 ) {?>
                <?php {  $sl = 1;
                foreach ($reportdata as $key => $info) { ?>
                    <tr class="gradeC">
                        <td style="text-align: center;"><?php echo $sl; ?></td>
                        <!-- <td><?php echo $info->St_invoice_date; ?></td> -->
                        <td><?php echo $info->Invoice_type_Name; ?></td>
                        <!-- <td></td> -->
                        <td><?php echo $info->Add_fee_Name; ?></td>
                        <td></td>
                        
                        <td style="text-align: right;"><?php echo number_format($info->Invoice_tdetails_Amount, 2); ?></td>
                    </tr>
                <?php $sl++;}} ?>
                        <?php 
                            if(!empty($info->account_trn_payment_amount)){
                                $total_amount = $info->account_trn_payment_amount;
                            }else{
                                $total_amount = 0.00;
                            }
                         ?>
                      <?php //$total_amount = $info->account_trn_payment_amount;?>
                      <?php $total_amount1 = $info->total_amount;?>
      
                <?php }?>
                </tbody>
 
         
            <tfoot class="tfheight">
                <tr>
                    <th colspan="3" style="text-align: right;">SUB TOTAL =</th>
                    <th colspan="1" style="text-align: right;"><?php echo number_format($total_amount, 2); ?></th>
                    <th colspan="1" style="text-align: right;"><?php echo number_format($total_amount1, 2); ?></th>
                </tr>
            </tfoot>
           
            </table>

           <p class="text-taka"><strong>AMOUNT IN WORD: </strong>
                <?php
                $a=$this->load->library('numbertowords');
                $number=$total_amount;
                echo $this->numbertowords->convert_number($number) . " Taka Only.";
            ?>
            </p>
            <table class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 10px; width: 70%;">
                <thead class="theight">
                    <tr>
                        <th style="width: 7%; text-align: center;">SL#</th>
                        <th style="width: 15%; text-align: center;">TYPE</th>
                        <th style="width: 40%; text-align: center;">NUMBER</th>
                        <th style="width: 15%; text-align: center;">DATE</th>
                        <th style="width: 23%; text-align: center;">AMOUNT</th>
                    </tr>
                </thead>
              
                <tbody class="theight">
            </tbody>
            </table>
            
             <table class="table table-striped table-hover dataTables-example" style="margin-top:50px;">
                <thead class="signature">
                    <tr>
                        <td style="text-decoration: overline;"><strong>PREPARED BY</strong></td>
                        <td style="text-decoration: overline; text-align: center;"><strong>CHECKED BY</strong></td>
                        <td style="text-decoration: overline; text-align: right;"><strong>APPROVED BY</strong></td>
                        <td style="text-decoration: overline; text-align: right;"><strong>RECEIVED BY</strong></td>
                        <td style="text-decoration: overline; text-align: right;"><strong>POSTED BY</strong></td>
                    </tr>
                </thead>
            </table>
            <table class="table table-striped table-hover dataTables-example" >
                <thead>
                    <tr>
                        <td style="font-size:8px;">&copy; 2018 <a target="blank" href="http://www.cyberdynetechnologyltd.com">Cyberdyne Technology Ltd. | Contact: 01715-515755 </a></td>
                    </tr>
                </thead>
            </table>


            </div>
        </div>
    </div>
  </div>

</div>


</body>
</html>