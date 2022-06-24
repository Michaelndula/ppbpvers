<?php echo '<?xml version="1.0" encoding="UTF-8"?>';
echo "\n"; ?>
<!DOCTYPE ichicsr SYSTEM "http://eudravigilance.ema.europa.eu/dtd/icsr21xml.dtd">
<ichicsr lang="en">
    <safetyreportid>KE-PPB-<?php echo $aefi['Aefi']['reference_no']; ?></safetyreportid>
    <primarysourcecountry>KE</primarysourcecountry>
    <occurcountry>KE</occurcountry>
    <transmissiondateformat>102</transmissiondateformat>
    <transmissiondate><?php echo date('YmdHis'); ?></transmissiondate>
    <reporttype>1</reporttype>
    <seriousnessdeath><?php echo ($aefi['Aefi']['serious_yes'] == 'Death') ? 1 : 0; ?></seriousnessdeath>
    <seriousnesslifethreatening><?php echo ($aefi['Aefi']['serious_yes'] == 'Life threatening') ? 1 : 0; ?></seriousnesslifethreatening>
    <seriousnesshospitalization><?php echo ($aefi['Aefi']['serious_yes'] == 'Missing cost or prolonged hospitalization') ? 1 : 0; ?></seriousnesshospitalization>
    <seriousnessdisabling><?php echo ($aefi['Aefi']['serious_yes'] == 'Persistent or significant disability') ? 1 : 0; ?></seriousnessdisabling>
    <seriousnesscongenitalanomali><?php echo ($aefi['Aefi']['serious_yes'] == 'Congenital anomaly') ? 1 : 0; ?></seriousnesscongenitalanomali>
    <seriousnessother><?php echo ($aefi['Aefi']['serious_yes'] == 'Other important medical event') ? 1 : 0; ?></seriousnessother>
    <receivedateformat>102</receivedateformat>
    <receivedate><?php echo date('Ymd', strtotime($aefi['Aefi']['created'])); ?></receivedate>
    <receiptdateformat>102</receiptdateformat>
    <receiptdate><?php echo date('Ymd', strtotime($aefi['Aefi']['created'])); ?></receiptdate>
    <fulfillexpeditecriteria><?php if ($aefi['Aefi']['serious_yes'] == 'Death') {
                                    echo 1;
                                } else {
                                    echo 2;
                                }
                                ?></fulfillexpeditecriteria>
    <authoritynumb>KE-PPB-<?php echo $aefi['Aefi']['reference_no']; ?></authoritynumb>
    <companynumb></companynumb>
    <duplicate></duplicate>
    <casenullification></casenullification>
    <nullificationreason></nullificationreason>
    <medicallyconfirm> <?php if (!in_array($aefi['Aefi']['designation_id'], [26, 27])) {
                            echo 1;
                        } else {
                            echo 2;
                        }
                        ?></medicallyconfirm>
    <patientinitial><?php echo $aefi['Aefi']['patient_name']; ?></patientinitial>
    <patientgpmedicalrecordnumb><?php echo $aefi['Aefi']['ip_no']; ?></patientgpmedicalrecordnumb>
    <?php
    if (!empty($aefi['Aefi']['date_of_birth'])) {
        $birthdatef = 102;
        if (empty($aefi['Aefi']['date_of_birth']['day']) && empty($aefi['Aefi']['date_of_birth']['month'])) {
            $birthdatef = 602;
        } else if (empty($aefi['Aefi']['date_of_birth']['day']) && !empty($aefi['Aefi']['date_of_birth']['month'])) {
            $birthdatef = 610;
        } else if (!empty($aefi['Aefi']['date_of_birth']['day']) && empty($aefi['Aefi']['date_of_birth']['month'])) {
            $birthdatef = 602;
        }
        echo '<patientbirthdateformat>' . $birthdatef . '</patientbirthdateformat>';
        echo "\n";
    } else {
        echo '<patientbirthdateformat/>';
        echo "\n";
    }

    if (isset($birthdatef)) {
        echo '<patientbirthdate>';
        if ($birthdatef == 102) echo date('Ymd', strtotime(implode('-', $aefi['Aefi']['date_of_birth'])));
        if ($birthdatef == 602) echo $aefi['Aefi']['date_of_birth']['year'];
        if ($birthdatef == 610) echo $aefi['Aefi']['date_of_birth']['year'] . $aefi['Aefi']['date_of_birth']['month'];
        echo '</patientbirthdate>';
        echo "\n";
    } else {
        echo '<patientbirthdate/>';
        echo "\n";
    }
    ?>

    <?php
    if (!empty($aefi['Aefi']['age_months'])) {
        echo "<patientonsetage>" . $aefi['Aefi']['age_months'] . "</patientonsetage>";
        echo "<patientonsetageunit>802</patientonsetageunit>";
    } else {
        echo "<patientonsetage/>";
        echo "<patientonsetageunit/>";
    }
    ?>
    <gestationperiod/>
    <gestationperiodunit/>
    <patientagegroup/>
    <patientweight/>
    <patientheight/>
    <patientsex>
        <?php if ($aefi['Aefi']['gender'] == 'Male') echo 1;
        elseif ($aefi['Aefi']['gender'] == 'Female') echo 2;
        ?>
    </patientsex>
    <lastmenstrualdateformat/>
    <patientlastmenstrualdate/>
    <patientmedicalhistorytext><?php echo $aefi['Aefi']['medical_history']; ?></patientmedicalhistorytext>
    <resultstestsprocedures></resultstestsprocedures>
    <?php
    if (!empty($aefi['Aefi']['guardian_name'])) {
    
        echo "<parentidentification>" . $aefi['Aefi']['guardian_name'] . "</parentidentification>";
    }else{
        echo "<parentidentification/>";
    }
    ?> 
    <parentage/>
    <parentageunit/>
    <parentlastmenstrualdateformat/>
    <parentlastmenstrualdate/>
    <parentweight/>
    <parentheight/>
    <parentsex/>
    <parentmedicalrelevanttext/>
    <narrativeincludeclinical><?php echo $aefi['Aefi']['description_of_reaction']; ?></narrativeincludeclinical>
    <reportercomment/>
    <sendercomment/>
    <patientdeathdateformat/>
    <patientdeathdate/>
    <patientautopsyyesno/>
    <messagetype>ichicsr</messagetype>
    <messagenumb>KE-PPB-<?php echo date('Y') . '-' . $aefi['Aefi']['id']; ?></messagenumb>
    <canSaveDraft>1</canSaveDraft>
    <susarEditable>1</susarEditable>
    <spontaneousEditable>1</spontaneousEditable>

    <?php 
    $i = 0;
    $reaction=array('only'=>'reaction','dummy'=>'data');
    foreach ($reaction as $num) :?>
   
  <reaction>

        <id><?php echo $i++; ?></id>
        <primarysourcereaction> <?php
                                if ($aefi['Aefi']['local_reaction']) echo 'Severe, ';
                                if ($aefi['Aefi']['convulsion']) echo 'Seizures, ';
                                if ($aefi['Aefi']['abscess']) echo 'Abscess, ';
                                if ($aefi['Aefi']['bcg']) echo 'BCG Lymphadenitis, ';
                                if ($aefi['Aefi']['meningitis']) echo 'Encephalopathy, ';
                                if ($aefi['Aefi']['toxic_shock']) echo 'Toxic, ';
                                if ($aefi['Aefi']['anaphylaxis']) echo 'Anaphylaxis, ';
                                if ($aefi['Aefi']['high_fever']) echo 'Fever, ';
                                if ($aefi['Aefi']['paralysis']) echo 'Paralysis, ';
                                if ($aefi['Aefi']['urticaria']) echo 'Generalized urticaria, ';
                                ?> </primarysourcereaction>
        <reactionmeddraversionllt>23.0</reactionmeddraversionllt>
        <reactionmeddrallt><?php echo $aefi['Aefi']['aefi_symptoms']; ?></reactionmeddrallt>
        <?php

        if (!empty($aefi['Aefi']['date_aefi_started'])) {
            echo "<reactionstartdateformat>102</reactionstartdateformat>";
            echo "<reactionstartdate>" . date('Ymd', strtotime($aefi['Aefi']['date_aefi_started'])) . "</reactionstartdate>";
        } else {
            echo "<reactionstartdateformat/>
          <reactionstartdate/>";
        }

        ?>
        <reactionenddateformat></reactionenddateformat>
        <reactionenddate></reactionenddate>
        <reactionoutcome><?php
                            $outcomes =  [
                                'Recovered/Resolved' => 1,
                                'Recovering/Resolving' => 2,
                                'Recovered/Resolved with sequelae' => 3,
                                'Not recovered/Not resolved/Ongoing' => 4,
                                'Fatal' => 5,
                                'Unknown' => 6
                            ];
                            if (!empty($aefi['Aefi']['outcome']) && isset($outcomes[$aefi['Aefi']['outcome']])) echo $outcomes[$aefi['Aefi']['outcome']];
                            ?></reactionoutcome>
    </reaction>
 

    <?php 
     

   
