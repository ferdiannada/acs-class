@extends('layout.master')

@section('main-content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-book"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Materi</h4>
                    </div>
                    <div class="card-body">
                        10
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-tasks"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Tugas Selesai</h4>
                    </div>
                    <div class="card-body">
                        42
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-calendar-times"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Tugas Belum Selesai</h4>
                    </div>
                    <div class="card-body">
                        5
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Online Users</h4>
                    </div>
                    <div class="card-body">
                        47
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>New Modul Updates</h4>
                    <div class="card-header-action">
                        <a href="#" class="btn btn-primary">View All</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Pengenalan Jaringan Dasar
                                        <div class="table-links">
                                            in <a href="#">Network Class</a>
                                            <div class="bullet"></div>
                                            <a href="#">View</a>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Detail"><i
                                                class="fas fa-info"></i></a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Topologi Jaringan
                                        <div class="table-links">
                                            in <a href="#">Network Class</a>
                                            <div class="bullet"></div>
                                            <a href="#">View</a>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Detail"><i
                                                class="fas fa-info"></i></a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Konfigurasi Mikrotik
                                        <div class="table-links">
                                            in <a href="#">Network Class</a>
                                            <div class="bullet"></div>
                                            <a href="#">View</a>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Detail"><i
                                                class="fas fa-info"></i></a>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Recent Activities</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border">
                        <li class="media">
                            <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png"
                                alt="avatar">
                            <div class="media-body">
                                <div class="float-right text-primary">Now</div>
                                <div class="media-title">Farhan A Mujib</div>
                                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                    metus scelerisque ante sollicitudin.</span>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png"
                                alt="avatar">
                            <div class="media-body">
                                <div class="float-right">12m</div>
                                <div class="media-title">Ujang Maman</div>
                                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                    metus scelerisque ante sollicitudin.</span>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-3.png"
                                alt="avatar">
                            <div class="media-body">
                                <div class="float-right">17m</div>
                                <div class="media-title">Rizal Fakhri</div>
                                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                    metus scelerisque ante sollicitudin.</span>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png"
                                alt="avatar">
                            <div class="media-body">
                                <div class="float-right">21m</div>
                                <div class="media-title">Alfa Zulkarnain</div>
                                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                    metus scelerisque ante sollicitudin.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>This Week Deadline</h4>
                    <div class="card-header-action">
                        <div class="row">
                            <button class="btn btn-primary">{{ now('Asia/Jakarta')->toFormattedDateString() }}</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="summary">
                        <div class="summary-info">
                            <h4>$1,053</h4>
                            <div class="text-muted">Sold 3 items on 2 customers</div>
                            <div class="d-block mt-2">
                                <a href="#">View All</a>
                            </div>
                        </div>
                        <div class="summary-item">
                            <h6>Item List <span class="text-muted">(3 Items)</span></h6>
                            <ul class="list-unstyled list-unstyled-border">
                                <li class="media">
                                    <a href="#">
                                        <img class="mr-3 rounded" width="50"
                                            src="../assets/img/products/product-4-50.png" alt="product">
                                    </a>
                                    <div class="media-body">
                                        <div class="buttons media-right">
                                            <a href="#" class="btn btn-icon icon-left btn-primary btn-lg"><i class="fas fa-check"></i> Selesaikan</a>
                                        </div>
                                        {{-- <div class="media-right">$405</div> --}}
                                        <div class="media-title"><a href="#">Dokumentasi Pembuatan Kabel LAN</a></div>
                                        <div class="text-muted text-small">by <a href="#">Moh Munir</a>
                                            <div class="bullet"></div> Sunday
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <img class="mr-3 rounded" width="50"
                                            src="../assets/img/products/product-4-50.png" alt="product">
                                    </a>
                                    <div class="media-body">
                                        <div class="buttons media-right">
                                            <a href="#" class="btn btn-icon icon-left btn-primary btn-lg"><i class="fas fa-check"></i> Selesaikan</a>
                                        </div>
                                        {{-- <div class="media-right">$499</div> --}}
                                        <div class="media-title"><a href="#">Setting Mikrotik</a></div>
                                        <div class="text-muted text-small">by <a href="#">Alim Sujito</a>
                                            <div class="bullet"></div> Sunday
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <img class="mr-3 rounded" width="50"
                                            src="../assets/img/products/product-4-50.png" alt="product">
                                    </a>
                                    <div class="media-body">
                                        <div class="buttons media-right">
                                            <a href="#" class="btn btn-icon icon-left btn-primary btn-lg"><i class="fas fa-check"></i> Selesaikan</a>
                                        </div>
                                        {{-- <div class="media-right">$149</div> --}}
                                        <div class="media-title"><a href="#">Membuat Topologi Lokal</a></div>
                                        <div class="text-muted text-small">by <a href="#">Zainul Arifin</a>
                                            <div class="bullet"></div> Tuesday
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
