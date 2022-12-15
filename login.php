<?php 
    session_start();

    if(isset($_SESSION['auth']))
    {
        $_SESSION['message'] = "You are already logged In";
        header('Location: index.php');
        exit();
    }

    include('includes/header.php'); 
    ?>

<div class="container9">
    <div class="col-24">

        <?php if(isset($_SESSION['message'])) 
                    {?>
        <div class="alert1" role="alert">
            <?= $_SESSION['message']; ?>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
                        unset($_SESSION['message']);
                    }
                    ?>
        <div class="col-25">
            <div class="login">
                <h4>Login</h4>
            </div>
            <div class="col-26">
                <form action="functions/authcode.php" method="POST">
                    <div class="emails">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div>
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
        <br><br><br>
    </div>
</div>


<?php include('includes/footer.php'); ?>