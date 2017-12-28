@extends('layouts.dashboard')

@section('page_heading','Dashboard')

@section('section')
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>150</h3>
        <p>New Orders</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>53<sup style="font-size: 20px">%</sup></h3>
        <p>Bounce Rate</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
      <h3>44</h3>
      <p>User Registrations</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
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
  </div>
  <!-- ./col -->
</div>
<div class="row">
  <div class="col-md-8">  

  </div>
  <div class="col-md-4">  
   <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Recently Added Products</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
      <ul class="products-list product-list-in-box">
      <li class="item">
      <div class="product-img">
      <img src="dist/img/default-50x50.gif" alt="Product Image">
      </div>
      <div class="product-info">
      <a href="javascript:void(0)" class="product-title">Samsung TV
      <span class="label label-warning pull-right">$1800</span></a>
      <span class="product-description">
      Samsung 32" 1080p 60Hz LED Smart HDTV.
      </span>
      </div>
      </li>
      <!-- /.item -->
      <li class="item">
      <div class="product-img">
      <img src="dist/img/default-50x50.gif" alt="Product Image">
      </div>
      <div class="product-info">
      <a href="javascript:void(0)" class="product-title">Bicycle
      <span class="label label-info pull-right">$700</span></a>
      <span class="product-description">
      26" Mongoose Dolomite Men's 7-speed, Navy Blue.
      </span>
      </div>
      </li>
      <!-- /.item -->
      <li class="item">
      <div class="product-img">
      <img src="dist/img/default-50x50.gif" alt="Product Image">
      </div>
      <div class="product-info">
      <a href="javascript:void(0)" class="product-title">Xbox One <span class="label label-danger pull-right">$350</span></a>
      <span class="product-description">
      Xbox One Console Bundle with Halo Master Chief Collection.
      </span>
      </div>
      </li>
      <!-- /.item -->
      <li class="item">
      <div class="product-img">
      <img src="dist/img/default-50x50.gif" alt="Product Image">
      </div>
      <div class="product-info">
      <a href="javascript:void(0)" class="product-title">PlayStation 4
      <span class="label label-success pull-right">$399</span></a>
      <span class="product-description">
      PlayStation 4 500GB Console (PS4)
      </span>
      </div>
      </li>
      <!-- /.item -->
      </ul>
      </div>
      <!-- /.box-body -->
      <div class="box-footer text-center">
      <a href="javascript:void(0)" class="uppercase">View All Products</a>
      </div>
      <!-- /.box-footer -->
    </div>
  </div>
</div>
@endsection