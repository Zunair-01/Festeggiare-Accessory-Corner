@extends('admin.layouts.app')
@section('title', 'Edit Product')
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
            <form action="{{ route('product.update', $product->id) }}" class="form-validate" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row g-gs">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="product_name">product Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="product_name" name="product_name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="category">Category</label>
                            <div class="form-control-wrap ">
                                <select class="form-control form-select" id="category" name="category"
                                    data-placeholder="Select a option" required>
                                    <option label="empty" value=""></option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="product_price">product Price</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="product_price" name="product_price" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="product_image">product Image</label>
                            <div class="form-control-wrap">
                                <input type="file" class="form-control" id="product_image" name="product_image" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="product_description">Description</label>
                            <div class="form-control-wrap">
                                <textarea class="form-control form-control-sm" id="product_description" name="product_description"
                                    placeholder="Write your message" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Update Informations</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('custom.js')
