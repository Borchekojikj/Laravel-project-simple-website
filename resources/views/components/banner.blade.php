<div class="row justify-content-center banner" style="background-image: url('{{ $imgUrl }}')">

    <div class="col-8">

        <!-- <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <div class="d-flex ms-auto">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('page.home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('page.about')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('page.sample') }}">Sample post</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route( 'page.contact' )}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav> -->
        <x-navbar />
    </div>
    <div class="col-7 px-5 text-center  text-white text">
        <p class="h1">{{ $bannerTitle }}</p>
        <p>{{ $bannerMessage }}</p>
    </div>
</div>