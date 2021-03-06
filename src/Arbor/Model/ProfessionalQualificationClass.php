<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProfessionalQualificationClass extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const PROFESSIONAL_QUALIFICATION_TYPE = 'professionalQualificationType';

    const DESCRIPTION = 'description';

    protected $_resourceType = ResourceType::PROFESSIONAL_QUALIFICATION_CLASS;

    /**
     * @param Query $query
     * @return ProfessionalQualificationClass[] | Collection
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

        $query->setResourceType(ResourceType::PROFESSIONAL_QUALIFICATION_CLASS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProfessionalQualificationClass
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROFESSIONAL_QUALIFICATION_CLASS, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return ProfessionalQualificationType
     */
    public function getProfessionalQualificationType()
    {
        return $this->getProperty('professionalQualificationType');
    }

    /**
     * @param ProfessionalQualificationType $professionalQualificationType
     */
    public function setProfessionalQualificationType(ProfessionalQualificationType $professionalQualificationType = null)
    {
        $this->setProperty('professionalQualificationType', $professionalQualificationType);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty('description', $description);
    }
}
