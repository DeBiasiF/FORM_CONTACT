<form action="" method="post">
    <div class="mb-3">
        <label for="lastName" class="form-label">Nom de famille</label>
        <input type="text" class="form-control" id="lastName" placeholder="Votre nom de famille" value="<?=$lastname?>">
    </div>
    <div class="mb-3">
        <label for="firstName" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="firstName" placeholder="Votre prénom" value="<?=$firstName?>">
    </div>
    <div class="mb-3">
        <label for="mail" class="form-label">Adresse e-mail</label>
        <input type="email" class="form-control" id="mail" placeholder="Votre adresse e-mail" value="<?=$mail?>">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Numéro de téléphone</label>
        <input type="tel" class="form-control" id="phone" placeholder="Votre numéro de téléphone" value="<?=$phone?>">
    </div>
    <div class="mb-3">
        <label for="birthDay" class="form-label">Date de naissance</label>
        <input type="date" class="form-control" id="birthDay" value="<?=$birthDay?>">
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Télécharger un fichier</label>
        <input type="file" class="form-control" id="file">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>