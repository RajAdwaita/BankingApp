<?php


include 'config.php';
if (isset($_POST['submit'])) {


    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];


    $sql = "select * from user_info_1 where id=$from";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "select * from user_info_1 where id=$to";
    $query = mysqli_query($conn, $sql);
    $sql2 = mysqli_fetch_array($query);


    if ($amount < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    } else if ($amount > $sql1['balance']) {
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    } else if ($amount == 0) {
        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {
        $new_balance = $sql1['balance'] - $amount;



        $sql = "update user_info_1 set balance=$new_balance where id=$from";
         mysqli_query($conn, $sql);

        $new_balance = $sql2['balance'] + $amount;

        $sql = "update user_info_1 set balance=balance+$amount where id=$to";
        mysqli_query($conn, $sql);

        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "insert into TRANSACTION_TYPE_1('sender','receiver','bal') values('$sender','$receiver','$amount')";


        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script> alert('Hurray! Transaction is Successful');
                                     window.location='transactions.php';
                           </script>";
        }


        $new_balance = 0;
        $amount = 0;
    }
}


?>;


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
        .container-fluid a {
            font-weight: 800;
        }

        .container-fluid {
            background-color: yellow;
            /* color: red; */
        }

        .container-main {
            margin-top: 100px;
        }

        #btn {
            padding: 5px;
            background-color: #fff;
            color: #2d2d2d;
            font-size: 0.8rem;
            font-weight: 800;
            border-radius: 10px;
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

    <?php
    include 'config.php';
    $sid = $_GET['id'];
    $sql = "SELECT * FROM user_info_1 where id=$sid";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $rows = mysqli_fetch_assoc($result);

    ?>

    <form action="" method="post" name="tab">
        <div class="container-main">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Account No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Balance (in 💲)</th>
                        <!-- <th scope="col"></th> -->
                    </tr>
                </thead>
                <tbody>


                    <tr>
                        <th scope="row"><?php echo $rows['id'] ?></th>
                        <td><?php echo $rows['name'] ?></td>
                        <td><?php echo $rows['email'] ?></td>
                        <td><?php echo $rows['balance'] ?></td>
                    </tr>


                </tbody>
            </table>
        </div>
        <div class="transact">
            <label for="">Transfer To</label>
            <select class="form-control" name="to" id="" required>
                <option value="" disabled selected>choose account</option>
                <?php

                include 'config.php';
                $sid = $_GET['id'];
                $sql = "SELECT * FROM user_info_1 WHERE id!='$sid'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo "Error " . $sql . "<br>" . mysqli_error($conn);
                }
                while ($rows = mysqli_fetch_assoc($result)) {



                ?>
                    <option value="<?php echo $rows['id']; ?>">
                        <?php echo $rows['name']; ?>(BALANCE -> <?php echo $rows['balance']; ?>)</option>

                <?php } ?>
            </select>

            <label for="">Amount</label>
            <input type="number" name="amount" required>
            <br><br><br>
            <div class="text-center">
                <button id="btn" class="btn mt-3" name="submit" type="submit">Transfer Money</button>
            </div>

        </div>
    </form>


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