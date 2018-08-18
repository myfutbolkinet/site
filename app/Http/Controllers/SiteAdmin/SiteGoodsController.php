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
use Auth;
use Illuminate\Http\File;
use Symfony\Component\Filesystem\Filesystem;
use Intervention\Image\ImageManagerStatic as Image;
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
        $tmp_folder = '/files/tmpImages/';session()->forget('images');
        if(session('images')){
        foreach(session('images') as $file){
           unlink(base_path().$tmp_folder.$file);
        }
    }
       session()->forget('images');
        $data['sub_menu']=[
        1=>[
            'btn_title'=>'управление товарами и группами',
            'href'=>'/admin/goods_and_groups'
        ],
        2 =>[
            'btn_title'=>'Добавить позицию',
            'href'=>'/admin/add_good'
        ],


        ];
        $data['active_menu_item']=2;

        return view('site_admin_page/add_good/index',$data,$data_nav);
    }

    public function showGoodsAndGroups(){
        $this->title = 'showGoodsAndGroups';
        $f=new CategoriesFactory();
        $f=$f->get_categories('User');
        $data['categories']=$f->show_categories();
        $data_nav['menu']=$this->menu();
        $data['title']="управление товарами и группами";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";

        $data['sub_menu']=[
            1=>[
                'btn_title'=>'управление товарами и группами',
                'href'=>'/admin/goods_and_groups'
            ],
            2 =>[
                'btn_title'=>'Добавить позицию',
                'href'=>'/admin/add_good'
            ],


        ];
        $data['active_menu_item']=1;
        $data['sub_menu2']=[
            1=>[
                'btn_title'=>'Показывать все товары',
'data_href'=>'tab-1'
            ],
            2 =>[
                'btn_title'=>'Задать фильтр выборки товаров по категориям',
                'data_href'=>'tab-2'
             ],
            3 =>[
                'btn_title'=>'Товары по категориям',
                'data_href'=>'tab-3'
            ],


        ];
        $data['active_menu2_item']=1;

        $data['goods']=\App\Good::where('user_id',Auth::user()->id)->orderBy('id', 'desc')->paginate(10);


        return view('site_admin_page/show_goods/index',$data,$data_nav);

    }

    //TODO: переименовать функцию в store
    public function add_good(Request $request){
        dump(session()->all());
        //TODO: Взять из сессии фотки товара и сохранить их в базе после чего удалить их из сессии и очистить эти файлы из storage/images/temp
        $data= new \App\Good();
        $data->name = $request->input('name');
        $data->articul = $request->input('artikul');
        $data->price = $request->input('price');
        $data->type = $request->input('type');
        $data->qnt =$request->input('count');
        $data->discount= $request->input('discount');
        $data->category=$request->input("id_cat");
        $data->description=$request->input("editor1");
        $data->description2='';
        $data->user_id=Auth::user()->id;
        $data->save();

        //TODO: Переместить фотографии из
        $tmp_folder = '/files/tmpImages/';

        foreach(session('images') as $file){
            rename(base_path().$tmp_folder.$file, storage_path()."/app/public/".$file);

            $img=Image::make(storage_path()."/app/public/".$file);
            $height=$img->height();
            $width=$img->width();
            if($width>$height){
                $img->resize(null, 1036);

            }
            if($height>$width){
                $img->resize(850, null);
            }
            $img->crop(850, 1036);
            $img->save();
            //echo "<img src='".asset('storage/'.$file.'')."'>";

            $photo=new \App\Photo();
            $photo->id_good=$data->id;
            $photo->photo=$file;
            $photo->save();
        }

        foreach ($request->input("color") as $value){
            $color=new \App\Colors_of_good();
            $color->id_good=$data->id;
            $color->color=$value;
            $color->save();
        }
        session()->forget('images');
    return redirect()->guest(route('site.admin.add_good'));

    }

    public function showGoodsByFilter($goods){
        dd($goods);
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
