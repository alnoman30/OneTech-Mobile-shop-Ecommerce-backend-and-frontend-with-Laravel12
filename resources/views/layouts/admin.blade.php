<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneTech|Dashboard</title>

    <!-- Favicon included -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Apple touch icon included -->
    <link rel="apple-touch-icon" href="{{ asset('backend/assets/images/favicon.png') }}">

    <!-- All CSS files included here -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <link href="{{ asset('backend/assets/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/summernote/summernote-bs4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/select2/css/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/image-preview.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/styles/main.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/summernote.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/summernote-lite.min.css') }}">
    <link href="{{ asset('backend/assets/vendor/css/admin/extra.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/cookie-consent.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/toastr.min.css') }}">
    @stack('styles')
</head>


<body>
    <!-- Sidebar area start -->
    <div class="sidebar__area">
        <div class="sidebar__close">
            <button class="close-btn">
                <i class="fa fa-close"></i>
            </button>
        </div>
        <div class="sidebar__brand">
            <a href="{{ route('dashboard')}}">
                <p style="color: #FFFFFF; font-size:40px; font-weight:500;">OneTech</p>
            </a>
        </div>
        <ul id="sidebar-menu" class="sidebar__menu">
            <li class="mm-active">
                <a href="{{ route('dashboard')}}">
                    <img src="{{ asset('backend/assets/images/icons/sidebar/dashboard.svg')}}" alt="icon">
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="">
                <a class="has-arrow" href="#">
                    <i class="fas fa-user"></i>
                    <span>Admin Manage</span>
                </a>
                <ul>
                    <li class="">
                        <a href="assets/admins">
                            <i class="fa fa-circle"></i>
                            <span>Admin List</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="assets/create-admin">
                            <i class="fa fa-circle"></i>
                            <span>Add Admin</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="assets/roles">
                            <i class="fa fa-circle"></i>
                            <span>Roles</span>
                        </a>
                    </li>
                </ul>
            </li>
<li>
    <a class="has-arrow" href="#">
        <i class="fas fa-list"></i>
        <span>Category and Brand</span>
    </a>
    <ul>
        <!-- Category Menu -->
        <li>
            <a class="has-arrow" href="#">
                <i class="fa fa-circle"></i>
                <span>Category</span>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.category') }}">
                        <i class="fa fa-dot-circle"></i>
                        <span>Main Category</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-dot-circle"></i>
                        <span>Sub category</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-dot-circle"></i>
                        <span>Child Category</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Brand Menu -->
        <li>
            <a href="{{ route('admin.brand') }}">
                <i class="fa fa-circle"></i>
                <span>Brand</span>
            </a>
        </li>
    </ul>
