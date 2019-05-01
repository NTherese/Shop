<?php
//PLACER LE TRAITEMENT AU-DESSUS DU FORMULAIRE
    if (isset($_POST['submit_login'])) {
        
        $req = $cnx->prepare("INSERT INTO cd_rom(editeur) VALUES(:editeur)");
        /*$req->bindParam(':dateexamen',$dateexammen);
        $req->bindParam(':heureexamen',$heureexamen);
        $req->bindParam(':lieuexamen',$lieuexamen);
        $req->execute();
        //echo 'Vous'.$name.$surname.'avez bien été ajouté !';*/
    }
    ?>
<hgroup>
  <h3 class="aligner txtGras">Entrez les informations sur les cd_rom</h3>
  </hgroup>
<div class="container register">
                <div class="row">
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<form action="<?php print $_SERVER['PHP_SELF'];?>" method="post">
                                   <div class="row register-form">
							
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Editeur du cd*" value="" name="editeur" id="editeur" title="Entrez l'editeur du cd rom "  required/>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <input type="submit" class="btnRegister" name="submit_login" id="submit_login" value="Enregistrer"/>
                                  </div>
								 </form>
                            </div>
                          </div>
                        </div>
                    </div>
    
                </div>
</div>
<br/><br/><br/><br/>
<hgroup>
    <h3 class="aligner txtGras">Informations sur les cd</h3>
</hgroup>

<br/><br/>
<?php
//récupération des elements pour la liste déroulante
$typ = new cd_romDB($cnx);
$types = $typ->getCdRom();
$nbr_type = count($types);
?>


<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th scope="col"><span style="color:white;">Numero du cd</span></th>
                    <th scope="col"><span style="color:white;">Nom de l'editeur</span></th>
                </tr>
              </thead>
              <tbody>
                  <?php
                    for ($i = 0; $i < $nbr_type; $i++) {?>
                <tr>
                    <th scope="row"><span style="color:white;"><?php print $types[$i]->cdromid;?></span></th>
                    <td><span style="color:white;"><?php  print $types[$i]->editeur; ?></span></td>
                </tr>
                    <?php } ?>
                </tbody>
            </table>
    </form>
</div>

