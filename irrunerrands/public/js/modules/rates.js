if (typeof IRE === 'undefined') {
    throw new Error('IRE module required');
}

IRE = (function (module, $) {



    //var rate_sel = '<?php echo $this->rate ?>';
    var accordionElementId = '#IRE-rates-acc';
    var accordion_headers_class_name = '.IRE-acc-header-title';
    var accordion_sections_names = [];
    var accordion_selected_section_num = 0;


    /**
     * Initialize accordion_sections_names
     * This will just fetch all accordion header names set them all to lower case
     * and replace all spaces with a hiffen (-)
     * 
     * @returns null
     */
    function fetchAccordionSectionNames() {
        $(accordion_headers_class_name).each(function() {
            accordion_sections_names.push(
                    properSectionName($(this).html())
            );
        });
    }

    /**
     *
     * @param string name
     * @returns string
     */
    function properSectionName(name) {
        return name.replace(/\s/g, '-')
                   .replace(/'/, '')
                   .toLowerCase();
    }

    /**
     *
     * @returns null
     */
    function setUpAccordion() {
        $(accordionElementId).accordion(
            {
                heightStyle: "content",
                collapsible: true,
                icons: false,
                animate: 500,
                active: accordion_selected_section_num
            }
        );
    }

    /**
     * Change the select accordion section if user has provided a section
     * 
     * @returns null
     */
    function checkIfUserSelectedSection() {
        if (module.rates_accordion_selected_section_name) {
            for (var i = 0, m = module.rates_accordion_selected_section_name.length; i < m; i++) {
                if (module.rates_accordion_selected_section_name == accordion_sections_names[i]) {
                    accordion_selected_section_num = i;
                    break;
                }
            }
        }
    }

    module.initRatesAccordion = function () {
        if ($.ui === 'undefined') {
            throw new Error('jQuery UI required');
        }

        fetchAccordionSectionNames();
        checkIfUserSelectedSection();
        setUpAccordion();
    };

    module.rates_accordion_selected_section_name = null;

    return module;
}(IRE, jQuery));