document.addEventListener('DOMContentLoaded', function () {
    // Récupérer les éléments
    const documentSelect = document.getElementById('document');
    const releveNoteSection = document.getElementById('releve-note');
    const conventionSection = document.getElementById('convention');
    const filiereReleve = document.getElementById('filiere-releve');
    const filiereConvention = document.getElementById('filiere-convention');
    const releveSelect = document.getElementById('releve-select');

    // Fonction pour masquer toutes les sections supplémentaires
    function hideAllSections() {
        releveNoteSection.style.display = 'none';
        conventionSection.style.display = 'none';
        filiereReleve.style.display = 'none';
    }

    // Afficher la section appropriée en fonction de l'option sélectionnée
    documentSelect.addEventListener('change', function () {
        hideAllSections();

        const selectedDocument = documentSelect.value;

        if (selectedDocument === 'releve') {
            releveNoteSection.style.display = 'block';
        } else if (selectedDocument === 'convention') {
            conventionSection.style.display = 'block';
        }
    });

    // Afficher ou masquer la filière pour le relevé de note
    releveSelect.addEventListener('change', function () {
        if (
            releveSelect.value === 'ci1' ||
            releveSelect.value === 'ci2' ||
            releveSelect.value === 'ci3'
        ) {
            filiereReleve.style.display = 'block';
        } else {
            filiereReleve.style.display = 'none';
        }
    });

    // Initialiser le formulaire avec aucune section affichée
    hideAllSections();
});

function initialize() {
    var mapOptions = {
        zoom: 15,
        scrollwheel: false,
        center: new google.maps.LatLng(23.763494, 90.432226),
    };

    var map = new google.maps.Map(
        document.getElementById('googleMap'),
        mapOptions
    );

    var marker = new google.maps.Marker({
        position: map.getCenter(),
        animation: google.maps.Animation.BOUNCE,
        icon: 'img/map-marker.png',
        map: map,
    });
}

google.maps.event.addDomListener(window, 'load', initialize);
