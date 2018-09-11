<?php $this->load->view('dashboard/common/header'); ?>
<link href="<?php echo base_url(); ?>assets/dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
<style type="text/css">
    .sd-button {
        background-color: #333;
        border: 1px solid #016938;
        border-radius: 3px;
        color: #fff;
        font-size: 14px;
    }
    .wrapper-content {
        padding: 0px 0px 0px;
    }
    .panel-body {
        padding: 2px 15px 10px 15px;
    }
    .sd-button:hover {
        background-color: #fff;
        color: #333;
    }
    .table-condensed>thead>tr>th, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>tbody>tr>td, .table-condensed>tfoot>tr>td {
        /*padding: 5px; */
    }
    .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
        padding: 1px; 
        vertical-align: middle;
    }

</style>
</head>
<body>
    <div id="wrapper">
        <?php $this->load->view('dashboard/common/left_nav'); ?>
        <div id="page-wrapper" class="my-bg dashbard-1">
            <div class="row border-bottom">
                <?php $this->load->view('dashboard/common/top_nav'); ?>
            </div>
            <section id="main-content">

                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        if ($this->session->has_userdata('message')) {
                            ?>          
                            <div class="alert alert-success text-center successMessage">
                                <strong><?php echo $this->session->message; ?></strong>
                            </div>
                            <?php
                            $this->session->unset_userdata('message');
                        } elseif ($this->session->has_userdata('error_msg')) {
                            ?> 
                            <div class="alert alert-danger text-center successMessage">
                                <strong><?php echo $this->session->error_msg; ?></strong> 
                            </div>
                            <?php
                            $this->session->unset_userdata('error_msg');
                        }
                        ?>
                        <div class="wrapper wrapper-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ibox float-e-margins">
                                        <div id="" class="panel blank-panel">
                                            <div class="ibox-title" >
                                                <h5 style="color:#000;">  <a class="sd-button" style="padding: 0 10px 0 10px;" href="<?php echo base_url(); ?>guardian/guardian/add_guardian">Add New guardian</a>

                                                </h5> 
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </div>

                                                <label class="col-md-9 control-label">
                                                    <span class="badge badge-info" style="float: right;  font-size: 16px;">Total
                                                        Records: <?= $total_guardian ?></span>
                                                </label>
                                            </div>
                                            <div class="ibox-content" style="padding: 0px;">
                                                <div class="panel-body">
                                                    <div class="panel-options" style="padding-bottom: 10px;">
                                                        <ul class="nav nav-tabs">
                                                            <li class="active"><a id="allPosts" data-toggle="tab" href="#tab-1">  <strong>All guardian</strong> </a></li>
                                                            <li class=""><a id="active" data-toggle="tab" href="#tab-2"><strong>Active</strong></a></li>
                                                            <li class=""><a id="inactive" data-toggle="tab" href="#tab-3"><strong>Inactive</strong></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div id="tab-1" class="tab-pane active">
                                                            <table style="background: #000;" class="table table-striped table-bordered table-hover" id="editable" >
                                                                <thead style=" background: #1979CA; color: #000;">
                                                                    <tr>
                                                                        <th style="color:#000; text-align: center;" >SL</th>
                                                                        <th style="color:#000;text-align:center;" >Profile</th>
                                                                        <th style="color:#000;text-align:center;" >guardian Name</th> 
                                                                        <th style="color:#000;text-align:center;" >guardian ID</th>
                                                                        <th style="color:#000;text-align:center;" >Mobile No</th>
                                                                        <th style="color:#000;text-align:center;" >Email</th>
                                                                        <th style="color:#000;text-align:center;" >Status</th>
                                                                        <th style="color:#000;text-align:center;" >View</th>
                                                                        <th style="color:#000;text-align:center;" >Print</th>

                                                                        <th style="color:#000;text-align:center;" >Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody style="text-align: center !important;" >
                                                                    <?php
                                                                    $sl = 1;
                                                                    foreach ($all_guardian_find as $key => $value) {
                                                                        ?>
                                                                        <tr class="gradeC">
                                                                            <td style="text-align:center;" ><?php echo $sl; ?></td>
                                                                            <td> <img class="img-responsive" style="margin: auto;
                                                                                      vertical-align: middle;" alt="No Image Found" id="blah"  src="<?php echo base_url('/images/guardian/') . $value['Image']; ?>" width="25" height="25"/></td>

                                                                            <td  style="text-align:center; "><?php echo $value['Guardian_Name']; ?></td>
                                                                            <td  style="text-align:center; "><?php echo $value['Guardian_UNQ_ID']; ?></td>


                                                                            <td style="text-align:center;"><?php echo $value['Guardian_mobile']; ?></td>

                                                                            <td style="text-align:center;"  ><?php echo $value['Guardian_email']; ?></td>

                                                                            <td class="text-center"> <?php if ($value['Guardian_status'] == 1) {
                                                                        echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                    active</spane>';
                                                                    } else {
                                                                        echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                                    inactive</spane>';
                                                                    } ?>

                                                                            </td>
                                                                            <td style="vertical-align:middle;text-align:center;width: 9%;">
                                                                                <a  data-toggle="modal"
                                                                                    data-id="<?php echo $value['Guardian_ID']; ?>" 
                                                                                    data-name="<?php echo $value['Guardian_Name']; ?>" 
                                                                                    data-uniqueid="<?php echo $value['Guardian_UNQ_ID']; ?>"
                                                                                    data-nationalid="<?php echo $value['Guardian_NID']; ?>"
                                                                                    data-mobile="<?php echo $value['Guardian_mobile']; ?>"
                                                                                    data-gender="<?php
                                                                                    if ($value['Guardian_gender'] == '1') {
                                                                                        echo 'Male';
                                                                                    } elseif ($value['Guardian_gender'] == '2') {
                                                                                        echo 'Female';
                                                                                    }
                                                                                    ?>"
                                                                                    data-religion="<?php
                                                                                    if ($value['Guardian_religion'] == '1') {
                                                                                        echo 'MUSLIM';
                                                                                    } elseif ($value['Guardian_religion'] == '2') {
                                                                                        echo 'HINDUS';
                                                                                    }
                                                                                    ?>"
                                                                                    data-address="<?php echo $value['Guardian_address']; ?>"
                                                                                    data-email="<?php echo $value['Guardian_email']; ?>"
                                                                                    data-bloodgroup="<?php
                                                                                if ($value['Guardian_BloodGroup'] == 1) {
                                                                                    echo 'A +';
                                                                                }
                                                                                if ($value['Guardian_BloodGroup'] == 2) {
                                                                                    echo 'A -';
                                                                                }
                                                                                if ($value['Guardian_BloodGroup'] == 3) {
                                                                                    echo 'B +';
                                                                                }
                                                                                if ($value['Guardian_BloodGroup'] == 4) {
                                                                                    echo 'B -';
                                                                                }
                                                                                if ($value['Guardian_BloodGroup'] == 5) {
                                                                                    echo 'AB +';
                                                                                }
                                                                                if ($value['Guardian_BloodGroup'] == 6) {
                                                                                    echo 'AB -';
                                                                                }
                                                                                if ($value['Guardian_BloodGroup'] == 7) {
                                                                                    echo 'O +';
                                                                                }
                                                                                if ($value['Guardian_BloodGroup'] == 8) {
                                                                                    echo 'O -';
                                                                                }
                                                                                ?>"
                                                                                    data-status="<?php
                                                                                if ($value['Guardian_status'] == 1) {
                                                                                    echo 'Active';
                                                                                } elseif ($value['Guardian_status'] == 2) {
                                                                                    echo 'Inactive';
                                                                                }
                                                                                ?>"
                                                                                    data-image="<?php echo base_url('images/guardian/') . $value['Image']; ?>" class="open-memberView" href="#memberView">
                                                                                    <i class="fa fa-eye"></i>View
                                                                                </a>
                                                                            </td>
                                                                            <td style=" vertical-align: middle;text-align: center; width: 7%;"><a target="_blank" href="<?php echo base_url(); ?>Guardian/Guardian/print_guardian_single/<?php echo $value['Guardian_ID']; ?>">Print</a>
                                                                            </td> 
                                                                            <td  style="text-align: center;">
                                                                                <a href="<?php echo base_url(); ?>guardian/guardian/edit_guardian/<?php echo $value['Guardian_ID']; ?>">
                                                                                    <button class="btn btn-primary btn-xs">
                                                                                        <i class="fa fa-pencil"></i>
                                                                                    </button>
                                                                                </a>
                                                                                <a data-toggle="modal" data-professionid="<?php echo $value['Guardian_ID']; ?>" data-title="<?php echo $value['Guardian_Name']; ?>" class="open-deleteModal" href="#deleteModal" > 
                                                                                    <button class="btn btn-danger btn-xs">
                                                                                        <i class="fa fa-trash-o "></i>   
                                                                                    </button>
                                                                                </a>

                                                                            </td>
                                                                        </tr>
    <?php
    $sl++;
}
?>     
                                                                </tbody>
                                                                <tr>
                                                                    <th style="color:#000;" >SL</th>
                                                                    <th style="color:#000;text-align:center;" >Profile</th> 
                                                                    <th style="color:#000;text-align:center;" >guardian Name</th>  

                                                                    <th style="color:#000;text-align:center;" >guardian ID</th>

                                                                    <th style="color:#000;text-align:center;" >Mobile No</th>
                                                                    <th style="color:#000;text-align:center;" >Email</th>
                                                                    <th style="color:#000;text-align:center;" >Status</th>

                                                                    <th style="color:#000;text-align:center;" >Action</th>
                                                                </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>

                                                        <div id="tab-2" class="tab-pane ">
                                                            <table class="table table-striped table-bordered table-hover" id="editable1" >
                                                                <thead style=" background: #1979CA; color: #000;">
                                                                    <tr>
                                                                        <th style="color:#000; text-align: center;" >SL</th>
                                                                        <th style="color:#000;text-align:center;" >Profile</th>
                                                                        <th style="color:#000;text-align:center;" >guardian Name</th> 
                                                                        <th style="color:#000;text-align:center;" >guardian ID</th>
                                                                        <th style="color:#000;text-align:center;" >Mobile No</th>
                                                                        <th style="color:#000;text-align:center;" >Email</th>
                                                                        <th style="color:#000;text-align:center;" >Status</th>
                                                                        <th style="color:#000;text-align:center;" >View</th>
                                                                        <th style="color:#000;text-align:center;" >Print</th>

                                                                        <th style="color:#000;text-align:center;" >Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody style="text-align: center !important;" >
                                                                                <?php
                                                                                $sl = 1;
                                                                                foreach ($all_guardian_find as $key => $value) {
                                                                                    $active_guardian = strtolower(trim($value['Guardian_status']));
                                                                                    if ($active_guardian == '1') {
                                                                                        ?>

                                                                            <tr class="gradeC">
                                                                                <td style="text-align:center;" ><?php echo $sl; ?></td>
                                                                                <td> <img class="img-responsive" style="margin: auto;
                                                                                          vertical-align: middle;" alt="No Image Found" id="blah"  src="<?php echo base_url('/images/guardian/') . $value['Image']; ?>" width="25" height="25"/></td>

                                                                                <td  style="text-align:center; "><?php echo $value['Guardian_Name']; ?></td>
                                                                                <td  style="text-align:center; "><?php echo $value['Guardian_UNQ_ID']; ?></td>


                                                                                <td style="text-align:center;"><?php echo $value['Guardian_mobile']; ?></td>

                                                                                <td style="text-align:center;"  ><?php echo $value['Guardian_email']; ?></td>

                                                                                <td class="text-center"> <?php if ($value['Guardian_status'] == 1) {
                                                                                    echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                    active</spane>';
                                                                                } else {
                                                                                    echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                                    inactive</spane>';
                                                                                } ?>

                                                                                </td>
                                                                                <td style="vertical-align:middle;text-align:center;width: 9%;">
                                                                                    <a  data-toggle="modal"
                                                                                        data-id="<?php echo $value['Guardian_ID']; ?>" 
                                                                                        data-name="<?php echo $value['Guardian_Name']; ?>" 
                                                                                        data-uniqueid="<?php echo $value['Guardian_UNQ_ID']; ?>"
                                                                                        data-nationalid="<?php echo $value['Guardian_NID']; ?>"
                                                                                        data-mobile="<?php echo $value['Guardian_mobile']; ?>"
                                                                                        data-gender="<?php
                                                                                if ($value['Guardian_gender'] == '1') {
                                                                                    echo 'Male';
                                                                                } elseif ($value['Guardian_gender'] == '2') {
                                                                                    echo 'Female';
                                                                                }
                                                                                        ?>"
                                                                                        data-religion="<?php
                                                                    if ($value['Guardian_religion'] == '1') {
                                                                        echo 'MUSLIM';
                                                                    } elseif ($value['Guardian_religion'] == '2') {
                                                                        echo 'HINDUS';
                                                                    }
                                                                    ?>"
                                                                                        data-address="<?php echo $value['Guardian_address']; ?>"
                                                                                        data-email="<?php echo $value['Guardian_email']; ?>"
                                                                                        data-bloodgroup="<?php
                                                                    if ($value['Guardian_BloodGroup'] == 1) {
                                                                        echo 'A +';
                                                                    }
                                                                    if ($value['Guardian_BloodGroup'] == 2) {
                                                                        echo 'A -';
                                                                    }
                                                                    if ($value['Guardian_BloodGroup'] == 3) {
                                                                        echo 'B +';
                                                                    }
                                                                    if ($value['Guardian_BloodGroup'] == 4) {
                                                                        echo 'B -';
                                                                    }
                                                                    if ($value['Guardian_BloodGroup'] == 5) {
                                                                        echo 'AB +';
                                                                    }
                                                                    if ($value['Guardian_BloodGroup'] == 6) {
                                                                        echo 'AB -';
                                                                    }
                                                                    if ($value['Guardian_BloodGroup'] == 7) {
                                                                        echo 'O +';
                                                                    }
                                                                    if ($value['Guardian_BloodGroup'] == 8) {
                                                                        echo 'O -';
                                                                    }
                                                                    ?>"
                                                                                        data-status="<?php
                                                                            if ($value['Guardian_status'] == 1) {
                                                                                echo 'Active';
                                                                            } elseif ($value['Guardian_status'] == 2) {
                                                                                echo 'Inactive';
                                                                            }
                                                                            ?>"
                                                                                        data-image="<?php echo base_url('images/guardian/') . $value['Image']; ?>" class="open-memberView" href="#memberView">
                                                                                        <i class="fa fa-eye"></i>View
                                                                                    </a>
                                                                                </td>
                                                                                <td style=" vertical-align: middle;text-align: center; width: 7%;"><a target="_blank" href="<?php echo base_url(); ?>Guardian/Guardian/print_guardian_single/<?php echo $value['Guardian_ID']; ?>">Print</a>
                                                                                </td> 
                                                                                <td  style="text-align: center;">
                                                                                    <a href="<?php echo base_url(); ?>guardian/guardian/edit_guardian/<?php echo $value['Guardian_ID']; ?>">
                                                                                        <button class="btn btn-primary btn-xs">
                                                                                            <i class="fa fa-pencil"></i>
                                                                                        </button>
                                                                                    </a>
                                                                                    <a data-toggle="modal" data-professionid="<?php echo $value['Guardian_ID']; ?>" data-title="<?php echo $value['Guardian_Name']; ?>" class="open-deleteModal" href="#deleteModal" > 
                                                                                        <button class="btn btn-danger btn-xs">
                                                                                            <i class="fa fa-trash-o "></i>   
                                                                                        </button>
                                                                                    </a>

                                                                                </td>
                                                                            </tr>
        <?php
        $sl++;
    }
}
?>     
                                                                </tbody>
                                                                <tr>
                                                                    <th style="color:#000;" >SL</th>
                                                                    <th style="color:#000;text-align:center;" >Profile</th> 
                                                                    <th style="color:#000;text-align:center;" >guardian Name</th>  

                                                                    <th style="color:#000;text-align:center;" >guardian ID</th>

                                                                    <th style="color:#000;text-align:center;" >Mobile No</th>
                                                                    <th style="color:#000;text-align:center;" >Email</th>
                                                                    <th style="color:#000;text-align:center;" >Status</th>

                                                                    <th style="color:#000;text-align:center;" >Action</th>
                                                                </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>

                                                        <div id="tab-3" class="tab-pane ">
                                                            <table class="table table-striped table-bordered table-hover" id="editable2" >
                                                                <thead style=" background: #1979CA; color: #000;">
                                                                    <tr>
                                                                        <th style="color:#000; text-align: center;" >SL</th>
                                                                        <th style="color:#000;text-align:center;" >Profile</th>
                                                                        <th style="color:#000;text-align:center;" >guardian Name</th> 
                                                                        <th style="color:#000;text-align:center;" >guardian ID</th>
                                                                        <th style="color:#000;text-align:center;" >Mobile No</th>
                                                                        <th style="color:#000;text-align:center;" >Email</th>
                                                                        <th style="color:#000;text-align:center;" >Status</th>
                                                                        <th style="color:#000;text-align:center;" >View</th>
                                                                        <th style="color:#000;text-align:center;" >Print</th>

                                                                        <th style="color:#000;text-align:center;" >Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody style="text-align: center !important;" >
