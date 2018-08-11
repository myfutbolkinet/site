<?php

namespace App\Http\Ajax;

use Illuminate\Http\Request;
use Auth;

class FuncUploadClass
{

public function actionImagesUpload(){
    var_dump(session('images'));
    // define absolute folder path
    $storeFolder = base_path().'/files/tmpImages/';
    $folder = '/files/tmpImages/';
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
            $items = session('images');
            if ($items == null) {
                session()->push('images', $target);
            } else {
                var_dump(session('images'));
                $items = array_push($items,$target);
                session()->push('images',$target);
            }
            session()->save();
        }
    }
    var_dump(session('images'));
    //echo json_encode(session('images'));
}


public function actionImagesDelFromSession(Request $request){

    $index=$request->input('file_index');

    $array=session('images');
    //Удалить из массива сессионного 1 запись соответствующую индексу
    var_dump($array);
    unset($array[$index]);
    session()->put('images',$array);
    session()->save();
    var_dump(session('images'));
    //echo json_encode(session('images'));

}
}
