@extends('layout.dashboard')
@section('content')
<section id="main-content">
      <section class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">User Table</div>

                    <div class="panel-body">
                       
                   
                    <table class="table">
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>
                                    {!! Form::open(array('route'=>['user.destroy',$user->id],'method'=>'DELETE')) !!}
                                    {!! link_to_route('user.show','View',[$user->id],['class'=>'btn btn-primary']) !!}
                                     |
                                    {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                    {!! Form::close() !!}   

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                 </div>
                </div>

            </div>
        </div>
    </div>
</section>
</section>
@endsection