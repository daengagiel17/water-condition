@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>AUTO SELENOID</h1>
      {{-- <ol class="breadcrumb">
          <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Data Follow Up</li>
        </ol> --}}
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
            <!-- Jarak CHART -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Data Jarak</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body" style="">
                <div class="chart">
                  <canvas id="jarakChart" style="height: 249px; width: 555px;" width="1110" height="498"></canvas>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->  
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <!-- PH CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data PH</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="">
              <div class="chart">
                <canvas id="phChart" style="height: 249px; width: 555px;" width="1110" height="498"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->  
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-xs-6">
          {{-- Biru primary hijau success merah danger kuning warning --}}
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Air</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID Water</th>
                    <th>Time Arrived</th>
                    <th>Value Jarak</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($dataAirs as $dataAir)
                  <tr>
                    <td>{{$dataAir->id}}</td>
                    <td>{{$dataAir->date}}</td>
                    <td>{{$dataAir->jarak}}</td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID Water</th>
                    <th>Time Arrived</th>
                    <th>Value Jarak</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-xs-6">
          {{-- Biru primary hijau success merah danger kuning warning --}}
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Air</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID Water</th>
                    <th>Time Arrived</th>
                    <th>Value PH</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($dataAirs as $dataAir)
                  <tr>
                    <td>{{$dataAir->id}}</td>
                    <td>{{$dataAir->date}}</td>
                    <td>{{$dataAir->ph}}</td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID Water</th>
                    <th>Time Arrived</th>
                    <th>Value PH</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->        
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('js-script')
  <!-- jQuery 3 -->
  <script src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- DataTables -->
  <script src="{{url('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{url('bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{url('dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{url('dist/js/demo.js')}}"></script>
  <!-- ChartJS -->
  <script src="bower_components/chart.js/Chart.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- page script -->
  <script>
    $(function () {
        /* ChartJS
        * -------
        * Here we will create a few charts using ChartJS
        */
        $.ajax({
          type: 'GET',
          url: '/detail/data',
          headers : {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(data) {
            console.log("Sukses", data);
            //--------------
            //- JARAK CHART -
            //--------------            
            // Get context with jQuery - using jQuery's .get() method.
            var areaChartCanvas = $('#jarakChart').get(0).getContext('2d')
            // This will get the first returned node in the jQuery collection.
            var areaChart       = new Chart(areaChartCanvas)

            var areaChartData = {
              labels  : data.waktu,
              datasets: [{
                  label               : 'Digital Goods',
                  fillColor           : 'rgba(60,141,188,0.9)',
                  strokeColor         : 'rgba(60,141,188,0.8)',
                  pointColor          : '#3b8bba',
                  pointStrokeColor    : 'rgba(60,141,188,1)',
                  pointHighlightFill  : '#fff',
                  pointHighlightStroke: 'rgba(60,141,188,1)',
                  data                : data.jarak
              }]
            }

            var areaChartOptions = {
              //Boolean - If we should show the scale at all
              showScale               : true,
              //Boolean - Whether grid lines are shown across the chart
              scaleShowGridLines      : false,
              //String - Colour of the grid lines
              scaleGridLineColor      : 'rgba(0,0,0,.05)',
              //Number - Width of the grid lines
              scaleGridLineWidth      : 1,
              //Boolean - Whether to show horizontal lines (except X axis)
              scaleShowHorizontalLines: true,
              //Boolean - Whether to show vertical lines (except Y axis)
              scaleShowVerticalLines  : true,
              //Boolean - Whether the line is curved between points
              bezierCurve             : true,
              //Number - Tension of the bezier curve between points
              bezierCurveTension      : 0.3,
              //Boolean - Whether to show a dot for each point
              pointDot                : false,
              //Number - Radius of each point dot in pixels
              pointDotRadius          : 4,
              //Number - Pixel width of point dot stroke
              pointDotStrokeWidth     : 1,
              //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
              pointHitDetectionRadius : 20,
              //Boolean - Whether to show a stroke for datasets
              datasetStroke           : true,
              //Number - Pixel width of dataset stroke
              datasetStrokeWidth      : 2,
              //Boolean - Whether to fill the dataset with a color
              datasetFill             : true,
              //String - A legend template
              legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
              //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
              maintainAspectRatio     : true,
              //Boolean - whether to make the chart responsive to window resizing
              responsive              : true
            }

            //Create the line chart
            areaChart.Line(areaChartData, areaChartOptions)      
            
            //--------------
            //- PH CHART -
            //--------------            
            // Chart.defaults.scale.ticks.beginAtZero = true;
            // Get context with jQuery - using jQuery's .get() method.
            var areaChartCanvas = $('#phChart').get(0).getContext('2d')
            // This will get the first returned node in the jQuery collection.
            var areaChart       = new Chart(areaChartCanvas)

            var areaChartData = {
              labels  : data.waktu,
              datasets: [{
                  label               : 'Digital Goods',
                  fillColor           : 'rgba(60,141,188,0.9)',
                  strokeColor         : 'rgba(60,141,188,0.8)',
                  pointColor          : '#3b8bba',
                  pointStrokeColor    : 'rgba(60,141,188,1)',
                  pointHighlightFill  : '#fff',
                  pointHighlightStroke: 'rgba(60,141,188,1)',
                  data                : data.ph
              }]
            }

            var areaChartOptions = {
              //Boolean - If we should show the scale at all
              showScale               : true,
              //Boolean - Whether grid lines are shown across the chart
              scaleShowGridLines      : false,
              //String - Colour of the grid lines
              scaleGridLineColor      : 'rgba(0,0,0,.05)',
              //Number - Width of the grid lines
              scaleGridLineWidth      : 1,
              //Boolean - Whether to show horizontal lines (except X axis)
              scaleShowHorizontalLines: true,
              //Boolean - Whether to show vertical lines (except Y axis)
              scaleShowVerticalLines  : true,
              //Boolean - Whether the line is curved between points
              bezierCurve             : true,
              //Number - Tension of the bezier curve between points
              bezierCurveTension      : 0.3,
              //Boolean - Whether to show a dot for each point
              pointDot                : false,
              //Number - Radius of each point dot in pixels
              pointDotRadius          : 4,
              //Number - Pixel width of point dot stroke
              pointDotStrokeWidth     : 1,
              //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
              pointHitDetectionRadius : 20,
              //Boolean - Whether to show a stroke for datasets
              datasetStroke           : true,
              //Number - Pixel width of dataset stroke
              datasetStrokeWidth      : 2,
              //Boolean - Whether to fill the dataset with a color
              datasetFill             : true,
              //String - A legend template
              legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
              //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
              maintainAspectRatio     : true,
              //Boolean - whether to make the chart responsive to window resizing
              responsive              : true
            }

            //Create the line chart
            areaChart.Line(areaChartData, areaChartOptions)           
            
          },
          error: function(data){
            alert("Koneksi anda tidak stabil. Mohon perbaiki koneksi anda dan lanjutkan transaksi");
            console.log(data);
          }
        });
    })
    </script>
  @endsection