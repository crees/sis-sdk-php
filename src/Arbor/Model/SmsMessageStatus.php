<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SmsMessageStatus extends ModelBase
{
    const SMS_MESSAGE = 'smsMessage';

    const SMS_MESSAGE_PART = 'smsMessagePart';

    const STATUS_TYPE = 'statusType';

    const STATUS_DATETIME = 'statusDatetime';

    const ERROR_TYPE = 'errorType';

    protected $_resourceType = ResourceType::SMS_MESSAGE_STATUS;

    /**
     * @param Query $query
     * @return SmsMessageStatus[] | Collection
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

        $query->setResourceType(ResourceType::SMS_MESSAGE_STATUS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SmsMessageStatus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SMS_MESSAGE_STATUS, $id);
    }

    /**
     * @return SmsMessage
     */
    public function getSmsMessage()
    {
        return $this->getProperty('smsMessage');
    }

    /**
     * @param SmsMessage $smsMessage
     */
    public function setSmsMessage(SmsMessage $smsMessage = null)
    {
        $this->setProperty('smsMessage', $smsMessage);
    }

    /**
     * @return SmsMessagePart
     */
    public function getSmsMessagePart()
    {
        return $this->getProperty('smsMessagePart');
    }

    /**
     * @param SmsMessagePart $smsMessagePart
     */
    public function setSmsMessagePart(SmsMessagePart $smsMessagePart = null)
    {
        $this->setProperty('smsMessagePart', $smsMessagePart);
    }

    /**
     * @return string
     */
    public function getStatusType()
    {
        return $this->getProperty('statusType');
    }

    /**
     * @param string $statusType
     */
    public function setStatusType($statusType = null)
    {
        $this->setProperty('statusType', $statusType);
    }

    /**
     * @return \DateTime
     */
    public function getStatusDatetime()
    {
        return $this->getProperty('statusDatetime');
    }

    /**
     * @param \DateTime $statusDatetime
     */
    public function setStatusDatetime(\DateTime $statusDatetime = null)
    {
        $this->setProperty('statusDatetime', $statusDatetime);
    }

    /**
     * @return string
     */
    public function getErrorType()
    {
        return $this->getProperty('errorType');
    }

    /**
     * @param string $errorType
     */
    public function setErrorType($errorType = null)
    {
        $this->setProperty('errorType', $errorType);
    }
}
