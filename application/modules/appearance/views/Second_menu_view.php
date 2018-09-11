<!--GlobalVariable Start-//`HeadID``HeadName``PtnID``PtnGroupCode``GroupID``CompanyID``IsTransactable`-->
<?php ?>
<!--GlobalVariable Start-->
<!---BacktrackPortion Start-->   
    <?php function getchild($itemQueryResult, $parentId){ ?>
        <ul id="uls_<?php echo $parentId;?>">
        <?php foreach($itemQueryResult as $key=>$info){
            // print_r($info);
            // die();
            
            if(($info->PtnID == $parentId)  && ($info->process_status == 0)){
                $info->process_status = 1; //processed
                if($info->IsTransactable == 0){ ?>
                    <li>
                        <label id="<?php echo $info->HeadID;?>" class="node" onmousedown="mouseDown(<?php echo $info->HeadID;?>)"><?php echo $info->HeadName;?></label>
                        <?php getchild($itemQueryResult, $info->HeadID);?>  
                    </li><?php  
                }
                else{?>
                    <li id="<?php echo $info->HeadID;?>" onmousedown="mouseDownT(<?php echo $info->HeadID;?>,<?php echo '\''.$info->PtnID.'\'';?>)"><?php echo $info->HeadName;?></li>
                <?php
                }
            }
         } //foreach end
        ?>
        </ul>
    <?php }?>
<!--BacktrackPortion End-->
<!DOCTYPE html>
<html>

<head>

    
    <?php $this->load->view('dashboard/common/header');?>


<style type="text/css">
#treePane ul {
 list-style: none;
}

#treePane .node {
 /*color: red;*/
 color: #2d3192;
 background-image: url("<?php echo base_url();?>assets/img/plus.gif");
 background-position: left center;
 background-repeat: no-repeat;
 padding-left: 12px;
 cursor: pointer;
}

#treePane .open {
 background-image: url("<?php echo base_url();?>assets/img/minus.gif");
}

#treePane ul li {
 background-image: url("<?php echo base_url();?>assets/img/treeview-default-line.gif");
 background-repeat: no-repeat;
 padding-left: 20px;
 margin-left: -42px;
}

.custom-menu {
    display: none;
    z-index: 1000;
    position: absolute;
    overflow: hidden;
    border: 1px solid #CCC;
    white-space: nowrap;
    font-family: sans-serif;
    background: #FFF;
    color: #333;
    border-radius: 5px;
    padding: 0;
}
.custom-menuT {
    display: none;
    z-index: 1000;
    position: absolute;
    overflow: hidden;
    border: 1px solid #CCC;
    white-space: nowrap;
    font-family: sans-serif;
    background: #FFF;
    color: #333;
    border-radius: 5px;
    padding: 0;
}

/* Each of the items in the list */
.custom-menu li {
    padding: 8px 12px;
    cursor: pointer;
    list-style-type: none;
}
.custom-menuT li {
    padding: 8px 12px;
    cursor: pointer;
    list-style-type: none;
}

.custom-menu li:hover {
    background-color: #DEF;
}
.custom-menuT li:hover {
    background-color: #DEF;
}

/* TransactableCss */
.customT-menu {
    display: none;
    z-index: 1000;
    position: absolute;
    overflow: hidden;
    border: 1px solid #CCC;
    white-space: nowrap;
    font-family: sans-serif;
    background: #FFF;
    color: #333;
    border-radius: 5px;
    padding: 0;
}

/* Each of the items in the list */
.customT-menu li {
    padding: 8px 53px 8px 17px;
    cursor: pointer;
    list-style-type: none;
}