endforeach; ?>
    <?php
    $reporter=array('only'=>'reporter','dummy'=>'data');
    $i = 0;
    foreach ($reporter as $num) : ?>
   
     <primarysource>
        <id><?php echo 1; ?></id>
        <reportertitle></reportertitle>
        <?php $arr = preg_split("/[\s]+/", $aefi['Aefi']['reporter_name']); ?>
        <reportergivename><?php if (isset($arr[0])) echo $arr[0]; ?></reportergivename>
        <reporterfamilyname><?php if (isset($arr[1])) echo $arr[1] . ' ';
                            if (isset($arr[2])) echo $arr[2];  ?></reporterfamilyname>
        <reporterorganization><?php echo $aefi['Aefi']['name_of_institution']; ?></reporterorganization>
        <reporterstreet></reporterstreet>
        <reportercity></reportercity>
        <reporterstate></reporterstate>
        <reporterpostcode></reporterpostcode>
        <reportercountry>KE</reportercountry>
        <qualification><?php echo $aefi['Designation']['category']; ?></qualification>
        <literaturereference></literaturereference>
        <studyname></studyname>
        <sponsorstudynumb></sponsorstudynumb>
        <observestudytype></observestudytype>
    </primarysource>  
     
    <?php endforeach; ?>

  <?php
    $i = 0;
    foreach ($aefi['AefiListOfVaccine'] as $num => $listOfVaccine) : ?>
        <drug>

            <id><?php echo $i++; ?></id>
            <drugcharacterization><?php if ($num == 0) echo 1;
                                    else echo 2;
                                    ?></drugcharacterization>
            <medicinalproduct><?php echo $listOfVaccine['vaccine_name']; ?></medicinalproduct>
            <obtaindrugcountry></obtaindrugcountry>
            <drugbatchnumb><?php echo $listOfVaccine['batch_number']; ?></drugbatchnumb>
            <drugauthorizationnumb></drugauthorizationnumb>
            <drugauthorizationcountry></drugauthorizationcountry>
            <drugauthorizationholder></drugauthorizationholder>
            <drugstructuredosagenumb><?php echo $listOfVaccine['dosage']; ?></drugstructuredosagenumb>
            <drugstructuredosageunit></drugstructuredosageunit>
            <drugseparatedosagenumb></drugseparatedosagenumb>
            <drugintervaldosageunitnumb></drugintervaldosageunitnumb>
            <drugintervaldosagedefinition></drugintervaldosagedefinition>
            <drugcumulativedosagenumb></drugcumulativedosagenumb>
            <drugcumulativedosageunit></drugcumulativedosageunit>
            <drugdosagetext><?php echo $listOfVaccine['dosage']; ?></drugdosagetext>
            <drugdosageform></drugdosageform>
            <drugadministrationroute></drugadministrationroute>
            <drugparadministration></drugparadministration>
            <reactiongestationperiod></reactiongestationperiod>
            <reactiongestationperiodunit></reactiongestationperiodunit>
            <drugindicationmeddraversion></drugindicationmeddraversion>
            <drugindication></drugindication>
            <drugstartdateformat><?php if (!empty($listOfVaccine['vaccination_date'])) echo 102; ?></drugstartdateformat>
            <drugstartdate><?php if (!empty($listOfVaccine['vaccination_date'])) echo date('Ymd', strtotime($listOfVaccine['vaccination_date'])) ?></drugstartdate>
            <drugstartperiod></drugstartperiod>
            <drugstartperiodunit></drugstartperiodunit>
            <druglastperiod></druglastperiod>
            <druglastperiodunit></druglastperiodunit>
            <drugenddateformat></drugenddateformat>
            <drugenddate></drugenddate>
            <drugtreatmentduration></drugtreatmentduration>
            <drugtreatmentdurationunit></drugtreatmentdurationunit>
            <actiondrug></actiondrug>
            <drugrecurreadministration></drugrecurreadministration>
            <drugadditional><?php echo $listOfVaccine['diluent_batch_number']; ?></drugadditional>
            <activesubstancename><?php echo $listOfVaccine['vaccine_name']; ?></activesubstancename>
            <drugrecuraction></drugrecuraction>

        </drug>
    <?php endforeach; ?>

</ichicsr>