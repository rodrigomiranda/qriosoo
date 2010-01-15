<?php

/**
 * PreguntaRespuesta form base class.
 *
 * @method PreguntaRespuesta getObject() Returns the current form's model object
 *
 * @package    encuesta-doctrine
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BasePreguntaRespuestaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'respuesta'     => new sfWidgetFormTextarea(),
      'valor_default' => new sfWidgetFormInputText(),
      'orden'         => new sfWidgetFormInputText(),
      'id_pregunta'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pregunta'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'respuesta'     => new sfValidatorString(),
      'valor_default' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'orden'         => new sfValidatorInteger(array('required' => false)),
      'id_pregunta'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pregunta'))),
    ));

    $this->widgetSchema->setNameFormat('pregunta_respuesta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PreguntaRespuesta';
  }

}
