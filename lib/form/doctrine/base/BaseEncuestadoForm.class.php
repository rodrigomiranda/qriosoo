<?php

/**
 * Encuestado form base class.
 *
 * @method Encuestado getObject() Returns the current form's model object
 *
 * @package    encuesta-doctrine
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseEncuestadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'login'           => new sfWidgetFormInputText(),
      'password'        => new sfWidgetFormInputText(),
      'nombre_completo' => new sfWidgetFormInputText(),
      'correo'          => new sfWidgetFormInputText(),
      'id_encuesta'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuesta'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'login'           => new sfValidatorString(array('max_length' => 40)),
      'password'        => new sfValidatorString(array('max_length' => 40)),
      'nombre_completo' => new sfValidatorString(array('max_length' => 255)),
      'correo'          => new sfValidatorString(array('max_length' => 255)),
      'id_encuesta'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Encuesta'))),
    ));

    $this->widgetSchema->setNameFormat('encuestado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Encuestado';
  }

}