.customT-menu li:hover {
    background-color: #DEF;
}
.modal-dialog {
    width: 70%;
    margin: 60px auto;
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
            <form action="<?php echo base_url();?>news/news/news_upload" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrapper wrapper-content">
                            <div class="row">
                                <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-title">
                                            <h5>Second Menu </h5> 
                                            <div class="ibox-tools">
                                                <a class="collapse-link">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ibox-content">
                                            <div id="treePane">
                                                <ul id="uls_0">
                                                    <li>
                                                        <?php foreach($itemQueryResult as $key=>$info){?>
                                                            <?php if($info->process_status == 0){ ?>
                                                                <label id="<?php echo $info->HeadID;?>" onmousedown="mouseDown(<?php echo $info->HeadID;?>)" class="node"><?php echo $info->HeadName;?></label>
                                                                <?php $info->process_status = 1;
                                                                getchild($itemQueryResult, $info->HeadID);
                                                            }
                                                        }?>
                                                    </li>
                                                </ul>
                                             </div> 
                                        </div>
                                    </div>
                                </div>                          
                            </div>
                        </div>
                    </div>
                </div> 
            </form>
            </section>               
        </div>        
    </div>

    <!--ContextMenuOptions(Non Translatable) Start-->
         
        <!---ContextMenuOptions(Non Translatable) End-->
        <!--ContextMenuOptions(Non Translatable) Start-->
         <ul class='custom-menuT'>
          <li data-toggle="modal"  class="open-grpCategoryModal" href="#grpCategoryModal"  >New Group Menu</li>
          <li data-toggle="modal"  class="open-categoryModal" href="#categoryModal"  >New Menu</li>
          <li data-toggle="modal"  class="open-editgrpCategoryModal" href="#editgrpCategoryModal"  >Edit Group Menu</li>
          <li data-toggle="modal"  class="open-sortgrpCategory" href="#sortgrpCategory"  >Sort Group Menu</li>
          <!-- <li data-toggle="modal"  class="open-deleteCategory" href="#deleteCategory"  >Delete Group Menu</li> -->
        </ul>
        <!---ContextMenuOptions(Non Translatable) End-->
        
        <!--ContextMenuOptions(Translatable) Start-->
         <ul class='customT-menu'>
          <li data-toggle="modal"  class="open-edit_categoryModal" href="#edit_categoryModal" >Edit Menu</li>
          <li data-toggle="modal"  class="open-sortgrpCategory" href="#sortgrpCategory" >Sort Menu</li>
        </ul>
    <!---ContextMenuOptions(Translatable) End-->




    <?php $this->load->view('dashboard/common/footer_js');?>


     <script type="text/javascript">
 
 (function() {
  var treePaneNodes = $('#treePane').find(".node");
  treePaneNodes.next("ul").hide();
  $('#treePane').find(".open").next("ul").show();
  treePaneNodes.on('click', function() {
   $(this).next("ul").first().toggle();
   $(this).toggleClass("open");
  })
 })();
 </script>
 
 <input type="hidden" id="HeadBranchID" value="1"/>
 <script>
    // JAVASCRIPT (jQuery)
    //GlobalVariableDeclaration 
    //DataFromNonTransactable
    var non_ptnID;
    var non_Transactable_HeadName;
    var HeadBranchID = $('#HeadBranchID').val();
    //DataFromTransactable//`HeadID``HeadName``PtnID``PtnGroupCode``GroupID``CompanyID``IsTransactable`
    var nontra_HeadID;
    var tra_HeadID;
// Trigger action when the contexmenu is about to be shown
    

function mouseDown(PtnID) {
    //non_ptnID = "";
    non_ptnID = PtnID;
    nontra_HeadID = PtnID;
    non_Transactable_HeadName = "";
   $('#'+PtnID).bind("contextmenu", function (event) {
    
        // Avoid the real one
        event.preventDefault();
        
        // Show contextmenu
        if(HeadBranchID==-1){
            $(".custom-menu").finish().toggle(100).
            
            // In the right position (the mouse)
            css({
                top: event.pageY-25 + "px",
                left: event.pageX+15 + "px"
            });
        }else{
            $(".custom-menuT").finish().toggle(100).
            
            // In the right position (the mouse)
            css({
                top: event.pageY-5 + "px",
                left: event.pageX+15 + "px"
            });         
        }        
    });    
}


// If the document is clicked somewhere
$(document).bind("mousedown", function (e) {
    
    // If the clicked element is not the menu
    if (!$(e.target).parents(".custom-menu").length > 0) {
        
        // Hide it
        $(".custom-menu").hide(100);
    }
    //$(document).click(function(){$(".custom-menu").hide(100);});
});

$(document).bind("mousedown", function (e) {
    
    // If the clicked element is not the menu
    if (!$(e.target).parents(".custom-menuT").length > 0) {
        
        // Hide it
        $(".custom-menuT").hide(100);
    }
    //$(document).click(function(){$(".customT-menu").hide(100);});
});


// If the menu element is clicked
$(".custom-menu li").click(function(){
    
    // This is the triggered action name
    switch($(this).attr("data-action")) {
        
        // A case for each action. Your actions here
        case "first": alert(id); break;
        case "second": alert("second"); break;
        case "third": alert("third"); break;
    }
  
    // Hide it AFTER the action was triggered
    $(".custom-menu").hide(100);
  });
  
  
//Transanctable
// Trigger action when the contexmenu is about to be shown
function mouseDownT(HeadID, PtnID) {
    //alert(value);
    tra_HeadID= HeadID;
    non_ptnID = PtnID;
   $('#'+HeadID).bind("contextmenu", function (event) {
    
        // Avoid the real one
        event.preventDefault();
        
        // Show contextmenu
        $(".customT-menu").finish().toggle(100).
        
        // In the right position (the mouse)
        css({
            top: event.pageY-5 + "px",
            left: event.pageX+15 + "px"
        });
    });
   //var editBank = $("#uls_33").val();
   
}

// If the document is clicked somewhere
$(document).bind("mousedown", function (e) {
    
    // If the clicked element is not the menu
    if (!$(e.target).parents(".customT-menu").length > 0) {
        
        // Hide it
        $(".customT-menu").hide(100);
    }
    //$(document).click(function(){$(".customT-menu").hide(100);});
});


// If the menu element is clicked
$(".customT-menu li").click(function(){
    
    // This is the triggered action name
    switch($(this).attr("data-action")) {
        
        // A case for each action. Your actions here
        case "first": alert(id); break;
        case "second": alert("second"); break;
        case "third": alert("third"); break;
    }
  
    // Hide it AFTER the action was triggered
    $(".customT-menu").hide(100);
  });
    
</script>


<!--###################### Group Menu Modal Start #################-->
        <script>
            $(document).on("click", ".open-grpCategoryModal", function () {
                document.getElementById("grpCategoryForm").reset();
                $(".custom-menuT").hide(100);
                
                 $(".ibox-content #new_non_PtnID").val( non_ptnID );
            });
        </script>
            <div class="modal inmodal" id="grpCategoryModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeIn">
                        <div class="ibox-title">
                            <h5>New Group Menu Form</h5>
                        </div>
                <!--<form class="form-horizontal" action="<?php //echo base_url(); ?>admin/ChartOfItems/itemInsert" role="form" method="post" enctype="multipart/form-data">-->
                    <form class="form-horizontal form_class" id="grpCategoryForm" role="form" method="post" enctype="multipart/form-data">
                        <div class="ibox-content">
                            <!--<p>Sign in today for more expirience.</p>-->
                            <div class="form-group"><label class="col-lg-4 control-label">Group Menu Name</label>

                                <div class="col-lg-8"><input type="text" name="new_non_HeadName" id="new_non_HeadName"  placeholder="Please Input Group Menu Name" class="form-control" required> 
                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-4 control-label">Group Menu Slug</label>

                                <div class="col-lg-8"><input type="text" name="grp_menu_slug" id="grp_menu_slug"  placeholder="Slug (Please do not use spaces in slug)" class="form-control" required> 
                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-4 control-label" >Parent ID</label>

                                <div class="col-lg-8"><input type="text" name="new_non_PtnID" id="new_non_PtnID"  placeholder="" class="form-control" readonly> 
                                </div>
                            </div>
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                            <input type="submit" name="submit" class="btn btn-primary" id="submitnote" value="Submit" />
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <script>
            jQuery(document).ready(function ($) {
                $("#grpCategoryForm").submit(function () {
                    $.ajax({
                        type: "POST",
                        //url: "notes_functions.php",
                        url: "<?php echo base_url();?>appearance/menus/group_category_insert",
                        data: $('form.form_class').serialize(),
                        success: function (insert_id) {
                            $("#grpCategoryModal").modal('hide');
                            var PtnID = $('#new_non_PtnID').val();
                            var nodeName = $('#new_non_HeadName').val();
                            var transactablezType = 0; //this is only for Non_Transactable Items
                            var ul = document.getElementById("uls_"+PtnID);//getting ul's id
                            
                            if(transactablezType == 1){
                                var li = document.createElement("li");
                                    li.setAttribute("id",insert_id);
                                    var functoinStr = "mouseDownT("+ insert_id +")";
                                    li.setAttribute("onmousedown", functoinStr);
                                    li.appendChild(document.createTextNode(nodeName));
                                ul.appendChild(li);
                            }else{
                                var li = document.createElement("li");
                                
                                var itemLabel = document.createElement("Label");
                                    //itemLabel.setAttribute("for", nodeName);
                                    itemLabel.innerHTML = nodeName;
                                    itemLabel.setAttribute("class","node");
                                    itemLabel.setAttribute("id",insert_id);
                                    var functoinStr = "mouseDown("+ insert_id +")";
                                    itemLabel.setAttribute("onmousedown", functoinStr);
                                li.appendChild(itemLabel);
                                var new_ul = document.createElement("ul");
                                    new_ul.setAttribute("id","uls_"+insert_id);
                                li.appendChild(new_ul);
                                
                                ul.appendChild(li);
                            }
                            
                        },
                        error: function () {
                            alert("failure");
                        }
                    });
                    return false;
                });
            });
            </script>
<!--###################### Group Menu Modal End #################-->

<!--###################### Edit Group Menu Modal Start #################-->
        <script>
            $(document).on("click", ".open-editgrpCategoryModal", function () {
                document.getElementById("editgrpCategoryForm").reset();
                $(".custom-menuT").hide(100);

                //alert(nontra_HeadID);

                $.getJSON("<?php echo base_url();?>appearance/menus/group_category_data?1=1&HeadID="+nontra_HeadID, function(data) {
                    //alert(data.HeadName);
                   
                        $(".ibox-content #edit_non_HeadID").val( data.HeadID );
                        $(".ibox-content #edit_non_HeadName").val( data.HeadName );
                        $(".ibox-content #edit_grp_menu_slug").val( data.MenuSlug );
                        //$(".ibox-content #edit_purpose_head").val( data.PurposeHeadName );
                        //document.getElementById('edit_purpose_head').value = data.PurposeHeadName;
                        //alert(data.OpDebitAmount);
                    
                });
                
                 $(".ibox-content #new_non_PtnID").val( non_ptnID );
            });
        </script>
            <div class="modal inmodal" id="editgrpCategoryModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeIn">
                        <div class="ibox-title">
                            <h5>Edit Group Menu Form</h5>
                        </div>
                <!--<form class="form-horizontal" action="<?php //echo base_url(); ?>admin/ChartOfItems/itemInsert" role="form" method="post" enctype="multipart/form-data">-->
                    <form class="form-horizontal form_class" id="editgrpCategoryForm" role="form" method="post" enctype="multipart/form-data">
                        <div class="ibox-content">
                            <!--<p>Sign in today for more expirience.</p>-->
                            <div class="form-group"><label class="col-lg-4 control-label">Group Menu Name</label>

                                <input type="hidden" id="edit_non_HeadID" name="edit_non_HeadID" value="" />

                                <div class="col-lg-8"><input type="text" name="edit_non_HeadName" id="edit_non_HeadName"  placeholder="Please Input Group Menu Name" class="form-control" required> 
                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-4 control-label">Group Menu Slug</label>

                                <div class="col-lg-8"><input type="text" name="edit_grp_menu_slug" id="edit_grp_menu_slug"  placeholder="Slug (Please do not use spaces in slug)" class="form-control" required> 
                                </div>
                            </div>
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                            <input type="submit" name="submit" class="btn btn-primary" id="grpupdatenote" value="Submit" />
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <script>
            jQuery(document).ready(function ($) {
                $("#editgrpCategoryForm").submit(function () {
                    $.ajax({
                        type: "POST",
                        //url: "notes_functions.php",
                        url: "<?php echo base_url();?>appearance/menus/group_category_update",
                        data: $('form.form_class').serialize(),
                        success: function () {
                            $("#editgrpCategoryModal").modal('hide');
                            var PtnID = $('#edit_non_HeadID').val();
                            var nodeName = $('#edit_non_HeadName').val();
                            
                            document.getElementById(PtnID).innerHTML = nodeName;
                            
                        },
                        error: function () {
                            alert("failure");
                        }
                    });
                    return false;
                });
            });
            </script>

            <script type="text/javascript">

                $(document).ready(function() {
                    $("#edit_grp_menu_slug").on('change keydown paste input', function(){
                        //var getid = $(".menu_slug").attr('id');
                        var menu_slug = $('#edit_grp_menu_slug').val();

                        var replace_menu_slug1  = menu_slug.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '');
                        var replace_menu_slug  = replace_menu_slug1.replace(/অ/g, "");
                        var Slug  = replace_menu_slug.replace(/ /g, "-");
                        $('#edit_grp_menu_slug').val(Slug);

                        //alert(menu_slug);

                        
                    });

                    $("#grp_menu_slug").on('change keydown paste input', function(){
                        //var getid = $(".menu_slug").attr('id');
                        var menu_slug = $('#grp_menu_slug').val();

                        var replace_menu_slug1  = menu_slug.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '');
                        var replace_menu_slug  = replace_menu_slug1.replace(/অ/g, "");
                        var Slug  = replace_menu_slug.replace(/ /g, "-");
                        $('#grp_menu_slug').val(Slug);

                        //alert(menu_slug);

                        
                    });
                });
            </script>
