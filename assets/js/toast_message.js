function toast({ title = "", message = "", type = "", duration = 3000 }) {
  // tìm id HTML toast làm nơi chưa thông báo
  const main = document.getElementById("toast");
  if (!main) return;

  const icons = {
    success: "fa-regular fa-circle-check",
    info: "ti-info-alt",
    warning: "ti-wand",
    error: "fa-solid fa-exclamation",
  };
  // tạo phần tử div mới . đây là nơi thông báo sẽ được thêm vào DOM
  const toast = document.createElement("div");

  // Đặt thời gian tự động xóa thông báo sau khi hiển thị
  // (thời gian hiển thị cộng thêm 1 giây để xử lý hiệu ứng thoát).
  // setTimeout tạo ra một bộ đếm thời gian, khi hết thời gian sẽ xóa
  // thông báo toast khỏi phần tử main.
  const autoRemove = setTimeout(() => main.removeChild(toast), duration + 1000);

  toast.onclick = (e) => {
    if (e.target.closest(".toast__close")) {
      main.removeChild(toast);
      clearTimeout(autoRemove);
    }
  };
  // Giá trị này được sử dụng trong hiệu ứng CSS để tạo khoảng thời gian fadeOut.
  const delay = (duration / 1000).toFixed(2);
  toast.className = `toast toast--${type}`;
  toast.style.animation = `slideInLeft ease .7s, fadeOut linear 1s ${delay}s forwards`;

  toast.innerHTML = `
        <div class="toast__icon"><i class="${icons[type]}"></i></div>
        <div class="toast__body">
            <h3 class="toast__title">${title}</h3>
            <p class="toast__msg">${message}</p>
        </div>
        <div class="toast__close"><i class="ti-close"></i></div>
    `;
  //Thêm phần tử toast vừa tạo vào main (phần tử chứa thông báo).
  main.appendChild(toast);
}

function showToast(type, title, message) {
  toast({ title, message, type, duration: 3000 });
}

// Example usage:
function showSuccessToast() {
  showToast("success", "Success", "Connect successful!");
}

function showWarningToast() {
  showToast("warning", "Warning", "Check your connection!");
}

function showErrorToast() {
  showToast("error", "Error", "Connection failed!");
}

// *Hiển thị thông báo khi load trang
window.addEventListener("load", function () {
    // Get the toast message and type from sessionStorage
const message = sessionStorage.getItem('toast_message');
const type = sessionStorage.getItem('toast_type');

// Check if there's a message and type to show
if (message && type) {
    // Set the title dynamically based on the type
    const title = type === 'success' ? 'SUCCESS' : 'ERROR';
    showToast(type, title, message);
    sessionStorage.removeItem('toast_message');
    sessionStorage.removeItem('toast_type');
}
  const emailInput = document.getElementById("email"); // ID của input email
  const oldPasswordInput = document.getElementById("password"); // ID của input mật khẩu cũ
  const newPasswordInput = document.getElementById("repassword"); // ID của input mật khẩu mới

  // ?Kiểm tra và lấy giá trị từ session storage
  if (sessionStorage.getItem("input_email")) {
    emailInput.value = sessionStorage.getItem("input_email");
  }
  if (sessionStorage.getItem("input_old_password")) {
    oldPasswordInput.value = sessionStorage.getItem("input_old_password");
  }
  if (sessionStorage.getItem("input_new_password")) {
    newPasswordInput.value = sessionStorage.getItem("input_new_password");
  }
});
