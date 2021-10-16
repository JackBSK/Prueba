<?php include ("db.php");?>

<?php include ("include/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php if(isset($_SESSION['message'])){ ?>
                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="saveTask.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="titulo" class="form-control" placeholder="Título de la tarea" autofocus>
                    </div>
                    <div class="form_group">
                        <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripción de la tarea"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Guardar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
        </div>
    </div>
</div>

<?php include ("include/footer.php"); ?>

