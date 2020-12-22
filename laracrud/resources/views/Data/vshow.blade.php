@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Video Gallery Saved Videos</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Video Display Mode</td>
                    <td>Videos per row</td>
                    <td>Margin Between Images</td>
                    <td>Hover</td>
                </tr>
                </thead>
                <tbody>
                @foreach($Data as $Data)
                    <tr>
                        <td>{{$Data->url('display')}}</td>
                        <td>{{$Data->url('video_per_row')}}</td>
                        <td>{{$Data->url('margin')}}</td>
                        <td>{{$Data->url('hover')}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
