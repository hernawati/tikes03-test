<?php

/**
 * This is the model class for table "pendaftaran".
 *
 * The followings are the available columns in table 'pendaftaran':
 * @property integer $no_daftar
 * @property integer $no_cm
 * @property string $tgl_daftar
 * @property string $id_dokter
 *
 * The followings are the available model relations:
 * @property Dokter $idDokter
 * @property Pasien $noCm
 */
class Pendaftaran extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pendaftaran the static model class
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
		return 'pendaftaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_daftar, no_cm', 'numerical', 'integerOnly'=>true),
			array('id_dokter', 'length', 'max'=>5),
			array('tgl_daftar', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('no_daftar, no_cm, tgl_daftar, id_dokter', 'safe', 'on'=>'search'),
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
			'idDokter' => array(self::BELONGS_TO, 'Dokter', 'id_dokter'),
			'noCm' => array(self::BELONGS_TO, 'Pasien', 'no_cm'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'no_daftar' => 'No Daftar',
			'no_cm' => 'No Cm',
			'tgl_daftar' => 'Tgl Daftar',
			'id_dokter' => 'Id Dokter',
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

		$criteria->compare('no_daftar',$this->no_daftar);
		$criteria->compare('no_cm',$this->no_cm);
		$criteria->compare('tgl_daftar',$this->tgl_daftar,true);
		$criteria->compare('id_dokter',$this->id_dokter,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}