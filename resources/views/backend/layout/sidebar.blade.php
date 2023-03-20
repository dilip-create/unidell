<div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
        <?php 
            $menuItems = [
                            ['label' => 'Dashboard', 'url_key'=> 'dashboard', 'icon' => 'fa-tachometer-alt', 'submenu' => []],
                            // ['label' => 'Department', 'url_key'=> 'department', 'icon' => 'fa-building', 'submenu' => []],
                            // ['label' => 'User', 'url_key'=> 'user', 'icon' => 'fas fa-user-alt', 'submenu' => []],
                            // ['label' => 'Tickets', 'url_key'=> 'ticket', 'icon' => 'fas fa-swatchbook', 'submenu' => []],
                            ['label' => 'Medicines', 'url_key'=> 'product', 'icon' => 'fab fa-pied-piper', 'submenu' => []],
                            // ['label' => 'Services', 'url_key'=> 'service', 'icon' => 'fab fa-servicestack', 'submenu' => []],
                            // ['label' => 'Agent', 'url_key'=> 'agent', 'icon' => 'fas fa-id-card', 
                            //     'submenu' => [
                            //                 // ['label' => 'List Agent', 'url_key'=> 'agent', 'icon' => '', 'submenu' => []],
                            //                 // ['label' => 'Compose', 'url_key'=> 'email-compose', 'icon' => '', 'submenu' => []],
                            //                 // ['label' => 'Read Email', 'url_key'=> 'email-read', 'icon' => '', 'submenu' => []]
                            //             ]
                            // ]
                        ];

            
            function getMenuHtml($menuItems, $menuHtml){

                if(sizeof($menuItems) > 0){
                    foreach($menuItems as $menuItem){
                        $submenu = '';
                        if(sizeof($menuItem["submenu"]) > 0){
                            $submenu = 'onClick="return false;" class="menu-toggle"';
                        }
                        $active = '';
                        $activeBackground = '';
                        $path = 'BackEnd/'.$menuItem["url_key"];
                        if(Request::path() == $path){
                            $active = 'active';
                            $activeBackground = 'active-background';
                        }
                       $menuHtml .= '<li class="'.$active.'">
                                        <a href="'. url($path).'" '.$submenu.' class="'.$activeBackground.'">
                                            <i class="fa '.$menuItem["icon"].'"></i>
                                            <span>'.$menuItem["label"].'</span>
                                        </a>';
                                    if(sizeof($menuItem["submenu"]) > 0){
                                        $menuHtml .= '<ul class="ml-menu">'.getMenuHtml($menuItem["submenu"], "").'</ul>';
                                    }

                       $menuHtml .= '</li>';
                    }
                }
                return $menuHtml;
            }
            
        ?>
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="{{ url('') }}/public/assets/backend/images/admin.jpg" class="img-circle user-img-circle"
                                    alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"></div>
                            <div class="profile-usertitle-job ">UniDell Admin</div>
                        </div>
                    </li>

                    <?php echo getMenuHtml($menuItems, ''); ?>
                </ul>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#leftsidebar .menu .ml-menu li').each(function(){
                        if($(this).hasClass('active')){
                            //$(this).parents('li').find('.menu-toggle').click();
                            $(this).parents('li').find('.menu-toggle').addClass('toggled');
                            $(this).parent().css('display','block !important');
                        }
                    });
                });
            </script>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
</div>