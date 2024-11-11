<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            display: flex;
            flex-wrap: wrap; /* สามารถจัดเรียงการ์ดในบรรทัดถัดไปได้ถ้ามีมากเกินไป */
            justify-content: flex-start; /* จัดเรียงการ์ดไปทางซ้าย */
        }
        .card {
            display: flex;
            flex-direction: column; /* ให้เนื้อหาภายในการ์ดเรียงเป็นคอลัมน์ */
            width: 18rem;
            margin: 30px;
            flex: 0 0 auto; /* ทำให้การ์ดไม่ขยายเต็มที่ */
            border: 1px solid #ddd; /* เพิ่มเส้นขอบ */
            border-radius: 5px; /* มุมโค้ง */
            overflow: hidden; /* ซ่อนเนื้อหาที่เกิน */
        }
        .card-body {
            display: flex;
            flex-direction: column; /* ให้เนื้อหาภายในเรียงเป็นคอลัมน์ */
            flex-grow: 1; /* ให้เนื้อหาขยายเต็มที่ */
            justify-content: space-between; /* ให้เนื้อหาจัดเรียงห่างกัน */
        }
        .card img {
            width: 100%; /* ทำให้ภาพเต็มกว้าง */
            height: auto; /* ให้ความสูงอัตโนมัติ */
        }
        .btn {
            margin-top: auto; /* ให้ปุ่มอยู่ที่ด้านล่าง */
        }
    </style>

</head>
<body>

<div class="container">
<?php foreach ($query as $index => $row): ?>
<div class="card">
  <img src="<?php echo $row->img; ?>" alt="Image">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row->title; ?></h5>
    <p class="card-text"><?php echo $row->description; ?></p>
    <a href="<?php echo base_url();?>main/dt_activity/<?php echo $index + 1; ?>" class="btn btn-primary">สมัคร</a>
  </div>
</div>
<?php endforeach; ?>
</div>

</body>
</html>
