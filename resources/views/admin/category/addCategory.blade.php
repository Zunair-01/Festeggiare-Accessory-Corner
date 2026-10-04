@extends('admin.layouts.app')
@section('title', 'Add Category')
@section('custom.css')

@section('content')
    {{-- <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Add Product</h4>
        </div>
    </div> --}}
    <div class="card card-bordered">
        @include('admin.layouts.partials.error')
        @include('admin.layouts.partials.msg')
        <div class="card-inner">
            <form action="{{ route('category.store') }}" class="form-validate" method="POST">
                @csrf
                <div class="row g-gs">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="category_name">Category Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="category_name" name="category_name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('custom.js')
