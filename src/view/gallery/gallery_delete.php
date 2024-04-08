<h1>Удалить изображения</h1>
<form id="imageForm" enctype="multipart/form-data">
    <input type="file" accept="image/*" id="imageInput" name="imageInput">
    <button type="submit">Удалить изображения</button>
</form>
<div id="imageGallery">
</div>
<button onclick="deleteImages()">Удалить изображения</button>
<button onclick="goBack()">Назад</button>

<script>
    function goBack() {
        window.history.back();
    }
</script>