function myFunction() {
  const months = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
  ];
  const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
  let date = new Date();
  let jam = date.getHours();
  let tanggal = date.getDate();
  let hari = days[date.getDay()];
  let bulan = months[date.getMonth()];
  let tahun = date.getFullYear();
  let m = date.getMinutes();
  let s = date.getSeconds();
  m = checkTime(m);
  s = checkTime(s);

  let greeting;
  if (jam >= 4 && jam <= 10) {
    greeting = "Selamat Pagi";
  } else if (jam >= 11 && jam <= 14) {
    greeting = "Selamat Siang";
  } else if (jam >= 15 && jam <= 18) {
    greeting = "Selamat Sore";
  } else {
    greeting = "Selamat Malam";
  }

  document.getElementById(
    "date"
  ).innerHTML = `${greeting} | Hari : ${hari} | Tanggal : ${tanggal} ${bulan} ${tahun} | Waktu : ${jam}.${m}.${s}`;
  requestAnimationFrame(myFunction);
}

function checkTime(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}

window.onload = function () {
  myFunction();
};
