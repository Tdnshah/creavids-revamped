<?php
  $variables = [
    'CREAVIDS_SERVER_ENV' => 'localhost'
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>
