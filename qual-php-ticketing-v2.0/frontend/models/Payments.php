<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property int $id
 * @property int $ticket_id
 * @property float $amount
 * @property string $payment_method
 * @property string $payment_status
 * @property string $paid_at
 *
 * @property Tickets $ticket
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ticket_id', 'amount', 'payment_method', 'payment_status'], 'required'],
            [['ticket_id'], 'integer'],
            [['amount'], 'number'],
            [['payment_status'], 'string'],
            [['paid_at'], 'safe'],
            [['payment_method'], 'string', 'max' => 50],
            [['ticket_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tickets::class, 'targetAttribute' => ['ticket_id' => 'id']],
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
            'amount' => 'Amount',
            'payment_method' => 'Payment Method',
            'payment_status' => 'Payment Status',
            'paid_at' => 'Paid At',
        ];
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
     * @return PaymentsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PaymentsQuery(get_called_class());
    }
}
