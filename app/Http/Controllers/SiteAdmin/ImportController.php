<?php

namespace App\Http\Controllers\SiteAdmin;

use App\Domain\Good\GoodDto;
use App\Imports\WholesalersImport;
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
use Maatwebsite\Excel\Facades\Excel;
use Intervention\Image\ImageManagerStatic as Image;
class ImportController extends SiteAdminController
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
    public function indexOpt(){
        $data_nav['menu']=$this->menu();
        $data['title']="Додати товар";
        $data['keywords']="Ukrainian industry platform";
        $data['description']="Ukrainian industry platform";
        $data['active_menu_item']=2;
        return view('site_admin_page/import/import_opt/index',$data,$data_nav);
    }


    public function importOpt(){
        $tempFile = $_FILES['file']['tmp_name'];
        $fileName=uniqid().'.'.$_FILES['file']['name'];
        $targetFile =  storage_path('/app/public/import_opt/'. $fileName);
            session()->put('temp_import_opt_filename', $targetFile);
        move_uploaded_file($tempFile,$targetFile); // Перемещаем загруженные файлы из временного хранилища в нашу папку uploads

Excel::import(new WholesalersImport, $targetFile);
    }



}
