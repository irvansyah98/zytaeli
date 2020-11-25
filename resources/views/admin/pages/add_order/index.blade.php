@extends('admin.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Add Order
      <small>Eli Zita @ Universitas Amikom Yogyakarta</small>
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
            <!-- form start -->
            <form role="form" action="{{ url('/submit/order') }}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Customer</label>
                  <select name="customer_id" class="select2 form-control">
                    @foreach ($customer->data as $item)
                        <option value="{{ $item->customer_id }}">{{ $item->customer_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Produk</label>
                  <select name="product_id" class="select2 form-control">
                    @foreach ($product->data as $item)
                        <option value="{{ $item->product_id }}">{{ $item->product_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Region</label>
                  <select name="region" class="form-control" id="">
                    <option value="South">South</option>
                    <option value="West">West</option>
                    <option value="Central">Central</option>
                    <option value="East">East</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga</label>
                  <input type="number" name="sales" class="form-control">
                </div>
              </div><!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
    </div>
  </section><!-- /.content -->
@endsection