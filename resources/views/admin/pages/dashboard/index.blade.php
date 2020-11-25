@extends('admin.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{ $count_order }}</h3>
            <p>All Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{ $count_product }}</h3>
            <p>All Product</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{ $count_customer }}</h3>
            <p>All Customer</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->
      {{-- <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>65</h3>
            <p>Unique Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col --> --}}
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-6">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Produk Terlaris</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <table id="terlaris" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Product</th>
                            <th>Total Sold</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produk_terlaris as $item)
                            <tr>
                                <td>{{ $item->year_id }}</td>
                                <td>{{ $item->product_name }}</td>
                                <td>{{ $item->total_sold }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>

        <div class="col-md-6">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Produk Kurang Laris</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <table id="terlaris" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Product</th>
                            <th>Total Sold</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produk_kurang_terlaris as $item)
                            <tr>
                                <td>{{ $item->year_id }}</td>
                                <td>{{ $item->product_name }}</td>
                                <td>{{ $item->total_sold }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Sales</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tahun</th>
                                <th>Region</th>
                                <th>Total Sales</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sales as $item)
                                <tr>
                                    <td>{{ $item->year_id }}</td>
                                    <td>{{ $item->region }}</td>
                                    <td>{{ $item->total_sales }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
    
            <div class="col-md-6">
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Customer Of The Year</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="terlaris" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tahun</th>
                                <th>Customer</th>
                                <th>Total Buy</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coty as $item)
                                <tr>
                                    <td>{{ $item->year_id }}</td>
                                    <td>{{ $item->customer_name }}</td>
                                    <td>{{ $item->total_buy }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!-- /.col -->
            </div>
  </section><!-- /.content -->
@endsection