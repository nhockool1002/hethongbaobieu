<div class="container-fluid">
    <div class="col-sm-12">
        <div class="row">
        <div class="h1title">Bảng nhập Điện thoại cũ</div>
        </div>
        <br>
        <div class="row">
            <form method="post" action="index.php?page=olddatadt">
            <p>Xem dữ liệu khác</p>
            <select class="chonthang" name="chonthang">
                <option value='01'>Tháng 1</option>
                <option value='02'>Tháng 2</option>
                <option value='03'>Tháng 3</option>
                <option value='04'>Tháng 4</option>
                <option value='05'>Tháng 5</option>
                <option value='06'>Tháng 6</option>
                <option value='07'>Tháng 7</option>
                <option value='08'>Tháng 8</option>
                <option value='09'>Tháng 9</option>
                <option value='10'>Tháng 10</option>
                <option value='11'>Tháng 11</option>
                <option value='12'>Tháng 12</option>
            </select>
            <select class="chonnam" name="chonnam">
                 <?php 
                $getname = date('Y');
                for($i=2016;$i<=$getname;$i++){ ?>
                <option value="<?php echo $i; ?>" <?php if($i == $getname){ echo "selected"; } ?>><?php echo $i; ?></option>
                <?php } ?>
            </select>
            <button type="submit" class="btn btn-info btn-xs" name="submit">Xem danh sách</button>
            </form>
            <hr>
        </div>
        <br>
        <div class="row">
        <?php
          if(isset($_POST['submit'])){
              $nam = $_POST['chonnam'];
              $thang = $_POST['chonthang'];
              $dt = $nam."-".$thang;
          }  
        ?>
        <table id="kooltable" class="display" cellspacing="0" width="100%" id="dttb">
             <thead>
            <tr>
                <th>Ngày tháng</th>
                  <th>Tổng số khách tư vấn</th>
                  <th>Hiệu quả</th>
                  <th>Không hiệu quả</th>
                  <th>Đặt hẹn</th>
                  <th>Awords</th>
                  <th>Facebook</th>
                  <th>SEO</th>
                  <th>Sửa</th>
            </tr>
            </thead>       
               <tbody>
               <?php
            $sql = "SELECT * FROM bangnhapdt WHERE ngaythang LIKE '%$dt%' ORDER BY id DESC";
            if ($result = $conn->query($sql)) {
                $sum = 0;$sumht =0;$sumnc=0;$sumun=0;$sumts=0;
                $sumhq = 0;$sumkhq=0;$sumdh=0;$sumdk=0;$sumgc=0;
                $sumbqc =0;$sumch=0;$sumtv=0;$sumchq=0;$sumgdh=0;
                $sumgdk =0;$adw=0;$fb=0;$seo=0;
                while ($row = $result->fetch_assoc()) {
                    $date=date_create($row['ngaythang']);
                    $jw = date_format($date,"d/m/Y");
                    $ft = date_format($date,"Y-m-d");
                    $sumts = $sumts+$row['tongsokhachtuvan'];
                    $sumhq = $sumhq+$row['hieuqua'];
                    $sumkhq = $sumkhq+$row['khonghieuqua'];
                    $sumdh = $sumdh+$row['dathen'];
                    $adw = $adw+$row['adwords'];
                    $fb = $fb+$row['facebook'];
                    $seo = $seo+$row['seo'];
                    ?>
            <tr>
                    <td><?php echo $jw; ?></td>
                  <td><?php echo number_format($row['tongsokhachtuvan']); ?></td>
                  <td><?php echo number_format($row['hieuqua']); ?></td>
                  <td><?php echo number_format($row['khonghieuqua']); ?></td>
                  <td><?php echo number_format($row['dathen']); ?></td>
                  <td><?php echo number_format($row['adwords']); ?></td>
                  <td><?php echo number_format($row['facebook']); ?></td>
                  <td><?php echo number_format($row['seo']); ?></td>
                   <td><a href="index.php?page=editformdt&idbangnhap=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o"></i></a></td>
                    </tr>
            
                           <?php } ?>
                           <tr>
                           <td><b>Tổng</td>
                <td><b><?php echo number_format($sumts); ?></b></td>
                <td><b><?php echo number_format($sumhq); ?></b></td>
                <td><b><?php echo number_format($sumkhq); ?></b></td>
                <td><b><?php echo number_format($sumdh); ?></b></td>
                <td><b><?php echo number_format($adw); ?></b></td>
                <td><b><?php echo number_format($fb); ?></b></td>
                <td><b><?php echo number_format($seo); ?></b></td>
                <td><b>-</b></td>
                </tr>
                           
            <?php }
            $result->free(); $conn->close(); ?>
            </tbody>
    </table>
        </div>

    </div>
</div>
