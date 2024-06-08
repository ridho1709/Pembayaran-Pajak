function showTextbox() {
  // Sembunyikan semua textbox terlebih dahulu
  document.getElementById("jp1").classList.add("hidden");
  document.getElementById("jp2").classList.add("hidden");
  document.getElementById("jp3").classList.add("hidden");
  document.getElementById("jp4").classList.add("hidden");
  document.getElementById("jp5").classList.add("hidden");

  // Tampilkan textbox yang sesuai dengan nilai combo box
  var selectedValue = document.getElementById("jenis_pembayaran").value;
  if (selectedValue === "Transfer") {
    document.getElementById("jp1").classList.remove("hidden");
  } else if (selectedValue === "Gopay") {
    document.getElementById("jp2").classList.remove("hidden");
  } else if (selectedValue === "Ovo") {
    document.getElementById("jp3").classList.remove("hidden");
  } else if (selectedValue === "Dana") {
    document.getElementById("jp4").classList.remove("hidden");
  } else if (selectedValue === "Shopeepay") {
    document.getElementById("jp5").classList.remove("hidden");
  }
}
