<?php require('partials/header.php'); ?>

    <h1>Users Page</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col"># of Ads owned</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?=$user->id?></td>
                    <td><?=$user->name?></td>
                    <td><?=$user->number_of_ads?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

<?php require('partials/footer.php'); ?>