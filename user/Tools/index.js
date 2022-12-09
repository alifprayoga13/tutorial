function onScanSuccess(decodedText, decodedResult) {
    //(`Code scanned = ${decodedText}`, decodedResult);  
    window.location.href = "../OutputTamu.php?qr_code=" + decodedText ;
}
var html5QrcodeScanner = new Html5QrcodeScanner(
        "qr-reader2", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess);