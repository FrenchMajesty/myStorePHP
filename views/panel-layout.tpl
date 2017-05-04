<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{@sitename} Panel - {@pageName}</title>
    <!-- Bootstrap Styles-->
    <link href="{@sitelink}/source/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{@sitelink}/source/css/font.awesome.min.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{@sitelink}/source/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{@sitelink}/source/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="{@sitelink}/source/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <link href="{@sitelink}/source/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <!-- jQuery Js -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{@sitelink}/admin/"><i class="fa fa-gear"></i> <strong>{@sitename} PANEL</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{@sitelink}/panel/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="{@sitelink}/admin/"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{@sitelink}/admin/orders"><i class="fa fa-history"></i>Orders</a>
                    </li>
					<li>
                        <a href="{@sitelink}/admin/products"><i class="fa fa-edit"></i> Products</a>
                    </li>
                    <li>
                        <a href="{@sitelink}/admin/users"><i class="fa fa-user"></i> Users</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cog"></i> Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
        {@pageContent}
            </div>
           <footer><p>All right reserved. By Verdi.K Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
       </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- Bootstrap Js -->
    <script>
        $(function() {
            // Highlight current page in navbar
            $('ul.nav a:contains("{@pageName}")').addClass('active-menu')
        })
    </script>
    <script src="{@sitelink}/source/js/bootstrap.min.js"></script>

    <!-- Metis Menu Js -->
    <script src="{@sitelink}/source/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="{@sitelink}/source/js/morris/raphael-2.1.0.min.js"></script>
    <script src="{@sitelink}/source/js/morris/morris.js"></script>


	<script src="{@sitelink}/source/js/easypiechart.js"></script>
	<script src="{@sitelink}/source/js/easypiechart-data.js"></script>

	 <script src="{@sitelink}/source/js/Lightweight-Chart/jquery.chart.js"></script>

    <!-- Custom Js -->
    <script src="{@sitelink}/source/js/custom-scripts.js"></script>

    <script src="{@sitelink}/source/js/dataTables/jquery.dataTables.js"></script>
    <script src="{@sitelink}/source/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>

    <!-- file upload input -->
    <!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
         This must be loaded before fileinput.min.js -->
    <script src="{@sitelink}/source/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
    <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
         This must be loaded before fileinput.min.js -->
    <script src="{@sitelink}/source/js/plugins/sortable.min.js" type="text/javascript"></script>
    <!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
         This must be loaded before fileinput.min.js -->
    <script src="{@sitelink}/source/js/plugins/purify.min.js" type="text/javascript"></script>
    <!-- the main fileinput plugin file -->
    <script src="{@sitelink}/source/js/fileinput.min.js"></script>

</body>

</html>
