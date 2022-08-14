<?php
$db = new PDO('mysql:host=localhost;dbname=concierge', 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$sql = "SELECT * FROM `tache_a_faire`";
$query = $db->query($sql);
$tache_a_faire = $query->fetchAll();
?>