var app = {

    toggleUserFormRole: function () {
        var card = $('#userFormCard');
        var selector = $('#userFormRole');
        var selectedValue = selector.find('option:selected').val();

        card.find('.toggleSelector').hide();

        if (selectedValue == 'CUSTOMER') {
            $('#userFormCustomerSelectorContainer').show();
        }
        if (selectedValue == 'VENDOR') {
            $('#userFormVendorSelectorContainer').show();
        }
    }
};

$(function () {
    $('#userFormRole').change(app.toggleUserFormRole);
    app.toggleUserFormRole();
});

