$(document).ready(function(){ 
    var cooky = sessionStorage.getItem('cookieAlertOnce_');
    if(!cooky){
        setTimeout(function () {
            $("#cookieConsent").fadeIn(200);
         }, 4000);
        
    }
    $("#closeCookieConsent, .cookieConsentOK").click(function() {
        $("#cookieConsent").fadeOut(200);
        sessionStorage.setItem('cookieAlertOnce_','true');
    }); 
}); 
