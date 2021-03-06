<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InternalExclusion extends ModelBase
{
    const STUDENT = 'student';

    const ISSUED_BY_STAFF = 'issuedByStaff';

    const INTERNAL_EXCLUSION_SESSION = 'internalExclusionSession';

    const INTERNAL_EXCLUSION_TYPE = 'internalExclusionType';

    const EXCLUSION_REASON = 'exclusionReason';

    const INTERNAL_EXCLUSION_REASON = 'internalExclusionReason';

    const ISSUED_DATETIME = 'issuedDatetime';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::INTERNAL_EXCLUSION;

    /**
     * @param Query $query
     * @return InternalExclusion[] | Collection
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

        $query->setResourceType(ResourceType::INTERNAL_EXCLUSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InternalExclusion
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTERNAL_EXCLUSION, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return Staff
     */
    public function getIssuedByStaff()
    {
        return $this->getProperty('issuedByStaff');
    }

    /**
     * @param Staff $issuedByStaff
     */
    public function setIssuedByStaff(Staff $issuedByStaff = null)
    {
        $this->setProperty('issuedByStaff', $issuedByStaff);
    }

    /**
     * @return InternalExclusionSession
     */
    public function getInternalExclusionSession()
    {
        return $this->getProperty('internalExclusionSession');
    }

    /**
     * @param InternalExclusionSession $internalExclusionSession
     */
    public function setInternalExclusionSession(InternalExclusionSession $internalExclusionSession = null)
    {
        $this->setProperty('internalExclusionSession', $internalExclusionSession);
    }

    /**
     * @return InternalExclusionType
     */
    public function getInternalExclusionType()
    {
        return $this->getProperty('internalExclusionType');
    }

    /**
     * @param InternalExclusionType $internalExclusionType
     */
    public function setInternalExclusionType(InternalExclusionType $internalExclusionType = null)
    {
        $this->setProperty('internalExclusionType', $internalExclusionType);
    }

    /**
     * @return ExclusionReason
     */
    public function getExclusionReason()
    {
        return $this->getProperty('exclusionReason');
    }

    /**
     * @param ExclusionReason $exclusionReason
     */
    public function setExclusionReason(ExclusionReason $exclusionReason = null)
    {
        $this->setProperty('exclusionReason', $exclusionReason);
    }

    /**
     * @return InternalExclusionReason
     */
    public function getInternalExclusionReason()
    {
        return $this->getProperty('internalExclusionReason');
    }

    /**
     * @param InternalExclusionReason $internalExclusionReason
     */
    public function setInternalExclusionReason(InternalExclusionReason $internalExclusionReason = null)
    {
        $this->setProperty('internalExclusionReason', $internalExclusionReason);
    }

    /**
     * @return \DateTime
     */
    public function getIssuedDatetime()
    {
        return $this->getProperty('issuedDatetime');
    }

    /**
     * @param \DateTime $issuedDatetime
     */
    public function setIssuedDatetime(\DateTime $issuedDatetime = null)
    {
        $this->setProperty('issuedDatetime', $issuedDatetime);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty('narrative');
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }
}
