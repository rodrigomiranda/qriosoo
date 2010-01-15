<?php

/**
 * GrupoUsuario filter form base class.
 *
 * @package    encuesta-doctrine
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseGrupoUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'etiqueta'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_organizacion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organizacion'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'etiqueta'        => new sfValidatorPass(array('required' => false)),
      'id_organizacion' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Organizacion'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('grupo_usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GrupoUsuario';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'etiqueta'        => 'Text',
      'id_organizacion' => 'ForeignKey',
    );
  }
}
