<html>

<head></head>

<body>
    <?php
//   require('connect.php');
//   $LastUpdate  = $_POST['last_update'];

//   $sql = "SELECT * FROM report_data WHERE last_update='$LastUpdate'";

//   $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
if(isset($_POST['search']))
{
    $value = $_POST['value'];
    $query = "SELECT * FROM report_data WHERE last_update LIKE '%".value."%'";
    $Search = Search($query);
}

function Search($query)
{
    require('connect.php');
    $Search = mysqli_query($conn, $query) or die("Error Query [" . $sql . "]");
    return $Search;
}

  ?>
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
    while ($objResult = mysqli_fetch_array($Search)) {
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
    <?php
  mysqli_close($conn);
  ?>
</body>

</html>