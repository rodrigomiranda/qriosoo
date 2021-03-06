<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('GrupoPregunta', 'doctrine');

/**
 * BaseGrupoPregunta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $etiqueta
 * @property string $descripcion
 * @property integer $orden
 * @property integer $id_encuesta
 * @property Encuesta $Encuesta
 * @property Doctrine_Collection $Pregunta
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getEtiqueta()    Returns the current record's "etiqueta" value
 * @method string              getDescripcion() Returns the current record's "descripcion" value
 * @method integer             getOrden()       Returns the current record's "orden" value
 * @method integer             getIdEncuesta()  Returns the current record's "id_encuesta" value
 * @method Encuesta            getEncuesta()    Returns the current record's "Encuesta" value
 * @method Doctrine_Collection getPregunta()    Returns the current record's "Pregunta" collection
 * @method GrupoPregunta       setId()          Sets the current record's "id" value
 * @method GrupoPregunta       setEtiqueta()    Sets the current record's "etiqueta" value
 * @method GrupoPregunta       setDescripcion() Sets the current record's "descripcion" value
 * @method GrupoPregunta       setOrden()       Sets the current record's "orden" value
 * @method GrupoPregunta       setIdEncuesta()  Sets the current record's "id_encuesta" value
 * @method GrupoPregunta       setEncuesta()    Sets the current record's "Encuesta" value
 * @method GrupoPregunta       setPregunta()    Sets the current record's "Pregunta" collection
 * 
 * @package    encuesta-doctrine
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseGrupoPregunta extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('grupo_pregunta');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('etiqueta', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '255',
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('orden', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('id_encuesta', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Encuesta', array(
             'local' => 'id_encuesta',
             'foreign' => 'id'));

        $this->hasMany('Pregunta', array(
             'local' => 'id',
             'foreign' => 'id_grupo_pregunta'));
    }
}