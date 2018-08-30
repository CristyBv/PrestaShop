/* global $ */
$(document).ready(function() {
    var $searchWidget = $('#search_widget');
    var $searchBox = $searchWidget.find('input[type=text]');
    var searchURL = $searchWidget.attr('data-search-controller-url');

    $.widget('prestashop.psBlockSearchAutocomplete', $.ui.autocomplete, {
        _renderItem: function(ul, product) {
            return $("<li>")
                .append($("<div>").addClass("row")
                    .append($("<a>")
                        .append($("<span>").html(product.category_name).addClass("category").addClass('col-sm-1'))
                        .append($("<span>").html(' > ').addClass("separator").addClass('col-sm-2'))
                        .append($("<img src= '" + product.cover.small.url + "'>").addClass("imgprod").addClass('col-sm-2'))
                        .append($("<span>").html(product.name).addClass("product").addClass('col-sm-5'))
                        .append($("<span>").html(product.price).addClass("product").addClass('col-sm-2'))
                    )).appendTo(ul);
        }
    });

    $searchBox.psBlockSearchAutocomplete({
        source: function(query, response) {
            $.post(searchURL, {
                    s: query.term,
                    resultsPerPage: 10
                }, null, 'json')
                .then(function(resp) {
                    response(resp.products);
                })
                .fail(response);
        },
        select: function(event, ui) {
            var url = ui.item.url;
            window.location.href = url;
        },
    });
});