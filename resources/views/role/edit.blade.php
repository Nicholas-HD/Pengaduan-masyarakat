@extends('admin.layouts.master')

@section('content')
    <h1 class="text-center mt-5">EDIT <span class="text-primary">ROLE</span></h1>
    <div class="continer justify-content-center d-flex mt-5">
        <form class="col-6" method="post" action="{{ route('role.update', [$role->id]) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    id="exampleInputName" value="{{ $role->name }}" aria-describedby="Name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputDescription" class="form-label">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                    id="exampleInputDescription" rows="5">{{ $role->description }}</textarea>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <div class="mt-5"></div>
@endsection
