<?php

/**
 * This is the model class for table "pasien".
 *
 * The followings are the available columns in table 'pasien':
 * @property integer $id_pasien
 * @property string $nik
 * @property string $nama_pasien
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $telp
 * @property string $email
 * @property string $alamat
 *
 * The followings are the available model relations:
 * @property Tindakan[] $tindakans
 */
class Pasien extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pasien';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pasien', 'required'),
			array('id_pasien', 'numerical', 'integerOnly'=>true),
			array('nik', 'length', 'max'=>16),
			array('nama_pasien, tempat_lahir, email', 'length', 'max'=>50),
			array('jenis_kelamin', 'length', 'max'=>11),
			array('telp', 'length', 'max'=>12),
			array('tanggal_lahir, alamat', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pasien, nik, nama_pasien, jenis_kelamin, tempat_lahir, tanggal_lahir, telp, email, alamat', 'safe', 'on'=>'search'),
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
			'tindakans' => array(self::HAS_MANY, 'Tindakan', 'id_pasien'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pasien' => 'Id Pasien',
			'nik' => 'Nik',
			'nama_pasien' => 'Nama Pasien',
			'jenis_kelamin' => 'Jenis Kelamin',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'telp' => 'Telp',
			'email' => 'Email',
			'alamat' => 'Alamat',
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

		$criteria->compare('id_pasien',$this->id_pasien);
		$criteria->compare('nik',$this->nik,true);
		$criteria->compare('nama_pasien',$this->nama_pasien,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('telp',$this->telp,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('alamat',$this->alamat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pasien the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
