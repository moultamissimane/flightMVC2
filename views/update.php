<?php
if(isset($_POST['id'])){
    $exitEmploye = new EmployersControllers();
    $employe = $exitEmploye->getOneEmploye();
}else{
    Redirect::to('home');
}

if(isset($_POST['submit'])){
    $exitEmploye = new EmployersControllers();
    $exitEmploye->updateEmploye();
}

?>
<div class="wrapper">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">update employer</div>
                <div class="card-body bg-light">
                <a href="<?php echo BASE_URL; ?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                        <i class="fas fa-home"></i>
                    </a>
                <form method="post">
                    <div class="form-group ">
                        <label for="nom">Nom*</label>
                        <input type="text" name="nom" class="form-control" placeholder="Nom" value="<?php echo $employe->prenom; ?>">
                    </div>
                    
                    <div class="form-group ">
                        <label for="prenom">Prenom*</label>
                        <input type="text" name="prenom" class="form-control" placeholder="prenom " value="<?php echo $employe->prenom; ?>">
                    </div>
                    
                    <div class="form-group ">
                        <label for="matricule">Matricule*</label>
                        <input type="text" name="matricule" class="form-control" placeholder="Matricule" value="<?php echo $employe->matricule; ?>">
                    </div>
                    
                    <div class="form-group ">
                        <label for="depart">Departement*</label>
                        <input type="text" name="depart" class="form-control" placeholder="departement" value="<?php echo $employe->depart; ?>">
                        <input type="hidden" name="id" value="<?php echo $employe->id; ?>">
                    </div>
                    
                    <div class="form-group ">
                        <label for="poste">Poste*</label>
                        <input type="text" name="poste" class="form-control" placeholder="poste" value="<?php echo $employe->poste; ?>">
                    </div>
                    
                    <div class="form-group ">
                        <label for="date_emb">Date embauche*</label>
                        <input type="date" name="date_emb" class="form-control">
                    </div>
                    <div class="form-group ">
                    <label for="action">Action*</label>
                        <select class="form-control" name="statut">
                            <option value="1" <?php echo $employe->statut?'selected':''; ?>>Active</option>
                            <option value="0" <?php echo !$employe->statut?'selected':''; ?>>Résilié</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <button type="submit" class=" btn btn-primary" name="submit">Valider</button>
                    </div>
                </form>
                </div>
            </div> 
        </div>
    </div>
</div>                   
