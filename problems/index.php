<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probleme</title>
    <link rel="stylesheet" href="/assets/stylesheets/css/application.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/assets/javascripts/application.js"></script>
    <script src="/assets/javascripts/chosen.js"></script>
  </head>
  <body>
  <?php require '../partials/_header.php'; ?>
   <div id="page_wrapper">
    <?php require '../partials/_sidebar.php'; ?>

    <div id="page">
      <?php include $_SERVER["DOCUMENT_ROOT"].'/partials/_flash.php'; ?>
      <div id="page_inner">
        <div id="page_head">
          <div id="page_info">
            <h1>136 Probleme</h1>
            <div id="page_actions">
              <a href="/problems/new/index.php" class="page_action">New +</a>
            </div>
            <p>Seit der letzten Anmeldung sind 29 Probleme geloest worden
            </p>
            <p>35 Probleme sind noch offen</p>
          </div>
          <div id="page_filters">
            <div id="filter_container">
              <div class="filter_group">
                <h4>Art</h4>
                <a href="#">Hardware</a>
              </div>
              <div class="filter_group">
                <h4>Abgeschlossen</h4>
                <a href="#"><i class="fa fa-cross"></i></a>
                <a href="#">Software</a>
              </div>
            </div>
            <div id="search_form">
              <form action="" method="GET">
                <input type="search" name="q[name_or_email_cont]" placeholder="suche..."/>
                <input type="submit" value="Search"/>
              </form>
            </div>
          </div>
        </div>
        <div id="page_content">
          <table class="index_table">
            <thead>
              <tr>
                <th class="narrow_column">Art</th>
                <th data-searchable>Beschreibung</th>
                <th data-searchable>Schluesselwoerter</th>
                <th class="orderable orderable-asc"><a href="#">Aufgetreten vor</a></th>
                <th class="narrow_column">Abgeschlossen</th>
                <th class="narrow_column">Bearbeiten</th>
              </tr>
            </thead>
            <tbody>
              <?php $created_at = 0; ?>
              <?php for($i=0; $i<20; $i++): ?>
                <tr>

                  <td>
                    <?php if (rand(0, 1) == 0): ?>
                      <i class="fa fa-file-code-o" aria-hidden="true"></i>
                    <?php else: ?>
                      <i class="fa fa-desktop" aria-hidden="true"></i>
                    <?php endif; ?>
                  </td>

                  <?php
                    $words = ['bacon', 'ipsum', 'dolor', 'amet', 'capicola', 'in', 'quis', 'flank', 'laborum', 'nostrud', 'commodo', 'cil'];
                    shuffle($words);
                  ?>
                  <td><a href="#"><?php echo implode(' ', array_slice($words, 0, rand(5,12))); ?>...</a></td>

                  <?php
                    $keywords = ['Microsoft', 'Adobe', 'Apple', 'Blackberry', 'Samsung', 'Linux', 'Word', 'Excel', 'Flash', 'Photoshop', 'Outlook', 'Powerpoint', 'Illistator', 'Steckt fest', 'Startet nicht', 'Schwarz', 'Blockiert', 'Aus', 'An', 'Weiss', 'Fehlt', 'Mehrere', 'Langsam', 'Popup', 'Schliessen', 'Speichern', 'Printen', 'Veroeffentlichen', 'Oeffnen', 'Loeschen', 'Geloescht', 'Gecrasht', 'Feuer', 'Gesperrt', 'Passwort', 'E-mail', 'Benutzername', 'Vergessen', 'Wiederherstellen', 'Neu starten', 'Stop', 'Start'];
                    shuffle($keywords);
                  ?>
                  <td><?php echo implode(', ', array_slice($keywords, 0, rand(1,7))); ?></td>

                  <td>
                    <?php $created_at += rand(10, 50); ?>
                    <?php if ($created_at < 60): ?>
                      <?php echo $created_at; ?> minuten
                    <?php else: ?>
                      <?php if (floor($created_at/60) == 1): ?>
                        <?php echo floor($created_at/60); ?> Stunde
                      <?php else: ?>
                        <?php echo floor($created_at/60); ?> Stunden
                      <?php endif; ?>
                    <?php endif;?>
                  </td>

                  <td>
                    <?php if (rand(0, 1) == 0): ?>
                      <i class="fa fa-times bad" aria-hidden="true"></i>
                    <?php else: ?>
                      <i class="fa fa-check good" aria-hidden="true"></i>
                    <?php endif; ?>
                  </td>
                  <td><a href="/problems/<?php echo $i + 1; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                </tr>
              <?php endfor; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
