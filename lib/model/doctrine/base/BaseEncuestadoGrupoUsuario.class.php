<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('EncuestadoGrupoUsuario', 'doctrine');

/**
 * BaseEncuestadoGrupoUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $id_encuestado
 * @property integer $id_grupo_usuario
 * @property Encuestado $Encuestado
 * @property GrupoUsuario $GrupoUsuario
 * 
 * @method integer                getId()               Returns the current record's "id" value
 * @method integer                getIdEncuestado()     Returns the current record's "id_encuestado" value
 * @method integer                getIdGrupoUsuario()   Returns the current record's "id_grupo_usuario" value
 * @method Encuestado             getEncuestado()       Returns the current record's "Encuestado" value
 * @method GrupoUsuario           getGrupoUsuario()     Returns the current record's "GrupoUsuario" value
 * @method EncuestadoGrupoUsuario setId()               Sets the current record's "id" value
 * @method EncuestadoGrupoUsuario setIdEncuestado()     Sets the current record's "id_encuestado" value
 * @method EncuestadoGrupoUsuario setIdGrupoUsuario()   Sets the current record's "id_grupo_usuario" value
 * @method EncuestadoGrupoUsuario setEncuestado()       Sets the current record's "Encuestado" value
 * @method EncuestadoGrupoUsuario setGrupoUsuario()     Sets the current record's "GrupoUsuario" value
 * 
 * @package    encuesta-doctrine
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseEncuestadoGrupoUsuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('encuestado_grupo_usuario');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('id_encuestado', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Encuestado', array(
             'local' => 'id_encuestado',
             'foreign' => 'id'));

        $this->hasOne('GrupoUsuario', array(
             'local' => 'id_grupo_usuario',
             'foreign' => 'id'));
    }
}