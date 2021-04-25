
<?php


foreach($dataReglement as $reglement) :?>
    <h2><?=$reglement;?></h2>
    <?php endforeach;?>

    $pdo = $dbConnexion->getPdo();

</main>
    <footer>
        <p class="text-center">
        <?= date('Y') ?> &copy; Site réalisé rapidement par une personne souhaitant garder l'anonymat
        </p>
    </footer>
    </div>
</body>
</html>


