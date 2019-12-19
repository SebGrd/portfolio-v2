<div class="page-header">
    <div class="page-header_image">
        <img src="src/img/bg-veilles.png" alt="utec" class="img-resp center">
    </div>
    <div class="container">
        <h2>Veille</h2>
    </div>
</div>

<section class="content mb-xl">
    <div class="container">
        <h2>Veille</h2>
        <p>Une veille technologique et juridique sont mises à disposition :</p>
        <div class="d-md-flex align-content-center justify-content-between">
            <a href="#!" id="btnVeilleIT" class="btn btn--blue w-100 mr-md-2 mb-3 mb-md-0">Veille technologique</a>
            <a href="#!" id="btnVeilleJUR" class="btn btn--purple w-100 ml-md-2">Veille juridique</a>
        </div>
    </div>
</section>

<section class="veille veille-it">
    <div class="container">
        <div class="content">
            <h2>Veille technologique</h2>
            <p><b>Sur cette page figure les dernières information sur l'informatique et la technologie.</b></p>
        </div>
        <div class="row">
            <?php foreach ($feedIT->channel->item as $index => $item): ?>
                <div class="col-12 col-md-6">
                    <article class="article-card mb-m">
                        <div class="thumbnail">
                            <img src="<?= $item->enclosure[0]['url']; ?>" alt="<?= $item->title ?>" class="img-resp">
                            <span class="article_date"><?= date('d/m/Y', strtotime($item->pubDate)) ?></span>
                        </div>
                        <div class="caption">
                            <h3><?= $item->title ?></h3>
                            <p>
                                <?php $count = 0; ?>
                                <?php foreach ($item->category as $key => $category): ?>
                                    <?php if ($count === 0): ?>
                                        <?= '<small>'.$category.'</small>' ?>
                                    <?php else: ?>
                                        <?= ' | <small>' . $category.'</small>' ?>
                                    <?php endif; ?>
                                    <?php $count++; ?>
                                <?php endforeach; ?>
                            </p>
                            <p><?= $item->description ?></p>
                            <a href="<?= $item->link ?>" target="_blank" class="btn btn--light" title="<?= $item->title ?>">Lire
                                l'article</a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="veille veille-jur">
    <div class="container">
        <div class="content">
            <h2>Veille juridique</h2>
            <p><b>Sur cette page figure les dernières information relatant de la juridique informatique.</b></p>
        </div>
        <div class="row">
            <?php foreach ($feedJUR->item as $index => $item): ?>
                <div class="col-12 col-md-6">
                    <article class="article-card colored-card--purple mb-m">
                        <div class="caption">
                            <h3><?= $item->title ?></h3>
                            <p><?= $item->description ?></p>
                            <a href="<?= $item->link ?>" target="_blank" class="btn btn--light" title="<?= $item->title ?>">Lire
                                l'article</a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="credits mb-l">
    <div class="container">
        <div class="content">
            <h2>Provenance des flux :</h2>
            <div class="d-md-flex">
                <div class="credits_it w-100 mb-5">
                    <h3>Informatique</h3>
                    <ul>
                        <li><?= $feedIT->channel->title ?></li>
                    </ul>
                    <p><?= $feedIT->channel->description ?></p>
                    <a href="<?= $feedIT->channel->link ?>" class="btn btn--blue" target="_blank"><?= $feedIT->channel->link ?></a>
                </div>
                <div class="credits-jur w-100">
                    <h3>Juridique</h3>
                    <ul>
                        <li><?= $feedJUR->channel->title ?></li>
                    </ul>
                    <p><?= $feedJUR->channel->description ?></p>
                    <a href="<?= substr($feedJUR->channel->link, 00, -27) ?>" class="btn btn--purple" target="_blank"><?= substr($feedJUR->channel->link, 00, -27) ?></a>
                </div>
            </div>
        </div>


    </div>
</section>


