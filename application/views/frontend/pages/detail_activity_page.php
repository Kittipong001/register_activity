<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Detail</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .news-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .news-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .news-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333333;
        }
        .news-meta {
            color: #888888;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        .news-content {
            font-size: 1.1rem;
            color: #555555;
            line-height: 1.7;
        }
    </style>
</head>
<body style="background-color: #f7f7f7;">

<div class="news-container">
    <!-- รูปภาพข่าว -->
    <img src="https://img.pikbest.com/wp/202408/bodybuilder-3d-line-art-drawing-of-the-sport-and-activity-bodybuilding_9826327.jpg!w700wp" alt="News Image" class="news-image">

    <!-- หัวข้อข่าว -->
    <h1 class="news-title">หัวข้อข่าวสารที่น่าสนใจ</h1>

    <!-- ข้อมูลเพิ่มเติม เช่น วันที่และผู้เขียน -->
    <p class="news-meta">โดย <strong>ชื่อผู้เขียน</strong> | วันที่: <strong>30 ตุลาคม 2024</strong></p>

    <!-- เนื้อหาข่าว -->
    <div class="news-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec libero consequat, fermentum ipsum sit amet, consectetur lectus. Integer tristique metus sed velit pharetra, ut dignissim quam luctus. Vivamus tincidunt, nulla vel malesuada efficitur, purus lacus fermentum eros, at suscipit libero dui in orci.</p>
        <p>Nam sed varius magna. Aenean efficitur libero sit amet ex gravida, et auctor ex scelerisque. Sed ut interdum purus. Donec cursus, nunc non pharetra lacinia, ligula justo iaculis erat, vitae malesuada elit sapien at ex.</p>
        <p>Curabitur id urna in purus varius cursus. Vestibulum tempus neque sit amet vestibulum euismod. Nulla facilisi. Sed at tortor sit amet dui bibendum congue ut a justo.</p>
    </div>
    <a href="<?php echo base_url();?>main/dt_activity" class="btn btn-primary">ลงทะเบียน</a>
</div>

<!-- Bootstrap 5 JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>