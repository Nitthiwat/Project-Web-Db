$(document).ready(function () {
    $(".item-more").slice(0, 4).show()
    $(".loadmore").on("click", function () {
        $(".item-more:hidden").slice(0, 4).slideDown()
        if ($(".item-more:hidden").length == 0) {
            $(".loadmore").fadeOut("slow")
        }
    })
});