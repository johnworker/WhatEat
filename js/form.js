function Sendform() {
    var field1 = $("[name = 'name']").val();
    var field2 = $("[name = 'email']").val();
    var field3 = $("[name = 'msg']").val();

    $.ajax({
        url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSeJx58gTD0af0lnkQR73ko9iT3o6ZDFK6b0PWfwWwgapb1WSg/formResponse",
        data: {
            "entry.908405989": field1,
            "entry.1562783350": field2,
            "entry.988036646": field3,
        },
        type: "POST",
        dataType: "xml",
        statusCode: {
            0: function () {
                alart("完成");
            },
            200: function () {
                alart("完成");
            }
        }
    });
}   
