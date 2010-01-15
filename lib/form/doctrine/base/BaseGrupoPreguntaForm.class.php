<?php

/**
 * GrupoPregunta form base class.
 *
 * @method GrupoPregunta getObject() Returns the current form's model object
 *
 * @package    encuesta-doctrine
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseGrupoPreguntaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'etiqueta'    => new sfWidgetFormInputText(),
      'descripcion' => new sfWidgetFormTextarea(),
      'orden'       => new sfWidgetFormInputText(),
      'id_encuesta' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuesta'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'etiqueta'    => new sfValidatorString(array('max_length' => 255)),
      'descripcion' => new sfValidatorString(),
      'orden'       => new sfValidatorInteger(),
      'id_encuesta' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Encuesta'))),
    ));

    $this->widgetSchema->setNameFormat('grupo_pregunta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GrupoPregunta';
  }

}
