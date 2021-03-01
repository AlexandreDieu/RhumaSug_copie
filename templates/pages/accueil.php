<main>
    <h1>Page Accueil</h1>
    <?php
    $request = $db->prepare("SELECT * FROM Produits");
    $request->execute();

    $produits = $request->fetchAll(PDO::FETCH_CLASS);
    ?>
    <?php foreach ($produits as $produit): ?>
        <img src="<?= ASSETS_IMG . "/" . $produit->imageProduit ?>" alt="">
        <div class="nomProduit"><?= $produit->nomProduit; ?></div>
        <div class="price"><?= $produit->prixProduit; ?></div>
    <?php endforeach; ?>

</main>