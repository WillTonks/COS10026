<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="HR manager queries" />
    <meta name="keywords" content="HTML, PHP, CSC" />
    <title>HR Manager Queries</title>
</head>
<body>
    <h1>HR Manager Queries</h1>
    <?php
    session_start();
    require_once("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

    if (!$conn) {
        echo "<p>Database connection failure</p>";
    } else {
        $sql_table = "eoi";
        $query = "SELECT * FROM `eoi`";
        $result = mysqli_query($conn, $query);
        if (isset($_POST["button0"])) {
            echo "<table border=\"1\">\n";
            echo "<tr>\n"
                ."<th scope=\"col\">reference_number</th>\n"
                ."<th scope=\"col\">first_name</th>\n"
                ."<th scope=\"col\">family_name</th>\n"
                ."<th scope=\"col\">status</th>\n"
                ."</tr>\n";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>\n";
                echo "<td>", $row["reference_number"], "</td>\n";
                echo "<td>", $row["first_name"], "</td>\n";
                echo "<td>", $row["family_name"], "</td>\n";
                echo "<td>", $row["status"], "</td>\n";
                echo "</tr>\n";
            }
            echo "</table>\n";
            mysqli_free_result($result);
        }

        if (isset($_POST["button1"])) {
            $query2 = "SELECT * FROM `eoi` ORDER BY reference_number";
            $result2 = mysqli_query($conn,$query2);
            if (!$result2) {
                echo "<p>something is wrong with query ", $query2, "</p>";
            } else {
                echo "<table border=\"1\">\n";
                echo "<tr>\n";
                echo "<td>reference_number</td>\n";
                echo "<td>first_name</td>\n";
                echo "<td>family_name</td>\n";
                echo "<td>status</td>\n";
                echo "</tr>\n";
                while ($row = mysqli_fetch_assoc($result2)) {
                    echo "<tr>\n";
                    echo "<td>", $row["reference_number"], "</td>\n";
                    echo "<td>", $row["first_name"], "</td>\n";
                    echo "<td>", $row["family_name"], "</td>\n";
                    echo "<td>", $row["status"], "</td>\n";
                    echo "</tr>\n";
                }
                echo "</table>\n";
                mysqli_free_result($result2);
            }
        }
        if (isset($_POST["button2"])) {
            $query3 = "SELECT * FROM `eoi` ORDER BY reference_number";
            $result3 = mysqli_query($conn,$query3);
            if (!$result3) {
                echo "<p>something is wrong with query ", $query3, "</p>";
            } else {
                echo "<table border=\"1\">\n";
                echo "<tr>\n";
                echo "<td>reference_number</td>\n";
                echo "<td>first_name</td>\n";
                echo "<td>family_name</td>\n";
                echo "<td>status</td>\n";
                echo "</tr>\n";
                while ($row = mysqli_fetch_assoc($result3)) {
                    echo "<tr>\n";
                    echo "<td>", $row["reference_number"], "</td>\n";
                    echo "<td>", $row["first_name"], "</td>\n";
                    echo "<td>", $row["family_name"], "</td>\n";
                    echo "<td>", $row["status"], "</td>\n";
                    echo "</tr>\n";
                }
                echo "</table>\n";
                mysqli_free_result($result3);
            }
        }
        mysqli_close($conn);    
        include("footer.inc");
        if (isset($_POST["Logout"])) {
            $_SESSION["login"] = false;
        }
    }
?>
<form method="post">
 <input type="submit" name="button0" class="button" value="Show all Job Ref" /> 
 <input type="submit" name="button1" class="button" value="Sort By Job Ref" /> 
</form>
        <form action="enhancements.php" method="post">
        <input type="submit" name="Logout" value="Logout">
        </form>

</body>
</html>