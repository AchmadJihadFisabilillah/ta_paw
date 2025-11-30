<?php
require_once "../database.php";
if (isset($_GET["ID_JURUSAN"])) {
    $id=$_GET["ID_JURUSAN"];
        $stmnt=$pdo->prepare("DELETE FROM jurusan WHERE ID_JURUSAN=:id");
        $stmnt->bindValue(':id',$id);
        $stmnt->execute();
    header("Location:jurusan.php");
}
?>