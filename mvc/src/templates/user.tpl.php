<main>
    <h2>User-Template</h2>
    <ul>
        <li><a href="index.php?controller=index&action=index">Index</a></li>
        <li><a href="index.php?controller=user&action=index">User</a></li>
    </ul>
    <hr>
    <section>
        <p>Firstname: <?= $user->firstname; ?></p>
        <p>Firstname: <?= $user->lastname; ?></p>
        <p>Firstname: <?= $user->city; ?></p>
    </section>
</main>
