@extends('layout.master')

@section('title')
    Dashboard
@endsection

@section('main-content')

<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
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
          <i class="far fa-newspaper"></i>
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
          <i class="far fa-file"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Tugas Belum Selesai</h4>
          </div>
          <div class="card-body">
            1,201
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
    <div class="col-lg-8 col-md-12 col-12 col-sm-12">
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
                  <th>Author</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    Introduction Laravel 5
                    <div class="table-links">
                      in <a href="#">Web Development</a>
                      <div class="bullet"></div>
                      <a href="#">View</a>
                    </div>
                  </td>
                  <td>
                    <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                  </td>
                  <td>
                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Detail"><i class="fas fa-info"></i></a>

                  </td>
                </tr>
                <tr>
                  <td>
                    Laravel 5 Tutorial - Installation
                    <div class="table-links">
                      in <a href="#">Web Development</a>
                      <div class="bullet"></div>
                      <a href="#">View</a>
                    </div>
                  </td>
                  <td>
                    <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                  </td>
                  <td>
                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Detail"><i class="fas fa-info"></i></a>

                  </td>
                </tr>
                <tr>
                  <td>
                    Laravel 5 Tutorial - MVC
                    <div class="table-links">
                      in <a href="#">Web Development</a>
                      <div class="bullet"></div>
                      <a href="#">View</a>
                    </div>
                  </td>
                  <td>
                    <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                  </td>
                  <td>
                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Detail"><i class="fas fa-info"></i></a>

                  </td>
                </tr>
                <tr>
                  <td>
                    Laravel 5 Tutorial - Migration
                    <div class="table-links">
                      in <a href="#">Web Development</a>
                      <div class="bullet"></div>
                      <a href="#">View</a>
                    </div>
                  </td>
                  <td>
                    <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                  </td>
                  <td>
                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Detail"><i class="fas fa-info"></i></a>

                  </td>
                </tr>
                <tr>
                  <td>
                    Laravel 5 Tutorial - Deploy
                    <div class="table-links">
                      in <a href="#">Web Development</a>
                      <div class="bullet"></div>
                      <a href="#">View</a>
                    </div>
                  </td>
                  <td>
                    <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                  </td>
                  <td>
                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Detail"><i class="fas fa-info"></i></a>

                  </td>
                </tr>
                <tr>
                  <td>
                    Laravel 5 Tutorial - Closing
                    <div class="table-links">
                      in <a href="#">Web Development</a>
                      <div class="bullet"></div>
                      <a href="#">View</a>
                    </div>
                  </td>
                  <td>
                    <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                  </td>
                  <td>
                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Detail"><i class="fas fa-info"></i></a>

                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-12 col-12 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4>Recent Activities</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled list-unstyled-border">
            <li class="media">
              <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
              <div class="media-body">
                <div class="float-right text-primary">Now</div>
                <div class="media-title">Farhan A Mujib</div>
                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
              </div>
            </li>
            <li class="media">
              <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png" alt="avatar">
              <div class="media-body">
                <div class="float-right">12m</div>
                <div class="media-title">Ujang Maman</div>
                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
              </div>
            </li>
            <li class="media">
              <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-3.png" alt="avatar">
              <div class="media-body">
                <div class="float-right">17m</div>
                <div class="media-title">Rizal Fakhri</div>
                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
              </div>
            </li>
            <li class="media">
              <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png" alt="avatar">
              <div class="media-body">
                <div class="float-right">21m</div>
                <div class="media-title">Alfa Zulkarnain</div>
                <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
              </div>
            </li>
          </ul>
          <!-- <div class="text-center pt-1 pb-1">
            <a href="#" class="btn btn-primary btn-lg btn-round">
              View All
            </a>
          </div> -->
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
            <div class="dropdown">
              <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">Filter</a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> Electronic</a>
                <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> T-shirt</a>
                <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> Hat</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">View All</a>
              </div>
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
                    <img class="mr-3 rounded" width="50" src="../assets/img/products/product-1-50.png" alt="product">
                  </a>
                  <div class="media-body">
                    <div class="media-right">$405</div>
                    <div class="media-title"><a href="#">PlayStation 9</a></div>
                    <div class="text-muted text-small">by <a href="#">Hasan Basri</a> <div class="bullet"></div> Sunday</div>
                  </div>
                </li>
                <li class="media">
                  <a href="#">
                    <img class="mr-3 rounded" width="50" src="../assets/img/products/product-2-50.png" alt="product">
                  </a>
                  <div class="media-body">
                    <div class="media-right">$499</div>
                    <div class="media-title"><a href="#">RocketZ</a></div>
                    <div class="text-muted text-small">by <a href="#">Hasan Basri</a> <div class="bullet"></div> Sunday
                    </div>
                  </div>
                </li>
                <li class="media">
                  <a href="#">
                    <img class="mr-3 rounded" width="50" src="../assets/img/products/product-3-50.png" alt="product">
                  </a>
                  <div class="media-body">
                    <div class="media-right">$149</div>
                    <div class="media-title"><a href="#">Xiaomay Readme 4.0</a></div>
                    <div class="text-muted text-small">by <a href="#">Kusnaedi</a> <div class="bullet"></div> Tuesday
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
