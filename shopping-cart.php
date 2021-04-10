<?php include "header.php" ?>
    <!--shopping_cart-->
    <div class="my-4 ms-5 rows" >

      <div class="row row-cols-4">
        <div class="col fs-3">
          Shopping Cart
        </div>
      </div>
      <div id="cart">
      </div>


      <div class="row row-cols-4 text-end">
        <div class="col-8 fs-5">
          Total :
        </div>
        <div class="col ">
          <div>$<span id="total">600</span></div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <?php include "footer.php" ?>
    <script>getFromLS();</script>