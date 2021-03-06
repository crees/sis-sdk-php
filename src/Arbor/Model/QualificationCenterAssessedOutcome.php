<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationCenterAssessedOutcome extends ModelBase
{
    const QUALIFICATION_ASPECT = 'qualificationAspect';

    const QUALIFICATION_GRADE = 'qualificationGrade';

    const NUMERIC_VALUE = 'numericValue';

    const STUDENT = 'student';

    const CANDIDATE_ENTRY = 'candidateEntry';

    const ASSESSMENT_DATE = 'assessmentDate';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::QUALIFICATION_CENTER_ASSESSED_OUTCOME;

    /**
     * @param Query $query
     * @return QualificationCenterAssessedOutcome[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_CENTER_ASSESSED_OUTCOME);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationCenterAssessedOutcome
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_CENTER_ASSESSED_OUTCOME, $id);
    }

    /**
     * @return QualificationAspect
     */
    public function getQualificationAspect()
    {
        return $this->getProperty('qualificationAspect');
    }

    /**
     * @param QualificationAspect $qualificationAspect
     */
    public function setQualificationAspect(QualificationAspect $qualificationAspect = null)
    {
        $this->setProperty('qualificationAspect', $qualificationAspect);
    }

    /**
     * @return QualificationGrade
     */
    public function getQualificationGrade()
    {
        return $this->getProperty('qualificationGrade');
    }

    /**
     * @param QualificationGrade $qualificationGrade
     */
    public function setQualificationGrade(QualificationGrade $qualificationGrade = null)
    {
        $this->setProperty('qualificationGrade', $qualificationGrade);
    }

    /**
     * @return float
     */
    public function getNumericValue()
    {
        return $this->getProperty('numericValue');
    }

    /**
     * @param float $numericValue
     */
    public function setNumericValue($numericValue = null)
    {
        $this->setProperty('numericValue', $numericValue);
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
     * @return CandidateEntry
     */
    public function getCandidateEntry()
    {
        return $this->getProperty('candidateEntry');
    }

    /**
     * @param CandidateEntry $candidateEntry
     */
    public function setCandidateEntry(CandidateEntry $candidateEntry = null)
    {
        $this->setProperty('candidateEntry', $candidateEntry);
    }

    /**
     * @return \DateTime
     */
    public function getAssessmentDate()
    {
        return $this->getProperty('assessmentDate');
    }

    /**
     * @param \DateTime $assessmentDate
     */
    public function setAssessmentDate(\DateTime $assessmentDate = null)
    {
        $this->setProperty('assessmentDate', $assessmentDate);
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
