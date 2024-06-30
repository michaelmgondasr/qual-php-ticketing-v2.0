<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Tickets]].
 *
 * @see Tickets
 */
class TicketsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Tickets[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Tickets|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
