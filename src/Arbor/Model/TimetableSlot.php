<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class TimetableSlot extends ModelBase
{
    const ACADEMIC_YEAR = 'academicYear';

    const TIMETABLED_OBJECT = 'timetabledObject';

    const DAY_OF_CYCLE = 'dayOfCycle';

    const DAY_OF_WEEK = 'dayOfWeek';

    const TERM_TIME_ONLY = 'termTimeOnly';

    const START_TIME = 'startTime';

    const END_TIME = 'endTime';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const FREQUENCY = 'frequency';

    const STATUS = 'status';

    protected $_resourceType = ResourceType::TIMETABLE_SLOT;

    /**
     * @param Query $query
     * @return TimetableSlot[] | Collection
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

        $query->setResourceType(ResourceType::TIMETABLE_SLOT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TimetableSlot
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TIMETABLE_SLOT, $id);
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
    public function getTimetabledObject()
    {
        return $this->getProperty('timetabledObject');
    }

    /**
     * @param ModelBase $timetabledObject
     */
    public function setTimetabledObject(ModelBase $timetabledObject = null)
    {
        $this->setProperty('timetabledObject', $timetabledObject);
    }

    /**
     * @return int
     */
    public function getDayOfCycle()
    {
        return $this->getProperty('dayOfCycle');
    }

    /**
     * @param int $dayOfCycle
     */
    public function setDayOfCycle($dayOfCycle = null)
    {
        $this->setProperty('dayOfCycle', $dayOfCycle);
    }

    /**
     * @return int
     */
    public function getDayOfWeek()
    {
        return $this->getProperty('dayOfWeek');
    }

    /**
     * @param int $dayOfWeek
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        $this->setProperty('dayOfWeek', $dayOfWeek);
    }

    /**
     * @return bool
     */
    public function getTermTimeOnly()
    {
        return $this->getProperty('termTimeOnly');
    }

    /**
     * @param bool $termTimeOnly
     */
    public function setTermTimeOnly($termTimeOnly = null)
    {
        $this->setProperty('termTimeOnly', $termTimeOnly);
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->getProperty('startTime');
    }

    /**
     * @param string $startTime
     */
    public function setStartTime($startTime = null)
    {
        $this->setProperty('startTime', $startTime);
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->getProperty('endTime');
    }

    /**
     * @param string $endTime
     */
    public function setEndTime($endTime = null)
    {
        $this->setProperty('endTime', $endTime);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getFrequency()
    {
        return $this->getProperty('frequency');
    }

    /**
     * @param string $frequency
     */
    public function setFrequency($frequency = null)
    {
        $this->setProperty('frequency', $frequency);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus($status = null)
    {
        $this->setProperty('status', $status);
    }
}
