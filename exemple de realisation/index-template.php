<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($siteTitle) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2><?= htmlspecialchars($siteTitle) ?></h2>
        <nav>
            <?php foreach($navigation as $url => $label): ?>
                <a href="<?= htmlspecialchars($url) ?>">
                    <?= htmlspecialchars($label) ?>
                </a>
                <?php endforeach; ?>
        </nav>
    </header>
    
    <main class="hero">
        <div class="hero-text">
            <p>ARTISANAT MAROCAIN FAIT A LA MAIN</p>
            <h1>le marche des artisanes nmarocaines</h1>
            <a href="#boutique" class="button">
                DECOUVIRIRE LA BOUTIQUE
            </a>
        </div>
    </main>

    <section class="produit" id="#boutique">
        <h2>Nos produit (<?= count($produits) ?>)</h2>

        <?php if (count($produits) > 0): ?>
            <?php foreach($produits as $produit): ?>
                <div class="sac">
                    <img src="<?= htmlspecialchars($produit['image']) ?>" alt="<?= htmlspecialchars($produit['nom']) ?>">
                    <h3><?= htmlspecialchars($produit['nom']) ?></h3>
                    <p><?= htmlspecialchars($produit['description']) ?></p>
                    <p class="prix"><?= $produit['prix'] ?></p>
                    <a href="#contact" class="button">Precommender</a>
                </div>

                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucune produit pour le moment.</p>
            <?php endif; ?>
    </section>

    <div id="avis">
        <h2>Les avis de nos clients</h2>
        <?php foreach($avis as $a): ?>
            <div class="card">
                <p><strong>- <?= htmlspecialchars($a['nom']) ?></strong></p>
                <p>“<?= htmlspecialchars($a['texte']) ?>“</p>
            </div>

            <?php endforeach; ?>
    </div>

    <section class="comment" id="comment">
        <h2>Comment ca march ?</h2>
        <?php foreach($etapes as $etape): ?>
            <h3><?= htmlspecialchars($etape['titre']) ?></h3>
            <p><?= htmlspecialchars($etape['texte']) ?></p>
            <?php endforeach; ?>
    </section>

    <footer id="contact">
        <p><?= htmlspecialchars($siteTitle) ?>, l'artisanat marocain, directement des coopératives.</p>
        <p>Contatc : <a href="maitlo:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a></p>
        <p>© <?= date('d M Y', strtotime($date)) ?></p>

    </footer>
</body>
</html>