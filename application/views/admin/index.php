<!DOCTYPE html> 
<html> 
<head>
    <title>Dashboard</title>
    <!-- Style  -->
    <?php $this->load->view('admin/head/styling'); ?>

    <!-- Meta  -->
    <?php $this->load->view('admin/head/meta'); ?>
</head>
<body>
<?php $this->load->view('admin/base/navbar'); ?>
<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-12 col-sm-4">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light rounded-lg border p-3">
                        <div class="bg-light rounded-lg p-3 shadow d-flex flex-column align-items-center">
                            <img src="<?php echo asset_url();?>img/fox.png" class="" width="50px"/>
                            <p class="text-primary">Cari single lagu</p>
                            <button class="btn btn-warning">Mulai Cari</button>
                        </div>
                        <div class="bg-light rounded-lg p-3 shadow d-flex flex-column align-items-center mt-3">
                            <img src="<?php echo asset_url();?>img/green.png" class="" width="50px"/>
                            <p class="text-primary">Cari playlist lagu</p>
                            <button class="btn btn-success">Mulai Cari</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-12 col-sm-8 mt-4 mt-sm-0">
            <div id="content" class="row">
                <!-- Lagu baru -->
                <div class="col-12">    
                    <h3 class="mb-4">Lagu Terbaru</h3>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="">
                                <div class="bg-secondary lb">
                                    <img src="" class="" width="120px" height="110px"/>
                                </div>
                                <p class="text-secondary mt-2">Judul Lagu</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="bg-secondary lb">
                                    <img src="" class="" width="120px" height="110px"/>
                                </div>
                                <p class="text-secondary mt-2">Judul Lagu</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="bg-secondary lb">
                                    <img src="" class="" width="120px" height="110px"/>
                                </div>
                                <p class="text-secondary mt-2">Judul Lagu</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="bg-secondary lb">
                                    <img src="" class="" width="120px" height="110px"/>
                                </div>
                                <p class="text-secondary mt-2">Judul Lagu</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="bg-secondary lb">
                                    <img src="" class="" width="120px" height="110px"/>
                                </div>
                                <p class="text-secondary mt-2">Judul Lagu</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="bg-secondary lb">
                                    <img src="" class="" width="120px" height="110px"/>
                                </div>
                                <p class="text-secondary mt-2">Judul Lagu</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="bg-secondary lb">
                                    <img src="" class="" width="120px" height="110px"/>
                                </div>
                                <p class="text-secondary mt-2">Judul Lagu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section 2 -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="card mr-2 border-0 bg-light" style="">
                                <div class="card-body">
                                  <h5 class="card-title">Kabar Hari Ini</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">Trending hari ini</h6>
                                  <img src="<?php echo asset_url();?>img/newspaper.png" width="60px" class="my-3"/>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="card-link">Card link</a>
                                  <a href="#" class="card-link">Another link</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="card mr-2 border-0 bg-light" style="">
                                <div class="card-body">
                                  <h5 class="card-title">Laporan Statistik</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">Berikut hasil rangkuman statistik website</h6>
                                  <img src="<?php echo asset_url();?>img/analysis.png" width="70px" class="my-3"/>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="card-link">Card link</a>
                                  <a href="#" class="card-link">Another link</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <!-- Section 3 -->
                <div class="col-12 mt-3">
                    <div class="bg-primary p-2">
                        <form class="bg-primary d-flex flex-row w-100">
                            <input class="mr-sm-2 w-100 i-search px-3 py-2" type="search" placeholder="Cari lagu..." aria-label="Search">
                            <button class="my-2 my-sm-0 btn-nav-main d-flex align-items-center mr-3" type="submit"><i class="material-icons text-white">search</i></button>
                        </form>
                    </div>
                    <div class="mt-3 song">
                        <div class="p-3 bg-light rounded-lg d-flex flex-row mt-3">
                            <div class="rounded-circle shadow bg-warning d-flex justify-content-center align-items-center font-weight-bold" style="width: 45px; height: 45px;">
                                1
                            </div>
                            <div class="bg-primary rounded-lg ml-3 overflow-hidden" style="width: 120px; height: 110px;">
                                <img src="" class="rounded-lg" width="120px" height="110px"/>
                            </div>
                            <div class="ml-3">
                                <p class="">Justin Timberlake feat Snop Dogg</p>
                            </div>
                        </div>
                        <div class="p-3 bg-light rounded-lg d-flex flex-row mt-3">
                            <div class="rounded-circle shadow bg-warning d-flex justify-content-center align-items-center font-weight-bold" style="width: 45px; height: 45px;">
                                2
                            </div>
                            <div class="bg-primary rounded-lg ml-3 overflow-hidden" style="width: 120px; height: 110px;">
                                <img src="" class="rounded-lg" width="120px" height="110px"/>
                            </div>
                            <div class="ml-3">
                                <p class="">Justin Timberlake feat Snop Dogg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:3,
            nav:false,
            loop: false
        },
        600:{
            items:4,
            nav:false,
            loop: false
        },
        1000:{
            items:6,
            nav:false,
            loop: false
        }
    }
});
</script>
</html>