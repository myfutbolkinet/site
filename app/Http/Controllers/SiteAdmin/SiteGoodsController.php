<?php

namespace App\Http\Controllers\SiteAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use App\Category;
use App\Type_of_good;
use App\Good;
use App\Photo;
use App\Http\Classes\CategoriesFactory;
class SiteGoodsController extends SiteAdminController
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
        $this->title = 'Панель администратора';
        $f=new CategoriesFactory();
        $f=$f->get_categories('User');
        $data['categories']=$f->show_categories();
        $data['types']=Type_of_good::get();
        $data_nav['menu']=$this->menu();
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";

        return view('site_admin_page/add_good/index',$data,$data_nav);
    }

    //TODO: переименовать функцию в store
    public function add_good(Request $request){
        dump(session()->all());
        //TODO: Взять из сессии фотки товара и сохранить их в базе после чего удалить их из сессии и очистить эти файлы из storage/images/temp
        dd($request->input());

    }

    public function delete_good(){
        /*$this->user=Auth::user();*/

        if(Gate::denies('VIEW_ADMIN')){

            abort(403);
        }

        $this->title = 'Панель администратора';
        $data['categories']=Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        $data['types']=Type_of_good::get();
        $data['goods']=Good::get();

        $this->template='site_admin_page/delete_goods';
        $data['title']="Видалити товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";

        return $this->renderOutput($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function edit_good($id){

        if(Gate::denies('VIEW_ADMIN')){

            abort(403);
        }

        $this->title = 'Панель администратора';
        $data['categories']=Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        $data['good']=Good::where('id', $id)
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        $data['photos']=Photo::where('id_good', $id)
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        $this->template='site_admin_page/edit_good';
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";

        return $this->renderOutput($data);
        
    }
}
