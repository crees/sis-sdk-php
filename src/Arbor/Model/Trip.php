<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Trip extends ModelBase
{
    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const LOCATION_TEXT = 'locationText';

    const LOCATION = 'location';

    const NAME = 'name';

    const DESCRIPTION = 'description';

    const ACADEMIC_YEAR = 'academicYear';

    const LINK_TO = 'linkTo';

    const COPIED_TO_TRIP = 'copiedToTrip';

    const MAX_PARTICIPANTS = 'maxParticipants';

    const REQUIRE_CONSENT = 'requireConsent';

    const GUARDIAN_SIGNUP_START_DATETIME = 'guardianSignupStartDatetime';

    const GUARDIAN_SIGNUP_END_DATETIME = 'guardianSignupEndDatetime';

    const FREE = 'free';

    const ATTENDANCE_REGISTER_TYPE = 'attendanceRegisterType';

    const ACCOUNTING_CODE = 'accountingCode';

    protected $_resourceType = ResourceType::TRIP;

    /**
     * @param Query $query
     * @return Trip[] | Collection
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

        $query->setResourceType(ResourceType::TRIP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Trip
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TRIP, $id);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }

    /**
     * @return string
     */
    public function getLocationText()
    {
        return $this->getProperty('locationText');
    }

    /**
     * @param string $locationText
     */
    public function setLocationText($locationText = null)
    {
        $this->setProperty('locationText', $locationText);
    }

    /**
     * @return ModelBase
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }

    /**
     * @param ModelBase $location
     */
    public function setLocation(ModelBase $location = null)
    {
        $this->setProperty('location', $location);
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

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return ModelBase
     */
    public function getLinkTo()
    {
        return $this->getProperty('linkTo');
    }

    /**
     * @param ModelBase $linkTo
     */
    public function setLinkTo(ModelBase $linkTo = null)
    {
        $this->setProperty('linkTo', $linkTo);
    }

    /**
     * @return Trip
     */
    public function getCopiedToTrip()
    {
        return $this->getProperty('copiedToTrip');
    }

    /**
     * @param Trip $copiedToTrip
     */
    public function setCopiedToTrip(Trip $copiedToTrip = null)
    {
        $this->setProperty('copiedToTrip', $copiedToTrip);
    }

    /**
     * @return int
     */
    public function getMaxParticipants()
    {
        return $this->getProperty('maxParticipants');
    }

    /**
     * @param int $maxParticipants
     */
    public function setMaxParticipants($maxParticipants = null)
    {
        $this->setProperty('maxParticipants', $maxParticipants);
    }

    /**
     * @return bool
     */
    public function getRequireConsent()
    {
        return $this->getProperty('requireConsent');
    }

    /**
     * @param bool $requireConsent
     */
    public function setRequireConsent($requireConsent = null)
    {
        $this->setProperty('requireConsent', $requireConsent);
    }

    /**
     * @return \DateTime
     */
    public function getGuardianSignupStartDatetime()
    {
        return $this->getProperty('guardianSignupStartDatetime');
    }

    /**
     * @param \DateTime $guardianSignupStartDatetime
     */
    public function setGuardianSignupStartDatetime(\DateTime $guardianSignupStartDatetime = null)
    {
        $this->setProperty('guardianSignupStartDatetime', $guardianSignupStartDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getGuardianSignupEndDatetime()
    {
        return $this->getProperty('guardianSignupEndDatetime');
    }

    /**
     * @param \DateTime $guardianSignupEndDatetime
     */
    public function setGuardianSignupEndDatetime(\DateTime $guardianSignupEndDatetime = null)
    {
        $this->setProperty('guardianSignupEndDatetime', $guardianSignupEndDatetime);
    }

    /**
     * @return bool
     */
    public function getFree()
    {
        return $this->getProperty('free');
    }

    /**
     * @param bool $free
     */
    public function setFree($free = null)
    {
        $this->setProperty('free', $free);
    }

    /**
     * @return AttendanceRegisterType
     */
    public function getAttendanceRegisterType()
    {
        return $this->getProperty('attendanceRegisterType');
    }

    /**
     * @param AttendanceRegisterType $attendanceRegisterType
     */
    public function setAttendanceRegisterType(AttendanceRegisterType $attendanceRegisterType = null)
    {
        $this->setProperty('attendanceRegisterType', $attendanceRegisterType);
    }

    /**
     * @return string
     */
    public function getAccountingCode()
    {
        return $this->getProperty('accountingCode');
    }

    /**
     * @param string $accountingCode
     */
    public function setAccountingCode($accountingCode = null)
    {
        $this->setProperty('accountingCode', $accountingCode);
    }
}
