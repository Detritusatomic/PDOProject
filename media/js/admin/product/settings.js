/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var root = location.protocol + '//' + location.host;
$(document).ready(function () {
    $(document).on('click', '#restore', function () {
        $.ajax({
            url: root + "/PDOProject/Ajax/product/restore.php",
            type: "post",
            dataType: 'json',
            success: function (data) {
                //enlever l'élément
                alert('les produits ont été restaurés');
            },
            error: function () {

            }
        });
    });
    $(document).on('click', '#delete', function () {
        $.ajax({
            url: root + "/PDOProject/Ajax/product/deleteall.php",
            type: "post",
            dataType: 'json',
            success: function (data) {
                //enlever l'élément
                alert('les produits ont été supprimés');
            },
            error: function () {

            }
        });
    });
});


