<?php 
foreach($viewdefs['Tasks']['base']['view']['record']['buttons'] as &$set){ 
    if( $set['type'] == 'actiondropdown' && $set['name'] == 'main_dropdown'){ 
        $set['buttons'][] = array( 
            'type' => 'divider',
            );
        $set['buttons'][] = array( 
            'type' => 'rowaction',
            'event' => 'button:audit_button:click',
            'name' => 'audit_button',
            'label' => 'LNK_VIEW_CHANGE_LOG',
            'acl_action' => 'view',
            );
    }
};
?>
