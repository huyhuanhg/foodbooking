// Load modal
loadModal($('#formModal'));
//alert
let alertList = document.querySelectorAll('.alert')
alertList.forEach(function (alert) {
    new bootstrap.Alert(alert)
})
let alertNode = document.querySelector('.alert');
if (alertNode) {
    let alert = bootstrap.Alert.getInstance(alertNode)
    setTimeout(function () {
        alert.close();
    }, 2500)
}
