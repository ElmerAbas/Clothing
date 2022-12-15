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

    <div class="container10">

        <div class="col-27">

            <?php if(isset($_SESSION['message'])) 
                    {?>
            <div class="message1" role="alert">
                <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
                        unset($_SESSION['message']);
                    }
                    ?>

            <div class="col-28">
                <h4>Registration Form</h4>
            </div>


            <div class="col-29">

                <form action="functions/authcode.php" method="POST">
                        <div class="card">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="card">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control"
                                placeholder="Enter your phone number">
                        </div>
                        <div class="card">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter your Address">
                        </div>
                        <div class="card">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" placeholder="Enter your email" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="card">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control"
                                placeholder="Enter your password">
                        </div>
                        <div class="card">
                            <label>Confirm Password</label>
                            <input type="password" name="cpassword" placeholder="Confirm password">
                        </div>
                        <button type="submit" name="register-btn" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>



    <?php include('includes/footer.php'); ?>