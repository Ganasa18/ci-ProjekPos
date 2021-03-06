<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="colorlib.com">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title; ?></title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="<?= base_url() ?>vendor/wizard/fonts/material-icon/css/material-design-iconic-font.min.css">

  <!-- Main css -->
  <link rel="stylesheet" href="<?= base_url() ?>vendor/wizard/css/style.css">
</head>

<body>

  <div class="main">
    <div class="container">
      <div class="signup-content">
        <div class="signup-desc">
          <div class="signup-desc-content">
            <h2><span>My</span>POS</h2>
            <p class="title">Sign up now</p>
            <p class="desc">
              MIT licensed illustrations for every project you can imagine and create
            </p>
            <img src="<?= base_url() ?>vendor/wizard/images/signup-img.jpg" alt="" class="signup-img">
          </div>
        </div>
        <div class="signup-form-conent">
          <form method="POST" id="signup-form" class="signup-form" action="<?= base_url('auth/registration') ?>" enctype="multipart/form-data">
            <h3></h3>
            <fieldset>
              <span class="step-current">Step 1 / 4</span>
              <div class="form-group">
                <input type="text" name="your_name" id="your_name" required />
                <label for="your_name">Your Name</label>
              </div>
            </fieldset>

            <h3></h3>
            <fieldset>
              <span class="step-current">Step 2 / 4</span>
              <div class="form-group">
                <input type="text" name="email" id="email" required />
                <label for="email">Your Email</label>
              </div>
            </fieldset>

            <h3></h3>
            <fieldset>
              <span class="step-current">Step 3 / 4</span>
              <div class="form-group">
                <input type="text" name="your_password" id="your_password" required />
                <label for="your_password">Your Password</label>
                <span toggle="#your_password" class="zmdi zmdi-eye field-icon toggle-password"></span>
              </div>
            </fieldset>

            <h3></h3>
            <fieldset>
              <span class="step-current">Step 4 / 4</span>
              <div class="form-group">
                <input type="text" name="confirm_password" id="confirm_password" required />
                <label for="confirm_password">Confirm your password</label>
                <span toggle="#confirm_password" class="zmdi zmdi-eye field-icon toggle-password"></span>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>

  </div>

  <!-- JS -->
  <script src="<?= base_url() ?>vendor/wizard/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>vendor/wizard/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="<?= base_url() ?>vendor/wizard/vendor/jquery-validation/dist/additional-methods.min.js"></script>
  <script src="<?= base_url() ?>vendor/wizard/vendor/jquery-steps/jquery.steps.min.js"></script>
  <script src="<?= base_url() ?>vendor/wizard/js/main.js"></script>
</body>

</html>