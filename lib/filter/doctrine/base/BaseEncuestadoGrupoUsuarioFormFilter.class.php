<?php

/**
 * EncuestadoGrupoUsuario filter form base class.
 *
 * @package    encuesta-doctrine
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseEncuestadoGrupoUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_encuestado'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'), 'add_empty' => true)),
      'id_grupo_usuario' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GrupoUsuario'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_encuestado'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Encuestado'), 'column' => 'id')),
      'id_grupo_usuario' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('GrupoUsuario'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('encuestado_grupo_usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestadoGrupoUsuario';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'id_encuestado'    => 'ForeignKey',
      'id_grupo_usuario' => 'ForeignKey',
    );
  }
}
