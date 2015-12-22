<h2><?php echo __('Guestbook', 'guestbook'); ?></h2>
<br />
<?php if(Notification::get('success')) Alert::success(Notification::get('success')); ?>
<!-- Records_list -->
<table class="table table-bordered">
    <thead>
        <tr>
            <td><?php echo __('Message', 'guestbook'); ?></td>
            <td><?php echo __('Username', 'guestbook'); ?></td>
            <td><?php echo __('Email', 'guestbook'); ?></td>
            <td><?php echo __('Date', 'guestbook'); ?></td>
            <td width="15%"><?php echo __('Actions', 'guestbook'); ?></td>
        </tr>
    </thead>
    <tbody>
    <?php if (count($records) > 0) foreach ($records as $record) { ?>
    <tr>
        <td><?php echo Html::toText($record['message']); ?></td>
        <td><?php echo Html::toText($record['username']); ?></td>
        <td><?php echo Html::toText($record['email']); ?></td>
        <td><?php echo Date::format($record['date']); ?></td>
        <td>
            <?php echo Html::anchor(__('Delete', 'guestbook'),
                      'index.php?id=guestbook&action=delete_record&record_id='.$record['id'].'&token='.Security::token(),
                       array('class' => 'btn btn-actions', 'onclick' => "return confirmDelete('".__('Delete record', 'guestbook')."')"));
            ?>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>
<!-- /Records_list -->