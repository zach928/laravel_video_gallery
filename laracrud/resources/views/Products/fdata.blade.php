@extends('base')
@section('main')
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Properties</th>
        </tr>
        <tr>
        @foreach($Product as $Product)
            <tr>
                <td>
                    {{ $Product->name ?? '' }}
                </td>
                <td>
                    {{ $Product->price ?? '' }}
                </td>
                <td>
                    @foreach ($Product->properties as $property)
                        <b>{{ $property['key'] }}</b>: {{ $property['value'] }}<br />
                    @endforeach
                </td>
        </tr>
            @endforeach
    </table>
@endsection