</li>

            <li class="">
                <a class="has-arrow" href="#">
                    <i class="fab fa-product-hunt"></i>
                    <span>Products</span>
                </a>
                <ul>
                    <li class="">
                        <a href="create-product.html">
                            <i class="fa fa-circle"></i>
                            <span>Add Product</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="products.html">
                            <i class="fa fa-circle"></i>
                            <span>Product List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Order Management</span>
                </a>
                <ul>
                    <li class="">
                        <a href="orders.html">
                            <i class="fa fa-circle"></i>
                            <span>All Orders</span>
                            <span class="badge bg-info text-white">1</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="transactions.html">
                    <i class="fas fa-random"></i>
                    <span>Transactions</span>
                </a>
            </li>
            <li class="">
                <a href="assets/country-tax-list">
                    <i class="fas fa-percent"></i>
                    <span>Tax Settings</span>
                </a>
            </li>
            <li class="">
                <a href="assets/delivery-charge-list">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Delivery Charge</span>
                </a>
            </li>
            <li class="">
                <a href="coupon.html">
                    <i class="fas fa-code"></i>
                    <span>Coupon Code</span>
                </a>
            </li>
            <li class="">
                <a class="has-arrow" href="#">
                    <i class="fas fa-blog"></i>
                    <span>CRM</span>
                </a>
                <ul>
                    <li class="">
                        <a href="contacts.html">
                            <i class="fa fa-circle"></i>
                            <span>Contact Us</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="subscriber.html">
                            <i class="fa fa-circle"></i>
                            <span>Subscribers</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                </a>
                <ul>
                    <li class="">
                        <a href="customers.html">
                            <i class="fa fa-circle"></i>
                            <span>Customer List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#">
                    <i class="fas fa-cube"></i>
                    <span>CMS</span>
                </a>
                <ul>
                    <li class="">
                        <a href="settings.html">
                            <i class="fa fa-circle"></i>
                            <span>General Settings</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="home-settings.html">
                            <i class="fa fa-circle"></i>
                            <span>Home Page</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="testimonial.html">
                            <i class="fa fa-circle"></i>
                            <span>Testimonial</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="languages.html">
                            <i class="fa fa-circle"></i>
                            <span>Languages</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="sliders.html">
                    <i class="fas fa-list-ol"></i>
                    <span>Sliders</span>
                </a>
            </li>
            <li class="">
                <a class="has-arrow" href="#">
                    <i class="fas fa-cube"></i>
                    <span>SEO Management</span>
                </a>
                <ul>
                    <li class="">
                        <a href="seo-homepage.html">
                            <i class="fa fa-circle"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="seo-homepage.html">
                            <i class="fa fa-circle"></i>
                            <span>About Us</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="seo-homepage.html">
                            <i class="fa fa-circle"></i>
                            <span>Contact</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="seo-homepage.html">
                            <i class="fa fa-circle"></i>
                            <span>Products</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="seo-homepage.html">
                            <i class="fa fa-circle"></i>
                            <span>Cart</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="seo-homepage.html">
                            <i class="fa fa-circle"></i>
                            <span>Checkout</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="seo-homepage.html">
                            <i class="fa fa-circle"></i>
                            <span>Wishlist</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="seo-homepage.html">
                            <i class="fa fa-circle"></i>
                            <span>Compare</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="seo-homepage.html">
                            <i class="fa fa-circle"></i>
                            <span>Sign In</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="seo-homepage.html">
                            <i class="fa fa-circle"></i>
                            <span>Sign Up</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="seo-homepage.html">
                            <i class="fa fa-circle"></i>
                            <span>Forget Password</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="seo-homepage.html">
                            <i class="fa fa-circle"></i>
                            <span>Reset Password</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="">
                <a href="gateways.html">
                    <i class="fa fa-money-bill"></i>
                    <span>Payment Gateway</span>
                </a>
            </li>
            <li class="">
                <a class="has-arrow" href="#">
                    <i class="fas fa-address-book"></i>
                    <span>Company</span>
                </a>
                <ul>
                    <li class="">
                        <a href="faq.html">
                            <i class="fa fa-circle"></i>
                            <span>FAQ</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="pages.html">
                            <i class="fa fa-circle"></i>
                            <span>Privacy Policy</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="pages.html">
                            <i class="fa fa-circle"></i>
                            <span>Terms &amp; Condition</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Sidebar area end -->

        <!-- Header section end -->
    @yield('content')

    <script src="{{ asset('backend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/js/admin/summernote-init.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/data-table-page.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/image-preview.js') }}"></script>
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
    <script src="{{ asset('backend/assets/js/summernote-lite.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/toastr.min.js') }}"></script>

    <script src="{{ asset('backend/assets/vendor/plugins/chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/js/admin/dashboard.js') }}"></script>
    <script>
        multipleLineChart = document.getElementById('multipleLineChart').getContext('2d'),
            multipleLineChart2 = document.getElementById('multipleLineChart2').getContext('2d')
        var myMultipleLineChart = new Chart(multipleLineChart, {
            type: 'bar',
            data: {
                labels: ['15 Nov', '14 Nov', '13 Nov', '12 Nov', '11 Nov', '10 Nov', '09 Nov', '08 Nov',
                    '07 Nov', '06 Nov', '05 Nov', '04 Nov', '03 Nov', '02 Nov', '01 Nov', '31 Oct',
                    '30 Oct', '29 Oct', '28 Oct', '27 Oct', '26 Oct', '25 Oct', '24 Oct', '23 Oct',
                    '22 Oct', '21 Oct', '20 Oct', '19 Oct', '18 Oct', '17 Oct',
                ],
                datasets: [{
                    label: "Product Sales",
                    borderColor: "#6777ef",
                    pointBorderColor: "#FFF",
                    pointBackgroundColor: "#6777ef",
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 1,
                    pointRadius: 4,
                    backgroundColor: '#6777ef',
                    fill: true,
                    borderWidth: 2,
                    data: ['0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',
                        '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                layout: {
                    padding: {
                        left: 15,
                        right: 15,
                        top: 15,
                        bottom: 15
                    }
                }
            }
        });
        var myMultipleLineChart2 = new Chart(multipleLineChart2, {
            type: 'bar',
            data: {
                labels: ['15 Nov', '14 Nov', '13 Nov', '12 Nov', '11 Nov', '10 Nov', '09 Nov', '08 Nov',
                    '07 Nov', '06 Nov', '05 Nov', '04 Nov', '03 Nov', '02 Nov', '01 Nov', '31 Oct',
                    '30 Oct', '29 Oct', '28 Oct', '27 Oct', '26 Oct', '25 Oct', '24 Oct', '23 Oct',
                    '22 Oct', '21 Oct', '20 Oct', '19 Oct', '18 Oct', '17 Oct',
                ],
                datasets: [{
                    label: "Earning $",
                    borderColor: "#66bb6a",
                    pointBorderColor: "#FFF",
                    pointBackgroundColor: "#66bb6a",
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 1,
                    pointRadius: 4,
                    backgroundColor: '#66bb6a',
                    fill: true,
                    borderWidth: 2,
                    data: ['0', '0', '0', '0', '540.00', '0', '0', '0', '0', '0', '0', '0', '0', '0',
                        '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',
                        '0',
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                layout: {
                    padding: {
                        left: 15,
                        right: 15,
                        top: 15,
                        bottom: 15
                    }
                }
            }
        });
    </script>
    <script src="{{ asset('backend/assets/vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>

    
    @stack('scripts')
</body>

</html>