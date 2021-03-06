<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PaymentProviderPayout extends ModelBase
{
    const BANK_ACCOUNT = 'bankAccount';

    const PAYMENT_PROVIDER = 'paymentProvider';

    const PAYMENT_PROVIDER_PAYOUT_IDENTIFIER = 'paymentProviderPayoutIdentifier';

    const PAYOUT_AMOUNT = 'payoutAmount';

    const PAYOUT_REFERENCE = 'payoutReference';

    const PAYOUT_INITIATED_DATETIME = 'payoutInitiatedDatetime';

    const PAYOUT_SUCCEEDED_DATETIME = 'payoutSucceededDatetime';

    const PAYOUT_FAILED_DATETIME = 'payoutFailedDatetime';

    const PAYOUT_SOURCE_TYPE = 'payoutSourceType';

    protected $_resourceType = ResourceType::PAYMENT_PROVIDER_PAYOUT;

    /**
     * @param Query $query
     * @return PaymentProviderPayout[] | Collection
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

        $query->setResourceType(ResourceType::PAYMENT_PROVIDER_PAYOUT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PaymentProviderPayout
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PAYMENT_PROVIDER_PAYOUT, $id);
    }

    /**
     * @return BankAccount
     */
    public function getBankAccount()
    {
        return $this->getProperty('bankAccount');
    }

    /**
     * @param BankAccount $bankAccount
     */
    public function setBankAccount(BankAccount $bankAccount = null)
    {
        $this->setProperty('bankAccount', $bankAccount);
    }

    /**
     * @return PaymentProvider
     */
    public function getPaymentProvider()
    {
        return $this->getProperty('paymentProvider');
    }

    /**
     * @param PaymentProvider $paymentProvider
     */
    public function setPaymentProvider(PaymentProvider $paymentProvider = null)
    {
        $this->setProperty('paymentProvider', $paymentProvider);
    }

    /**
     * @return string
     */
    public function getPaymentProviderPayoutIdentifier()
    {
        return $this->getProperty('paymentProviderPayoutIdentifier');
    }

    /**
     * @param string $paymentProviderPayoutIdentifier
     */
    public function setPaymentProviderPayoutIdentifier($paymentProviderPayoutIdentifier = null)
    {
        $this->setProperty('paymentProviderPayoutIdentifier', $paymentProviderPayoutIdentifier);
    }

    /**
     * @return string
     */
    public function getPayoutAmount()
    {
        return $this->getProperty('payoutAmount');
    }

    /**
     * @param string $payoutAmount
     */
    public function setPayoutAmount($payoutAmount = null)
    {
        $this->setProperty('payoutAmount', $payoutAmount);
    }

    /**
     * @return string
     */
    public function getPayoutReference()
    {
        return $this->getProperty('payoutReference');
    }

    /**
     * @param string $payoutReference
     */
    public function setPayoutReference($payoutReference = null)
    {
        $this->setProperty('payoutReference', $payoutReference);
    }

    /**
     * @return \DateTime
     */
    public function getPayoutInitiatedDatetime()
    {
        return $this->getProperty('payoutInitiatedDatetime');
    }

    /**
     * @param \DateTime $payoutInitiatedDatetime
     */
    public function setPayoutInitiatedDatetime(\DateTime $payoutInitiatedDatetime = null)
    {
        $this->setProperty('payoutInitiatedDatetime', $payoutInitiatedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPayoutSucceededDatetime()
    {
        return $this->getProperty('payoutSucceededDatetime');
    }

    /**
     * @param \DateTime $payoutSucceededDatetime
     */
    public function setPayoutSucceededDatetime(\DateTime $payoutSucceededDatetime = null)
    {
        $this->setProperty('payoutSucceededDatetime', $payoutSucceededDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getPayoutFailedDatetime()
    {
        return $this->getProperty('payoutFailedDatetime');
    }

    /**
     * @param \DateTime $payoutFailedDatetime
     */
    public function setPayoutFailedDatetime(\DateTime $payoutFailedDatetime = null)
    {
        $this->setProperty('payoutFailedDatetime', $payoutFailedDatetime);
    }

    /**
     * @return string
     */
    public function getPayoutSourceType()
    {
        return $this->getProperty('payoutSourceType');
    }

    /**
     * @param string $payoutSourceType
     */
    public function setPayoutSourceType($payoutSourceType = null)
    {
        $this->setProperty('payoutSourceType', $payoutSourceType);
    }
}
