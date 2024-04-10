<h1>Gallery Page</h1>
<form id="imageForm" enctype="multipart/form-data">
    <input type="file" accept="image/*" id="imageInput" name="imageInput">
    <button type="submit">Добавить изображение</button>
</form>
<div id="imageGallery">
</div>

<table>
    <tr>
        <th>id</th>
        <th>post name</th>
    </tr>
    <?php foreach ($galleries as $gallery) : ?>
        <tr>
            <td> <?= $gallery['id'] ?> </td>
            <td> <?= $gallery['name'] ?> </td>
        </tr>
    <?php endforeach ?>
</table>
<button>
    <a href="gallery/create">create</a>
</button>

<button>
    <a href="gallery/delete">delete</a>
</button>

<button>
    <a href="gallery/update">update</a>
</button>
<button>
    <a href="/about">about</a>
</button>


<button>
    <a href="/home">назад</a>
</button>
