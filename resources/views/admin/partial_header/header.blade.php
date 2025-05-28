        <!-- Header section start -->
        <header class="header__area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header__navbar">
                            <div class="header__navbar__left">
                                <button class="sidebar-toggler">
                                    <img src="{{ asset('backend/assets/images/images/icons/header/bars.svg')}}" alt="">
                                </button>
                                <a href="http://127.0.0.1:8000" target="_blank" class="btn btn-primary text-white">
                                    <i class="fas fa-external-link-alt"></i>
                                </a> </div>
                            <div class="header__navbar__right">
                                <ul class="header__menu">
                                    <li>
                                        <a href="#" class="btn btn-dropdown user-profile" data-bs-toggle="dropdown">
                                            <img src="{{ asset('backend/assets/images/admin_profile/profile.png')}}" alt="icon">
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="profile.html">
                                                    <img src="{{ asset('backend/assets/images/icons/user.svg')}}" alt="icon">
                                                    <span>Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#logoutModal">
                                                    <img src="{{ asset('backend/assets/images/icons/logout.svg')}}" alt="icon">
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
                        <form action="{{ route('logout')}}" method="POST">
                            @csrf
                            <button type="button" class="btn btn-outline-primary me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Logout</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>