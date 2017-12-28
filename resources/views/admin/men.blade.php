@extends('layouts.dashboard')

@section('page_heading','Men')

@section('section')
<div class="row">
  <div class="col-md-2">
    <!-- <button type="button" class="btn btn-block btn-primary">Add Participants</button> -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
      Add Participants
    </button>
  </div>
</div>
<div class="row" style="margin-top: 20px;">
  <div class="col-md-12">
    
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">List of Male Participants</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Full Name </th>
            <th>Email </th>
            <th>Contact Number</th>
            <th>Address</th>
            <th>Sponsor</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
           
          @foreach($mens as $men)
                <tr>
                <td>
                  {{ $men->first_name }} {{ $men->middle_initial }} {{ $men->last_name }}
                </td>
                <td>{{ $men->email }}</td>
                <td>{{ $men->number }}</td>
                <td>{{ $men->address }}</td>
                <td>{{ $men->sponsor }}</td>
                <td><a class="btn btn-app modify-btn bg-warning"><i class="fa fa-edit"></i> Edit</a>
                <a class="btn btn-app modify-btn bg-danger"><i class="fa fa-trash"></i> Delete</a>
                 <a class="btn btn-app modify-btn bg-danger"><i class="fa fa-info-circle"></i> Status</a></td>
                <tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>  
  </div>
</div>



<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Modal</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="{{ route('postaddmen') }}" method="post">
           {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group has-feedback {{ $errors->has('first_name') ? ' has-error' : '' }}">
              <label for="first_name">First Name</label>
              <input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
              @if ($errors->has('first_name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('first_name') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('middle_initial') ? ' has-error' : '' }}">
              <label for="middle_initial">Middle Initial</label>
              <input type="text" name="middle_initial" class="form-control" placeholder="Enter Middle Initial">
              @if ($errors->has('middle_initial'))
                  <span class="help-block">
                      <strong>{{ $errors->first('middle_initial') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('last_name') ? ' has-error' : '' }}">
              <label for="last_name">Last Name</label>
              <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
              @if ($errors->has('last_name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('last_name') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Enter Email">
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('number') ? ' has-error' : '' }}">
              <label for="contact_number">Contact Number</label>
              <input type="text" name="number" class="form-control" placeholder="Enter Contact Number">
              @if ($errors->has('number'))
                  <span class="help-block">
                      <strong>{{ $errors->first('number') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('address') ? ' has-error' : '' }}">
              <label for="address">Address</label>
              <input type="text" name="address" class="form-control" placeholder="Enter Address">
              @if ($errors->has('address'))
                  <span class="help-block">
                      <strong>{{ $errors->first('address') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('sponsor') ? ' has-error' : '' }}">
              <label for="sponsor">Sponsor</label>
              <input type="text" name="sponsor" class="form-control" placeholder="Enter Sponsor">
              @if ($errors->has('sponsor'))
                  <span class="help-block">
                      <strong>{{ $errors->first('sponsor') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <div class="pull-right">
               <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>         
          </div>
          <!-- /.box-body -->        
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div> -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection