<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<5518f39f43054300397f1d986fe1e02e>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

final class TypeConstDeclaration extends EditableSyntax {

  private EditableSyntax $_abstract;
  private EditableSyntax $_keyword;
  private EditableSyntax $_type_keyword;
  private EditableSyntax $_name;
  private EditableSyntax $_type_constraint;
  private EditableSyntax $_equal;
  private EditableSyntax $_type_specifier;
  private EditableSyntax $_semicolon;

  public function __construct(
    EditableSyntax $abstract,
    EditableSyntax $keyword,
    EditableSyntax $type_keyword,
    EditableSyntax $name,
    EditableSyntax $type_constraint,
    EditableSyntax $equal,
    EditableSyntax $type_specifier,
    EditableSyntax $semicolon,
  ) {
    parent::__construct('type_const_declaration');
    $this->_abstract = $abstract;
    $this->_keyword = $keyword;
    $this->_type_keyword = $type_keyword;
    $this->_name = $name;
    $this->_type_constraint = $type_constraint;
    $this->_equal = $equal;
    $this->_type_specifier = $type_specifier;
    $this->_semicolon = $semicolon;
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $abstract = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_abstract'],
      $position,
      $source,
    );
    $position += $abstract->getWidth();
    $keyword = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_keyword'],
      $position,
      $source,
    );
    $position += $keyword->getWidth();
    $type_keyword = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_type_keyword'],
      $position,
      $source,
    );
    $position += $type_keyword->getWidth();
    $name = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_name'],
      $position,
      $source,
    );
    $position += $name->getWidth();
    $type_constraint = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_type_constraint'],
      $position,
      $source,
    );
    $position += $type_constraint->getWidth();
    $equal = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_equal'],
      $position,
      $source,
    );
    $position += $equal->getWidth();
    $type_specifier = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_type_specifier'],
      $position,
      $source,
    );
    $position += $type_specifier->getWidth();
    $semicolon = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_semicolon'],
      $position,
      $source,
    );
    $position += $semicolon->getWidth();
    return new self(
      $abstract,
      $keyword,
      $type_keyword,
      $name,
      $type_constraint,
      $equal,
      $type_specifier,
      $semicolon,
    );
  }

  <<__Override>>
  public function getChildren(): KeyedTraversable<string, EditableSyntax> {
    yield 'abstract' => $this->_abstract;
    yield 'keyword' => $this->_keyword;
    yield 'type_keyword' => $this->_type_keyword;
    yield 'name' => $this->_name;
    yield 'type_constraint' => $this->_type_constraint;
    yield 'equal' => $this->_equal;
    yield 'type_specifier' => $this->_type_specifier;
    yield 'semicolon' => $this->_semicolon;
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $abstract = $this->_abstract->rewrite($rewriter, $parents);
    $keyword = $this->_keyword->rewrite($rewriter, $parents);
    $type_keyword = $this->_type_keyword->rewrite($rewriter, $parents);
    $name = $this->_name->rewrite($rewriter, $parents);
    $type_constraint = $this->_type_constraint->rewrite($rewriter, $parents);
    $equal = $this->_equal->rewrite($rewriter, $parents);
    $type_specifier = $this->_type_specifier->rewrite($rewriter, $parents);
    $semicolon = $this->_semicolon->rewrite($rewriter, $parents);
    if (
      $abstract === $this->_abstract &&
      $keyword === $this->_keyword &&
      $type_keyword === $this->_type_keyword &&
      $name === $this->_name &&
      $type_constraint === $this->_type_constraint &&
      $equal === $this->_equal &&
      $type_specifier === $this->_type_specifier &&
      $semicolon === $this->_semicolon
    ) {
      return $this;
    }
    return new self(
      $abstract,
      $keyword,
      $type_keyword,
      $name,
      $type_constraint,
      $equal,
      $type_specifier,
      $semicolon,
    );
  }

  public function getAbstractUNTYPED(): EditableSyntax {
    return $this->_abstract;
  }

  public function withAbstract(EditableSyntax $value): this {
    if ($value === $this->_abstract) {
      return $this;
    }
    return new self(
      $value,
      $this->_keyword,
      $this->_type_keyword,
      $this->_name,
      $this->_type_constraint,
      $this->_equal,
      $this->_type_specifier,
      $this->_semicolon,
    );
  }

  public function hasAbstract(): bool {
    return !$this->_abstract->isMissing();
  }

  /**
   * @returns Missing | AbstractToken
   */
  public function getAbstract(): ?AbstractToken {
    if ($this->_abstract->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(AbstractToken::class, $this->_abstract);
  }

  /**
   * @returns AbstractToken
   */
  public function getAbstractx(): AbstractToken {
    return TypeAssert\instance_of(AbstractToken::class, $this->_abstract);
  }

  public function getKeywordUNTYPED(): EditableSyntax {
    return $this->_keyword;
  }

  public function withKeyword(EditableSyntax $value): this {
    if ($value === $this->_keyword) {
      return $this;
    }
    return new self(
      $this->_abstract,
      $value,
      $this->_type_keyword,
      $this->_name,
      $this->_type_constraint,
      $this->_equal,
      $this->_type_specifier,
      $this->_semicolon,
    );
  }

  public function hasKeyword(): bool {
    return !$this->_keyword->isMissing();
  }

  /**
   * @returns ConstToken
   */
  public function getKeyword(): ConstToken {
    return TypeAssert\instance_of(ConstToken::class, $this->_keyword);
  }

  public function getTypeKeywordUNTYPED(): EditableSyntax {
    return $this->_type_keyword;
  }

  public function withTypeKeyword(EditableSyntax $value): this {
    if ($value === $this->_type_keyword) {
      return $this;
    }
    return new self(
      $this->_abstract,
      $this->_keyword,
      $value,
      $this->_name,
      $this->_type_constraint,
      $this->_equal,
      $this->_type_specifier,
      $this->_semicolon,
    );
  }

  public function hasTypeKeyword(): bool {
    return !$this->_type_keyword->isMissing();
  }

  /**
   * @returns TypeToken
   */
  public function getTypeKeyword(): TypeToken {
    return TypeAssert\instance_of(TypeToken::class, $this->_type_keyword);
  }

  public function getNameUNTYPED(): EditableSyntax {
    return $this->_name;
  }

  public function withName(EditableSyntax $value): this {
    if ($value === $this->_name) {
      return $this;
    }
    return new self(
      $this->_abstract,
      $this->_keyword,
      $this->_type_keyword,
      $value,
      $this->_type_constraint,
      $this->_equal,
      $this->_type_specifier,
      $this->_semicolon,
    );
  }

  public function hasName(): bool {
    return !$this->_name->isMissing();
  }

  /**
   * @returns NameToken | Missing
   */
  public function getName(): ?NameToken {
    if ($this->_name->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(NameToken::class, $this->_name);
  }

  /**
   * @returns NameToken
   */
  public function getNamex(): NameToken {
    return TypeAssert\instance_of(NameToken::class, $this->_name);
  }

  public function getTypeConstraintUNTYPED(): EditableSyntax {
    return $this->_type_constraint;
  }

  public function withTypeConstraint(EditableSyntax $value): this {
    if ($value === $this->_type_constraint) {
      return $this;
    }
    return new self(
      $this->_abstract,
      $this->_keyword,
      $this->_type_keyword,
      $this->_name,
      $value,
      $this->_equal,
      $this->_type_specifier,
      $this->_semicolon,
    );
  }

  public function hasTypeConstraint(): bool {
    return !$this->_type_constraint->isMissing();
  }

  /**
   * @returns Missing | TypeConstraint
   */
  public function getTypeConstraint(): ?TypeConstraint {
    if ($this->_type_constraint->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(TypeConstraint::class, $this->_type_constraint);
  }

  /**
   * @returns TypeConstraint
   */
  public function getTypeConstraintx(): TypeConstraint {
    return
      TypeAssert\instance_of(TypeConstraint::class, $this->_type_constraint);
  }

  public function getEqualUNTYPED(): EditableSyntax {
    return $this->_equal;
  }

  public function withEqual(EditableSyntax $value): this {
    if ($value === $this->_equal) {
      return $this;
    }
    return new self(
      $this->_abstract,
      $this->_keyword,
      $this->_type_keyword,
      $this->_name,
      $this->_type_constraint,
      $value,
      $this->_type_specifier,
      $this->_semicolon,
    );
  }

  public function hasEqual(): bool {
    return !$this->_equal->isMissing();
  }

  /**
   * @returns EqualToken | Missing
   */
  public function getEqual(): ?EqualToken {
    if ($this->_equal->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EqualToken::class, $this->_equal);
  }

  /**
   * @returns EqualToken
   */
  public function getEqualx(): EqualToken {
    return TypeAssert\instance_of(EqualToken::class, $this->_equal);
  }

  public function getTypeSpecifierUNTYPED(): EditableSyntax {
    return $this->_type_specifier;
  }

  public function withTypeSpecifier(EditableSyntax $value): this {
    if ($value === $this->_type_specifier) {
      return $this;
    }
    return new self(
      $this->_abstract,
      $this->_keyword,
      $this->_type_keyword,
      $this->_name,
      $this->_type_constraint,
      $this->_equal,
      $value,
      $this->_semicolon,
    );
  }

  public function hasTypeSpecifier(): bool {
    return !$this->_type_specifier->isMissing();
  }

  /**
   * @returns DictionaryTypeSpecifier | KeysetTypeSpecifier |
   * VectorTypeSpecifier | TypeConstant | Missing | SimpleTypeSpecifier |
   * ClosureTypeSpecifier | ShapeTypeSpecifier | NullableTypeSpecifier |
   * GenericTypeSpecifier | TupleTypeSpecifier
   */
  public function getTypeSpecifier(): EditableSyntax {
    return
      TypeAssert\instance_of(EditableSyntax::class, $this->_type_specifier);
  }

  public function getSemicolonUNTYPED(): EditableSyntax {
    return $this->_semicolon;
  }

  public function withSemicolon(EditableSyntax $value): this {
    if ($value === $this->_semicolon) {
      return $this;
    }
    return new self(
      $this->_abstract,
      $this->_keyword,
      $this->_type_keyword,
      $this->_name,
      $this->_type_constraint,
      $this->_equal,
      $this->_type_specifier,
      $value,
    );
  }

  public function hasSemicolon(): bool {
    return !$this->_semicolon->isMissing();
  }

  /**
   * @returns SemicolonToken | Missing
   */
  public function getSemicolon(): ?SemicolonToken {
    if ($this->_semicolon->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(SemicolonToken::class, $this->_semicolon);
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolonx(): SemicolonToken {
    return TypeAssert\instance_of(SemicolonToken::class, $this->_semicolon);
  }
}