<?php
$sl = 1;
foreach ($all_guardian_find as $key => $value) {
    $active_guardian = strtolower(trim($value['Guardian_status']));
    if ($active_guardian == '2') {
        ?>

                                                                            <tr class="gradeC">
                                                                                <td style="text-align:center;" ><?php echo $sl; ?></td>
                                                                                <td> <img class="img-responsive" style="margin: auto;
                                                                                          vertical-align: middle;" alt="No Image Found" id="blah"  src="<?php echo base_url('/images/guardian/') . $value['Image']; ?>" width="25" height="25"/></td>

                                                                                <td  style="text-align:center; "><?php echo $value['Guardian_Name']; ?></td>
                                                                                <td  style="text-align:center; "><?php echo $value['Guardian_UNQ_ID']; ?></td>


                                                                                <td style="text-align:center;"><?php echo $value['Guardian_mobile']; ?></td>

                                                                                <td style="text-align:center;"  ><?php echo $value['Guardian_email']; ?></td>

                                                                                <td class="text-center"> <?php if ($value['Guardian_status'] == 1) {
                                                                        echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                    active</spane>';
                                                                    } else {
                                                                        echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                                    inactive</spane>';
                                                                    } ?>

                                                                                </td>
                                                                                <td style="vertical-align:middle;text-align:center;width: 9%;">
                                                                                    <a  data-toggle="modal"
                                                                                        data-id="<?php echo $value['Guardian_ID']; ?>" 
                                                                                        data-name="<?php echo $value['Guardian_Name']; ?>" 
                                                                                        data-uniqueid="<?php echo $value['Guardian_UNQ_ID']; ?>"
                                                                                        data-nationalid="<?php echo $value['Guardian_NID']; ?>"
                                                                                        data-mobile="<?php echo $value['Guardian_mobile']; ?>"
                                                                                        data-gender="<?php
                                                                    if ($value['Guardian_gender'] == '1') {
                                                                        echo 'Male';
                                                                    } elseif ($value['Guardian_gender'] == '2') {
                                                                        echo 'Female';
                                                                    }
                                                                    ?>"
                                                                                        data-religion="<?php
                                                                    if ($value['Guardian_religion'] == '1') {
                                                                        echo 'MUSLIM';
                                                                    } elseif ($value['Guardian_religion'] == '2') {
                                                                        echo 'HINDUS';
                                                                    }
                                                                    ?>"
                                                                                        data-address="<?php echo $value['Guardian_address']; ?>"
                                                                                        data-email="<?php echo $value['Guardian_email']; ?>"
                                                                                        data-bloodgroup="<?php
                                                                    if ($value['Guardian_BloodGroup'] == 1) {
                                                                        echo 'A +';
                                                                    }
                                                                    if ($value['Guardian_BloodGroup'] == 2) {
                                                                        echo 'A -';
                                                                    }
                                                                    if ($value['Guardian_BloodGroup'] == 3) {
                                                                        echo 'B +';
                                                                    }
                                                                    if ($value['Guardian_BloodGroup'] == 4) {
                                                                        echo 'B -';
                                                                    }
                                                                    if ($value['Guardian_BloodGroup'] == 5) {
                                                                        echo 'AB +';
                                                                    }
                                                                    if ($value['Guardian_BloodGroup'] == 6) {
                                                                        echo 'AB -';
                                                                    }
                                                                    if ($value['Guardian_BloodGroup'] == 7) {
                                                                        echo 'O +';
                                                                    }
                                                                    if ($value['Guardian_BloodGroup'] == 8) {
                                                                        echo 'O -';
                                                                    }
                                                                    ?>"
                                                                                        data-status="<?php
                                                                    if ($value['Guardian_status'] == 1) {
                                                                        echo 'Active';
                                                                    } elseif ($value['Guardian_status'] == 2) {
                                                                        echo 'Inactive';
                                                                    }
                                                                    ?>"
                                                                                        data-image="<?php echo base_url('images/guardian/') . $value['Image']; ?>" class="open-memberView" href="#memberView">
                                                                                        <i class="fa fa-eye"></i>View
                                                                                    </a>
                                                                                </td>
                                                                                <td style=" vertical-align: middle;text-align: center; width: 7%;"><a target="_blank" href="<?php echo base_url(); ?>Guardian/Guardian/print_guardian_single/<?php echo $value['Guardian_ID']; ?>">Print</a>
                                                                                </td> 
                                                                                <td  style="text-align: center;">
                                                                                    <a href="<?php echo base_url(); ?>guardian/guardian/edit_guardian/<?php echo $value['Guardian_ID']; ?>">
                                                                                        <button class="btn btn-primary btn-xs">
                                                                                            <i class="fa fa-pencil"></i>
                                                                                        </button>
                                                                                    </a>
                                                                                    <a data-toggle="modal" data-professionid="<?php echo $value['Guardian_ID']; ?>" data-title="<?php echo $value['Guardian_Name']; ?>" class="open-deleteModal" href="#deleteModal" > 
                                                                                        <button class="btn btn-danger btn-xs">
                                                                                            <i class="fa fa-trash-o "></i>   
                                                                                        </button>
                                                                                    </a>

                                                                                </td>
                                                                            </tr>
        <?php
        $sl++;
    }
}
?>     
                                                                </tbody>
                                                                <tr>
                                                                    <th style="color:#000;" >SL</th>
                                                                    <th style="color:#000;text-align:center;" >Profile</th> 
                                                                    <th style="color:#000;text-align:center;" >guardian Name</th>  

                                                                    <th style="color:#000;text-align:center;" >guardian ID</th>

                                                                    <th style="color:#000;text-align:center;" >Mobile No</th>
                                                                    <th style="color:#000;text-align:center;" >Email</th>
                                                                    <th style="color:#000;text-align:center;" >Status</th>

                                                                    <th style="color:#000;text-align:center;" >Action</th>
                                                                </tr>
                                                                </tfoot>
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
                    </div>
                </div> 
            </section>               
        </div>        
    </div>

    <!-- Mainly scripts -->


