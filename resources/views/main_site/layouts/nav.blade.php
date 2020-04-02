




<nav class="offcanvas-menu">
<ul id="js-nav-menu" class="menu">

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
            public function view_cat($arr, $parent_id = 0, $level, $parents_approved=[] ) {

                //Условия выхода из рекурсии
                if (empty($arr[$parent_id])) {
                    return;
                }
                if($parent_id !== 0) {
                    echo '<ul class="offcanvas-submenu">';
                }
                //перебираем в цикле массив и выводим на экран
                for ($i = 0; $i < count($arr[$parent_id]); $i++) {
                //Если пермишен присутствуют у текущего юзера выводить нулевой уровень
                     if($parent_id == 0){
                       echo '<li class="has-children"><span><a href="#">';
                       echo $arr[$parent_id][$i]->name;
                       }
                       else{

                    echo '
                          <li>
                        <a href="'.$arr[$parent_id][$i]->link.'  ">'.$arr[$parent_id][$i]->name;




                     }
 if($parent_id == 0){
                    echo '</a><span class="sub-menu-toggle"></span></span>';}
                    //рекурсия - проверяем нет ли дочерних категорий
                    $this->view_cat($arr, $arr[$parent_id][$i]->id, 1,$parents_approved);
                    if($parent_id == 0){
                    echo '</li> ';
                    }
                    else{
                    echo '</a></li> ';}

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

</nav>







