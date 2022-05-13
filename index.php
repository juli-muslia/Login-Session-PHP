<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Session Login Form PHP</title>
</head>
<body style="background:#ccc">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-3">Login Session</h3>
                    </div> 
                    
                    <?php
                        if (@$_GET['empty'] == true ) {
                    ?>
                      <div class="alert-light text-danger text-center p y-3"><?php echo $_GET['empty']?></div>
                    <?php 
                    }
                    ?>


                    <?php
                        if (@$_GET['invalid'] == true ) {
                    ?>
                      <div class="alert-light text-danger text-center p y-3"><?php echo $_GET['invalid']?></div>
                    <?php 
                    }
                    ?>

                    <div class="card-body">
                        <form action="process.php" method="POST">
                            <input type="text" name="username" placeholder="Enter your Username" class="form-control mb-3">
                            <input type="password" name="password" placeholder="Enter your Password" class="form-control mb-3">
                            <button class="btn btn-success mt-3" name="login"> Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>