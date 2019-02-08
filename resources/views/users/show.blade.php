@extends('layout.dashboard')
@section('content')
<section id="main-content">
      <section class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">View Login Detail</div>

                    <div class="panel-body">
                       
                   
                     <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>

                            </tr>
                           
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td> {{ $user->password }} </td>
                                </tr>
                        </table>
                 </div>
                </div>

            </div>
        </div>
    </div>
</section>
</section>
@endsection