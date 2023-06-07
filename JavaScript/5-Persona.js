var button1 = document.getElementById("agregar");
var button2 = document.getElementById("actualizar");
var button3 = document.getElementById("eliminar");
var button4 = document.getElementById("buscar");
var popupForm = document.getElementById("popupForm");

button1.addEventListener("click", function() {
  // Abrir la ventana emergente con el formulario
  var popupWindow = window.open("", "Popup", "width=500,height=700");

  // Escribir el contenido del formulario en la ventana emergente
  popupWindow.document.write('<html><head><style>' +
    // Estilos CSS para la ventana emergente
    '.content-2 { background-color: #9EA8B8; border-radius: 50px; padding: 15%; max-width: 300px; margin: 0 auto; }' +
    '.content-2 input[type="text"],' +
    '.content-2 input[type="number"],' +
    '.content-2 input[type="email"],' +
    '.content-2 input[type="tel"],' +
    '.content-2 select {' +
    '  width: 100%;' +
    '  height: 35px;' +
    '  padding: 10px;' +
    '  margin-bottom: 20px;' +
    '  border-radius: 10px;' +
    '  border: none;' +
    '}' +

    '.content-2 button {' +
    '  width: 100%;' +
    '  background-color: #3C4E6B;' +
    '  color: #fff;' +
    '  border: none;' +
    '  border-radius: 10px;' +
    '  cursor: pointer;' +
    '  height: 40px;' +
    '  margin-bottom: 10px;' +
    '}' +
    '</style></head><body><div class="content"><div class="content-2">' + popupForm.innerHTML + '</div></div></body></html>');

  // Mostrar la ventana emergente
  popupWindow.document.body.style.display = "block";
});

button2.addEventListener("click", function() {
    // Abrir la ventana emergente con el formulario
    var popupWindow = window.open("", "Popup", "width=1230,height=720");
    
    // Escribir el contenido del formulario en la ventana emergente
    popupWindow.document.write(popupForm.innerHTML);
    
    // Mostrar la ventana emergente
    popupWindow.document.getElementById("popupForm").style.display = "block";
  });
  
  button3.addEventListener("click", function() {
    // Abrir la ventana emergente con el formulario
    var popupWindow = window.open("", "Popup", "width=1230,height=720");
    
    // Escribir el contenido del formulario en la ventana emergente
    popupWindow.document.write(popupForm.innerHTML);
    
    // Mostrar la ventana emergente
    popupWindow.document.getElementById("popupForm").style.display = "block";
  });

  button4.addEventListener("click", function() {
    // Abrir la ventana emergente con el formulario
    var popupWindow = window.open("", "Popup", "width=1230,height=720");
    
    // Escribir el contenido del formulario en la ventana emergente
    popupWindow.document.write(popupForm.innerHTML);
    
    // Mostrar la ventana emergente
    popupWindow.document.getElementById("popupForm").style.display = "block";
  });
