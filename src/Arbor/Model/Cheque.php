<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Cheque extends ModelBase
{
    const CHEQUE_BOOK = 'chequeBook';

    const CHEQUE_NUMBER = 'chequeNumber';

    protected $_resourceType = ResourceType::CHEQUE;

    /**
     * @param Query $query
     * @return Cheque[] | Collection
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

        $query->setResourceType(ResourceType::CHEQUE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Cheque
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CHEQUE, $id);
    }

    /**
     * @return ChequeBook
     */
    public function getChequeBook()
    {
        return $this->getProperty('chequeBook');
    }

    /**
     * @param ChequeBook $chequeBook
     */
    public function setChequeBook(ChequeBook $chequeBook = null)
    {
        $this->setProperty('chequeBook', $chequeBook);
    }

    /**
     * @return string
     */
    public function getChequeNumber()
    {
        return $this->getProperty('chequeNumber');
    }

    /**
     * @param string $chequeNumber
     */
    public function setChequeNumber($chequeNumber = null)
    {
        $this->setProperty('chequeNumber', $chequeNumber);
    }
}
