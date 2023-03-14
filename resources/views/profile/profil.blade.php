<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="enable">


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 04:43:45 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Profile | User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/favicon.ico') }}">

    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('admin/themesbrand.com/velzon/html/default/assets/libs/swiper/swiper-bundle.min.css') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/themesbrand.com/velzon/html/default/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/themesbrand.com/velzon/html/default/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/themesbrand.com/velzon/html/default/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('admin/themesbrand.com/velzon/html/default/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
    <div class="layout-width">

    </div>
</header>

<!-- removeNotificationModal -->
<!-- /.modal -->
        <!-- ========== App Menu ========== -->

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <!-- <div class="main-content"> -->

            <div class="page-content" style="padding-top: 30px">
                <div class="container-fluid">
                    <div class="profile-foreground position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg">
                            <img src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/profile-bg.jpg') }}" alt="" class="profile-wid-img" />
                        </div>
                    </div>
                    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                        <div class="row g-4">
                            <div class="col-auto">

                                <div class="avatar-lg p-0 rounded-circle profile-photo-edit">
                                    <img src="{{ asset('storage/'. Auth::user()->foto)}}" class="rounded-circle avatar-lg img-thumbnail user-profile-image" alt="user-profile-image"  />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col">
                                <div class="p-2">

                                    <h3 class="text-white mb-1">
                                    {{Auth::user()->name }}
                                    </h3>
                                    <p class="text-white-75">
                                    {{Auth::user()->email }}
                                </p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12 col-lg-auto order-last order-lg-0">
                                <div class="row text text-white-50 text-center">
                                    <div class="col-lg-6 col-4">
                                        <!-- <div class="p-2">
                                            <h4 class="text-white mb-1">24.3K</h4>
                                            <p class="fs-14 mb-0">Followers</p>
                                        </div> -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--end col-->

                        </div>
                        <!--end row-->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <div class="d-flex">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                                <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Statistik</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab">
                                                <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Tambah Wisata</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#projects" role="tab">
                                                <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Wisata</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                                <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Komentar</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="flex-shrink-0">
                                        <a href="/editprofil" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                                    </div>
                                    &nbsp;
                                    <div class="flex-shrink-0">
                                        <a href="/logoutuser" class="btn btn-danger"><i class="ri-edit-box-line align-bottom"></i> Logout</a>
                                    </div>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content pt-4 text-muted">
                                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-xxl-3">

                                                <!--end card-->
                                            </div>
                                            <!--end col-->

                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="tab-pane fade" id="activities" role="tabpanel">
                                    <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Tambah Data Destinasi</h5>

                                    </div>
                                    <div class="card-body">
                                        <form action="/insertdestinasi" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="customername-field" class="form-label">Nama
                                                    Wisata</label>
                                                <input type="text" id="customername-field" name="nama_wisata"
                                                    class="form-control" placeholder="Masukkan nama wisata" required />
                                                <div class="invalid-feedback">Masukkan nama wisata.</div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="email-field" class="form-label">Lokasi Wisata</label>
                                                <input type="text" id="email-field" name="lokasi" class="form-control"
                                                    placeholder="Masukkan lokasi wisata" required />
                                                <div class="invalid-feedback">Masukkan lokasi wisata.</div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="email-field" class="form-label">Nama Kota</label>
                                                <input type="text" id="email-field" name="id_kota" class="form-control"
                                                    placeholder="Masukkan nama kota"  />
                                            </div>


                                            <div class="mb-3">
                                                <label for="email-field" class="form-label">Harga Tiket Masuk</label>
                                                <input type="text" id="email-field" name="htm" class="form-control"
                                                    placeholder="Masukkan htm" required />
                                                <div class="invalid-feedback">Masukkan htm.</div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="date-field" class="form-label">Foto Wisata</label>
                                                <input type="file" id="date-field" name="foto_wisata"
                                                    class="form-control" placeholder="Select Photo" required />
                                                <div class="invalid-feedback">Pilih Foto.</div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="email-field" class="form-label">Deskripsi Wisata</label>
                                                <textarea class="summernote form-control" name="deskripsi" placeholder="Masukkan Deskripsi" id="deskripsi" required></textarea>
                                                <div class="invalid-feedback">Masukkan deskripsi.</div>
                                            </div>

                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="/kota" type="button" class="btn btn-light">Close</a>
                                                    <button type="submit" class="btn btn-success" id="edit-btn">Tambah
                                                        Wisata</button>
                                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane fade" id="projects" role="tabpanel">
                                        <div class="card">

                                            <div class="card-body">

                                                <div class="row">
                                                @foreach($data as $yolaa)
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-sm-6">
                                                        <div class="card profile-project-card shadow-none profile-project-warning">
                                                            <div class="card-body p-4">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                                        <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">{{$yolaa->nama_wisata}}</a></h5>
                                                                        <p class="text-muted text-truncate mb-0">Lokasi Wisata : <span class="fw-semibold text-dark">{{$yolaa->lokasi}}</span></p>
                                                                        <p class="text-muted text-truncate mb-0">Deskripsi Destinasi : <span class="fw-semibold text-dark">{{$yolaa->deskripsi}}</span></p>
                                                                        <!-- <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">Project Update</a></h5> -->
                                                                        <!-- <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">48 min Ago</span></p> -->
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <div class="badge badge-soft-warning fs-10">Inprogress</div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <!-- end card body -->
                                                        </div>
                                                        <!-- end card -->
                                                    </div>
                                                @endforeach

                                                    <!--end col-->

                                                    <!--end col-->
                                                    <!--  -->
                                                    <!--end col-->
                                                    <!--end col-->

                                                    <!--end col-->
                                                    <!--  -->
                                                    <!--end col-->

                                                    <!--end col-->
                                                    <!-- <div class="col-lg-12">
                                                        <div class="mt-4">
                                                            <ul class="pagination pagination-separated justify-content-center mb-0">
                                                                <li class="page-item disabled">
                                                                    <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                                </li>
                                                                <li class="page-item active">
                                                                    <a href="javascript:void(0);" class="page-link">1</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="javascript:void(0);" class="page-link">2</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="javascript:void(0);" class="page-link">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="javascript:void(0);" class="page-link">4</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="javascript:void(0);" class="page-link">5</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>

                                                <!--end row-->
                                            </div>

                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane fade" id="documents" role="tabpanel">
                                        <!-- <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-4">
                                                    <h5 class="card-title flex-grow-1 mb-0">Documents</h5>
                                                    <div class="flex-shrink-0">
                                                        <input class="form-control d-none" type="file" id="formFile">
                                                        <label for="formFile" class="btn btn-danger"><i class="ri-upload-2-fill me-1 align-bottom"></i> Upload File</label>
                                                    </div>
                                                </div> -->
                                            </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                </div>
                                <!--end tab-content-->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div><!-- container-fluid -->
            </div><!-- End Page-content -->

            <!-- <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer> -->
        </div><!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <!-- <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button> -->
    <!--end back-to-top-->

    <!--preloader-->


    <!-- Theme Settings -->


    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/js/plugins.js') }}"></script>

    <!-- swiper js -->
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- profile init js -->
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/js/pages/profile.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/js/app.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
            $(document).ready(function() {
                $('#deskripsi').summernote({

                });
            });
    </script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 04:43:46 GMT -->
</html>