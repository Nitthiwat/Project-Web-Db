<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>About Us</title>
  <style>
    .carousel-item img {
      height: 70vh;
      object-fit: cover;
    }

    #about {
      text-align: center;
    }

    .card {
      background-color: #612897;
    }

    .card-body {
      color: white;
    }

    .card-text {
      text-indent: 2rem;
      opacity: 0.7;
    }
  </style>
</head>

<body>
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/About1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/About2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/About3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div><br>

  <figure class="text-center">
    <blockquote class="blockquote">
      <p style="font-size: 40px;">เกี่ยวกับเรา</p>
    </blockquote>
  </figure>
  <div class="container overflow-hidden">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-4 mx-5">
        <img src="img/About4.jpg" alt="" class="mw-100 rounded-circle" style="height: 50vh;">
      </div>
      <div class="col-md-6 p-5">
        <div class="row d-block">
          <div class="col">
            <h5>ร้านขายอาหารสัตว์ Pet Care</h5>
          </div>
          <div class="col">
            <p>ฟาหสกืฟาสห่กฟาส่กาฟห่กาสฟ่หสาก่ฟาสหก่แฟห่ทกฟหสแ่กสาห่แกสห่แก</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div style="background-color: rgb(88, 54, 117);">
    <figure class="text-center">
      <blockquote class="blockquote">
        <p style="font-size: 40px;color: white;">เกร็ดความรู้</p>
      </blockquote>
    </figure>
    <div class="container">
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="img/AboutDog.jpg" class="card-img-top " alt="...">
            <div class="card-body">
              <h5 class="card-title">สุนัขรู้ทิศอยู่ตลอดเวลา</h5>
              <p class="card-text">สุนัขมีดวงตาที่สามารถมองเห็นแสงUVได้ ทั้งยังสามารถรับรู้ถึงสนามแม่เหล็กของโลกได้ด้วย
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/AboutCat.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">แมวเป็นนายที่แท้จริงของบ้าน</h5>
              <p class="card-text">แมวจะสามารถควบคุมเราได้เวลาที่ต้องการจะกินอาหาร มันมักจะใช้โทนเสียงที่ฟังคล้ายๆ
                กับเสียงร้องไห้ออกมา เพื่อเป็นการกระตุ้นคุณให้เอาอาหารให้มันเร็วขึ้น</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/AboutHam.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">หนูแฮมสเตอร์สายตาไม่ดี</h5>
              <p class="card-text">หนูแฮมสเตอร์สามารถมองเห็นได้ไกลๆแต่ไม่ชัด และมองไม่เห็นสิ่งที่อยู่ใกล้
                จึงอาศัยการฟังและการดมกลิ่นเป็นตัวช่วย</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/AboutBird.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">เลิฟเบิร์ดชอบคน</h5>
              <p class="card-text">เลิฟเบิร์ด มีนิสัยชอบอยู่ใกล้คน เป็นสายพันธุ์ที่ฉลาด
                และปรับตัวให้ใช้ชีวิตอยู่ในกรงได้ง่าย ลูกป้อนเป็นนกที่ฝึกให้เชื่องได้ง่าย</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('footer.php') ?>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>