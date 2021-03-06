<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('EncuestaGrupoUsuario', 'doctrine');

/**
 * BaseEncuestaGrupoUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $id_grupo_usuario
 * @property integer $id_encuesta
 * @property GrupoUsuario $GrupoUsuario
 * @property Encuesta $Encuesta
 * 
 * @method integer              getId()               Returns the current record's "id" value
 * @method integer              getIdGrupoUsuario()   Returns the current record's "id_grupo_usuario" value
 * @method integer              getIdEncuesta()       Returns the current record's "id_encuesta" value
 * @method GrupoUsuario         getGrupoUsuario()     Returns the current record's "GrupoUsuario" value
 * @method Encuesta             getEncuesta()         Returns the current record's "Encuesta" value
 * @method EncuestaGrupoUsuario setId()               Sets the current record's "id" value
 * @method EncuestaGrupoUsuario setIdGrupoUsuario()   Sets the current record's "id_grupo_usuario" value
 * @method EncuestaGrupoUsuario setIdEncuesta()       Sets the current record's "id_encuesta" value
 * @method EncuestaGrupoUsuario setGrupoUsuario()     Sets the current record's "GrupoUsuario" value
 * @method EncuestaGrupoUsuario setEncuesta()         Sets the current record's "Encuesta" value
 * 
 * @package    encuesta-doctrine
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseEncuestaGrupoUsuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('encuesta_grupo_usuario');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('id_grupo_usuario', 'integer', 4, array(
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
        $this->hasOne('GrupoUsuario', array(
             'local' => 'id_grupo_usuario',
             'foreign' => 'id'));

        $this->hasOne('Encuesta', array(
             'local' => 'id_encuesta',
             'foreign' => 'id'));
    }
}