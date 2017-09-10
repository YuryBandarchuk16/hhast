<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<100e91b6d558ff0e0d3a4bf65c496f75>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class TypeParameters extends EditableSyntax {

  private EditableSyntax $_left_angle;
  private EditableSyntax $_parameters;
  private EditableSyntax $_right_angle;

  public function __construct(
    EditableSyntax $left_angle,
    EditableSyntax $parameters,
    EditableSyntax $right_angle,
  ) {
    parent::__construct('type_parameters');
    $this->_left_angle = $left_angle;
    $this->_parameters = $parameters;
    $this->_right_angle = $right_angle;
  }

  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $left_angle = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['type_parameters_left_angle'],
      $position,
      $source,
    );
    $position += $left_angle->width();
    $parameters = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['type_parameters_parameters'],
      $position,
      $source,
    );
    $position += $parameters->width();
    $right_angle = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['type_parameters_right_angle'],
      $position,
      $source,
    );
    $position += $right_angle->width();
    return new self($left_angle, $parameters, $right_angle);
  }

  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'left_angle' => $this->_left_angle;
    yield 'parameters' => $this->_parameters;
    yield 'right_angle' => $this->_right_angle;
  }

  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $left_angle = $this->_left_angle->rewrite($rewriter, $parents);
    $parameters = $this->_parameters->rewrite($rewriter, $parents);
    $right_angle = $this->_right_angle->rewrite($rewriter, $parents);
    if (
      $left_angle === $this->_left_angle &&
      $parameters === $this->_parameters &&
      $right_angle === $this->_right_angle
    ) {
      return $this;
    }
    return new self($left_angle, $parameters, $right_angle);
  }

  public function left_angle(): LessThanToken {
    return $this->left_anglex();
  }

  public function left_anglex(): LessThanToken {
    return TypeAssert::isInstanceOf(LessThanToken::class, $this->_left_angle);
  }

  public function raw_left_angle(): EditableSyntax {
    return $this->_left_angle;
  }

  public function with_left_angle(EditableSyntax $value): this {
    return new self($value, $this->_parameters, $this->_right_angle);
  }

  public function parameters(): EditableList {
    return $this->parametersx();
  }

  public function parametersx(): EditableList {
    return TypeAssert::isInstanceOf(EditableList::class, $this->_parameters);
  }

  public function raw_parameters(): EditableSyntax {
    return $this->_parameters;
  }

  public function with_parameters(EditableSyntax $value): this {
    return new self($this->_left_angle, $value, $this->_right_angle);
  }

  public function right_angle(): GreaterThanToken {
    return $this->right_anglex();
  }

  public function right_anglex(): GreaterThanToken {
    return TypeAssert::isInstanceOf(GreaterThanToken::class, $this->_right_angle);
  }

  public function raw_right_angle(): EditableSyntax {
    return $this->_right_angle;
  }

  public function with_right_angle(EditableSyntax $value): this {
    return new self($this->_left_angle, $this->_parameters, $value);
  }
}