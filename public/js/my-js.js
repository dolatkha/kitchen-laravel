$(document).ready(function () {
    $("a:not([href])").click(function () {
        event.preventDefault();
        event.stopPropagation();
        all = $('.casecademenu ul');
        prnt = $(this).parentsUntil(' ul.casecademenu');
        th = $(this).next();
        prnt.push(th[0]);
        for (i = 0; i < all.length; i++) {
            found = false;
            for (j = 0; j < prnt.length; j++) {
                if (all[i] == prnt[j]) {
                    found = true;
                }
            }
            if (found == false) {
                $(all[i]).slideUp();
            }
        }
        $(this).next().slideToggle('slow');
    });
});

var swiper = new Swiper(".swiper1", {
    spaceBetween: 30,
    centeredSlides: true,
    effect: "fade",
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".swiper2", {

    scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
    },
});


$(document).ready(function (){
    $('#imgwork').hide();
    $('#imgcapab').hide();
    $('#txtwork').hide();
    $('#txtcapb').hide();
    $('#inter').addClass('activeintro');
    $('#inter').click(function (){
        $('#inter').addClass('activeintro');
        $('#inter').siblings().removeClass('activeintro');
        $('#imginter').show();
        $('#imginter').siblings().hide();
        $('#txtinter').show();
        $('#txtinter').siblings().hide();
    })
    $('#capab').click(function (){
        $('#capab').addClass('activeintro');
        $('#capab').siblings().removeClass('activeintro');
        $('#imgcapab').show();
        $('#imgcapab').siblings().hide();
        $('#txtcapb').show();
        $('#txtcapb').siblings().hide();
    })
    $('#work').click(function (){
        $('#work').addClass('activeintro');
        $('#work').siblings().removeClass('activeintro');
        $('#imgwork').show();
        $('#imgwork').siblings().hide();
        $('#txtwork').show();
        $('#txtwork').siblings().hide();
    })
})

