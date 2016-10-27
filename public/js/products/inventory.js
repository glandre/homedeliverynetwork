/**
 * Created by geraldo on 06/10/16.
 */

function update (productId) {
    var newQuantity = $('#quantity_input_' + productId).val();
    var continueSelling = $('#continue_selling_select_' + productId).val();

    confir

    $.ajax({
        type: 'POST',
        url: '/products/inventory/update',
        data: {
            productId: productId,
            newQuantity: newQuantity,
            continueSelling: continueSelling
        },
        success: function (data) {
            console.log(data);

            $('#messageBox').html('<div class="alert alert-success fade in">'
                + '<button class="close" data-dismiss="alert">'
                + 'X'
                + '</button>'
                + '<i class="fa-fw fa fa-check"></i>'
                + 'Quantity successfully updated.'
                + '</div>');

            $('#quantity_input_' + productId).val(newQuantity);
            $('#quantity_label_' + productId).html(newQuantity);

            // $('#continue_selling_select_' + productId).val(continueSelling);
            $('#continue_selling_label_' + productId).html(
                $('#continue_selling_select_' + productId + ' option:selected').text()
            );
            omitEdition(productId);



        },
        error: function (data) {
            console.log('Error:', data);
            $('#messageBox').html('<div class="alert alert-danger fade in">'
                + '<button class="close" data-dismiss="alert">'
                + 'X'
                + '</button>'
                + '<i class="fa-fw fa fa-check"></i>'
                + data.responseJSON.error
                + '</div>');

            $('#quantity_input_' + productId).val($('#quantity_label_' + productId).html().trim()).focus();
        }
    });
}

function edit(productId) {
    $('#continue_selling_label_' + productId).attr('style' , 'display: none');
    $('#quantity_label_' + productId).attr('style' , 'display: none');
    $('#edit_button_' + productId).attr('style' , 'display: none');
    $('#continue_selling_select_' + productId).attr('style' , 'display: inline');
    $('#quantity_input_' + productId).attr('style' , '');
    $('#quantity_input_' + productId).val($('#quantity_label_' + productId).html().trim()).focus();
    $('#update_button_' + productId).attr('style' , 'display: inline');
    $('#cancel_button_' + productId).attr('style' , 'display: inline');
}

function omitEdition(productId) {
    $('#continue_selling_label_' + productId).attr('style' , 'display: inline');
    $('#quantity_label_' + productId).attr('style' , 'display: inline');
    $('#edit_button_' + productId).attr('style' , 'display: inline');
    $('#continue_selling_select_' + productId).attr('style' , 'display: none');
    $('#quantity_input_' + productId).attr('style' , 'display: none');
    $('#update_button_' + productId).attr('style' , 'display: none');
    $('#cancel_button_' + productId).attr('style' , 'display: none');
}