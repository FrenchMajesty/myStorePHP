        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Dashboard <small>Summary of your stats</small>
                </h1>
                <ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li><a href="#">Library</a></li>
<li class="active">Data</li>
</ol>
            </div>
        </div>


        <!-- /. ROW  -->

        <div class="row">

            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                      <div class="panel-left pull-left blue">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>

                    <div class="panel-right">
                    <h3> {@salesCount} </h3>
                       <strong> Sales</strong>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-red">
                    <div class="panel-left pull-left red">
                        <i class="fa fa fa-users fa-5x"></i>

                    </div>
                    <div class="panel-right">
                     <h3> {@userCount} </h3>
                       <strong>Users </strong>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-green green">
                    <div class="panel-left pull-left green">
                        <i class="fa fa-eye fa-5x"></i>

                    </div>
                    <div class="panel-right">
                        <h3>8,457</h3>
                       <strong>Daily Visits</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-brown">
                    <div class="panel-left pull-left brown">
                        <i class="fa fa-globe fa-5x"></i>

                    </div>
                    <div class="panel-right">
                    <h3>36,752 </h3>
                     <strong>No. of Visits</strong>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-5">
                <div class="panel panel-default">
                <div class="panel-heading">
                    Area Chart
                </div>
                <div class="panel-body">
                    <div id="morris-area-chart"></div>
                </div>
            </div>
            </div>

                <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Line Chart
                </div>
                <div class="panel-body">
                    <div id="morris-line-chart"></div>
                </div>
            </div>
            </div>

        </div>



<div class="row">
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Customers</h4>
                <div class="easypiechart" id="easypiechart-blue" data-percent="82" ><span class="percent">82%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Sales</h4>
                <div class="easypiechart" id="easypiechart-orange" data-percent="55" ><span class="percent">55%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Profits</h4>
                <div class="easypiechart" id="easypiechart-teal" data-percent="84" ><span class="percent">84%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>No. of Visits</h4>
                <div class="easypiechart" id="easypiechart-red" data-percent="46" ><span class="percent">46%</span>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->


        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Bar Chart Example
                    </div>
                    <div class="panel-body">
                        <div id="morris-bar-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Donut Chart Example
                    </div>
                    <div class="panel-body">
                        <div id="morris-donut-chart"></div>
                    </div>
                </div>
            </div>

        </div>
