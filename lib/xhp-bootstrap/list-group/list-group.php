<?hh

final class :bootstrap:list-group extends :bootstrap:base {

  attribute :div;

  children (:bootstrap:list-group-item+);

  protected function compose(): :xhp {
    $ret = <div>{$this->getChildren()}</div>;
    $ret->addClass('list-group');
    return $ret;
  }

  <<ExampleTitle('Basic usage')>>
  public static function __example1() {
    return
      <bootstrap:list-group>
        <bootstrap:list-group-item>1</bootstrap:list-group-item>
        <bootstrap:list-group-item>2</bootstrap:list-group-item>
        <bootstrap:list-group-item>3</bootstrap:list-group-item>
      </bootstrap:list-group>;
  }

  <<ExampleTitle('Linked items')>>
  public static function __example2() {
    return
      <bootstrap:list-group>
        <bootstrap:list-group-item href="#" active={true}>
          Cras justo odio
        </bootstrap:list-group-item>
        <bootstrap:list-group-item href="#">
          Dapibus ac facilisis in
        </bootstrap:list-group-item>
        <bootstrap:list-group-item href="#">
          Morbi leo risus
        </bootstrap:list-group-item>
        <bootstrap:list-group-item href="#">
          Porta ac consectetur ac
        </bootstrap:list-group-item>
      </bootstrap:list-group>;
  }

  <<ExampleTitle('Contextual classes')>>
  public static function __example3() {
    return
      <bootstrap:list-group>
        <bootstrap:list-group-item href="#" use="success">
          Cras justo odio
        </bootstrap:list-group-item>
        <bootstrap:list-group-item href="#" use="info">
          Dapibus ac facilisis in
        </bootstrap:list-group-item>
        <bootstrap:list-group-item href="#" use="warning">
          Morbi leo risus
        </bootstrap:list-group-item>
        <bootstrap:list-group-item href="#" use="danger">
          Porta ac consectetur ac
        </bootstrap:list-group-item>
      </bootstrap:list-group>;
  }

  <<ExampleTitle('Badges')>>
  public static function __example4() {
    return
      <bootstrap:list-group>
        <bootstrap:list-group-item href="#" active={true}>
          <bootstrap:badge> 1 </bootstrap:badge>
          Cras justo odio
        </bootstrap:list-group-item>
        <bootstrap:list-group-item href="#">
          Dapibus ac facilisis in
          <bootstrap:badge> 2 </bootstrap:badge>
        </bootstrap:list-group-item>
        <bootstrap:list-group-item href="#">
          Morbi leo risus
          <bootstrap:badge> 3 </bootstrap:badge>
        </bootstrap:list-group-item>
        <bootstrap:list-group-item href="#">
          Porta ac consectetur ac
          <bootstrap:badge> 4 </bootstrap:badge>
        </bootstrap:list-group-item>
      </bootstrap:list-group>;
  }

  <<ExampleTitle('Custom content')>>
  public static function __example5() {
    return
      <bootstrap:list-group>
        <bootstrap:list-group-item href="#" active={true}>
          <h4 class="list-group-item-heading">List group item heading</h4>
          <p class="list-group-item-text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </p>
        </bootstrap:list-group-item>
        <bootstrap:list-group-item>
          <h4 class="list-group-item-heading">List group item heading</h4>
          <p class="list-group-item-text">
            when an unknown printer took a galley of type and scrambled it to
            make a type specimen book. It has survived not only five centuries,
            but also the leap into electronic typesetting, remaining essentially
          </p>
        </bootstrap:list-group-item>
      </bootstrap:list-group>;
  }

}
