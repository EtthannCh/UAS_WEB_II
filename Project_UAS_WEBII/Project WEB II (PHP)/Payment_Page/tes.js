import { productsArray} from "./index.js";
console.log(productsArray);

let text = localStorage.getItem("produk");
let obj = JSON.parse(text);
console.log(obj);
// for(let x=0;x<productsArray.length;x++){
//     console.log(productsArray[x]);
// }

var produk = []


const namaBarang = document.querySelector(".nama-barang");
const jlh = document.querySelector(".icon-barang .num");
const hargaBarang = document.querySelector(".harga-barang .harga");
namaBarang.innerHTML = obj.name;
jlh.innerHTML = obj.qty;
var qty = jlh.innerHTML;
var harga = hargaBarang.innerHTML;
hargaBarang.innerHTML = harga * qty;

produk.push(objProduct)
console.log(produk);
// var item = productsArray.find(item=> item.name==="abc");
// console.log(item);
// var productJSON =   JSON.parse((productsArray));
// console.log(productJSON.);
