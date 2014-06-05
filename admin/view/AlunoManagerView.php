<?php require_once 'gui/header.php'; 

    // Controladora
    use Control\DefaultControl;
    $ctr = new DefaultControl();

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

                    <?php $rs = $ctr->select("SELECT * FROM aluno"); ?>

                </div>
                
            </div>

            <?php require_once 'gui/footer.php'; ?>   

        </div>

    </div>

</main>

<?php require_once 'gui/endpage.phtml'; ?>