<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Company extends ModelBase
{

    const NAME = 'name';

    const SHORT_NAME = 'shortName';

    const REGISTRATION_NUMBER = 'registrationNumber';

    const VAT_IDENTIFICATION_NUMBER = 'vatIdentificationNumber';

    protected $_resourceType = ResourceType::COMPANY;

    /**
     * @param Query $query
     * @return Company[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::COMPANY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Company
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::COMPANY, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->getProperty('registrationNumber');
    }

    /**
     * @param string $registrationNumber
     */
    public function setRegistrationNumber($registrationNumber = null)
    {
        $this->setProperty('registrationNumber', $registrationNumber);
    }

    /**
     * @return string
     */
    public function getVatIdentificationNumber()
    {
        return $this->getProperty('vatIdentificationNumber');
    }

    /**
     * @param string $vatIdentificationNumber
     */
    public function setVatIdentificationNumber($vatIdentificationNumber = null)
    {
        $this->setProperty('vatIdentificationNumber', $vatIdentificationNumber);
    }


}
