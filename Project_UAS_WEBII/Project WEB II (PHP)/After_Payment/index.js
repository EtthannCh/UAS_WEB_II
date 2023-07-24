const noResi = document.querySelector(".noResi");
const copy = document.querySelector(".copy");
const jumlahBayar = document.querySelector(".jumlahBayar");
const sudahBayar = document.querySelector(".sudahBayar");

copy.addEventListener("click", () => {
  navigator.clipboard.writeText(noResi.innerHTML);
  alert("Receipt Number Copied");
});

let text = localStorage.getItem("Total");
let obj = JSON.parse(text);
let total = obj.total;
// jumlahBayar.innerHTML = parseInt(total).toLocaleString("id-ID", {
//   style: "currency",
//   currency: "IDR",
// });

function copyResi() {
  let nomorResi = Math.floor(Math.random() * 1000000000);
  noResi.innerHTML = nomorResi;
}

sudahBayar.addEventListener("click", () => {
  // let count = 1;
  // if (count == 1) {
  //   setTimeout(copyResi, 10000);
  // } else {
  // }
  setTimeout(copyResi, 10000);
  alert("Redirecting...");
  
});
