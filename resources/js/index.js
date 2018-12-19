document.addEventListener("DOMContentLoaded", ready);

function ready() {
  // Создание элементов массива возможно несколькими способами:

      var earth = new Array(4); /* массив из 4-х элементов*/
      earth[0] = "Solar";
      earth[1] = "24 h";
      earth[2] = 6378;
      earth[3] = 365.25;

      var earth = new Array("Solar", "24 h", 6378, 365.25);


      var earth = new Array(); // пустой массив
      earth.xtype = "Solar";
      earth.xday = "24 h";
      earth.radius = 6378;
      earth.period = 365.25;

      var country = ["UK", "USA", "GB"];
      // Если вы указываете числа или значения true или false при определении массива, то тип переменной будет числовой или булев тип, а не строковый.


      // Обращение или доступ к элементам массива в javaScript происходит так:


      var mas=new Array(1,25,'Привет');

      mas[0]='Пока';
      mas[1]=35;

      // Вывод элементов массива с использованием обычного цикла for:

          var mas=new Array(1,25,'Привет');
          mas[0]='Пока';
          mas[1]=35;

          function showElement(){
          	for(i=0;i<3;i++)
          	alert(mas[i]);
          }
          showElement();

          // Использование цикла for in для перебора элементов массива:

          function showElement(){
          	for(var i in mas){
          		alert(mas[i]);
          	}
          }
          showElement();


          // Удаление элементов массива
          // В javascript удалить элемент массива можно при помощи оператора delete:


          var myColors = new Array("red", "green", "blue");
          delete myColors[1];
          alert(myColors); // red,,blue

          // Размер массива

          // Длина length – не количество элементов массива, а последний индекс + 1.

          var arr = [];
          arr[1000] = true;

          alert(arr.length); // 1001

          // При уменьшении length массив укорачивается.

          var arr = [1, 2, 3, 4, 5];
          arr.length = 2; // укоротить до 2 элементов
          console.log(arr[3] );
          arr.length = 5; // вернуть length обратно, как было
          console.log(arr[3]); // undefined: значения не вернулись
          // Самый простой способ очистить массив – это arr.length=0.

          // Доступ и обращение к элементам массива осуществляется при помощи точечной нотации (через символ «.«):

              // Название_объекта.свойство_объекта
              // Название_объекта.метод_объекта(параметры)


          // Вывести элементы массива на экран, в качестве конечного значения счетчика цикла использовать свойство length


          for (var i = 0; i<arr.length;i++){
          	alert(arr[i]);
          }
          alert(arr.length);

          // Изменение Значений в Массиве
          myCars[0]="BMW";
}
