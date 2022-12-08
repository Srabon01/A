<html>
    <head>
        <title>CSE311 Lab</title>
    </head>

    <body>
        <h2>Student Information</h2>

        <table>
            <tr>
                <td>ID</td>
                <td>Student Name</td>
            </tr>

            <?php
            $db = mysqli_connect("localhost", "root", "", "student_info");
            $sql = "SELECT id, student_name FROM student_table";
            $result = mysqli_query($db, $sql);
            while($row = mysqli_fetch_assoc($result))
            {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["student_name"] . "</td>";
            echo "</tr>";
            }
            ?>
        </table>
    </body>

</html>