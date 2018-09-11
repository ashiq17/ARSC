    <?php 
    $this->load->model('Dashboard');
    // $this->load->model('Users_model');

    $get_superadmin = $this->Dashboard->findSuperAdmin();
    $user_id = $this->session->userdata('UserID');
    $user = $this->Dashboard->user($user_id);

    $RoleID = $this->session->userdata('RoleID');

    $permissions = $this->Dashboard->findPermissions($RoleID);
    $pagesName = $this->Dashboard->findPages($RoleID);
    // $permissions = $this->Users_model->findPermissions($RoleID);

    // echo "<pre>";
    // print_r($pagesName);
    

 ?>
<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url().'assets/home/img/mytv-logo2.png';?>" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $user[0]['FullName'] ?></strong>
                             </span> <span class="text-muted text-xs block"><?php echo $user[0]['role_name'] ?><b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Change Password</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url();?>admin/login/log_out">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>

                    <?php //foreach ($permissions as $key => $permission): ?>
                        <li>
                            <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">News Posts </span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li><a href="<?php echo base_url();?>news/news/all_news">All News</a></li>
                                <li><a href="<?php echo base_url();?>news/news/add_news">Add News</a></li>
                                
                            </ul>
                        </li>
                       
                    
                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Appearance</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Menus<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="<?php echo base_url();?>appearance/menus/first_menu">Mytv Menu</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>appearance/menus/second_menu">News Menu</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#">Widgets<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="<?php echo base_url();?>appearance/widgets/page_widget">Page Widget</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>appearance/widgets/sidebar_widget">Sidebar Widget</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i> <span class="nav-label">Facebook Auto Post</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <!--  <li>
                                <a href="#">Menus<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level"> -->
                                    <li>
                                        <a href="<?php echo base_url();?>home/facebook_login"><i class="fa fa-cog"></i>Settings</a>
                                    </li>
                                    <!-- <li>
                                        <a href="<?php echo base_url('FacebookLogin/index');?>">Facebook Login</a>
                                        <a href="<?php echo base_url('Example/index');?>">Facebook Login</a>
                                    </li> -->
                                   <!--  <li>
                                        <a href="#">Logs</a>
                                    </li>
                                    <li>
                                        <a href="#">About</a>
                                    </li> -->
                               <!--  </ul>
                            </li> -->
                            <!-- <li>
                                <a href="#">Widgets<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="<?php echo base_url();?>appearance/widgets/page_widget">Page Widget</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>appearance/widgets/sidebar_widget">Sidebar Widget</a>
                                    </li>

                                </ul>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>home/database_backup"><i class="fa fa-database"></i> <span class="nav-label">Database Backup</span><span class="fa arrow"></span></a>
                        
                    </li>
                    <!-- <li>
                        <a href="#"><i class="fa fa-database"></i> <span class="nav-label">Database Backup</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level"> 
                            <li>
                                <a href="<?php echo base_url();?>home/database_backup"><i class='fa fa-list'></i> Backup</a>
                            </li>  
                        </ul>
                    </li> -->
                    <li>
                        <a href="#"><i class="fa fa-fw fa-users"></i> <span class="nav-label">Users</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>users_role/users/add_user"><i class='fa fa-user-plus'></i>Add User</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>users_role/users/user_list"><i class='fa fa-user'></i>Users List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gears"></i> <span class="nav-label">Users Role Settings</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>users_role/users/role_list"><i class='fa fa-user-secret'></i> Roles</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>users_role/users/permissions"><i class='fa fa-bell'></i> Permissions</a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo base_url();?>users_role/users/role_list"><i class='fa fa-user-secret'></i> Add Role</a>
                            </li>  -->  
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gears"></i> <span class="nav-label">CTL Menu</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level"> 
                            <li>
                                <a href="<?php echo base_url();?>users_role/users/page_add"><i class='fa fa-list'></i>Pages Action</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>users_role/users/pages_name_list"><i class='fa fa-list'></i> Pages Name</a>
                            </li>  
                        </ul>
                    </li>
                    <?php //endforeach ?>
                    
                </ul>

            </div>
        </nav>
      <?php //break;} ?>  