<!--###################### Edit Group Category Modal End #################-->

<!--###################### Sort Group Category Modal Start #################-->
        <script>
            $(document).on("click", ".open-sortgrpCategory", function () {
                var traNonTraHeadID = "";
                if(tra_HeadID) {
                    traNonTraHeadID = tra_HeadID;
                } else {
                    traNonTraHeadID = nontra_HeadID;  
                    if(traNonTraHeadID == 1) {
                        alert("You Cant sort First Group");
                        $("#sortgrpCategory").modal('hide');
                    }
                }
                
                     document.getElementById("sortgrpCategoryForm").reset();
                    $(".custom-menuT").hide(100);

                    //alert(nontra_HeadID);

                    $.getJSON("<?php echo base_url();?>appearance/menus/group_category_data?1=1&HeadID="+traNonTraHeadID, function(data) {
                        //alert(data.HeadName);
                       
                            $(".ibox-content #current_HeadID").val( data.HeadID );
                            $(".ibox-content #parent_non_HeadName").val( data.HeadName );
                            //$(".ibox-content #edit_purpose_head").val( data.PurposeHeadName );
                            //document.getElementById('edit_purpose_head').value = data.PurposeHeadName;
                            //alert(data.OpDebitAmount);

                        
                    });
                    
                     $(".ibox-content #new_non_PtnID").val( non_ptnID );
                    
                   
                });
        </script>

        <!--GlobalVariable Start-//`HeadID``HeadName``PtnID``PtnGroupCode``GroupID``CompanyID``IsTransactable`-->
    <?php ?>
    <!--GlobalVariable Start-->
    <!---BacktrackPortion Start-->   
    <?php function getchildaa($itemQueryResult, $parentId){ ?>
        <?php foreach($itemQueryResult as $key=>$infoa){
            if(($infoa->PtnID == $parentId)  && ($infoa->process_statusaa == 0)){
                $infoa->process_statusaa = 1; //processed
                if($infoa->IsTransactable == 0){ 

                    $prefixDesign = "----";
                    $prefix = "";
                    $ptnGrpLength = strlen($infoa->PtnGroupCode);
                    for($i = 1; $i <= $ptnGrpLength; $i++) {
                        $prefix = $prefix . $prefixDesign;
                    }
                    ?>
                        <option value="<?php echo $infoa->HeadID; ?>"><?php  echo $prefix . $infoa->HeadName; ?></option>
                        <?php getchildaa($itemQueryResult, $infoa->HeadID);?>  
                    <?php  
                }
            }
        } //foreach end
        ?>
    <?php }?>


    <!--BacktrackPortion End-->
            <div class="modal inmodal" id="sortgrpCategory" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeIn">
                        <div class="ibox-title">
                            <h5>Sort Group Meunu</h5>
                        </div>
                <!--<form class="form-horizontal" action="<?php //echo base_url(); ?>admin/ChartOfItems/itemInsert" role="form" method="post" enctype="multipart/form-data">-->
                    <form class="form-horizontal form_class" id="sortgrpCategoryForm" action="<?php echo base_url();?>appearance/menus/sort_group_category" role="form" method="post" enctype="multipart/form-data">
                        <div class="ibox-content">
                            <!--<p>Sign in today for more expirience.</p>-->
                            <div class="form-group"><label class="col-lg-4 control-label">Group Meunu Name</label>

                                <input type="hidden" id="current_HeadID" name="current_HeadID" value="" />

                                <div class="col-lg-8"><input type="text" name="parent_non_HeadName" id="parent_non_HeadName"  placeholder="Please Input Group Meunu Name" class="form-control" required readonly=""> 
                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-4 control-label">destination Group Meunu Name</label>
                                <div class="col-lg-8">
                                    <select id="destination_head_id" name="destination_head_id" class="form-control" required="required">
                                        <option value="">--Select destination Name--</option>
                                        <?php  foreach($itemQueryResult as $key=>$infoa){?>


                                            <?php if($infoa->process_statusaa == 0){ ?>
                                            <option value="<?php echo $infoa->HeadID; ?>"><?php echo $infoa->HeadName; ?></option>
                                                <?php $infoa->process_statusaa = 1;
                                                    getchildaa($itemQueryResult, $infoa->HeadID);
                                            }
                                        }?>

                                        
                                    </select>
                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-4 control-label">Select Sorting Position</label>

                                <div class="col-lg-8">
                                    <label > <strong>Insert Top </strong></label>
                                    <input type="radio" name="insertPosition" id="insertPositionTop" value="1"  class="" required="required" > 
                                    <label style="padding-left: 10px;"> <strong>Insert Bottom </strong></label>
                                    <input type="radio" name="insertPosition" id="insertPositionBottom" value="2" class="" required="required"> 
                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-4 control-label">destination Group Meunu Name</label>
                                <div class="col-lg-8">
                                    <select id="destination_order_head_id" name="destination_order_head_id" class="form-control" required="required">
                                        <option value="">--Select destination Name--</option>
                                        
                                    </select>
                                </div>
                            </div>
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                            <input type="submit" name="submit" class="btn btn-primary" id="grpupdatenote" value="Submit" />
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <script>

                $(document).ready(function() {
                    var sl = 2;
                    
                    $('#destination_head_id').change(function () {
                        var sortHeadID = $('#destination_head_id').find( ":selected" ).val();
                        $("#destination_order_head_id").html("");

                        $.getJSON("<?php echo base_url();?>appearance/menus/get_sort_data?1=1&sortHeadID="+sortHeadID, function(data) {  
                            $("#destination_order_head_id").append('<option value="">--Select destination Name--</option>');
                            if(data.total > 0){                     
                                for (i = 1; i <= data.total; i++) {  
                                    
                                    $("#destination_order_head_id").append('<option value="'+data.sortCategoryList[i]["HeadID"]+'">'+data.sortCategoryList[i]["HeadName"]+'</option>');
                                }
                                $('#insertPositionTop').attr('required', 'required');
                                $('#insertPositionBottom').attr('required', 'required');
                                $('#destination_order_head_id').attr('required', 'required');
                                $("#insertPositionTop").removeAttr('disabled');
                                $("#insertPositionBottom").removeAttr('disabled');
                                $("#destination_order_head_id").removeAttr('disabled');
                            } else{
                                //alert("Your Destination Group Has No Order Data");
                                $('#insertPositionTop').removeAttr('required');
                                $('#insertPositionBottom').removeAttr('required');
                                $('#destination_order_head_id').removeAttr('required');
                                $("#insertPositionTop").attr('disabled', 'true');
                                $("#insertPositionBottom").attr('disabled', 'true');
                                $("#destination_order_head_id").attr('disabled', 'true');

                            }
                        });                        
                        
                    });
                });
            </script>


