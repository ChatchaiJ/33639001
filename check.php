<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project 33639001</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/css/uikit.css">
    <style>
        a, h1, h2, .h2{
            font-family: 'Kanit', sans-serif !important;
            line-height: 1.6em;
        }
        a{
            font-size: 1.4em;
        }
        label{
            font-size: 1.6em;
            display: block;
        }
    </style>

</head>
<body>
    <div class="uk-container uk-padding">

        <form id="recipient" method="post" style="display:none;" action="recipient.php">
            <input type=hidden name="sender_name" value="<?php echo $_POST['sender_name']; ?>">
            <input type=hidden name="sender_phone" value="<?php echo $_POST['sender_phone']; ?>">
            <input type=hidden name="sender_address" value="<?php echo $_POST['sender_address']; ?>">
            <input type=hidden name="sender_district" value="<?php echo $_POST['sender_district']; ?>">
            <input type=hidden name="sender_amphoe" value="<?php echo $_POST['sender_amphoe']; ?>">
            <input type=hidden name="sender_province" value="<?php echo $_POST['sender_province']; ?>">
            <input type=hidden name="sender_zipcode" value="<?php echo $_POST['sender_zipcode']; ?>">
            <input type=hidden name="sender_save_addr" value="<?php echo $_POST['sender_save_addr']; ?>">

            <input type=hidden name="recipient_name" value="<?php echo $_POST['recipient_name']; ?>">
            <input type=hidden name="recipient_phone" value="<?php echo $_POST['recipient_phone']; ?>">
            <input type=hidden name="recipient_address" value="<?php echo $_POST['recipient_address']; ?>">
            <input type=hidden name="recipient_district" value="<?php echo $_POST['recipient_district']; ?>">
            <input type=hidden name="recipient_amphoe" value="<?php echo $_POST['recipient_amphoe']; ?>">
            <input type=hidden name="recipient_province" value="<?php echo $_POST['recipient_province']; ?>">
            <input type=hidden name="recipient_zipcode" value="<?php echo $_POST['recipient_zipcode']; ?>">
            <input type=hidden name="recipient_save_addr" value="<?php echo $_POST['recipient_save_addr']; ?>">
            <input type=hidden name="recipient_cash_on_delivery" value="<?php echo $_POST['recipient_cash_on_delivery']; ?>">
            <input type=hidden name="recipient_cash" value="<?php echo $_POST['recipient_cash']; ?>">
        </form>

        <form id="save" method="post" style="display:none;" action="save.php">
            <input type=hidden name="sender_name" value="<?php echo $_POST['sender_name']; ?>">
            <input type=hidden name="sender_phone" value="<?php echo $_POST['sender_phone']; ?>">
            <input type=hidden name="sender_address" value="<?php echo $_POST['sender_address']; ?>">
            <input type=hidden name="sender_district" value="<?php echo $_POST['sender_district']; ?>">
            <input type=hidden name="sender_amphoe" value="<?php echo $_POST['sender_amphoe']; ?>">
            <input type=hidden name="sender_province" value="<?php echo $_POST['sender_province']; ?>">
            <input type=hidden name="sender_zipcode" value="<?php echo $_POST['sender_zipcode']; ?>">
            <input type=hidden name="sender_save_addr" value="<?php echo $_POST['sender_save_addr']; ?>">

            <input type=hidden name="recipient_name" value="<?php echo $_POST['recipient_name']; ?>">
            <input type=hidden name="recipient_phone" value="<?php echo $_POST['recipient_phone']; ?>">
            <input type=hidden name="recipient_address" value="<?php echo $_POST['recipient_address']; ?>">
            <input type=hidden name="recipient_district" value="<?php echo $_POST['recipient_district']; ?>">
            <input type=hidden name="recipient_amphoe" value="<?php echo $_POST['recipient_amphoe']; ?>">
            <input type=hidden name="recipient_province" value="<?php echo $_POST['recipient_province']; ?>">
            <input type=hidden name="recipient_zipcode" value="<?php echo $_POST['recipient_zipcode']; ?>">
            <input type=hidden name="recipient_save_addr" value="<?php echo $_POST['recipient_save_addr']; ?>">
            <input type=hidden name="recipient_cash_on_delivery" value="<?php echo $_POST['recipient_cash_on_delivery']; ?>">
            <input type=hidden name="recipient_cash" value="<?php echo $_POST['recipient_cash']; ?>">
        </form>

        <div uk-grid>
            <div class="uk-width-1-1">
            <h1>ผู้ส่ง</h1>
            </div>
            <div class="uk-width-1-2@m">
                <label class="h2">ชื่อผู้ส่ง</label><?php echo $_POST['sender_name']; ?>
            </div>
            <div class="uk-width-1-2@m">
                <label class="h2">เบอร์โทร</label><?php echo $_POST['sender_phone']; ?>
            </div>
            <div class="uk-width-1-2@m">
                <label class="h2">ที่อยู่</label><?php echo $_POST['sender_address']; ?>
            </div>
            <div class="uk-width-1-2@m">
                <label class="h2">ตำบล / แขวง</label><?php echo $_POST['sender_district']; ?>
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">อำเภอ / เขต</label><?php echo $_POST['sender_amphoe']; ?>
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">จังหวัด</label><?php echo $_POST['sender_province']; ?>
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">รหัสไปรษณีย์</label><?php echo $_POST['sender_zipcode']; ?>
            </div>

            <div class="uk-width-1-1">
                <label class="h2">บันทึกที่อยู่ผู้ส่ง</label><?php echo $_POST['sender_save_addr']?"YES":"NO"; ?>
            </div>

            <div class="uk-width-1-1">
            <h1>ผู้รับ (ที่อยู่ในการจัดส่ง)</h1>
            </div>
            <div class="uk-width-1-2@m">
                <label class="h2">ชื่อผู้รับ</label><?php echo $_POST['recipient_name']; ?>
            </div>
            <div class="uk-width-1-2@m">
                <label class="h2">เบอร์โทร</label><?php echo $_POST['recipient_phone']; ?>
            </div>
            <div class="uk-width-1-2@m">
                <label class="h2">ที่อยู่</label><?php echo $_POST['recipient_address']; ?>
            </div>
            <div class="uk-width-1-2@m">
                <label class="h2">ตำบล / แขวง</label><?php echo $_POST['recipient_district']; ?>
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">อำเภอ / เขต</label><?php echo $_POST['recipient_amphoe']; ?>
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">จังหวัด</label><?php echo $_POST['recipient_province']; ?>
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">รหัสไปรษณีย์</label><?php echo $_POST['recipient_zipcode']; ?>
            </div>

            <div class="uk-width-1-1">
                <label class="h2">บันทึกที่อยู่ผู้รับ</label><?php echo $_POST['recipient_save_addr']?"YES":"NO"; ?>
            </div>

            <div class="uk-width-1-1">
                <label class="h2">เก็บเงินปลายทาง (ถ้ามี)</label><?php echo $_POST['recipient_cash_on_delivery']?"YES":"NO"; ?>
            </div>
            <?php
                   if ($_POST['recipient_cash_on_delivery']) { ?>
            <div class="uk-width-1-1">
                <label class="h2">จำนวนเงิน</label><?php echo $_POST['recipient_cash']; ?>
            </div>
            <?php
                   }
            ?>

            <div class="uk-width-1-2@m">
                <button class="uk-button uk-button-secondary uk-width-1-1 uk-margin-small-bottom" form="recipient">Prev</a></button>
            </div>

            <div class="uk-width-1-2@m">
                <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" form="save">Save</button>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>

</body>
</html>
