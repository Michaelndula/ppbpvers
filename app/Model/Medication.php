<?php
App::uses('AppModel', 'Model');
/**
 * Medication Model
 *
 * @property User $User
 * @property County $County
 * @property Designation $Designation
 */
class Medication extends AppModel {

	public $actsAs = array('Search.Searchable');

	public $filterArgs = array(
        'reference_no' => array('type' => 'like', 'encode' => true),
        'generic_name_i' => array('type' => 'query', 'method' => 'findByGenericName', 'encode' => true),
        'name_of_institution' => array('type' => 'like', 'encode' => true),
        'reach_patient' => array('type' => 'like', 'encode' => true),
        'range' => array('type' => 'expression', 'method' => 'makeRangeCondition', 'field' => 'Medication.created BETWEEN ? AND ?'),
        'start_date' => array('type' => 'query', 'method' => 'dummy'),
        'end_date' => array('type' => 'query', 'method' => 'dummy'),
        'county_id' => array('type' => 'value'),
        'process_occur' => array('type' => 'value'),
        'outcome' => array('type' => 'value'),
        'error_cause_inexperience' => array('type' => 'value'),
        'error_cause_knowledge' => array('type' => 'value'),
        'error_cause_distraction' => array('type' => 'value'),
        'error_cause_sound' => array('type' => 'value'),
        'error_cause_medication' => array('type' => 'value'),
        'error_cause_workload' => array('type' => 'value'),
        'error_cause_peak' => array('type' => 'value'),
        'error_cause_stock' => array('type' => 'value'),
        'error_cause_procedure' => array('type' => 'value'),
        'error_cause_abbreviations' => array('type' => 'value'),
        'error_cause_illegible' => array('type' => 'value'),
        'error_cause_inaccurate' => array('type' => 'value'),
        'error_cause_labelling' => array('type' => 'value'),
        'error_cause_computer' => array('type' => 'value'),
        'error_cause_other' => array('type' => 'value'),
        'generic_name_ii' => array('type' => 'query', 'method' => 'findByGenericNameII', 'encode' => true),
        'patient_name' => array('type' => 'like', 'encode' => true),
        'reporter' => array('type' => 'query', 'method' => 'reporterFilter', 'encode' => true),
        'designation_id' => array('type' => 'value'),
        'gender' => array('type' => 'value'),
        'submit' => array('type' => 'query', 'method' => 'orConditions', 'encode' => true),
    );

    public function dummy($data = array()) {
    	return array( '1' => '1');
    }

    public function findByGenericName($data = array()) {
            $cond = array($this->alias.'.id' => $this->MedicationProduct->find('list', array(
                'conditions' => array(
                    'OR' => array(
                        'MedicationProduct.generic_name_i LIKE' => '%' . $data['generic_name_i'] . '%',
                        'MedicationProduct.manufacturer_i LIKE' => '%' . $data['generic_name_i'] . '%',
                        'MedicationProduct.product_name_i LIKE' => '%' . $data['generic_name_i'] . '%', )),
                'fields' => array('medication_id', 'medication_id')
                    )));
            return $cond;
    }

    public function findByGenericNameII($data = array()) {
            $cond = array($this->alias.'.id' => $this->MedicationProduct->find('list', array(
                'conditions' => array(
                    'OR' => array(
                        'MedicationProduct.generic_name_ii LIKE' => '%' . $data['generic_name_ii'] . '%',
                        'MedicationProduct.manufacturer_ii LIKE' => '%' . $data['generic_name_ii'] . '%',
                        'MedicationProduct.product_name_ii LIKE' => '%' . $data['generic_name_ii'] . '%', )),
                'fields' => array('medication_id', 'medication_id')
                    )));
            return $cond;
    }

    public function reporterFilter($data = array()) {
            $filter = $data['reporter'];
            $cond = array(
                'OR' => array(
                    $this->alias . '.reporter_name LIKE' => '%' . $filter . '%',
                    $this->alias . '.reporter_email LIKE' => '%' . $filter . '%',
                ));
            return $cond;
    }

  	public function orConditions($data = array()) {
            $filter = $data['submit'];
            if ($filter == '0') {
              $cond = array(
                    $this->alias . '.submitted' => array('1', '2', '3'),
                    // $this->alias . '.active' => '1'
                );
            } else {
              $cond = array(
                    $this->alias . '.submitted' => array('0', '1', '2', '3', '4', '5', '6'),
                    // $this->alias . '.active' => '1'
                );
            }
            return $cond;
        }

	public function makeRangeCondition($data = array()) {
		if(!empty($data['start_date'])) $start_date = date('Y-m-d', strtotime($data['start_date']));
		else $start_date = date('Y-m-d', strtotime('2012-05-01'));

		if(!empty($data['end_date'])) $end_date = date('Y-m-d', strtotime($data['end_date']));
		else $end_date = date('Y-m-d');

		return array($start_date, $end_date);
	}

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'County' => array(
			'className' => 'County',
			'foreignKey' => 'county_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Designation' => array(
			'className' => 'Designation',
			'foreignKey' => 'designation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(        
		'Attachment' => array(
            'className' => 'Attachment',
            'foreignKey' => 'foreign_key',
            'dependent' => true,
            'conditions' => array('Attachment.model' => 'Medication', 'Attachment.group' => 'attachment'),
      	),
		'MedicationProduct' => array(
			'className' => 'MedicationProduct',
			'foreignKey' => 'medication_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public function beforeSave($options = array()) {

		if (!empty($this->data['Medication']['time_of_event'])) {
			$this->data['Medication']['time_of_event'] = implode(':', $this->data['Medication']['time_of_event']);
		} else {
			$this->data['Medication']['time_of_event'] = '';
		}

		return true;
	}

	function afterFind($results, $primary = false) {
		foreach ($results as $key => $val) {
			if (!empty($val['Medication']['time_of_event'])) {
				if(empty($val['Medication']['time_of_event'])) $val['Medication']['time_of_event'] = ':';
				$a = explode(':', $val['Medication']['time_of_event']);
				$results[$key]['Medication']['time_of_event'] = array('hour'=> $a[0],'min'=> $a[1]);
			}
		}
		return $results;
	}
}