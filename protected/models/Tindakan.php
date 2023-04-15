<?php

/**
 * This is the model class for table "tindakan".
 *
 * The followings are the available columns in table 'tindakan':
 * @property integer $id_tindakan
 * @property integer $id_pasien
 * @property integer $id_dokter
 * @property integer $id_obat
 * @property string $tanggal_tindakan
 * @property string $keluhan_pasien
 * @property string $hasil_diagnosa
 * @property string $pelaksanaan
 *
 * The followings are the available model relations:
 * @property Pasien $idPasien
 * @property Dokter $idDokter
 * @property Obat $idObat
 */
class Tindakan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tindakan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('id_tindakan', 'required'),
			array('id_tindakan, id_pasien, id_dokter, id_obat', 'numerical', 'integerOnly'=>true),
			array('pelaksanaan', 'length', 'max'=>11),
			array('tanggal_tindakan, keluhan_pasien, hasil_diagnosa', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tindakan, id_pasien, id_dokter, id_obat, tanggal_tindakan, keluhan_pasien, hasil_diagnosa, pelaksanaan', 'safe', 'on'=>'search'),
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
			'pasien' => array(self::HAS_ONE, 'Pasien', 'id_pasien'),
			'dokter' => array(self::HAS_ONE, 'Dokter', 'id_dokter'),
			'obat' => array(self::HAS_ONE, 'Obat', 'id_obat'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tindakan' => 'Id Tindakan',
			'id_pasien' => 'Nama Pasien',
			'id_dokter' => 'Id Dokter',
			'id_obat' => 'Id Obat',
			'tanggal_tindakan' => 'Tanggal Tindakan',
			'keluhan_pasien' => 'Keluhan Pasien',
			'hasil_diagnosa' => 'Hasil Diagnosa',
			'pelaksanaan' => 'Pelaksanaan',
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

		$criteria->compare('id_tindakan',$this->id_tindakan);
		$criteria->compare('id_pasien',$this->id_pasien);
		$criteria->compare('id_dokter',$this->id_dokter);
		$criteria->compare('id_obat',$this->id_obat);
		$criteria->compare('tanggal_tindakan',$this->tanggal_tindakan,true);
		$criteria->compare('keluhan_pasien',$this->keluhan_pasien,true);
		$criteria->compare('hasil_diagnosa',$this->hasil_diagnosa,true);
		$criteria->compare('pelaksanaan',$this->pelaksanaan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tindakan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
