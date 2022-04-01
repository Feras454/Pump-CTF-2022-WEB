<?php
if (!isset($_COOKIE['auth'])) {
  setcookie("auth", sha1("false"));
  header("Location: index.php");
  exit;
}

if ($_COOKIE['auth'] == sha1("true")){
  echo "flag{f0rbiddddden1337}";
}
else {
  http_response_code(403);
}
?>
