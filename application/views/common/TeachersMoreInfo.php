<?php $this->load->view('common/header'); ?>
<!--************************************
                Home Slider Start
*************************************-->


<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row">
            <div id="tg-twocolumns" class="tg-twocolumns">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 pull-right">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-detailpage tg-coursedetailpage">
                            <article class="tg-themepost tg-course">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div id="tg-content" class="tg-content">
                                        <div class="tg-faculy tg-facultydetail" style="padding-top: 40px;">
                                            <table class="table table-bordered table-hover table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Title
                                                        </th>
                                                        <th>
                                                            Information
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody >
                                                    <?php foreach ($teacherdata as $key => $info) { ?>
                                                        <tr>

                                                            <td>
                                                                Profile Picture
                                                            </td>
                                                            <td>
                                                                <figure>

                                                                    <img width="100%" src='<?php echo base_url(); ?>images/teacher/<?php echo $info->Image; ?>' alt="Teacher image">
                                                                </figure> 
                                                            </td>
                                                        </tr>
                                                        <tr class="table-active">

                                                            <td>
                                                                Name
                                                            </td>
                                                            <td>
                                                                <?php echo $info->Teacher_Name; ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="table-active">

                                                            <td>
                                                                Subject
                                                            </td>
                                                            <td>
                                                                <?php echo $info->DesignationName; ?>
                                                            </td>
                                                        </tr>

                                                        <tr class="table-success">

                                                            <td>
                                                                Dath Of Birth
                                                            </td>
                                                            <td>
                                                                <?php echo $info->Teacher_DateOfBirth; ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="table-warning">

                                                            <td>
                                                                Joining Date
                                                            </td>
                                                            <td>
                                                                <?php echo $info->Teacher_joining_date; ?>
                                                            </td>
                                                        </tr>

                                                        <tr class="table-danger">

                                                            <td>
                                                                Email 
                                                            </td>
                                                            <td>
                                                                <?php echo $info->Teacher_email; ?>
                                                            </td>
                                                        </tr>

                                                        <tr class="table-danger">

                                                            <td>
                                                                Religion
                                                            </td>
                                                            <td>


                                                                <?php
                                                                if ($info->Teacher_religion == 1) {
                                                                    echo 'MUSLIM';
                                                                } elseif ($info->Teacher_religion == 2) {
                                                                    echo 'HINDU';
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="table-danger">

                                                            <td>
                                                                Social Link
                                                            </td>
                                                            <td>
                                                                <ul class="tg-socialicons">

                                                                    <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                                                    <li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>

                                                                </ul>
                                                            </td>
                                                        </tr>

    <?php break;
} ?>

                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div>
                            </article>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-left">
<?php $this->load->view('common/SidebarLeft'); ?>
                </div>
            </div>
        </div>
    </div>
</main>


<?php $this->load->view('common/footer'); ?>