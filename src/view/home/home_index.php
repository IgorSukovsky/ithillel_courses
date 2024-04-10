<h1>Добро пожаловать на мою страницу</h1>

<table>
    <tr>
        <th>id</th>
        <th>post name</th>
    </tr>
    <?php foreach ($posts as $post) : ?>
        <tr>
            <td> <?= $post['id'] ?> </td>
            <td> <?= $post['name'] ?> </td>
        </tr>
    <?php endforeach ?>
</table>

<img src="https://img.freepik.com/free-photo/modern-art-studio-composition_23-2147868330.jpg?w=900&t=st=1712562162~exp=1712562762~hmac=f032da51c69c8efa2638c135ba7b50139ac9f95f6f52f7e89115febf346dc7e3"
     style="max-width: 300px; max-height: 300px;">

<p>Нажмите кнопку, чтобы перейти в галерею:</p>
<a href="/gallery">
    <button>Перейти в галерею</button>
</a>

