<?php
  $db = getDB()
  
  $sql = 'SELECT name, message FROM user WHERE 1';
  $stmt = $db->prepare($sql);
  $stmt->execute();

  $result = $stmt->fetchAll();
  return $result;
?>
