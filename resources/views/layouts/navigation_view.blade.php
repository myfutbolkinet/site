

<!--MAIN NAVIGATION-->
<!--===================================================-->


<nav style="min-height:100%" class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/img/profile_small.jpg" />
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>

@php

                        class Recursion
                        {
                            public $level;
                            public $lang = 'en';

                            public function get_cat($menu=null)
                            {

                                if (!$menu) {
                                    return NULL;
                                }
                                $arr_cat = array();
                                if (count($menu) != 0) {

                                    //В цикле формируем массив

                                    foreach ($menu as $key => $row) {

                                        //Формируем массив где ключами являются адишники на родительские категории
                                        if (empty($arr_cat[$row->parent_id])) {
                                            $arr_cat[$row->parent_id] = array();
                                        }
                                        $arr_cat[$row->parent_id][] = $row;
                                    }


                                    //возвращаем массив
                                    return $arr_cat;
                                }
                            }


                            //вывод каталогa с помощью рекурсии
                            public function view_cat($arr, $parent_id = 0, $level ) {

                                //Условия выхода из рекурсии
                                if (empty($arr[$parent_id])) {
                                    return;
                                }
                                if($parent_id !== 0) {
                                    echo '<ul class="nav nav-second-level" >';
                                }
                                //перебираем в цикле массив и выводим на экран
                                for ($i = 0; $i < count($arr[$parent_id]); $i++) {

                                    echo '
                                          <li>
                                        <a href="'.$arr[$parent_id][$i]->link.'">';
                                    if($parent_id == 0){
                                        echo '<i class="fa '.$arr[$parent_id][$i]->icon.'"></i>';
                                    }

                                    echo '
                                <span class="menu-title">' . $arr[$parent_id][$i]->name . '</span>
                                <i class="arrow"></i>
                                            </a>';
                                    //рекурсия - проверяем нет ли дочерних категорий
                                    $this->view_cat($arr, $arr[$parent_id][$i]->id, 1);
                                    echo '</li> ';
                                }
                                if($parent_id !== 0) {
                                    echo '</ul>';
                                }
                            }
                        }

                        if(isset($menu)){
                         $rec= new Recursion;
                         $result = $rec->get_cat($menu);
                        //Выводи каталог на экран с помощью рекурсивной функции

                        $rec->view_cat($result,0,0);
                        }



@endphp

                    </ul>



                </div>

</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->

