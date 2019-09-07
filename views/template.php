<!DOCTYPE html>
<html lang="en">
<head>
  <title>Codeigniter file upload with resize image</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="https://xpertphp.com/assets/front/images/expertxp_icon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php
          if ($this->session->flashdata('success')){
              ?>
              <div class="alert alert-success msg-success-error">
                  <!-- a title="Hide Notification" class="close-notification tooltip" href="#">x</a -->
                  <a href="#" class="close msg-close" data-dismiss="alert" aria-label="close">&times;</a>
                  <h4>Success</h4>
                  <p><?php echo $this->session->flashdata('success') ?></p>
              </div>
              <?php
          }
          ?>
          <?php
          if ($this->session->flashdata('error')){
              ?>
              <div class="alert alert-error msg-success-error">
                  <!-- a title="Hide Notification" class="close-notification tooltip" href="#">x</a -->
                  <a href="#" class="close msg-close" data-dismiss="alert" aria-label="close">&times;</a>
                  <h4>Error</h4>
                  <p><?php echo $this->session->flashdata('error') ?></p>
              </div>
              <?php
          }
          ?>
      </div>
    </div>
    <?php $this->load->view($middle);?>
</div>    
</body>
</html>