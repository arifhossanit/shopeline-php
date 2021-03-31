<?php include "header.php" ?>



<div class="container">
    <h5 class="bg-white text-center my-2 p-2">Sign Up</h5>
    
    <div class="row">
        <div class="col-md-6 m-auto">
            <form action="process.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="name" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea cols="22" rows="4" class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="type">Product Catagory</label>
                    <select name="type" id="type" class="form-control">
                        <option value="1">Men</option>
                        <option value="2">Women</option>
                        <option value="3">Kids</option>
                        <option value="4">Home Appliance</option>
                        <option value="5">Electronic Devices</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="weight">Unit weight</label>
                    <input type="text" class="form-control" id="weight" name="weight">
                </div>
                <div class="form-group">
                    <label>Unit stock</label>
                    <input type="number" class="form-control" id="stock" name="stock">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="picture">Product pic</label>
                    <input type="file" class="form-control" id="picture" name="picture">
                </div>
                <input type="hidden" name="vendor_id" value="1">
                <button type="submit" class="btn btn-primary btn-block" name="add">Add product</button>
            </form>
        </div>
    </div>
</div>



<?php include "footer.php" ?>