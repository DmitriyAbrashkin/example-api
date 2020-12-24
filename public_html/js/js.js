async function getNews() {
  try {
    let response = await fetch('http://w99641qk.beget.tech/api/kt/184003', {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json'
      }
    });

    if (response.ok) { // если HTTP-статус в диапазоне 200-299
      // получаем тело ответа (см. про этот метод ниже)
      let json = await response.json();
      console.log(json);
      showNews(json);
    } else {
      alert("Ошибка HTTP: " + response.status);
    }
  } catch (error) {
    throw error;
  }
}


function showNews(kt) {
  document.getElementsByClassName('reit-fio')[0].innerHTML = kt.name_student;
  let tableItem = document.getElementsByClassName('reit-table')[0].children[0];

  kt.studyInfo.forEach(element => {
    var row = document.createElement("tr");
    var column = document.createElement("td");
    var content = document.createTextNode(element.name_discipline);
    column.appendChild(content);
    row.appendChild(column);

    for (let index = 0; index < element.kt_result.length; index++) {
      var column = document.createElement("td");
      var content = document.createTextNode('Контрольная точка № ' + (index + 1) + ': ' + element.kt_result[index]);
      column.appendChild(content);
      row.appendChild(column);

      var column = document.createElement("td");
      var content = document.createTextNode('Пропуски кт № ' + (index + 1) + ': ' + element.prop[index]);
      column.appendChild(content);
      row.appendChild(column);
    }

    /*     element.kt_result.forEach(el => {
          var column = document.createElement("td");
          var content = document.createTextNode('Контрольная точка № ' + i + ': ' + el);
          column.appendChild(content);
          row.appendChild(column);
        })

        element.prop.forEach(el => {
          var column = document.createElement("td");
          var content = document.createTextNode('Пропуски кт № ' + i + ': ' + el);
          column.appendChild(content);
          row.appendChild(column);
        }) */


    tableItem.appendChild(row);
    document.body.appendChild(tableItem);
  })



}



var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

ymaps.ready(init);

var myMap;

