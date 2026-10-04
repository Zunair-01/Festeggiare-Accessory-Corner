@extends('admin.layouts.app')
@section('title', 'View Product')
@section('custom.css')
    <link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/libs/bootstrap-icons.css') }}">
@section('content')

    <div class="card card-preview">
        <div class="card-inner">
            @include('admin.layouts.partials.error')
            @include('admin.layouts.partials.msg')
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Categories</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->category_name }}</td>
                            <td>
                                <a href="{{ route('category.add') }}" class="btn btn-xs btn-primary"><em
                                        class="bi bi-plus"></em></a>
                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-xs btn-success"><em
                                        class="bi bi-pen"></em></a>
                                <form action="{{ route('category.delete', $category->id) }}" method="POST" id="deleteForm"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-danger"
                                        onclick="deleteConfirmation(event)"><em class="bi bi-trash"></em></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->

@endsection
@section('custom.js')
