<?php

namespace App\Http\Controllers\SiteAdmin;

use App\Domain\Good\GoodDto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use App\Category;
use App\Type_of_good;
use App\Good;
use App\Photo;
use App\Http\Classes\CategoriesFactory;
use Auth;
use Illuminate\Http\File;
use Symfony\Component\Filesystem\Filesystem;
use Intervention\Image\ImageManagerStatic as Image;
class SubordinateListsController extends SiteAdminController
{


   
    public function __construct()
    {
       parent::__construct();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        /*$this->user=Auth::user();*/
        session()->forget('images');
        $this->title = 'Панель администратора';
        $f=new CategoriesFactory();
        $f=$f->get_categories('User');
        $data['categories']=$f->show_categories();
        $data['types']=Type_of_good::get();
        $data_nav['menu']=$this->menu();
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";
        $data['active_menu_item']=2;
        return view('site_admin_page/subordinate_lists/index',$data,$data_nav);
    }

    public function getSeasons(){
        $result['message']='success';
        $result['seasons']=\App\Season::all();
        echo json_encode($result);
    }

    public function addSeason(Request $request){
        $result['message']='success';
        $result['seasons']=\App\Season::insert(
            ['name'=>$request->input('season_name')]
        );
        echo json_encode($result);
    }

    public function deleteSeason(Request $request){
        $result['message']='success';
        \App\Season::where('id',$request->input('season'))->delete();
        echo json_encode($result);
    }



    public function getProducts(){
    $result['message']='success';
    $result['products']=\App\ProductType::all();
    echo json_encode($result);
}

    public function addProduct(Request $request){
        $result['message']='success';
        $result['products']=\App\ProductType::insert(
            ['name'=>$request->input('product_name')]
        );
        echo json_encode($result);
    }

    public function deleteProduct(Request $request){
        $result['message']='success';
        \App\ProductType::where('id',$request->input('product'))->delete();
        echo json_encode($result);
    }




    public function getFabrics(){
        $result['message']='success';
        $result['fabrics']=\App\Fabric::all();
        echo json_encode($result);
    }

    public function addFabric(Request $request){
        $result['message']='success';
        $result['fabrics']=\App\Fabric::insert(
            ['name'=>$request->input('fabric_name')]
        );
        echo json_encode($result);
    }

    public function deleteFabric(Request $request){
        $result['message']='success';
        \App\Fabric::where('id',$request->input('fabric'))->delete();
        echo json_encode($result);
    }

    public function getSizes(){
        $result['message']='success';
        $result['sizes']=\App\Size::all();
        echo json_encode($result);
    }

    public function addSize(Request $request){
        $result['message']='success';
        $result['sizes']=\App\Size::insert(
            ['name'=>$request->input('size_name')]
        );
        echo json_encode($result);
    }

    public function deleteSize(Request $request){
        $result['message']='success';
        \App\Size::where('id',$request->input('size'))->delete();
        echo json_encode($result);
    }


    public function getDecorations(){
        $result['message']='success';
        $result['decorations']=\App\Decoration::all();
        echo json_encode($result);
    }

    public function addDecoration(Request $request){
        $result['message']='success';
        $result['decorations']=\App\Decoration::insert(
            ['name'=>$request->input('decoration_name')]
        );
        echo json_encode($result);
    }

    public function deleteDecoration(Request $request){
        $result['message']='success';
        \App\Decoration::where('id',$request->input('decoration'))->delete();
        echo json_encode($result);
    }



}
