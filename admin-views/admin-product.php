<?php require 'index.php';
require '../controllers/get_all_products.php';
?>
/**
* Created by PhpStorm.
* User: MyPC
* Date: 16/04/2018
* Time: 18:27
*/


<div class="container" style="margin-top: 50px;">
    <div class="col-md-12 text-left">
        <h1 style="font-size: 30px;color:orange;">Sản Phẩm</h1>
    </div>
    <div class="col-md-12">
        <table class="table table-hover table-bordered text-center">
            <thead>
            <tr>
                <th class="text-center">
                    ID
                </th>
                <th class="text-center">
                    Tên sản phẩm
                </th>
                <th class="text-center">
                    Giá bán
                </th>
                <th class="text-center">
                    Giá nhập
                </th>
                <th class="text-center">
                    Số lượng còn lại
                </th>
                <th class="text-center">
                    Ngày nhập cuối
                </th>
                <th class="text-center">
                    Thương hiệu
                </th>

            </tr>
            </thead>
            <tbody id = "tableBody">

            </tbody>

        </table>



    </div>

</div>
<script src="../public/js/show_table_product.js"></script>