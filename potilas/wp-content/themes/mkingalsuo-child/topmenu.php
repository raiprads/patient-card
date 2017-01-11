<?php
    $current_user = wp_get_current_user();
    /**
     * @example Safe usage: $current_user = wp_get_current_user();
     * if ( !($current_user instanceof WP_User) )
     *     return;
     */
?>

<ul class="nav navbar-right top-nav">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $current_user->user_login; ?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="<?php echo get_edit_user_link(); ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>
            <!-- <li>
                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
            </li> -->
            <li class="divider"></li>
            <li>
                <a href="<?php echo wp_logout_url(); ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
        </ul>
    </li>
</ul>