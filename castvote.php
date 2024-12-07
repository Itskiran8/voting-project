<?php
include "header.php";
?>
        <div class="col py-3">
            <h1>cast your vote </h1>
            <table class="table table-bordered table-striped ">
<tr>
    <th>Srno.</th>
    <th>PartyName</th>
    <th>symbol</th>
    <th>select</th>
    <th>action</th>
   
</tr>
<?php
$srno=1;

$query="select * from addparty";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
    echo"<tr>
   <td>".$srno."</td>
   <td>".$row['partyname']."</td>
    <td>".$row['symbol']."</td>
     
   </tr>";
   $srno++;
}
?>



            </table>
        </div>
    </div>
</div>
</body>
</html>