<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CandidateRegistration extends ModelBase
{
    const CANDIDATE = 'candidate';

    const QUALIFICATION_AWARD = 'qualificationAward';

    const QUALIFICATION_AVAILABILITY_INSTANCE = 'qualificationAvailabilityInstance';

    const ENTRY_STATUS = 'entryStatus';

    const WITHDRAWAL_STATUS = 'withdrawalStatus';

    protected $_resourceType = ResourceType::CANDIDATE_REGISTRATION;

    /**
     * @param Query $query
     * @return CandidateRegistration[] | Collection
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

        $query->setResourceType(ResourceType::CANDIDATE_REGISTRATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CandidateRegistration
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CANDIDATE_REGISTRATION, $id);
    }

    /**
     * @return Candidate
     */
    public function getCandidate()
    {
        return $this->getProperty('candidate');
    }

    /**
     * @param Candidate $candidate
     */
    public function setCandidate(Candidate $candidate = null)
    {
        $this->setProperty('candidate', $candidate);
    }

    /**
     * @return QualificationAward
     */
    public function getQualificationAward()
    {
        return $this->getProperty('qualificationAward');
    }

    /**
     * @param QualificationAward $qualificationAward
     */
    public function setQualificationAward(QualificationAward $qualificationAward = null)
    {
        $this->setProperty('qualificationAward', $qualificationAward);
    }

    /**
     * @return QualificationAvailabilityInstance
     */
    public function getQualificationAvailabilityInstance()
    {
        return $this->getProperty('qualificationAvailabilityInstance');
    }

    /**
     * @param QualificationAvailabilityInstance $qualificationAvailabilityInstance
     */
    public function setQualificationAvailabilityInstance(QualificationAvailabilityInstance $qualificationAvailabilityInstance = null)
    {
        $this->setProperty('qualificationAvailabilityInstance', $qualificationAvailabilityInstance);
    }

    /**
     * @return string
     */
    public function getEntryStatus()
    {
        return $this->getProperty('entryStatus');
    }

    /**
     * @param string $entryStatus
     */
    public function setEntryStatus($entryStatus = null)
    {
        $this->setProperty('entryStatus', $entryStatus);
    }

    /**
     * @return string
     */
    public function getWithdrawalStatus()
    {
        return $this->getProperty('withdrawalStatus');
    }

    /**
     * @param string $withdrawalStatus
     */
    public function setWithdrawalStatus($withdrawalStatus = null)
    {
        $this->setProperty('withdrawalStatus', $withdrawalStatus);
    }
}
