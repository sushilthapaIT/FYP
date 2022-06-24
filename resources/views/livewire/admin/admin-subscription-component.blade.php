<div>
    <style>
        nav svg{
            height: 20px;
        }

        nav .hidden{
            display: block !important;
        }
    </style>
   <div class="contaiiner" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                    <div class="panel-heading">
                        ALL Orders
                    </div>
                    <div class="panel-body">
                        @if (Session::has('order_message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('order_message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>SubscriberId</th>
                                    <th>Email</th>
                                    <th>Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscribe as $sub)
                                    <tr>
                                        {{-- {{ dd($order) }} --}}
                                        <td>{{ $sub->id }}</td>
                                        <td>{{ $sub->email }}</td>
                                        <td>{{ $sub->created_at }}</td>
                                        {{-- <td><a href="{{ route('admin.orderdetails', ['order_id'=>$order->id]) }}" class="btn btn-info btn-sm">Details</td> --}}
                                        {{-- <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Status
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#" wire:click.prevent="updateOrderStatus({{ $order->id }},'delivered')">Delivered</li>
                                                    <li><a href="#" wire:click.prevent="updateOrderStatus({{ $order->id }},'canceled')">Canceled</li>
                                                </ul>                                          
                                            </div>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
    </div>
</div>
