$(document).ready(function () {
    //  EVEN MENU RESPON
    $('html').on('click', function (event) {
        var target = $(event.target);
        var site = $('#site');

        if (target.is('#btn-respon i')) {
            if (!site.hasClass('show-respon-menu')) {
                site.addClass('show-respon-menu');
            } else {
                site.removeClass('show-respon-menu');
            }
        } else {
            $('#container').click(function () {
                if (site.hasClass('show-respon-menu')) {
                    site.removeClass('show-respon-menu');
                    return false;
                }
            });
        }
    });

    //    MENU RESPON
    $('#main-menu-respon li .sub-menu').after('<span class="fa fa-angle-right arrow"></span>');
    $('#main-menu-respon li .arrow').click(function () {
        if ($(this).parent('li').hasClass('open')) {
            $(this).parent('li').removeClass('open');
            $(this).parent('li').find('.sub-menu').slideUp();
        } else {
            $('.sub-menu').slideUp();
            $('#main-menu-respon li').removeClass('open');
            $(this).parent('li').addClass('open');
            $(this).parent('li').find('.sub-menu').slideDown();
        }
    });
    // $("ul.list-item li").click(function(){
    //     $("ul.list-item li").removeClass("active");
    //     $(this).addClass("active");
    //     return false;
    // });
});
let amountElement = document.getElementById("amount");
      let amount = amountElement.value;
      console.log(amount);
      let render = (amount) => {
        amountElement.value = amount;
      };
      //Xử lý handlePlus
      let handlePlus = () => {
        amount++;
        render(amount);
      };

      //Handle Minus
      let handleMinus = () => {
        if (amount > 1) {
          amount--;
        }
        render(amount);
      };

      amountElement.addEventListener("input", () => {
        amount = amountElement.value;
        amount = parseInt(amount);
        amount = isNaN(amount) || amount == 0 ? 1 : amount;
        render(amount);
      });