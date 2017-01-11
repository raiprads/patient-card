<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-user"></i> Patients <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="<?php echo home_url(); ?>/add-new-patient/">Add New <i class="fa fa-fw fa-plus"></i></a>
                </li>
                <li>
                    <a href="#">Search <i class="fa fa-fw fa-search"></i></a>
                </li>
            </ul>
        </li>
        <li>
            <a href="tables.html"><i class="fa fa-fw fa-calendar"></i> Schedule</a>
        </li>
    </ul>
</div>