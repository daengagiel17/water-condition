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
        <div class="col-xs-12">
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
                    <th>Date</th>
                    <th>Jarak</th>
                    <th>PH</th>
                    <th>Warna</th>
                    <th>Selenoid A</th>
                    <th>Selenoid B</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($water_datas as $water_data)
                  <tr>
                    <td>{{$water_data->id}}</td>
                    <td>{{$water_data->date}}</td>
                    <td>{{$water_data->jarak}}</td>
                    <td>{{$water_data->ph}}</td>
                    <td>{{$water_data->warna}}</td>
                    <td>{{$water_data->selenoidA}}</td>
                    <td>{{$water_data->selenoidB}}</td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID Water</th>
                    <th>Date</th>
                    <th>Jarak</th>
                    <th>PH</th>
                    <th>Warna</th>
                    <th>Selenoid A</th>
                    <th>Selenoid B</th>
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
      <!-- /.row -->
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
  <!-- page script -->
@endsection