@extends('site_admin_page.themes.site_pages_menu.nav_good_app')

@section('title', 'Main page')

@section('content')

    <div id="main" role="main" style="">

        <!-- MAIN CONTENT -->
        <div id="content">

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-8">
            <h2>Wizard</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a>Forms</a>
                </li>
                <li class="active">
                    <strong>Wizard</strong>
                </li>
            </ol>

        </div>
        <form class="smart-form col-lg-4" style="margin-top:45px;">


                    <label class="label">Вы можете выбрать между вашими сайтами</label>
                    <label class="select">
                        <select id="site_select">
                             @foreach($sites as $key=>$site)
                            <option @if($key==0) selected @endif value="{{$site->id}}">{{$site->domain}}</option>
                            @endforeach
                        </select> <i></i> </label>


        </form>

    </div>




    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">




                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <h2>
                        Форма редактирования меню Вашего сайта
                    </h2>
                    <p>
                        Выбирайте категории подключайте уже добавленные ранее страницы и перемещайте их
                    </p>


                    <div id="nestable-menu">
                        <button type="button" class="btn btn-default" data-action="expand-all">
                            Expand All
                        </button>
                        <button type="button" class="btn btn-default" data-action="collapse-all">
                            Collapse All
                        </button>
                    </div>


                    <div class="col-sm-6 col-lg-4">

                        <h6>Nestable List #3 (with drag handle)</h6>

                        <div class="dd" id="nestable_pages_menu">

                        </div>

                    </div>

                    <textarea id="nestable2-output" rows="3" class="form-control font-md"></textarea>

                        <div class="row">
                            <button type="button" class="btn_save_categories btn btn-primary btn-lg">Сохранить изменения</button>
                        </div>




                </div>
            </div>
        </div>

    </div>









    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Welcome in Magelan Laravel Starter Project
                            </h1>
                            <small>
                                It is an application skeleton for a typical web ecommerce app. You can use it to quickly bootstrap your webapp projects.
                            </small>
                        </div>
                    </div>
                </div>
    </div>

        </div>
    </div>

@endsection

@section('footer_scripts')
    <script>
    console.log('footer_scripts')
    reloadData($('#site_select').val(),'nestable_pages_menu')

    </script>

    @endsection