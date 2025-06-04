@extends('layouts.admin')
@section('content')
<div class="main-content">
    <!-- Header section start -->
    @include('admin.partial_header.header')
    <!-- Header section end -->
    <div class="page-content-wrap">
        <div class="page-content">
            <div class="container-fluid">
                <div id="table-url" data-url="{{ route('admin.child_category') }}"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb__content">
                            <div class="breadcrumb__content__left">
                                <div class="breadcrumb__title">
                                    <h2>Child Category</h2>
                                </div>
                            </div>
                            <div class="breadcrumb__content__right">
                                <nav aria-label="breadcrumb">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Child Category</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Button -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="customers__area bg-style mb-30">
                            <div class="item-title">
                                <div class="col-xs-6">
                                    <a href="{{ route('admin.child_category.create') }}" class="btn btn-md btn-info">Add Child-Category</a>
                                </div>
                            </div>

                            <!-- Table -->
                            <div class="customers__table">
                                <table id="CategoryTable" class="row-border data-table-filter table-style dataTable no-footer">
                                    <thead>
                                        <tr role="row">
                                            <th>Main Category</th>
                                            <th>Sub Category</th>
                                            <th>Child Category Name</th>
                                            <th>Slug</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($childCategories as $child)
                                            <tr role="row">
                                                <td>{{ $child->subCategory->category->name ?? 'N/A' }}</td>
                                                <td>{{ $child->subCategory->name ?? 'N/A' }}</td>
                                                <td>{{ $child->name }}</td>
                                                <td>{{ $child->slug }}</td>
                                                <td>{{ $child->description }}</td>
                                                <td>
                                                    @if ($child->status === 'active')
                                                        <span class="status active">Active</span>
                                                    @else
                                                        <span class="status inactive">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="action__buttons">
                                                        <a href="{{ route('admin.child_category.edit', $child->id) }}" class="btn-action" title="Edit">
                                                            <i class="fas fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn-action deleteBtn" 
                                                            data-id="{{ $child->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal" 
                                                            title="Delete">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Pagination -->
                                <div class="mt-3">
                                    {{ $childCategories->links('pagination::bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Row End -->

            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDelete" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ohh No!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to Delete?</p>
                </div>
                <div class="modal-footer">
                    <form id="deleteCategoryForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-outline-primary me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JS to set delete form route -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.deleteBtn');
            const deleteForm = document.getElementById('deleteCategoryForm');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const id = this.getAttribute('data-id');
                    const route = "{{ route('admin.child_category.delete', ':id') }}".replace(':id', id);
                    deleteForm.setAttribute('action', route);
                });
            });
        });
    </script>

</div>
@endsection
