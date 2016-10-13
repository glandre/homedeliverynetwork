/**
 * Created by geraldo on 06/10/16.
 */

function update (productId) {
    var newQuantity = $('#quantity_input_' + productId).val();

    $.ajax({
        type: 'POST',
        url: '/products/update-quantity',
        data: {
            productId: productId,
            newQuantity: newQuantity
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
    $('#quantity_label_' + productId).attr('style' , 'display: none');
    $('#edit_button_' + productId).attr('style' , 'display: none');
    $('#quantity_input_' + productId).attr('style' , '');
    $('#quantity_input_' + productId).val($('#quantity_label_' + productId).html().trim()).focus();
    $('#update_button_' + productId).attr('style' , '');
    $('#cancel_button_' + productId).attr('style' , '');
}

function omitEdition(productId) {
    $('#quantity_label_' + productId).attr('style' , '');
    $('#edit_button_' + productId).attr('style' , '');
    $('#quantity_input_' + productId).attr('style' , 'display: none');
    $('#update_button_' + productId).attr('style' , 'display: none');
    $('#cancel_button_' + productId).attr('style' , 'display: none');
}