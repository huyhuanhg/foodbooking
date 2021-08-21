//
$('.show-edit-form').forEach(btn => {
    btn.onclick = e => {
        let key = e.target.getAttribute('key') || e.target.parentElement.getAttribute('key');
        let rowData = document.querySelectorAll(".row-store-info")[key];

        $('#titleForm').innerText = "Sửa thông tin cửa hàng";
        $('#btnSubmit').innerText = "Sửa";
        var url = new URL(window.location.href);
        let page = url.searchParams.get("page");

        let formElm = $('#storeForm');
        formElm.action = `/shop/${rowData.getAttribute('data-store-id')}?page=${page}`
        formElm.querySelector('input[name=_method]').value = 'put';
        formElm.querySelector('input[name=id]').value = rowData.getAttribute('data-store-id');

        $('#storeName').value = rowData.getAttribute('data-store-name');
        $('#phone').value = rowData.getAttribute('data-store-phone');
        $('#storeAddress').value = rowData.getAttribute('data-store-address');
        $('#storeStatus').value = rowData.getAttribute('data-store-status');
        $('#storeDescription').value = rowData.getAttribute('data-store-desc')
    }
})

// set value modal
function setValueModalDetail(rowStoreInfo) {
    $('#store_owner_avatar').src = rowStoreInfo.getAttribute('data-owner-avatar');
    $('#store_name').innerText = rowStoreInfo.getAttribute('data-store-name');
    $('#store_owner_fullname').innerText = rowStoreInfo.getAttribute('data-owner-fullname');
    $('#store_phone').innerText = rowStoreInfo.getAttribute('data-store-phone');
    $('#store_address').innerText = rowStoreInfo.getAttribute('data-store-address');
    $('#store_status').innerHTML =
        rowStoreInfo.getAttribute('data-store-status') === '1' ?
            '<span class="badge bg-soft-success">Hoạt động</span>' :
            '<span class="badge badge bg-soft-warning">Đóng cửa</span>';
    $('#store_rate').innerHTML =
        rowStoreInfo.getAttribute('data-store-rate') !== '0' ?
            rowStoreInfo.getAttribute('data-store-rate') + '<span class="text-warning"><i class="uil uil-star"></i></span>' : '';

    let createAt = new Date(rowStoreInfo.getAttribute('data-store-create-at'));
    if (createAt.toString() !== 'Invalid Date') {
        $('#store_create_at').innerText = `${createAt.getDate()}-${createAt.getMonth() + 1}-${createAt.getFullYear()}`;
    } else {
        $('#store_create_at').innerText = '';
    }
    $('#store_total_food').innerText = rowStoreInfo.getAttribute('data-store-total-food') || 0;
    $('#store_profit').innerText = rowStoreInfo.getAttribute('data-store-profit') || 0;
    if (!rowStoreInfo.getAttribute('data-store-desc')) {
        $('#store_description').parentElement.style.display = 'none'
    } else {
        $('#store_description').parentElement.style.display = 'flex'
        $('#store_description').innerText = rowStoreInfo.getAttribute('data-store-desc');
    }
}
