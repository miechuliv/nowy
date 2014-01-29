<?php
/**
 * Created by JetBrains PhpStorm.
 * User: USER
 * Date: 29.01.14
 * Time: 12:28
 * To change this template use File | Settings | File Templates.
 */

class DbWhere {

    public $column;
    public $relation;
    public $type;
    public $value;
    public $alias;

    function __construct($alias =false , $column =false , $relation =false , $type = false, $value =false)
    {
        $this->alias = $alias;
        $this->column = $column;
        $this->relation = $relation;
        $this->type = $type;
        $this->value = $value;
    }

    public function setColumn($column)
    {
        $this->column = $column;
        return $this;
    }

    public function setAlias($alias)
    {
        $this->alias = $alias;
        return $this;
    }

    public function setRelation($relation)
    {
        $this->relation = $relation;
        return $this;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}