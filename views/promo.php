<div classe="container">
    <div class="row">
        <div class="col s10 offset-s1">
            <a href="#modal_add" class="waves-effect waves-light btn">Ajouter promo</a>
            <table width="100%" class="bordered highlight">
                <thead>
                <tr>
                    <th>id</th>
                    <th data-field="code_promo">Code promo</th>
                    <th data-field="libelle">Libellé promo</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<div id="modal_add" class="modal">
    <div class="modal-content">
        <div class="input-field col s12">
            <input value="" id="add_code_promo" type="text" class="validate">
            <label for="add_code_promo">Code Promo</label>
        </div>
        <div class="input-field col s12">
            <input value="" id="add_libelle" type="text" class="validate">
            <label for="add_libelle">Libellé Promo</label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Annuler</a>
        <a href="#!" id="modal_add_button" class=" modal-action modal-close waves-effect waves-green btn-flat">Ajouter</a>
    </div>
</div>

<div id="modal_edit" class="modal">
    <div class="modal-content">
        <div class="input-field col s2">
            <input disabled value="" class="modal_id" type="text" class="validate">
            <label for="modal_id">id</label>
        </div>
        <div class="input-field col s12">
            <input value="" class="modal_code_promo" type="text" class="validate">
            <label for="modal_code_promo">Code Promo</label>
        </div>
        <div class="input-field col s12">
            <input value="" class="modal_libelle" type="text" class="validate">
            <label for="modal_libelle">Libellé Promo</label>
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
            <input disabled value="" class="modal_code_promo" type="text" class="validate">
            <label for="modal_code_promo">Code Promo</label>
        </div>
        <div class="input-field col s12">
            <input disabled value="" class="modal_libelle" type="text" class="validate">
            <label for="modal_libelle">Libellé Promo</label>
        </div>
        <p>Voulez-vous vraiment supprimer cette promo ?</p>
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
        $('.modal_code_promo').val(row.find('.code_promo').text());
        $('.modal_libelle').val(row.find('.libelle').text());
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
    $('#modal_add_button').click(function(){
        var code_promo = $('#add_code_promo').val();
        $('#add_code_promo').val('');
        var libelle = $('#add_libelle').val();
        $('#add_libelle').val('');
        $.post( "./promo", {code_promo: code_promo, libelle: libelle});
        Materialize.updateTextFields();
        table.ajax.reload();
    });
    $('#modal_edit_button').click(function(){
        var id = $('#modal_edit .modal_id').val();
        var code_promo = $('#modal_edit .modal_code_promo').val();
        var libelle = $('#modal_edit .modal_libelle').val();
        $.post( "./promo", { id: id, code_promo: code_promo, libelle: libelle,  _method: "PUT" });
        table.ajax.reload();

    });
    $('#modal_delete_button').click(function(){
        var id = $('#modal_delete .modal_id').val();
        $.post( "./promo", { id: id, _method: "DELETE" });
        table.ajax.reload();
    });
    $(document).ready(function() {
        table = $('table').DataTable( {

            "ajax": {
                "url": "./get/promo",
                "dataSrc": ""
            },
            "columns": [
                { "data": "id", "class": "id", "searchable": false},
                { "data": "code_promo", "class": "code_promo"},
                { "data": "libelle", "class": "libelle" },
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
            paging: false,
            info: false
        } );
    } );
</script>