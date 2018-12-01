<?php
include 'header.php';
include 'delete.php';
$sql    = "SELECT id_h, titulo, conteudo, data, status FROM tarefa";
$result = mysqli_query($conn, $sql);

?>
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Lista de Tarefas</h1>
</section>

<section class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th scope="col">Descrição</th>
      <th scope="col">Data</th>
      <th scope="col">Ação</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

<?php

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {?>
		
    <tr>
      <td scope="col"> <?php echo $row["id_h"];?></td>
      <td scope="col"><?php echo $row["titulo"];?></td>
      <td scope="col"><?php echo $row["conteudo"];?></td>
      <td scope="col"><?php echo $row["data"];?></td>
      <td scope="col"><?php echo "<a href='?apagar=tarefa&id_h=".$row['id_h']."'><button type='button' class='btn btn-danger'>Apagar</button></a>";?></td>
      <td scope="col"><?php echo "<a href='update.php?id_h=".$row['id_h']."'><button type='button' class='btn btn-success'>Concluir</button></a>";?></td>
		</tr>

		<?php }
}if ($row["status"]) {
      echo "<span class='badge badge-pill badge-primary'>Tarefa concluída</span>";
    } 
    
?>
</tbody>
</table>

</section>

  </div>



<?php
include 'footer.php';
?>