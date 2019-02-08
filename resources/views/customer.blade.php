@extends('layout.dashboard')
@section('content')
<section id="main-content">
  <section class="wrapper">
    <div class="panel-heading">
        <button type="button" class="btn btn-info " id="add" value="add">New Customer</button>
    </div>
    
    <div class="panel-body">
        @include('newCustomer')
        <table class="table table-hover">
          <caption>Customer Info</caption>
          <thead>
            <th>Id</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Sex</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
          </thead>
          <tbody>
              @foreach($customers as $key => $customer)
              <tr id="customer{{$customer->id}}">
                  <td>{{$customer->id}}</td>
                  <td>{{$customer->first_name}}</td>
                  <td>{{$customer->last_name}}</td>
                  <td>
                    @if($customer->sex==0)
                    Male
                    @else
                    Female
                    @endif
                  </td>
                  <td>{{$customer->email}}</td>
                  <td>{{$customer->phone}}</td>
                  <td>
                      <button class="btn btn-success btn-edit" data-id="{{ $customer->id }}">Edit</button>
                      <button class="btn btn-danger btn-delete" data-id="{{ $customer->id }}">Delete</button>
                  </td>
                </tr>
                @endforeach
          </tbody>
        </table>
      </div>
    </section>
  </section>
@stop
    @section('script')
    <script type="text/javascript">
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
          }
        })
        //---------------------
        $('#add').on('click',function(){
            $('#customer').modal('show');
        })
        
        $('#frmCustomer').on('submit',function(e){
          e.preventDefault();
          var form=$('#frmCustomer');
          var formData=form.serialize();
          var url =form.attr('action');
          var state=$('#Save').val();
          var type='post';
          if(state=='update'){
            type='put';
          }
          $.ajax({
            type:type,
            url :url,
            data : formData,
            success:function(data){
              console.log(data);
              addRow(data);
              $('#frmCustomer').trigger('reset');
              $('#first_name').focus();
            }
          });
        })
      //--------new row......
      function addRow(data){
        var sex="";
          if(data.sex==0){
            sex="Male";
          }else{sex="Female";}
        var row='<tr>'+
                '<td>'+data.id+'</td>'+
                '<td>'+data.first_name+'</td>'+
                '<td>'+data.last_name+'</td>'+
                '<td>'+sex+'</td>'+
                '<td>'+data.email+'</td>'+
                '<td>'+data.phone+'</td>'+
                '<td><button class="btn btn-success btn-edit">Edit</button>'+
                '<button class="btn btn-danger btn-delete">Delete</button></td>'+
                '<tr>';
                $('tbody').append(row);
      }
      $('tbody').delegate('.btn-edit','click',function(){
          var value=$(this).data('id');
          var url='{{URL::to('getUpdate')}}';
          $.ajax({
            type :'get',
            url  : url,
            data : {'id':value},
            success:function(data){
              $('#id').val(data.id);
              $('#first_name').val(data.first_name);
              $('#last_name').val(data.last_name);
              $('#sex').val(data.sex);
              $('#email').val(data.email);
              $('#phone').val(data.phone);
              $('#Save').val('update');
              $('#customer').modal('show');
            }
          });
      });
    </script>

  
@stop
