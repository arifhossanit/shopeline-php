<?php include "header.php" ?>



<div class="container">
    <h5 class="bg-white text-center my-2 p-2">Log IN</h5>
    
    <div class="row">
        <div class="col-md-6 m-auto">
            <form action="process.php" method="post">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Save me</label>
                </div>
                <?php echo basename($_SERVER['HTTP_REFERER']);
                if (!empty($_SERVER['HTTP_REFERER'])) {
                   echo '<input type="hidden" name="redirect" value="'.basename($_SERVER['HTTP_REFERER']).'" >';
                }
                ?>
                
                <button type="submit" class="btn btn-primary btn-block" name="login">Log In</button>
            </form>
        </div>
    </div>
</div>


<?php include "footer.php" ?>