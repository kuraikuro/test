<html>

<head></head>

<body>
    <h2>เพิ่มข้อมูล</h2>
    <form action="insertdata.php" method="post" name="form2">
        <table border="1">
            <tr>
                <td>userID : </td>
                <td><input type="text" name="user_id"></td>
            </tr>
            <tr>
                <td>type : </td>
                <td><input type="text" name="type"></td>
            </tr>
            <tr>
                <td>message : </td>
                <td><input type="text" name="message"></td>
            </tr>
            <tr>
                <td>severity : </td>
                <td><input type="text" name="severity"></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="เพิ่มข้อมูล">
        <input type="submit" value="ย้อนกลับ" onclick="form2.action='select.php'">
    </form>
</body>

</html>