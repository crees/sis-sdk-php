<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CandidateEnrolment extends ModelBase
{

    const CANDIDATE = 'candidate';

    const ENROLMENT_NUMBER = 'enrolmentNumber';

    const ENROLMENT_REQUESTED_DATETIME = 'enrolmentRequestedDatetime';

    const ENROLMENT_CONFIRMED_DATETIME = 'enrolmentConfirmedDatetime';

    protected $_resourceType = ResourceType::CANDIDATE_ENROLMENT;

    /**
     * @param Query $query
     * @return CandidateEnrolment[] | Collection
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

        $query->setResourceType(ResourceType::CANDIDATE_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CandidateEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CANDIDATE_ENROLMENT, $id);
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
     * @return string
     */
    public function getEnrolmentNumber()
    {
        return $this->getProperty('enrolmentNumber');
    }

    /**
     * @param string $enrolmentNumber
     */
    public function setEnrolmentNumber($enrolmentNumber = null)
    {
        $this->setProperty('enrolmentNumber', $enrolmentNumber);
    }

    /**
     * @return \DateTime
     */
    public function getEnrolmentRequestedDatetime()
    {
        return $this->getProperty('enrolmentRequestedDatetime');
    }

    /**
     * @param \DateTime $enrolmentRequestedDatetime
     */
    public function setEnrolmentRequestedDatetime(\DateTime $enrolmentRequestedDatetime = null)
    {
        $this->setProperty('enrolmentRequestedDatetime', $enrolmentRequestedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEnrolmentConfirmedDatetime()
    {
        return $this->getProperty('enrolmentConfirmedDatetime');
    }

    /**
     * @param \DateTime $enrolmentConfirmedDatetime
     */
    public function setEnrolmentConfirmedDatetime(\DateTime $enrolmentConfirmedDatetime = null)
    {
        $this->setProperty('enrolmentConfirmedDatetime', $enrolmentConfirmedDatetime);
    }


}
