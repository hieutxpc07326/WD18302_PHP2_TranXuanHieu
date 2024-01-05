<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Your Table</title>
  <style>
    /* Thêm đường kẻ cho bảng */
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #dee2e6;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f8f9fa;
    }
  </style>
</head>
<body>
<div class="container">
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th>Mã Đơn</th>
        <th>Họ Tên</th>
        <th>Ngày Sinh</th>
        <th>Giới Tính</th>
        <th>Địa Chỉ</th>
        <th>Số CMND</th>
        <th>Số Điện Thoại</th>
        <th>Email</th>
        <th>Ngành Học</th>
        <th>Điểm Thi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tuyensinh as $ts): ?>
        <tr>
          <td><?php echo $ts['ma_don']; ?></td>
          <td><?php echo $ts['ho_ten']; ?></td>
          <td><?php echo $ts['ngay_sinh']; ?></td>
          <td><?php echo $ts['gioi_tinh']; ?></td>
          <td><?php echo $ts['dia_chi']; ?></td>
          <td><?php echo $ts['so_cmnd']; ?></td>
          <td><?php echo $ts['so_dien_thoai']; ?></td>
          <td><?php echo $ts['email']; ?></td>
          <td><?php echo $ts['nganh_hoc']; ?></td>
          <td><?php echo $ts['diem_thi']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<!-- Include Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
