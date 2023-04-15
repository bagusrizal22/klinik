<?php

/**
 * This is the model class for table "pegawai".
 *
 * The followings are the available columns in table 'pegawai':
 * @property integer $id_pegawai
 * @property string $nip
 * @property string $nik
 * @property string $nama_pegawai
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $telp
 * @property string $email
 * @property string $alamat
 */
class Pegawai extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pegawai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pegawai', 'required'),
			array('id_pegawai', 'numerical', 'integerOnly'=>true),
			array('nip', 'length', 'max'=>18),
			array('nik', 'length', 'max'=>16),
			array('nama_pegawai, tempat_lahir, email', 'length', 'max'=>50),
			array('jenis_kelamin', 'length', 'max'=>11),
			array('telp', 'length', 'max'=>12),
			array('tanggal_lahir, alamat', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pegawai, nip, nik, nama_pegawai, jenis_kelamin, tempat_lahir, tanggal_lahir, telp, email, alamat', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pegawai' => 'Id Pegawai',
			'nip' => 'Nip',
			'nik' => 'Nik',
			'nama_pegawai' => 'Nama Pegawai',
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

		$criteria->compare('id_pegawai',$this->id_pegawai);
		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('nik',$this->nik,true);
		$criteria->compare('nama_pegawai',$this->nama_pegawai,true);
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
	 * @return Pegawai the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
