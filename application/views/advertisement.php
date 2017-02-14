<table border="1">
    <?php foreach ($data as $advert): ?>
    <tr>
        <td><?= $advert->title ?></td>
        <td><?= $advert->name ?></td>
    </tr>
    <?php endforeach; ?>
</table>