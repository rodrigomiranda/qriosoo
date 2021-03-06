<?php

/**
 * EncuestaGrupoUsuario form base class.
 *
 * @method EncuestaGrupoUsuario getObject() Returns the current form's model object
 *
 * @package    encuesta-doctrine
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseEncuestaGrupoUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'id_grupo_usuario' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GrupoUsuario'), 'add_empty' => false)),
      'id_encuesta'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuesta'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_grupo_usuario' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('GrupoUsuario'))),
      'id_encuesta'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Encuesta'))),
    ));

    $this->widgetSchema->setNameFormat('encuesta_grupo_usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestaGrupoUsuario';
  }

}
