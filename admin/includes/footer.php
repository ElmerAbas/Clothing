<footer>

</footer>
</main>

<script src="./assets/js/jquery-3.6.0.min.js"></script>

<script src="./assets/js/bootstrap.bundle.min.js"></script>

<script src="./assets/js/perfect-scrollbar.min.js"></script>

<script src="./assets/js/smooth-scrollbar.min.js"></script>

<script src="../admin/assets/js/menu-toggle.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="./assets/js/custom.js"></script>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- Alertify Js-->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


  <script>

    <?php 
        if(isset($_SESSION['message'])) 
        { 
          ?>
          alertify.set('notifier', 'position', 'top-right');
          alertify.success('<?= $_SESSION['message']; ?>');
          <?php 

          unset($_SESSION['message']);
        } 
    ?>

  </script>

</body>

</html>