document.addEventListener("DOMContentLoaded", (event) => {
    $(".st1").click(function () {
        $(".quien").prop("checked", true);
    })
    $(".st2").click(function () {
        $(".input-mision").prop("checked", true);
    })
    $(".st3").click(function () {
        $(".vision").prop("checked", true);
    })
    $(".st4").click(function () {
        $(".input-valores").prop("checked", true);
    })
    $(".st5").click(function () {
        $(".reubicacion").prop("checked", true);
    })
    $("ul li").click(function () {
        $(this).addClass("activo").siblings().removeClass("activo");
    })


});


Fancybox.bind("[data-fancybox]", {
});


