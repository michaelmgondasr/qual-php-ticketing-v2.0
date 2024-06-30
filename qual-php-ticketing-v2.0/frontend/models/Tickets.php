<?php

namespace app\models;


use Yii;
use common\models\User;

/**
 * This is the model class for table "tickets".
 *
 * @property int $id
 * @property int $event_id
 * @property int $user_id
 * @property string $ticket_code
 * @property string $booked_at
 * @property string $status
 *
 * @property Events $event
 * @property Payments[] $payments
 * @property ScannedTickets[] $scannedTickets
 * @property User $user
 */
class Tickets extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tickets';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_id', 'user_id', 'ticket_code'], 'required'],
            [['event_id', 'user_id'], 'integer'],
            [['booked_at'], 'safe'],
            [['status'], 'string'],
            [['ticket_code'], 'string', 'max' => 255],
            [['ticket_code'], 'unique'],
            [['event_id'], 'exist', 'skipOnError' => true, 'targetClass' => Events::class, 'targetAttribute' => ['event_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_id' => 'Event ID',
            'user_id' => 'User ID',
            'ticket_code' => 'Ticket Code',
            'booked_at' => 'Booked At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Event]].
     *
     * @return \yii\db\ActiveQuery|EventsQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Events::class, ['id' => 'event_id']);
    }

    /**
     * Gets query for [[Payments]].
     *
     * @return \yii\db\ActiveQuery|PaymentsQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payments::class, ['ticket_id' => 'id']);
    }

    /**
     * Gets query for [[ScannedTickets]].
     *
     * @return \yii\db\ActiveQuery|ScannedTicketsQuery
     */
    public function getScannedTickets()
    {
        return $this->hasMany(ScannedTickets::class, ['ticket_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery|UserQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    /**
     * {@inheritdoc}
     * @return TicketsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TicketsQuery(get_called_class());
    }
}
