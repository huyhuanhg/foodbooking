//validate
$('#promotionForm').validate({
    formGroup: '.form-group',
    rules: {
        "#discount": {
            required: true,
            regex: /^\d+$/
        },
        "#maxDiscount": {
            regex: /(^\d+$)|(^$)/
        },
    },
    message: {
        "#discount": {
            required: 'Vui lòng nhập mục này!',
            regex: 'Định dạng phải là số'
        },
        'maxDiscount': {
            regex: 'Định dạng phải là số'
        }
    },
});

$('#formModal').addEventListener('hidden.bs.modal', function (event) {
    $('#promotionForm').resetValidate();
})
