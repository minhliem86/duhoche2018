function HidePreLoader(loadingID) {
    $(window).load(function () {
        setInterval(function () {
            $("#" + loadingID).fadeOut();
        }, 4000)

    })
}