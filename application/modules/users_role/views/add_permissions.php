     <?php $this->load->view('dashboard/common/header');?>

     <!-- Data Tables -->
    <link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

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


<!---BacktrackPortion Start-->   
    <?php function getchilddd($get_page_list, $parentId, $title, $dropdownClass){ ?>
        <ul class="<?php echo $dropdownClass; ?>">
        <?php foreach($get_page_list    as $key=>$info){
            if(($info->parent_id == $parentId)){
                ?>

                <?php
                if($info->is_group == 1){  ?>
                      
                        <li class="list-group-item">
                          <span style='font-size: 14px; font-weight: bold; padding-left: 10px;'> <?php echo $info->title;?></span>

                          <?php
                            
                            getchilddd($get_page_list, $info->id, $info->title, $dropdownClass);
                          ?>
                          </li> 
                    <?php  
                }
                else{?>
                    
                    <li class="list-group-item">
                     <input class="checkbox" id="pageID_<?php echo $info->id;?>" type='checkbox' name='actions_id[]' value='<?php echo $info->id;?>'><span > <?php echo $info->title;?></span>

                    </li>
                <?php
                }
            }
         } //foreach end
        ?>
        </ul>
    <?php }?>
<!--BacktrackPortion End-->
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
                                                <div class="ibox-title" style="background:#1969ca">
                                                <h5 style="color:#D7E1ED"><i class='fa fa-bell'></i> Permissions</h5> 
                                                    <div class="ibox-tools ">
                                                        <a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>users_role/users/add_user"><i class='fa fa-list'></i> Permissions of Users</a>
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
                                                          
                                                      }elseif($this->session->has_userdata('error_msg') || $this->session->has_userdata('success_msg')){
                                                ?> 
                                                        <?php if (!empty($this->session->has_userdata('error_msg'))) {?>
                                                        <div class="alert alert-danger text-center">
                                                          <strong><?php echo $this->session->error_msg; ?></strong> 
                                                        </div>
                                                        <?php } ?>
                                                        <?php if (!empty($this->session->has_userdata('success_msg'))) {?>
                                                        <div class="alert alert-success text-center">
                                                          <strong><?php echo $this->session->success_msg;?></strong>
                                                        </div>
                                                         <?php } ?>
                                                <?php 
                                                        $this->session->unset_userdata('error_msg');
                                                      }
                                                ?>
                                                <div class="ibox-content" style="padding: 0px;">
                                                    <div class="panel-body">
                                                        <div class="tab-content">
                                                            <div id="tab-1" class="tab-pane active">
                                                                <!-- Panel -->
                                                                <section class="bg-white scrollable wrapper" >
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-body">
                                                                            <form action="<?php echo base_url();?>users_role/users/action_permissions" role="form" class="" id="" method="post" accept-charset="utf-8">             
                                                                            <div class="form-group col-md-6">
                                                                            <label>Role:</label>
                                                                            <select name="role_id" class="form-control" required="required" onchange='select_permission_pages(this.value);'>
                                                                                <option value="">Select Role</option>
                                                                                <?php foreach ($role_finding as $key => $role): ?>
                                                                                    <option value="<?php echo $role['id']; ?>"><?php echo $role['role_name']; ?></option>
                                                                                <?php endforeach ?>
                                                                            </select>
                                                                            </div>              
                                                                            <div class="form-group col-md-12">
                                                                              <strong><input type='checkbox' id='select_all'> Select all</strong>
                                                                              <!-- <hr/> -->
                                                                              <ul class="list-group">
                                                                                <?php 
                                                                                     foreach($get_page_list as $key=>$info){  
                                                                                     //  if($info->process_status == 0){
                                                                                         if($info->is_group == 1 && $info->parent_id == 0) {
                                                                                           ?>
                                                                                           <li class="list-group-item">
                                                                                            <span style='font-size: 14px; font-weight: bold; padding-left: 10px;'> <?php echo $info->title;?></span>

                                                                                           <?php
                                                                                             // $info->process_status = 1;
                                                                                             $dropdownClass = "list-group";
                                                                                             getchilddd($get_page_list  , $info->id, $info->title, $dropdownClass);
                                                                                           ?>
                                                                                           </li>
                                                                                           <?php
                                                                                         } elseif($info->is_group == 0 && $info->parent_id == 0) {
                                                                                           ?>
                                                                                            <li class="list-group-item">
                                                                                              <input class="checkbox" id="pageID_<?php echo $info->id;?>" type='checkbox' name='actions_id[]' value='<?php echo $info->id;?>'><span style=''> <?php echo $info->title;?></span>
                                                                                            </li>
                                                                                           <?php 
                                                                                         } 
                                                                                      // } 
                                                                                     } 
                                                                                   ?>    

                                                                              </ul>
                                                                            <input type="reset" name="reset" class="btn btn-info" value="Reset">
                                                                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                                                        </div>
                                                                    </form>     
                                                                </div>
                                                            </div>
                                                        </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                    
                                </div>  
                        </div>
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
    <!-- // <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->

    <!-- Flot -->
    <script type="text/javascript">
    $(document).ready(function(){
        $('#select_all').on('click',function(){
            if(this.checked){
                $('.checkbox').each(function(){
                    this.checked = true;
                });
            }else{
                 $('.checkbox').each(function(){
                    this.checked = false;
                });
            }
        });
        
        $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#select_all').prop('checked',true);
            }else{
                $('#select_all').prop('checked',false);
            }
        });
    });
    </script>

    <script>
        //javaScriptForTransactablevar non_ptnID;   var non_GroupID;
        $(document).on("click", ".open-deleteModal", function () {
            var userid = $(this).attr('data-userid');
            var newsTitle = $(this).attr('data-title');
            // alert(newsTitle);
            $("#UserName").html(newsTitle);
            $("#deleteUserID").val(userid);
                   
        });
    </script>

    <script type="text/javascript">
      
      function select_permission_pages(roleid){
        //alert(roleid);
        $.getJSON("<?php echo base_url();?>users_role/users/get_permission_page_list?1=1&roleid="+roleid, function(data) {
          //alert(data.total);
          //alert(data.page_array[1];
            //console.log(data);
          for (i = 1; i <= data.total; i++) { 
            document.getElementById("pageID_"+data.page_array[i]).checked = false;
            //alert(data.page_array[i]
          }
          for (i = 1; i <= data.selected_total; i++) { 
            //alert(data.page_array[i]);
            document.getElementById("pageID_"+data.selected_page_array[i]).checked = true;
          }
        });
      }
    </script>

    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModallabel"><i style='color:#F4A700' class="fa fa-exclamation-triangle" aria-hidden="true"></i>
 Delete This User!</h4>
                    
                </div><!-- modal header -->

                <form action="<?php echo base_url();?>users_role/users/user_delete" method="post" enctype="multipart/form-data">

                    <div class="modal-body">
                        <div id="media-upload" class="panel blank-panel">
                            <input type="hidden" id="deleteUserID" name="deleteUserID" value="">

                            <div class="panel-heading">
                                <div class="panel-options">
                                    <h3>Are your sure to delete " <span style="font-size: 12px;" id="UserName"></span> " user?</h3>
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
</body>
</html>
