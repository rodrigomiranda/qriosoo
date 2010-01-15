<?php

/**
 * Encuesta filter form base class.
 *
 * @package    encuesta-doctrine
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseEncuestaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'etiqueta'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bienvenida'         => new sfWidgetFormFilterInput(),
      'despedida'          => new sfWidgetFormFilterInput(),
      'template'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre_responsable' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_inicio'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_expiracion'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'id_organizacion'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organizacion'), 'add_empty' => true)),
      'id_tipo_encuesta'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEncuesta'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'etiqueta'           => new sfValidatorPass(array('required' => false)),
      'descripcion'        => new sfValidatorPass(array('required' => false)),
      'bienvenida'         => new sfValidatorPass(array('required' => false)),
      'despedida'          => new sfValidatorPass(array('required' => false)),
      'template'           => new sfValidatorPass(array('required' => false)),
      'nombre_responsable' => new sfValidatorPass(array('required' => false)),
      'fecha_inicio'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fecha_expiracion'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'id_organizacion'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Organizacion'), 'column' => 'id')),
      'id_tipo_encuesta'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoEncuesta'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('encuesta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Encuesta';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'etiqueta'           => 'Text',
      'descripcion'        => 'Text',
      'bienvenida'         => 'Text',
      'despedida'          => 'Text',
      'template'           => 'Text',
      'nombre_responsable' => 'Text',
      'fecha_inicio'       => 'Date',
      'fecha_expiracion'   => 'Date',
      'id_organizacion'    => 'ForeignKey',
      'id_tipo_encuesta'   => 'ForeignKey',
    );
  }
}
