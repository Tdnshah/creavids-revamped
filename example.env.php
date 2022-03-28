<?php
  $variables = [
    'CREAVIDS_SERVER_ENV' => 'localhost'
    'CREAVIDS_API_URI' => 'http://localhost:1337',
    'smtpHost' => '',
    'smtpSecureMethod' => '',
    'smtpPort' => '',
    'smtpUserEmail' => '',
    'smtpPassword' => ''
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>
