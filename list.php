<?php

function paging($pageNum = 1, $pageSize = 3) {
    global $conn;
    $sql = "select * from vowtab order by id limit " . (($pageNum-1)*$pageSize).','.$pageSize;
    $result = $conn -> query($sql);
    $rows = $result -> fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function allNews() {
    global $conn;
    $sql = "select count(*) num from vowtab";
    $result = $conn -> query($sql);
    $rows = $result -> fetchAll(PDO::FETCH_ASSOC);
    $row = $rows[0]['num'];
    return $row;
}

$allNum = allNews();//总记录数

$pageNum = empty($_GET['pageNum']) ? 1 : $_GET['pageNum'];//起始下标
$pageSize = 3;//想要一页展示多少条记录
$endPage = ceil($allNum / $pageSize);//最后一页的页码
$rows = paging($pageNum, $pageSize);//取得记录的二维数组

echo "<table class='list'>";
echo "<tr>";
echo "<th>编号</th>";
echo "<th>内容</th>";
echo "<th>发送人</th>";
echo "<th>接收人</th>";
echo "<th>时间</th>";
echo "<th><div class='slant'></div></th>";
echo "</tr>";

foreach ($rows as $row) {
    echo "<tr>";
    echo "<td class='tdcenter'>{$row['id']}</td>";
    echo "<td>{$row['info']}</td>";
    echo "<td class='tdcenter tdsend'>{$row['send']}</td>";
    echo "<td class='tdcenter tdpick'>{$row['pick']}</td>";
    echo "<td class='tdcenter'>".date('Y-m-d',$row['time'])."</td>";
    echo "<td><a href='del.php?id={$row['id']}&pageNum={$pageNum}' style='text-decoration: none'>删除</a></td>";
    echo '</tr>';
}
echo "</table>";
?>
<div class="page">
    <a href="?a=list&pageNum=1" rel="external nofollow">首页</a>
    <a href="?a=list&pageNum=<?php echo $pageNum==1?1:($pageNum-1);?>" rel="external nofollow">上一页</a>
    <a href="?a=list&pageNum=<?php echo $pageNum==$endPage?$endPage:($pageNum+1);?>" rel="external nofollow">下一页</a>
    <a href="?a=list&pageNum=<?php echo $endPage;?>" rel="external nofollow">尾部</a>
</div>
