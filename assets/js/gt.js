var gt = 0; //grand total
var iprice = document.getElementsByClassName('iprice');
var iquantity = document.getElementsByClassName('iquantity');
var itotal = document.getElementsByClassName('itotal');
var gtotal = document.getElementById('gtotal');

function subTotal() {
    gt = 0;
    for (i = 0; i < iprice.length; i++) {
        itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
        gt = gt + (iprice[i].value) * (iquantity[i].value);
        /* price 650 quantity 1      gt=0+(650*1)
        price 750 quantity 2          gt= 650+(750*2) === gt = 2150
        price 850 quantity 1          gt= 2150+(850*1)=== gt = 3000 */
    }
    gtotal.innerText = gt;
}
subTotal();