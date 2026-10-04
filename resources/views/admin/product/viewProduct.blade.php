@extends('admin.layouts.app')
@section('title', 'View Product')
@section('custom.css')

@section('content')

    <div class="card card-preview">
        <div class="card-inner">
            @include('admin.layouts.partials.error')
            @include('admin.layouts.partials.msg')
            <div class="row">
                @foreach ($product as $product)
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="card card-bordered product-card">
                            <div class="product-thumb">
                                <a href="html/product-details.html">
                                    <img class="card-img-top" src="{{ asset($product->product_image) }}" alt="">
                                </a>
                                @if (Carbon\Carbon::parse($product->created_at)->lessThan(\Carbon\Carbon::parse($product->created_at)->addDay()))
                                    <ul class="product-badges">
                                        <li><span class="badge badge-success">New</span></li>
                                    </ul>
                                @endif
                            </div>
                            <div class="card-inner text-center">
                                <ul class="product-tags">
                                    <li><a
                                            href="#">{{ \App\Models\Category::where('id', $product->category)->value('category_name') ?? 'No Category' }}</a>
                                    </li>
                                </ul>
                                <h5 class="product-title"><a
                                        href="html/product-details.html">{{ $product->product_name }}</a>
                                </h5>
                                <div class="product-price text-primary h5">PKR. {{ $product->product_price }}</div>
                                <ul class="product-actions">
                                    <li><a href="{{ route('product.edit', $product->id) }}"><em class="icon ni ni-pen2"
                                                style="font-size: 1.5em"></em></a></li>
                                    <li>
                                        <form action="{{ route('product.delete', $product->id) }}" method="POST"
                                            id="deleteForm" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn bg-transparent"
                                                onclick="deleteConfirmation(event)"><em class="icon ni ni-trash-fill"
                                                    style="font-size: 1.5em"></em></button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col -->
                @endforeach
            </div>
        </div>
    </div><!-- .card-preview -->

@endsection
@section('custom.js')
