@extends('layouts.partials.main')
@section('content')
{{-- {{ dd($products) }} --}}

<table class="table">
    <thead>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>price</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            
            <tr>
               
                <td>{{ $loop->iteration  }}</td>
                <td>{{ $product->name  }}</td>
                <td>{{ $product->price  }}</td>
                <td></td>
            </tr>
        @endforeach
     
    </tbody>
</table>


@endsection