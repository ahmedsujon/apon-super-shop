@extends('layouts.app')
@section('title', 'Purchase Finalize')

@section('css')
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Purchase Finalize</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-solid">
            <div class="box-body">
                <table class="table" id="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="">Product</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($purchases as $purchase)
                            <tr>
                                <td class="text-center">{{ $purchase->id }}</td>
                                <td class="">
                                    <img src="{{ $purchase->product_image ? $purchase->product_image : url('/').'/img/default.png' }}" alt="Product image" class="product-thumbnail-small">
                                    {{ $purchase->product_name }}
                                </td>
                                <td class="text-center">{{ $purchase->created_at }}</td>
                                <td class="text-center">{{ $purchase->quantity }}</td>
                                <td class="text-center">
                                    <a href="{{ url('products/'.$purchase->product_id.'/edit') }}?type=finalize&purchase_id={{ $purchase->id }}" class="btn btn-primary btn-xs">
                                        Finalize
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
@section('javascript')
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endsection
