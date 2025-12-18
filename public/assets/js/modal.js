document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('communityModal');
    const modalImg = document.getElementById('communityModalImage');
    const modalTitle = document.getElementById('communityModalTitle');

    modal.addEventListener('show.bs.modal', function (event) {
        const trigger = event.relatedTarget;
        modalImg.src = trigger.getAttribute('data-image');
        modalTitle.textContent = trigger.getAttribute('data-title');
    });
});