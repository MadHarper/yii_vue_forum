<h1>Alexx</h1>

<?= $model->name; ?>
    <?php if($childs = $model->getChilds()): ?>

        <?php foreach ($childs as $child): ?>

            <?= $this->render('sub', ['model' => $child]) ;?>

        <?php endforeach;?>

    <?php endif; ?>