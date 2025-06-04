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
                                        <h2>Subscribers</h2>
                                    </div>
                                </div>
                                <div class="breadcrumb__content__right">
                                    <nav aria-label="breadcrumb">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a
                                                    href="http://127.0.0.1:8000/admin/dashboard">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Subscribers</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="customers__area bg-style mb-30">
                                <div class="customers__table">
                                    <table id="ContactUsTable"
                                        class="dataTableHover row-border data-table-filter table-style">
                                        <thead>
                                            <tr>
                                                <th>SL.</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($subscribers as $subs )
                                              <tr>
                                                <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                                                <td>{{ $subs->email}}</td>
                                            </tr>  
                                            @endforeach
                                        </tbody>
                                        <div class="mb-3">
                                            {{ $subscribers->links('pagination::bootstrap-5') }}
                                    </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->
                    <div class="modal fade" id="viewModal1" tabindex="-1" role="dialog"
                        aria-labelledby="viewModalTitle1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-success">
                                    <h5 class="modal-title text-white" id="viewModalLongTitle">Promotion</h5>
                                    <button type="button" class="close text-white" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form enctype="multipart/form-data" method="POST"
                                    action="http://127.0.0.1:8000/subscribe/promote">
                                    <div class="modal-body">
                                        <input type="hidden" name="_token"
                                            value="lQnPJszFLzHk1PTa9MiQLLAw2hp88UgTyN0H2TXf">
                                        <div class="input__group mb-25">
                                            <label for="question">Email</label>
                                            <input type="text" name="email" placeholder="Email"
                                                value="tandtboysschool@gmail.com" readonly>
                                        </div>
                                        <div class="input__group mb-25">
                                            <label for="exampleInputEmail1">Message</label>
                                            <textarea name="message" id="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger me-2"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Promote</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  
 
@endsection