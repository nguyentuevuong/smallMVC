<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Welcome to PIP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="<?= BASE_URL; ?>static/css/normalize.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?= BASE_URL; ?>static/css/foundation.css" type="text/css" media="screen" />
</head>
<body id="layout">
<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1> <a href="/" title="Trung tâm DI & ADR Quốc gia">DI & ADR</a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#"><span>Danh mục</span></a></li>
  </ul>
  <section class="top-bar-section">
    <ul class="left">
      <li class="divider"></li>
      <li class="has-dropdown"> <a class="active" href="#">Quản lý báo cáo</a>
        <ul class="dropdown">
          <li>
            <label>Thông tin sơ bộ</label>
          </li>
          <li><a href="#" class="">Thêm mới</a></li>
          <li><a href="#">Xử lý sơ bộ</a></li>
          <li class="divider"></li>
          <li>
            <label>Thông tin thẩm định</label>
          </li>
          <li><a href="#">Thẩm định báo cáo</a></li>
          <li><a href="#">Báo cáo đã thẩm định</a></li>
          <li><a href="#">Gửi báo cáo cho WHO</a></li>
        </ul>
      </li>
      <li class="divider"></li>
      <li class="has-dropdown"> <a href="#">Tra cứu</a>
        <ul class="dropdown">
          <li><a href="#">Báo cáo</a></li>
          <li class="divider"></li>
          <li>
            <label>Tìm kiếm, tra cứu</label>
          </li>
          <li><a href="#">Tìm kiếm báo cáo</a></li>
          <li><a href="#">Tra cứu hoạt chất - biểu hiện</a></li>
        </ul>
      </li>
      <li class="divider"></li>
      <li class="has-dropdown"> <a href="#">Các mục từ điển</a>
        <ul class="dropdown">
          <li>
            <label>Thông tin thuốc</label>
          </li>
          <li class="has-dropdown"> <a href="#" class="">Từ điển thuốc</a>
            <ul class="dropdown">
              <li><a href="#">Muối</a></li>
              <li><a href="#">Biệt dược</a></li>
              <li><a href="#">Hoạt chất</a></li>
              <li>
                <label>Từ điển khác</label>
              </li>
              <li><a href="#">Hàm lượng</a></li>
              <li><a href="#">Đường dùng</a></li>
              <li><a href="#">Dạng bào chế</a></li>
            </ul>
          </li>
          <li><a href="#">Công ty đăng ký</a></li>
          <li><a href="#">Công ty sản xuất</a></li>
          <li class="divider"></li>
          <li>
            <label>Từ điển bệnh</label>
          </li>
          <li><a href="#">ICD</a></li>
          <li><a href="#">ATC</a></li>
          <li><a href="#">Y Văn</a></li>
          <li><a href="#">WHO-Art</a></li>
          <li class="divider"></li>
          <li>
            <label>Thông tin báo cáo</label>
          </li>
          <li><a href="#">D.sách bệnh nhân</a></li>
          <li><a href="#">Đơn vị gửi báo cáo</a></li>
          <li><a href="#">Đơn vị tiếp nhận báo cáo</a></li>
        </ul>
      </li>
      <li class="divider"></li>
      <li class="has-dropdown"><a href="#">Từ điển khác</a>
        <ul class="dropdown">
          <li>
            <label>Biểu hiện ADR</label>
          </li>
          <li><a href="#">Kết quả sau xử trí</a></li>
          <li><a href="#">Mức độ nghiêm trọng</a></li>
          <li class="divider"></li>
          <li>
            <label>Thang WHO</label>
          </li>
          <li><a href="#">Bộ câu hỏi</a></li>
          <li><a href="#">Quy kết phản ứng</a></li>
          <li class="divider"></li>
          <li>
            <label>Thang Naranijo</label>
          </li>
          <li><a href="#">Bộ câu hỏi</a></li>
          <li><a href="#">Quy kết phản ứng</a></li>
        </ul>
      </li>
      <li class="divider"></li>
      <li class="has-dropdown"> <a href="#">Hệ thống</a>
        <ul class="dropdown">
          <li>
            <label>Cá nhân</label>
          </li>
          <li><a href="#">Đổi mật khẩu</a></li>
          <li class="divider"></li>
          <li>
            <label>Hệ thống</label>
          </li>
          <li><a href="#">Quản lý người dùng</a></li>
          <li><a href="#">Sao lưu Cơ sở dữ liệu</a></li>
        </ul>
      </li>
    </ul>
  </section>
</nav>
<div class="row">
  <div class="large-3 columns">
    <div class="panel">
      <h5>Panel Title</h5>
      <p>This is a three columns grid panel with an arbitrary height.</p>
    </div>
  </div>
  <div class="large-6 columns">
    <div class="panel">
      <h5>Panel Title</h5>
      <p>This is a six columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin.</p>
    </div>
  </div>
  <div class="large-3  columns">
    <div class="panel">
      <h5>Panel Title</h5>
      <p>This is a three columns grid panel with an arbitrary height.</p>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-6 columns">
    <div class="panel">
      <h5>Panel Title</h5>
      <p>This is a six columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin.</p>
    </div>
  </div>
  <div class="large-2 columns">
    <div class="panel">
      <p> <img src="http://placehold.it/200x200"/> </p>
    </div>
  </div>
  <div class="large-4 columns">
    <div class="panel">
      <h5>Panel Title</h5>
      <p>This is a four columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami.</p>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-4 columns">
    <div class="panel">
      <p> <img src="http://placehold.it/400x300"/> </p>
    </div>
  </div>
  <div class="large-4 columns">
    <div class="panel">
      <p> <img src="http://placehold.it/400x300"/> </p>
    </div>
  </div>
  <div class="large-4 columns">
    <div class="panel">
      <p> <img src="http://placehold.it/400x300"/> </p>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-6 columns">
    <div class="panel">
      <h5>Panel Title</h5>
      <p>This is a six columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin.</p>
    </div>
  </div>
  <div class="large-3 columns">
    <div class="panel">
      <h5>Panel Title</h5>
      <p>This is a three columns grid panel with an arbitrary height.</p>
    </div>
  </div>
  <div class="large-3 columns">
    <div class="panel">
      <h5>Panel Title</h5>
      <p>This is a three columns grid panel with an arbitrary height.</p>
    </div>
  </div>
</div>