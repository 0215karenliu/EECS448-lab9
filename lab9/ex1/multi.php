<?php
  echo "<table border =\"1\" style='border-collapse: collapse'>";
  for ($row = 0; $row <= 100; $row++){
    echo "<tr>";
    for ($col = 0; $col <= 100; $col++){
            if ($row == 0 && $col > 0){
              echo "<td>" . $col . "</td>";
            }else if ($col == 0 && $row > 0){
              echo "<td>" . $row . "</td>";
            }else if ($row > 0 && $col > 0){
              echo "<td>" . $row * $col . "</td>";
            }else{
              echo "<td>  </td>";
            }
    }echo "</tr>";
  }echo "</table>";
?>
