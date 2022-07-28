<html>
<head></head>
<body>
    <?php
    require('connect.php');
    $sql = 'SELECT * FROM report_data;';
    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    ?>
    <h2>ค้นหาข้อมูล</h2>
    <form name="form3" action="searchdata.php" method="post">
        <table border="1" >
            <tr>
                <td width='50%' align="center">LastUpdate </td>
                <td>
                    <select name="LastUpdate">
                        <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                        ?>
                            <option value=<?php echo $objResult["last_update"]; ?>><?php echo $objResult["last_update"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" value="ค้นหาข้อมูล" name="search">
        <input type="submit" value="ย้อนกลับ" onclick="form3.action='select.php'">
    </form>
</body>
</html>