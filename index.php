<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Banking App</title>
    <style>
        .images {
            margin-top: 150px;
        }

        .row {
            margin-top: 50px;
            /* text-align: center; */
        }

        .end {
            font-size: 15px;
        }

        .text-area {
            margin-top: 150px;
            padding: 130px 100px;
            background-color: #1f1f1f;
            color: #fff;
            font-size: 1rem;
        }
        .container-fluid a{
            font-weight: 800;
        }
        .container-fluid{
            background-color: yellow;
            /* color: red; */
        }

        /* .rest-section{
            display: flex;
            flex-direction: column;
            align-items: center;
        } */

        .container-bottom{
            margin-bottom: 0;
            height: 150px;
            background-color: orange;
            color: #fff;
            /* padding: 25px; */
        }
    </style>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <a class="navbar-brand" href="#"> <i>💷🏦💴</i> bablu_bank</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link aria-current=" page" active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="customers.php">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="transactions.php">Records</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">FeedBack</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="top-section">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="h1">Welcome to bablu_bank</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                </div>
                <div class="col-md-6">
                    <img src="./img/bablu.jpg" alt="">
                </div>
            </div>


        </div>
        <div class="rest-section">
            <div style="width: 50%; float:left" class="images">
                <img height="400px" width="600px" class="im1" src="https://media.istockphoto.com/photos/businessman-touching-icon-online-banking-and-icon-network-connection-picture-id1150208425?b=1&k=20&m=1150208425&s=170667a&w=0&h=Iu0cSy8enp2MXRhywUq7KtGDDlKippQBS80Wor3tu68=" alt="">
            </div>

            <div style="width: 50%; float:right" class="text-area">
                <h1>ABOUT US</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam accusamus ducimus, voluptatum ex praesentium repudiandae saepe dolore inventore excepturi nam voluptatem sequi necessitatibus quia rerum quisquam soluta iure enim autem! Alias quasi corrupti illo quod aut ad modi cumque enim vero quae, id eligendi ipsam amet animi molestiae sunt odio.\</p>
            </div>
        </div>

    </div>

    <footer>
        <div class="container-bottom">
            <div class="row">
                <div class="col-md-6">
                    <p class="end">Copyright @2022 </p>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-github"></a>
                    <p>Made with ❣️ by Adwaita.</p>
                </div>

    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!---->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>