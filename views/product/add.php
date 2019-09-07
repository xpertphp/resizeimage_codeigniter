<div class="row" style="margin-bottom:10px;">
        <div class="col-lg-12"><h2>codeigniter file upload with resize image</h2></div>
</div>
<form method="post" name="frmAdd" action="<?php echo base_url('resizeimage/add'); ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="txtProductTitle">Product Title:</label>
    <input type="text" class="form-control" name="txtProductTitle" required  id="txtProductTitle">
  </div>
  
  <div class="form-group">
    <label for="productImage">Product Image:</label>
    <input type="file" class="form-control" required name="productImage" id="productImage" accept="image/*">
  </div>
  <input type="submit" class="btn btn-success" name="btnProduct" value="Add"/>
</form>