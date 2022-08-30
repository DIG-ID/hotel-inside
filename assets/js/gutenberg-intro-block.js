const { registerBlockType } = wp.blocks;

registerBlockType('hotelinside/intro-text', {
  // built-in attributes
  title: 'Intorducing Text',
  description: 'Block to generate the intro text for an article',
  icon: 'formate-image',
  category: 'common',

  // custom attributes
  attributes: {},



  // custom functions

  // built-in functions
  edit() {
    // JSX
    return <div>Hello World</div>;
  },

  save() {}

});