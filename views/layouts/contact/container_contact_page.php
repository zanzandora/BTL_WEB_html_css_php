<!-- ! CONTAINER -->
<main class="container">
    <!-- todo    grid -> grid__row -> grid__column -->
    <div class="grid grid-container">
        <div class="contact modal--no-animation">
            <!-- * authen form   -->
            <?php
            include $_SERVER['DOCUMENT_ROOT'] . '/BTL_WEB_html_css_php/config/config.php';

            if (isset($_POST['gui'])) {
                $tenkhachhang = $_POST['hoten'];
                $email = $_POST['email'];
                $sodienthoai = $_POST['sodienthoai'];
                $noidung = $_POST['message'];
                if ($_POST['hoten'] == "" || $_POST['email'] == "" || $_POST['sodienthoai'] == "" || $_POST['message'] == "") {
                    echo '<p style="color: red">Chưa nhập đủ thông tin !!!</p>';
                } else {
                    $sql = "insert into lienhe(hoten,email,sodienthoai,noidung) value ('" . $tenkhachhang . "', '" . $email . "', '" . $sodienthoai . "', '" . $noidung . "')";
                    $query = mysqli_query($connect, $sql);
                }
            }
            ?>
            <div class="contact_body auth-form--register">
                <section class="contact-body__container">
                    <form action="" method="POST">
                        <div class="contact-body__header">
                            <h3>contact with us !</h3>
                        </div>
                        <div class="contact-body__form">
                            <div class="contact-body__group">
                                <input
                                    type="text"
                                    name="hoten"
                                    id=""
                                    class="contact-body__input"
                                    placeholder="Tên của bạn" 
                                    required/>
                            </div>
                            <div class="contact-body__group">
                                <input
                                    type="email"
                                    name="email"
                                    id=""
                                    class="contact-body__input"
                                    placeholder="Email của bạn" 
                                    required/>
                            </div>
                            <div class="contact-body__group">
                                <input
                                    type="text"
                                    name="sodienthoai"
                                    id=""
                                    class="contact-body__input"
                                    placeholder="Số điện thoại" 
                                    required/>
                            </div>
                            <div class="contact-body__group">
                                <textarea
                                    type="message"
                                    name="message"
                                    id=""
                                    class="contact-body__input-textarea"
                                    placeholder="Lời bạn muốn nhắn nhủ cho chúng tôi" required></textarea>
                            </div>
                        </div>
                        <div class="contact-body__control">
                            <button type="submit" name="gui" class="btn btn--primary">SEND</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</main>