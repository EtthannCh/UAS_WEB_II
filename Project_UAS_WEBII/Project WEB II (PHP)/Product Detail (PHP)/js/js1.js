const addToCart = document.getElementById("add-to-cart");
const jlh = document.getElementById("number");
const button = document.getElementById("num");
const hargaProduk = document.querySelector(".price");
// hargaProduk.innerHTML = parseInt(hargaProduk.innerHTML).toLocaleString("id-ID", {style:"currency", currency:"IDR"});
// const hargaAsli = hargaProduk.innerHTML;
// console.log(hargaAsli);
const hargaParse = parseInt(hargaProduk.innerHTML).toLocaleString("id-ID", {
  style: "currency",
  currency: "IDR",
});
hargaProduk.innerHTML = hargaParse;
const imgSrc = localStorage.getItem("imgSrc");
// console.log(imgSrc);

button.addEventListener("click", function () {
  button.classList.toggle("black");
});
var jumlah;
var number = document.getElementById("number");
var plus = document.getElementById("plus");
var minus = document.getElementById("minus");
plus.addEventListener("click", function () {
  number.innerHTML = parseInt(number.innerHTML) + 1;
  jumlah = number.innerHTML;
});

minus.addEventListener("click", function () {
  if (number.innerHTML >= 1) {
    number.innerHTML = parseInt(number.innerHTML) - 1;
  }
});

const numberCart = document.querySelector(".number-cart");
// function displayArrayLength() {
//   let text = localStorage.getItem("produk");
//   const objProduk = JSON.parse(text);
//   if (objProduk.length === 0) {
//     numberCart.textContent == 0;
//   } else {
//     numberCart.textContent = objProduk.length;
//   }
// }

// window.addEventListener("load", displayArrayLength);

// addToCart.addEventListener("click", () => {
//   const jumlah = document.getElementById("number").innerHTML;
//   const hargaProduk = hargaAsli;
//   const title = document.getElementById("productName").innerHTML;
//   const qty = parseInt(jumlah);
//   const produk = {
//     name: title,
//     qty: qty,
//     harga: hargaAsli,
//     pengiriman: 1,
//     kurir: "-",
//     bank: "-",
//   };
//   // console.log(produk);
//   // console.log(imgSrc);
//   // let text = localStorage.getItem("produk");
//   // let objProduk = JSON.parse(text) || [];
//   let objProduk = 0;

//   let count = objProduk.length;
//   if (count < 1) {
//     objProduk.push(produk);
//     let produkPrice = 0;
//     produkPrice = produk.qty * produk.harga;
//     produk.harga = produkPrice;
//     // alert("added to cart");
//   } else {
//     const result = objProduk.find((obj) => obj.name == produk.name);
//     const cariProduk = objProduk.findIndex((obj) => obj.name == title);

//     if (cariProduk === -1) {
//       // alert("added to cart");
//       objProduk.push(produk);
//     } else if (produk.name === result.name) {
//       console.log("sama");
//       const updQty = objProduk.findIndex((obj) => obj.name == title);

//       let qtys = objProduk[updQty].qty;
//       // console.log(qtys);
//       let qty = parseInt(jumlah);
//       // console.log(qty);
//       let res = qty + qtys;
//       // console.log(res);

//       let hargaS = 0;
//       objProduk[updQty].qty = qty;
//       hargaS = hargaProduk * objProduk[updQty].qty;
//       // console.log(hargaAsli);
//       objProduk[updQty].harga = hargaAsli;
//     }
//   }
//   // localStorage.setItem("produk", JSON.stringify(objProduk));
//   // displayArrayLength();
//   // setInterval(displayArrayLength, 1000);
// });

// document.getElementById("toggle1").addEventListener("click", function () {
//   var hiddenItems = document.getElementsByClassName("hidden");
//   for (var i = 0; i < 4; i++) {
//     if (hiddenItems[i]) {
//       hiddenItems[i].style.display = "list-item";
//     }
//   }
//   if (hiddenItems.length <= 4) {
//     document.getElementById("toggle1").style.display = "none";
//   }
// });

function handleSearch(event) {
  event.preventDefault(); // untuk menghentikan pengiriman form secara default

  const searchTerm = document.getElementById("search").value;
  const url = `${searchTerm}.html`;

  // Lakukan pengalihan ke halaman pencarian
  window.location.href = url;
}

document.querySelector("form").addEventListener("submit", handleSearch);
