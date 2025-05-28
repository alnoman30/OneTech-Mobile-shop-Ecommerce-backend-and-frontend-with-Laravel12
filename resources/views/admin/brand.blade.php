@extends('layouts.admin'){
    @section('content')
          <div class="main-content">
        <!-- Header section start -->
            @include('admin.partial_header.header')
        <!-- Header section end -->
        <div class="page-content-wrap">
            <!-- Container Fluid-->
            <div class="page-content">
                <div class="container-fluid">
                    <div id="table-url" data-url="/admin/brand"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb__content">
                                <div class="breadcrumb__content__left">
                                    <div class="breadcrumb__title">
                                        <h2>Brand</h2>
                                    </div>
                                </div>
                                <div class="breadcrumb__content__right">
                                    <nav aria-label="breadcrumb">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Brand</li>
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
                                        <a href="{{ route('admin.brand.add')}}" class="btn btn-md btn-info">Add Brand</a>
                                    </div>
                                </div>
                                <div class="customers__table">
                                    <table id="BrandTable"
                                        class="row-border data-table-filter table-style dataTable no-footer" role="grid"
                                        aria-describedby="BrandTable_info" style="width: 1195px;">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="CategoryTable"
                                                    rowspan="1" colspan="1" style="width: 149px;" aria-sort="ascending"
                                                    aria-label="Category Name: activate to sort column descending">
                                                    Brand Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="CategoryTable"
                                                    rowspan="1" colspan="1" style="width: 211px;"
                                                    aria-label="Category Slug: activate to sort column ascending">
                                                    Brand Slug</th>
                                                <th class="sorting" tabindex="0" aria-controls="CategoryTable"
                                                    rowspan="1" colspan="1" style="width: 190px;"
                                                    aria-label="Description: activate to sort column ascending">
                                                    Description</th>
                                                <th class="sorting" tabindex="0" aria-controls="CategoryTable"
                                                    rowspan="1" colspan="1" style="width: 211px;"
                                                    aria-label="Icon: activate to sort column ascending">Brand Image</th>
                                                <th class="sorting" tabindex="0" aria-controls="CategoryTable"
                                                    rowspan="1" colspan="1" style="width: 106px;"
                                                    aria-label="Status: activate to sort column ascending">Status</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 106px;" aria-label="Action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $brands as $brand )
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $brand->name }}</td>
                                                <td>{{ $brand->slug }}</td>
                                                <td>{{ $brand->description }}</td>
                                                <td><img src="{{ asset('uploads/brands')}}/{{ $brand->image }}" width="30" alt=""></td>
                                                <td>
                                                    @if ($brand->status === 'active')
                                                        <span class="status active">Active</span>
                                                    @else
                                                        <span class="status inactive">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="action__buttons">
                                                        <a href="{{ route('admin.brand.edit', $brand->id)}}" class="btn-action" title="Edit"><i class="fas fa-pen-to-square"></i></a>
                                                        <a href="javascript:void(0);" class="btn-action deleteBtn" 
                                                        data-id="{{ $brand->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal" 
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
                                            {{ $brands->links('pagination::bootstrap-5') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->
                </div>
            </div>
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
                        <form id="deleteBrandForm" method="POST">
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
        const deleteForm = document.getElementById('deleteBrandForm');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const brandId = this.getAttribute('data-id');
                const route = "{{ route('admin.brand.delete', ':id') }}".replace(':id', brandId);
                deleteForm.setAttribute('action', route);
            });
        });
    });
</script>
    @endsection
}