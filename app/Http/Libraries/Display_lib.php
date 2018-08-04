<?PHP

namespace App\Http\Libraries;

use Illuminate\Http\Request;
class Display_lib
{
    public static $num;
    public static function index($path,$data,$data_nav,$data_content)
    {

    $view=view($path.'.preheader_view',$data)->render();
    $view.=view($path.'.header_view')->render();
    $view.=view($path.'.main_navigation_view',$data_nav)->render();
    $view.=view($path.'.main_content_view',$data_content)->render();
    $view.=view($path.'.main_aside_view',$data)->render();
    $view.=view($path.'.footer_view',$data)->render();
    return $view;
    }
    public static function main($path,$data,$data_nav,$data_content)
    {

        $view=view('preheader_view',$data)->render();
        $view.=view($path.'.header_view')->render();
        $view.=view('main_navigation_view',$data_nav)->render();
        $view.=view($path.'.main_content_view',$data_content)->render();
        $view.=view($path.'.main_aside_view',$data)->render();
        $view.=view('footer_view',$data)->render();
        return $view;
    }
    public static function stock($path,$data,$data_nav,$data_content)
    {

        $view=view('preheader_view',$data)->render();
        $view.=view($path.'.header_view')->render();
        $view.=view('main_navigation_view',$data_nav)->render();
        $view.=view($path.'.main_content_view',$data_content)->render();
        $view.=view($path.'.main_aside_view',$data)->render();
        $view.=view('footer_view',$data)->render();
        return $view;
    }

    public static function page($path,$data,$data_nav,$data_content)
    {

        $view=view($path.'.preheader_view',$data)->render();
        $view.=view('header_view')->render();
        $view.=view('main_navigation_view',$data_nav)->render();
        $view.=view($path.'.main_content_view',$data_content)->render();
        $view.=view($path.'.main_aside_view',$data)->render();
        $view.=view($path.'.footer_view',$data)->render();
        return $view;
    }
    public static function admin($path,$data,$data_nav)
    {

        $view=view($path.'.preheader_view',$data)->render();
        $view.=view('admin_page.header_view')->render();
        $view.=view('admin_page.main_navigation_view',$data_nav)->render();
        $view.=view($path.'.main_content_view',$data)->render();
        /*$view.=view($path.'.main_aside_view',$data)->render();*/
        $view.=view($path.'.footer_view',$data)->render();
        return $view;
    }
    public static function privat_retail($main_path,$path,$data,$data_nav,$data_content)
    {
        if($path==null){
            $path=$main_path;
        }

        $view=view($path.'.preheader_view',$data)->render();
       $view.=view($main_path.'.header_view')->render();
       $view.=view($main_path.'.main_navigation_view',$data_nav)->render();
        $view.=view($main_path.'.main_content_view',$data,$data_nav)->render();
        /*$view.=view($path.'.main_aside_view',$data)->render();*/
        $view.=view($path.'.footer_view',$data)->render();
        return $view;
    }

    public static function privat_self($path,$data,$data_nav,$data_content)
    {
        $view=view($path.'.preheader_view',$data)->render();
        $view.=view($path.'.header_view')->render();
        $view.=view($path.'.main_navigation_view',$data_nav)->render();
        $view.=view($path.'.main_content_view',$data,$data_nav)->render();
        /*$view.=view($path.'.main_aside_view',$data)->render();*/
        $view.=view($path.'.footer_view',$data)->render();
        return $view;
    }
    public static function cabinet($path,$data,$data_nav,$data_content,$data_cab)
    {

       
        $view=view('preheader_view',$data)->render();
        $view.=view('header_view')->render();
        $view.=view('main_navigation_view',$data_nav)->render();
        $view.=view('cabinet_nav_view',$data_cab,$data_content)->render();
        $view.=view($path.'.main_content_view',$data_content)->render();
        $view.=view($path.'.main_aside_view',$data)->render();
        $view.=view('footer_view',$data)->render();
        return $view;
    }
    public static function site($path,$data,$data_nav,$data_content)
    {

       $view=view('site/preheader_view',$data)->render();

      $view.=view($path.'.header_view')->render();
       $view.=view($path.'.main_navigation_view',$data_nav)->render();
       $view.=view($path.'.main_content_view',$data_content)->render();
       $view.=view($path.'.main_aside_view',$data)->render();
       $view.=view($path.'.footer_view',$data)->render();
        return $view;
    }

}