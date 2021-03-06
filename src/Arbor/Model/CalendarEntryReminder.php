<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CalendarEntryReminder extends ModelBase
{
    const CALENDAR_ENTRY_MAPPING = 'calendarEntryMapping';

    const REMINDER_SENT_DATETIME = 'reminderSentDatetime';

    protected $_resourceType = ResourceType::CALENDAR_ENTRY_REMINDER;

    /**
     * @param Query $query
     * @return CalendarEntryReminder[] | Collection
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

        $query->setResourceType(ResourceType::CALENDAR_ENTRY_REMINDER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CalendarEntryReminder
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CALENDAR_ENTRY_REMINDER, $id);
    }

    /**
     * @return CalendarEntryMapping
     */
    public function getCalendarEntryMapping()
    {
        return $this->getProperty('calendarEntryMapping');
    }

    /**
     * @param CalendarEntryMapping $calendarEntryMapping
     */
    public function setCalendarEntryMapping(CalendarEntryMapping $calendarEntryMapping = null)
    {
        $this->setProperty('calendarEntryMapping', $calendarEntryMapping);
    }

    /**
     * @return \DateTime
     */
    public function getReminderSentDatetime()
    {
        return $this->getProperty('reminderSentDatetime');
    }

    /**
     * @param \DateTime $reminderSentDatetime
     */
    public function setReminderSentDatetime(\DateTime $reminderSentDatetime = null)
    {
        $this->setProperty('reminderSentDatetime', $reminderSentDatetime);
    }
}
