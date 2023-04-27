<div id="codigoQR"></div>
<script src="https://cdn.jsdelivr.net/npm/qrcode@1.4.4/qrcode.min.js"></script>
<script>
  var codigoQR = new QRCode(document.getElementById("codigoQR"), {
    text: "https://ejemplo.com",
    width: 256,
    height: 256,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
  });
</script>
