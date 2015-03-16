    <!-- Compétences -->
    <form method="post" action="validation" enctype="multipart/form-data">
        <fieldset>

            <label for="nom_c">Nom</label>
            <input id="nom_c" name="nom_c" type="text" placeholder="Nom">
            
            <label for="competences_c">Compétences</label>
            <input id="competences_c" name="competences_c" type="text" placeholder="Compétences">
            
            <input type="submit" value="Envoyer">
            
        </fieldset>
    </form>

    <!-- Expériences -->
    <form method="post" action="validation" enctype="multipart/form-data">
        <fieldset>

            <label for="duree_e">Durée</label>
            <input id="duree_e" name="duree_e" type="text" placeholder="2014 - 2015">
            
            <label for="entreprise_e">Entreprise</label>
            <input id="entreprise_e" name="entreprise_e" type="text" placeholder="OIIO Formation">
            
            <label for="travaux_e">Travaux</label>
            <input id="travaux_e" name="travaux_e" type="text" placeholder="Baby-sitting">
            
            <label for="poste_e">Poste</label>
            <input id="poste_e" name="poste_e" type="text" placeholder="Administrateur systèmes et réseaux">
            
            <input type="submit" value="Envoyer">
            
        </fieldset>
    </form>

    <!-- Projets -->
    <form method="post" action="validation" enctype="multipart/form-data">
        <fieldset>

            <label for="date_p">Date</label>
            <input id="date_p" name="date_p" type="text" placeholder="2015">
            
            <label for="description_p">Description</label>
            <input id="description_p" name="description_p" type="text" placeholder="Site CV">
            
            <label for="lien_p">Lien</label>
            <input id="lien_p" name="lien_p" type="text" placeholder="http://lalala.com">
            
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>

    <!-- Formation -->
    <form method="post" action="validation" enctype="multipart/form-data">
        <fieldset>

            <label for="annee_f">Année</label>
            <input id="annee_f" name="annee_f" type="text" placeholder="2015 - 2016">
            
            <label for="description_f">Description</label>
            <input id="description_f" name="description_f" type="text" placeholder="BTS IRIS en alternance">
            
            <label for="ecole_f">Ecole</label>
            <input id="ecole_f" name="ecole_f" type="text" placeholder="OIIO Formation">
            
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>

    <!-- Centres d'intérêts -->
    <form method="post" action="validation" enctype="multipart/form-data">
        <fieldset>

            <label for="description_i">Decription</label>
            <input id="description_i" name="description_i" type="text" placeholder="Poneys">
            
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>

<?php