

$('#styleList').on('click', 'li', function(evt) {
    $('#styleList').trigger('collapse'); // id of clicked li by directly accessing DOMElement property
    $('#styleText .ui-btn-text').text("Select Style - " + $(evt.currentTarget).text());
});
$('#panelList').on('click', 'li', function(evt) {
    $('#panelList').trigger('collapse'); // id of clicked li by directly accessing DOMElement property
    $('#panelText .ui-btn-text').text("Select Panel - " + $(evt.currentTarget).text());
});
$('#innerList').on('click', 'li', function(evt) {
    $('#innerList').trigger('collapse'); // id of clicked li by directly accessing DOMElement property
    $('#innerText .ui-btn-text').text("Select Inner - " + $(evt.currentTarget).text());
});
$('#outerList').on('click', 'li', function(evt) {
    $('#outerList').trigger('collapse'); // id of clicked li by directly accessing DOMElement property
    $('#outerText .ui-btn-text').text("Select Outer - " + $(evt.currentTarget).text());
});
$('#speciesList').on('click', 'li', function(evt) {
    $('#speciesList').trigger('collapse'); // id of clicked li by directly accessing DOMElement property

    $('#speciesText .ui-btn-text').text("Select Species - " + $(evt.currentTarget).text());
});