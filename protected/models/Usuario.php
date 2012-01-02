<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idusuario
 * @property integer $idrol
 * @property string $cedula
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $login
 * @property string $password
 *
 * The followings are the available model relations:
 * @property Usuarioempresa[] $usuarioempresas
 * @property Roles $idrol0
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idrol', 'required'),
			array('idrol', 'numerical', 'integerOnly'=>true),
			array('cedula, telefono', 'length', 'max'=>1),
			array('nombre, direccion, login, password', 'length', 'max'=>254),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idusuario, idrol, cedula, nombre, direccion, telefono, login, password', 'safe', 'on'=>'search'),
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
			'usuarioempresas' => array(self::HAS_MANY, 'Usuarioempresa', 'idusuario'),
			'idrol0' => array(self::BELONGS_TO, 'Roles', 'idrol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idusuario' => 'Idusuario',
			'idrol' => 'Idrol',
			'cedula' => 'Cedula',
			'nombre' => 'Nombre',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'login' => 'Login',
			'password' => 'Password',
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

		$criteria->compare('idusuario',$this->idusuario);
		$criteria->compare('idrol',$this->idrol);
		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}