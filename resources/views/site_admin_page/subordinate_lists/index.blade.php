@extends('site_admin_page.app_lists')

@section('title', 'Main page')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Wizard</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a>Forms</a>
                </li>
                <li class="active">
                    <strong>Подчиненные списки</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>



    <div class="well well-sm well-light">
        <h3>Jquery Tabs
            <br>
            <small>Simple Tabs</small></h3>

        <div id="tabs">
            <ul>
                <li>
                    <a href="#tabs-a">Сезон</a>
                </li>
                <li>
                    <a href="#tabs-b">Вид изделия</a>
                </li>
                <li>
                    <a href="#tabs-c">Ткань</a>
                </li>
                <li>
                    <a href="#tabs-d">Размеры</a>
                </li>
                <li>
                    <a href="#tabs-e">Отделка</a>
                </li>
            </ul>
            <div id="tabs-a" style="min-height:200px;">
                    <div class="row">
                      <div id="seasonForm" class="smart-form">
                          <div class="col-md-4">
                          <section style="width:95%">
                              <label class="label">Добавить новый сезон</label>
                              <label class="input">
                                  <input style="width:100%" type="text" class="input-lg">
                              </label>
                          </section>
                          </div>
                          <div class="col-md-1">
                              <footer style="background-color:#fff;border-top:1px solid #fff">
                                  <button style="margin-top:20px;" type="submit" class="btn btn-primary">
                                      Добавить
                                  </button>

                              </footer>
                          </div>

                      </div>
                    </div>

                <div class="row">
                    <div class="col-md-8">

                        <!-- widget grid -->
                        <section id="widget-grid" class="">

                            <!-- row -->
                            <div class="row">

                                <!-- NEW WIDGET START -->
                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                    <!-- Widget ID (each widget will need unique ID)-->
                                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                                            <h2>Сезоны </h2>

                                        </header>

                                        <!-- widget div-->
                                        <div>

                                            <!-- widget edit box -->
                                            <div class="jarviswidget-editbox">
                                                <!-- This area used as dropdown edit box -->

                                            </div>
                                            <!-- end widget edit box -->

                                            <!-- widget content -->
                                            <div class="widget-body no-padding">

                                                <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> ID</th>
                                                        <th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Название сезона</th>
                                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Удалить</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="seasons">
                                                    </tbody>
                                                </table>

                                            </div>
                                            <!-- end widget content -->

                                        </div>
                                        <!-- end widget div -->

                                    </div>
                                    <!-- end widget -->
                                </article>
                            </div>
                        </section>














                    </div>

                </div>

            </div>
            <div id="tabs-b" style="min-height:200px;">
                <div class="row">
                    <div  class="smart-form">
                        <div class="col-md-4">
                            <section style="width:95%">
                                <label class="label">Добавить вид изделия</label>
                                <label class="input">
                                    <input style="width:100%" type="text" class="input-lg">
                                </label>
                            </section>
                        </div>
                        <div class="col-md-1">
                            <footer style="background-color:#fff;border-top:1px solid #fff">
                                <button id="productForm" style="margin-top:20px;" class="btn btn-primary">
                                    Добавить
                                </button>

                            </footer>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">

                        <!-- widget grid -->
                        <section id="widget-grid" class="">

                            <!-- row -->
                            <div class="row">

                                <!-- NEW WIDGET START -->
                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                    <!-- Widget ID (each widget will need unique ID)-->
                                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                                            <h2>Виды изделия </h2>

                                        </header>

                                        <!-- widget div-->
                                        <div>

                                            <!-- widget edit box -->
                                            <div class="jarviswidget-editbox">
                                                <!-- This area used as dropdown edit box -->

                                            </div>
                                            <!-- end widget edit box -->

                                            <!-- widget content -->
                                            <div class="widget-body no-padding">

                                                <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> ID</th>
                                                        <th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Название вида изделия</th>
                                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Удалить</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="products">
                                                    </tbody>
                                                </table>

                                            </div>
                                            <!-- end widget content -->

                                        </div>
                                        <!-- end widget div -->

                                    </div>
                                    <!-- end widget -->
                                </article>
                            </div>
                        </section>














                    </div>

                </div>
            </div>
            <div id="tabs-c" style="min-height:200px;">
                <div class="row">
                    <div  class="smart-form">
                        <div class="col-md-4">
                            <section style="width:95%">
                                <label class="label">Добавить Ткань</label>
                                <label class="input">
                                    <input style="width:100%" type="text" class="input-lg">
                                </label>
                            </section>
                        </div>
                        <div class="col-md-1">
                            <footer style="background-color:#fff;border-top:1px solid #fff">
                                <button id="fabricForm" style="margin-top:20px;" class="btn btn-primary">
                                    Добавить
                                </button>

                            </footer>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">

                        <!-- widget grid -->
                        <section id="widget-grid" class="">

                            <!-- row -->
                            <div class="row">

                                <!-- NEW WIDGET START -->
                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                    <!-- Widget ID (each widget will need unique ID)-->
                                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                                            <h2>Ткани </h2>

                                        </header>

                                        <!-- widget div-->
                                        <div>

                                            <!-- widget edit box -->
                                            <div class="jarviswidget-editbox">
                                                <!-- This area used as dropdown edit box -->

                                            </div>
                                            <!-- end widget edit box -->

                                            <!-- widget content -->
                                            <div class="widget-body no-padding">

                                                <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> ID</th>
                                                        <th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Название ткани</th>
                                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Удалить</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="fabrics">
                                                    </tbody>
                                                </table>

                                            </div>
                                            <!-- end widget content -->

                                        </div>
                                        <!-- end widget div -->

                                    </div>
                                    <!-- end widget -->
                                </article>
                            </div>
                        </section>














                    </div>

                </div>
            </div>
            <div id="tabs-d" style="min-height:200px;">
                <div class="row">
                    <div  class="smart-form">
                        <div class="col-md-4">
                            <section style="width:95%">
                                <label class="label">Добавить Размер</label>
                                <label class="input">
                                    <input style="width:100%" type="text" class="input-lg">
                                </label>
                            </section>
                        </div>
                        <div class="col-md-1">
                            <footer style="background-color:#fff;border-top:1px solid #fff">
                                <button id="sizeForm" style="margin-top:20px;" class="btn btn-primary">
                                    Добавить
                                </button>

                            </footer>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">

                        <!-- widget grid -->
                        <section id="widget-grid" class="">

                            <!-- row -->
                            <div class="row">

                                <!-- NEW WIDGET START -->
                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                    <!-- Widget ID (each widget will need unique ID)-->
                                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                                            <h2>Размеры </h2>

                                        </header>

                                        <!-- widget div-->
                                        <div>

                                            <!-- widget edit box -->
                                            <div class="jarviswidget-editbox">
                                                <!-- This area used as dropdown edit box -->

                                            </div>
                                            <!-- end widget edit box -->

                                            <!-- widget content -->
                                            <div class="widget-body no-padding">

                                                <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> ID</th>
                                                        <th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Название размера</th>
                                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Удалить</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="sizes">
                                                    </tbody>
                                                </table>

                                            </div>
                                            <!-- end widget content -->

                                        </div>
                                        <!-- end widget div -->

                                    </div>
                                    <!-- end widget -->
                                </article>
                            </div>
                        </section>














                    </div>

                </div>
            </div>
            <div id="tabs-e" style="min-height:200px;">
                <div class="row">
                    <div  class="smart-form">
                        <div class="col-md-4">
                            <section style="width:95%">
                                <label class="label">Добавить Отделку</label>
                                <label class="input">
                                    <input style="width:100%" type="text" class="input-lg">
                                </label>
                            </section>
                        </div>
                        <div class="col-md-1">
                            <footer style="background-color:#fff;border-top:1px solid #fff">
                                <button id="decorationForm" style="margin-top:20px;" class="btn btn-primary">
                                    Добавить
                                </button>

                            </footer>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">

                        <!-- widget grid -->
                        <section id="widget-grid" class="">

                            <!-- row -->
                            <div class="row">

                                <!-- NEW WIDGET START -->
                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                    <!-- Widget ID (each widget will need unique ID)-->
                                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                                            <h2>Отделка </h2>

                                        </header>

                                        <!-- widget div-->
                                        <div>

                                            <!-- widget edit box -->
                                            <div class="jarviswidget-editbox">
                                                <!-- This area used as dropdown edit box -->

                                            </div>
                                            <!-- end widget edit box -->

                                            <!-- widget content -->
                                            <div class="widget-body no-padding">

                                                <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> ID</th>
                                                        <th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Название отделки</th>
                                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Удалить</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="decorations">
                                                    </tbody>
                                                </table>

                                            </div>
                                            <!-- end widget content -->

                                        </div>
                                        <!-- end widget div -->

                                    </div>
                                    <!-- end widget -->
                                </article>
                            </div>
                        </section>














                    </div>

                </div>
            </div>
        </div>


    </div>




@endsection



