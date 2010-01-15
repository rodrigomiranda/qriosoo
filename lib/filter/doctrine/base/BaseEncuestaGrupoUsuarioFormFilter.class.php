<?php

/**
 * EncuestaGrupoUsuario filter form base class.
 *
 * @package    encuesta-doctrine
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseEncuestaGrupoUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_grupo_usuario' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GrupoUsuario'), 'add_empty' => true)),
      'id_encuesta'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuesta'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_grupo_usuario' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('GrupoUsuario'), 'column' => 'id')),
      'id_encuesta'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Encuesta'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('encuesta_grupo_usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestaGrupoUsuario';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'id_grupo_usuario' => 'ForeignKey',
      'id_encuesta'      => 'ForeignKey',
    );
  }
}
