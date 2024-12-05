<?php

class Header
{

    public function render()
    {

        $notifications = array(
            array(
                'icon' => 'entypo-user-add',
                'class' => 'notification-success',
                'text' => 'New user registered',
                'time' => '30 seconds ago'
            ),
            array(
                'icon' => 'entypo-heart',
                'class' => 'notification-secondary',
                'text' => 'Someone special liked this',
                'time' => '2 minutes ago'
            ),
            array(
                'icon' => 'entypo-user',
                'class' => 'notification-primary',
                'text' => 'Privacy settings have been changed',
                'time' => '3 hours ago'
            ),
            array(
                'icon' => 'entypo-cancel-circled',
                'class' => 'notification-danger',
                'text' => 'John cancelled the event',
                'time' => '9 hours ago'
            ),
            array(
                'icon' => 'entypo-info',
                'class' => 'notification-info',
                'text' => 'The server status is stable',
                'time' => 'yesterday at 10:30am'
            ),
            array(
                'icon' => 'entypo-rss',
                'class' => 'notification-warning',
                'text' => 'New comments waiting approval',
                'time' => 'last week'
            )
        );

        $numNotifications = count($notifications);

?>
        <div class="row">

            <div class="col-md-6 col-sm-8 clearfix">

                <ul class="user-info pull-left pull-right-xs pull-none-xsm">
                    <li class="notifications dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="entypo-attention"></i>
                            <span class="badge badge-info"><?php echo $numNotifications; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="top">
                                <p class="small">
                                    <a href="#" class="pull-right">Mark all Read</a>
                                    You have <strong><?php echo $numNotifications; ?></strong> new notifications.
                                </p>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller">
                                    <?php foreach ($notifications as $notification) { ?>
                                        <li class="unread <?php echo $notification['class']; ?>">
                                            <a href="#">
                                                <i class="<?php echo $notification['icon']; ?> pull-right"></i>
                                                <span class="line"><strong><?php echo $notification['text']; ?></strong></span>
                                                <span class="line small"><?php echo $notification['time']; ?></span>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li class="external">
                                <a href="#">View all notifications</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

            <div class="col-md-6 col-sm-4 clearfix hidden-xs">
                <ul class="list-inline links-list pull-right">

                    <li class="sep"></li>

                    <li>
                        <a href="#" onclick="logout()">
                            Log Out <i class="entypo-logout right"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div><?php
            }
        }
