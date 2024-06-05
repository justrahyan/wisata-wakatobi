// Navbar
window.addEventListener("scroll", function(){
    var nav = document.querySelector("nav");
    nav.classList.toggle("sticky", window.scrollY > 0);
});

// Update harga pemesanan
document.addEventListener("DOMContentLoaded", function () {
  var durasiInput = document.getElementById("waktu");
  var pesertaInput = document.getElementById("jml_peserta");
  var hargaPaketInput = document.getElementById("harga");
  var totalTagihanInput = document.getElementById("jml_tagihan");
  var paketInputs = document.querySelectorAll('input[type="checkbox"]');
  var hitungButton = document.querySelector('a[name="hitung"]');

  durasiInput.addEventListener("change", updateHarga);
  pesertaInput.addEventListener("change", updateHarga);

  paketInputs.forEach(function (checkbox) {
    checkbox.addEventListener("change", updateHarga);
  });

  hitungButton.addEventListener("click", function (e) {
    e.preventDefault();

    updateHarga();
  });

  function updateHarga() {
    var durasi = parseInt(durasiInput.value);
    var peserta = parseInt(pesertaInput.value);

    var hargaPaket = 0;
    paketInputs.forEach(function (checkbox) {
      if (checkbox.checked) {
        switch (checkbox.value) {
          case "hotel":
            hargaPaket += 1000000;
            break;
          case "bus":
            hargaPaket += 1200000;
            break;
          case "restoran":
            hargaPaket += 500000;
            break;
          default:
            break;
        }
      }
    });

    var totalTagihan = hargaPaket * durasi * peserta;

    hargaPaketInput.value = hargaPaket.toLocaleString();
    totalTagihanInput.value = totalTagihan.toLocaleString();
  }
});

// Cetak Transaksi
function printPDF() {
  import('https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js').then(({ jsPDF }) => {
      import('https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js').then((html2canvas) => {
          html2canvas.default(document.querySelector("#order-list")).then(canvas => {
              const imgData = canvas.toDataURL('image/png');
              const pdf = new jsPDF();
              const imgProps = pdf.getImageProperties(imgData);
              const pdfWidth = pdf.internal.pageSize.getWidth();
              const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
              pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
              pdf.save("daftar_pesanan.pdf");
          });
      });
  });
}