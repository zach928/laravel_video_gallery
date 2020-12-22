@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div>    <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">New contact</a></div>
            <h1 class="display-3">Update a contact</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('contacts.update', $contact->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" class="form-control" name="firstname" value={{ $contact->firstname }} />
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" class="form-control" name="lastname" value={{ $contact->lastname }} />
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value={{ $contact->email }} />
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control" name="state" value={{ $contact->state }} />
                </div>
                <div class="form-group">
                    <label for="country">Country:</label>
                    <input type="text" class="form-control" name="country" value={{ $contact->country }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    <div class="col-sm-12">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
@endsection
