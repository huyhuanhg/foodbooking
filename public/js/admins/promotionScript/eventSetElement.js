// set value modal detail
function setValueModalDetail(rowStoreInfo) {
    $('#customer_avatar').src = rowStoreInfo.getAttribute('data-order-avatar');
    $('#customer_fullname').innerText = rowStoreInfo.getAttribute('data-order-fullname');
    $('#order_phone').innerText = rowStoreInfo.getAttribute('data-order-phone');
    let orderStatus = rowStoreInfo.getAttribute('data-order-status');
    $('#order_status').innerHTML =
        orderStatus === '1' ?
            '<span class="badge bg-soft-success">Đã giao hàng</span>' :
            '<span class="badge badge bg-soft-warning">Chờ xử lý</span>';
    if (orderStatus !== '1') {
        $('#btn_do_finish_order').className = 'btn btn-primary d-inline-block';
    } else {
        $('#btn_do_finish_order').className = 'btn btn-primary d-none';
    }
    $('#order_create_at').innerText = rowStoreInfo.getAttribute('data-order-created');
    $('#order_total_price').innerText = rowStoreInfo.getAttribute('data-order-total_price');
    $('#order_address').innerText = rowStoreInfo.getAttribute('data-order-address');
    if (!rowStoreInfo.getAttribute('data-order-note')) {
        $('#order_note').parentElement.style.display = 'none'
    } else {
        $('#order_note').parentElement.style.display = 'flex'
        $('#order_note').innerText = rowStoreInfo.getAttribute('data-order-note');
    }
    let orderDetails = JSON.parse(rowStoreInfo.getAttribute('data-order-detail'));
    let htmlDetail = '';
    for (var detail of orderDetails) {
        htmlDetail = htmlDetail.concat('<li>', '\n');
        htmlDetail = htmlDetail.concat('<ul class="list-unstyled row">', '\n');
        htmlDetail = htmlDetail.concat('<li class="col d-flex align-items-center">', '\n');
        if (!detail['food_avatar']) {
            htmlDetail = htmlDetail.concat(`<img src="/images/default/no-image-food.jpg"
                                class="avatar avatar-md-sm rounded-circle shadow" alt="">`);
        } else {
            htmlDetail = htmlDetail.concat(`<img src="/${detail['food_avatar']}"
                                class="avatar avatar-md-sm rounded-circle shadow" alt="">`);
        }
        htmlDetail = htmlDetail.concat(`<span class="ms-2">${detail['food_name']}</span>`, '\n');
        htmlDetail = htmlDetail.concat('</li>', '\n');
        htmlDetail = htmlDetail.concat('<li class="col d-flex align-items-center">',
            new Intl.NumberFormat().format(detail['uni_price']), '</li>', '\n');
        htmlDetail = htmlDetail.concat(`<li class="col d-flex align-items-center">x ${detail['quantity']}</li>`, '\n');

        htmlDetail = htmlDetail.concat('<li class="col d-flex align-items-center">- ',
            new Intl.NumberFormat().format(detail['discount']), '</li>', '\n');
        let total = detail['uni_price'] * detail['quantity'] - detail['discount'];
        htmlDetail = htmlDetail.concat(
            `<li class="col d-flex align-items-center">= ${new Intl.NumberFormat().format(total)} đ</li>`, '\n'
        );
        htmlDetail = htmlDetail.concat('</ul>', '\n');
    }
    $('#modal_order_detail').innerHTML = htmlDetail;

    //set form edit value
    setFormEdit(rowStoreInfo);
}
//set form edit value
function setFormEdit(rowStoreInfo){
    let orderId = rowStoreInfo.getAttribute('data-order-id');
    $('#edit_order_id').innerText = orderId;
    $('#orderFullName').innerText = rowStoreInfo.getAttribute('data-order-fullname');

    let formElm = $('#orderForm');
    formElm.action = `/manager/orders/${orderId}`;
    formElm.querySelector('input[name=id]').value = orderId;

    $('#orderNumberPhone').value = rowStoreInfo.getAttribute('data-order-phone');
    $('#orderAddress').value = rowStoreInfo.getAttribute('data-order-address');
    $('#orderStatus').value = rowStoreInfo.getAttribute('data-order-status');
    $('#orderNote').value = rowStoreInfo.getAttribute('data-order-note');
}


//set style dropdown menu
$('.order-status').forEach((badge, index) => {
    let allRowStoreInfo = $('.row-order-info');
    badge.onclick = (e) => {
        setActionToggleStatus(allRowStoreInfo[index]);
        let dropMenuShow = e.target.nextElementSibling;
        if (dropMenuShow) {
            dropMenuShow.classList.add('l-70');
            e.target.addEventListener('hidden.bs.dropdown', function () {
                dropMenuShow.classList.remove('l-70');
            })
        }
    }
})

// set action form toggle status
function setActionToggleStatus(rowStoreInfo) {
    $('#toggleState').action = `/manager/orders/toggle-state/${rowStoreInfo.getAttribute('data-order-id')}`;
}
