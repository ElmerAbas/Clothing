<nav>
    <div class="toggle">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>

    <div class="column-nav">
        <div class="logo">
            <a href="index.php">
                <img src="./assets/img/brand-Logo.png"></img>
                <h2>L.A Street Clothing</h2>
            </a>
        </div>


        <div class="select-menu" id="myLinks">
            <ul class="nav-menu">
                <li>
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="products.php" class="nav-link">Products</a>
                </li>
                <li>
                    <a href="customize.php" class="nav-link">Customize Design</a>
                </li>
                <li>
                    <a href="cart.php" class="nav-link">
                        Cart
                        <i id="cart" class="bi bi-cart-fill"></i>
                    </a>

                </li>


                <?php 

          if(isset($_SESSION['auth']))
          {
            ?>

                <li class="dropdown">
                    <a class="dropbtn">
                        <?= $_SESSION['auth_user']['name']; ?>
                    </a>
                    <ul class="dropdown-content">
                        <li><a class="dropdown-item" href="#">Account</a></li>
                        <li><a class="dropdown-item" href="#">Setting</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>

                <?php
          }
          else
          {
            ?>

                <li>
                    <a href="register.php" class="nav-link">Register</a>
                </li>
                <li>
                    <a href="login.php" class="nav-link">Login</a>
                </li>

                <?php
          }

        ?>
                <li>
                    <a href="about.php" class="nav-link">About Us</a>
                </li>

            </ul>
        </div>

    </div>


</nav>