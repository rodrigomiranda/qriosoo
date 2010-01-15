<?php

/**
 * Encuesta form base class.
 *
 * @method Encuesta getObject() Returns the current form's model object
 *
 * @package    encuesta-doctrine
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseEncuestaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'etiqueta'           => new sfWidgetFormInputText(),
      'descripcion'        => new sfWidgetFormTextarea(),
      'bienvenida'         => new sfWidgetFormTextarea(),
      'despedida'          => new sfWidgetFormTextarea(),
      'template'           => new sfWidgetFormInputText(),
      'nombre_responsable' => new sfWidgetFormInputText(),
      'fecha_inicio'       => new sfWidgetFormDate(),
      'fecha_expiracion'   => new sfWidgetFormDate(),
      'id_organizacion'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organizacion'), 'add_empty' => false)),
      'id_tipo_encuesta'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEncuesta'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'etiqueta'           => new sfValidatorString(array('max_length' => 255)),
      'descripcion'        => new sfValidatorString(),
      'bienvenida'         => new sfValidatorString(array('required' => false)),
      'despedida'          => new sfValidatorString(array('required' => false)),
      'template'           => new sfValidatorString(array('max_length' => 255)),
      'nombre_responsable' => new sfValidatorString(array('max_length' => 255)),
      'fecha_inicio'       => new sfValidatorDate(),
      'fecha_expiracion'   => new sfValidatorDate(),
      'id_organizacion'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organizacion'))),
      'id_tipo_encuesta'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEncuesta'))),
    ));

    $this->widgetSchema->setNameFormat('encuesta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Encuesta';
  }

}