<!--###################### Sort Group Meunu Modal End #################-->

<!--###################### Meunu Modal Start #################-->
        <script>
            //javaScriptForTransactablevar non_ptnID;   var non_GroupID;
            $(document).on("click", ".open-categoryModal", function () {
                document.getElementById("categoryForm").reset();
                $(".custom-menuT").hide(100);

                $(".ibox-content #new_tra_PtnID").val( non_ptnID );
                $(".ibox-content #new_tra_HeadName").val( non_Transactable_HeadName );
                // $(".ibox-content #facebook_share").val( non_Transactable_HeadName );
                       
            });
        </script>
            <div class="modal inmodal" id="categoryModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeIn">
                        <div class="ibox-title">
                            <h5>New Menu Form</h5>
                        </div>
                <!--<form class="form-horizontal" action="<?php //echo base_url(); ?>admin/ChartOfItems/itemInsert" role="form" method="post" enctype="multipart/form-data">-->
                    <form class="form-horizontal form_class" id="categoryForm" role="form" method="post" enctype="multipart/form-data">
                        <div class="ibox-content">
                            <input type="hidden" name="BranchID" id="new_tra_HeadBranchID"> 
                            <!--<p>Sign in today for more expirience.</p>-->
                            <div class="form-group"><label class="col-lg-4 control-label">Meunu Name</label>

                                <div class="col-lg-6"><input type="text" name="new_tra_HeadName" id="new_tra_HeadName"  placeholder="Please input menu Name" class="form-control" required> 
                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-4 control-label">Meunu Slug</label>

                                <div class="col-lg-6"><input type="text" name="category_menu_slug" id="category_menu_slug"  placeholder="Slug (Please do not use spaces in slug)" class="form-control" required> 
                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-4 control-label">Type</label>
                                <div class="col-lg-6">
                                    <select class="selectpicker form-control" name="menu_type" id="menu_type" >
                                        <option value="">Select</option>
                                        <option value="1">Content</option>
                                        <option value="2">External Link</option>
                                        <option value="3">File</option>
                                    </select>
                                </div>
                            </div>
                            <?php 
                                // print_r($content_list);
                                // die();
                             ?>
                            <div class="form-group"><label class="col-lg-4 control-label">Content</label>
                                <div class="col-lg-6">
                                    <select class="selectpicker form-control" name="content" id="content" >
                                        <option value="">Select</option>
                                        <?php foreach ($content_list as $key => $value): ?>
                                            <option value="<?php echo $value->NewsID; ?>"><?php echo $value->NewsTitle; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-lg-4 control-label">Status</label>
                                <div class="col-lg-6">
                                    <select class="selectpicker form-control" name="status" id="status" >
                                        <option value="">Select</option>
                                        <option value="1" selected="selected">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="form-group"><label class="col-lg-4 control-label">Facbook Share</label>
                                <div class="col-lg-6">
                                    <select class="selectpicker form-control" name="facebook_share" id="facebook_share" >
                                        <option value="">Select</option>
                                        <option value="1">Yes</option>
                                        <option value="0" selected="selected">No</option>
                                    </select>
                                </div>
                            </div> -->
                           <!--  <div class="form-group"><label class="col-lg-4 control-label" >Parent ID</label>

                                <div class="col-lg-6"><input type="text" name="new_tra_PtnID" id="new_tra_PtnID"  placeholder="" class="form-control" readonly> 
                                </div>
                            </div> -->
                            
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                            <input type="submit" name="submit" class="btn btn-primary" id="submitnote" value="Submit" />
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <script>
            jQuery(document).ready(function ($) {
                $("#categoryForm").submit(function () {
                    $.ajax({
                        type: "POST",
                        //url: "notes_functions.php",
                        url: "<?php echo base_url();?>appearance/menus/category_insert",
                        data: $('form.form_class').serialize(),
                        success: function (insert_id) {
                            $("#categoryModal").modal('hide');
                            var PtnID = $('#new_tra_PtnID').val();
                            var nodeName = $('#new_tra_HeadName').val();
                            // var nodefacebook_share = $('#facebook_share').val();
                            var transactablezType = 1; //this is only for Transactable Items
                            var ul = document.getElementById("uls_"+PtnID);//getting ul's id
                            
                            if(transactablezType == 1){
                                var li = document.createElement("li");
                                    li.setAttribute("id",insert_id);
                                    var functoinStr = "mouseDownT("+ insert_id +")";
                                    li.setAttribute("onmousedown", functoinStr);
                                    li.appendChild(document.createTextNode(nodeName));
                                    // li.appendChild(document.createTextNode(nodefacebook_share));
                                ul.appendChild(li);
                            }else{
                                var li = document.createElement("li");
                                
                                var itemLabel = document.createElement("Label");
                                    //itemLabel.setAttribute("for", nodeName);
                                    itemLabel.innerHTML = nodeName;
                                    // itemLabel.innerHTML = nodefacebook_share;
                                    itemLabel.setAttribute("class","node");
                                    itemLabel.setAttribute("id",insert_id);
                                    var functoinStr = "mouseDown("+ insert_id +")";
                                    itemLabel.setAttribute("onmousedown", functoinStr);
                                li.appendChild(itemLabel);
                                var new_ul = document.createElement("ul");
                                    new_ul.setAttribute("id","uls_"+insert_id);
                                li.appendChild(new_ul);
                                
                                ul.appendChild(li);
                            }
                            
                        },
                        error: function () {
                            alert("failure");
                        }
                    });
                    return false;
                });
            });
            </script>
