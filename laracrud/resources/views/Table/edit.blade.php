@extends('base')
@section('main')
    <form action="{{ route('Table.update') }}"  method="POST">
        @csrf
        <table class="table table-hover">
            <tr>
                Insert Video

                <th>Firstname</th>
                <th>Lastname</th>
                <th>Insert Video</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td><input type="text" name="url[firstname]"></td>
                <td><input type="text" name="url[lastname]"></td>
                <td><input type="text" id="saving" name="url[youtubevideo]" placeholder="enter url"></td>
            </tr>
        </table>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
@endsection
