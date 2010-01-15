<?php

/**
 * PreguntaColumna form base class.
 *
 * @method PreguntaColumna getObject() Returns the current form's model object
 *
 * @package    encuesta-doctrine
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BasePreguntaColumnaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'etiqueta'    => new sfWidgetFormInputText(),
      'orden'       => new sfWidgetFormInputText(),
      'opciones'    => new sfWidgetFormTextarea(),
      'id_pregunta' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pregunta'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'etiqueta'    => new sfValidatorString(array('max_length' => 255)),
      'orden'       => new sfValidatorInteger(array('required' => false)),
      'opciones'    => new sfValidatorString(array('required' => false)),
      'id_pregunta' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pregunta'))),
    ));

    $this->widgetSchema->setNameFormat('pregunta_columna[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PreguntaColumna';
  }

}
