<?php $this->view('catalog/header',$data);?>
<div class="" style="margin:auto; max-width:600px; width:100%; padding:20px;">
<form  method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <input type="file" name="file" class="btn" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Upload</button>
</form>
</div>

<?php $this->view('catalog/footer');?>
