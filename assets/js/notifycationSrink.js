const headerNoti = document.querySelector(
  ".header__bar-list:nth-child(2)  .header__bar-item:first-child .header__noti"
);

// *Gán document làm đối tượng mặc định cho this trong các hàm querySelector và querySelectorAll.
// *Giờ đây, khi sử dụng $ và $$, bạn có thể dễ dàng viết mã ngắn gọn để gọi document.querySelector và document.querySelectorAll.
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
var noti_link = $(".header__noti");
// *tìm kiếm phần tử  THÔNG BÁO js-header__bar-link-item
$$(".header__bar-item").forEach((item) => {
  if (item.querySelector(".js-header__bar-link-item")) {
    noti_link = item;
  }
});

// * Khi di chuột vào header, hiển thị thông báo với hiệu ứng phóng to
noti_link.addEventListener("mouseover", () => {
  headerNoti.style.display = "block";
  headerNoti.style.animation = "HeaderNotiGrow ease-in 0.2s";
});

// * Khi di chuột ra khỏi thông báo, ẩn với hiệu ứng thu nhỏ
noti_link.addEventListener("mouseleave", () => {
  headerNoti.style.animation = "HeaderNotiShrink ease-out 0.2s forwards";

  // * Đợi hiệu ứng hoàn thành trước khi ẩn hoàn toàn
  setTimeout(() => {
    headerNoti.style.display = "none";
  }, 200); // * Thời gian chờ bằng với thời gian animation (0.2s)
});
