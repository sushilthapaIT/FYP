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
                        Custom Orders
                    </div>
                    <div class="panel-body">
                        @if (Session::has('order_message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('order_message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>CustomOrderId</th>
                                    <th>Total</th>
                                    <th>Flavor</th>
                                    <th>Shape</th>
                                    <th>Eggless</th>
                                    <th>Note</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customs as $custom)
                                    <tr>
                                        {{-- {{ dd($order) }} --}}
                                        <td>{{ $custom->id }}</td>
                                        <td>{{ $custom->message }}</td>
                                        <td>{{ $custom->flavour }}</td>
                                        <td>{{ $custom->shape }}</td>
                                        <td>{{ $custom->eggless }}</td>
                                        <td>{{ $custom->note }}</td>
                                        <td>{{ $custom->email }}</td>
                                        <td>{{ $custom->mobile }}</td>
                                        <td>{{ $custom->country }}</td>
                                        <td>{{ $custom->created_at }}</td>
                                        
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
                        {{-- <div class="row"> --}}
            {{-- <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Shipping Details
                    </div>
                    <div class="panel-body">
                          <table class="table">
                            <tr>
                                <th>First Name</th>
                                <td>{{ $order->shipping->firstname }}</td>
                                <th>Last Name</th>
                                <td>{{ $order->shipping->lastname }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $order->shipping->mobile }}</td>
                                <th>Email</th>
                                <td>{{ $order->shipping->email }}</td>
                            </tr>
                            <tr>
                                <th>Line1</th>
                                <td>{{ $order->shipping->line1 }}</td>
                                <th>Line2</th>
                                <td>{{ $order->shipping->line2 }}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{ $order->shipping->city }}</td>
                                <th>Province</th>
                                <td>{{ $order->shipping->province }}</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td>{{ $order->shipping->country }}</td>
                                <th>Zipcode</th>
                                <td>{{ $order->shipping->zipcode }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div> --}}
        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
</div>
