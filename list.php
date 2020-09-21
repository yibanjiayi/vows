<?php
$sql = "select * from vowtab order by id";
$result = $conn -> query($sql);
echo "<table class='list'>";
echo "<tr>";
echo "<th>编号</th>";
echo "<th>内容</th>";
echo "<th>发送人</th>";
echo "<th>接收人</th>";
echo "<th>时间</th>";
echo "</tr>";
$rows = $result -> fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    echo "<tr>";
    echo "<td class='tdcenter'>{$row['id']}</td>";
    echo "<td>{$row['info']}</td>";
    echo "<td class='tdcenter tdsend'>{$row['send']}</td>";
    echo "<td class='tdcenter tdpick'>{$row['pick']}</td>";
    echo "<td class='tdcenter'>".date('Y-m-d',$row['time'])."</td>";
    echo '</tr>';
}

echo "</table>";
?>