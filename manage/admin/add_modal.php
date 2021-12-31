<!-- Thêm sản phẩm -->
<div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Thêm sản phẩm mới</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form role="form" method="POST" action="addproduct.php" enctype="multipart/form-data">
                        <div class="container-fluid">
                            <div style="height:15px;"></div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Tên sản phẩm:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="name" required>
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Thể loại:</span>
                                <select style="width:400px;" class="form-control" name="category">
                                    <?php
                                    $cat = mysqli_query($conn, "select * from category");
                                    while ($catrow = mysqli_fetch_array($cat)) {
                                    ?>
                                        <option value="<?php echo $catrow['categoryid']; ?>"><?php echo $catrow['category_name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Nhà xuất bản:</span>
                                <select style="width:400px;" class="form-control" name="supplier">
                                    <?php
                                    $sup = mysqli_query($conn, "select * from supplier");
                                    while ($suprow = mysqli_fetch_array($sup)) {
                                    ?>
                                        <option value="<?php echo $suprow['userid']; ?>"><?php echo $suprow['company_name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Giá bán:</span>
                                <input type="text" style="width:400px;" class="form-control" name="price" required>
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Số lượng:</span>
                                <input type="text" style="width:400px;" class="form-control" name="qty">
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Hình ảnh:</span>
                                <input type="file" style="width:400px;" class="form-control" name="image">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Đóng</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Add Customer -->
<div class="modal fade" id="addcustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Thêm khách hàng mới</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form role="form" method="POST" action="addcustomer.php" enctype="multipart/form-data">
                        <div class="container-fluid">
                            <div style="height:15px;"></div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Tên:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="name" required>
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Địa chỉ:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="address">
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Liên hệ:</span>
                                <input type="text" style="width:400px;" class="form-control" name="contact">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Đóng</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Add Supplier -->
<div class="modal fade" id="addsupplier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Thêm nhà cung cấp mới</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form role="form" method="POST" action="addsupplier.php" enctype="multipart/form-data">
                        <div class="container-fluid">
                            <div style="height:15px;"></div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Tên:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="name" required>
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Địa chỉ:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="address">
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Liên hệ:</span>
                                <input type="text" style="width:400px;" class="form-control" name="contact">
                            
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Đóng</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
<div class="modal fade" id="addPayment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Thêm khoản chi tiêu mới</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form role="form" method="POST" action="add_payment.php" enctype="multipart/form-data">
                        <div class="container-fluid">
                            <div style="height:15px;"></div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Chủ đề</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="title" required>
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Loại chi têu</span>
                                <!-- <span style="width:120px;" class="input-group-addon">Loại chi tiêu</span>
                            <input type="b" style="width:400px; text-transform:capitalize;" class="form-control" name="address"> -->
                                <div class="dropdown">


                                    <select class="custom-select" id="customFileLang" name='type'>

                                        <option value="1">Khoản thu</option>
                                        <option value="0">Khoản chi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Ngày</span>
                                <input type="date" style="width:400px;" class="form-control" name="date">
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Số tiền</span>
                                <input type="number" style="width:400px;" class="form-control" name="prices">
                            </div>

                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Đóng</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu</button>
                </form>
            </div>
        </div>
    </div>
</div>