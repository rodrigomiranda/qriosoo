<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('PreguntaRespuesta', 'doctrine');

/**
 * BasePreguntaRespuesta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $respuesta
 * @property string $valor_default
 * @property integer $orden
 * @property integer $id_pregunta
 * @property Pregunta $Pregunta
 * 
 * @method integer           getId()            Returns the current record's "id" value
 * @method string            getRespuesta()     Returns the current record's "respuesta" value
 * @method string            getValorDefault()  Returns the current record's "valor_default" value
 * @method integer           getOrden()         Returns the current record's "orden" value
 * @method integer           getIdPregunta()    Returns the current record's "id_pregunta" value
 * @method Pregunta          getPregunta()      Returns the current record's "Pregunta" value
 * @method PreguntaRespuesta setId()            Sets the current record's "id" value
 * @method PreguntaRespuesta setRespuesta()     Sets the current record's "respuesta" value
 * @method PreguntaRespuesta setValorDefault()  Sets the current record's "valor_default" value
 * @method PreguntaRespuesta setOrden()         Sets the current record's "orden" value
 * @method PreguntaRespuesta setIdPregunta()    Sets the current record's "id_pregunta" value
 * @method PreguntaRespuesta setPregunta()      Sets the current record's "Pregunta" value
 * 
 * @package    encuesta-doctrine
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BasePreguntaRespuesta extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('pregunta_respuesta');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '8',
             ));
        $this->hasColumn('respuesta', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('valor_default', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('orden', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('id_pregunta', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Pregunta', array(
             'local' => 'id_pregunta',
             'foreign' => 'id'));
    }
}