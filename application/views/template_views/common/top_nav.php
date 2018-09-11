<div class="container-fullwidth">

          <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">

              <div class="container-fullwidth">

                  <div class="navbar-header">

                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#"></a>

                  </div>

                  <div id="navbar" class="navbar-collapse collapse">

                      <ul class="nav navbar-nav">
                          <li class=""><a href="<?php echo base_url();?>welcome/welcome/dashboard">HOME</a></li>
                          <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">ADMIN <b class="caret"></b></a> 
                          
                            <ul class="dropdown-menu">
                                <li class="kopie"><a href="#">ADMIN</a></li>
                                <li><a href="<?php echo base_url();?>pages/user_login_page/index">LOGIN</a></li>                            
                            </ul>
                        </li>
              <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">INPUT AREA <b class="caret"></b></a> 
                          
                            <ul class="dropdown-menu">
                                <li class="kopie"><a href="#">INPUT AREA</a></li>
                                <li><a href="<?php echo base_url();?>pages/home_page/index">HOME</a></li>
                                <li><a href="<?php echo base_url();?>pages/service_page/index">SERVICE</a></li>
                                <li><a href="<?php echo base_url();?>pages/aboutus_page/index">ABOUT US</a></li>
                                <li><a href="<?php echo base_url();?>pages/works_page/index">WORKS</a></li>
                                <li><a href="<?php echo base_url();?>pages/price_page/index">PRICE</a></li>
                                <li><a href="<?php echo base_url();?>pages/contact_page/index">CONTACT</a></li>                              
                            </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONTACT <b class="caret"></b></a> 
                          
                            <ul class="dropdown-menu">
                                <li class="kopie"><a href="#">CONTACT</a></li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">MESSAGES</a>
                    <ul class="dropdown-menu">
                                        <li class="kopie"><a href="#">MESSAGES</a></li>
                      <li><a href="<?php echo base_url();?>contact/contact_message/read_message">READ MESSAGES</a></li>
                      <li><a href="<?php echo base_url();?>contact/contact_message/unread_message">UNREAD MESSAGES</a></li>
                                                                          
                    </ul>
                  </li>                              
                            </ul>
                        </li>
                        <li class=""><a href="<?php echo base_url();?>admin/login/log_out">Log Out</a></li>
                          
                       </ul>

                    </div><!--::::::::::::::::::nabvar collapse:::::::::::::-->

              </div><!--:::::::::::::::::container::::::::::-->

          </nav><!--::::::::::navbar::::::::-->

  </div><!--:::::container:::::-->