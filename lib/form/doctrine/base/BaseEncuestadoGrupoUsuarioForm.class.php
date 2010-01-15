<?php

/**
 * EncuestadoGrupoUsuario form base class.
 *
 * @method EncuestadoGrupoUsuario getObject() Returns the current form's model object
 *
 * @package    encuesta-doctrine
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseEncuestadoGrupoUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'id_encuestado'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'), 'add_empty' => false)),
      'id_grupo_usuario' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GrupoUsuario'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_encuestado'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Encuestado'))),
      'id_grupo_usuario' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('GrupoUsuario'))),
    ));

    $this->widgetSchema->setNameFormat('encuestado_grupo_usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestadoGrupoUsuario';
  }

}
