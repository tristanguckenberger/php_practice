jQuery(window).on("load", function() {

    var doc = document.getElementsByClassName("doc__text-editor");
    console.log(doc);
    doc.item(0).contentEditable = "true";
    //doc.focus();


});






// if (!id) {
//     location.search = location.search
//         ? '&id=' + getUniqueId() : 'id=' + getUniqueId();
//     return;
// }