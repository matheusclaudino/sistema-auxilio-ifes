<?php require_once 'gui/header.php'; 

    // Controladora
    use Control\AlunoControl;
    $ctr = new AlunoControl();

?>

<main>

    <div class="wrapper page" id="page">

        <?php include('gui/menu.phtml') ?>

        <div class="content" id="content">

            <div class="row">

                <div class="col-sm-12">

                    <h1 class="page-title">Gerenciar alunos</h1>

                </div>

                <div class="col-sm-12">

                    <?php $list = $ctr->getAllAluno(); ?>

                    <?php foreach ($list as $aluno): ?>

                        <p><?php echo '<pre>';
                            print_r( $aluno );
                        echo '</pre>'; ?></p>

                    <?php endforeach; ?>

                </div>
                
            </div>

            <?php require_once 'gui/footer.php'; ?>   

        </div>

    </div>

</main>

<?php require_once 'gui/endpage.phtml'; ?>