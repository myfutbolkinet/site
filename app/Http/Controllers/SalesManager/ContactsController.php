<?php

namespace App\Http\Controllers\SalesManager;

use App\Answer_status;
use App\Http\Controllers\FunctionsController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use DB;
use App\Category;
use App\Property;


class ContactsController extends SalesManagerController
{
    //

    public function __construct()
    {

    }


    public function index(){
        if(Gate::denies('SUPERADMIN_SALES')){

            abort(403);
        }

        $data=array();
        $this->title = 'Панель администратора';
        $data['menu']=$this->menu();
        $data['contacts']=DB::table('contacts')->get();

        /**/
        return view('salesmanager/contacts',$data);
    }


    public function show_contact($id){
        if(Gate::denies('SUPERADMIN_SALES')){

            abort(403);
        }
        $data=array();
        $data['categories']=Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        $data['menu']=$this->menu();
        $data['answer_statuses']=Answer_status::get();
        $data['date']=date('m/d/Y');
        $data['contact']=DB::table('contacts')->where('id',$id)->get();
        $data['contact'][0]->last_call=date("m/d/Y", strtotime(stripslashes( $data['contact'][0]->last_call)));
        $data['contact'][0]->next_call=date("m/d/Y", strtotime(stripslashes( $data['contact'][0]->next_call)));

        $this->title = 'Панель администратора';

        return view('salesmanager/contact',$data);
    }


    public function add_show(){
        if(Gate::denies('SUPERADMIN_SALES')){

            abort(403);
        }
        $data=array();
        $data['categories']=Category::orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        $data['answer_statuses']=Answer_status::get();

        $data['menu']=$this->menu();
        $data['date']=date('m/d/Y');
        $this->title = 'Панель администратора';
        return view('salesmanager/add_contact',$data);
    }

    public function add_contact(Request $request){


        $userDate = str_replace('-', '/', $request->input('next_call'));
        $post_date = date("M-d-y", strtotime(stripslashes($userDate)));
        $date = date_create_from_format('M-d-y', $post_date);
        $next_date =date_format($date, 'Y-m-d');
        $userDate = str_replace('-', '/', $request->input('last_call'));
        $post_date = date("M-d-y", strtotime(stripslashes($userDate)));
        $date = date_create_from_format('M-d-y', $post_date);
        $last_date =date_format($date, 'Y-m-d');

    $data=[
        'number_of_contacts'=>$request->input('number_of_contacts'),
        'name'=>$request->input('name'),
        'company_name'=>$request->input('company_name'),
        'status'=>$request->input('status'),
        'mobile'=>$request->input('mobile'),
        'add_phone'=>$request->input('add_phone'),
        'email'=>$request->input('email'),
        'website'=>$request->input('website'),
        'skype'=>$request->input('skype'),
        'answer_status'=>$request->input('answer_status'),
        'wishes'=>$request->input('wishes'),
        'description_of_last_call'=>$request->input('description_of_last_call'),
        'last_call'=>$last_date,
        'next_call'=>$next_date,
        'city'=>$request->input('city'),
        'street'=>$request->input('street'),
        'house'=>$request->input('house'),
        'index'=>$request->input('index'),
        'office'=>$request->input('office'),
        ];
        DB::table('contacts')->insert($data);


return redirect('/salesmanager/contacts');
    }


    public function edit_contact_form(Request $request){

        $userDate = str_replace('-', '/', $request->input('next_call'));
        $post_date = date("M-d-y", strtotime(stripslashes($userDate)));
        $date = date_create_from_format('M-d-y', $post_date);
        $next_date =date_format($date, 'Y-m-d');
        $userDate = str_replace('-', '/', $request->input('last_call'));
        $post_date = date("M-d-y", strtotime(stripslashes($userDate)));
        $date = date_create_from_format('M-d-y', $post_date);
        $last_date =date_format($date, 'Y-m-d');

        $data=[
            'number_of_contacts'=>$request->input('number_of_contacts'),
            'name'=>$request->input('name'),
            'company_name'=>$request->input('company_name'),
            'status'=>$request->input('status'),
            'mobile'=>$request->input('mobile'),
            'add_phone'=>$request->input('add_phone'),
            'email'=>$request->input('email'),
            'website'=>$request->input('website'),
            'skype'=>$request->input('skype'),
            'answer_status'=>$request->input('answer_status'),
            'wishes'=>$request->input('wishes'),
            'description_of_last_call'=>$request->input('description_of_last_call'),
            'last_call'=>$last_date,
            'next_call'=>$next_date,
            'city'=>$request->input('city'),
            'street'=>$request->input('street'),
            'house'=>$request->input('house'),
            'index'=>$request->input('index'),
            'office'=>$request->input('office'),
        ];
        DB::table('contacts')->where('id',$request->input('id'))->update($data);
        return redirect('salesmanager/contacts');

    }
}
