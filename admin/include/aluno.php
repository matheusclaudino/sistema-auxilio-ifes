<?php

/**
 * Controladora
 */
require_once __ADMIN__.'/control/AlunoControl.php';
$ctr = new AlunoControl();

/**
 * Lista de alunos cadastrados 
 */
$lista_alunos = $ctr->getAllAluno();

?>
<div class="row">

    <div class="col-sm-6">

        <h1 class="page-title">Aluno</h1>

    </div>

    <div class="col-sm-6">
    	<?php
			require 'util/breadcrumb.php';;
			$breadcrumb = new breadcrumb;
			echo $breadcrumb->show_breadcrumb();
		?>
    </div>

    <div class="col-sm-12">

        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Matrícula</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista_alunos as $aluno): ?>
            <tr>
                <td><?= $aluno['aluno_id'] ?></td>
                <td><?= $aluno['matricula'] ?></td>
                <td><?= $aluno['nome'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>

    </div>

</div>