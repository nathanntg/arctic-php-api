<?php

namespace Arctic\Model\Person;

use Arctic\Model;

/**
 * Class Person
 * @property int $id
 * @property string $namefirst
 * @property string $namelast
 * @property string $namecompany
 * @property bool $iscustomer
 * @property bool $isuser
 * @property bool $isguide
 * @property bool $isbookingagent
 * @property bool $isvendor
 * @property string $customersource
 * @property string $gender
 * @property string $birthday
 * @property int $dependentofpersonid
 * @property string $createdon
 * @property string $modifiedon
 * @property EmailAddress[] $emailaddresses
 * @property Address[] $addresses
 * @property PhoneNumber[] $phonenumbers
 * @property Note[] $notes
 */
class Person extends Model
{
	public static function getApiPath() {
		return 'person';
	}

	public function __construct() {
		parent::__construct();

		$this->_addMultipleReference('emailaddresses', __NAMESPACE__ . '\EmailAddress', 'emailaddress', array( 'id' => 'personid' ) );
		$this->_addMultipleReference('addresses', __NAMESPACE__ . '\Address', 'address' , array( 'id' => 'personid' ) );
		$this->_addMultipleReference('phonenumbers', __NAMESPACE__ . '\PhoneNumber', 'phonenumber' , array( 'id' => 'personid' ) );
		$this->_addMultipleReference('notes', __NAMESPACE__ . '\Note', 'note', array( 'id' => 'personid' ) );
	}
}
