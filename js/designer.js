

$('#styleList').on('click', 'li', function(evt) {
    $('#styleList').trigger('collapse'); // id of clicked li by directly accessing DOMElement property
    $('#styleText .ui-btn-text').text("Select Style - " + $(evt.currentTarget).text());
    $('#styleImg').attr("src", $(evt.currentTarget).find('img').attr('src'));
});
$('#panelList').on('click', 'li', function(evt) {
    $('#panelList').trigger('collapse'); // id of clicked li by directly accessing DOMElement property
    $('#panelText .ui-btn-text').text("Select Panel - " + $(evt.currentTarget).text());
    $('#panelImg').attr("src", $(evt.currentTarget).find('img').attr('src'));
});
$('#innerList').on('click', 'li', function(evt) {
    $('#innerList').trigger('collapse'); // id of clicked li by directly accessing DOMElement property
    $('#innerText .ui-btn-text').text("Select Inner - " + $(evt.currentTarget).text());
    $('#innerImg').attr("src", $(evt.currentTarget).find('img').attr('src'));
});
$('#outerList').on('click', 'li', function(evt) {
    $('#outerList').trigger('collapse'); // id of clicked li by directly accessing DOMElement property
    $('#outerText .ui-btn-text').text("Select Outer - " + $(evt.currentTarget).text());
    $('#outerImg').attr("src", $(evt.currentTarget).find('img').attr('src'));
});
$('#speciesList').on('click', 'li', function(evt) {
    $('#speciesList').trigger('collapse'); // id of clicked li by directly accessing DOMElement property
    $('#speciesText .ui-btn-text').text("Select Species - " + $(evt.currentTarget).text());
    $('#speciesImg').attr("src", $(evt.currentTarget).find('img').attr('src'));
});