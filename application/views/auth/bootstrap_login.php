<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DRTV</title>
  <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="<?php echo base_url() ?>assets/js/libs/jquery-1.8.2.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/libs/bootstrap.min.js"></script>
	<style type="text/css">
      body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
  

    </style>
</head>

<body>


 <div class="container">

      <?php echo form_open("auth/login",array('id' => 'login','class' => 'form-signin', 'role' => 'form')); ?>
        <?php if($message){ ?><div class="bg-danger" style="padding:10px;"><?php echo $message;?></div><?php } ?>
        <h2 class="form-signin-heading">Please sign in</h2>
        <?php echo form_input($identity);?>
        <?php echo form_password($password); ?>
        <div class="checkbox">
          <label>
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>
</body>
</html>
