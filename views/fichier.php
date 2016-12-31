<div classe="container">
    <div class="row">
        <div class="col s10 offset-s1">
            <a id="open_modal_add_button" class="waves-effect waves-light btn">Ajouter fichier</a>
            <table width="100%" class="bordered highlight">
                <thead>
                <tr>
                    <th>id</th>
                    <th data-field="promo">Promo</th>
                    <th data-field="rang">Rang</th>
                    <th data-field="libelle">Libellé fichier</th>
                    <th data-field="fichier">Fichier</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<div id="modal_add" class="modal">
    <form>
    <div class="modal-content">
        <div class="input-field col s12">
            <select id="add_promo">
                <option value=" " selected>Choisissez une promo</option>
            </select>
            <label>Promo</label>
        </div>
        <div class="input-field col s12">
            <input value="" id="add_rang" type="text" class="validate">
            <label for="add_rang">Rang</label>
        </div>
        <div class="input-field col s12">
            <input value="" id="add_libelle_fichier" type="text" class="validate">
            <label for="add_libelle_fichier">Libellé Fichier</label>
        </div>
        <div class="input-field col s12">
            <div class="file-field">
                <div class="btn">
                    <span>Fichier</span>
                    <input id="add_file_input" type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate add_file_name" type="text">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Annuler</a>
        <a href="#!" id="modal_add_button" class=" modal-action modal-close waves-effect waves-green btn-flat">Ajouter</a>
    </div>
        </form>
</div>

<div id="modal_edit" class="modal">
    <div class="modal-content">
        <div class="input-field col s2">
            <input disabled value=" " class="modal_id" type="text" class="validate">
            <label for="modal_id">id</label>
        </div>
        <div class="input-field col s12">
            <select id="modal_promo_edit">
                <option value="" >Choisissez une promo</option>
            </select>
            <label>Promo</label>
        </div>
        <div class="input-field col s12">
            <input value="" class="modal_rang" type="text" class="validate">
            <label for="modal_rang">Rang</label>
        </div>
        <div class="input-field col s12">
            <input value="" class="modal_libelle_fichier" type="text" class="validate">
            <label for="modal_libelle_fichier">Libellé Fichier</label>
        </div>
        <div class="input-field col s12">
            <div class="file-field">
                <div class="btn">
                    <span>Fichier</span>
                    <input id="edit_file_input" type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate modal_file_name" type="text">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Annuler</a>
        <a href="#!" id="modal_edit_button" class=" modal-action modal-close waves-effect waves-green btn-flat">Modifier</a>
    </div>
</div>

<div id="modal_delete" class="modal">
    <div class="modal-content">
        <div class="input-field col s2">
            <input disabled value="" class="modal_id" type="text" class="validate">
            <label for="modal_id">id</label>
        </div>
        <div class="input-field col s12">
            <select disabled id="modal_promo_delete">
                <option value="" disabled>Choisissez une promo</option>
            </select>
            <label>Promo</label>
        </div>
        <div class="input-field col s12">
            <input disabled value="" class="modal_rang" type="text" class="validate">
            <label for="modal_rang">Rang</label>
        </div>
        <div class="input-field col s12">
            <input disabled value="" class="modal_libelle_fichier" type="text" class="validate">
            <label for="modal_libelle_fichier">Libellé Fichier</label>
        </div>
        <div class="input-field col s12">
            <div class="file-field">
                <div class="file-path-wrapper">
                    <input disabled class="file-path validate modal_file_name" type="text">
                </div>
            </div>
        </div>
        <p>Voulez-vous vraiment supprimer ce fichier ?</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Annuler</a>
        <a href="#!" id="modal_delete_button" class=" modal-action modal-close waves-effect waves-green btn-flat">Supprimer</a>
    </div>
</div>

