<?php include "header.php" ?>



<div class="container">
    <h5 class="bg-white text-center my-2 p-2">Sign Up</h5>
    
    <div class="row">
        <div class="col-md-6 m-auto">
            <form>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="name" class="form-control" id="email" name="name">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="name" class="form-control" id="mobile" name="mobile">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea type="address" class="form-control" id="address" name="address" style="resize: none;"></textarea>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="others" value="others">
                        <label class="form-check-label" for="others">Others</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="passwre-passwordord">Re-Type Password</label>
                    <input type="password" class="form-control" id="re-password" name="re-password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="is-agree">
                    <label class="form-check-label" for="exampleCheck1">I agree with <a href="#">term & conditions</a></label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
            </form>
        </div>
    </div>
</div>



<?php include "footer.php" ?>