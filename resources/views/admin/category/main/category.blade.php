@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <!-- Header section start -->
        @include('admin.partial_header.header')
        <!-- Header section end -->
        <div class="page-content-wrap">
            <!-- Container Fluid-->
            <div class="page-content">
                <div class="container-fluid">
                    <div id="table-url" data-url="http://127.0.0.1:8000/admin/category"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb__content">
                                <div class="breadcrumb__content__left">
                                    <div class="breadcrumb__title">
                                        <h2>Main Category</h2>
                                    </div>
                                </div>
                                <div class="breadcrumb__content__right">
                                    <nav aria-label="breadcrumb">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a
                                                    href="http://127.0.0.1:8000/admin/dashboard">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Category</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="customers__area bg-style mb-30">
                                <div class="item-title">
                                    <div class="col-xs-6">
                                        <a href="{{ route('admin.category.add')}}"
                                            class="btn btn-md btn-info">Add Category</a>
                                    </div>
                                </div>
                                <div class="customers__table">
                                    <table id="CategoryTable"
                                        class="row-border data-table-filter table-style dataTable no-footer" role="grid"
                                        aria-describedby="CategoryTable_info" style="width: 1213px;">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="CategoryTable"
                                                    rowspan="1" colspan="1" style="width: 149px;" aria-sort="ascending"
                                                    aria-label="Category Name: activate to sort column descending">
                                                    Category Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="CategoryTable"
                                                    rowspan="1" colspan="1" style="width: 211px;"
                                                    aria-label="Category Slug: activate to sort column ascending">
                                                    Category Slug</th>
                                                <th class="sorting" tabindex="0" aria-controls="CategoryTable"
                                                    rowspan="1" colspan="1" style="width: 190px;"
                                                    aria-label="Description: activate to sort column ascending">
                                                    Description</th>
                                                <th class="sorting" tabindex="0" aria-controls="CategoryTable"
                                                    rowspan="1" colspan="1" style="width: 211px;"
                                                    aria-label="Icon: activate to sort column ascending">Icon</th>
                                                <th class="sorting" tabindex="0" aria-controls="CategoryTable"
                                                    rowspan="1" colspan="1" style="width: 106px;"
                                                    aria-label="Status: activate to sort column ascending">Status</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 106px;" aria-label="Action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $categories as $category )
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $category->name }}</td>
                                                <td>{{ $category->slug }}</td>
                                                <td>{{ $category->description }}</td>
                                                <td><img src="{{ asset('uploads/categories')}}/{{ $category->image }}" width="30" alt=""></td>
                                                <td>
                                                    @if ($category->status === 'active')
                                                        <span class="status active">Active</span>
                                                    @else
                                                        <span class="status inactive">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="action__buttons">
                                                        <a href="{{ route('admin.category.edit', $category->id)}}" class="btn-action" title="Edit"><i class="fas fa-pen-to-square"></i></a>
                                                        <a href="javascript:void(0);" class="btn-action deleteBtn" 
                                                        data-id="{{ $category->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal" 
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="mt-3">
                                            {{ $categories->links('pagination::bootstrap-5') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->
                </div>
            </div>



                <!-- Modal Delete -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDelete"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelDelete">Ohh No!</h5>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.deleteBtn');
        const deleteForm = document.getElementById('deleteCategoryForm');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const categoryId = this.getAttribute('data-id');
                const route = "{{ route('admin.category.delete', ':id') }}".replace(':id', categoryId);
                deleteForm.setAttribute('action', route);
            });
        });
    });
</script>

@endsection