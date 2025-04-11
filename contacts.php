<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/contacts.css">
  <link rel="icon" type="image/svg+xml" sizes="any" href="https://static.tildacdn.com/tild3534-3862-4963-a463-383465343262/_smart_projects.svg">
  <link rel="icon" type="image/png" sizes="32x32" href="https://static.tildacdn.com/tild3136-6165-4636-b262-666665613066/_smart_projects_32_3.png" media="(prefers-color-scheme: dark)">
  <link rel="icon" type="image/png" sizes="32x32" href="https://static.tildacdn.com/tild3636-3133-4865-b634-613534636661/_smart_projects_32_3.png" media="(prefers-color-scheme: light)">
  <meta name="description" content="Внедряем CRM Битрикс 24, разрабатываем сайты, автоматизируем бизнес-процессы. Делаем работу компаний проще, прозрачней и понятнее с помощью современных цифровых инструментов">
  <title>Контакты | Smart Projects</title>
</head>

<body>
  <?php include './components/header.php' ?>
  <div class="main">

    <div class="content">

      <div class="content-title">



        <div class="content-title-header">
          <img src="./img/home.png" alt="home">
          <a href="index.html">Главная</a>
          <span>/ Контакты </span>

        </div>

        <div class="title-block-left">
          <h2>Контакты</h2>
        </div>

      </div>

      <div class="content-contacts">
        <!-- Первый блок: Иваново -->
        <div class="contacts-block">
          <div class="block-wrapper">
            <h2>Иваново-Москва: </h2>
            <div class="contacts-list">
              <div class="contacts-item">
                <h3>Адрес:</h3>
                <p>г. Иваново, ул. Бубнова</p>
                <p>д.40А, офис 708</p>
              </div>
              <div class="contacts-item">
                <h3>Режим работы:</h3>
                <p>Пн-Пт - 9:00-17:00,</p>
                <p>Сб-Вс - выходной</p>
              </div>
              <div class="contacts-item">
                <h3>Контакты:</h3>
                <p>+7 915-825-51-50,</p>
                <p>info@smartprojects.ru</p>
              </div>
            </div>
          </div>
          <div class="contacts-map">
            <div id="map-ivanovo" style="width: 100%; height: 100%;"></div>
          </div>
        </div>

        <!-- Второй блок: Санкт-Петербург -->
        <div class="contacts-block">
          <div class="block-wrapper">
            <h2>Санкт-Петербург: </h2>
            <div class="contacts-list">
              <div class="contacts-item">
                <h3>Адрес:</h3>
                <p>Санкт-Петербург пр.</p>
                <p>Большой Смоленский,</p>
                <p>д.2 литер А</p>
              </div>
              <div class="contacts-item">
                <h3>Режим работы:</h3>
                <p>Пн-Пт - 9:00-17:00,</p>
                <p>Сб-Вс - выходной</p>
              </div>
              <div class="contacts-item">
                <h3>Контакты:</h3>
                <p>+7 920-340-31-11,</p>
                <p>info@smartprojects.ru</p>
              </div>
            </div>
          </div>
          <div class="contacts-map">
            <div id="map-spb" style="width: 100%; height: 100%;"></div>
          </div>
        </div>
      </div>

    </div>

  </div>
  <?php include './components/footer.php' ?>
  <script src="./scripts/slaider.js"></script>
  <script src="./scripts/script.js"></script>

  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  <script type="text/javascript">
    ymaps.ready(function() {
      // Карта для Иваново
      let mapIvanovo = new ymaps.Map("map-ivanovo", {
        center: [56.990557, 40.990117],
        zoom: 16
      });
      let placemarkIvanovo = new ymaps.Placemark([56.990557, 40.990117], {
        hintContent: "г. Иваново, ул. Бубнова, д.40А",
        balloonContent: "Офис 708"
      });
      mapIvanovo.geoObjects.add(placemarkIvanovo);

      // Карта для Санкт-Петербурга
      let mapSpb = new ymaps.Map("map-spb", {
        center: [59.901021, 30.423046],
        zoom: 16
      });
      let placemarkSpb = new ymaps.Placemark([59.901021, 30.423046], {
        hintContent: "Санкт-Петербург пр. Большой Смоленский",
        balloonContent: "д.2 литер А"
      });
      mapSpb.geoObjects.add(placemarkSpb);
    });
  </script>
</body>

</html>