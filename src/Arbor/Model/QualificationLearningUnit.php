<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationLearningUnit extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const QUALIFICATION_SCHEME = 'qualificationScheme';

    const AWARDING_ORGANIZATION = 'awardingOrganization';

    const QUALIFICATION_LEARNING_UNIT_LEVEL = 'qualificationLearningUnitLevel';

    const LEARNING_UNIT_IDENTIFIER = 'learningUnitIdentifier';

    const TITLE = 'title';

    const IS_LINEAR_QUALIFICATION = 'isLinearQualification';

    protected $_resourceType = ResourceType::QUALIFICATION_LEARNING_UNIT;

    /**
     * @param Query $query
     * @return QualificationLearningUnit[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_LEARNING_UNIT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationLearningUnit
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_LEARNING_UNIT, $id);
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
     * @return QualificationScheme
     */
    public function getQualificationScheme()
    {
        return $this->getProperty('qualificationScheme');
    }

    /**
     * @param QualificationScheme $qualificationScheme
     */
    public function setQualificationScheme(QualificationScheme $qualificationScheme = null)
    {
        $this->setProperty('qualificationScheme', $qualificationScheme);
    }

    /**
     * @return AwardingOrganization
     */
    public function getAwardingOrganization()
    {
        return $this->getProperty('awardingOrganization');
    }

    /**
     * @param AwardingOrganization $awardingOrganization
     */
    public function setAwardingOrganization(AwardingOrganization $awardingOrganization = null)
    {
        $this->setProperty('awardingOrganization', $awardingOrganization);
    }

    /**
     * @return QualificationLearningUnitLevel
     */
    public function getQualificationLearningUnitLevel()
    {
        return $this->getProperty('qualificationLearningUnitLevel');
    }

    /**
     * @param QualificationLearningUnitLevel $qualificationLearningUnitLevel
     */
    public function setQualificationLearningUnitLevel(QualificationLearningUnitLevel $qualificationLearningUnitLevel = null)
    {
        $this->setProperty('qualificationLearningUnitLevel', $qualificationLearningUnitLevel);
    }

    /**
     * @return string
     */
    public function getLearningUnitIdentifier()
    {
        return $this->getProperty('learningUnitIdentifier');
    }

    /**
     * @param string $learningUnitIdentifier
     */
    public function setLearningUnitIdentifier($learningUnitIdentifier = null)
    {
        $this->setProperty('learningUnitIdentifier', $learningUnitIdentifier);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param string $title
     */
    public function setTitle($title = null)
    {
        $this->setProperty('title', $title);
    }

    /**
     * @return bool
     */
    public function getIsLinearQualification()
    {
        return $this->getProperty('isLinearQualification');
    }

    /**
     * @param bool $isLinearQualification
     */
    public function setIsLinearQualification($isLinearQualification = null)
    {
        $this->setProperty('isLinearQualification', $isLinearQualification);
    }
}
