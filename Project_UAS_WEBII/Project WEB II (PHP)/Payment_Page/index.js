const descBarang = document.querySelectorAll("desc-barang");

const harga = document.querySelector(".harga-barang .harga");
const iconRight = document.querySelector(".icon-right");
const iconBarang = document.querySelectorAll(".icon-barang");
const showMenu = document.querySelector(".show-menu");
const pilihKurir = document.querySelector(".pilih-kurir");
const subTotal = document.querySelector(".subTotal");
const hargaShipping = document.querySelectorAll(".harga-shipping");
const labelShipping = document.querySelectorAll(".label-shipping");
const shipping = document.querySelector(".harga-shipping .label-harga");
const namaBarang = document.querySelectorAll(".nama-barang");
const totalHarga = document.querySelector(".totalHarga");
const pilihPembayaran = document.querySelector(".pilih-pembayaran");
const listBayar = document.querySelectorAll(".listBayar li a");
const barang = document.querySelectorAll(".barang");

let text = localStorage.getItem("produk");
let obj = JSON.parse(text) || [];
console.log(obj);
let total = 0;
let hargaAsli = 0;
let divIdx = 0;

let arrTotal = localStorage.getItem("total");
let objTotal = JSON.parse(arrTotal);
console.log(objTotal);

if (obj.length == 0) {
  console.log("tidak ada produk");
} else {
  for (let x = 0; x < obj.length; x++) {
    const section = document.getElementById("jlh-barang");
    const barang = document.createElement("div");
    barang.className = "barang";
    const descBarang = document.createElement("div");
    descBarang.className = "desc-barang";
    const img = document.createElement("img");
    img.className = "gmbr-produk";
    img.src = "img/img2.jpg";
    img.style.width = "100px";
    img.style.height = "100px";

    //banyak-barang
    const bnykBarang = document.createElement("div");
    bnykBarang.className = "bnyk-barang";
    const namaBarang = document.createElement("label");
    namaBarang.classList = "nama-barang";

    //icon-barang
    const iconBarang = document.createElement("div");
    iconBarang.className = "icon-barang";
    const iconKurang = document.createElement("span");
    iconKurang.className = "icon kurang op";
    iconKurang.textContent = "-";
    const iconTambah = document.createElement("span");
    iconTambah.className = "icon tambah op";
    iconTambah.textContent = "+";
    const num = document.createElement("span");
    num.className = "num";
    num.textContent = obj[x].qty;
    num.style.padding = "10px";

    //harga-barang
    const hargaBarang = document.createElement("div");
    hargaBarang.className = "harga-barang";
    const harga = document.createElement("span");
    harga.className = "harga";

    section.append(barang);
    barang.append(descBarang);
    descBarang.append(img);
    descBarang.append(bnykBarang);
    bnykBarang.append(namaBarang);
    bnykBarang.append(iconBarang);
    iconBarang.append(iconKurang);
    iconBarang.append(num);
    iconBarang.append(iconTambah);
    barang.append(hargaBarang);
    hargaBarang.append(harga);

    const operator = document.querySelectorAll(".op");
    // const jlhBarang = document.querySelector(".num");
    const add = document.querySelector(".tambah");

    namaBarang.textContent = obj[x].name;
    // harga.textContent = parseInt(obj[x].harga).toLocaleString("id-ID", {
    //   style: "currency",
    //   currency: "IDR",
    // });
    harga.textContent = (
      parseInt(obj[x].harga) * parseInt(obj[x].qty)
    ).toLocaleString("id-ID", {
      style: "currency",
      currency: "IDR",
    });
    total += parseInt(obj[x].harga) * parseInt(obj[x].qty);
  }
}

const produkPrice = document.querySelectorAll(".harga");
// function displayQty() {
//   let text = localStorage.getItem("produk");
//   let obj = JSON.parse(text) || [];
//   for (let x = 0; x < obj.length; x++) {
//     harga.innerHTML = parseInt(obj[x].harga) * parseInt(obj[x].qty);
//   }
// }

// window.addEventListener("load", displayQty);

const divIconBarang = document.querySelectorAll(".icon-barang");
const divBnykBarang = document.querySelectorAll(".bnyk-barang");
// barang.forEach((div) => {
//   const hargaBarang = div.querySelectorAll(".harga-barang .hargaProduk");
//   // console.log(hargaBarang);
//   hargaBarang.forEach((childHarga) => {
//     console.log(childHarga.value);
//   })
// })

