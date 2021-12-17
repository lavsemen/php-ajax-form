$(document).ready(function () {
  const checkbox = document.querySelector('#every-month');
  const checkboxMask = $('#checkbox-mask');
  const startDate = $('[name="startDate"]');
  const term = $('[name="term"]');
  const sum = $('[name="sum"]');
  const precent = $('[name="precent"]');
  const sumAdd = $('[name="sumAdd"]');
  const type = $('.form__select');
  const main = document.querySelector('.main__content')
  const form = $('.form');
  let formData = {}

  const validator = form.validate({
    rules: {
      startDate: {
        required: true,
      },
      sum: {
        required: true
      },
      precent: {
        required: true
      },
    },
    messages: {
      startDate: {
        required: 'Обязательное поле',
      },
      sum: {
        required: 'Обязательное поле'
      },
      precent: {
        required: 'Обязательное поле'
      },
    }
  })


  startDate.inputmask('99.99.9999')


  checkboxMask.on('click', function () {
    checkbox.checked = !checkbox.checked;
  })

  form.on('submit', function (event) {
    event.preventDefault();
    if (checkbox.checked) {
      formData = {
        startDate: startDate.val(),
        term: term.val(),
        sum: sum.val(),
        precent: precent.val(),
        sumAdd: sumAdd.val(),
        type: type.val(),
        everyMonth: true,
      }
    } else {
      formData = {
        startDate: startDate.val(),
        term: term.val(),
        sum: sum.val(),
        precent: precent.val(),
        sumAdd: null,
        type: type.val(),
        everyMonth: false,
      }
    }
    if (validator.errorList.length === 0) {
      $.ajax({
        url: 'calc.php',
        type: 'POST',
        cache: false,
        data: formData,
        success: function (data) {
          const mainRestlt = $('.main__result');
          mainRestlt.find('.main__result-sum').text(data.sum);
          mainRestlt.addClass('show');
        }
      })
    }
  })
})