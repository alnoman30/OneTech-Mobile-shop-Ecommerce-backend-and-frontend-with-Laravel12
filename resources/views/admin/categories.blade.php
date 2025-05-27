@extends('layouts.admin')
@section('content')
        <div class="main-content">
        <!-- Header section start -->
        <header class="header__area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header__navbar">
                            <div class="header__navbar__left">
                                <button class="sidebar-toggler">
                                    <img src="assets/images/images/icons/header/bars.svg" alt="">
                                </button>
                                <a href="http://127.0.0.1:8000" target="_blank" class="btn btn-primary text-white">
                                    <i class="fas fa-external-link-alt"></i>
                                </a> </div>
                            <div class="header__navbar__right">
                                <ul class="header__menu">
                                    <li>
                                        <a href="#" class="btn btn-dropdown user-profile" data-bs-toggle="dropdown">
                                            <img src="assets/images/admin_profile/profile.png" alt="icon">
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="profile.html">
                                                    <img src="assets/images/icons/user.svg" alt="icon">
                                                    <span>Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#logoutModal">
                                                    <img src="assets/images/icons/logout.svg" alt="icon">
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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
                                        <h2>Category</h2>
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
                                        <a href="create-category.html"
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
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Blazers Collection</td>
                                                <td>blazers-collection</td>
                                                <td>Dress For...</td>
                                                <td><img src="assets/images/icons/add-img.svg" width="30" alt=""></td>
                                                <td><span class="status active">Active</span></td>
                                                <td>
                                                    <div class="action__buttons"><a
                                                            href="edit.category.html"
                                                            class="btn-action" title="Edit"><i
                                                                class="fas fa-pen-to-square"></i></a><a
                                                            href="http://127.0.0.1:8000/admin/category/delete/6"
                                                            class="btn-action delete" title="Delete"><i
                                                                class="fas fa-trash-alt"></i></a></div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Electronic</td>
                                                <td>electronic</td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="status active">Active</span></td>
                                                <td>
                                                    <div class="action__buttons"><a
                                                            href="edit.category.html"
                                                            class="btn-action" title="Edit"><i
                                                                class="fas fa-pen-to-square"></i></a><a
                                                            href="http://127.0.0.1:8000/admin/category/delete/4"
                                                            class="btn-action delete" title="Delete"><i
                                                                class="fas fa-trash-alt"></i></a></div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Health Category</td>
                                                <td>health-category</td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="status active">Active</span></td>
                                                <td>
                                                    <div class="action__buttons"><a
                                                            href="edit.category.html"
                                                            class="btn-action" title="Edit"><i
                                                                class="fas fa-pen-to-square"></i></a><a
                                                            href="http://127.0.0.1:8000/admin/category/delete/1"
                                                            class="btn-action delete" title="Delete"><i
                                                                class="fas fa-trash-alt"></i></a></div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Hoodie Collection</td>
                                                <td>hoodie-collection</td>
                                                <td>Dress For...</td>
                                                <td><img src="assets/images/icons/add-img.svg" width="30" alt=""></td>
                                                <td><span class="status active">Active</span></td>
                                                <td>
                                                    <div class="action__buttons"><a
                                                            href="edit.category.html"
                                                            class="btn-action" title="Edit"><i
                                                                class="fas fa-pen-to-square"></i></a><a
                                                            href="http://127.0.0.1:8000/admin/category/delete/7"
                                                            class="btn-action delete" title="Delete"><i
                                                                class="fas fa-trash-alt"></i></a></div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Long Sleeve Wear</td>
                                                <td>long-sleeve-wear</td>
                                                <td>Dress For...</td>
                                                <td><img src="assets/images/icons/add-img.svg" width="30" alt=""></td>
                                                <td><span class="status active">Active</span></td>
                                                <td>
                                                    <div class="action__buttons"><a
                                                            href="edit.category.html"
                                                            class="btn-action" title="Edit"><i
                                                                class="fas fa-pen-to-square"></i></a><a
                                                            href="http://127.0.0.1:8000/admin/category/delete/8"
                                                            class="btn-action delete" title="Delete"><i
                                                                class="fas fa-trash-alt"></i></a></div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Long Sleeve Wear</td>
                                                <td>long-sleeve-wear-1</td>
                                                <td>Dress For...</td>
                                                <td><img src="assets/images/icons/add-img.svg" width="30" alt=""></td>
                                                <td><span class="status active">Active</span></td>
                                                <td>
                                                    <div class="action__buttons"><a
                                                            href="edit.category.html0"
                                                            class="btn-action" title="Edit"><i
                                                                class="fas fa-pen-to-square"></i></a><a
                                                            href="http://127.0.0.1:8000/admin/category/delete/10"
                                                            class="btn-action delete" title="Delete"><i
                                                                class="fas fa-trash-alt"></i></a></div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Men Fashion</td>
                                                <td>men-fashion</td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="status active">Active</span></td>
                                                <td>
                                                    <div class="action__buttons"><a
                                                            href="edit.category.html"
                                                            class="btn-action" title="Edit"><i
                                                                class="fas fa-pen-to-square"></i></a><a
                                                            href="http://127.0.0.1:8000/admin/category/delete/3"
                                                            class="btn-action delete" title="Delete"><i
                                                                class="fas fa-trash-alt"></i></a></div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Sports</td>
                                                <td>sports</td>
                                                <td>Sports pro...</td>
                                                <td><img src="assets/images/icons/add-img.svg" width="30" alt=""></td>
                                                <td><span class="status active">Active</span></td>
                                                <td>
                                                    <div class="action__buttons"><a
                                                            href="edit.category.html"
                                                            class="btn-action" title="Edit"><i
                                                                class="fas fa-pen-to-square"></i></a><a
                                                            href="http://127.0.0.1:8000/admin/category/delete/5"
                                                            class="btn-action delete" title="Delete"><i
                                                                class="fas fa-trash-alt"></i></a></div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Waistcoart Collection</td>
                                                <td>waistcoart-collection</td>
                                                <td>Dress For...</td>
                                                <td><img src="assets/images/icons/add-img.svg" width="30" alt=""></td>
                                                <td><span class="status active">Active</span></td>
                                                <td>
                                                    <div class="action__buttons"><a
                                                            href="edit.category.html"
                                                            class="btn-action" title="Edit"><i
                                                                class="fas fa-pen-to-square"></i></a><a
                                                            href="http://127.0.0.1:8000/admin/category/delete/9"
                                                            class="btn-action delete" title="Delete"><i
                                                                class="fas fa-trash-alt"></i></a></div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Women Fashion</td>
                                                <td>women-fashion</td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="status active">Active</span></td>
                                                <td>
                                                    <div class="action__buttons"><a
                                                            href="edit.category.html"
                                                            class="btn-action" title="Edit"><i
                                                                class="fas fa-pen-to-square"></i></a><a
                                                            href="http://127.0.0.1:8000/admin/category/delete/2"
                                                            class="btn-action delete" title="Delete"><i
                                                                class="fas fa-trash-alt"></i></a></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->
                </div>
            </div>
            <!-- Footer section start -->
            <footer class="footer__area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer__copyright">
                                <div class="footer__copyright__left">
                                    <h2>2024 &copy; Fashionwave</h2>
                                </div>
                                <div class="footer__copyright__right">
                                    <h2>Designed &amp; Developed By Fashionwave</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer section end -->
        </div>

    </div>
    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary me-2" data-bs-dismiss="modal">Cancel</button>
                    <a href="http://127.0.0.1:8000/admin/logout" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>
@endsection