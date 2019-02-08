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
                    <div class="panel-heading">Courses Enrolls</div>

                    <div class="panel-body">

                        <table class="table">
                            <tr>
                                <th>Course ID</th>
                                <th>User ID</th>
                                <th>Payment</th>
                                <th>Transacttion</th>
                                <th>Order Amount</th>
                                <th>Order_status</th>
                                <th>Order Error</th>
                            </tr>
                            @foreach($sales as $sale)
                                <tr>
                                    <td>{{ $sale->course_id }}</td>
                                    <td>{{ $sale->user_id }}</td>
                                    <td>{{ $sale->payment_gw }}</td>
                                    <td>{{ $sale->transaction_id }}</td>
                                    <td>{{ $sale->order_amount }}</td>
                                    <td>{{ $sale->order_status }}</td>
                                    <td>{{ $sale->order_error }}</td>
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
@stop