divBnykBarang.forEach((div) => {
  const op = div.querySelectorAll(".op");
  const nama = div.querySelectorAll(".nama-barang");
  let jlh = div.querySelector(".num");
  let qty = jlh.textContent;
  let hargaAsli = 0;
  // let harga = total;

  for (let x = 0; x < nama.length; x++) {
    // console.log(namaProduk);
    for (let y = 0; y < op.length; y++) {
      let ops = op[y];
      ops.addEventListener("click", () => {
        // console.log(ops);
        const nama = div.querySelector(".nama-barang");

        // console.log(harga);
        let namaProduk = nama.textContent;
        document.cookie = "nama=" + namaProduk;
        let hargaProduk = 0;
        if (ops.innerHTML === "-") {
          if (qty > 0) {
            qty--;
          } else {
            qty == 0;
          }
          jlh.innerHTML = qty;
          // obj[x].qty = qty;
        } else if (ops.innerHTML === "+") {
          qty++;
          // obj[x].qty = qty;
          jlh.innerHTML = qty;
        };
        document.cookie = "qty=" + qty;
        // if (namaProduk === obj[x].name) {
        //   obj[x].qty = qty;
        //   // console.log(obj[x].harga);

        //   hargaProduk = parseInt(obj[x].harga * qty);
        //   hargaAsli = parseInt(hargaProduk / qty);
        //   console.log(hargaProduk);
        console.log(harga);
        //   // obj[x].harga = parseInt(hargaProduk);

        //   // harga.innerHTML = hargaProduk;
        //   // console.log(harga.textContent);
        // } else {
        //   x++;
        // }

        localStorage.setItem("produk", JSON.stringify(obj));
      });
    }
  }
});

iconRight.addEventListener("click", function () {
  iconRight.classList.toggle("fa-chevron-right");
  iconRight.classList.toggle("fa-chevron-down");
  showMenu.classList.toggle("active");
});

let hargaPengiriman = 0;
let total1 = 0;
hargaShipping.forEach((divs, index) => {
  divs.addEventListener("click", function () {
    var type = divs.querySelector("span").innerHTML;
    var harga = divs.querySelector(".label-harga").innerHTML;
    pilihKurir.innerHTML = type;
    // console.log(type);
    subTotal.innerHTML = harga;
    showMenu.classList.toggle("active");
    hargaPengiriman = parseInt(harga);
    // console.log(hargaPengiriman);
    // console.log(hargaPengiriman);
    // console.log(total + hargaPengiriman);
    total1 = total + hargaPengiriman;
    // console.log(total1);
    let sumTotal = {
      total: total1,
    };
    localStorage.setItem("Total", JSON.stringify(sumTotal));

    // objTotal.push(sumTotal);
    // console.log(objTotal);
    // totalHarga.textContent = total1.toLocaleString("id-ID", {
    //   style: "currency",
    //   currency: "IDR",
    // });
    // for (let x = 0; x < 1; x++) {
    //   obj[x].pengiriman = hargaPengiriman;
    //   obj[x].kurir = type;
    // }
  });

  // console.log(total1);
});
// console.log(total1);
// total += hargaPengiriman;
// totalHarga.textContent = total.toLocaleString("id-ID", {
//   style: "currency",
//   currency: "IDR",
// });

$(document).ready(function () {
  var slider_width = $(".pollSlider").height(); //get width automaticly
  $("#pollSlider-button").click(function () {
    if (
      $(this).css("margin-bottom") == slider_width + "px" &&
      !$(this).is(":animated")
    ) {
      $(".pollSlider,#pollSlider-button").animate({
        "margin-bottom": "-=" + slider_width,
      });
      $("#pollSlider-button").css("background", "green");
    } else {
      if (!$(this).is(":animated")) {
        //perevent double click to double margin
        $(".pollSlider,#pollSlider-button").animate({
          "margin-bottom": "+=" + slider_width,
        });
        $("#pollSlider-button").css("background", "blue");
      }
    }
  });
});

let bankBayar = "";
for (let x = 0; x < listBayar.length; x++) {
  listBayar[x].addEventListener("click", () => {
    // console.log(listBayar[x].textContent);
    pilihPembayaran.innerHTML = listBayar[x].innerHTML;
    document.cookie = "cara_pembayaran = "+pilihPembayaran.innerHTML;
    // obj[x].bank = listBayar[x].textContent;
    // bankBayar = listBayar[x].textContent;
    // obj[0].bank = bankBayar;
  });
}

const proceed = document.querySelector(".proceed");
proceed.addEventListener("click", () => {
  localStorage.setItem("produk", JSON.stringify(obj));
  // console.log(JSON.stringify(obj));
});
