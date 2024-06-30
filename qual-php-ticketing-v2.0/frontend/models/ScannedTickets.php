<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scanned_tickets".
 *
 * @property int $id
 * @property int $ticket_id
 * @property string $scanned_at
 * @property int $scanner_id
 *
 * @property User $scanner
 * @property Tickets $ticket
 */
class ScannedTickets extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scanned_tickets';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ticket_id', 'scanner_id'], 'required'],
            [['ticket_id', 'scanner_id'], 'integer'],
            [['scanned_at'], 'safe'],
            [['ticket_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tickets::class, 'targetAttribute' => ['ticket_id' => 'id']],
            [['scanner_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['scanner_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ticket_id' => 'Ticket ID',
            'scanned_at' => 'Scanned At',
            'scanner_id' => 'Scanner ID',
        ];
    }

    /**
     * Gets query for [[Scanner]].
     *
     * @return \yii\db\ActiveQuery|UserQuery
     */
    public function getScanner()
    {
        return $this->hasOne(User::class, ['id' => 'scanner_id']);
    }

    /**
     * Gets query for [[Ticket]].
     *
     * @return \yii\db\ActiveQuery|TicketsQuery
     */
    public function getTicket()
    {
        return $this->hasOne(Tickets::class, ['id' => 'ticket_id']);
    }

    /**
     * {@inheritdoc}
     * @return ScannedTicketsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ScannedTicketsQuery(get_called_class());
    }
}
