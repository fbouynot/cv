<section id='coord'>
    <div>
        <p><i>FÉLIX BOUYNOT</i><br/><br/>

            101 rue du chevaleret<br/>
            Paris 75013<br/>
            06 51 90 61 75<br/>
            <a href=mailto:felixbouynot@gmail.com>felixbouynot@gmail.com</a></p>
    </div>
    <aside>
        <?php
            echo "<img width=121 height=151 src='" . BASE_URL . "/img/photo.jpg'/>";
        ?>
    </aside>
</section>

<section id='titre'>
    <h1>Administrateur systèmes et réseaux</h1>
    <p>pour un contrat de professionnalisation dès août 2015</p>
</section>
<nav>
    <div id='navcomp'>Compétences</div>
    <div id='navexp'>Expériences</div>
    <div id='navproj'>Projets</div>
    <div id='navform'>Formation</div>
    <div id='navint'>Centres d'intérêts</div>
</nav>
<section id='comp'>
    <table>
        <?php
            foreach ($competences as $competence)
            {
                echo '<tr>';
                echo '<td><b>' . $competence['nom_c'] . ' :</b></td>';
                echo '<td>' . $competence['liste_c'] . '</td>';
                echo '</tr>';
            }
        ?>
    </table>
</section>
<section id='exp'>
    <table>
        <tr>
            <td><b>Durée</b></td>
            <td><b>Entreprise</b></td>
            <td><b>Travaux réalisés</b></td>
            <td><b>Poste</b></td>
        </tr>
        <?php
            foreach ($experiences as $experience)
            {
                echo '<tr>';
                echo '<td>' . $experience['duree_e'] . '</td>';
                echo '<td>' . $experience['entreprise_e'] . '</td>';
                echo '<td>' . $experience['travaux_e'] . '</td>';
                echo '<td>' . $experience['poste_e'] . '</td>';
                echo '</tr>';
            }
        ?>
    </table>
</section>
<section id='proj'>
    <table>
        <?php
            foreach ($projets as $projet)
            {
                echo '<tr>';
                echo '<td>' . $projet['date_p'] . '</td>';
                echo '<td><a href="' . BASE_URL . '/' . $projet['lien_p'] . '">' . $projet['description_p'] . '</td>';
                echo '</tr>';
            }
        ?>
    </table>
</section>
<section id='formation'>
    <table>
        <?php
            foreach ($formations as $formation)
            {
                echo '<tr>';
                echo '<td>' . $formation['annee_f'] . '</td>';
                echo '<td>' . $formation['description_f'] . '</td>';
                echo '<td>' . $formation['ecole_f'] . '</td>';
                echo '</tr>';
            }
        ?>
    </table>
</section>
<section id='int'>
    <?php
        echo '<p>';
        foreach ($interets as $interet)
        {
            echo $interet['description_i'] . '<br/>';
        }
        echo '</p>';
    ?>
</section>