// Sélectionner l'icône et la liste de messages
const messageIcon = document.getElementById('message-icon');
const messageList = document.getElementById('message-list');
const closeListBtn = document.getElementById('close-list-btn');

// Fonction pour afficher la liste
function toggleMessageList() {
    if (messageList.style.display === "none" || messageList.style.display === "") {
        messageList.style.display = "block";
    } else {
        messageList.style.display = "none";
    }
}

// Fonction pour fermer la liste
function closeMessageList() {
    messageList.style.display = "none";
}

// Ajouter l'événement de clic sur l'icône pour afficher/masquer la liste
messageIcon.addEventListener('click', toggleMessageList);

// Ajouter l'événement de clic sur le bouton de fermeture pour masquer la liste
closeListBtn.addEventListener('click', closeMessageList);
