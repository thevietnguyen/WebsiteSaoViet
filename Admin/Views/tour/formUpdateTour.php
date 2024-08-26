<div class="user">
    <div class=" form__update-tour">
        <div class="form__update-content">
            <h2>Sửa thông tin Tour</h2><br>
            <?php foreach($tour as $data):?>
                <form action="index.php?controller=tour&action=update&id=<?php echo $data['MaTour']?>" method="post" enctype="multipart/form-data">
                    <label for="id">Mã Tour:</label>
                    <input id="id" name="MaTour" type="text" style="height: 30px; margin-left: 88px" disabled value="<?php echo $data['MaTour']?>"><br><br>
                    <label for="name">Tên Tour:</label>
                    <input id="name" name="TenTour" type="text" style="width: 400px; height: 30px; margin-left: 85px" value="<?php echo $data['TenTour']?>"><br><br>
                    <label for="gioithieu">Giới thiệu:</label>
                    <textarea name="GioiThieu" id="gioithieu" cols="45" rows="10">
                        <?php echo $data['GioiThieu']?>
                    </textarea><br><br>
                    <label for="tour" id="anh">Chủ đề:</label>
                    <select id="tour" name="MaCD" style="height: 30px; width: 200px; margin-left: 88px">
                        <option value="<?php echo $data['MaCD']?>" selected>
                            <?php 
                                foreach($dataCD as $value) {
                                    if($value['id'] == $data['MaCD']) {
                                        echo $value['name'];
                                    }
                                }
                            ?>
                        </option>
                        <option value="1" >Tour Biển Đảo</option>
                        <option value="2" >Tour Văn Hóa Lịch Sử</option>
                        <option value="3" >Tour Nghỉ Dưỡng</option>
                        <option value="4" >Tour Mạo Hiểm</option>
                        <option value="5" >Tour Ẩm Thực</option>
                    </select> <br><br>
                    <p id="anh">Ảnh Tour:</p>
                    <img class="avata-img" src="../Admin/public/img/tour/<?php echo $data['AnhTour']?>" alt="ảnh tour" style="max-width: 400px; margin-left: 150px"><br>
                    <input class="avatar-input-update" type="file" name="input-file" style="margin-left: 150px"><br>
                    <label for="mota">Mô tả:</label>
                    <textarea name="MoTa" id="mota" cols="45" rows="10">
                        <?php echo $data['MoTa']?>
                    </textarea> <br>
                    <label for="gia">Giá:</label>
                    <input type="text" name="Gia" style="width: 200px; height: 30px; margin-left: 85px" value="<?php echo $data['Gia']?>"><br><br>
                    <button type="submit" name="update" class="update">Cập nhật</button>
                    <button name="insert" class="insert">
                        <a href="index.php?controller=tour&action=index">Quay về</a>
                    </button>
                </form>
            <?php endforeach;?>
        </div>
        <br><br>
    </div>
</div>