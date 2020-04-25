    <!-- NEW WIDGET START -->
    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-editbutton="false">
            <!-- widget options:
            usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

            data-widget-colorbutton="false"
            data-widget-editbutton="false"
            data-widget-togglebutton="false"
            data-widget-deletebutton="false"
            data-widget-fullscreenbutton="false"
            data-widget-custombutton="false"
            data-widget-collapsed="true"
            data-widget-sortable="false"

            -->
            <header>
                <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                <h2>Column Filters </h2>

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

                    <table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">

                        <thead>
                        <tr>
                            <th class="hasinput" style="width:10%">
                                <input type="text" class="form-control" placeholder="Find ID" />
                            </th>
                            <th class="hasinput" style="width:12%">
                                <input type="text" class="form-control" placeholder="Filter Cust ID" />
                            </th>
                            <th class="hasinput icon-addon">
                                <input id="dateselect_filter" type="text" placeholder="Purchase Date" class="form-control datepicker" data-dateformat="yy/mm/dd">
                                <label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Purchase Date"></label>
                            </th>
                            <th class="hasinput">
                                <input type="text" class="form-control" placeholder="Delivery Date" />
                            </th>
                            <th class="hasinput" style="width:12%">
                                <input type="text" class="form-control" placeholder="Base Price Filter" />
                            </th>
                            <th class="hasinput" style="width:10%">
                                <input type="text" class="form-control" placeholder="ZipCode Filter" />
                            </th>
                            <th class="hasinput" style="width:10%">
                                <input type="text" class="form-control" placeholder="Status Filter" />
                            </th>

                        </tr>
                        <tr>
                            <th data-class="expand">Order ID</th>
                            <th >Cust ID / Phn</th>
                            <th data-hide="phone, tablet">Время создания</th>
                            <th data-hide="phone, tablet">Время доставки</th>
                            <th data-hide="phone,tablet">Общая цена</th>
                            <th data-hide="phone,tablet">Город доставки</th>
                            <th>Status</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->order_nr}}</td>
                            <td>418-109-1913</td>
                            <td>{{$order->created_at}}</td>
                            <td>2015/01/08</td>
                            <td>$94.56</td>
                            <td>{{$order->client_city}}</td>
                            <td><span class="center-block padding-5 label label-success">{{$order->status}}</span></td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>
        <!-- end widget -->

    </article>
