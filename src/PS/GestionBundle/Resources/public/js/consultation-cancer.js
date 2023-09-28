// ------------------------ DEBUT ANALYSE CONSULTATION ---------------------------
function addSelect2($prototype, placeholder, tag) {
    var options = {
        placeholder: placeholder,
        allowClear: true,

    };


    if (tag) {
        options = $.extend(options, {
            tags: true,
            createTag: function(params) {
                var term = $.trim(params.term);

                if (term === '') {
                    return null;
                }

                return {
                    id: term,
                    text: term,
                    newTag: true // add additional parameters
                }
            }
        });
    }

    if (!$prototype.is('select')) {
        $prototype.find("select").select2(options);
    } else {
        $prototype.select2(options);
    }


}

$(document).ready(function() {

    var $select2 = $('.select');

    $('.datepicker').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_3",
        format: "DD/MM/YYYY"
    }, function(start, end, label) {
        // console.log(start.toISOString(), end.toISOString(), label);
    });

    addSelect2($select2, 'Choisir un medicament');
});