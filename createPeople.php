<?php
  $last = $_POST['lastname'];
  $first = $_POST['firstname'];
  $company = $_POST['company'];

  $data = file_get_contents('./data.json');
  $data = json_decode($data, true);

  var_dump($last);
  var_dump($first);
  var_dump($company);die;
