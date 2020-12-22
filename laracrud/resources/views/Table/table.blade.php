@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Video Url's Data</h1>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <td>Details</td>
                    <td>Delete</td>
                    <td>Edit</td>
                </tr>
                </thead>
                <tbody>
                @foreach($Table as $Table)
                    <tr>
                        <td>{{$Table->id}}</td>
                        <td>
                        <b>{{$Table['firstname']}}</b>:{{$Table['url']}}</br>
                        </td>
                        <td>
                            <form action="{{ route('Table.destroy', $Table->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                        <td><a href="{{ route('Table.update',$Table->id)}}" class="btn btn-primary">Edit</a><br></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>

            </div>
@endsection
