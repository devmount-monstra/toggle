<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <?php echo Html::heading(__('Toggle', 'toggle'), 2); ?>
    </div>
    <div class="text-right row-phone">
        <?php echo
            Html::anchor(__('Documentation', 'toggle'), '#', array('class' => 'btn btn-phone btn-default readme-plugin', 'data-toggle' => 'modal', 'data-target' => '#modal-documentation', 'readme-plugin' => 'toggle'));
        ?>
    </div>
</div>

<?php echo
    Html::br() .
    Form::open() .
    Form::hidden('csrf', Security::token());
?>
<div class="row">
    <div class="col-md-6">
        <?php echo
            Form::label('toggle_duration', __('Slide duration [ms]', 'toggle')) .
            Form::input('toggle_duration', Option::get('toggle_duration'), array('class' => 'form-control'));
        ?>
    </div>
    <div class="col-md-6">
        <?php echo
            Form::label('toggle_easing', __('Slide easing', 'toggle')) .
            Form::select('toggle_easing', array('linear' => 'linear', 'swing' => 'swing'), Option::get('toggle_easing'), array('class' => 'form-control'));
        ?>
    </div>
</div>
<?php echo
    Html::br() .
    Form::submit('toggle_options', __('Save', 'toggle'), array('class' => 'btn btn-primary')) .
    Form::close();
?>


<!-- modal: README markup -->
<div id="modal-documentation" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="close" data-dismiss="modal">&times;</div>
                <h4 class="modal-title" id="myModalLabel">README.md</h4>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
