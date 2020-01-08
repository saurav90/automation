$( function() {
    $( "#sortable" ).sortable({
        stop: function (event, ui) {
            updateNames($(this))
        }
    });
    $( "#sortable" ).disableSelection();
} );
function updateNames($list) {
    $list.find('.fieldSort').each(function (idx) {
        var $inp = $(this).find('input');
        console.log($inp);
        $inp.each(function () {
            this.name = this.name.replace(/(\[\d\])/, '[' + idx + ']');
            this.id = this.id.replace(/(\[\d\])/, '[' + idx + ']');
            /* demo fn to show name as value*/
            showNameAsValue(this)
        })

    });
}
function showNameAsValue(el) {
    el.value = el.name;
}
