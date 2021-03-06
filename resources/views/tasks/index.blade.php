
@extends('layout.dashboard')
@section('content')
<section id="main-content">
      <section class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                @if(Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message')}}</div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">Tasks</div>

                    <div class="panel-body">

                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{ $task->title }}</td>
                                    <td>{{ $task->body }}</td>
                                    <td>
                                         {!! Form::open(array('route'=>['task.destroy',$task->id],'method'=>'DELETE')) !!}
                                {!! link_to_route('task.edit','Edit',[$task->id],['class'=>'btn btn-primary']) !!}
                                     |
                                   
                    

                                            {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        {!! Form::close() !!}   

                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
                {!! link_to_route('task.create','Add new task',null,['class'=>'btn btn-primary']) !!}
               

            </div>
        </div>
    </div>
</section>
</section>
@endsection