<!--###################### Menu Modal End #################-->

<!--###################### Edit Menu Modal Start #################-->
        <script>
            //javaScriptForTransactablevar non_ptnID;   var non_GroupID;
            
            $(document).on("click", ".open-edit_categoryModal", function () {
                document.getElementById("editCategoryForm").reset();
                $(".custom-menuT").hide(100);

                //alert(nontra_HeadID);

                $.getJSON("<?php echo base_url();?>appearance/menus/category_data?1=1&HeadID="+tra_HeadID, function(data) {
                    //alert(data.HeadName);
                   
                        $(".ibox-content #editTraHeadID").val( data.HeadID );
                        $(".ibox-content #edit_tra_HeadName").val( data.HeadName );
                        $(".ibox-content #edit_category_menu_slug").val( data.MenuSlug );
                        // $(".ibox-content #edit_facebook_share").val( data.FacebookShare );
                        //$(".ibox-content #edit_purpose_head").val( data.PurposeHeadName );
                        //document.getElementById('edit_purpose_head').value = data.PurposeHeadName;
                        //alert(data.OpDebitAmount);
                    
                });
            });
        </script>
            <div class="modal inmodal" id="edit_categoryModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeIn">
                        <div class="ibox-title">
                            <h5>New Menu Form</h5>
                        </div>
                <!--<form class="form-horizontal" action="<?php //echo base_url(); ?>admin/ChartOfItems/itemInsert" role="form" method="post" enctype="multipart/form-data">-->
                    <form class="form-horizontal form_class" id="editCategoryForm" role="form" method="post" enctype="multipart/form-data">
                        <div class="ibox-content">
                            <input type="hidden" name="editTraHeadID" id="editTraHeadID"> 
                            <!--<p>Sign in today for more expirience.</p>-->
                            <div class="form-group"><label class="col-lg-4 control-label">Menu Name</label>

                                <div class="col-lg-8"><input type="text" name="edit_tra_HeadName" id="edit_tra_HeadName"  placeholder="Please input menu Name" class="form-control" required> 
                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-4 control-label">Menu Slug</label>

                                <div class="col-lg-8"><input type="text" name="edit_category_menu_slug" id="edit_category_menu_slug"  placeholder="Slug (Please do not use spaces in slug)" class="form-control" required> 
                                </div>
                            </div>

                            <!-- <div class="form-group"><label class="col-lg-4 control-label">Facbook Share</label>
                                <div class="col-lg-8">
                                    <select class="selectpicker form-control" name="edit_facebook_share" id="edit_facebook_share">
                                        <option value="">Select</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                            <input type="submit" name="submit" class="btn btn-primary" id="submitnote" value="Submit" />
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <script>
            jQuery(document).ready(function ($) {
                $("#editCategoryForm").submit(function () {
                    $.ajax({
                        type: "POST",
                        //url: "notes_functions.php",
                        url: "<?php echo base_url();?>appearance/menus/category_edit",
                        data: $('form.form_class').serialize(),
                        success: function (insert_id) {
                            $("#edit_categoryModal").modal('hide');
                            var PtnID = $('#editTraHeadID').val();
                            var nodeName = $('#edit_tra_HeadName').val();
                            // var edit_facebook = $('#edit_facebook_share').val();
                            
                            document.getElementById(PtnID).innerHTML = nodeName;
                            // document.getElementById(PtnID).innerHTML = edit_facebook;
                            
                        },
                        error: function () {
                            alert("failure");
                        }
                    });
                    return false;
                });
            });
            </script>

            <script type="text/javascript">

                $(document).ready(function() {
                    $("#edit_category_menu_slug").on('change keydown paste input', function(){
                        //var getid = $(".menu_slug").attr('id');
                        var menu_slug = $('#edit_category_menu_slug').val();

                        var replace_menu_slug1 = menu_slug.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '');
                        var replace_menu_slug  = replace_menu_slug1.replace(/অ/g, "");
                        var Slug  = replace_menu_slug.replace(/ /g, "-");
                        $('#edit_category_menu_slug').val(Slug);

                        //alert(menu_slug);

                        
                    });

                    $("#category_menu_slug").on('change keydown paste input', function(){
                        //var getid = $(".menu_slug").attr('id');
                        var menu_slug = $('#category_menu_slug').val();

                        var replace_menu_slug1  = menu_slug.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '');
                        var replace_menu_slug  = replace_menu_slug1.replace(/অ/g, "");
                        var Slug  = replace_menu_slug.replace(/ /g, "-");
                        $('#category_menu_slug').val(Slug);

                        //alert(menu_slug);

                        
                    });
                });
            </script>
<!--###################### Edit Category Modal End #################-->

</body>
</html>