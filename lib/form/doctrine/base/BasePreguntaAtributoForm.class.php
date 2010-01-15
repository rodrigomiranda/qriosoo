<?php

/**
 * PreguntaAtributo form base class.
 *
 * @method PreguntaAtributo getObject() Returns the current form's model object
 *
 * @package    encuesta-doctrine
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BasePreguntaAtributoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'id_tipo_atributo' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoAtributo'), 'add_empty' => false)),
      'id_pregunta'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pregunta'), 'add_empty' => false)),
      'valor'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_tipo_atributo' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoAtributo'))),
      'id_pregunta'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pregunta'))),
      'valor'            => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('pregunta_atributo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PreguntaAtributo';
  }

}
