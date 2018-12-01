<?php
include 'header.php';
include 'save.php';
?>
<main >
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Cadastrar Tarefa</h1>

  </div>
</section>
<section>
	<div class="container">
		<form method="post" action="create-tarefa.php?status=tarefa">
   		 <div class="form-group">
	      <label for="titulo">Título</label>
	      <input type="text" class="form-control" id="titulo" placeholder="Digite o título da tarefa" name="titulo" required>
	    </div>
	    <div class="form-group">
	      <label for="conteudo">Conteúdo</label>
	      <textarea class="form-control" id="conteudo" rows="3" placeholder="Digite o conteudo da tarefa" name="conteudo"></textarea>
	    </div>
	    <div class="form-group">
	    <label for="data">Data para conclusão</label>
	    <input type="date" class="form-control" id="data" name="data" required>
	  </div>
	    



<button type="submit" class="btn btn-primary">Cadastrar</button>
	  </form>

	</div>
</section>
</main>
<?php include 'footer.php';?>