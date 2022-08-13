<!-- content -->
<section id="content">
    <!-- taches tendances -->
    <section id="tendances">
        <div id="cardsTendance" class="dflex">
            <div>
                <h3>top tache</h3>
            </div>
            <div>
                <h3>top etage</h3>
            </div>
            <div>
                <h3>top resident</h3>
            </div>
        </div>
    </section>


    <!-- *********************************************************** -->
    <!-- *********************tableau******************************* -->
    <!-- *********************************************************** -->
    <section id="tableau">
        <table id="tableTache">
            <thead id="tableTop">
                <tr>
                    <th>Tache à effectuer</th>
                    <th>Résident</th>
                    <th><img src="assets/img/elevator.svg" alt="etage"></th>
                    <th><img src="assets/img/door-key.svg" alt="num de porte"></th>
                    <th><img src="assets/img/date.svg" alt="date"></th>
                    <th><img src="assets/img/trash.svg" alt="supprimer"></th>
                    <th><img src="assets/img/verifier.svg" alt="verifier"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tache_a_faire as $tache) : ?>
                <tr>
                    <td><?= strip_tags($tache['tache']) ?></td>
                    <td><?= strip_tags($tache['nom_resident']) ?></td>
                    <td><?= strip_tags($tache['etage']) ?></td>
                    <td><?= strip_tags($tache['numero_appartement']) ?></td>
                    <td><?= strip_tags($tache['date']) ?></td>
                    <td>
                        <form action="includes/delete.php" method="get">
                            <input type="hidden" name="id_tache" value="<?= $tache['id_tache'] ?>">
                            <input type="submit" value="❌">
                        </form>
                    </td>
                    <td>
                        <form action="includes/finish.php" method="get">
                            <input type="hidden" name="id_tache" value="<?= $tache['id_tache'] ?>">
                            <input type="submit" value="✅">
                        </form>
                    <td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
    <!-- fin du tableau -->