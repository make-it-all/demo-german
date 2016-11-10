<?php if (isset($_GET['flash'])): ?>
  <div id="flash_messages">
    <div class="flash_message">
      <?php echo $_GET['flash']; ?>
      <i class="fa fa-times" aria-hidden="true" data-close-button></i>
    </div>
  </div>
<?php endif; ?>
