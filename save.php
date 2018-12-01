<?php
include_once('dbconn.php');
if (isset($_GET['status'])) {

	if ($_GET['status'] == 'tarefa') {
		
		$titulo    = $_POST['titulo'];

		$conteudo  = $_POST['conteudo'];

		$status	   = false;

		$data      = date('Y-m-d');

		$query = "INSERT INTO tarefa (titulo, conteudo, data,  status)
	        VALUES ('$titulo', '$conteudo', '$data', '$status')";

		if (mysqli_query($conn, $query)) {?>
			<div class="alert alert-success" role="alert">Tarefa cadastrada com sucesso</div>

			<?php } else {
			echo "Error: ".$query."<br>".mysqli_error($conn);
		}
	}
	
}

?>