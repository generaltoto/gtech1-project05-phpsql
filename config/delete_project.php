<?php
  require('config.php');

  $sql = "DELETE FROM project WHERE project_id = :delProject";

  $dataBinded=array(
    ':delProject' => $_POST['deleteProject']
  );

  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);

  header('Location:../admin.php');
?>