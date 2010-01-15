<?php

/**
 * PreguntaColumnaOpcion form base class.
 *
 * @method PreguntaColumnaOpcion getObject() Returns the current form's model object
 *
 * @package    encuesta-doctrine
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BasePreguntaColumnaOpcionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'etiqueta'            => new sfWidgetFormInputText(),
      'id_pregunta_columna' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PreguntaColumna'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'etiqueta'            => new sfValidatorString(array('max_length' => 255)),
      'id_pregunta_columna' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PreguntaColumna'))),
    ));

    $this->widgetSchema->setNameFormat('pregunta_columna_opcion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PreguntaColumnaOpcion';
  }

}
