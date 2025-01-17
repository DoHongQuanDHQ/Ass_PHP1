<?php
if (is_array($danh_muc)) {
  extract($danh_muc);
}
?>

<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center bg-dark text-white text-uppercase">
            Cập nhật danh mục
          </div>
          <div class="card-body">
            <form action="index.php?act=cap_nhat_dm" method="POST" id="edit_loai">
              <div class="mb-3">
                <label for="" class="form-label">Mã loại</label>
                <input type="text" name="ma_loai" class="form-control" readonly value="<?= $ma_loai ?>" />
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Tên loại</label>
                <input type="text" name="ten_loai" placeholder="Nhập tên loại" class="form-control" required value="<?= $ten_loai ?>" />
              </div>
              <div class="mb-3 text-center">
                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-primary mr-3" />
                <a href="index.php?act=danh_sach_dm"><input type="button" class="btn btn-success" value="Danh sách" /></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>