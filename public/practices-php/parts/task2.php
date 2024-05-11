<?php
echo "<table border='2' style='border-collapse: collapse;'>";
for ($rows = 1; $rows <= 10; $rows++){
    echo "<tr>";
    for ($columns = 1; $columns <= 10; $columns++){
        echo "<td style='padding: 3px;'>" . $rows * $columns . "</td>";
    }
    echo "</tr>";
}
echo "</table>";