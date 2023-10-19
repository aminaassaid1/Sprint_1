<?php
define('__ROOT__', dirname(dirname(__FILE__)));
?>


<!DOCTYPE html>
<html lang="en">

<?php
include_once(__ROOT__ . "/Layout/head.php");
?>

<?php include_once(__ROOT__ . "/Layout/Loader.php"); ?>





<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <?php
    include_once(__ROOT__ . "/Layout/navbare.php");
    ?>
    <!-- Main Sidebar Container -->
    <?php
    include_once(__ROOT__ . "/Layout/sidebare.php");
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Gestions des Compétences</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-2">
                    <div class="row p-3">
                        <div class="col-sm-12 col-md-6">
                            <a class="btn btn-primary" href="add.php">Ajouter Compétences</a>
                        </div>
                    </div>


                    <table class="table table-striped Competences">
                        <thead>
                        <tr>
                            <th style="width: 3%">Reference</th>
                            <th class="text-center" style="width: 9%">Code</th>
                            <th style="width: 20%">Nom</th>
                            <th style="width: 40%">Description</th>
                            <th style="width: 25%">Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $competencesDAO = new CompetencesDAO();

                        $competences = $competencesDAO->GetAllCompetences();

                        foreach ($competences as $competence) {
                            ?>
                            <tr>
                                <td><?= $competence->getREFERENCE() ?></td>
                                <td><a><?= $competence->getCODE() ?></a></td>
                                <td><?= $competence->getNOM() ?></td>
                                <td><?= $competence->getDESCRIPTION() ?></td>
                                <td class="client-actions">

                                    <a class='btn btn-warning btn-sm'
                                       href="edit.php?competenceID=<?= $competence->getID() ?>">
                                         Modifier
                                    </a>
                                    <a class="btn btn-danger btn-sm"
                                       onclick="setId(<?php echo $competence->getID() ?>);" data-toggle="modal"
                                       data-target="#myModal">  Supprimer
                                    </a>

                                </td>

                            </tr>
                            <?php
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>


        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal content goes here -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Title</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <p>T'es bien sûr(e) que tu veux effacer ça ?
                        </p>
                        <form class="modal-footer" action="./subprime.php" method="POST">
                            <input name="competenceID" type="hidden" id="IDModal">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="competenceBTN" class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <aside class="control-sidebar control-sidebar-dark">

    </aside>
</div>
<?php
include_once(__ROOT__ . '/Layout/footer.php');
?>

<?php
include_once(__ROOT__ . '/Layout/links.php');

?>


</body>

</html>