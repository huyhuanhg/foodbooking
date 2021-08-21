//validate
$('#storeForm').validate({
    formGroup: '.form-group',
    rules: {
        "#storeName": {
            required: true,
        },
        "#phone": {
            required: true,
            regex: /^(0|\+84)[3|5|7|8|9][\d+]{8}$/,
        },
        "#storeAddress": {
            required: true,
        },
        "#storeStatus": {
            required: true,
        },
    },

    message: {
        "#storeName": {
            required: "Vui lòng nhập tên cửa hàng!",
        },
        "#phone": {
            required: "Vui lòng nhập số điện thoại!",
            regex: 'Định dạng: 0... / +84...'
        },
        "#storeAddress": {
            required: "Vui lòng nhập địa chỉ!",
        },
        "#storeStatus": {
            required: "Vui lòng chọn trạng thái!",
        },
    },
});

$('#formModal').addEventListener('hidden.bs.modal', function () {
    $('#storeForm').resetValidate();
})
