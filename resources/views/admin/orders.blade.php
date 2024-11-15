@extends('home')

@section('content')

    <div class="container-fluid">
        <h5 class="my-1">Filter Orders</h5>

        <!-- Search Form -->
        <form action="{{ route('orders.search') }}" method="GET" class="mb-4">
            <div class="form-row">
                <div class="col-md-6">
                    <select name="status" class="form-control">
                        <option value="">All</option>
                        <option value="done">Done</option>
                        <option value="not_done">Not Done</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary m-1">Search</button>
                </div>
            </div>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Service</th>
                    <th>Budget</th>
                    <th>Message</th>
                    <th>Created At</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->service }}</td>
                    <td>{{ $order->budget }}</td>
                    <td>{{ $order->message }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                        @if($order->done)
                        <span class="badge badge-success text-danger">Done</span>
                        @else
                        <span class="badge badge-warning text-primary">Not Done</span>
                        @endif
                    </td>
                    <td>
                        @if(!$order->done)
                        <form action="{{ route('orders.markAsDone', $order->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success my-1 btn-sm">Mark as Done</button>
                        </form>
                        @endif
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection