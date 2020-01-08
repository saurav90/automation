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
        idx = idx+1;
        console.log($inp);
        $inp.each(function () {
            this.name = this.name.replace(/(\[\d\])/, '[' + idx + ']');
            this.id = this.id.replace(/(\[\d\])/, '[' + idx + ']');
            $(this).parent().find('.col').text('Coloumn Name ' +idx);
            $(this).parent().find('.desc').text('Coloumn Description ' +idx);
            /* demo fn to show name as value*/
            showNameAsValue(this)
        })

    });
}
function showNameAsValue(el) {
    el.value = el.name;
}
var counter = 2;
function appendThing() {

    $("#sortable").append('<div class="row field-box fieldSort"><span class="fa fa-close delete">X</span> \n' +
        '                                        <div class="col-sm-6">\n' +
        '                                            <div class="form-group">\n' +
        '                                                <label for="exampleInputEmail1" class="col">Coloumn Name '+counter+'</label>\n' +
        '                                                <input type="text" class="form-control Cname" id="Cname[' + counter + ']" placeholder="Coloumn Name" name="Cname[' + counter + ']">\n' +
        '                                            </div>\n' +
        '                                        </div>\n' +
        '                                        <div class="col-sm-6">\n' +
        '                                            <div class="form-group">\n' +
        '                                                <label for="exampleInputEmail1" class="desc">Coloumn Description '+counter+'</label>\n' +
        '                                                <input type="text" class="form-control Cdesc" id="Cdesc[' + counter + ']" placeholder="Coloumn Description" name="Cdesc[' + counter + ']">\n' +
        '                                            </div>\n' +
        '                                        </div>\n' +
        '                                    </div>');

    $("#sortable").sortable({ refresh: sortable });
    counter++;
};

$(document).on('click', '.delete', function () {
    $(this).parent().remove();
    $("#sortable").sortable({ refresh: sortable });
});