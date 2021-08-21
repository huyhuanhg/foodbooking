function loadModal(modal) {
    let isError = modal.getAttribute('aria-initial-show');
    if (isError) {
        new bootstrap.Modal(modal, {
            keyboard: false
        }).show();
    }
}
