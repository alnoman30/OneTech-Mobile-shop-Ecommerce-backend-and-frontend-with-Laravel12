@extends('layouts.admin')
@section('content')
<div class="main-content">
    @include('admin.partial_header.header')
    <div class="page-content-wrap">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb__content">
                            <div class="breadcrumb__content__left">
                                <div class="breadcrumb__title">
                                    <h2>Edit Subcategory</h2>
                                </div>
                            </div>
                            <div class="breadcrumb__content__right">
                                <nav aria-label="breadcrumb">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Subcategory</li>
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
                                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-vertical__item bg-style">
                                                    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.scategory.update', $subcategory->id) }}">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="input__group mb-25">
                                                            <label>Main Category</label>
                                                            <select name="category_id" required>
                                                                <option value="" disabled>Select Main Category</option>
                                                                @foreach($categories as $category)
                                                                    <option value="{{ $category->id }}" {{ $subcategory->category_id == $category->id ? 'selected' : '' }}>
                                                                        {{ $category->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="input__group mb-25">
                                                            <label>Subcategory Name</label>
                                                            <input type="text" name="name" value="{{ old('name', $subcategory->name) }}" placeholder="Subcategory name">
                                                        </div>

                                                        <div class="input__group mb-25">
                                                            <label>Subcategory Slug</label>
                                                            <input type="text" name="slug" value="{{ old('slug', $subcategory->slug) }}" placeholder="Subcategory slug">
                                                        </div>

                                                        <div class="input__group mb-25">
                                                            <label>Description (English)</label>
                                                            <textarea name="description" placeholder="Description (English)">{{ old('description', $subcategory->description) }}</textarea>
                                                        </div>

                                                        <div class="input__group mb-25">
                                                            <label>Status</label>
                                                            <select name="status" required>
                                                                <option value="" disabled>Select Status</option>
                                                                <option value="active" {{ $subcategory->status == 'active' ? 'selected' : '' }}>Active</option>
                                                                <option value="inactive" {{ $subcategory->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                            </select>
                                                        </div>

                                                        <div class="input__button">
                                                            <button type="submit" class="btn btn-blue">Update Subcategory</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- tab-pane -->
                                </div> <!-- tab-content -->
                            </div> <!-- gallery__content -->
                        </div> <!-- gallery__area -->
                    </div>
                </div>

            </div> <!-- container-fluid -->
        </div>
    </div>
</div>
@endsection
