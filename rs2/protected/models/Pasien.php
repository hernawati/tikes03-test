<?php

/**
 * This is the model class for table "pasien".
 *
 * The followings are the available columns in table 'pasien':
 * @property integer $no_cm
 * @property string $nama_pasien
 * @property string $jk_pasien
 * @property string $alamat
 * @property string $tgl_lahir
 */
class Pasien extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pasien the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

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
			array('no_cm, nama_pasien, jk_pasien, alamat, tgl_lahir', 'required'),
			array('no_cm', 'numerical', 'integerOnly'=>true),
			array('nama_pasien', 'length', 'max'=>45),
			array('jk_pasien', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('no_cm, nama_pasien, jk_pasien, alamat, tgl_lahir', 'safe', 'on'=>'search'),
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
			'no_cm' => 'No Cm',
			'nama_pasien' => 'Nama Pasien',
			'jk_pasien' => 'Jk Pasien',
			'alamat' => 'Alamat',
			'tgl_lahir' => 'Tgl Lahir',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('no_cm',$this->no_cm);
		$criteria->compare('nama_pasien',$this->nama_pasien,true);
		$criteria->compare('jk_pasien',$this->jk_pasien,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}