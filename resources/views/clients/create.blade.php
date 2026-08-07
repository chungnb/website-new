<h1>Thêm sản phẩm</h1>

<form method="POST" action="/products">
    @csrf

    <input type="text" name="name" placeholder="Tên sản phẩm"><br><br>

    <input type="number" name="price" placeholder="Giá"><br><br>

    <textarea name="description" placeholder="Mô tả"></textarea><br><br>

    <button type="submit">Lưu</button>
</form>