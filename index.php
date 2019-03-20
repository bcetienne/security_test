<?php
  $data = file_get_contents('./data.json');
  $data = json_decode($data, true);
  $url = '/create';
  echo '<a href="create.php">Créer</a>';
  ?> <div id="parent"><?php
  foreach ($data as $item) {
    echo '<h1>Id :' . $item['index'] . '</h1>';
    echo '<h2>' . $item['name']['first'] . ' ' . $item['name']['last'] . '</h2>';
    echo '<h3>Company : ' . $item['company'] . ' </h3>';
    echo '<button class="d">Supprimer</button>';
    echo '<hr>';
  }
?>
</div>

<script>
  document.getElementById('parent').getElementsByClassName('d')[0].onclick = () => { alert('Y a rien pour le moment'); }
</script>
