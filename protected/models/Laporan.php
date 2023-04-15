<?php

/**
 * This is the model class for table "laporan".
 *
 * The followings are the available columns in table 'laporan':
 * @property integer $id_laporan
 * @property integer $id_tindakan
 * @property integer $id_pasien
 * @property integer $id_dokter
 *
 * The followings are the available model relations:
 * @property Tindakan $idTindakan
 * @property Pasien $idPasien
 * @property Dokter $idDokter
 */
class Laporan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'laporan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tindakan, id_pasien, id_dokter', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_laporan, id_tindakan, id_pasien, id_dokter', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tindakan' => array(self::BELONGS_TO, 'Tindakan', 'id_tindakan'),
			'pasien' => array(self::BELONGS_TO, 'Pasien', 'id_pasien'),
			'dokter' => array(self::BELONGS_TO, 'Dokter', 'id_dokter'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_laporan' => 'Id Laporan',
			'id_tindakan' => 'Id Tindakan',
			'id_pasien' => 'Id Pasien',
			'id_dokter' => 'Id Dokter',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_laporan',$this->id_laporan);
		$criteria->compare('id_tindakan',$this->id_tindakan);
		$criteria->compare('id_pasien',$this->id_pasien);
		$criteria->compare('id_dokter',$this->id_dokter);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Laporan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
