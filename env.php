<?php
  $variables = [
    'CREAVIDS_SERVER_ENV' => 'http://localhost/',
    'apiurl' => '',
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  };
?>
