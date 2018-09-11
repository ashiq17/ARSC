
<?php $this->load->view('dashboard/common/header');?>

<!-- Data Tables -->
<link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
<script type="text/javascript">
    var BASE_URL = "<?php echo base_url();?>";
</script>

<style type="text/css">
.sd-button {
background-color: #333;
border: 1px solid #016938;
border-radius: 3px;
color: #fff;
font-size: 14px;
}

.sd-button:hover {
background-color: #fff;
color: #333;
}
</style>



</head>

<body>
<div id="wrapper">
<?php $this->load->view('dashboard/common/left_nav');?>

<div id="page-wrapper" class="my-bg dashbard-1">
<div class="row border-bottom">
<?php $this->load->view('dashboard/common/top_nav');?>
</div>


<section id="main-content">

<div class="row">
<div class="col-lg-12">

<div class="wrapper wrapper-content">

<div class="row">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div id="" class="panel blank-panel">

            <div class="ibox-title" style="background:#243948">
                <h5 style="color:#D7E1ED"><i class='fa fa-user'></i> SMS List</h5> 
                <div class="ibox-tools ">
                	<a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>sms/sms/sms_create"><i class='fa fa-user-plus'></i> Add SMS</a>
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            
            <?php
               if($this->session->has_userdata('message')){
            ?>          
                      <div class="alert alert-success text-center">
                        <strong><?php echo $this->session->message;?></strong>
                      </div>
                     
            <?php          
                      $this->session->unset_userdata('message');
                      
                  }elseif($this->session->has_userdata('error_msg')){
            ?> 

                    <div class="alert alert-danger text-center">
                      <strong><?php echo $this->session->error_msg;?></strong> 
                    </div>
            <?php 
                    $this->session->unset_userdata('error_msg');
                  }
            ?>

            <div class="ibox-content" style="padding: 0px;">

                <script>

function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>

                <div class="panel-body">

                    <div class="tab-content">

                        <div id="tab-1" class="tab-pane active">

                            <table class="table table-striped table-bordered table-hover" id="myTable" >
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>SMS Title</th>
                                        <!-- <th>Note Details</th> -->
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                </thead>


                                <tbody>
                                    <?php   
                                    	$i=1;
                                    	foreach ($sms_data as $key => $value) {
                                    ?>
                                    <tr class="gradeC">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $value['SMSTitle'] ?></td>
                                       <!--  <td><?php echo $value['SMSBody'] ?></td> -->
                                        <td>
                                            <?php if($value['SMS_Status']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                            Active</spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                            Inactive</spane>';} ?>
                                        </td>
                                        <td class='text-center'>
                                            <a class="btn btn-rounded btn-sm btn-icon btn-primary" data-toggle="modal" data-target="#view-modal" data-id="<?php echo  $value['SMSID'];?>" id="getUser" style="margin:5px;"><i class='glyphicon glyphicon-eye-open'></i> View</a> | 
                                        	<a class="btn btn-rounded btn-sm btn-icon btn-primary" href="<?php echo base_url(); ?>sms/sms/sms_edit/<?php echo $value['SMSID'] ?>"><i class='fa fa-edit'></i> Edit</a> | 
                                        	<a  data-toggle="modal" data-roleid="<?php echo $value['SMSID']; ?>" data-title="<?php echo $value['SMSTitle']; ?>" class="open-deleteModal btn btn-rounded btn-sm btn-icon btn-danger" href="#deleteModal"><i class='fa fa-times text-white text'></i> Delete</a>
                                        </td>
                                        <!-- <td style="text-align: center;"><a href="#">Edit</a></td>
                                        <td style="text-align: center;"><a data-toggle="modal" data-newsid="<?php //echo $newsId; ?>" data-title="<?php //echo $Newsinfo->NewsTitle; ?>" class="open-deleteModal" href="#deleteModal" >Delete</a></td> -->
                                    </tr>   
                                    <?php 
                                    	$i++; 
                                    	} 
                                    ?> 
                                </tbody>

                               
                            </table>
                            
                        </div>  

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>                    
</div>                               

</div>

 <script>
    $(document).ready(function(){
        
        $(document).on('click', '#getUser', function(e){
            
            e.preventDefault();
            
            var uid = $(this).data('id');   // it will get id of clicked row
            // alert(uid); 
            $('#dynamic-content').html(''); // leave it blank before ajax call
            $('#modal-loader').show();      // load ajax loader
            
            $.ajax({
                url: BASE_URL+'sms/sms/getSMSView', 
                // url: '$this->load->view(getuser)', 
                type: 'POST',
                data: 'SMSID='+uid,
                dataType: 'html'
            })
            .done(function(data){
                console.log(data);  
                $('#dynamic-content').html('');    
                $('#dynamic-content').html(data); // load response 
                $('#modal-loader').hide();        // hide ajax loader   
            })
            .fail(function(){
                $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                $('#modal-loader').hide();
            });
            
        });
        
    });

    </script>

</div>
</div> 
</section>               
</div>        
</div>

<!-- Mainly scripts -->


<?php $this->load->view('dashboard/common/footer_js');?>
<script src="<?php echo base_url();?>assets/dashboard/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/dashboard/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/dashboard/js/plugins/dataTables/dataTables.responsive.js"></script>
<script src="<?php echo base_url();?>assets/dashboard/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

<script>
$(document).ready(function() {
var oTable = $('#editable').dataTable();         
var oTable = $('#editable1').dataTable();         
var oTable = $('#editable2').dataTable();

});
</script>

<!-- Flot -->

<script>
//javaScriptForTransactablevar non_ptnID;   var non_GroupID;
$(document).on("click", ".open-deleteModal", function () {
var roleId = $(this).attr('data-roleid');
var roleTitle = $(this).attr('data-title');
//alert(newsTitle);
$("#roleName").html(roleTitle);
$("#deleteRoleID").val(roleId);

});
</script>

<div class="modal fade" id="deleteModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title" id="myModallabel"><i style='color:#F4A700' class="fa fa-exclamation-triangle" aria-hidden="true"></i> Delete This Role!</h4>

</div><!-- modal header -->

<form action="<?php echo base_url();?>sms/sms/delete_sms" method="post" enctype="multipart/form-data">

<div class="modal-body">
<div id="media-upload" class="panel blank-panel">
<input type="hidden" id="deleteRoleID" name="SMSID" value="">

<div class="panel-heading">
<div class="panel-options">

<h3>Are your sure to delete " <span style="font-size: 12px;" id="roleName"></span> " SMS ?</h3>
</div>
</div>                            

</div>
</div><!-- modal body -->

<div class="modal-footer">
<button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
<input type="submit" name="submit" class="btn btn-danger" id="submitimgdata" value="Yes" />
</div><!-- modal footer -->

</form>
</div><!-- modal content -->
</div><!-- modal dialog -->
</div><!-- modal -->
<!-- view modal start -->
<div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
             <div class="modal-dialog"> 
                 <div class="modal-content"> 
                
                     <div class="modal-header"> 
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                          <h4 class="modal-title text-center">
                             <i class="glyphicon glyphicon-eye-open"></i> SMS Details
                          </h4> 
                     </div> 
                     <div class="modal-body"> 
                     
                            <div id="modal-loader" style="display: none; text-align: center;">
                             <!-- <img src="ajax-loader.gif"> -->
                            </div>
                          
                         <!-- content will be load here -->                          
                         <div id="dynamic-content"></div>
                           
                      </div> 
                      <div class="modal-footer"> 
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                      </div> 
                      
               </div> 
            </div>
     </div>
     <!-- view modal end -->    

    



</body>
</html>



