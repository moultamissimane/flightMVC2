<?php
if(isset($_POST['id'])){
    $exitEmploye = new EmployersControllers();
    $exitEmploye->deleteEmploye();
}
?>

<div class="wrapper">
    <div class="row my-4">
        <div class="col-md-10 mx-auto">
            <?php include('./views/includes/alerts.php');?>
            <div class="card">
                <div class="card-body bg-light">
                <a href="<?php echo BASE_URL; ?>add" class="btn btn-sm btn-primary mr-2 mb-2">
                        <i class="fas fa-plus"></i>
                    </a>
                    <table class="table table-dark table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">nom et prénom</th>
                                <th scope="col">matricule</th>
                                <th scope="col">département</th>
                                <th scope="col">poste</th>
                                <th scope="col">date_embauche</th>
                                <th scope="col">statut</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employes as $employer) : ?>
                                <tr>
                                    <th scope="row"><?php echo $employer['nom'] . ' ' . $employer['prenom']; ?></th>
                                    <td><?php echo $employer['matricule']; ?></td>
                                    <td><?php echo $employer['depart']; ?></td>
                                    <td><?php echo $employer['poste']; ?></td>
                                    <td><?php echo $employer['date_emb']; ?></td>
                                    <td>
                                        <?php echo $employer['statut'] ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Resilié</span>'; ?>
                                    </td>
                                    <!-- actions -->
                                    <td class="d-flex flex-row">
                                        <!-- update without php cuz in url there's only update thanks to autoload -->
                                        <form method="post" action="update" class="mr-1">
                                            <input type="hidden" name="id" value="<?php echo $employer['id']; ?>">
                                            <button name="update" class="btn btn-sm btn-warning"> <i class="fa fa-edit"></i> </button>
                                        </form>
                                    </td>

                                    <td>
                                        <form method="post" action="delete" class="mr-1">
                                            <input type="hidden" name="id" value="<?php echo $employer['id']; ?>">
                                            <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                        </form>
                                    </td>
                                    <!-- end actions -->
                                </tr>
                            <?php endforeach;  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>