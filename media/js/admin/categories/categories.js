/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var root = location.protocol + '//' + location.host;
$(document).ready(function () {
    $(document).on('click', '#color_cat', function () {
        color = $(this).data('color');
        $('.color-selected').removeClass('z-depth-2'); //enleve l'ombre
        $('.color-selected').removeClass('z-depth-2'); //enleve la selection
        $(this).addClass('color-selected'); //ajout de la classe
        $(this).addClass('z-depth-2'); //ajout de l'ombre
        //remplir l'input
        $('#real_color_selected').val(color);
    });

    $(document).on('click', '#delete_cat', function () {
        nbChecked = $('input[name="bulk_select"]:checked').length;
        if (nbChecked > 0) { //au moins 1 categorie
            //traitement de la supression
            $('input[name="bulk_select"]:checked').map(function () {
                id = $(this).val();
                //delete ajax
                $.ajax({
                    url: root + "/PDOProject/Ajax/categories/delete.php",
                    type: "post",
                    data: {id: id},
                    dataType: 'json',
                    success: function (data) {
                        //enlever l'élément
                        $('#trc' + id).remove();
                    },
                    error: function () {
                        alert('erreur ajax');
                    }
                });
            });
        } else {
            //erreur, une categorie doit etre selectionée
            alert('Une catégorie doit être sélectionnée pour pouvoir continuer');
        }
    });

    $(document).on('click', '#restore_cat', function () {
        $.ajax({
            url: root + "/PDOProject/Ajax/categories/restore.php",
            type: "post",
            dataType: 'json',
            success: function (data) {
                //enlever l'élément
                alert('les catégories ont été récupérées');
            },
            error: function () {
                alert('erreur ajax');
            }
        });
    });
});

