<main>
    <h2>Index-Template</h2>
    <ul>
        <li><a href="index.php?controller=index&action=index">Index</a></li>
        <li><a href="index.php?controller=user&action=index">User</a></li>
    </ul>
    <hr>
    <section>
        <p>Message: <?= $model->text; ?></p>
    </section>
</main>
