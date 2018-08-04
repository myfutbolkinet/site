<?php

namespace App\Http\Controllers\Privat;

use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use Auth;
use App\Http\Libraries\Display_lib;
use App\GGFilter;
use App\CabinetMenu;
class Privat3Controller extends \App\Http\Controllers\Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $main_path='privat/retail';
    public function __construct()
    {
     /*   dd(Auth::check());*/

        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    public function showCabinet()
    {
        $cabinet_menu=new CabinetMenu();
        $data_nav['menu']=$cabinet_menu->data_nav_menu;
        $data_nav['active_menu_item']=0;
        $data_content['title']="Industry";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::privat_retail($this->main_path,null,$data,$data_nav,$data_content);
    }

    public function showMainPrivatInformation()
    {
        //Возвращает данные меню по конкретному юзеру
        //И возвращает HTML шаблон для отображения представления меню

        $data['nav'] = 567;
        $html = view('privat/retail/templates/show_main_privat_information', $data)->render();
        $arr = array('html' => $html);
        $json_string = json_encode($arr);
        echo $json_string;


    }

    public function showGoodsAndGroups()
    {
        //Возвращает данные меню по конкретному юзеру
        //И возвращает HTML шаблон для отображения представления меню

        $data['nav']=567;
        $html = view('privat/retail/templates/show_manage_goods_and_groups',$data)->render();
        $arr = array('html'=>$html);
        $json_string=json_encode($arr);
        echo $json_string;


    }
    public function showGoodsAndGroupsTable()
    {
        //Возвращает данные меню по конкретному юзеру
        //И возвращает HTML шаблон для отображения представления меню

        $data['nav']=567;
        $html = view('privat/retail/templates/show_goods_and_groups_table',$data)->render();
        $arr = array('html'=>$html);
        $json_string=json_encode($arr);
        echo $json_string;


    }

    public function showCompanyMenu()
    {
        //Возвращает данные меню по конкретному юзеру
        //И возвращает HTML шаблон для отображения представления меню

        $data['nav']=567;
        $html = view('privat/retail/templates/menu_present',$data)->render();
        $arr = array('html'=>$html);
        $json_string=json_encode($arr);
        echo $json_string;


    }

    public function showEditHorisontalMenu()
    {
        //Возвращает данные меню по конкретному юзеру
        //И возвращает HTML шаблон для отображения представления меню

        $data['nav']=567;
        $html = view('privat/retail/templates/edit_horisontal_menu',$data)->render();
        $arr = array('html'=>$html);
        $json_string=json_encode($arr);
        echo $json_string;


    }
    public function getGoodsAndGroupsFilters()
    {

    $filters_data=GGfilter::where('user_id',Auth::user()->id)->get();

        $arr = array('filters_data'=>$filters_data[0]);
        $json_string=json_encode($arr);
        echo $json_string;


    }

    public function ShowGoodsAddItem()
    {

        $cabinet_menu=new CabinetMenu();
        $data_nav['menu']=$cabinet_menu->data_nav_menu;
        $data['categories']=MenuController::index('categories');
        $data_nav['active_menu_item']=1;
        $data_content['title']="Industry";
        $path='privat/retail/templates/add_item';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";

        return Display_lib::privat_self($path,$data,$data_nav,$data_content);


    }




}
