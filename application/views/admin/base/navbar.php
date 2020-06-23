<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-main d-flex flex-column">
    <div class="container">   
        <div class="d-flex flex-row justify-content-between w-100 align-items-center">
            <div class="d-flex felx-row align-items-center">
                <a class="navbar-brand font-weight-bold" href="#">Dashboard</a>
                <div class="d-none d-sm-flex flex-row">
                    <a href="#" class="mx-2 text-light">Lagu baru</a>
                    <a href="#" class="mx-2 text-light">Kompetitor</a>
                    <a href="#" class="mx-2 text-light">Statistik</a>
                </div>
            </div>
            <div class="d-flex d-sm-none flex-row align-items-center pointer profile-nav-btn text-primary" onclick="collapseMob()">
                Ryan
                <div class="bg-primary rounded-circle ml-3 overflow-hidden" style="width: 40px; height: 40px;">
                    <img src="<?php echo asset_url(); ?>img/panda.png" class="" width="40px"/>
                </div>
            </div>
            <div class="d-none d-sm-flex flex-row align-items-center pointer profile-nav-btn text-primary" onclick="collapseBs()">
                Ryan
                <div class="bg-primary rounded-circle ml-3 overflow-hidden" style="width: 40px; height: 40px;">
                    <img src="<?php echo asset_url(); ?>img/panda.png" class="" width="40px"/>
                </div>
            </div>
        </div>
    </div>
    <div class="container navbar-popup-m">
        <div id="search-mobile" class="w-100 d-sm-none collapse my-2">
            <div class="container d-flex flex-column align-items-start mt-3">
                <a href="#" class="text-light">Profile</a>
                <hr class="w-100"/>
                <a href="#" class="text-light">Lagu baru</a>
                <hr class="w-100"/>
                <a href="#" class="text-light">Kompetitor</a>
                <hr class="w-100"/>
                <a href="#" class="text-light">Statistik</a>
                <hr class="w-100"/>
                <a href="#" class="text-light">Logout</a>
            </div>
        </div>
    </div>    
</nav>
<div id="desktopcollapse" class="collapse container position-relative">
    <div class="shadow bg-light border px-2 py-2 position-absolute" style="width: 140px; right: 0; z-index: 99;">
        <a href="#" class="d-block">Profile</a>
        <a href="#" class="d-block mt-3">Logout</a>
    </div>
</div>

<script>
    function collapseMob(){
        $('#search-mobile').collapse('toggle');
    }
    function collapseBs(){
        $('#desktopcollapse').collapse('toggle');
    }
    $('html').click(function(){
        $('.collapse').collapse('hide');
    });
</script>