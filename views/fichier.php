<div classe="container">
    <div class="row">
        <div class="col s10 offset-s1">
            <table class="bordered highlight">
                <thead>
                <tr>
                    <th data-field="libelle">Libellé fichier</th>
                    <th data-field="promo">Promo</th>
                    <th data-field="fichier">Fichier</th>
                    <th data-field="fichier">Rang</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>AlviAlvinAlvinAlvinAlvinAlvinAlvinAlvinnAlvinAlvinAlvin</td>
                    <td>Eclair</td>
                    <td>EclairEclairEclairEclairEclairEclairEclairEclairEclairEclairEclairEclairEclairEclair</td>
                    <td>5</td>
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
                <input value="" id="libelle_fichier" type="text" class="validate">
                <label for="libelle_fichier">Libellé Fichier</label>
            </div>
            <div class="input-field col s12">
                <select>
                    <option value="" disabled selected>Choisissez une promo</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <label>Promo</label>
            </div>
            <div class="input-field col s12">
                <input value="" id="rang" type="text" class="validate">
                <label for="rang">Rang</label>
            </div>
            <div class="input-field col s12">
                <div class="file-field">
                    <div class="btn">
                        <span>Fichier</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Annuler</a>
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Modifier</a>
    </div>
</div>