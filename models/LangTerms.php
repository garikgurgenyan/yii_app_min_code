<?php

/**
 * This is the model class for table "LANG_TERMS".
 *
 * The followings are the available columns in table 'LANG_TERMS':
 * @property double $ID
 * @property string $TXT
 * @property string $ALIAS
 */
class LangTerms extends CActiveRecord
{
    private static $_data = null;

    public static function init_data()
    {
        /* @var $model LangTerms */
        foreach(self::model()->findAll() as $model)
            self::$_data[$model->ALIAS] = $model->TXT;
    }
    
    public static function get($alias)
    {
        if(self::$_data === null)
            self::init_data();
        return array_key_exists($alias, self::$_data) ? self::$_data[$alias] : $alias;
    }

	/**
	 * Returns the static model of the specified AR class.
	 * @return LangTerms the static model class
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
		return 'LANG_TERMS';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ALIAS', 'required'),
			array('TXT', 'length', 'max'=>200),
			array('ALIAS', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, TXT, ALIAS', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'TXT' => 'Txt',
			'ALIAS' => 'Alias',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('TXT',$this->TXT,true);
		$criteria->compare('ALIAS',$this->ALIAS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
    public function beforeSave()
    {
        $this->ALIAS = trim($this->ALIAS);
        return parent::beforeSave();
    }
}