function init() {
  // Инициализация вкладок.
  // После исполнения команды tabs() tab-2 получит style='display:none'.
  // Карта будет инициализирована, но будет иметь нулевой размер.
  // В данном случае это хорошо, так как невидимая карта не будет загружать невидимые тайлы.
  $('#tabs').tabs();
  $('#tabs1').tabs();
  $('#tabs2').tabs();
  $('#tabs3').tabs();
  $('#tabs4').tabs();
  $('#tabs5').tabs();
  $('#tabs6').tabs();
  $('#tabs7').tabs();
  $('#tabs8').tabs();
  $('#tabs9').tabs();


  let korp0 = [55.347378, 86.079025];
  let korp1 = [55.348186, 86.076973];
  let korp2 = [55.352520, 86.073813];
  let korp3 = [55.349033, 86.080902];
  let korp4 = [55.347370, 86.080620];
  let korp5 = [55.348318, 86.081388];
  let korp6 = [55.352398, 86.071686];
  let korp7 = [55.347984, 86.079978];
  let korp8 = [55.384903, 86.100392];
  let korp9 = [55.349379, 86.079733];

  //#region  0 Корпус
  myMap = new ymaps.Map('tab-2', {
    center: korp0, // Москва
    zoom: 18
  });

  myMap.controls.remove('searchControl');
  myMap.controls.remove('trafficControl');
  myMap.controls.remove('typeSelector');
  myMap.controls.remove('fullscreenControl');
  myMap.controls.remove('rulerControl');
  myMap.behaviors.disable(['scrollZoom']);

  myMap.geoObjects
    .add(new ymaps.Placemark(korp0, {
      balloonContent: 'Можно еще ченить добавить',
      iconCaption: '0 Корпус'
    }, {
      preset: 'islands#icon',
      iconColor: '#0095b6'
    }))
  //#endregion

  //#region 1 Корпус
  myMap = new ymaps.Map('tab-4', {
    center: korp1, // Москва
    zoom: 18
  });

  myMap.controls.remove('geolocationControl');
  myMap.controls.remove('searchControl');
  myMap.controls.remove('trafficControl');
  myMap.controls.remove('typeSelector');
  myMap.controls.remove('fullscreenControl');
  myMap.controls.remove('rulerControl');
  myMap.behaviors.disable(['scrollZoom']);

  myMap.geoObjects
    .add(new ymaps.Placemark(korp1, {
      balloonContent: 'Можно еще ченить добавить',
      iconCaption: '1 Корпус'
    }, {
      preset: 'islands#icon',
      iconColor: '#0095b6'
    }))
  //#endregion

  //#region 2 Корпус
  myMap = new ymaps.Map('tab-6', {
    center: korp2, // Москва
    zoom: 18
  });

  myMap.controls.remove('geolocationControl');
  myMap.controls.remove('searchControl');
  myMap.controls.remove('trafficControl');
  myMap.controls.remove('typeSelector');
  myMap.controls.remove('fullscreenControl');
  myMap.controls.remove('rulerControl');
  myMap.behaviors.disable(['scrollZoom']);

  myMap.geoObjects
    .add(new ymaps.Placemark(korp2, {
      balloonContent: 'Можно еще ченить добавить',
      iconCaption: '2 Корпус'
    }, {
      preset: 'islands#icon',
      iconColor: '#0095b6'
    }))
  //#endregion

  //#region 3 Корпус
  myMap = new ymaps.Map('tab-8', {
    center: korp3, // Москва
    zoom: 18
  });

  myMap.controls.remove('geolocationControl');
  myMap.controls.remove('searchControl');
  myMap.controls.remove('trafficControl');
  myMap.controls.remove('typeSelector');
  myMap.controls.remove('fullscreenControl');
  myMap.controls.remove('rulerControl');
  myMap.behaviors.disable(['scrollZoom']);

  myMap.geoObjects
    .add(new ymaps.Placemark(korp3, {
      balloonContent: 'Можно еще ченить добавить',
      iconCaption: '3 Корпус'
    }, {
      preset: 'islands#icon',
      iconColor: '#0095b6'
    }))
  //#endregion

  //#region 4 Корпус
  myMap = new ymaps.Map('tab-10', {
    center: korp4, // Москва
    zoom: 18
  });

  myMap.controls.remove('geolocationControl');
  myMap.controls.remove('searchControl');
  myMap.controls.remove('trafficControl');
  myMap.controls.remove('typeSelector');
  myMap.controls.remove('fullscreenControl');
  myMap.controls.remove('rulerControl');
  myMap.behaviors.disable(['scrollZoom']);

  myMap.geoObjects
    .add(new ymaps.Placemark(korp4, {
      balloonContent: 'Можно еще ченить добавить',
      iconCaption: '4 Корпус'
    }, {
      preset: 'islands#icon',
      iconColor: '#0095b6'
    }))
  //#endregion

  //#region 5 Корпус
  myMap = new ymaps.Map('tab-12', {
    center: korp5, // Москва
    zoom: 18
  });

  myMap.controls.remove('geolocationControl');
  myMap.controls.remove('searchControl');
  myMap.controls.remove('trafficControl');
  myMap.controls.remove('typeSelector');
  myMap.controls.remove('fullscreenControl');
  myMap.controls.remove('rulerControl');
  myMap.behaviors.disable(['scrollZoom']);

  myMap.geoObjects
    .add(new ymaps.Placemark(korp5, {
      balloonContent: 'Можно еще ченить добавить',
      iconCaption: '5 Корпус'
    }, {
      preset: 'islands#icon',
      iconColor: '#0095b6'
    }))
  //#endregion

  //#region 6 Корпус
  myMap = new ymaps.Map('tab-14', {
    center: korp6, // Москва
    zoom: 18
  });

  myMap.controls.remove('geolocationControl');
  myMap.controls.remove('searchControl');
  myMap.controls.remove('trafficControl');
  myMap.controls.remove('typeSelector');
  myMap.controls.remove('fullscreenControl');
  myMap.controls.remove('rulerControl');
  myMap.behaviors.disable(['scrollZoom']);

  myMap.geoObjects
    .add(new ymaps.Placemark(korp6, {
      balloonContent: 'Можно еще ченить добавить',
      iconCaption: '6 Корпус'
    }, {
      preset: 'islands#icon',
      iconColor: '#0095b6'
    }))
  //#endregion

  //#region 7 Корпус
  myMap = new ymaps.Map('tab-16', {
    center: korp7, // Москва
    zoom: 18
  });

  myMap.controls.remove('geolocationControl');
  myMap.controls.remove('searchControl');
  myMap.controls.remove('trafficControl');
  myMap.controls.remove('typeSelector');
  myMap.controls.remove('fullscreenControl');
  myMap.controls.remove('rulerControl');
  myMap.behaviors.disable(['scrollZoom']);

  myMap.geoObjects
    .add(new ymaps.Placemark(korp7, {
      balloonContent: 'Можно еще ченить добавить',
      iconCaption: '7 Корпус'
    }, {
      preset: 'islands#icon',
      iconColor: '#0095b6'
    }))
  //#endregion

  //#region Спорт база
  myMap = new ymaps.Map('tab-18', {
    center: korp8, // Москва
    zoom: 18
  });

  myMap.controls.remove('geolocationControl');
  myMap.controls.remove('searchControl');
  myMap.controls.remove('trafficControl');
  myMap.controls.remove('typeSelector');
  myMap.controls.remove('fullscreenControl');
  myMap.controls.remove('rulerControl');
  myMap.behaviors.disable(['scrollZoom']);

  myMap.geoObjects
    .add(new ymaps.Placemark(korp8, {
      balloonContent: 'Можно еще ченить добавить',
      iconCaption: 'Спортивня база'
    }, {
      preset: 'islands#icon',
      iconColor: '#0095b6'
    }))
  //#endregion

 //#region поликлиника
 myMap = new ymaps.Map('tab-20', {
  center: korp9, // Москва
  zoom: 18
});

myMap.controls.remove('geolocationControl');
myMap.controls.remove('searchControl');
myMap.controls.remove('trafficControl');
myMap.controls.remove('typeSelector');
myMap.controls.remove('fullscreenControl');
myMap.controls.remove('rulerControl');
myMap.behaviors.disable(['scrollZoom']);

myMap.geoObjects
  .add(new ymaps.Placemark(korp9, {
    balloonContent: 'Можно еще ченить добавить',
    iconCaption: 'поликлиника'
  }, {
    preset: 'islands#icon',
    iconColor: '#0095b6'
  }))
//#endregion

  // В момент показа новой вкладки будем пересчитывать размер карты.
  // Карта примет максимально возможные значения при активации ее таба
  // и нулевые, как только будет выбран первый таб.
  // Подписываемся на событие 'tabsshow' (а не 'tabselect',
  // так как требуется, чтобы элемент с картой уже был виден).


  $('#tabs').bind('tabsshow', function (event, ui) {
    myMap.container.fitToViewport();
  });


}

