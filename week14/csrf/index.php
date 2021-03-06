<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>PHP Contact Form with Captcha</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
    <?php include('captcha_form.php'); ?>
    <?php if (!empty($captchaError)) { ?>
      <div class="form-group col-12 text-center">
        <div class="alert text-center <?php echo $captchaError['status']; ?>">
          <?php echo $captchaError['message']; ?>
        </div>
      </div>
    <?php
    }
    ?>
    <form action="" name="contactForm" method="post" enctype="multipart/form-data">
      <di class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="row">
    <div class="form-group col-6">
      <label>Enter Captcha</label>
      <input type="text" class="form-control" name="captcha" id="captcha">
    </div>
    <div class="form-group col-6">
      <label>Captcha Code</label>
      <img src="captcha.php" alt="PHP Captcha">
    </div>
  </div>
  <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">
  </form>
  </div>
</body>

</html>