@extends('layouts.master')

@section('main-content')
    <h2 class="section-title">Materi</h2>
    <p class="section-lead">Silakan buka materi yang anda inginkan!.</p>
    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
                <div class="article-header">
                    <div class="article-image" data-background="../assets/img/news/jaringan-dasar.png">
                    </div>
                </div>
                <div class="article-details">
                    
                    <div class="article-title">
                        <h2><a href="#">Pengenalan Jaringan Dasar</a></h2>
                    </div>
                    <p>Pada materi ini anda akan di kenalkan dengan konsep jaringan. </p>
                        <div class="buttons">
                            <a href="#" class="btn btn-icon icon-left btn-primary btn-lg"><i class="fas fa-search"></i> Readme</a>
                        </div>
                </div>
            </article>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
                <div class="article-header">
                    <div class="article-image" data-background="../assets/img/news/topologi-jaringan.png">
                    </div>
                </div>
                <div class="article-details">
                    
                    <div class="article-title">
                        <h2><a href="#">Topologi Jaringan</a></h2>
                    </div>
                    <p>Pada materi ini anda akan mempelajari tentang pembuatan topologi jaringan. </p>
                        <div class="buttons">
                            <a href="#" class="btn btn-icon icon-left btn-primary btn-lg"><i class="fas fa-search"></i> Readme</a>
                        </div>
                </div>
            </article>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
                <div class="article-header">
                    <div class="article-image" data-background="../assets/img/news/mikrotik.jpeg">
                    </div>
                </div>
                <div class="article-details">
                    
                    <div class="article-title">
                        <h2><a href="#">Konfigurasi Mikrotik</a></h2>
                    </div>
                    <p>Pada materi ini anda akan mempelajari dan memahami cara kerja dan konfigurasi mikrotik. </p>
                    <div class="buttons">
                        <a href="#" class="btn btn-icon icon-left btn-primary btn-lg"><i class="fas fa-search"></i> Readme</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
@endsection
