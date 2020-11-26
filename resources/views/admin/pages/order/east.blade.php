@extends('admin.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Order Region East
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Simple</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">
            <form method="GET">
              <div class="form-group">
                <label for="exampleInputEmail1">Date Start</label>
                <input type="date" name="date_start" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Date End</label>
                <input type="date" name="date_end" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" value="Search" class="btn btn-success">
              </div>
            </form>
            <table id="table" class="table table-hover">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Date</th>
                  <th>Customer</th>
                  <th>Region</th>
                  <th>Product</th>
                  <th>Sales</th>
                </tr>
              </thead>
              <tbody>
              @foreach($data as $item)
                <tr>
                  <td>{{ $item->order_id }}</td>
                  <td>{{ $item->date }}</td>
                  <td>{{ $item->customer_name }}</td>
                  <td>{{ $item->region }}</td>
                  <td>{{ $item->product_name }}</td>
                  <td>{{ $item->sales }}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
    </div>
  </section><!-- /.content -->
@endsection