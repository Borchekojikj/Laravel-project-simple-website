<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('style.css') }}">



</head>

<body>
    <div class="container-fluid">

        <header>
            <x-banner bannerTitle="{{$bannerTitle}}" bannerMessage="{{$bannerMessage}}" imgUrl={{$img}} />

        </header>

        <main>
            <div class="row justify-content-center border-bottom">
                <div class="col-7 px-5">
                    <div class="post">
                        <h4> Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corrupti deserunt quisquam iusto ipsum quod deleniti incidunt aspernatur, sed ipsa, modi iure non atque animi?</p>
                        <p><span class="text-secondary">Posted by:</span> <span class="fw-bold">John Doe</span></p>

                    </div>
                </div>
                <div class="col-7 px-5">
                    <div class="post">
                        <h4> Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corrupti deserunt quisquam iusto ipsum quod deleniti incidunt aspernatur, sed ipsa, modi iure non atque animi?</p>
                        <p><span class="text-secondary">Posted by:</span> <span class="fw-bold">John Doe</span></p>
                    </div>
                </div>
                <div class="col-7 px-5">
                    <div class="post">
                        <h4> Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corrupti deserunt quisquam iusto ipsum quod deleniti incidunt aspernatur, sed ipsa, modi iure non atque animi?</p>
                        <p><span class="text-secondary">Posted by:</span> <span class="fw-bold">John Doe</span></p>
                    </div>
                </div>
                <div class="col-7 px-5">
                    <div class="post">
                        <h4> Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corrupti deserunt quisquam iusto ipsum quod deleniti incidunt aspernatur, sed ipsa, modi iure non atque animi?</p>
                        <p><span class="text-secondary">Posted by:</span> <span class="fw-bold">John Doe</span></p>
                    </div>
                </div>
                <div class="col-7 px-5">
                    <div class="post">
                        <h4> Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corrupti deserunt quisquam iusto ipsum quod deleniti incidunt aspernatur, sed ipsa, modi iure non atque animi?</p>
                        <p><span class="text-secondary">Posted by:</span> <span class="fw-bold">John Doe</span></p>
                    </div>
                </div>
                <div class="col-7 pt-4 pb-3 px-5">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary">View older post</button>
                    </div>
                </div>

            </div>
        </main>

        <x-footer />

    </div>

    <!-- POPPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>