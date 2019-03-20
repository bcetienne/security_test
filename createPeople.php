<?php
  $last = $_POST['lastname'];
  $first = $_POST['firstname'];
  $company = $_POST['company'];

  $data = file_get_contents('./data.json');
  $data = json_decode($data, true);
  $lastId = sizeof($data);
  $user = ['index' => $lastId, 'name' => ['first' => $first, 'last' => $last], 'company' => $company, 'registered' => false];
  $data[$lastId] = $user;
  $data = json_encode($data);

  if (file_put_contents("data.json", $data)) {
    header('Location: http://security-first.test/');
  }
