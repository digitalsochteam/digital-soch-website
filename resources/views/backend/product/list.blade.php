@extends('backend.layout.app')
@section('content')
    <div class="container py-4">
        <h4 class="mb-3">Products Details</h4>

        <a href="{{ route('product-details.create') }}" class="btn btn-primary mb-3">Add New Product</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Packcage Category</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Product</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($details as $detail)
                    <tr>
                        <td>{{ $detail->position }}</td>
                        <td>{{ $detail->products->name }}</td>
                        <td>{{ $detail->category }}</td>
                        <td>{{ $detail->subcategory }}</td>
                        <td>{{ $detail->product }}</td>
                        <td>
                            <a href="{{ route('product-details.edit', $detail->id) }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ route('product-details.destroy', $detail->id) }}" method="POST"
                                class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete this detail?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
