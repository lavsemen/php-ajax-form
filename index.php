<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <header class="header">
    <div class="header__nav">
      <div class="header__item header__item--logo">
        <img src="logo.png" alt="">
      </div>
      <div class="header__item">
        Deposit Calculator
      </div>
    </div>
  </header>
  <main class="main">
    <div class="main__wrapper">
      <div class="main__content">
        <h1 class="main__title">
          Депозитный калькулятор
        </h1>
        <p class="main__desc">Калькулятор депозитов позволяет рассчитать ваши доходы после внесения суммы на счет в банке по опредленному тарифу.</p>
        <form action="calc.php" method="POST" class='form'>
          <div class="form__field">
            <input type="text" placeholder="Дата откытия" name="startDate">
          </div>
          <div class="form__field form__field--nowrap">
            <input type="text" placeholder="Срок вклада" name="term">
            <select class="form__select">
              <option value="month" selected="selected">Месяц</option>
              <option value="year">Год</option>
              <option value="day">День</option>
            </select>
          </div>
          <div class="form__field">
            <input type="text" placeholder="Сумма вклада" name="sum">
          </div>
          <div class="form__field">
            <input type="text" placeholder="Процентная ставка, % годовых" name="precent">
          </div>
          <div class="form__field">
            <input type="checkbox" id="every-month">
            <div class="form__checkbox" id="checkbox-mask">
              <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="0.290619" y1="8.59313" x2="7.29062" y2="13.5931" stroke="black" />
                <line x1="6.5889" y1="13.7154" x2="15.5889" y2="0.715395" stroke="black" />
              </svg>
            </div>
            <label for="every-month">Ежемесячное пополнение вклада</label>
          </div>
          <div class="form__field">
            <input type="text" placeholder="Сумма пополнения вклада" name="sumAdd">
          </div>
          <div class="form__field">
            <button class="form__button" type="submit">Рассчитать</button>
          </div>
        </form>
        <div class="main__result">
        <div class="main__result-title">
               Сумма к выплате
          </div>
          <div class="main__result-sum">
            
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="assets/jquery.min.js"></script>
  <script src="assets/jquery.inputmask.min.js"></script>
  <script src="assets/jquery.validate.min.js"></script>
  <script src="script.js"></script>
</body>

</html>