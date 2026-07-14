<?php
namespace FeiZhu\TopSdk\Ability347\Domain;

class TaobaoXhotelGetEntityByTagTagEntityDoList {

    /**
        实体id
     **/
    public $entity_id;


    public function getEntityId() : int{
        return $this->entity_id;
    }

    public function setEntityId(int $entityId){
        $this->entity_id = $entityId;
    }


}

