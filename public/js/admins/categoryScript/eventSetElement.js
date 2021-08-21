$('.show-edit-form').forEach(btn => {
    btn.onclick = e => {
        $('#titleForm').innerText = "Sửa danh mục món ăn";
        $('#btnSubmit').innerText = "Sửa";
        let formElm = $('#categoryForm');
        formElm.action = '/manager/category/update'
        formElm.querySelector('input[name=_method]').value = 'put';
        $('#categoryId').value = e.target.getAttribute('data-cate-id') ||
            e.target.parentElement.getAttribute('data-cate-id');
        $('#categoryName').value = e.target.getAttribute('data-cate-name') ||
            e.target.parentElement.getAttribute('data-cate-name');
        $('#categoryActive').value = e.target.getAttribute('data-cate-active') ||
            e.target.parentElement.getAttribute('data-cate-active');
        $('#categoryDescription').value = e.target.getAttribute('data-cate-desc') ||
            e.target.parentElement.getAttribute('data-cate-desc');
    }
})
$('#btnAdd').onclick = () => {
    $('#titleForm').innerText = "Thêm danh mục món ăn";
    $('#btnSubmit').innerText = "Thêm";
    let formElm = $('#categoryForm');
    formElm.reset();
    formElm.action = '/manager/category'
    formElm.querySelector('input[name=_method]').value = 'post';
}
