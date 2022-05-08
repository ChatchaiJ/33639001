<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project 33639001</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/css/uikit.css">
    <link rel="stylesheet" href="./jquery.Thailand.js/dist/jquery.Thailand.min.css">
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

        <div id="loader">
            <div uk-spinner></div> รอสักครู่ กำลังโหลดฐานข้อมูล...
        </div>

        <h1>ผู้รับ (ที่อยู่ในการจัดส่ง)</h1>
        <form id="sender" method="post" style="display:none;" action="sender.php">
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

        </form>

        <form id="address" class="demo" style="display:none;" autocomplete="off" method="post" action="check.php" uk-grid>
            <input type=hidden name="sender_name" value="<?php echo $_POST['sender_name']; ?>">
            <input type=hidden name="sender_phone" value="<?php echo $_POST['sender_phone']; ?>">
            <input type=hidden name="sender_address" value="<?php echo $_POST['sender_address']; ?>">
            <input type=hidden name="sender_district" value="<?php echo $_POST['sender_district']; ?>">
            <input type=hidden name="sender_amphoe" value="<?php echo $_POST['sender_amphoe']; ?>">
            <input type=hidden name="sender_province" value="<?php echo $_POST['sender_province']; ?>">
            <input type=hidden name="sender_zipcode" value="<?php echo $_POST['sender_zipcode']; ?>">
            <input type=hidden name="sender_save_addr" value="<?php echo $_POST['sender_save_addr']; ?>">

            <div class="uk-width-1-2@m">
                <label class="h2">ชื่อผู้รับ</label>
                <input name="recipient_name" class="uk-input uk-width-1-1" type="text" required
                       value="<?php echo $_POST['recipient_name']; ?>">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">เบอร์โทร</label>
                <input name="recipient_phone" class="uk-input uk-width-1-1" type="text" required
                       value="<?php echo $_POST['recipient_phone']; ?>">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">ที่อยู่</label>
                <input name="recipient_address" class="uk-input uk-width-1-1" type="text" required
                       value="<?php echo $_POST['recipient_address']; ?>">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">ตำบล / แขวง</label>
                <input name="recipient_district" class="uk-input uk-width-1-1" type="text" required
                       value="<?php echo $_POST['recipient_district']; ?>">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">อำเภอ / เขต</label>
                <input name="recipient_amphoe" class="uk-input uk-width-1-1" type="text" required
                       value="<?php echo $_POST['recipient_amphoe']; ?>">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">จังหวัด</label>
                <input name="recipient_province" class="uk-input uk-width-1-1" type="text" required
                       value="<?php echo $_POST['recipient_province']; ?>">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">รหัสไปรษณีย์</label>
                <input name="recipient_zipcode" class="uk-input uk-width-1-1" type="text" required
                       value="<?php echo $_POST['recipient_zipcode']; ?>">
            </div>

            <div class="uk-width-1-1">
                <label><input name="recipient_save_addr"class="uk-checkbox" type="checkbox" checked>บันทึกที่อยู่ผู้รับ</label>
            </div>

            <div class="uk-width-1-1">
                <label><input id="COD" name="recipient_cash_on_delivery"class="uk-checkbox" type="checkbox">เก็บเงินปลายทาง (ถ้ามี)</label>
            </div>

            <div id="CODval" class="uk-width-1-1" style="display:none;">
                <label class="h2">จำนวนเงิน (บาท)</label>
                <input name="recipient_cash" class="uk-input uk-width-1-2@m" type="text"
                       value="<?php echo $_POST['recipient_cash']; ?>">
            </div>

            <div class="uk-width-1-2@m">
                <button class="uk-button uk-button-secondary uk-width-1-1 uk-margin-small-bottom" form="sender">Prev</a></button>
            </div>

            <div class="uk-width-1-2@m">
                <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Next</button>
            </div>

        </div>
        </form>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" 
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>
    <!-- dependencies for zip mode -->
    <script type="text/javascript" src="./jquery.Thailand.js/dependencies/zip.js/zip.js"></script>
    <!-- / dependencies for zip mode -->
    <script type="text/javascript" src="./jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="./jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
    <script type="text/javascript" src="./jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>

    <script type="text/javascript">
        $.Thailand({
            database: './jquery.Thailand.js/database/db.json', 

            $district: $('#address [name="recipient_district"]'),
            $amphoe: $('#address [name="recipient_amphoe"]'),
            $province: $('#address [name="recipient_province"]'),
            $zipcode: $('#address [name="recipient_zipcode"]'),

            onDataFill: function(data){
                console.info('Data Filled', data);
            },

            onLoad: function(){
                console.info('Autocomplete is ready!');
                $('#loader, .demo').toggle();
            }
        });

        // watch on change

        $('#address [name="recipient_district"]').change(function(){
            console.log('ตำบล', this.value);
        });
        $('#address [name="recipient_amphoe"]').change(function(){
            console.log('อำเภอ', this.value);
        });
        $('#address [name="recipient_province"]').change(function(){
            console.log('จังหวัด', this.value);
        });
        $('#address [name="recipient_zipcode"]').change(function(){
            console.log('รหัสไปรษณีย์', this.value);
        });

       // cash on delivery
        $('#COD').change(function(){
            if ($('#COD').is(":checked")) {
                 $('#CODval').show();
            } else {
                 $('#CODval').hide();
            }
            console.log('CODval', this.value);
         });

    </script>

</body>
</html>
