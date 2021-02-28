<?php require('partials/header.php'); ?>

    <h1>Ads Page</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Owner</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($ads as $ad) : ?>
            <tr>
                <td><?=$ad->id?></td>
                <td><?=$ad->title?></td>
                <td><?=$ad->owner?></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

<?php require('partials/footer.php'); ?>