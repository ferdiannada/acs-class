@extends('layouts.master')

@section('main-content')
    <div class="section-body">
        <h2 class="section-title">{{ $title }}</h2>
        <p class="section-lead">
            Anda dapat mengelola semua tugas, seperti meng-upload tugas dan memonitoring tugas.
        </p>

        {{-- <div class="row">
            <div class="col-12">
                <div class="card mb-0">
                    <div class="card-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Semua <span class="badge badge-white">5</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Selesai <span class="badge badge-primary">2</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Belum <span class="badge badge-primary">1</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>All Tasks</h4>
                    </div>
                    <div class="card-body">
                        <div class="float-right">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="clearfix mb-3"></div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th>Deadline</th>
                                    <th>Status</th>
                                </tr>
                                <tr>
                                    <td>Dokumentasi Merangkai Kabel LAN
                                        <div class="table-links">
                                            <a href="{{ route('upload') }}">View</a>
                                            <div class="bullet"></div>
                                            <a href="#">Edit</a>
                                            <div class="bullet"></div>

                                        </div>
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>
                                        <div class="badge badge-primary">Selesai</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Membuat Topologi
                                        <div class="table-links">
                                            <a href="{{ route('upload') }}">View</a>
                                            <div class="bullet"></div>
                                            <a href="#">Edit</a>
                                            <div class="bullet"></div>

                                        </div>
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>
                                        <div class="badge badge-primary">Selesai</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Setting Mikrotik
                                        <div class="table-links">
                                            <a href="{{ route('upload') }}">View</a>
                                            <div class="bullet"></div>
                                            <a href="#">Edit</a>
                                            <div class="bullet"></div>

                                        </div>
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>
                                        <div class="badge badge-warning">Belum Selesai</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        {{-- <div class="float-right">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
