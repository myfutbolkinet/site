<?php

namespace App\Http\Ajax;

use Illuminate\Http\Request;
use Auth;
use Intervention\Image\ImageManagerStatic as Image;
class FuncImagesClass
{

    public function index(Request $request)
    {
        //функция принемает файл и записывает его на сервер
        if (!empty($_FILES)) {
            var_dump(session()->token());
            var_dump($request->file('my-pic'));
            // Файл передан через обычный массив $_FILES
           echo 'Contents of $_FILES:<br/><pre>' . print_r($_FILES, true) . '</pre>';
            $image=$request->file('my-pic');
            $file_name = $_FILES['my-pic']['name'];
            $filesize=$_FILES['my-pic']['size'];
            //Формируем имя нового файла из  time + session_token + filesize + filename ()
            $new_file_name=time() . "_" . session()->token() . "_" . $filesize . "_" . $file_name;
            $location=storage_path('images/temp/'.$new_file_name);
            $lacation_separate=explode('_',$new_file_name);
            //слить все элементы массива которые превышают ключ 3 и больше
             unset($lacation_separate[0]);
            var_dump($lacation_separate);
            $str='';
            $num=0;
            $count_str=count($lacation_separate);
            foreach($lacation_separate as $loc){
                if($num==0){
                    $str=$loc;
                }
                elseif($num==$count_str){
                    $str=$str."_".$loc;
                }
                else{
                    $str=$str."_".$loc;
                }
            $num++;
            }
            var_dump($str);
            //получить все файлы из папки storage/images/temp
            $files1 = array_diff(scandir(storage_path('images/temp/')), array('..', '.'));

            var_dump($files1);
            foreach($files1 as $file){
                $lacation_separate_in_dir=explode('_',$file);
                unset($lacation_separate_in_dir[0]);
                var_dump($lacation_separate_in_dir);
                $str_in_dir='';
                $num=0;
                $count_str=count($lacation_separate_in_dir);
                foreach($lacation_separate_in_dir as $loc){
                    if($num==0){
                        $str_in_dir=$loc;
                    }
                    elseif($num==$count_str){
                        $str_in_dir=$str_in_dir."_".$loc;
                    }
                    else{
                        $str_in_dir=$str_in_dir."_".$loc;
                    }
                    $num++;
                }
                $files2[]=$str_in_dir;

            }
            var_dump($files2);
            if(!in_array($str,$files2)){
                $img=Image::make($image);
                $img->save($location);
                //TODO : Добавить имя файла в сессию
            }
            else{
                var_dump('Nayden',$str);
            }

        }
    }
}
