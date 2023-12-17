<ul class="nav" id="side-menu">
    <li class="active"><a href="<?php echo base_url() . "dashboard"; ?>" class="material-ripple"><i class="material-icons">home</i> Dashboard</a></li> 
    <li>
        <a href="#" class="material-ripple"><i class="hvr-buzz-out pe-7s-car"></i><?php echo display('vehicle'); ?><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url(); ?>vehicle/vehicle_info_list"><?php echo display('vehiclelist');?></a></li> 
        </ul>
    </li>
    <li>
        <a href="#" class="material-ripple"><i class="hvr-buzz-out fa fa-drivers-license"></i><?php echo display('driver'); ?><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url(); ?>driver_info"><?php echo display('driverlist');?></a></li>
        </ul>
    </li>

     <li>
        <a href="#" class="material-ripple"><i class="hvr-buzz-out fa fa-male"></i><?php echo display('customers'); ?><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url(); ?>company"><?php echo display('companylist') ?></a></li>
        </ul>
    </li>
    <li>
        <a href="#" class="material-ripple"><i class="hvr-buzz-out fa fa-fire-extinguisher"></i><?php echo display('fuel'); ?><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url(); ?>fule_rate"><?php echo display('fuelratelist');?></a></li>
            
            
        </ul>
    </li>
    
</ul>