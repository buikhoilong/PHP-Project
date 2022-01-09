<style>
    .addForm {
        text-align: center;
        display: flex;
        justify-content: space-around;
        font-family: "Roboto", sans-serif;
        margin: 3% 35%;
        padding: 50px;
        background-color: #ffffff;
        border-radius: 20px;
    }

    .form-group {
        text-align: left;
    }

    .form-group label {
        font-weight: bold;

    }

    .button {
        padding: 5px 20px;
        border-radius: 7px;
    }

    .button:hover {
        color: #0652dd;
        border-color: #0652dd;
    }
</style>
<div class="addForm">
    <form action="<?php echo $level . comp_path . 'categories/addCategories_process.php' ?> " method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="txtmasanpham">Mã Loại sản phẩm</label> <br>
            <input type="text" name="txtmaloaisanpham">
        </div>
        <div class="form-group">
            <label for="txttensanpham">Tên Loại sản phẩm</label> <br>
            <input type="text" name="txttenloaisanpham">
        </div>
        

        <button class="button" type="submit"> Thêm </button>
        
    </form>
</div>