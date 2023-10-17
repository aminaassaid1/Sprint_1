<?php
include 'loader.php';

$competencesDAO = new CompetencesDAO();
$competences = $competencesDAO->GetAllCompetences();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once(__ROOT__ . '/Layout/head.php');
?>

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
                <h1>Compétences</h1>
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
                                <a class="btn btn-primary" href="add.php">Ajouter Compétence</a>
                            </div>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Réference</th>
                                <th scope="col">Code</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($competences as $competence) : ?>
                                <tr>
                                    <td><?= $competence->getREFERENCE(); ?></td>
                                    <td><?= $competence->getCODE(); ?></td>
                                    <td><?= $competence->getNOM(); ?></td>
                                    <td><?= $competence->getDESCRIPTION(); ?></td>
                                    <td>
                                        <button type='button' class='btn btn-warning btn-sm' data-href='edit.php'>Modifier</button>
                                        <button type='button' class='btn btn-danger btn-sm'>Supprimer</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
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

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    $(document).ready(function () {
        $('button[data-href]').click(function () {
            window.location.href = $(this).data('href');
        });
    });
</script>


</html>