<script type="text/javascript">
    function modal_popu(caller){
        var row = caller.closest("tr");
        $('.modal_id').val(row.find('.id').text());
        $('#modal_promo_edit').find('option[value="'+row.find('.promo').text()+'"]').prop('selected',true);
        $('#modal_promo_delete').find('option[value="'+row.find('.promo').text()+'"]').prop('selected',true);
        $('.modal_rang').val(row.find('.rang').text());
        $('.modal_libelle_fichier').val(row.find('.libelle_fichier').text());
        $('.modal_file_name').val(row.find('.file_name').text().split("/").pop());
        $('select').material_select();
        Materialize.updateTextFields();
    }
    function modal_edit(caller){
        modal_popu(caller);
        $('#modal_edit').modal('open');
    }
    function modal_delete(caller){
        modal_popu(caller);
        $('#modal_delete').modal('open');
    }
    $('#open_modal_add_button').click(function(){
        $('select').material_select();
        $('#modal_add').modal('open')
    });

    $('#modal_add_button').click(function(){
        var promo = $('#add_promo').val();
        $('#add_promo').find('option[value=" "]').prop('selected',true);
        var rang = $('#add_rang').val();
        $('#add_rang').val('');
        var libelle_fichier = $('#add_libelle_fichier').val();
        $('#add_libelle_fichier').val('');
        var file_input = $('#add_file_input').prop('files')[0];
        var fd = new FormData();
        fd.append('promo', promo);
        fd.append('rang', rang);
        fd.append('libelle_fichier', libelle_fichier);
        fd.append( 'file', file_input );
        $.ajax({
            url: './fichier',
            data: fd,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(){
                table.ajax.reload();
                Materialize.updateTextFields();
            }
        });

    });
    $('#modal_edit_button').click(function(){
        var id = $('#modal_edit .modal_id').val();
        var promo = $('#modal_promo_edit').val();
        var rang = $('.modal_rang').val();
        var libelle_fichier = $('.modal_libelle_fichier').val();
        var file_input = $('#edit_file_input').prop('files')[0];
        var fd = new FormData();
        fd.append('id', id);
        fd.append('promo', promo);
        fd.append('rang', rang);
        fd.append('libelle_fichier', libelle_fichier);
        fd.append( 'file', file_input );
        fd.append('_method', 'PUT');
        $.ajax({
            url: './fichier',
            data: fd,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(){
                table.ajax.reload();
            }
        });

    });
    $('#modal_delete_button').click(function(){
        var id = $('#modal_delete .modal_id').val();
        $.post( "./fichier", { id: id, _method: "DELETE" });
        table.ajax.reload();
    });

    $(document).ready(function() {

        $.getJSON("./get/promo", function(tabPromos) {
            $.each(tabPromos, function(key, promo) {
                $("#add_promo").append("<option value="+promo['code_promo']+">"+promo['code_promo']+"</option>");
                $("#modal_promo_edit").append("<option value="+promo['code_promo']+">"+promo['code_promo']+"</option>");
                $("#modal_promo_delete").append("<option value="+promo['code_promo']+">"+promo['code_promo']+"</option>");
            });
        });


        table = $('table').DataTable( {

            "ajax": {
                "url": "./get/fichier",
                "dataSrc": ""
            },
            "columns": [
                { "data": "id", "class": "id", "searchable": false},
                { "data": "promo", "class": "promo" },
                { "data": "rang", "class": "rang" },
                { "data": "libelle", "class": "libelle_fichier"},
                { "data": "fichier", "class": "file_name" },
                {
                    "orderable": false,
                    "searchable": false,
                    "data": "null",
                    "defaultContent": "<a href='#' onclick='modal_edit($(this))'><i class='material-icons'>mode_edit</i></a>"
                },
                {
                    "orderable": false,
                    "searchable": false,
                    "data": "null",
                    "defaultContent": "<a href='#' onclick='modal_delete($(this))'><i class='material-icons'>delete</i></a>"
                }
            ],
            "order": [[ 1, "asc" ],[ 2, "asc" ]],
            paging: false,
            info: false
        } );

    } );
</script>