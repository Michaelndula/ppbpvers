    
    <ul class="nav nav-list sidebar-manager">
      <li class="text-center <?php echo $this->fetch('reports-home'); ?>">
        <?php
            echo $this->Html->link('REPORTS',  array('controller' => 'reports', 'action'=>'index', 'prefix' => false ), array('escape' => false, 'class' => 'text-success'));
        ?>
      </li>      
      <li class="divider"></li>
      <li class="nav-header"><i class="fa fa-ambulance" aria-hidden="true"></i> SADRs</li>
      <li class="<?php echo $this->fetch('sadrs-by-age'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Age groups',  array('controller' => 'reports', 'action'=>'sadrs_by_age', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('sadrs-by-medicine'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Suspected Medicine',  array('controller' => 'reports', 'action'=>'sadrs_by_medicine', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('sadrs-by-gender'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Gender',  array('controller' => 'reports', 'action'=>'sadrs_by_gender', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('sadrs-by-county'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> County',  array('controller' => 'reports', 'action'=>'sadrs_by_county', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('sadrs-by-month'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Month',  array('controller' => 'reports', 'action'=>'sadrs_by_month', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('sadrs-by-year'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Year',  array('controller' => 'reports', 'action'=>'sadrs_by_year', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="nav-header"><i class="fa fa-child" aria-hidden="true"></i> AEFIs</li>
      <li class="<?php echo $this->fetch('aefis-by-age'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Age groups',  array('controller' => 'reports', 'action'=>'aefis_by_age', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('aefis-by-vaccine'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> AEFIs by Vaccine',  array('controller' => 'reports', 'action'=>'aefis_by_vaccine', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('aefis-by-gender'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Gender',  array('controller' => 'reports', 'action'=>'aefis_by_gender', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('aefis-by-county'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> County',  array('controller' => 'reports', 'action'=>'aefis_by_county', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('aefis-by-month'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Month',  array('controller' => 'reports', 'action'=>'aefis_by_month', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('aefis-by-year'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Year',  array('controller' => 'reports', 'action'=>'aefis_by_year', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="nav-header"><i class="fa fa-medkit" aria-hidden="true"></i> PQMPs</li>
      <li class="<?php echo $this->fetch('pqmps-by-brand'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Brand Name',  array('controller' => 'reports', 'action'=>'pqmps_by_brand', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('pqmps-by-generic'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Generic Name',  array('controller' => 'reports', 'action'=>'pqmps_by_generic', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('pqmps-by-county'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> County',  array('controller' => 'reports', 'action'=>'pqmps_by_county', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('pqmps-by-country'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Country',  array('controller' => 'reports', 'action'=>'pqmps_by_country', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('pqmps-by-month'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Month',  array('controller' => 'reports', 'action'=>'pqmps_by_month', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('pqmps-by-year'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Year',  array('controller' => 'reports', 'action'=>'pqmps_by_year', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="nav-header"><i class="fa fa-stethoscope" aria-hidden="true"></i> Medical Devices</li>
      <li class="<?php echo $this->fetch('devices-by-age'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Age groups',  array('controller' => 'reports', 'action'=>'devices_by_age', 'admin' => false ),
                      array('escape' => false));
        ?>                          
      </li>
      <li class="<?php echo $this->fetch('devices-by-brand'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Devices by Brand',  array('controller' => 'reports', 'action'=>'devices_by_brand', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('devices-by-gender'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Gender',  array('controller' => 'reports', 'action'=>'devices_by_gender', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('devices-by-county'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> County',  array('controller' => 'reports', 'action'=>'devices_by_county', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li><li class="<?php echo $this->fetch('devices-by-month'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Month',  array('controller' => 'reports', 'action'=>'devices_by_month', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('devices-by-year'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Year',  array('controller' => 'reports', 'action'=>'devices_by_year', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="nav-header"><i class="fa fa-chain-broken" aria-hidden="true"></i> Medication Errors</li>
      <li class="<?php echo $this->fetch('medications-by-age'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Age group',  array('controller' => 'reports', 'action'=>'medications_by_age', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('medications-by-gender'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Gender',  array('controller' => 'reports', 'action'=>'medications_by_gender', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('medications-by-producti'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Product (intended)',  array('controller' => 'reports', 'action'=>'medications_by_producti', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('medications-by-productii'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Product (error)',  array('controller' => 'reports', 'action'=>'medications_by_productii', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('medications-by-generici'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Generic (intended)',  array('controller' => 'reports', 'action'=>'medications_by_generici', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('medications-by-genericii'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Generic (error)',  array('controller' => 'reports', 'action'=>'medications_by_genericii', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('medications-by-county'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> County',  array('controller' => 'reports', 'action'=>'medications_by_county', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('medications-by-month'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Month',  array('controller' => 'reports', 'action'=>'medications_by_month', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('medications-by-year'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Year',  array('controller' => 'reports', 'action'=>'medications_by_year', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="nav-header"><i class="fa fa-eyedropper" aria-hidden="true"></i> Blood Transfusion</li>
      <li class="<?php echo $this->fetch('transfusions-by-age'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Age group',  array('controller' => 'reports', 'action'=>'transfusions_by_age', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('transfusions-by-gender'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Gender',  array('controller' => 'reports', 'action'=>'transfusions_by_gender', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('transfusions-by-county'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> County',  array('controller' => 'reports', 'action'=>'transfusions_by_county', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('transfusions-by-month'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Month',  array('controller' => 'reports', 'action'=>'transfusions_by_month', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('transfusions-by-year'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Year',  array('controller' => 'reports', 'action'=>'transfusions_by_year', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="nav-header"><i class="fa fa-thermometer-full" aria-hidden="true"></i> SAEs</li>
      <li class="<?php echo $this->fetch('saes-by-age'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Age group',  array('controller' => 'reports', 'action'=>'saes_by_age', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('saes-by-month'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Month',  array('controller' => 'reports', 'action'=>'saes_by_month', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('saes-by-year'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Year',  array('controller' => 'reports', 'action'=>'saes_by_year', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('saes-by-gender'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Gender',  array('controller' => 'reports', 'action'=>'saes_by_gender', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('saes-by-medicine'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Suspected Medicine',  array('controller' => 'reports', 'action'=>'saes_by_medicine', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('saes-by-concomittant'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Concomittant Drug',  array('controller' => 'reports', 'action'=>'saes_by_concomittant', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="divider"></li>
    </ul>