/* Sara Petersson - Webbdesign för CMS DT152G */

// Kollar att dokumentet är redo
$(document).ready(function() {
    /* NYHETER */
    /* Vid hovring över nyhetsbilderna sänks bildens opacitet och nyhetens rubrik syns */
	$('.news-image').hover(
        // Mouseenter: visar nyhetstext och sänker opaciteten på bilden
        function() {
            $(this).find("figcaption").show();
            $(this).find("img").css("opacity", ".2")
        },
        // Mouseout: döljer nyhetstext och höjer opaciteten
        function() {
            $(this).find("figcaption").hide();
            $(this).find("img").css("opacity", "1")
        }
    );
    // Fokus: visar nyhetstext och sänker opaciteten på bilden
    $('#news-container a').focus(function() {
        $(this).find("figcaption").show();
        $(this).find("img").css("opacity", ".2")
    });
    // Avfokuserad: döljer nyhetstext och höjer opaciteten
    $('#news-container a').focusout(function() {
            $(this).find("figcaption").hide();
            $(this).find("img").css("opacity", "1")
    });
});
