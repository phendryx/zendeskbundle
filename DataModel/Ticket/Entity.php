<?php
/**
 * Class definition for Malwarebytes\ZendeskBundle\DataModel\Ticket\Entity
 */
namespace Malwarebytes\ZendeskBundle\DataModel\Ticket;
use Malwarebytes\ZendeskBundle\DataModel\AbstractEntity;
use Malwarebytes\ZendeskBundle\Service\ApiService;

class Entity extends AbstractEntity
{
    /**
     * These fields can't be changed.
     * @var array
     */
    protected $_readOnlyFields = array(
            'id', 
            'url',
            'description',
            'recipient',
            'submitter_id',
            'organization_id',
            'has_incidents',
            'satisfaction_rating',
            'sharing_agreement_ids',
            'created_at',
            'updated_at'
            );
    
    /**
     * These fields are required.
     * @var array
     */
    protected $_mandatoryFields = array(
            'requester_id',
            );
    
    /**
     * Primary key is id.
     * @see \Malwarebytes\ZendeskBundle\DataModel\AbstractEntity::getPrimaryKey()
     * @return string
     */
    public function getPrimaryKey() {
        return 'id';
    }
    
    /**
     * Adds a comment to the ticket. 
     */
    public function setComment( $comment, $public = true ) {
        
    }
}