<?php

/**
 * Pregunta form base class.
 *
 * @method Pregunta getObject() Returns the current form's model object
 *
 * @package    encuesta-doctrine
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BasePreguntaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'etiqueta'           => new sfWidgetFormInputText(),
      'pregunta'           => new sfWidgetFormTextarea(),
      'orden'              => new sfWidgetFormInputText(),
      'fecha_modificacion' => new sfWidgetFormDateTime(),
      'obligatoria'        => new sfWidgetFormInputText(),
      'id_grupo_pregunta'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GrupoPregunta'), 'add_empty' => false)),
      'id_tipo_pregunta'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoPregunta'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'etiqueta'           => new sfValidatorString(array('max_length' => 255)),
      'pregunta'           => new sfValidatorString(),
      'orden'              => new sfValidatorInteger(),
      'fecha_modificacion' => new sfValidatorDateTime(),
      'obligatoria'        => new sfValidatorInteger(),
      'id_grupo_pregunta'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('GrupoPregunta'))),
      'id_tipo_pregunta'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoPregunta'))),
    ));

    $this->widgetSchema->setNameFormat('pregunta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pregunta';
  }

}
