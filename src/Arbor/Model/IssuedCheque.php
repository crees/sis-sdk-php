<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class IssuedCheque extends ModelBase
{
    const CUSTOMER_ACCOUNT = 'customerAccount';

    const ISSUED_DATETIME = 'issuedDatetime';

    const ISSUED = 'issued';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::ISSUED_CHEQUE;

    /**
     * @param Query $query
     * @return IssuedCheque[] | Collection
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

        $query->setResourceType(ResourceType::ISSUED_CHEQUE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IssuedCheque
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ISSUED_CHEQUE, $id);
    }

    /**
     * @return CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->getProperty('customerAccount');
    }

    /**
     * @param CustomerAccount $customerAccount
     */
    public function setCustomerAccount(CustomerAccount $customerAccount = null)
    {
        $this->setProperty('customerAccount', $customerAccount);
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
    public function getIssued()
    {
        return $this->getProperty('issued');
    }

    /**
     * @param string $issued
     */
    public function setIssued($issued = null)
    {
        $this->setProperty('issued', $issued);
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
