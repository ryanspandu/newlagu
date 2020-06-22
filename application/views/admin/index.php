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
<div class="container mt-3">
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
            <div class="row">
                <!-- Lagu baru -->
                <div class="col-12">    
                    <h3 class="mb-4">Lagu Terbaru</h3>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="">
                                <div class="bg-primary lb">
                                    <img src="" class="" width="120px" height="110px"/>
                                </div>
                                <p class="text-secondary mt-2">Judul Lagu</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="bg-primary lb">
                                    <img src="" class="" width="120px" height="110px"/>
                                </div>
                                <p class="text-secondary mt-2">Judul Lagu</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="bg-primary lb">
                                    <img src="" class="" width="120px" height="110px"/>
                                </div>
                                <p class="text-secondary mt-2">Judul Lagu</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="bg-primary lb">
                                    <img src="" class="" width="120px" height="110px"/>
                                </div>
                                <p class="text-secondary mt-2">Judul Lagu</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="bg-primary lb">
                                    <img src="" class="" width="120px" height="110px"/>
                                </div>
                                <p class="text-secondary mt-2">Judul Lagu</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="bg-primary lb">
                                    <img src="" class="" width="120px" height="110px"/>
                                </div>
                                <p class="text-secondary mt-2">Judul Lagu</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="bg-primary lb">
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
                                  <h5 class="card-title">Kabar Terbaru</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">Trending hari ini</h6>
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
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="card-link">Card link</a>
                                  <a href="#" class="card-link">Another link</a>
                                </div>
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