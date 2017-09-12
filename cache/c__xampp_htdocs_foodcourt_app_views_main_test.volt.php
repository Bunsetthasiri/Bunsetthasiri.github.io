<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../public/files/gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../public/files/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../public/files/gentelella-master/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../public/files/gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../public/files/gentelella-master/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="test" class="site_title"><i class="fa fa-cutlery"></i> <span>FoodCourt</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/1/005/01a/187/19508ae.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Prayut Chan-o-cha</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                   
                  </li>
                  <li><a><i class="fa fa-desktop"></i>ข้อมูลร้านค้า <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/1/005/01a/187/19508ae.jpg" alt="">Prayut Chan-o-cha
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">


          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-bar-chart"></i></div>
                  <div class="count">179,054</div>
                  <h3>เงินในระบบ</h3>
                  <p>test</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count">2,014</div>
                  <h3>จำนวนผู้ใช้</h3>
                  <p>test</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-plus-square"></i></div>
                  <div class="count">50,478</div>
                  <h3>ยอดเงินเข้า</h3>
                  <p>test</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-minus-square"></i></div>
                  <div class="count">15,456</div>
                  <h3>ยอดเงินออก</h3>
                  <p>test</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <!-- chart -->
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/data.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
          <div class="col-md-6">
            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
              <table id="datatable1">
                <thead>
                  <tr>
                    <th></th>
                    <th>รายรับ</th>
                    <th>รายจ่าย</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>จันทร์</th>
                    <td>120354</td>
                    <td>70651</td>
                  </tr>
                  <tr>
                    <th>อังคาร</th>
                    <td>27650</td>
                    <td>16540</td>
                  </tr>
                  <tr>
                    <th>พุธ</th>
                    <td>58790</td>
                    <td>32010</td>
                  </tr>
                  <tr>
                    <th>พฤหัสบดี</th>
                    <td>30210</td>
                    <td>13500</td>
                  </tr>
                  <tr>
                    <th>ศุกร์</th>
                    <td>26450</td>
                    <td>15640</td>
                  </tr>
                </tbody>
              </table>
          </div>
            <div class="col-md-6">
            <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
              <table id="datatable">
                <thead>
                  <tr>
                    <th></th>
                    <th>รายรับ</th>
                    <th>ต้นทุน</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>ร้านข้าวมันไก่</th>
                    <td>5262</td>
                    <td>2240</td>
                  </tr>
                  <tr>
                    <th>ร้านข้าวขาหมู</th>
                    <td>2765</td>
                    <td>1654</td>
                  </tr>
                  <tr>
                    <th>ร้านข้าวราดแกง</th>
                    <td>5879</td>
                    <td>3201</td>
                  </tr>
                  <tr>
                    <th>ร้านทอดรวม</th>
                    <td>3021</td>
                    <td>1350</td>
                  </tr>
                  <tr>
                    <th>ร้านน้ำปั่น</th>
                    <td>2645</td>
                    <td>1564</td>
                  </tr>
                </tbody>
              </table>
          </div>
                

<script>
Highcharts.chart('container', {
    data: {
        table: 'datatable1'
        
    },
    colors: ['#a8f252','#ffb593'],
    chart: {
        type: 'column'
    },
    title: {
        text: 'รายรับและรายจ่ายในแต่ละวัน'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
Highcharts.chart('container2', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'รายรับและต้นทุนในแต่ละร้านค้า'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
</script>

<!-- chart -->

                
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../public/files/gentelella-master/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../public/files/gentelella-master/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../public/files/gentelella-master/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../public/files/gentelella-master/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../public/files/gentelella-master/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../public/files/gentelella-master/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../public/files/gentelella-master/vendors/Flot/jquery.flot.js"></script>
    <script src="../public/files/gentelella-master/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../public/files/gentelella-master/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../public/files/gentelella-master/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../public/files/gentelella-master/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../public/files/gentelella-master/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../public/files/gentelella-master/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../public/files/gentelella-master/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../public/files/gentelella-master/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../public/files/gentelella-master/vendors/moment/min/moment.min.js"></script>
    <script src="../public/files/gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../public/files/gentelella-master/build/js/custom.min.js"></script>
    
  </body>
</html>