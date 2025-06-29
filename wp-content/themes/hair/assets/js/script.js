jQuery(document).ready(($) => {

  $(".header__burger").on("click", function () {
    $(".header__menu").toggleClass("active");
  })

  function setEqualHeight() {
    var list1 = $('.price__list').eq(0); // Первый .price__list
    var list2 = $('.price__list').eq(1); // Второй .price__list

    // Сбрасываем высоту перед вычислением
    list1.css('height', 'auto');
    list2.css('height', 'auto');

    // Вычисляем высоту самого большого из двух элементов
    var maxHeight = Math.max(list1.outerHeight(), list2.outerHeight());

    // Устанавливаем одинаковую высоту для обоих элементов
    list1.css('height', maxHeight + 'px');
    list2.css('height', maxHeight + 'px');
  }

  // Устанавливаем высоту при загрузке страницы
  setEqualHeight();

  // Устанавливаем высоту при изменении размера окна
  $(window).resize(function () {
    setEqualHeight();
  });

  jQuery("input[type=tel]").on("change keyup paste", function () {
    var $inputField = jQuery(this);  // Поле ввода
    var inputValue = $inputField.val(); // Значение поля ввода

    // Проверяем, что последний символ не пробел
    if (inputValue.slice(-1) !== " ") {
      // Проверяем, что третий символ равен 7 или 8
      if (inputValue.substr(3, 1) === "7" || inputValue.substr(3, 1) === "8") {
        // Убираем все нецифровые символы и обрезаем строку, начиная с 2
        var cleanedNumber = inputValue.replace(/[^0-9]/g, "").substr(2);
        // Форматируем номер
        $inputField.val("+7(" + cleanedNumber.substr(0, 3) + ") " + cleanedNumber.substr(3, 3) + "-" + cleanedNumber.substr(6, 2) + "-" + cleanedNumber.substr(8, 2));
      } else {
        // Ограничиваем длину вводимого номера
        $inputField.val(inputValue.substr(0, 17));
      }
    }
  }).mask("+7(999) 999-99-99?9", {
    placeholder: "+7(___) ___-__-__ "
  });

  $(".js-btn").on("click", function () {
    $("#mainPopup").addClass("active");
    $("#mainPopup .popup__title").html($(this).attr("data-title"));
    $("#formTitle").val($(this).attr("data-title").replace(/<br\s*\/?>/gi, ''));
  })

  $(".popup__close").on("click", function () {
    $(".popup").removeClass("active");
    $(".popup__form").addClass("active");
    $(".popup__thx").removeClass("active");
    $("#mainPopup .popup__title").text("");
    $("#formTitle").val("");
  })

  $('.popup__overlay').on('click', function(event) {
    if (!$(event.target).closest('.popup__content').length) {
      $(".popup").removeClass("active");
      $(".popup__form").addClass("active");
      $(".popup__thx").removeClass("active");
      $("#mainPopup .popup__title").text("");
      $("#formTitle").val("");
    }
  });

  $(document).on('wpcf7mailsent', function (event) {
    $(".popup__thx").addClass("active");
    $(".popup__form").removeClass("active");
    $("#mainPopup .popup__title").text("СПАСИБО!");
    $("#formTitle").val("");
  });



  

  var ourWorksThumbnailsSwiper = new Swiper("#ourWorksThumbnailsSwiper", {
    slidesPerView: 2,
    grid: {
      rows: 3,
    },
    spaceBetween: 17,
    breakpoints: {
      992: {
        spaceBetween: 28,
      },
    },
    watchSlidesProgress: true,
  });

  var ourWorksMainSwiper = new Swiper("#ourWorksMainSwiper", {
    slidesPerView: 1,
    spaceBetween: 17,
    thumbs: {
      swiper: ourWorksThumbnailsSwiper,
    },
    navigation: {
      nextEl: ".our-works__swiper-nav .next",
      prevEl: ".our-works__swiper-nav .prev",
    },
    pagination: {
      el: ".our-works__swiper-pagination",
      clickable: true,
    },
  });

})
