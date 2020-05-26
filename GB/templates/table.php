<?php

// print_r($table);
// echo "<table class='table'>";
echo "<table class='border m-2'>";
foreach ($table as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td class='border'>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
<form class="m-3">
  <div class="form-group">
  <textarea name="text" class="w-25 bg-light"></textarea>
  </div>
  <div class="form-group">
  <input type="text" name="name" value="name" class="border">
  <button type="submit" class="btn btn-primary">OK</button>
</form>

<!-- <form action="" method="post" class="form"> -->
<!-- <form action="" method="post" class="form">

<textarea name="text"></textarea>
<input type="text" name="name" value="name">
<input type="submit">
</form> -->
