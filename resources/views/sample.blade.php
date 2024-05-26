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
            <!-- Include banner Component -->

            <x-banner imgUrl={{$img}} bannerTitle="{{$bannerTitle}}" bannerMessage="{{$bannerMessage}}" />
        </header>


        <!-- Main Section -->

        <main>
            <div class="row justify-content-center">
                <div class="col-7 px-5">
                    <p class="pt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat deserunt, eaque dolorum ad dolores facere nam ea quibusdam velit perspiciatis aliquam est, vel voluptatum reiciendis, ut eligendi blanditiis. Quidem suscipit sequi alias dolorum laboriosam quia est libero minus. Eum, numquam? Tempore modi illum assumenda magni obcaecati, repellendus soluta aut dicta!</p>
                    <p class="pt-5 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat deserunt, eaque dolorum ad dolores facere nam ea quibusdam velit perspiciatis aliquam est, vel voluptatum reiciendis, ut eligendi blanditiis. Quidem suscipit sequi alias dolorum laboriosam quia est libero minus. Eum, numquam? Tempore modi illum assumenda magni obcaecati, repellendus soluta aut dicta!</p>
                    <p class="pt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat deserunt, eaque dolorum ad dolores facere nam ea quibusdam velit perspiciatis aliquam est, vel voluptatum reiciendis, ut eligendi blanditiis. Quidem suscipit sequi alias dolorum laboriosam quia est libero minus. Eum, numquam? Tempore modi illum assumenda magni obcaecati, repellendus soluta aut dicta!</p>
                </div>
            </div>

        </main>

        <!-- Include footer Component -->
        <x-footer />

    </div>

    <!-- POPPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>