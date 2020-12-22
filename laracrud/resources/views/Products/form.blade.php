@extends('base')
@section('main')

    <div class="container row mt-auto"><b>Grocery Items List</b></div>

<form action="{{ route("Product.store") }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Price*</label>
        <input type="number" name="price" class="form-control" step="0.01">
    </div>
    <div class="form-group">
        <label for="properties">Properties</label>
        <div class="row">
            <div class="col-md-2">
                Key:
            </div>
            <div class="col-md-4">
                Value:
            </div>
        </div>
        @for ($i=0; $i <= 4; $i++)
            <div class="row">
                <div class="col-md-2">
                    <input type="text" name="properties[{{ $i }}][key]" class="form-control" value="{{ old('properties['.$i.'][key]') }}">
                </div>
                <div class="col-md-4">
                    <input type="text" name="properties[{{ $i }}][value]" class="form-control" value="{{ old('properties['.$i.'][value]') }}">
                </div>
            </div>
        @endfor
    </div>
    <div>
        <input class=" btn btn-danger" type="submit">
    </div>
</form>
@endsection
