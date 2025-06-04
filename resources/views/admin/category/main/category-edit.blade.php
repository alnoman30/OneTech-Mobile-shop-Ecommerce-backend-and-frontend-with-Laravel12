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
                        <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Edit Category</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="gallery__area bg-style">
                <div class="gallery__content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-vertical__item bg-style">
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('admin.category.update', $categories->id)}}">
                                            @csrf
                                            @method('PUT')
                                            <div class="input__group mb-25">
                                                <label>Category Name</label>
                                                <input type="text" id="category_name" name="name"  value="{{ old('name', $categories->name)}}" placeholder="category name">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Category Slug</label>
                                                <input type="text" id="category_slug" name="slug"  value="{{ old('slug', $categories->slug)}}" placeholder="category slug">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Icon Image</label>
                                                @if($categories->image)
                                                    <div class="mb-2">
                                                        <img src="{{ asset('uploads/categories/'.$categories->image) }}" alt="Current Icon" width="80">
                                                    </div>
                                                @endif
                                                <input type="file" id="icon_class" name="image" value="" placeholder="Icon">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Description (English)</label>
                                                <textarea name="description" id="en_description" placeholder="Description (English)">{{ old('description', $categories->description)}}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label>Status</label>
                                                <select name="status" id="status" required>
                                                    <option value="" disabled {{ $categories->status ? '' : 'selected' }}>Select Status</option>
                                                    <option value="active" {{ $categories->status == 'active' ? 'selected' : '' }}>Active</option>
                                                    <option value="inactive" {{ $categories->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
        </div>
@endsection