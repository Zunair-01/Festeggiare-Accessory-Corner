@extends('admin.layouts.app')
@section('title', 'Profile Setup')
@section('custom.css')

@section('content')

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 mb-4">
                @include('admin.layouts.partials.error')
                @include('admin.layouts.partials.msg')
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Admin Management</h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-success mb-3" data-toggle="modal" data-target="#addAdminModal">Add New
                            Admin</button>
                        <ul class="list-group">
                            <!-- Iterate over admins from backend -->
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                John Doe
                                <div>
                                    <button class="btn btn-sm btn-info mr-1" data-toggle="modal"
                                        data-target="#editAdminModal">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </div>
                            </li>
                            <!-- Repeat for each admin -->
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Category Management -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Category Management</h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addCategoryModal">Add New
                            Category</button>
                        <ul class="list-group">
                            <!-- Iterate over categories from backend -->
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Category 1
                                <div>
                                    <button class="btn btn-sm btn-info mr-1" data-toggle="modal"
                                        data-target="#editCategoryModal">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </div>
                            </li>
                            <!-- Repeat for each category -->
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Record Management -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-warning text-white">
                        <h5 class="mb-0">Record Management</h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-info mb-3" data-toggle="modal" data-target="#addRecordModal">Add New
                            Record</button>
                        <ul class="list-group">
                            <!-- Iterate over records from backend -->
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Record 1
                                <div>
                                    <button class="btn btn-sm btn-info mr-1" data-toggle="modal"
                                        data-target="#editRecordModal">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </div>
                            </li>
                            <!-- Repeat for each record -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Admin Modal -->
    <div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="addAdminModalLabel"
        aria-hidden="true">
        <!-- Add admin form goes here -->
    </div>

    <!-- Edit Admin Modal -->
    <div class="modal fade" id="editAdminModal" tabindex="-1" role="dialog" aria-labelledby="editAdminModalLabel"
        aria-hidden="true">
        <!-- Edit admin form goes here -->
    </div>

    <!-- Add Category Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryModalLabel"
        aria-hidden="true">
        <!-- Add category form goes here -->
    </div>

    <!-- Edit Category Modal -->
    <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel"
        aria-hidden="true">
        <!-- Edit category form goes here -->
    </div>

    <!-- Add Record Modal -->
    <div class="modal fade" id="addRecordModal" tabindex="-1" role="dialog" aria-labelledby="addRecordModalLabel"
        aria-hidden="true">
        <!-- Add record form goes here -->
    </div>

    <!-- Edit Record Modal -->
    <div class="modal fade" id="editRecordModal" tabindex="-1" role="dialog" aria-labelledby="editRecordModalLabel"
        aria-hidden="true">
        <!-- Edit record form goes here -->
    </div>


@endsection
@section('custom.js')
