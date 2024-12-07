<tbody id="table_body">
<?php
$query = "SELECT * FROM addparty";
$result = mysqli_query($con, $query);
$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $count . ".</td>";
    echo "<td>" . $row['party_name'] . "</td>";
    echo '<td><img src="' . $row['symbol_url'] . '" height="50px" class="rounded"></td>';
    echo '<td><input type="radio" name="votedparty" value="' . $row['party_name'] . '"></td>';
    echo '<td>
            <button type="button" class="btn btn-success edit-btn" onclick="editRow(this)"><i class="fa-solid fa-pen-to-square"></i></button>
            <button type="button" class="btn btn-danger delete-btn" onclick="deleteRow(this)"><i class="fa-solid fa-trash"></i></button>
          </td>';
    echo "</tr>";
    $count++;
}
?>
</tbody>

<?php 
if(isset($_POST['btnsubmit'])) {
    $votedparty = mysqli_real_escape_string($con, $_POST['votedparty']);
   
    $query = "INSERT INTO castvote (votedparty) VALUES ('$votedparty')";
 
    if(mysqli_query($con, $query)) {
        echo "<script>alert('Your vote is submitted')</script>";
    } else {
        echo mysqli_error($con);
    }
}
?>

<script>function editRow(button) {
    // Existing code to edit row in HTML

    // AJAX call to update database
    var partyName = cells[1].innerText.trim();
    var symbolSrc = cells[2].querySelector('img').src;
    var radioValue = cells[3].querySelector('input').value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "update_party.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle response if needed
        }
    };
    xhr.send("partyName=" + encodeURIComponent(partyName) + "&symbolSrc=" + encodeURIComponent(symbolSrc) + "&radioValue=" + encodeURIComponent(radioValue));
}
</script>