<?php

/**
 * GrupoUsuario form base class.
 *
 * @method GrupoUsuario getObject() Returns the current form's model object
 *
 * @package    encuesta-doctrine
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseGrupoUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'etiqueta'        => new sfWidgetFormInputText(),
      'id_organizacion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organizacion'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'etiqueta'        => new sfValidatorString(array('max_length' => 255)),
      'id_organizacion' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organizacion'))),
    ));

    $this->widgetSchema->setNameFormat('grupo_usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GrupoUsuario';
  }

}
