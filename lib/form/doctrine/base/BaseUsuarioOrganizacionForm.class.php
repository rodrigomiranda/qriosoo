<?php

/**
 * UsuarioOrganizacion form base class.
 *
 * @method UsuarioOrganizacion getObject() Returns the current form's model object
 *
 * @package    encuesta-doctrine
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseUsuarioOrganizacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'id_usuario'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => false)),
      'id_organizacion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organizacion'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_usuario'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'))),
      'id_organizacion' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organizacion'))),
    ));

    $this->widgetSchema->setNameFormat('usuario_organizacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsuarioOrganizacion';
  }

}
