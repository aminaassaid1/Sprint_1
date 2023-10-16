<?php
define('__ROOT__', dirname(dirname(__FILE__)));

include_once(__ROOT__ . '/Layout/head.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Compétences</title>

    <!-- Include your CSS and other head elements here -->
    <?php include_once(__ROOT__ . '/Layout/links.php'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <?php include_once(__ROOT__ . "/Layout/navbare.php"); ?>

    <!-- Main Sidebar Container -->
    <?php include_once(__ROOT__ . "/Layout/sidebare.php"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Modifier Compétences</h1>
        </section>

        <section class="content">
            <form method="post">
                <div class="row">
                    <div class="col">
                        <div class="card card-primary">
                            <div class="card-header">

                                <h3 class="card-title">Modifier Compétences</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputReference">
                                        Reference
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input name="reference" type="text" id="inputReference" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputCode">Code</label>
                                    <input name="code" type="text" id="inputCode" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputNom">Nom<span class="text-danger">*</span></label>
                                    <input name="nom" type="text" id="inputNom" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea name="description" id="inputDescription"
                                              class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" name="add_competence" class="btn btn-primary">Modifier</button>
                        <a href="index.php" class="btn btn-secondary">Annuler</a>
                    </div>
                </div>
            </form>
        </section>
    </div>

</div>

<?php include_once(__ROOT__ . '/Layout/footer.php'); ?>
<?php include_once(__ROOT__ . '/Layout/links.php'); ?>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
