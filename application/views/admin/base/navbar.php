<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-main border d-flex flex-column">
    <div class="container">   
        <div class="d-flex flex-row justify-content-between w-100 align-items-center">
            <a class="navbar-brand font-weight-bold" href="#">Dashboard</a>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <form class="bg-white d-none d-sm-flex flex-row w-50">
                <input class="mr-sm-2 w-100 i-search px-3 py-2" type="search" placeholder="Search" aria-label="Search">
                <button class="my-2 my-sm-0 btn-nav-main d-flex align-items-center mr-3" type="submit"><i class="material-icons">search</i></button>
            </form>
            <div class="d-flex flex-row align-items-center pointer profile-nav-btn" onclick="collapseBs()">
                Ryan
                <div class="bg-secondary rounded-circle ml-3 overflow-hidden" style="width: 40px; height: 40px;">
                    <img src="" class="" width="40px"/>
                </div>
            </div>
        </div>
    </div>
    <div class="container navbar-popup-m">
        <div id="search-mobile" class="w-100 collapse mt-3">
            <form class="bg-white d-flex d-sm-none flex-row w-100">
                <input class="mr-sm-2 w-100 i-search px-3 py-2" type="search" placeholder="Search" aria-label="Search">
                <button class="my-2 my-sm-0 btn-nav-main d-flex align-items-center mr-3" type="submit"><i class="material-icons">search</i></button>
            </form>
            <div class="container d-flex flex-column align-items-start mt-3">
                <a href="#">Profile</a>
                <hr class="border w-100"/>
                <a href="#">Logout</a>
            </div>
        </div>
    </div>    
</nav>

<script>
    function collapseBs(){
        $('#search-mobile').collapse('toggle');
    }
</script>