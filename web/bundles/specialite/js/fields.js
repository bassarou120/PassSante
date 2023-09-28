$(function() {
    $('input').each(function() {});
    $('.disabled').find(':input').attr('disabled', true);
    $('[data-validation]').find(':input').attr('class', 'unique-validate');
    /*$('.remove-input').each(function () {
        const $this = $(this);
        const parent = $this.data('parent');

        if (parent) {
            $this.find(':input').attr('disabled', true);
        }
    });*/
    //$('.row-hide').closest('.form-group').addClass('hd0').css('marginLeft', '30px');
    //
    $('[data-parent]').closest('.form-group').addClass('mleft');
    //$('.has-parent').each
    //Champ oui/non
    $('[id^="form_field"]').each(function() {
        const $this = $(this);
        $this.find('.radio').removeClass().addClass('radio-inline');
        const hasParent = $this.data('parent') ? true : false;
        /*$this.on('click', function(e) {
            e.stopImmediatePropagation();
            const $_this = $(this);
            if ($(e.target).is('input')) {
                console.log($this);
                const currentValue = $_this.val();
                const listChildren = $this.data('children');
                console.log(listChildren);
                let children = [];
                if (listChildren) {
                    children = listChildren.split(' ');
                    for (let class0 of children) {
                        let id = `#form_${class0}`;
                        let $form = $(id);
                        let parentValue = $form.data('value');
                        console.log(parentValue);
                        let $input = $form.is(':input') ? $form : $form.find(':input');
                        $input.prop('disabled', parentValue == currentValue);
                    }
                }
            }*/
    });

    function displayItems($current) {
        const currentValue = $current.val();
        
        let name = $current.attr('name');
        name = name.replace('form[', '').replace(']', '');
        let $items = $('.parent-' + name);
        $items.each(function(index, item) {
            let $item = $(item);
            let $input;
            if ($item.is('input') || $item.is('textarea')) {
                $input = $item
            } else {
                $input = $item.find(':input');
            }
            //let $input = $item.is('input') ? $item : $item.find(':input');
            let parentValue = !$item.is('input') ? $item.data('value') : $input.data('value');
            console.log(currentValue, parentValue);
            if (currentValue == parentValue) {
                $item.removeClass('disabled');
                $input.prop('disabled', false);
            } else {
                $item.addClass('disabled');
                $input.prop('disabled', true);
            }
            if ($input.hasClass('remove-input')) {
                const id = $input.attr('id');
                let $items0 = $('.parent-' + id.replace('form_', ''));
                $items0.each(function(_, item0) {
                    let $item0 = $(item0);
                    let $_input;
                    if ($item0.is('input') || $item0.is('textarea')) {
                        $_input = $item0
                    } else {
                        $_input = $item0.find(':input');
                    }
                    //let $_input = $item0.is('input') ? $item0 : $item0.find(':input');
                    if (!$input.hasClass('disabled')) {
                        //console.log('foo');
                        $item0.removeClass('disabled');
                        $_input.prop('disabled', false);
                    } else {
                        $item0.addClass('disabled');
                        $_input.prop('disabled', true);
                    }
                });
            }
            //console.log($input);
        });
    }

    function triggerRadio(_input) {
        $('input:radio').on('click', function(e) {
            const $this = $(this);
            e.stopImmediatePropagation();

            //console.log($this, $this.is(':checked'));
            if ($this.is(':checked')) {
                
                const hasValidation = $this.parent().parent().parent().data('validation');
               
                if (!_input && hasValidation) {
                    triggerValidation($this);
                }



                displayItems($this);
            }
        });

        if (_input) {
            $(_input).trigger('click');
        }
    }
    /*.trigger('click')*/
    ;
    //$this.closest('.form-group').attr('data-id', $this.attr('id'));
    /*const $this = $(this);
    if ($this.find('.radio').length <= 4) {
        
       
    }*/
    $('[data-children]').each(function() {
        $(this).closest('.form-group').addClass('is-parent')
            //.attr('data-id', $(this).attr('id'))
            .attr('data-list', $(this).data('children'))
    });
    //$('.remove-input').remove();
    $('[data-parent]').each(function() {
        const $this = $(this);
        const listParents = $this.data('parent');
        let parents = [];
        if (listParents) {
            parents = listParents.split(' ');
            parents.reverse();
            for (var i = 1; i < parents.length; i++) {
                let id = `#form_${parents[i]}`;
                let $form = $(id);
                //console.log($form);
                let $classFormDiv = $form.closest('.form-group');
                $classFormDiv.css('marginLeft', 30 * (i + 1));
            }
            $this.closest('.form-group').css('marginLeft', 30 * (i + 1));
        }
    });

    function triggerValidation($this) {
        const $formField = $this.parent().parent().parent();
        //console.log($formField);
        const parents = $formField.data('parent');
        const $formGroup = $formField.closest('.form-group');
        const $siblings = $formGroup.siblings();
        //console.log($siblings);
        $siblings.each(function() {
            const $sibling = $(this);
            const $_formField = $sibling.find('[data-validation]');
            const sibLingsParent = $_formField.data('parent');
            //console.log(sibLingsParent, parents);
            if (sibLingsParent == parents) {
                $sibling.find(':input').prop('checked', false);
                triggerRadio($sibling.find('input:radio'));
            }
        });
    }
    triggerRadio();
    /*$('[data-children]').on('click', function(e) {
        const $this = $(this);
        const isInput = $this.is(':input');
        const $input = isInput ? $this : $this.find(':input');
        
       
        if (e.target.nodeName.toLowerCase() == 'input' && e.target.checked) {
            const currentValue = $input.val();
            const childrenClass = $this.data('children');
            if (childrenClass) {
                for (const _class of childrenClass.split(' ')) {
                    const id = `#form_${_class}`;
                    let $form = $(id);
                    let parentValue = $form.data('value');
                    let $classFormDiv = $form.closest('.form-group');
                    console.log(currentValue, parentValue);
                    if (currentValue == parentValue) {
                        $classFormDiv.nextAll('.hide').removeClass('hide');
                        $classFormDiv.removeClass('hide');

                    } else {
                        $classFormDiv.addClass('hide');
                    }
                }
            }
        }
        //each(function () {
    });*/
    //$('.child-item').wrapAll('<div class="form-children">');
    //Gestion des champs des fiches de spécialité
    //
    //$('.is-parent')
});