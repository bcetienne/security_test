<?php
  $data = file_get_contents('./data.json');
  $data = json_decode($data, true);
  $url = '/create';
  echo '<a href="create.php">Créer</a>';
  foreach ($data as $item) {
    echo '<h1>Id :' . $item['index'] . '</h1>';
    echo '<h2>' . $item['name']['first'] . ' ' . $item['name']['last'] . '</h2>';
    echo '<h3>Company : ' . $item['company'] . ' </h3>';
    echo '<button>Supprimer</button>';
    echo '<hr>';
  }
