<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Index</title>
    <link rel="stylesheet" href="/assets/stylesheets/css/application.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/assets/javascripts/application.js"></script>
    <script src="/assets/javascripts/chosen.js"></script>
  </head>
  <body>
  <?php require '../../partials/_header.php'; ?>
   <div id="page_wrapper">
    <?php require '../../partials/_sidebar.php'; ?>
    <div id="page">
      <?php include $_SERVER["DOCUMENT_ROOT"].'/partials/_flash.php'; ?>
      <div id="page_inner">
        <div id="page_head">
          <div id="page_info">
            <h1>New Problem</h1>
            <div id="page_actions">
              <a href="/problems" class="page_action red">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                Cancel
              </a>
            </div>
          </div>
        </div>
        <div id="page_content">
          <?php include $_SERVER['DOCUMENT_ROOT'].'/problems/_new_form.php'; ?>
        </div>
      </div>
   </div>
  </html>
