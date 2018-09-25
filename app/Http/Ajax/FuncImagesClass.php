<?php

namespace App\Http\Ajax;

use Illuminate\Http\Request;
use Auth;
use Intervention\Image\ImageManagerStatic as Image;
class FuncImagesClass
{


    public function add_photo_file(Request $request){
        // define absolute folder path
        $storeFolder = storage_path().'/app/public/';
// if folder doesn't exists, create it
        if(!file_exists($storeFolder) && !is_dir($storeFolder)) {
            mkdir($storeFolder);
        }
// upload files to $storeFolder
        if (!empty($_FILES)) {

            $tempFile = $_FILES['file']['tmp_name'];
            $array = explode('.', $_FILES['file']['name']);
            $extension = end($array);$without_ext=str_replace($extension, "", $_FILES['file']['name']);
            $without_ext=str_replace(".", "", $without_ext);
            $target=$without_ext."_". time().".".$extension;

            $targetFile =  $storeFolder. $target;

            if(move_uploaded_file($tempFile,$targetFile)) {

                $background = Image::canvas(1036, 1036);
                $background->fill('#fff');


                $img=Image::make($targetFile);

                $height=$img->height();
                $width=$img->width();

                if($width>$height){
                    $aspect_ratio=$width/$height;

                    $img->resize(1036,1036/$aspect_ratio );
                    $rest=(1036-1036/$aspect_ratio)/2;
                    $background->insert($img,'top-left', intval(0),intval($rest));
                }
                if($height>$width){

                    $aspect_ratio=$height/$width;
                    $img->resize(1036/$aspect_ratio, 1036);
                    $rest=(1036-1036/$aspect_ratio)/2;
                    $background->insert($img,'top-left', intval($rest),intval(0));
                }
                else{
                    $img->resize(1036, 1036);

                    $background->insert($img,'center');
                }

                //$background->crop(1036, 1036);

                $background->save($targetFile);


                $items = session('images');

                if ($items == null) {
                    session()->push('images', $target);

                } else {
                    $items = array_push($items,$target);
                    session()->push('images',$target);

                }
                session()->save();
            }
        }
        echo json_encode($target);
    }




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
