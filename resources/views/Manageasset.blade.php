@extends('base')
@section('data')
<div class="container">
    <div class="col-4 mx-auto">
        @if(session("error"))
        <div class="alert alert-danger">
            {{session("error")}}

        </div>
        @endif
        <div class="card">
            <div class="card-header">manageasset</div>
            <div class="card-body">
                <form action="{{route('manageasset')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">assetname</label>
                        <input type="text" name="assetname" class="form-control @error('assetname') is-invalid @enderror">
                        @error('assetname')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">assettype</label>
                        <input type="text" name="assettype" class="form-control @error('assettype') is-invalid @enderror">
                        @error('assettype')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">assetcode</label>
                        <input type="text" name="assetcode" class="form-control @error('assetcode') is-invalid @enderror">
                        @error('assetcode')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">image</label>
                        <input type="text" name="image" class="form-control">
                        @error('image')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="submit" value="manageasset" class="btn btn-success w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection