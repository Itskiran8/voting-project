<?php
include ("header.php");
?>

<body>

<div class="container-fluid" id="votef_bg">
<!--  -->

<div class="row">
    <h1 style="text-align: center;"> Cast Your Vote Here !!</h1>
    <h2 style="text-align: center;color:rgb(80, 6, 20) ;">India's future is in your hand , Cast your vote honestly</h2>
</div>

<div class="row offset-lg-4 mt-5" id="vote_table">
<?php 
    if(isset($_POST['btnsubmit']))
    {
      $votedparty=mysqli_real_escape_string($con,$_POST['votedparty']);
      
     
      $query="insert into castvote(votedparty)values('$votedparty')";
    
      if(mysqli_query($con,$query)){
        echo "<script>alert('your message is submitted')</script>";
        echo"<script>window.location.href='index.php'</script> ";
  }
     else{
           echo mysqli_error($con);
  }
}
?>
  <form action="#" method="post">

  <table  cellspacing="10px" cellpadding ="10" border=2>
        <thead class="bg-dark text-white">
         <tr>
          <th>Sr No. </th>
          <th>Party Name </th>
          <th>Symbol </th>
          <th>Select </th>
       
         </tr>
        </thead>

        <tbody id="table_body">
<?php
$srno=1;

$query="select * from addparty";
$result=mysqli_query($con, $query);
while($row=mysqli_fetch_array($result))
{
    echo "<tr>
    <td>".$srno."</td>
    <td>".$row['partyname']."</td>
    <td><img src='uploads/".$row['picture']."' width='100' height='100' /></td>
          <td><input type='radio' name='votedparty' value='".$row['partyname']."'></td>

    
    </tr>";
    $srno++;
}
?>
</tbody>
<tfoot>
           <tr>
            <td colspan="5">
            <button type="submit" class="btn btn-success" name="btnsubmit">Submit</button>
          
            </td>
            </tr>
     </tfoot>
</table>

    

</form>
</div>
</div>

<script>
        function addNewRow() {
            var tableBody = document.getElementById("table_body");
            var rowCount = tableBody.rows.length + 1;

            var newRow = tableBody.insertRow();
            newRow.innerHTML = `
                <td>${rowCount}.</td>
                <td>New Party</td>
                <td><img src="img/default-symbol.png" height="50px" class="rounded"></td>
                <td><input type="radio" name="votedparty" value="New Party"></td>
                <td>
                    <button type="button" class="btn btn-success edit-btn" onclick="editRow(this)"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger delete-btn" onclick="deleteRow(this)"><i class="fa-solid fa-trash"></i></button>
                </td>
            `;
        }

    function editRow(button) {
    var row = button.closest('tr');
    var cells = row.cells;
    var partyName = cells[1].innerText.trim();
    var symbolSrc = cells[2].querySelector('img').src;
    var radioValue = cells[3].querySelector('input').value;

    var newName = prompt("Enter new party name", partyName);
    if (newName) {
        cells[1].innerText = newName;
    }

    var newSymbolSrc = prompt("Enter new symbol URL", symbolSrc);
    if (newSymbolSrc) {
        cells[2].querySelector('img').src = newSymbolSrc;
    }

    // For the radio value, update it accordingly (assuming it's editable)
    // Here you would typically update the value attribute of the radio input
    var newRadioValue = prompt("Enter new radio value", radioValue);
    if (newRadioValue) {
        cells[3].querySelector('input').value = newRadioValue;
    }
}


        function deleteRow(button) {
            var row = button.closest('tr');
            row.parentNode.removeChild(row);
        }
    </script>

<?php
include ("footer.php");
?>
</body>