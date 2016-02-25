/* global $ */
if (typeof $.monstra == 'undefined') $.monstra = {};

$.monstra.toggle = {

    /* initialize document ready functions */
	init: function(){
        // modal: readme greybox script
        $('.readme-plugin').click(function() {
            $.ajax({
                type:'post',
                data:'readme_plugin='+$(this).attr('readme-plugin'),
                success: function(data){
                    $('#modal-documentation .modal-body').html(data);
                }
            });
        });

    }

};

// call init
$(document).ready(function(){
	$.monstra.toggle.init();
});