@extends('admin.template')
 @section('content')
    <div class="container text-center">
        <div class="page-header">
            <h3>
                <i class="fa fa-shopping-cart"></i> Cart
            </h3>
        </div>        
        <div>            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Detail</th>
                            <th>Remove</th>
                            <th>Date</th>
                            <th>User</th>
                            <th>Subtotal</th>
                            <th>GST</th>
                            <th>Grand Total</th>
                            <th>Ship</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>
                                    <a 
                                        href="#" 
                                        class="btn btn-primary btn-detalle-pedido"
                                        data-id="{{ $order->id }}"
                                        data-path="{{ route('admin.order.getItems') }}"
                                        data-toggle="modal" 
                                        data-target="#myModal"
                                        data-token="{{ csrf_token() }}"
                                    >
                                        <i class="fa fa-external-link"></i>
                                    </a>
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['admin.order.destroy', $order->id]]) !!}
        								<button onClick="return confirm('Delete Record ?')" class="btn btn-danger">
        									<i class="fa fa-trash-o"></i>
        								</button>
        							{!! Form::close() !!}
                                </td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->user->name . " " . $order->user->last_name }}</td>
                                <td>${{ number_format($order->subtotal,2) }}</td>
                                <td>${{ number_format($order->subtotal * 0.15,2) }}</td>
                                <td>${{ number_format($order->subtotal * 1.15,2) }}</td>
                                <td>

                                    <div class="form-group">{!! Form::checkbox('ship', null, $order->ship == 1 ? true : false) !!}

                                    </div>
                                    <div class="form-group">
                                    {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
                                    </div>
                                    {!! Form::close() !!}

                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>            
            <?php echo $orders->render(); ?>            
        </div>
    </div>
    @include('admin.partials.modal-detalle-pedido')   
@stop