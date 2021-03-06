<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentSchoolwork extends ModelBase
{
    const SCHOOLWORK = 'schoolwork';

    const STUDENT = 'student';

    const DUE_DATETIME = 'dueDatetime';

    const SUBMITTED_DATETIME = 'submittedDatetime';

    const MARKING_COMPLETED_DATETIME = 'markingCompletedDatetime';

    const NOT_SUBMITTED_DATETIME = 'notSubmittedDatetime';

    protected $_resourceType = ResourceType::STUDENT_SCHOOLWORK;

    /**
     * @param Query $query
     * @return StudentSchoolwork[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_SCHOOLWORK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentSchoolwork
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_SCHOOLWORK, $id);
    }

    /**
     * @return Schoolwork
     */
    public function getSchoolwork()
    {
        return $this->getProperty('schoolwork');
    }

    /**
     * @param Schoolwork $schoolwork
     */
    public function setSchoolwork(Schoolwork $schoolwork = null)
    {
        $this->setProperty('schoolwork', $schoolwork);
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
    public function getDueDatetime()
    {
        return $this->getProperty('dueDatetime');
    }

    /**
     * @param \DateTime $dueDatetime
     */
    public function setDueDatetime(\DateTime $dueDatetime = null)
    {
        $this->setProperty('dueDatetime', $dueDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSubmittedDatetime()
    {
        return $this->getProperty('submittedDatetime');
    }

    /**
     * @param \DateTime $submittedDatetime
     */
    public function setSubmittedDatetime(\DateTime $submittedDatetime = null)
    {
        $this->setProperty('submittedDatetime', $submittedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getMarkingCompletedDatetime()
    {
        return $this->getProperty('markingCompletedDatetime');
    }

    /**
     * @param \DateTime $markingCompletedDatetime
     */
    public function setMarkingCompletedDatetime(\DateTime $markingCompletedDatetime = null)
    {
        $this->setProperty('markingCompletedDatetime', $markingCompletedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getNotSubmittedDatetime()
    {
        return $this->getProperty('notSubmittedDatetime');
    }

    /**
     * @param \DateTime $notSubmittedDatetime
     */
    public function setNotSubmittedDatetime(\DateTime $notSubmittedDatetime = null)
    {
        $this->setProperty('notSubmittedDatetime', $notSubmittedDatetime);
    }
}
