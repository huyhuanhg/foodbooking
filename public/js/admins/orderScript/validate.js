//validate
$('#categoryForm').validate({
    formGroup: '.form-group',
    rules: {
        "#categoryName": {
            required: true,
        },
        "#categoryActive": {
            required: true,
        },
    },
    message: {
        "#categoryName": {
            required: "Vui lòng nhập danh mục!",
        },
        "#categoryActive": {
            required: "Vui lòng chọn tình trạng!",
        },
    },
});
