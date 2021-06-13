
 
    var shoppingCart = function () {
        // =============================
        // Metodos privados y propiedades
        // =============================
        cart = [];
      
        // Constructor
        function Item(name, price, count) {
          this.name = name;
          this.price = price;
          this.count = count;
        }
      
        // Guardar cesta
        function saveCart() {
          sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
        }
      
        // Cargar cesta
        function loadCart() {
          cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
        }
        if (sessionStorage.getItem("shoppingCart") != null) {
          loadCart();
        }
      
      
        // =============================
        // Metodos publicos y propiedades
        // =============================
        var obj = {};
      
        // Añadir a la cesta
        obj.addItemToCart = function (name, price, count) {
          for (var item in cart) {
            if (cart[item].name === name) {
              cart[item].count++;
              saveCart();
              return;
            }
          }
          var item = new Item(name, price, count);
          cart.push(item);
          saveCart();
        };
        // Añadir numero de articulos
        obj.setCountForItem = function (name, count) {
          for (var i in cart) {
            if (cart[i].name === name) {
              cart[i].count = count;
              break;
            }
          }
        };
        // Quitar item de la cesta
        obj.removeItemFromCart = function (name) {
          for (var item in cart) {
            if (cart[item].name === name) {
              cart[item].count--;
              if (cart[item].count === 0) {
                cart.splice(item, 1);
              }
              break;
            }
          }
          saveCart();
        };
      
        // Quitar todos los items de la cesta
        obj.removeItemFromCartAll = function (name) {
          for (var item in cart) {
            if (cart[item].name === name) {
              cart.splice(item, 1);
              break;
            }
          }
          saveCart();
        };
      
        // Limpiar cesta
        obj.clearCart = function () {
          cart = [];
          saveCart();
        };
      
        // Recuento de la cesta
        obj.totalCount = function () {
          var totalCount = 0;
          for (var item in cart) {
            totalCount += cart[item].count;
          }
          return totalCount;
        };
      
        // Cesta total
        obj.totalCart = function () {
          var totalCart = 0;
          for (var item in cart) {
            totalCart += cart[item].price * cart[item].count;
          }
          return Number(totalCart.toFixed(2));
        };
      
        // Lista de la cesta
        obj.listCart = function () {
          var cartCopy = [];
          for (i in cart) {
            item = cart[i];
            itemCopy = {};
            for (p in item) {
              itemCopy[p] = item[p];
      
            }
            itemCopy.total = Number(item.price * item.count).toFixed(2);
            cartCopy.push(itemCopy);
          }
          return cartCopy;
        };
      

        return obj;
      }();
      
      
      // *****************************************
      // Disparadores y eventos
      // ***************************************** 
      // Añadir item
      $('.add-to-cart').click(function (event) {
        event.preventDefault();
        var name = $(this).data('name');
        var price = Number($(this).data('price'));
        shoppingCart.addItemToCart(name, price, 1);
        displayCart();
      });
      
      // Limpiar items
      $('.clear-cart').click(function () {
        shoppingCart.clearCart();
        displayCart();
      });
      
      
      function displayCart() {
        var cartArray = shoppingCart.listCart();
        var output = "";
        for (var i in cartArray) {
          output += "<tr>" +
          "<td>" + cartArray[i].name + "</td>" +
          "<td>(" + cartArray[i].price + ")</td>" +
          "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArray[i].name + ">-</button>" +
          "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>" +
          "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>" +
          "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>" +
          " = " +
          "<td>" + cartArray[i].total + "</td>" +
          "</tr>";
        }
        $('.show-cart').html(output);
        $('.total-cart').html(shoppingCart.totalCart());
        $('.total-count').html(shoppingCart.totalCount());
      }
      
      // Borrar item
      
      $('.show-cart').on("click", ".delete-item", function (event) {
        var name = $(this).data('name');
        shoppingCart.removeItemFromCartAll(name);
        displayCart();
      });
      
      
      // -1
      $('.show-cart').on("click", ".minus-item", function (event) {
        var name = $(this).data('name');
        shoppingCart.removeItemFromCart(name);
        displayCart();
      });
      // +1
      $('.show-cart').on("click", ".plus-item", function (event) {
        var name = $(this).data('name');
        shoppingCart.addItemToCart(name);
        displayCart();
      });
      
      // Numero de items
      $('.show-cart').on("change", ".item-count", function (event) {
        var name = $(this).data('name');
        var count = Number($(this).val());
        shoppingCart.setCountForItem(name, count);
        displayCart();
      });
      
      displayCart();    