<?php include'header.php'; ?>
<?php 
if (isset($_GET['feedback'])) {
    $fullname = $_GET['fullname'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $object = $_GET['object'];
    $message = $_GET['message'];
     
     $sql=mysqli_query($conn,"INSERT INTO feedback(fullname,email,phone,object,resquest)VALUES('$fullname','$email','$phone','$object','$message')");


}


 ?>
 <section class="tz-contact theme-gray">
                <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <form class="tz-form-content" method="GET" action="" id="feedback">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs 12">
                               <label>
                                Họ Tên
                               </label>
                               <input type="text" name="fullname" value="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs 12">
                                <label>
                                    Email
                                </label>
                                <input type="text" name="email" value="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs 12">
                               <label>
                                Số Điện Thoại
                               </label>
                               <input type="text" name="phone" value="" >
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs 12">
                                <label>
                                    Đối Tượng
                                </label>
                                <input type="text" name="object" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs 12">
                                <label>
                                    Nội Dung
                                </label>
                                <textarea rows="5" name="message"></textarea>
                            </div>
                        </div>
                        <button class="tzsubmit-form" name="feedback" type="submit">Gửi</button>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="tz-infomation-website">
                        <h3 class="tz-title-contact">Địa Chỉ</h3>
                        <address>
                            424/28 khu 1 tổ 4 phường phú hòa, tp.Thủ Dầu Một <br>
                            Bình Dương<br>
                        </address>
                        <h3 class="tz-title-contact">Liên Hệ</h3>
                        <ul>
                            <li>Phone: 0708307556</li>
                            <li>Fax: 123456789</li>
                            <li>Email: phuong02101995@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include'footer.php'; ?>