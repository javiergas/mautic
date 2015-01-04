<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<li class="dropdown dropdown-custom" id="notificationsDropdown">
    <a href="javascript: void(0);" onclick="Mautic.markNotificationsRead();" class="dropdown-toggle" data-toggle="dropdown">
        <?php $hideClass = (!empty($updateMessage) || !empty($showNewIndicator)) ? '' : ' hide'; ?>
        <span class="label label-danger<?php echo $hideClass; ?>" id="newNotificationIndicator"><i class="fa fa-asterisk"></i></span>
        <span class="fa fa-bell fs-16"></span>
    </a>
    <div class="dropdown-menu">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    <h6 class="fw-sb"><?php echo $view['translator']->trans('mautic.core.notifications'); ?>
                        <a href="javascript:void(0);" class="btn btn-default btn-xs btn-nospin pull-right do-not-close text-danger" data-toggle="tooltip" title="<?php echo $view['translator']->trans('mautic.core.notifications.clearall'); ?>" onclick="Mautic.clearNotification(0);"><i class="fa fa-times do-not-close"></i></a>
                    </h6>
                </div>
            </div>
            <div class="pt-0 pb-xs pl-0 pr-0">
                <div class="scroll-content slimscroll" style="height:250px;" id="notifications">
                    <?php if (!empty($updateMessage)) : ?>
                    <div class="media pt-sm pb-sm pr-md pl-md nm bdr-b alert-mautic">
                        <h4 class="pull-left"><?php echo $updateMessage; ?></h4>
                        <div class="pull-right">
                            <a class="btn btn-danger" href="<?php echo $view['router']->generate('mautic_core_update'); ?>" data-toggle="ajax"><?php echo $view['translator']->trans('mautic.core.update.now'); ?></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php endif; ?>
                    <?php foreach ($notifications as $n): ?>
                        <?php echo $view->render('MauticCoreBundle:Notification:notification.html.php', array('n' => $n)); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</li>