window.addEventListener('load', function () {
    var pElement = document.getElementsByClassName('platforms');
    var $modal = $('#exampleModal');
    Array.from(pElement).forEach((p) => {
        // Native
        p.addEventListener('click', function (ev) {
            ev.preventDefault();
            var jsPlatorm = JSON.parse(p.dataset['platform']);
            // console.log(modal);
            // show.bs.modal event
            $modal.on('show.bs.modal', function (e) {
                $('#exampleModalLabel').text(jsPlatorm['nom']);
                $('#exampleModalBody').text(jsPlatorm['description']);
            })
            // console.log(p.querySelector('a'))
            // console.log(p.dataset['platform']);
            // alert(jsPlatorm['id'])large-platform-modal
        });
    });
}, false);