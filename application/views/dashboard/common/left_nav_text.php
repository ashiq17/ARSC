 <?php 
            //foreach ($parentMenus as $key => $parentMenu): 
            ?>
                <!-- <li>  

                    <a href="#">
                           
                        <i class="fa fa-sitemap"></i> <span class="nav-label">
                        <?php echo $parentMenu['name'] ?></span><span class="fa arrow">
                    </span></a>
                     
                    <ul class="nav nav-second-level">
                       
                        <?php foreach ($permissionMenus as $key => $permissionMenu): ?>

                        <?php if ($parentMenu['id']==$permissionMenu['pages_id']): ?>
                            <li><a href="<?php echo base_url();?><?php echo $permissionMenu['page_url'] ?>"><?php echo $permissionMenu['title'] ?></a></li>
                        <?php endif ?>
                        <?php endforeach ?>
                    </ul>
                </li> -->
            <?php //endforeach ?>