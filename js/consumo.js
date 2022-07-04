var orders=null;
var idOrderNext=null;
$(document).ready(function () {
 
    getOrders()
  });

 function getOrders(){

    $.ajax({
        type: "POST",
        data: { method: "Listar" },
        url: "../API/service.php",
        dataType: "json",
        success: function (data) {

            orders=data;
            const ordersId = orders.sort((a,b) =>{
                return Number.parseInt(b.value) - Number.parseInt(a.value)
              }) 

              idOrderNext=ordersId[0].id;
        },})
  }


  function setDto(){

    idOrderNext=Number(idOrderNext)+1;
    orders.push({"id": idOrderNext,"ship_name":"Dato prueba","ship_address":"Dato prueba","ship_city":"Dato prueba"});
    viewOrders();
  }

  function viewOrders(){
    document.getElementById("print_orders").innerHTML = JSON.stringify(orders)

  }

  function deleteFirst(){
    orders.shift()
    viewOrders();

    
  }