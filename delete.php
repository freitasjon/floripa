<?php

if (isset($_GET['apagar'])) {

	if ($_GET['apagar'] == 'tarefa') {
		
		$id_h     = $_GET['id_h'];

		$query  = "DELETE FROM tarefa WHERE id_h = '$id_h'";

		$result = mysqli_query($conn, $query);

		if (mysqli_query($conn, $query)) {?>
		
			<div class="alert alert-success" role="alert">Tarefa apagada com sucesso</div>

			<?php } else {
		
			echo "Error: ".$query."<br>".mysqli_error($conn);
		}
	} 

}

?>