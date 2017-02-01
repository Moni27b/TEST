<form method="post" action="add_CB.php">
    <div class="bd-example">
      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" href="#exampleModal" data-whatever="@mdo">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter</button>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="exampleModalLabel">Ajouter une carte bancaire</h4>
            </div>
            <div class="modal-body">
              <form>

                <div class="form-group">
                  <label for="Numero_CB" class="form-control-label">Numero CB</label>
                  <input minlength='16' maxlength='16' type="text" class="form-control" id="Numero_CB" placeholder="2312 2233 5675 4432" name="Numero_CB" required >
                </div>
                <div class="form-group">
                  <label for="Mois" class="form-control-label">Mois</label>
                  <select '<input type="text" class="form-control" id="Mois" placeholder="Mois" name="Mois" required>' >
                    <option>Janvier</option>
                    <option>Fevrier</option>
                    <option>Mars</option><option>Avril</option>
                    <option>Mai</option><option>Juin</option>
                    <option>Juillet</option><option>Aout</option>
                    <option>Septembre</option><option>Octobre</option>
                    <option>Novembre</option><option>Decembre</option>
                </select>
                </div>
                <div class="form-group">
                  <label for="Annee" class="form-control-label">Année</label>
                  <select '<input type="text" class="form-control" id="Annee" placeholder="Annee" name="Annee" required>' >
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option><option>2020</option>
                    <option>2021</option><option>2022</option>
                </select>
                </div>
                <div class="form-group">
                  <label for="Marque" class="form-control-label">CVV</label>
                  <input min='100' max='999' type="number" class="form-control" id="CVV" placeholder="345" name="CVV" required>
                </div>
                <div class="form-group">
                  <label for="Marque" class="form-control-label">Solde</label>
                  <input min="1" max="3000" type="number" class="form-control" id="Solde" placeholder="EUR" name="Solde" required>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              <input type="submit" value="Ajouter" class="btn btn-primary"></button>
            </div>
            </form>


          </div>
        </div>
      </div>
    </div>
