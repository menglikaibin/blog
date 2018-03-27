(function() {
    var scripts = document.getElementsByTagName('script');
    var currentScript = scripts[0];
    var code = src.substr(src.length-32);
    var size = src.substr(src.length-33, 1);
    var host = currentScript.getAttribute('host');
    var path = currentScript.getAttribute('path');
    var objectId = currentScript.getAttribute('objectId');

    ajax({
        url: host+path+"/site/identity-pic?identityCode="+code+"&size"+size,
        type: "GET",
        dataType: "json",
        success: function (response, xml){
            setPic(response);
        },
        fail: function (status) {

        }
    });
})