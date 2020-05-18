<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text-html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
 

  <style>
    .footer_header {
      color: white;
    }
  </style>


</head>

<!--nav bar=============================================================================-->
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="<?php echo base_url(); ?>">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="<?php echo base_url(); ?>">
        Home
      </a>

      <a class="navbar-item" href="<?php echo base_url(); ?>help">
        Help
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Category
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            English
          </a>
          <a class="navbar-item">
            Sinhala
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" href="<?php echo base_url(); ?>register">
            <strong>Sign up</strong>
          </a>
          <?php if (!$this->session->userdata('logged_in')) : ?>
            <a class="button is-light" href="<?php echo base_url(); ?>login">
              Log in
            </a>
          <?php endif; ?>
          <?php if ($this->session->userdata('logged_in')) : ?>
            <a class="button is-light" href="<?php echo base_url(); ?>users/logout">
              Log Out
            </a>
          <?php endif; ?>

          <?php if ($this->session->userdata('logged_in')) : ?>
          <span class="has-text-right">
            <small>
              <a href="<?php echo base_url(); ?>writer/index"><?php echo $this->session->userdata('email'); ?></a>
            </small>
          </span>
          <?php endif; ?>

        </div>
      </div>

    </div>
  </div>
</nav>

<!--nav bar end*======================================================-->

<body>
  <section class="section">



   