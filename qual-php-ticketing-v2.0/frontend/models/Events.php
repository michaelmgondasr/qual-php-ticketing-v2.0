<?php

namespace app\models;

use common\models\User;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use yii\helpers\Url;
use Yii;

/**
 * This is the model class for table "events".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $date
 * @property string $venue
 * @property int $created_by
 * @property string $created_at
 * @property string $updated_at
 * @property string $start_time
 * @property string $pricing
 * @property string $ticket_price
 * @property  mixed $image
 *
 * @property User $createdBy
 * @property Tickets[] $tickets
 */
class Events extends ActiveRecord
{
    /**
     * @var UploadedFile
     */

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'date', 'venue', 'created_by', 'start_time'], 'required'],
            [['description', 'pricing'], 'string'],
            [['date', 'created_at', 'updated_at', 'start_time'], 'safe'],
            [['created_by'], 'integer'],
            [['name', 'venue'], 'string', 'max' => 255],
            [['ticket_price'], 'required', 'when' => function ($model) {
                return $model->pricing === 'premium';
            }, 'whenClient' => "function (attribute, value) {
                return $('#pricing-select').val() === 'premium';
            }"],
            [['ticket_price'], 'number'],
            ['image', 'file'], // extension=>'jpg,pnf,pdf'
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'date' => 'Date',
            'venue' => 'Venue',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'image' => 'Image',
            'start_time' => 'Start Time',
            'pricing' => 'Pricing',
            'ticket_price' => 'Price of ticket',
        ];
    }

    
    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    /**
     * Gets query for [[Tickets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Tickets::class, ['event_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return EventsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventsQuery(get_called_class());
    }
}
