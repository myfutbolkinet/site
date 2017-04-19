<?PHP

namespace App\Http\Libraries;

use Illuminate\Http\Request;
class Display_lib
{
    public static $num;
    public static function index($path,$data,$data_nav,$data_content)
    {
        
        $view=view($path.'.preheader_view',$data)->render();
        $view.=view('header_view',$data_nav)->render();

        $view.=view($path.'.main_content_view',$data_content)->render();

        $view.=view('footer_view',$data)->render();
        return $view;
    }

    public static function first_page($path,$data,$data_nav,$data_content)
    {

        $view=view($path.'.preheader_view',$data)->render();
        $view.=view($path.'.header_view',$data_nav)->render();
        $view.=view($path.'.main_content_view',$data_content)->render();
        $view.=view('footer_view',$data)->render();
        return $view;
    }

    public static function good_page($path,$data,$data_nav,$data_content)
    {

        $view=view($path.'.preheader_view',$data)->render();
        $view.=view('header_view',$data_nav)->render();
        /*$view.=view('main_navigation_view',$data_nav)->render();*/
        $view.=view($path.'.main_content_view',$data_content)->render();
        /*$view.=view($path.'.main_aside_view',$data)->render();*/
        $view.=view('footer_view',$data)->render();
        return $view;
    }

    public static function cart($path,$data_nav,$data_content)
    {

        $view=view($path.'.preheader_view')->render();
        $view.=view('header_view',$data_nav)->render();
        /*$view.=view('main_navigation_view',$data_nav)->render();*/
        $view.=view($path.'.main_content_view',$data_content)->render();
        /*$view.=view($path.'.main_aside_view',$data)->render();*/
        $view.=view('footer_view')->render();
        return $view;
    }
    public static function admin($path,$data,$data_nav)
    {
        session()->forget('file_logo_image');
        session()->forget('file_name');
        session()->forget('file_name_main_image');
        session()->forget('variable');
        $view=view($path.'.preheader_view',$data)->render();
        $view.=view('admin_page.header_view')->render();
        $view.=view('admin_page.main_navigation_view',$data_nav)->render();
        $view.=view($path.'.main_content_view',$data)->render();
        /*$view.=view($path.'.main_aside_view',$data)->render();*/
        $view.=view($path.'.footer_view',$data)->render();
        return $view;
    }

    public static function cabinet($path,$data,$data_nav,$data_content,$data_cab)
    {

       
        $view=view($path.'.preheader_view',$data)->render();
        $view.=view('header_view',$data_content)->render();
        $view.=view('main_navigation_view',$data_nav)->render();
        $view.=view('cabinet_nav_view',$data_cab,$data_content)->render();
        $view.=view($path.'.main_content_view',$data_content)->render();
        $view.=view($path.'.main_aside_view',$data)->render();
        $view.=view($path.'.footer_view',$data)->render();
        return $view;
    }
}