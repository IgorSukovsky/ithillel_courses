<table>
    <h1>About</h1>
    <tr>
        <th>id</th>
        <th>post name</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td> <?= $user['id'] ?> </td>
            <td> <?= $user['name'] ?> </td>
        </tr>
    <?php endforeach ?>
<button>
    <a href="/home">назад</a>
</button>