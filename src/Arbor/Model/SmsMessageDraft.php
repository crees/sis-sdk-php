<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SmsMessageDraft extends ModelBase
{

    const SENDING_PROFILE = 'sendingProfile';

    const MESSAGE_TEXT = 'messageText';

    const CUSTOM_REPORT = 'customReport';

    const COMBINE_MESSAGES_TO_SAME_RECIPIENT = 'combineMessagesToSameRecipient';

    const COMBINE_MESSAGES_TO_SAME_HOUSEHOLD = 'combineMessagesToSameHousehold';

    const SENDING_STARTED_DATETIME = 'sendingStartedDatetime';

    const RECIPIENTS_RESOLVED_DATETIME = 'recipientsResolvedDatetime';

    const SENDING_COMPLETED_DATETIME = 'sendingCompletedDatetime';

    protected $_resourceType = ResourceType::SMS_MESSAGE_DRAFT;

    /**
     * @param Query $query
     * @return SmsMessageDraft[] | Collection
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

        $query->setResourceType(ResourceType::SMS_MESSAGE_DRAFT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SmsMessageDraft
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SMS_MESSAGE_DRAFT, $id);
    }

    /**
     * @return SendingProfile
     */
    public function getSendingProfile()
    {
        return $this->getProperty('sendingProfile');
    }

    /**
     * @param SendingProfile $sendingProfile
     */
    public function setSendingProfile(SendingProfile $sendingProfile = null)
    {
        $this->setProperty('sendingProfile', $sendingProfile);
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
        return $this->getProperty('messageText');
    }

    /**
     * @param string $messageText
     */
    public function setMessageText($messageText = null)
    {
        $this->setProperty('messageText', $messageText);
    }

    /**
     * @return CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param CustomReport $customReport
     */
    public function setCustomReport(CustomReport $customReport = null)
    {
        $this->setProperty('customReport', $customReport);
    }

    /**
     * @return bool
     */
    public function getCombineMessagesToSameRecipient()
    {
        return $this->getProperty('combineMessagesToSameRecipient');
    }

    /**
     * @param bool $combineMessagesToSameRecipient
     */
    public function setCombineMessagesToSameRecipient($combineMessagesToSameRecipient = null)
    {
        $this->setProperty('combineMessagesToSameRecipient', $combineMessagesToSameRecipient);
    }

    /**
     * @return bool
     */
    public function getCombineMessagesToSameHousehold()
    {
        return $this->getProperty('combineMessagesToSameHousehold');
    }

    /**
     * @param bool $combineMessagesToSameHousehold
     */
    public function setCombineMessagesToSameHousehold($combineMessagesToSameHousehold = null)
    {
        $this->setProperty('combineMessagesToSameHousehold', $combineMessagesToSameHousehold);
    }

    /**
     * @return \DateTime
     */
    public function getSendingStartedDatetime()
    {
        return $this->getProperty('sendingStartedDatetime');
    }

    /**
     * @param \DateTime $sendingStartedDatetime
     */
    public function setSendingStartedDatetime(\DateTime $sendingStartedDatetime = null)
    {
        $this->setProperty('sendingStartedDatetime', $sendingStartedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getRecipientsResolvedDatetime()
    {
        return $this->getProperty('recipientsResolvedDatetime');
    }

    /**
     * @param \DateTime $recipientsResolvedDatetime
     */
    public function setRecipientsResolvedDatetime(\DateTime $recipientsResolvedDatetime = null)
    {
        $this->setProperty('recipientsResolvedDatetime', $recipientsResolvedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSendingCompletedDatetime()
    {
        return $this->getProperty('sendingCompletedDatetime');
    }

    /**
     * @param \DateTime $sendingCompletedDatetime
     */
    public function setSendingCompletedDatetime(\DateTime $sendingCompletedDatetime = null)
    {
        $this->setProperty('sendingCompletedDatetime', $sendingCompletedDatetime);
    }


}
