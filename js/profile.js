$(".modify-course").on("click", function () {
    $('.save-course').show();
    $('.modify-course').hide();
    var id = $(this)[0].id;
    var ret = id.split("_");
    var courseId = ret[1];
    var courseItem = $("." + courseId + "Item");
    courseItem.find('.itemLabel').hide();
    courseItem.find('.itemInput').show().focus();
});

$(".save-course").on("click", function () {
    $('.modify-course').show();
    $('.save-course').hide();
    var id = $(this)[0].id;
    var ret = id.split("_");
    var courseId = ret[1];
    var courseItem = $("." + courseId + "Item");
    courseItem.find('.itemInput').hide();
    courseItem.find('.itemLabel').show().focus();
    //ajax call to save data
});


function logout() {
    $.ajax({
        method: "POST",
        url: "./php/controller/accountCon.php",
        data: {action: 0},
        success: function (result) {
            if (result == "true") {

                location.reload();

            }
        }
    });
}