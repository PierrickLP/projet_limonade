<div classe="container">
    <div class="row">
        <div class="col s10 offset-s1">
            <table class="bordered highlight">
                <thead>
                <tr>
                    <th data-field="code_promo">Code promo</th>
                    <th data-field="libelle">Libellé promo</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td><a href="#modal_edit"><i class="material-icons">mode_edit</i></a></td>
                    <td><a href="#!"><i class="material-icons">delete</i></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="modal_edit" class="modal">
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12">
                <input value="" id="code_promo" type="text" class="validate">
                <label for="code_promo">Code Promo</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input value="" id="libelle_promo" type="text" class="validate">
                <label for="libelle_promo">Libellé Promo</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Annuler</a>
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Modifier</a>
    </div>
</div>