<?php $this->load->view('dashboard/common/footer_js'); ?>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <script>
        $(document).ready(function () {
            var oTable = $('#editable').dataTable();
            var oTable = $('#editable1').dataTable();
            var oTable = $('#editable2').dataTable();

        });
    </script>

    <!-- Flot -->
    <!-- mahbub  start delete all Blog -->

    <!-- mahbub  end delete all Blog -->

    <script>
        //javaScriptForTransactablevar non_ptnID;   var non_GroupID;
        $(document).on("click", ".open-deleteModal", function () {
            var Guardian_ID = $(this).attr('data-professionid');
            // alert(ProfessionID);
            var Guardian_Name = $(this).attr('data-title');
            // alert(ProfessionName);
            $("#guardian_Name").html(guardian_Name);
            $("#delete_Guardian_ID").val(Guardian_ID);

        });
    </script>
    <script type="text/javascript">
        $(document).on("click", ".open-memberView", function () {
            // var MemberID = $(this).data('id');
            // var data = 'one=' + MemberID;
            /*
             var id = $(this).data('id');
             alert(id);*/

            var id = $(this).data('id');

            var Guardian_Name = $(this).data('name');
            var Guardian_gender = $(this).data('gender');
            var Guardian_UniqueID = $(this).data('uniqueid');
            var Guardian_NID = $(this).data('nationalid');
            var Guardian_StudentId = $(this).data('indexno');
            var Guardian_mobile = $(this).data('mobile');
            var Guardian_religion = $(this).data('religion');
            var Guardian_email = $(this).data('email');
            var Guardian_address = $(this).data('address');
            var Guardian_BloodGroup = $(this).data('bloodgroup');

            var Guardian_status = $(this).data('status');
            var Image = $(this).data('image');
            // alert(Guardian_religion);

            $(".ibox-content #Guardian_ID").val(id);
            $(".ibox-content #Guardian_Name").html(Guardian_Name);
            $(".ibox-content #Guardian_gender").html(Guardian_gender);
            $(".ibox-content #Guardian_UniqueID").html(Guardian_UniqueID);
            $(".ibox-content #Guardian_NID").html(Guardian_NID);
            $(".ibox-content #Guardian_email").html(Guardian_email);
            $(".ibox-content #Guardian_religion").html(Guardian_religion);
            $(".ibox-content #Guardian_mobile").html(Guardian_mobile);
            $(".ibox-content #Guardian_address").html(Guardian_address);
            $(".ibox-content #Guardian_BloodGroup").html(Guardian_BloodGroup);
            $('.ibox-content #Image').attr('src', Image);
            $(".ibox-content #Guardian_status").html(Guardian_status);
        });


    </script>


    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModallabel"><i style='color:#F4A700' class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        Delete This Category!</h4>

                </div><!-- modal header -->

                <form action="<?php echo base_url(); ?>guardian/guardian/guardian_delete" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="media-upload" class="panel blank-panel">
                            <input type="hidden" id="delete_Guardian_ID" name="delete_Guardian_ID" value="">

                            <div class="panel-heading">
                                <div class="panel-options">
                                    <h3>Are your sure to delete " <span style="font-size: 12px;" id="guardian_Name"></span>
                                        "<?php //echo $value['ProfessionName'];  ?>?
                                    </h3>
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
<!-- Message View Modal start-->
<div class="modal" id="memberView" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content animated fadeIn">
            <div class="ibox-title" style="text-align: center; border-bottom: 2px solid #222c43;">
                <h3><strong>Guardian View</strong></h3>
            </div>
            <div class="ibox-content" style="padding-top: 10px;">
             <!--<p>Sign in today for more expirience.</p>-->
                <input type="hidden" Guardian_Name="Guardian_ID" id="Guardian_ID" value="">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="col-lg-12" style="margin-bottom: 0px;">
                            <div class="col-lg-4" style="text-align: right;">
                                <h5><strong> Guardian Name :</strong></h5>
                            </div>
                            <div class="col-lg-8">
                                <h5 style="color: red" id="Guardian_Name"></h5>
                            </div>


                            <div class="col-lg-12" style="margin-bottom: 0px;">
                                <div class="col-lg-4" style="text-align: right;">
                                    <h5><strong>Gender :</strong></h5>
                                </div>
                                <div class="col-lg-8">
                                    <h5 id="Guardian_gender"></h5>
                                </div>
                            </div>
                            <div class="col-lg-12" style="margin-bottom: 0px;">
                                <div class="col-lg-4" style="text-align: right;">
                                    <h5><strong>Guardian Unique ID:</strong></h5>
                                </div>
                                <div class="col-lg-8">
                                    <h5 id="Guardian_UniqueID"></h5>
                                </div>
                            </div>

                            <div class="col-lg-12" style="margin-bottom: 0px;">
                                <div class="col-lg-4" style="text-align: right;">
                                    <h5><strong>National ID :</strong></h5>
                                </div>
                                <div class="col-lg-8">
                                    <h5 id="Guardian_NID"></h5>
                                </div>
                            </div>

                            <div class="col-lg-12" style="margin-bottom: 0px;">
                                <div class="col-lg-4" style="text-align: right;">
                                    <h5><strong>Blood Group :</strong></h5>
                                </div>
                                <div class="col-lg-8">
                                    <h5 id="Guardian_BloodGroup"></h5>
                                </div>
                            </div>


                            <div class="col-lg-12" style="margin-bottom: 0px;">
                                <div class="col-lg-4" style="text-align: right;">
                                    <h5><strong> Guardian Mobile No :</strong></h5>
                                </div>
                                <div class="col-lg-8">
                                    <h5 id="Guardian_mobile"></h5>
                                </div>
                            </div>

                            <div class="col-lg-12" style="margin-bottom: 0px;">
                                <div class="col-lg-4" style="text-align: right;">
                                    <h5><strong>Email ID :</strong></h5>
                                </div>
                                <div class="col-lg-8">
                                    <h5 id="Guardian_email"></h5>
                                </div>
                            </div>


                            <div class="col-lg-12" style="margin-bottom: 0px;">
                                <div class="col-lg-4" style="text-align: right;">
                                    <h5><strong>Address :</strong></h5>
                                </div>
                                <div class="col-lg-8">
                                    <h5 id="Guardian_address"></h5>
                                </div>
                            </div>
                            <div class="col-lg-12" style="margin-bottom: 0px;">
                                <div class="col-lg-4" style="text-align: right;">
                                    <h5><strong>Religion :</strong></h5>
                                </div>
                                <div class="col-lg-8">
                                    <h5 id="Guardian_religion"></h5>
                                </div>
                            </div> 

                            <!--  <div class="col-lg-12" style="margin-bottom: 0px;">
                                 <div class="col-lg-4" style="text-align: right;">
                                     <h5><strong>Joining Date  :</strong></h5>
                                 </div>
                                 <div class="col-lg-8">
                                     <h5 id="Guardian_joining_date"></h5>
                                 </div>
                             </div> -->

                            <div class="col-lg-12" style="margin-bottom: 0px;">
                                <div class="col-lg-4" style="text-align: right;">
                                    <h5><strong>Status :</strong></h5>
                                </div>
                                <div class="col-lg-8">
                                    <h5 style="color: red;" id="Guardian_status"></h5>
                                </div>
                            </div>
                            <div class="col-lg-12" style="margin-bottom: 0px;">
                                <div class="col-lg-4" style="text-align: right;">
                                    <h5><strong>Image :</strong></h5>
                                </div>
                                <div class="col-lg-8">
                                    <!-- <img id="Image"> -->
                                    <img alt="Image" id="Image" width="160px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer" style="margin-top: 20px;">
                        <button style="" type="button" onclick="javascript:window.location.onclick()" class="btn btn-white" data-dismiss="modal">Close</button>
                    </div>
                    <!-- <div class="modal-footer" style="margin-top: 20px;">
                       <button style="" type="button" onclick="javascript:window.location.reload()" class="btn btn-white" data-dismiss="modal">Close</button>
                   </div>  -->
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Message View Modal End-->
