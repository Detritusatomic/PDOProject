/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var root = location.protocol + '//' + location.host;
$(document).ready(function () {
    $(document).on('click', '#delete_produit' , function () {
        if (confirm('Voulez-vous vraiment supprimer ce produit ?')) {
            id = $(this).data('produit');
            $.ajax({
                url: root + "/PDOProject/Ajax/product/delete.php",
                type: "post",
                data: {id: id},
                dataType: 'json',
                success: function (data) {
                    //enlever l'élément
                    $('#tr' + id).remove();
                },
                error: function () {

                }
            });
        }
    });
    //pagination
    
});

