<?php
 function __construct()
{
    $this->db = new PDO('mysql:host=localhost;dbname=Nanda','root', '');
    $this->db = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExeption $e) {
    echo "connection failed: " . $e->getMassage}
?>
