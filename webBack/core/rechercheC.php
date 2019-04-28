<?php  
include "../../projetWeb/core/reservationC.php";
 $connect = mysqli_connect("localhost", "root", "", "test"); 
 if( isset($_POST["query"]))  
 { $codec1=new reservationC();
  $sql="SElECT id,nom,numero,email,duree,date,nombre,statut from reservations where id like '%".$_POST["query"]."%' or nom like '%".$_POST["query"]."%' or numero like '%".$_POST["query"]."%' or email like '%".$_POST["query"]."%' or duree like '%".$_POST["query"]."%' or date like '%".$_POST["query"]."%' or nombre like '%".$_POST["query"]."%' or statut like '%".$_POST["query"]."%' " ;
    $db = config::getConnexion();
  
    $liste=$db->query($sql);
      $listecode=$liste;
  
                ?>
                          
          <div class="w3l-table-info" style="margin-right: 100px;">
                  <table id="table">
<thead>
              <tr>
<th>ID</th>
<th>Nom</th>
<th>Tel</th>
<th>Email</th>
<th>Date</th>
<th>Date</th>
<th>Nombre de personnes</th>
<th>Status</th>
<th>ACTION</th>
<th>Confirmation</th>

</tr>
</thead>

<tbody>
<?PHP
foreach($listecode as $row){
  ?>
  <tr>
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['numero']; ?></td>
  <td><?PHP echo $row['email']; ?></td>
  <td><?PHP echo $row['duree']; ?></td>
  <td><?PHP echo $row['date']; ?></td>
  <td><?PHP echo $row['nombre']; ?></td>
  <td><?PHP echo $row['statut']; ?></td>
  <td><a href='../core/supprimerReservationC.php?id=<?php echo$row['id'];?>'><i class="fa fa-trash-o"></i></a></td>

  <?php
  if($row['statut']=="en attente")
                {
                  ?>
                <td><a href='refuserreservation.php?id=<?php echo$row['id'];?>'>Complet</a>/
                <a href='accepterreservation.php?id=<?php echo$row['id'];?>'>Accepter</a></td>
                <?php
                }
                ?>
  <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
</tr>
  <?PHP
}
?>
</tbody>
</table>
</div>


<?php
}
 ?>