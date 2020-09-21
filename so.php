<?php
$id = $_GET['id'];

if (empty($id)) {

} else {
    $sql = "select * from vowtab where id = {$id} order by id";
    $result = $conn -> query($sql);
    $rows = $result -> fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
        echo "<div class='vow'>";
        echo "<p class='vheader'>愿望编号：{$row['id']}</p>";
        echo "<p class='vpick'>To：{$row['pick']}</p>";
        echo "<p class='vinfo'>{$row['info']}</p>";
        echo "<p class='vsend'>{$row['send']}</p>";
        echo "<p class='vtime'>".date('Y-m-d',$row['time'])."</p>";
        echo "</div>";
    }
}
?>