
function isInViewport(element) {
    var rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  
  // Fungsi untuk menampilkan gambar saat elemen masuk ke dalam viewport
  function showImage() {
    var sandiImage = document.getElementById("sandiImage");
    if (isInViewport(sandiImage)) {
      sandiImage.style.opacity = 1;
      sandiImage.style.transform = "translateX(0)";
      window.removeEventListener("scroll", showImage); // Hentikan listener setelah tampil
    }
  }
  
  // Tambahkan event listener untuk mengaktifkan animasi saat menggulir ke bawah
  window.addEventListener("scroll", showImage);
  