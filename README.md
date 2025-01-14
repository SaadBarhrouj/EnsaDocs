# EnsaDocs - Plateforme pour Demandes de Documents Scolaires 📝

Bienvenue sur **EnsaDocs**, une plateforme conçue pour simplifier les démarches administratives des étudiants de l'ENSA Tétouan.  
Grâce à cette plateforme, les étudiants peuvent demander facilement et rapidement différents documents scolaires, tels que :  

- **Relevés de notes** 📋  
- **Attestations de scolarité** 🏫  
- **Conventions de stage** 📄  
- **Lettres de recommandation** 📨  

Notre plateforme propose une gestion complète des demandes avec suivi en temps réel et notifications par email.

---

## Fonctionnalités

- ✔️ **Accès direct aux demandes de documents**
- ✔️ **Suivi en temps réel de vos demandes**
- ✔️ **Envoi des documents demandés directement par email**
- ✔️ **Notification par email en cas de refus avec la raison du refus**
- ✔️ **Possibilité de réclamer en cas de retard ou de refus**
- ✔️ **Support dédié pour toute question**
- ✔️ **Processus simplifié pour une expérience optimale**

---

## Aperçu de l'Application

Voici quelques captures d'écran pour découvrir EnsaDocs en action :

<div style="text-align: center;">
    <img src="preview/1.preview.png" alt="Aperçu EnsaDocs" width="400" style="border: 2px solid #000; display: inline-block;">
    <img src="preview/2.preview.png" alt="Aperçu EnsaDocs" width="400" style="border: 2px solid #000; display: inline-block;">
    <img src="preview/3.preview.png" alt="Aperçu EnsaDocs" width="400" style="border: 2px solid #000; display: inline-block;">
    <img src="preview/4.preview.png" alt="Aperçu EnsaDocs" width="400" style="border: 2px solid #000; display: inline-block;">
</div>

---

## Technologies Utilisées

- **Laravel** 🌐  
- **Bootstrap** 🎨  
- **MySQL** 🛢️  

---

## Installation

Pour exécuter ce projet localement :  

1. **Clonez le repository :**
    ```bash
    git clone https://github.com/SaadBarhrouj/EnsaDocs.git
    ```

2. **Accédez au répertoire du projet :**
    ```bash
    cd EnsaDocs
    ```

3. **Installez les dépendances backend :**
    ```bash
    composer install
    ```

4. **Configurez votre fichier `.env` :**

    ### Configuration de la base de données MySQL
    Dans le fichier `.env`, ajoutez ou modifiez les lignes suivantes pour configurer votre base de données :
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ensadocs_db
    DB_USERNAME=root
    DB_PASSWORD=your_password
    ```

    - **DB_CONNECTION** : Type de base de données (ici, MySQL).
    - **DB_HOST** : Adresse de l'hôte de votre base de données (généralement `127.0.0.1` pour un environnement local).
    - **DB_PORT** : Port utilisé pour la connexion (le port par défaut pour MySQL est `3306`).
    - **DB_DATABASE** : Nom de la base de données.
    - **DB_USERNAME** : Nom d'utilisateur pour se connecter à la base de données.
    - **DB_PASSWORD** : Mot de passe pour l'utilisateur de la base de données.

    ### Configuration de l'envoi d'emails
    Configurez également l'envoi d'emails en ajoutant les lignes suivantes dans votre fichier `.env` :
    ```env
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=587
    MAIL_USERNAME=saad.barhrouj@etu.uae.ac.ma
    MAIL_PASSWORD=taciayafmekalhhk
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=saad.barhrouj@etu.uae.ac.ma
    MAIL_FROM_NAME="${APP_NAME}"
    ```

    - **MAIL_MAILER** : Type de transport d'email (ici, `smtp`).
    - **MAIL_HOST** : Hôte SMTP (ici, Gmail).
    - **MAIL_PORT** : Port du serveur SMTP (ici, `587` pour TLS).
    - **MAIL_USERNAME** : Adresse email utilisée pour l'envoi.
    - **MAIL_PASSWORD** : Mot de passe pour l'adresse email.
    - **MAIL_ENCRYPTION** : Type de chiffrement (ici, `tls`).
    - **MAIL_FROM_ADDRESS** : Adresse d'envoi des emails.
    - **MAIL_FROM_NAME** : Nom de l'expéditeur, défini par la variable `${APP_NAME}`.

    ```

5. **Exécutez les migrations pour créer les tables :**
    ```bash
    php artisan migrate
    ```

6. **Lancez le serveur local :**
    ```bash
    php artisan serve
    ```

7. **Ouvrez l'application dans votre navigateur :**  
    [http://localhost:8000](http://localhost:8000)

---

## Contribution

Les contributions sont les bienvenues ! Vous pouvez :  
- Forker le repository.  
- Proposer des améliorations via des pull requests.  
- Ouvrir des issues pour signaler des bugs ou suggérer de nouvelles fonctionnalités. 💡  

---

## Contact

Pour toute question ou assistance, contactez-nous :  

- **Email:** [Saad Barhrouj](saad.barhrouj@etu.uae.ac.ma) 📧
- **LinkedIn:** [Saad Barhrouj](https://www.linkedin.com/in/saad-barhrouj-b37270295/) 💼
- **GitHub:** [SaadBarhrouj](https://github.com/SaadBarhrouj) 🐙
- **Mon Portfolio :** [Live Portfolio](https://portfolio-saad-barhrouj.netlify.app/) 

Merci d'utiliser **EnsaDocs** pour simplifier vos démarches administratives ! 😊

