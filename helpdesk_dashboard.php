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
  <?php require 'partials/_header.php'; ?>
   <div id="page_wrapper">
    <?php require 'partials/_sidebar.php'; ?>

    <div id="page">
      <?php if (isset($_GET['flash'])): ?>
        <div id="flash_messages">
          <div class="flash_message">
            <?php echo $_GET['flash']; ?>
            <i class="fa fa-times" aria-hidden="true"></i>
          </div>
        </div>
      <?php endif; ?>
      <div id="page_inner">
        <div id="page_head">
          <div id="page_info">
            <h1>Welcome, Sally</h1>
            <p>
              Since you've been gone:
            </p>
            <ul>
              <li>4 Problems have had follow up added.</li>
              <li>2 Problems have been completed.</li>
              <li>7 Calls have been made about problems you created.</li>
            </ul>
          </div>
        </div>
        <div id="page_content">


          <div class="panel" id="new_call">
            <h2>New Call</h2>
            <form class="" action="index.html" method="post">
              <div class="field">
                <select class="" name="personnel_id">
                  <option value="1">Paul</option>
                  <option value="2">Mark</option>
                  <option value="3">Brain</option>
                  <option value="4">Katie</option>
                </select>
              </div>
              <div class="problem_list">
                <div class="problem">
                </div>
              </div>
              <div class="actions">
                <button type="button" name="new_problem">New Problem</button>
                <button type="button" name="new_problem">Existing Problem</button>
              </div>
              <div class="actions">
                <input type="submit" name="commit" value="Save Call">
              </div>
            </form>
          </div>




        </div>
      </div>
    </div>
  </body>
</html>
