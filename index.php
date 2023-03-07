<?php
  $dsn = "mysql:host={$_ENV["HOST"]};dbname={$_ENV["DATABASE"]}";
  $options = array(
    PDO::MYSQL_ATTR_SSL_CA => "/etc/ssl/certs/ca-certificates.crt",
  );

  $pdo = new PDO($dsn, $_ENV["56y8i56cghatvqogls00"], $_ENV["pscale_pw_uiP98VNiSdL0HPLI5fXfZdX1wdwSduD9dveiOBArU73"], $options);
?>
