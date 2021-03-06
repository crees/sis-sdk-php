<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class HearingTest extends ModelBase
{
    const STUDENT = 'student';

    const TEST_DATE = 'testDate';

    const NOTES = 'notes';

    protected $_resourceType = ResourceType::HEARING_TEST;

    /**
     * @param Query $query
     * @return HearingTest[] | Collection
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

        $query->setResourceType(ResourceType::HEARING_TEST);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return HearingTest
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::HEARING_TEST, $id);
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
     * @return \DateTime
     */
    public function getTestDate()
    {
        return $this->getProperty('testDate');
    }

    /**
     * @param \DateTime $testDate
     */
    public function setTestDate(\DateTime $testDate = null)
    {
        $this->setProperty('testDate', $testDate);
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->getProperty('notes');
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes = null)
    {
        $this->setProperty('notes', $notes);
    }
}
