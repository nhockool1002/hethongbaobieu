       <div class="row">
       <div class="h1title">Nhập dữ liệu GDN</div>
        </div>
        <br>
         <?php if(isset($_SESSION['flash'])){ ?>
        <div class="row">
            <?php echo $_SESSION['flash']; ?>
        </div>
        <?php 
        unset($_SESSION['flash']);                                   
        } ?>
        <div class="row">
            <div class="formnhaplieu">
            <form method="post" action="exe/addformgdn.php">
            <div class="col-sm-4">
            <label>Ngày :</label><span class="luuy">(Ngày tháng năm vui lòng không được để trống)</span>
            <input type="date" name="ngaythang" class="form-control" value="<?php echo $date; ?>" required>
                <br>
            <label>Số nhấp chuột :</label><span class="luuy">(Thông số thể hiện tổng số nhấp chuột)</span>
            <input type="number" name="sonhapchuot" class="form-control" placeholder="Nhập số lần nhấp chuột" required>
                <br>
           
            <label>Tổng số khách tư vấn :</label><span class="luuy">(Thông số thể hiện tổng số khách tư vấn)</span>
            <input type="number" name="tongsokhachtuvan" class="form-control" placeholder="Nhập tổng số khách tư vấn" disabled>
                <br>
            <label>Không hiệu quả :</label><span class="luuy">(Thông số thể hiện số lượng không hiệu quả)</span>
            <input type="number" name="khonghieuqua" class="form-control" placeholder="Nhập số không hiệu quả" disabled>
            <br>
            <label>Đến khám :</label><span class="luuy">(Thông số thể hiện số lần đến khám <b><span style="color:red">Có thể để trống</span></b>)</span>
            <input type="number" name="denkham" class="form-control" placeholder="Nhập số lần đến khám" disabled>
            </div>
            <div class="col-sm-4">
            <label>Tổng chi phí :</label><span class="luuy">(Thông số thể hiển tổng chi phí)</span>
            <input type="text" name="tongchiphi" class="form-control" placeholder="Nhập tổng chi phí" required>
                <br>
                <label>Hiển thị :</label><span class="luuy" style="padding-right:20px;">(Thông số thể hiện hiển thị)</span>
            <input type="number" name="hienthi" class="form-control" placeholder="Nhập số hiển thị" style="" required>
                <br>
            <label>Unique Visitors :</label><span class="luuy">(Thông số thể hiện tổng số lần hiển thị LIVECHAT)</span>
            <input type="number" name="uniquevisitors" class="form-control" placeholder="Nhập số lần hiện livechat" disabled>
                <br>
            <label>Hiệu quả :</label><span class="luuy">(Thông số thể hiện số lượng hiệu quả)</span>
            <input type="number" name="hieuqua" class="form-control" placeholder="Nhập số hiệu quả" disabled>
                <br>
            <label>Đặt hẹn :</label><span class="luuy">(Thông số thể hiện số lần đặt hẹn)</span>
            <input type="number" name="dathen" class="form-control" placeholder="Nhập số lần đặt hẹn" disabled>
                <br>
            
            </div>
            <div class="col-sm-4">
            <label>Không ghi chú/chat cũ :</label><span class="luuy" style="padding-right:20px;">(Ghi chú thêm, không có vui lòng nhập 0)</span>
            <textarea name="ghichu" class="form-control" style="width:95%;height:200px;" placeholder="Nhập ghi chú" disabled></textarea>
                <br>
            <button type="submit" class="btn btn-success btn-lg" style="width:95%;" name="submit">Lưu số liệu</button>
                <br><br>
            <button type="reset" class="btn btn-danger btn-lg" style="width:95%;">Nhập lại</button>
            </div>
            <div class="col-sm-12">
                <p style="font-style:italic;color:red;font-weight:bolder">(*) Vui lòng nhập đủ các trường (Ngoại trừ  "Ghi chú"  là trường tự chọn)</p>
            </div>
            </form>
            </div>
        </div>