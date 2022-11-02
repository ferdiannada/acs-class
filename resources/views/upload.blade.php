@extends('layouts.master')

@section('main-content')
    <div class="section-body">
        <h2 class="section-title">Upload Tugas</h2>
        <p class="section-lead">
            Anda bisa upload tugas dengan format file di halaman ini.
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Upload File</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" class="dropzone" id="mydropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
