<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>dog</title>
    <style>
        body {
            background-color: lightgrey;
            color: rgb(255, 255, 255);
        }

        .left-head a {
            padding-left: 20px;
            text-decoration: none;
            float: left;
            color: aliceblue;
        }

        .left-head a:hover {
            color: yellow;
        }

        .right-head a:hover {
            color: yellow;
        }

        .right-head {
            float: right;
            margin-left: 77%;

        }

        .right-head a {
            text-decoration: none;
            padding-right: 15px;
            color: aliceblue;

        }

        .logo {
            background-color: rgb(255, 255, 255);
            display: flex;
            width: 100%;
            padding-top: 10px;
        }

        .left-logo {
            float: left;
        }

        .right-logo {
            float: right;
            margin-left: 90%;
        }

        .con-main {
            border: 1px solid rgb(101, 46, 189);
            background-color: rgb(101, 46, 189);
            margin: 20px;
            padding: 30px;
            width: 70%;
            margin-left: 15%;
            margin-right: 15%;
            margin-top: 3%;
        }

        .info-p {
            font-size: 95%;
        }

        .info {
            font-size: 80%;
        }

        .info-locate p {
            line-height: 0.8em;


        }

        .pic-big img {
            width: 80%;
            margin-left: 5%;
        }

        .pic-small img {
            width: 100%;
            margin-top: 15%;
            border-radius: 5%;
        }

        .d-grid {
            text-align: center;
        }

        .buy {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="con-main">
        <div class="container bd-purple-600">
            <div class="row">
                <div class="col">
                    <div class="picture">
                        <div class="pic-big">
                            <img src="https://www.manoonpetshop.co.th/images/product/270242089_1891419931044659_1563057275623694612_n_05012022_042105.jpg.ashx?width=300&height=300" alt="">
                        </div>
                        <div class="container">

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="infor">
                        <div class="info-p">
                            <p>Lifemate อาหารสำหรับแมวเลี้ยงในบ้าน อายุตั้งแต่ 1 ปีขึ้นไป Mackerel รสปลาทู</p>
                        </div>
                        <div class="info">
                            <p>รายละเอียดสินค้า : เสริมสร้างระบบเผาผลาญไขมัน
                                เสริมด้วย L-CARNITINE ช่วยเผาผลาญพลังงานส่วนเกินออกจากร่างกาย สำหรับแมวที่มีกิจกรรมน้อย

                                เสริมสร้างกระดูกและฟัน
                                ด้วย แคลเซียม ฟอสฟอรัส และวิตามินดี บำรุงกระดูกและฟันให้แข็งแรง

                                บำรุงขนและผิวหนัง
                                น้ำมันสกัดจากดอกอีฟนิ่งพรีมโรส ช่วยบำรุงเส้นให้เงางาม นุ่มฟู และช่วยกักเก็บความชื้นในชั้นผิวหนัง ทำให้ผิวหนังชุ่มชื้น

                                บำรุงสายตา การมองเห็น และภูมิคุ้มกัน
                                ด้วยสารสกัดจาก Mix Berries ผลไม้ตระกูลเบอร์รี่ เต็มเปี่ยมไปด้วยวิตามินที่ช่วยบำรุงสายตาและการมองเห็น รวมถึงมีสารต้านอนุมูลอิสระ ที่ช่วยชะลอความเสื่อมของร่างกายได้ดี

                            </p>
                        </div>
                        <div class="buy">
                            <fieldset>
                                จำนวน <input type="number" name="buy1" min="0" max="100"> มีสินค้าทั้งหมด 330 ชิ้น </br>
                            </fieldset>

                        </div>
                        <div class="d-grid gap-2 d-md-block">
                            <br>
                            <button class="btn btn-secondary" type="button">เพิ่มตะกร้าสินค้า</button>
                            <button class="btn btn-light" type="button">ซื้อสินค้า</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>

</html>