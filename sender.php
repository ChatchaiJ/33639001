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

        <h1>ผู้ส่ง</h1>

        <form id="address" class="demo" style="display:none;" autocomplete="off" method="post" action="recipient.php" uk-grid>
            <input type=hidden name="recipient_name" value="<?php echo $_POST['recipient_name']; ?>">
            <input type=hidden name="recipient_phone" value="<?php echo $_POST['recipient_phone']; ?>">
            <input type=hidden name="recipient_address" value="<?php echo $_POST['recipient_address']; ?>">
            <input type=hidden name="recipient_district" value="<?php echo $_POST['recipient_district']; ?>">
            <input type=hidden name="recipient_amphoe" value="<?php echo $_POST['recipient_amphoe']; ?>">
            <input type=hidden name="recipient_province" value="<?php echo $_POST['recipient_province']; ?>">
            <input type=hidden name="recipient_zipcode" value="<?php echo $_POST['recipient_zipcode']; ?>">


            <div class="uk-width-1-2@m">
                <label class="h2">ชื่อผู้ส่ง</label>
                <input name="sender_name" class="uk-input uk-width-1-1" type="text" required
                       value="<?php echo $_POST['sender_name']; ?>">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">เบอร์โทร</label>
                <input name="sender_phone" class="uk-input uk-width-1-1" type="text" required
                       value="<?php echo $_POST['sender_phone']; ?>">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">ที่อยู่</label>
                <input name="sender_address" class="uk-input uk-width-1-1" type="text" required
                       value="<?php echo $_POST['sender_address']; ?>">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">ตำบล / แขวง</label>
                <input name="sender_district" class="uk-input uk-width-1-1" type="text" required
                       value="<?php echo $_POST['sender_district']; ?>">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">อำเภอ / เขต</label>
                <input name="sender_amphoe" class="uk-input uk-width-1-1" type="text" required
                       value="<?php echo $_POST['sender_amphoe']; ?>">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">จังหวัด</label>
                <input name="sender_province" class="uk-input uk-width-1-1" type="text" required
                       value="<?php echo $_POST['sender_province']; ?>">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">รหัสไปรษณีย์</label>
                <input name="sender_zipcode" class="uk-input uk-width-1-1" type="text" required
                       value="<?php echo $_POST['sender_zipcode']; ?>">
            </div>

            <div class="uk-width-1-1">
                <label><input name="sender_save_addr"class="uk-checkbox" type="checkbox" checked>บันทึกที่อยู่ผู้ส่ง</label>
            </div>

            <div class="uk-width-1-1">
                <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Next</button>
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

            $district: $('#address [name="sender_district"]'),
            $amphoe: $('#address [name="sender_amphoe"]'),
            $province: $('#address [name="sender_province"]'),
            $zipcode: $('#address [name="sender_zipcode"]'),

            onDataFill: function(data){
                console.info('Data Filled', data);
            },

            onLoad: function(){
                console.info('Autocomplete is ready!');
                $('#loader, .demo').toggle();
            }
        });

        // watch on change

        $('#address [name="sender_district"]').change(function(){
            console.log('ตำบล', this.value);
        });
        $('#address [name="sender_amphoe"]').change(function(){
            console.log('อำเภอ', this.value);
        });
        $('#address [name="sender_province"]').change(function(){
            console.log('จังหวัด', this.value);
        });
        $('#address [name="sender_zipcode"]').change(function(){
            console.log('รหัสไปรษณีย์', this.value);
        });

    </script>

</body>
</html>
