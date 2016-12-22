<div classe="container">
    <div class="row">
        <div class="col s10 offset-s1">
            <table class="bordered highlight">
                <thead>
                <tr>
                    <th data-field="libelle">Libellé fichier</th>
                    <th data-field="promo">Promo</th>
                    <th data-field="rang">Rang</th>
                    <th data-field="fichier">Fichier</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>

                <tbody>
                <tr tag="1">
                    <td class="field_libelle">AlviAlvinAlvinAlvinAlvinAlvinAlvinAlvinnAlvinAlvinAlvin</td>
                    <td class="field_promo">Eclair</td>
                    <td class="field_rang">5</td>
                    <td class="field_fichier">EclairEclairEclairEclairEclairEclairEclairEclairEclairEclairEclairEclairEclairEclair</td>
                    <td><a href="#" class="edit" tag="1"><i class="material-icons">mode_edit</i></a></td>
                    <td><a href="#" class="delete" tag="1"><i class="material-icons">delete</i></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.edit').click(function(){
        var tag_number = $(this).attr('tag');
        $('#libelle_fichier').val($('tr[tag="'+tag_number+'"] .field_libelle').text());
        var selected_promo = $('tr[tag="'+tag_number+'"] .field_promo').text();
        $('#select_promo option[value="'+selected_promo+'"]').prop('selected', true);
        $('#rang').val($('tr[tag="'+tag_number+'"] .field_rang').text());
        $('#file_input').val($('tr[tag="'+tag_number+'"] .field_fichier').text()); // CHECK IF MODIFIED
        $('#modal_edit').modal('open');
        $('select').material_select();
        Materialize.updateTextFields();
    });
</script>

<div id="modal_edit" class="modal">
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12">
                <input value="" id="libelle_fichier" type="text" class="validate">
                <label for="libelle_fichier">Libellé Fichier</label>
            </div>
            <div class="input-field col s12">
                <select id="select_promo">
                    <option value="" disabled>Choisissez une promo</option>
                    <option value="1">Option 1</option>
                    <option value="Eclair">Option 2</option>
                    <option value="3" id="blabla">Option 3</option>
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
                        <input class="file-path validate" id="file_input" type="text">
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