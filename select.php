<html>

<head></head>

<body>
<?php
if(isset($_POST['DESC']))
{
    $asc_query = "SELECT * FROM report_data ORDER BY last_update DESC";
    $objQuery = Query($asc_query);
} elseif(isset($_POST['ASC'])){
    $asc_query = "SELECT * FROM report_data ORDER BY last_update ASC";
    $objQuery = Query($asc_query);
} else {
    $default_query = "SELECT * FROM report_data";
    $objQuery = Query($default_query);
}

function Query($query)
{
    require('connect.php');
    $objQuery = mysqli_query($conn, $query) or die("Error Query [" . $sql . "]");
    return $objQuery;
}

?>
    <h1>ตารางแสดงข้อมูล</h1>
    <form name="form1" action="search.php" method="post">
        <input type="submit" value="ค้นหาข้อมูล">
        <input type="submit" value="เพิ่มข้อมูล" onclick="form1.action='insert.php'">
        <input type="submit" name="ASC" value="ASC" onclick="form1.action='select.php'">
        <input type="submit" name="DESC" value="DESC" onclick="form1.action='select.php'">
        <br>
        <br>
        <table border="1" width='100%'>
            <tr>
                <th>
                    <div align="center">No</div>
                </th>
                <th>
                    <div align="center">UserID</div>
                </th>
                <th>
                    <div align="center">Type</div>
                </th>
                <th>
                    <div align="center">Message</div>
                </th>
                <th>
                    <div align="center">Severity</div>
                </th>
                <th>
                    <div align="center">LastUpdate</div>
                </th>
            </tr>
            <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
            <tr>
                <td>
                    <div align="center"><?php echo $i; ?></div>
                </td>
                <td><?php echo $objResult["user_id"]; ?></td>
                <td><?php echo $objResult["type"]; ?></td>
                <td><?php echo $objResult["message"]; ?></td>
                <td><?php echo $objResult["severity"]; ?></td>
                <td><?php echo $objResult["last_update"]; ?></td>
            </tr>
            <?php
      $i++;
    }
    ?>
        </table>
    </from>
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>