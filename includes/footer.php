
<footer>
    <div class="container8">

        <div class="col-18">

            <div class="col-19">
                <div class="item1">
                    <img src="./assets/img/brand-Logo.png" alt="">
                    <p>L.A Street Clothing Design</p>
                </div>
            </div>


            <div class="col-20">
                <div class="item">
                    <h5 style="letter-spacing: 2px;">Featured</h5>
                    <ul class="text-uppercase">
                        <li><a href="#">men</a></li>
                        <li><a href="#">cloths</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Cap</a></li>
                        <li><a href="#">Shorts</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-20">
                <div class="item">
                    <h5 style="letter-spacing: 2px;">Get Help</h5>
                    <ul class="text-uppercase">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Payment Options</a></li>
                        <li><a href="#">Order Status</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-20">
                <div class="item">
                    <h5 style="font-size: 11px; letter-spacing: 2px; text-transform: uppercase;">Contact Us</h5>

                    <div class="details1">
                        <div>
                            <h5 class="text-uppercase">Address</h5>
                            <P>1st Street Sitio Kapihan Barangay</P>
                                <p style="line-height: 2px; margin-bottom: 10px;">Mambugan, Antipolo City </P>
                        </div>
                        <div>
                            <h5 class="text-uppercase">Phone</h5>
                            <P>0966 661 7756</P>
                        </div>
                        <div class="email">
                            <h5 class="text-uppercase">Email</h5>
                            <P>lastreetclothing@gmail.com</P>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-23">
        <div class="lower">
            <p>L.A Street Clothing © 2021. All Rights Reserved
                <a href="https://web.facebook.com/l.astreetclothing/" target="blank"><i
                    class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </p>
        </div>

    </div>

</footer>





<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/toggle.js"></script>
<script src="assets/js/custom.js"></script>


<!-- Alertify Js-->
<script src="./assets/js/alertify.min.js"></script>


  <script>

        alertify.set('notifier','position', 'top-center');
    
    <?php 
        if(isset($_SESSION['message'])) 
        { 
          ?>
           
            alertify.success('<?= $_SESSION['message']; ?>');
          <?php 

          unset($_SESSION['message']);
        } 
    ?>

  </script>



</body>

</html>